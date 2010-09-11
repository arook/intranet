<?php /* Smarty version 2.6.26, created on 2010-06-17 16:53:56
         compiled from /Users/kky979899/Documents/workspace_c/xoops/modules/system/class/gui/oxygen/xotpl/xo_accordion.html */ ?>
<div class="CPbigTitle" style="background-image: url(<?php 
echo 'http://localhost/xoops/modules/system/class/gui/oxygen/img/brightside.png'; ?>)"><?php echo $this->_tpl_vars['lang_overview']; ?>
</div><br />
            <!-- strst accordion menu -->
            <div id="firstpane" class="menu_list">
                <!-- menu 1 -->
                <p class="menu_head"><?php echo $this->_tpl_vars['lang_overview']; ?>
</p>
                <div class="menu_body">
                    <table>
                        <tr>
                            <td><?php echo $this->_tpl_vars['lang_version_xoops']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['lang_xoops_version']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $this->_tpl_vars['lang_version_php']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['lang_php_vesion']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $this->_tpl_vars['lang_version_mysql']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['lang_mysql_version']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $this->_tpl_vars['lang_server_api_name']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['lang_server_api']; ?>
</td>
                        </tr>
                        <tr>
                            <td><?php echo $this->_tpl_vars['lang_os']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['lang_os_name']; ?>
</td>
                        </tr>
                        <tr>
                            <td>safe_mode</td>
                            <td><?php echo $this->_tpl_vars['safe_mode']; ?>
</td>
                        </tr>
                        <tr>
                            <td>register_globals</td>
                            <td><?php echo $this->_tpl_vars['register_globals']; ?>
</td>
                        </tr>
                        <tr>
                            <td>magic_quotes_gpc</td>
                            <td><?php echo $this->_tpl_vars['magic_quotes_gpc']; ?>
</td>
                        </tr>
                        <tr>
                            <td>allow_url_fopen</td>
                            <td><?php echo $this->_tpl_vars['allow_url_fopen']; ?>
</td>
                        </tr>
                        <tr>
                            <td>fsockopen</td>
                            <td><?php echo $this->_tpl_vars['fsockopen']; ?>
</td>
                        </tr>
                        <tr>
                            <td>allow_call_time_pass_reference</td>
                            <td><?php echo $this->_tpl_vars['allow_call_time_pass_reference']; ?>
</td>
                        </tr>
                        <tr>
                            <td>post_max_size</td>
                            <td><?php echo $this->_tpl_vars['post_max_size']; ?>
</td>
                        </tr>
                        <tr>
                            <td>max_input_time</td>
                            <td><?php echo $this->_tpl_vars['max_input_time']; ?>
</td>
                        </tr>
                        <tr>
                            <td>output_buffering</td>
                            <td><?php echo $this->_tpl_vars['output_buffering']; ?>
</td>
                        </tr>
                        <tr>
                            <td>max_execution_time</td>
                            <td><?php echo $this->_tpl_vars['max_execution_time']; ?>
</td>
                        </tr>
                        <tr>
                            <td>memory_limit</td>
                            <td><?php echo $this->_tpl_vars['memory_limit']; ?>
</td>
                        </tr>
                        <tr>
                            <td>file_uploads</td>
                            <td><?php echo $this->_tpl_vars['file_uploads']; ?>
</td>
                        </tr>
                        <tr>
                            <td>upload_max_filesize</td>
                            <td><?php echo $this->_tpl_vars['upload_max_filesize']; ?>
</td>
                        </tr>
                    </table>
                </div>
                <!-- menu 2 -->
                <p class="menu_head">XOOPS License</p>
                <div class="menu_body">
                   <table>
                         <tr>
                            <td>XOOPS Key</td>
                            <td><?php echo @XOOPS_LICENSE_KEY; ?>
</td>
                        </tr>
                        <tr>
                            <td>License</td>
                            <td><a class="tooltip" rel="external" href="http://www.gnu.org/licenses/gpl.html" title="<?php echo @XOOPS_LICENSE_CODE; ?>
