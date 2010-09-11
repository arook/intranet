<?php /* Smarty version 2.6.26, created on 2010-06-17 17:08:21
         compiled from db:profile_admin_steplist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:profile_admin_steplist.html', 8, false),)), $this); ?>
<div><a href="step.php?op=new"><?php echo @_ADD; ?>
 <?php echo @_PROFILE_AM_STEP; ?>
</a></div>
<table>
    <th><?php echo @_PROFILE_AM_STEPNAME; ?>
</th>
    <th><?php echo @_PROFILE_AM_STEPORDER; ?>
</th>
    <th><?php echo @_PROFILE_AM_STEPSAVE; ?>
</th>
    <th></th>
    <?php $_from = $this->_tpl_vars['steps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['step']):
?>
        <tr class="<?php echo smarty_function_cycle(array('values' => 'odd, even'), $this);?>
">
            <td><?php echo $this->_tpl_vars['step']['step_name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['step']['step_order']; ?>
</td>
            <td><?php if ($this->_tpl_vars['step']['step_save'] == 1): ?><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/profile/images/yes.png" alt="<?php echo @_YES; ?>
" /><?php else: ?><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/profile/images/no.png" alt="<?php echo @_NO; ?>
" /><?php endif; ?></td>
            <td>
                <a href="step.php?id=<?php echo $this->_tpl_vars['step']['step_id']; ?>
" title="<?php echo @_EDIT; ?>
"><?php echo @_EDIT; ?>
</a>
                &nbsp;<a href="step.php?op=delete&amp;id=<?php echo $this->_tpl_vars['step']['step_id']; ?>
" title="<?php echo @_DELETE; ?>
"><?php echo @_DELETE; ?>
</a>
            </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>