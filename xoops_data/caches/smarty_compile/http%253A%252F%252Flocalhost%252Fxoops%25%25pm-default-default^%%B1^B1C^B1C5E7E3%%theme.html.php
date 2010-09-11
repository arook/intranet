<?php /* Smarty version 2.6.26, created on 2010-06-17 17:10:38
         compiled from /Users/kky979899/Documents/workspace_c/xoops/modules/system/class/gui/oxygen/theme.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
	<?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_metas.html", 'smarty_include_vars' => array()));
 ?>
	<?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_scripts.html", 'smarty_include_vars' => array()));
 ?>  
</head>
<body id="<?php echo $this->_tpl_vars['xoops_dirname']; ?>
" class="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
    <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_navbar.html", 'smarty_include_vars' => array()));
 ?>
    <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_menu.html", 'smarty_include_vars' => array()));
 ?>
    <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_toolbar.html", 'smarty_include_vars' => array()));
 ?>
	<div id="containBodyCP"><br />
		<div id="bodyCP">
			<?php if ($this->_tpl_vars['modules']): ?>
				<?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_icons.html", 'smarty_include_vars' => array()));
 ?>
					<table id="xo-index ">
						<tr>
							<td id="xo-modules" class="CPindexOptions"><?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_modules.html", 'smarty_include_vars' => array()));
 ?></td>
							<td id="xo-accordion" class="CPindexOptions"><?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_accordion.html", 'smarty_include_vars' => array()));
 ?></td>
						</tr>
					</table>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['xoops_contents']): ?><div id="xo-content"><?php echo $this->_tpl_vars['xoops_contents']; ?>
</div><?php endif; ?>
		</div>
		<br />
	</div>
	<?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_footer.html", 'smarty_include_vars' => array()));
 ?>
</body>
</html>