"><?php echo @XOOPS_LICENSE_CODE; ?>
</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a class="tooltip" rel="external" href="http://www.gnu.org/licenses/gpl-2.0.html" title="<?php echo @XOOPS_LICENSE_TEXT; ?>
"><?php echo @XOOPS_LICENSE_TEXT; ?>
</a></td>
                        </tr>
                    </table>
                </div>
                <!-- menu 3 -->
                <p class="menu_head"><?php echo $this->_tpl_vars['lang_about_xoops']; ?>
</p>
                <div class="menu_body">
                    <?php echo $this->_tpl_vars['lang_about_xoops_text']; ?>

                </div>
                <!-- menu 4 -->
                <p class="menu_head"><?php echo $this->_tpl_vars['lang_xoops_links']; ?>
</p>
                <div class="menu_body">
                    <table>
                        <tr>
                            <td><a rel="external" href="http://www.xoops.org"><?php echo $this->_tpl_vars['lang_xoops_xoopsproject']; ?>
</a></td>
                            <td><a rel="external" href="http://www.xoops.org/modules/xoopspartners"><?php echo $this->_tpl_vars['lang_xoops_localsupport']; ?>
</a></td>
                        </tr>
                        <tr>
                            <td><a rel="external" href="http://www.xoops.org/modules/core"><?php echo $this->_tpl_vars['lang_xoops_xoopscore']; ?>
</a></td>
                            <td><a rel="external" href="http://www.xoops.org/modules/extgallery"><?php echo $this->_tpl_vars['lang_xoops_xoopsthems']; ?>
</a></td>
                        </tr>
                        <tr>
                            <td><a rel="external" href="http://www.xoops.org/modules/mediawiki/index.php/Main_Page"><?php echo $this->_tpl_vars['lang_xoops_xoopswiki']; ?>
</a></td>
                            <td><a rel="external" href="http://www.xoops.org/modules/news/article.php?storyid=4534"><?php echo $this->_tpl_vars['lang_xoops_xoopsbooks']; ?>
</a></td>
                        </tr>
                        <tr>
                            <td><a rel="external" href="http://www.xoops.org/modules/news/index.php?storytopic=2"><?php echo $this->_tpl_vars['lang_xoops_newmodule']; ?>
</a></td>
                            <td><a rel="external" href="http://www.xoops.org/modules/smartfaq"><?php echo $this->_tpl_vars['lang_xoops_xoopsfaq']; ?>
</a></td>
                        </tr>
                        <tr>
                            <td><a rel="external" href="http://xoops.svn.sourceforge.net/viewvc/xoops"><?php echo $this->_tpl_vars['lang_xoops_codesvn']; ?>
</a></td>
                            <td><a rel="external" href="http://sourceforge.net/tracker/?func=add&amp;group_id=41586&amp;atid=430840"><?php echo $this->_tpl_vars['lang_xoops_reportbug']; ?>
</a></td>
                        </tr>
                    </table>
                </div>
                <!-- menu 5 -->
                <p class="menu_head"><?php echo $this->_tpl_vars['lang_xdonations']; ?>
</p>
                <div class="menu_body">
                    <?php echo $this->_tpl_vars['lang_xdonations_text']; ?>

                </div>
                <!-- menu 6 -->
                <p class="menu_head"><?php echo $this->_tpl_vars['lang_xgiftshop']; ?>
</p>
                <div class="menu_body">
                    <div class="xgiftshop">
                        <a rel="external" href="http://www.cafepress.com/xoopsfoundation/" title="<?php echo $this->_tpl_vars['lang_xgiftshop']; ?>
"><img src="<?php 
echo 'http://localhost/xoops/modules/system/class/gui/oxygen/img/xgiftshopbutton.png'; ?>" /></a>
                        <br />
                        <a rel="external" href="http://www.cafepress.com/xoopsfoundation/"><span><?php echo $this->_tpl_vars['lang_xgiftshop']; ?>
</span></a>
                    </div>
                </div>
            </div>