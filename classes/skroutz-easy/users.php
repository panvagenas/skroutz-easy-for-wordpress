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
	 * @param \stdClass $userInfo
	 * @param \xd_v141226_dev\users $user
	 *
	 * @return \xd_v141226_dev\users
	 * @throws \xd_v141226_dev\exception
	 */
	public function updateCustomerMeta(\stdClass $userInfo, \xd_v141226_dev\users $user){
		foreach ( $this->©option->mapFields as $fieldName => $defaultValue ) {
			if(!isset($userInfo->{$fieldName})){
				continue;
			}
			$fieldValue = $this->©option->get($fieldName);
			$fieldValue = trim($fieldValue);
			$userMetaKeysToUpdate = explode(',', $fieldValue);
			if($userMetaKeysToUpdate){
				foreach ( $userMetaKeysToUpdate as $metaKey ) {
					$metaKey = trim($metaKey);
					if(!empty($metaKey)){
						$user->update_meta($metaKey, $userInfo->{$fieldName});
					}
				}
			}
		}
		return $user;
	}
}