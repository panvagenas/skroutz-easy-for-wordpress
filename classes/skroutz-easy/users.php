<?php
/**
 * Created by PhpStorm.
 * User: vagenas
 * Date: 22/8/2015
 * Time: 10:54 πμ
 */

namespace skroutz_easy;


class users extends \xd_v141226_dev\users{
	/**
	 * @param array $userInfo
	 * @param string $optionPrefix
	 *
	 * @return $this|null
	 * @throws \xd_v141226_dev\exception
	 */
	public function updateCustomerMeta(Array $userInfo, $optionPrefix = 'map_'){
		if(!$this->has_id()){
			return null;
		}

		foreach ( $userInfo as $skroutzFieldName => $skroutzFieldValue ) {
			if(empty($skroutzFieldValue)){
				continue;
			}

			$optionName = $optionPrefix . $skroutzFieldName;

			if(is_array($skroutzFieldValue)){
				$this->updateCustomerMeta($skroutzFieldValue, $optionName . '_');
				continue;
			}

			if(!array_key_exists($optionName, $this->©option->mapFields)){
				continue;
			}

			$metaKeys = $this->©option->get($optionName);
			$metaKeys = trim($metaKeys);

			$userMetaKeysToUpdate = explode(',', $metaKeys);

			if($userMetaKeysToUpdate){
				foreach ( $userMetaKeysToUpdate as $metaKey ) {
					$metaKey = trim($metaKey);
					if(!empty($metaKey)){
						$this->update_meta($metaKey, $skroutzFieldValue);
					}
				}
			}
		}
		return $this;
	}
}