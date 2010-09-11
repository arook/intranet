<?php /* Smarty version 2.6.26, created on 2010-06-17 17:08:20
         compiled from db:profile_admin_categorylist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:profile_admin_categorylist.html', 10, false),)), $this); ?>
<div><a href="category.php?op=new"><?php echo @_ADD; ?>
 <?php echo @_PROFILE_AM_CATEGORY; ?>
</a></div>
<table>
    <tr>
    <th><?php echo @_PROFILE_AM_TITLE; ?>
</th>
    <th><?php echo @_PROFILE_AM_DESCRIPTION; ?>
</th>
    <th><?php echo @_PROFILE_AM_WEIGHT; ?>
</th>
    <th></th>
    </tr>
    <?php $_from = $this->_tpl_vars['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['category']):
?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'odd, even'), $this);?>
">
            <td><?php echo $this->_tpl_vars['category']['cat_title']; ?>
</td>
            <td><?php echo $this->_tpl_vars['category']['cat_description']; ?>
</td>
            <td><?php echo $this->_tpl_vars['category']['cat_weight']; ?>
</td>
            <td>
                <a href="category.php?id=<?php echo $this->_tpl_vars['category']['cat_id']; ?>
" title="<?php echo @_EDIT; ?>
"><?php echo @_EDIT; ?>
</a>
                &nbsp;<a href="category.php?op=delete&amp;id=<?php echo $this->_tpl_vars['category']['cat_id']; ?>
" title="<?php echo @_DELETE; ?>
"><?php echo @_DELETE; ?>
</a>
            </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>