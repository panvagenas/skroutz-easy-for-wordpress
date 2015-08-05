<?php
global $xd;

$timer = microtime(TRUE);

for($i = 0; $i < 100; $i++)
{
	$xd->©strings;
	//$xd->instance;
}
echo number_format(microtime(TRUE) - $timer, 5, '.', '');