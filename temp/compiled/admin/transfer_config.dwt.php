<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
            <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['config']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
				<div class="common-head">
                    <div class="fl">
                        <a href="transfer_manage.php?act=choose"><div class="fbutton"><div class="edit" title="<?php echo $this->_var['lang']['data_migration']; ?>"><span><i class="icon icon-edit"></i><?php echo $this->_var['lang']['data_migration']; ?></span></div></div></a>
                    </div>    
                </div>    
                <div class="mian-info">
                    <form action="transfer_manage.php" method="post" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
                        <div class="switch_info user_basic" style="display:block;">
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['data_host']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name='s_db_host' value='<?php echo $this->_var['db_host']; ?>' class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                    <div class="notic m20"><?php echo $this->_var['lang']['data_host_notic']; ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['port']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name='s_db_port' value='<?php echo $this->_var['db_port']; ?>' class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                    <div class="notic m20"><?php echo $this->_var['lang']['port_notic']; ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['user_name']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name='s_db_user' value='<?php echo $this->_var['db_user']; ?>' class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                    <div class="notic m20"><?php echo $this->_var['lang']['user_notic']; ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['pwd']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name='s_db_pass' value='<?php echo $this->_var['db_pass']; ?>' class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                    <div class="notic m20"><?php echo $this->_var['lang']['pwd_notic']; ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['database_name']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name='s_db_name' value='<?php echo $this->_var['db_name']; ?>' class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                    <div class="notic m20"><?php echo $this->_var['lang']['database_name_notic']; ?></div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['s_db_prefix']; ?>：</div>
                                <div class="label_value">
                                    <input type="text" name='s_db_prefix' value='<?php echo $this->_var['db_prefix']; ?>' class="text" autocomplete="off" />
                                    <div class="form_prompt"></div>
                                    <div class="notic m20"><?php echo $this->_var['lang']['s_db_prefix_notic']; ?></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="label"><?php echo $this->_var['lang']['s_db_retain']; ?>：</div>
                                <div class="label_value">
                                    <div class="checkbox_items">
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="s_db_retain" id="s_db_retain_0" value="0" <?php if ($this->_var['s_db_retain'] == 0): ?> checked="true" <?php endif; ?>  />
                                            <label for="s_db_retain_0" class="ui-radio-label"><?php echo $this->_var['lang']['no']; ?></label>
                                        </div>
                                        <div class="checkbox_item">
                                            <input type="radio" class="ui-radio" name="s_db_retain" id="s_db_retain_1" value="1" <?php if ($this->_var['s_db_retain'] == 1): ?> checked="true" <?php endif; ?>  />
                                            <label for="s_db_retain_1" class="ui-radio-label"><?php echo $this->_var['lang']['yes']; ?></label>
                                        </div>
                                    </div>	
                                </div>
                            </div>
                                
                            <div class="item">
                                <div class="label">&nbsp;</div>
                                <div class="label_value info_btn mt0">
                                    <input type="submit" name="submit" id="submitBtn" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
                                    <input class="button" type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
                                    <input class="button button_reset" type="button" value="<?php echo $this->_var['lang']['get_sql_basic']; ?>" onclick="get_sql_basic();" />
                                    <input type="hidden" name="act" value="setup" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    
<script type="text/javascript">
function validate(){
	var fm = document.forms['theForm'];
	var db_host = fm.elements['s_db_host'].value;
	var db_port = fm.elements['s_db_port'].value;
	var db_user = fm.elements['s_db_user'].value;
	var db_name = fm.elements['s_db_name'].value;
	var db_prefix = fm.elements['s_db_prefix'].value;
	
	if(db_host == '' || db_port == '' || db_user == '' || db_name == '' || db_prefix == ''){
		alert('<?php echo $this->_var['lang']['ws_zhandian_set']; ?>');
		return false;
	}
}

//验证数据库连接
function get_sql_basic(){
	var fm = document.forms['theForm'];
	var db_host = fm.elements['s_db_host'].value;
	var db_port = fm.elements['s_db_port'].value;
	var db_user = fm.elements['s_db_user'].value;
	var db_pass = fm.elements['s_db_pass'].value;
	var db_name = fm.elements['s_db_name'].value;
	var db_prefix = fm.elements['s_db_prefix'].value;
	
	
	if(db_host == '' || db_port == '' || db_user == '' || db_name == '' || db_prefix == ''){
		alert('<?php echo $this->_var['lang']['ws_zhandian_set']; ?>');
		return false;
	}

	var basic        = new Object();
	basic.db_host     = db_host;
	basic.db_port     = db_port;
	basic.db_user     = db_user;
	basic.db_pass     = db_pass;
	basic.db_name     = db_name;
			
	Ajax.call('transfer_manage.php?is_ajax=1&act=sql_basic', 'basic=' + $.toJSON(basic), sqlBasicResponse, 'POST', 'JSON');
}

function sqlBasicResponse(result){
	alert(result.message);
}
</script>
</body>
</html>
