<?php /* Smarty version 2.6.26, created on 2010-06-19 22:10:45
         compiled from /Users/kky979899/Documents/workspace_c/xoops/modules/system/class/gui/oxygen/xotpl/xo_metas.html */ ?>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<!-- title and metas -->
<title><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 : <?php endif; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
" />
<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
" />
<meta name="author" content="voltan"/>
<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
" />
<meta name="generator" content="Bluefish 1.0.7"/>
<?php if ($this->_tpl_vars['url']): ?>
	<meta http-equiv="Refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; url=<?php echo $this->_tpl_vars['url']; ?>
" />
<?php endif; ?>

<!-- Rss -->
<link rel="alternate" type="application/rss+xml" title="" href="<?php echo 'http://localhost/xoops/backend.php'; ?>" />

<!-- path favicon -->
<link rel="shortcut icon" type="image/ico" href="<?php echo 'http://localhost/xoops/favicon.ico'; ?>" />

<!-- Xoops style sheet -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://localhost/xoops/xoops.css'; ?>" />

<!-- customized header contents -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>