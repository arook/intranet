<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

/**
 * Xoops Closed Site
 *
 * Temporary solution for "site closed" status
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         http://www.fsf.org/copyleft/gpl.html GNU public license
 * @package         kernel
 * @subpackage      Xoop Forms class
 * @since           2.0.17
 * @author          Taiwen Jiang <phppp@users.sourceforge.net>
 * @author          John Neill <catzwolf@xoops.org>
 * @version         $Id: theme.php 892 2007-07-28 09:35:49Z phppp $
 */
defined('XOOPS_ROOT_PATH') or die('Restricted access');

global $xoopsConfig, $xoopsUser;

$allowed = false;
if (is_object($xoopsUser)) {
    foreach ($xoopsUser->getGroups() as $group) {
        if (in_array($group, $xoopsConfig['closesite_okgrp']) || XOOPS_GROUP_ADMIN == $group) {
            $allowed = true;
            break;
        }
    }
} else if (!empty($_POST['xoops_login'])) {
    include_once $GLOBALS['xoops']->path('include/checklogin.php');
    exit();
}

if (!$allowed) {
    require_once $GLOBALS['xoops']->path('class/template.php');
    require_once $GLOBALS['xoops']->path('class/theme.php');
    $xoopsThemeFactory = null;
    $xoopsThemeFactory = new xos_opal_ThemeFactory();
    $xoopsThemeFactory->allowedThemes = $xoopsConfig['theme_set_allowed'];
    $xoopsThemeFactory->defaultTheme = $xoopsConfig['theme_set'];
    $xoTheme =& $xoopsThemeFactory->createInstance(array(
        'plugins' => array()));
    $xoTheme->addScript('/include/xoops.js', array(
        'type' => 'text/javascript'));
    $xoopsTpl =& $xoTheme->template;
    $xoopsTpl->assign(array(
        'xoops_theme' => $xoopsConfig['theme_set'] ,
        'xoops_imageurl' => XOOPS_THEME_URL . '/' . $xoopsConfig['theme_set'] . '/' ,
        'xoops_themecss' => xoops_getcss($xoopsConfig['theme_set']) ,
        'xoops_requesturi' => htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES) ,
        'xoops_sitename' => htmlspecialchars($xoopsConfig['sitename'], ENT_QUOTES) ,
        'xoops_slogan' => htmlspecialchars($xoopsConfig['slogan'], ENT_QUOTES) ,
        'xoops_dirname' => @$xoopsModule ? $xoopsModule->getVar('dirname') : 'system' ,
        'xoops_banner' => $xoopsConfig['banners'] ? xoops_getbanner() : '&nbsp;' ,
        'xoops_pagetitle' => isset($xoopsModule) && is_object($xoopsModule) ? $xoopsModule->getVar('name') : htmlspecialchars($xoopsConfig['slogan'], ENT_QUOTES) ,
        'lang_login' => _LOGIN ,
        'lang_username' => _USERNAME ,
        'lang_password' => _PASSWORD ,
        'lang_siteclosemsg' => $xoopsConfig['closesite_text']));
    $config_handler =& xoops_gethandler('config');
    $criteria = new CriteriaCompo(new Criteria('conf_modid', 0));
    $criteria->add(new Criteria('conf_catid', XOOPS_CONF_METAFOOTER));
    $config = $config_handler->getConfigs($criteria, true);
    foreach (array_keys($config) as $i) {
        $name = $config[$i]->getVar('conf_name', 'n');
        $value = $config[$i]->getVar('conf_value', 'n');
        if (substr($name, 0, 5) == 'meta_') {
            $xoopsTpl->assign("xoops_$name", htmlspecialchars($value, ENT_QUOTES));
        } else {
            // prefix each tag with 'xoops_'
            $xoopsTpl->assign("xoops_$name", $value);
        }
    }
    $xoopsTpl->debugging = false;
    $xoopsTpl->debugging_ctrl = 'none';
    $xoopsTpl->caching = 0;
    $xoopsTpl->display('db:system_siteclosed.html');
    exit();
}
unset($allowed, $group);

return true;

?>