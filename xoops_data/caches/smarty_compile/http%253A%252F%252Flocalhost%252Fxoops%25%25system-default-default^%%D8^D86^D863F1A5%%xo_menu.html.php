<?php /* Smarty version 2.6.26, created on 2010-06-17 16:53:56
         compiled from /Users/kky979899/Documents/workspace_c/xoops/modules/system/class/gui/oxygen/xotpl/xo_menu.html */ ?>
<div id="navbarCP">
    <!-- start menu -->
    <ul class="menu" id="menu">
        <?php $_from = $this->_tpl_vars['navitems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        <li>
            <a href="<?php echo $this->_tpl_vars['item']['link']; ?>
" class="menulink"><?php echo $this->_tpl_vars['item']['text']; ?>
</a>
            <ul>
                <?php $_from = $this->_tpl_vars['item']['menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub']):
?>
                <li>
                    <?php if ($this->_tpl_vars['sub']['options'] != 0): ?>
                    <a class="sub" href="<?php echo $this->_tpl_vars['sub']['link']; ?>
" title="<?php echo $this->_tpl_vars['sub']['title']; ?>
"><?php echo $this->_tpl_vars['sub']['title']; ?>
</a>
                    <ul>
                        <?php $_from = $this->_tpl_vars['sub']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
                        <li><a href="<?php echo $this->_tpl_vars['sub']['url']; ?>
<?php echo $this->_tpl_vars['option']['link']; ?>
"><?php echo $this->_tpl_vars['option']['title']; ?>
</a></li>
                        <?php endforeach; endif; unset($_from); ?>
                    </ul>
                    <?php else: ?>
                    <a href="<?php echo $this->_tpl_vars['sub']['link']; ?>
" title="<?php echo $this->_tpl_vars['sub']['title']; ?>
"><?php echo $this->_tpl_vars['sub']['title']; ?>
</a>
                    <?php endif; ?>
                </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
    <!-- start style choose -->
    <div id="choosestyle">
        <a href="<?php echo $this->_tpl_vars['theme_css']; ?>
/index.html?style=dark"  rel="dark"  class="styleswitch"><?php echo $this->_tpl_vars['lang_dark']; ?>
</a>
        <a href="<?php echo $this->_tpl_vars['theme_css']; ?>
/index.html?style=silver" rel="silver" class="styleswitch"><?php echo $this->_tpl_vars['lang_silver']; ?>
</a>
        <a href="<?php echo $this->_tpl_vars['theme_css']; ?>
/index.html?style=orange" rel="orange" class="styleswitch"><?php echo $this->_tpl_vars['lang_orange']; ?>
</a>
    </div>
</div>

<script type="text/javascript">
    var menu=new menu.dd("menu");
    menu.init("menu","menuhover");
</script>