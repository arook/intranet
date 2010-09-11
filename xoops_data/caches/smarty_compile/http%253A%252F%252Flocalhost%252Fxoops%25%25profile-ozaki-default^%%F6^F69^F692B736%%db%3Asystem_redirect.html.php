<?php /* Smarty version 2.6.26, created on 2010-06-20 18:04:15
         compiled from db:system_redirect.html */ ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<!-- title and metas -->
<title><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 : <?php endif; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
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
<meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
" />
<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
" />
<meta name="generator" content="XOOPS" />
<?php if ($this->_tpl_vars['url']): ?>
        <meta http-equiv="Refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; url=<?php echo $this->_tpl_vars['url']; ?>
" />
<?php endif; ?>

<!-- Force MSIE without  javascript actived to take the default theme. not conforms to the standards but functional -->
<?php if ($this->_tpl_vars['isMsie']): ?>
    <noscript>
        <meta http-equiv="refresh" content="0; url=<?php echo htmlspecialchars($xoops->buildUrl($_SERVER['REQUEST_URI'], array(
'xoops_theme_select' => 'default',
))); ?>" />
    </noscript>
<?php endif; ?>

<!-- path favicon -->
<link rel="shortcut icon" type="image/ico" href="<?php 
echo 'http://localhost/xoops/themes/ozaki/icons/favicon.ico'; ?>" />
<link rel="icon" type="image/png" href="<?php 
echo 'http://localhost/xoops/themes/ozaki/icons/favicon.png'; ?>" />

<!-- include xoops.js and others via header.php -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>


<!-- Xoops style sheet -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://localhost/xoops/xoops.css'; ?>" />

<!-- Theme style sheets -->
<link rel="stylesheet" type="text/css" media="screen" title="Color" href="<?php 
echo 'http://localhost/xoops/themes/ozaki/style.css'; ?>" />

</head>
<body id="xo-siteclosed">
<div id="xo-wrapper" class="container center">
    <div id="xo-redirect">
        <div class="message">
            <?php echo $this->_tpl_vars['message']; ?>

            <br />
            <img src="<?php 
echo 'http://localhost/xoops/themes/ozaki/icons/ajax_indicator_01.gif'; ?>" alt="<?php echo $this->_tpl_vars['message']; ?>
"/>
        </div>
        <div class="notreload">
            <?php echo $this->_tpl_vars['lang_ifnotreload']; ?>

        </div>
        <?php if ($this->_tpl_vars['xoops_logdump'] != ''): ?><div><?php echo $this->_tpl_vars['xoops_logdump']; ?>
</div><?php endif; ?>
    </div>
</div>

</body>
</html>