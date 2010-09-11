<?php /* Smarty version 2.6.26, created on 2010-06-17 17:08:20
         compiled from db:profile_search.html */ ?>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.html", 'smarty_include_vars' => array()));
 ?>
<div>( <?php echo $this->_tpl_vars['total_users']; ?>
 )</div>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_form.html", 'smarty_include_vars' => array('xoForm' => $this->_tpl_vars['searchform'])));
 ?>