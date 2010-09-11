<?php /* Smarty version 2.6.26, created on 2010-06-17 17:08:20
         compiled from db:pm_pmlite.html */ ?>
<?php echo $this->_tpl_vars['pmform']['javascript']; ?>

<form name="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" id="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" action="<?php echo $this->_tpl_vars['pmform']['action']; ?>
" method="<?php echo $this->_tpl_vars['pmform']['method']; ?>
" <?php echo $this->_tpl_vars['pmform']['extra']; ?>
 >
    <table width='300' align='center' class='outer'>
        <tr>
            <td class='head' width='30%'><?php echo @_PM_TO; ?>
</td>
            <td class='even'><?php if ($this->_tpl_vars['pmform']['elements']['to_userid']['hidden'] != 1): ?><?php echo $this->_tpl_vars['pmform']['elements']['to_userid']['body']; ?>
<?php endif; ?><?php echo $this->_tpl_vars['to_username']; ?>
</td>
        </tr>
        <tr>
            <td class='head' width='30%'><?php echo @_PM_SUBJECTC; ?>
</td>
            <td class='even'><?php echo $this->_tpl_vars['pmform']['elements']['subject']['body']; ?>
</td>
        </tr>
        <tr valign='top'>
            <td class='head' width='30%'><?php echo @_PM_MESSAGEC; ?>
</td>
            <td class='even'><?php echo $this->_tpl_vars['pmform']['elements']['message']['body']; ?>
</td>
        </tr>
        <tr valign='top'>
            <td class='head' width='30%'><?php echo @_PM_SAVEINOUTBOX; ?>
</td>
            <td class='even'><?php echo $this->_tpl_vars['pmform']['elements']['savecopy']['body']; ?>
</td>
        </tr>
        <tr>
            <td class='head'>&nbsp;</td>
            <td class='even'>
                <?php $_from = $this->_tpl_vars['pmform']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
                    <?php if ($this->_tpl_vars['element']['hidden'] == 1): ?>
                        <?php echo $this->_tpl_vars['element']['body']; ?>

                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
                <?php echo $this->_tpl_vars['pmform']['elements']['submit']['body']; ?>
&nbsp;
                <?php echo $this->_tpl_vars['pmform']['elements']['reset']['body']; ?>
&nbsp;
                <?php echo $this->_tpl_vars['pmform']['elements']['cancel']['body']; ?>

            </td>
        </tr>
    </table>
</form>