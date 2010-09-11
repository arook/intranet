<?php /* Smarty version 2.6.26, created on 2010-06-17 17:08:20
         compiled from db:pm_readpmsg.html */ ?>
<div>
    <h4><?php echo @_PM_PRIVATEMESSAGE; ?>
</h4>
</div><br />
<?php if ($this->_tpl_vars['op'] == out): ?>
    <a href='viewpmsg.php?op=out'><?php echo @_PM_OUTBOX; ?>
</a>&nbsp;
<?php elseif ($this->_tpl_vars['op'] == 'save'): ?>
    <a href='viewpmsg.php?op=save'><?php echo @_PM_SAVEBOX; ?>
</a>&nbsp;
<?php else: ?>
    <a href='viewpmsg.php?op=in'><?php echo @_PM_INBOX; ?>
</a>&nbsp;
<?php endif; ?>

<?php if ($this->_tpl_vars['message']): ?>
    <span style='font-weight:bold;'>&raquo;&raquo;</span>&nbsp;<?php echo $this->_tpl_vars['message']['subject']; ?>
<br />
    <form name="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" id="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" action="<?php echo $this->_tpl_vars['pmform']['action']; ?>
" method="<?php echo $this->_tpl_vars['pmform']['method']; ?>
" <?php echo $this->_tpl_vars['pmform']['extra']; ?>
 >
        <table border='0' cellpadding='4' cellspacing='1' class='outer' width='100%'>
            <tr>
                <th colspan='2'><?php if ($this->_tpl_vars['op'] == out): ?><?php echo @_PM_TO; ?>
<?php else: ?><?php echo @_PM_FROM; ?>
<?php endif; ?></th>
            </tr>
            <tr class='even'>
                <td valign='top'>
                    <?php if (( $this->_tpl_vars['poster'] != false )): ?>
                        <a href='<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['poster']->getVar('uid'); ?>
'><?php echo $this->_tpl_vars['poster']->getVar('uname'); ?>
</a><br />
                        <?php if (( $this->_tpl_vars['poster']->getVar('user_avatar') != "" )): ?>
                            <img src='<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/<?php echo $this->_tpl_vars['poster']->getVar('user_avatar'); ?>
' alt='' /><br />
                        <?php endif; ?>
                        <?php if (( $this->_tpl_vars['poster']->getVar('user_from') != "" )): ?>
                            <?php echo @_PM_FROMC; ?>
<?php echo $this->_tpl_vars['poster']->getVar('user_from'); ?>
<br /><br />
                        <?php endif; ?>
                        <?php if (( $this->_tpl_vars['poster']->isOnline() )): ?>
                            <span style='color:#ee0000;font-weight:bold;'><?php echo @_PM_ONLINE; ?>
</span><br /><br />
                        <?php endif; ?>
                    <?php else: ?>
                        <?php echo $this->_tpl_vars['anonymous']; ?>

                    <?php endif; ?>
                </td>
                <td>
                    <!-- 
                    <img src='<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/subject/<?php echo $this->_tpl_vars['message']['msg_image']; ?>
' alt='' />&nbsp;
                    -->
                    <?php echo @_PM_SENTC; ?>
<?php echo $this->_tpl_vars['message']['msg_time']; ?>

                    <hr />
                    <b><?php echo $this->_tpl_vars['message']['subject']; ?>
</b><br />
                    <br />
                    <?php echo $this->_tpl_vars['message']['msg_text']; ?>
<br />
                    <br />
                </td>
            </tr>
            <tr class='foot'>
                <td width='20%' colspan='2' align='left'>
                    <?php $_from = $this->_tpl_vars['pmform']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
                        <?php echo $this->_tpl_vars['element']['body']; ?>

                    <?php endforeach; endif; unset($_from); ?>
                </td>
            </tr>
            <tr>
                <td colspan='2' align='right'>
                    <?php if (( $this->_tpl_vars['previous'] >= 0 )): ?>
                        <a href='readpmsg.php?start=<?php echo $this->_tpl_vars['previous']; ?>
&amp;total_messages=<?php echo $this->_tpl_vars['total_messages']; ?>
&amp;op=<?php echo $this->_tpl_vars['op']; ?>
'>
                            <?php echo @_PM_PREVIOUS; ?>

                        </a>&nbsp|&nbsp;
                    <?php else: ?>
                        <?php echo @_PM_PREVIOUS; ?>
&nbsp;|&nbsp;
                    <?php endif; ?>
                    <?php if (( $this->_tpl_vars['next'] < $this->_tpl_vars['total_messages'] )): ?>
                        <a href='readpmsg.php?start=<?php echo $this->_tpl_vars['next']; ?>
&amp;total_messages=<?php echo $this->_tpl_vars['total_messages']; ?>
&amp;op=<?php echo $this->_tpl_vars['op']; ?>
'>
                            <?php echo @_PM_NEXT; ?>

                        </a>
                    <?php else: ?>
                        <?php echo @_PM_NEXT; ?>

                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </form>
<?php else: ?>
    <br /><br /><?php echo @_PM_YOUDONTHAVE; ?>

<?php endif; ?>