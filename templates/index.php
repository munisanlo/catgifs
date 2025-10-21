<?php

declare(strict_types=1);

use OCP\Util;

Util::addScript(OCA\CatGifs\AppInfo\Application::APP_ID, OCA\CatGifs\AppInfo\Application::APP_ID . '-main');
Util::addStyle(OCA\CatGifs\AppInfo\Application::APP_ID, OCA\CatGifs\AppInfo\Application::APP_ID . '-main');

?>

<div id="catgifs"></div>
