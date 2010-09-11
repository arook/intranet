<?php /* Smarty version 2.6.26, created on 2010-06-17 17:10:08
         compiled from db:pm_viewpmsg.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:pm_viewpmsg.html', 54, false),)), $this); ?>
<h4 style='text-align:center;'><?php echo @_PM_PRIVATEMESSAGE; ?>
</h4><br />
<div style="float:right; width: 18%; text-align: right;">
    <?php if ($this->_tpl_vars['op'] == 'out'): ?>
        <a href='viewpmsg.php?op=in'><?php echo @_PM_INBOX; ?>
</a> | <a href='viewpmsg.php?op=save'><?php echo @_PM_SAVEBOX; ?>
</a>
    <?php elseif ($this->_tpl_vars['op'] == 'save'): ?>
        <a href='viewpmsg.php?op=in'><?php echo @_PM_INBOX; ?>
</a> | <a href='viewpmsg.php?op=out'><?php echo @_PM_OUTBOX; ?>
</a>
    <?php elseif ($this->_tpl_vars['op'] == 'in'): ?>
        <a href='viewpmsg.php?op=out'><?php echo @_PM_OUTBOX; ?>
</a> | <a href='viewpmsg.php?op=save'><?php echo @_PM_SAVEBOX; ?>
</a>
    <?php endif; ?>
</div>
<div style="float:left; width: 80%;">
    <?php if ($this->_tpl_vars['op'] == 'out'): ?><?php echo @_PM_OUTBOX; ?>

    <?php elseif ($this->_tpl_vars['op'] == 'save'): ?><?php echo @_PM_SAVEBOX; ?>

    <?php else: ?><?php echo @_PM_INBOX; ?>
<?php endif; ?>
</div>
<br />
<br />
<?php if ($this->_tpl_vars['msg']): ?>
    <div class="confirmMsg"><?php echo $this->_tpl_vars['msg']; ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['errormsg']): ?>
    <div class="errorMsg"><?php echo $this->_tpl_vars['errormsg']; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['pagenav']): ?>
    <div style="padding: 5px; float: right; text-align:right;">
    <?php echo $this->_tpl_vars['pagenav']; ?>

    </div>
    <br style="clear: both;" />
<?php endif; ?>

<form name="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" id="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" action="<?php echo $this->_tpl_vars['pmform']['action']; ?>
" method="<?php echo $this->_tpl_vars['pmform']['method']; ?>
" <?php echo $this->_tpl_vars['pmform']['extra']; ?>
 >
    <table border='0' cellspacing='1' cellpadding='4' width='100%' class='outer'>
    
        <tr align='center' valign='middle'>
            <th><input name='allbox' id='allbox' onclick='xoopsCheckAll("<?php echo $this->_tpl_vars['pmform']['name']; ?>
", "allbox");' type='checkbox' value='Check All' /></th>
            <th><img src='<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/download.gif' alt='' border='0' /></th>
            <th>&nbsp;</th>
            <?php if ($this->_tpl_vars['op'] == 'out'): ?>
                <th><?php echo @_PM_TO; ?>
</th>
            <?php else: ?>
                <th><?php echo @_PM_FROM; ?>
</th>
            <?php endif; ?>
            <th><?php echo @_PM_SUBJECT; ?>
</th>
            <th align='center'><?php echo @_PM_DATE; ?>
</th>
        </tr>
        
        <?php if ($this->_tpl_vars['total_messages'] == 0): ?>
            <tr>
                <td class='even' colspan='6' align='center'><?php echo @_PM_YOUDONTHAVE; ?>
</td>
            </tr>
        <?php endif; ?>
        <?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
            <tr align='left' class='<?php echo smarty_function_cycle(array('values' => "odd, even"), $this);?>
'>
                <td valign='top' width='2%' align='center'>
                    <input type='checkbox' id='msg_id_<?php echo $this->_tpl_vars['message']['msg_id']; ?>
' name='msg_id[]' value='<?php echo $this->_tpl_vars['message']['msg_id']; ?>
' />
                </td>
                <?php if ($this->_tpl_vars['message']['read_msg'] == 1): ?>
                    <td valign='top' width='5%' align='center'>&nbsp;</td>
                <?php else: ?>
                    <td valign='top' width='5%' align='center'><img src='images/read.gif' alt='<?php echo @_PM_NOTREAD; ?>
' /></td>
                <?php endif; ?>
                <td valign='top' width='5%' align='center'>
                    <?php if ($this->_tpl_vars['message']['msg_image'] != ""): ?>
                        <img src='<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/subject/<?php echo $this->_tpl_vars['message']['msg_image']; ?>
' alt='' />
                    <?php endif; ?>
                </td>
                <td valign='middle' width='10%'>
                    <?php if ($this->_tpl_vars['message']['postername'] != ""): ?>
                        <a href='<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['message']['posteruid']; ?>
'><?php echo $this->_tpl_vars['message']['postername']; ?>
</a>
                    <?php else: ?>
                        <?php echo $this->_tpl_vars['anonymous']; ?>

                    <?php endif; ?>
                </td>
                <td valign='middle'>
                    <a href='readpmsg.php?msg_id=<?php echo $this->_tpl_vars['message']['msg_id']; ?>
&amp;start=<?php echo $this->_tpl_vars['message']['msg_no']; ?>
&amp;total_messages=<?php echo $this->_tpl_vars['total_messages']; ?>
&amp;op=<?php echo $this->_tpl_vars['op']; ?>
'>
                        <?php echo $this->_tpl_vars['message']['subject']; ?>

                    </a>
                </td>
                <td valign='middle' align='center' width='20%'>
                    <?php echo $this->_tpl_vars['message']['msg_time']; ?>

                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
        <tr class='bg2' align='left'>
            <td colspan='6' align='left'>
                <?php echo $this->_tpl_vars['pmform']['elements']['send']['body']; ?>

                <?php if ($this->_tpl_vars['display']): ?>
                    &nbsp;<?php echo $this->_tpl_vars['pmform']['elements']['move_messages']['body']; ?>

                    &nbsp;<?php echo $this->_tpl_vars['pmform']['elements']['delete_messages']['body']; ?>

                    &nbsp;<?php echo $this->_tpl_vars['pmform']['elements']['empty_messages']['body']; ?>

                <?php endif; ?>
                <?php $_from = $this->_tpl_vars['pmform']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
                    <?php if ($this->_tpl_vars['element']['hidden'] == 1): ?>
                        <?php echo $this->_tpl_vars['element']['body']; ?>

                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </td>
        </tr>
    </table>
</form>
<?php if ($this->_tpl_vars['pagenav']): ?>
<div style="padding: 5px;float: right; text-align:right;">
<?php echo $this->_tpl_vars['pagenav']; ?>

</div>
<?php endif; ?>