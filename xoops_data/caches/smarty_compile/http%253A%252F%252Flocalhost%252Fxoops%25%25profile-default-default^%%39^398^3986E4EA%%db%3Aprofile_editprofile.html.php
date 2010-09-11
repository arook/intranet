<?php /* Smarty version 2.6.26, created on 2010-06-17 17:10:06
         compiled from db:profile_editprofile.html */ ?>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.html", 'smarty_include_vars' => array()));
 ?>


<?php if ($this->_tpl_vars['stop']): ?>
    <div class='errorMsg' style="text-align: left;"><?php echo $this->_tpl_vars['stop']; ?>
</div>
    <br style='clear: both;' />
<?php endif; ?>

<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_form.html", 'smarty_include_vars' => array('xoForm' => $this->_tpl_vars['userinfo'])));
 ?>