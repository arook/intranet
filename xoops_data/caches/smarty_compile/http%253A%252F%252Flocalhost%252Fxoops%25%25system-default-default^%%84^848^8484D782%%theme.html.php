<?php /* Smarty version 2.6.26, created on 2010-06-19 22:01:07
         compiled from /Users/kky979899/Documents/workspace_c/xoops/modules/system/class/gui/legacy/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
    <!-- Assign Theme name -->
    <?php $this->assign('theme_name', $this->_tpl_vars['xoTheme']->folderName); ?>
    
    <!-- Assign Theme path -->
    <?php $this->assign('theme_path', $this->_tpl_vars['xoTheme']->path); ?>

    <!-- Title and meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
    <meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
    <meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
    <title><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 - <?php endif; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
    <meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
" />
    <meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
" />
    <meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
" />
    <meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
" />
    <meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
" />
    <meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
" />
    <meta name="generator" content="XOOPS" />

    <!-- Rss -->
    <link rel="alternate" type="application/rss+xml" title="" href="<?php echo 'http://localhost/xoops/backend.php'; ?>" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" />

    <!-- customized header contents -->
    <?php echo $this->_tpl_vars['xoops_module_header']; ?>

</head>
<body id="<?php echo $this->_tpl_vars['xoops_dirname']; ?>
" class="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<?php echo $this->_tpl_vars['xoops_contents']; ?>

</body>
</html>