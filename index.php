<?php
/**
 * Z-Blog with PHP
 * @author
 * @copyright (C) RainbowSoft Studio
 * @version
 */

require 'zb_system/function/c_system_base.php';

$zbp->RedirectInstall();
$zbp->CheckGzip();
$zbp->Load();
$zbp->RedirectPermanentDomain();
$zbp->CheckSiteClosed();

foreach ($GLOBALS['hooks']['Filter_Plugin_Index_Begin'] as $fpname => &$fpsignal) {
	$fpname();

}

ViewIndex();

foreach ($GLOBALS['hooks']['Filter_Plugin_Index_End'] as $fpname => &$fpsignal) {
	$fpname();
}

RunTime();