<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><?php echo $this->fetch('library/seller_html_head.lbi'); ?></head>

<body>
<?php echo $this->fetch('library/seller_header.lbi'); ?>
<div class="ecsc-layout">
    <div class="site wrapper">
		<?php echo $this->fetch('library/seller_menu_left.lbi'); ?>
		<div class="ecsc-layout-right">
            <div class="main-content" id="mainContent">
				<?php echo $this->fetch('library/url_here.lbi'); ?>
				<?php echo $this->fetch('library/seller_menu_tab.lbi'); ?>
                <div class="ecsc-form-goods">
                    <form name="theForm" action="#" method="post" id="user_form">
                    <div class="wrapper-list border1">
                    	<dl>
                        	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['user_name']; ?>：</dt>
                            <dd>
                                <input type="text" name="user_name" maxlength="20" value="<?php echo htmlspecialchars($this->_var['user']['user_name']); ?>" size="34" class="text"<?php if ($this->_var['action'] == "modif"): ?> readonly="readonly"<?php endif; ?>/>
                                <div class="form_prompt"></div>
							</dd>
                        </dl>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['email']; ?>：</dt>
                            <dd>
                                <input type="text" name="email" value="<?php echo htmlspecialchars($this->_var['user']['email']); ?>" size="34" class="text"/>
                                <div class="form_prompt"></div>
							</dd>
                        </dl>
                        <?php if ($this->_var['action'] == "add"): ?>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['password']; ?>：</dt>
                            <dd>
                                <input type="password"   style="display:none"/>
                                <input type="password" name="password" maxlength="32" size="34" class="text" id="password"/>
                                <div class="form_prompt"></div>
							</dd>
                        </dl>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['pwd_confirm']; ?>：</dt>
                            <dd>
                                <input type="password"   style="display:none"/>
							<input type="password" name="pwd_confirm" maxlength="32" size="34" class="text"/>
							<div class="form_prompt"></div>
							</dd>
                        </dl>
                        <?php endif; ?>
                        <?php if ($this->_var['action'] != "add"): ?>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['new_password']; ?>：</dt>
                            <dd>
                                <input type="password" style="display:none"/>
                                <input type="password" name="new_password" maxlength="32" size="34" class="text ignore" id="new_password"/>
                                <div class="form_prompt"></div>
							</dd>
                        </dl>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['pwd_confirm']; ?>：</dt>
                            <dd>
                                <input type="password" style="display:none"/>
                                <input type="password" name="pwd_confirm" value="" size="34" class="text ignore"/>
                                <div class="form_prompt"></div>
							</dd>
                        </dl>
                        <?php if ($this->_var['user']['agency_name']): ?>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['agency']; ?>：</dt>
                            <dd><?php echo $this->_var['user']['agency_name']; ?></dd>
                        </dl>
                        <?php endif; ?>
                        <?php endif; ?>
                        <?php if ($this->_var['select_role']): ?>
                        <dl>
                        	<dt><?php echo $this->_var['lang']['select_role']; ?>：</dt>
                            <dd>
                                <select name="select_role" class="select">
                                    <option value=""><?php echo $this->_var['lang']['select_please']; ?></option>
                                    <?php $_from = $this->_var['select_role']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                                    <option value="<?php echo $this->_var['list']['role_id']; ?>" <?php if ($this->_var['list']['role_id'] == $this->_var['user']['role_id']): ?> selected="selected" <?php endif; ?> ><?php echo $this->_var['list']['role_name']; ?></option>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </select>
                            </dd>
                        </dl>
                        <?php endif; ?>
                        
                        <dl class="button_info">
                        	<dt>&nbsp;</dt>
                            <dd>
                            	<input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="sc-btn sc-blueBg-btn btn35" id="submitBtn" />
								<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="sc-btn btn35 sc-blue-btn" />
								<input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
								<input type="hidden" name="token" value="<?php echo $this->_var['token']; ?>" />
								<input type="hidden" name="id" value="<?php echo $this->_var['user']['user_id']; ?>" />
                            </dd>
                        </dl>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="text/javascript">
var action = "<?php echo $this->_var['action']; ?>";
$(function(){
	$("#submitBtn").click(function(){
		if($("#user_form").valid()){
			$("#user_form").submit();
		}
	});
	
	jQuery.validator.addMethod("pwd_confirm", function(value, element) {      
		return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);       
	}, pwd_bit_format);  
	
	//添加表单验证js
	if(action == 'add'){
		$('#user_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('dl').find('div.form_prompt');
				//element.parents('dl').find(".notic").hide();
				error_div.append(error);
			},
			ignore:".ignore",
			rules : {
				user_name : {
					required : true
				},
				email : {
					required : true,
					email : true
				},
				password : {
					required : true,
					minlength:6
				},
				pwd_confirm : {
					required : true,
					equalTo:"#password"
				}
			},
			messages : {
				user_name : {
					required : '<i class="icon icon-exclamation-sign"></i>'+user_name_empty
				},
				email : {
					required : '<i class="icon icon-exclamation-sign"></i>'+email_empty,
					email : '<i class="icon icon-exclamation-sign"></i>'+email_error
				},
				password : {
					required : '<i class="icon icon-exclamation-sign"></i>'+password_empty,
					minlength : '<i class="icon icon-exclamation-sign"></i>'+new_password_error
				},
				pwd_confirm : {
					required : '<i class="icon icon-exclamation-sign"></i>'+pwd_confirm_empty,
					equalTo:'<i class="icon icon-exclamation-sign"></i>'+password_error
				}
			}
		});
	}
	
	//修改验证表单js
	if(action == 'edit' || action == 'modif'){
		$('#user_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('dl').find('div.form_prompt');
				//element.parents('dl').find(".notic").hide();
				error_div.append(error);
			},
			ignore:".ignore",
			rules : {
				user_name : {
					required : true
				},
				email : {
					required : true,
					email : true
				},
				new_password : {
					required : true,
					minlength:6
				},
				pwd_confirm : {
					required : true,
					equalTo:"#new_password"
				}
				
			},
			messages : {
				user_name : {
					required : '<i class="icon icon-exclamation-sign"></i>'+user_name_empty
				},
				email : {
					required : '<i class="icon icon-exclamation-sign"></i>'+email_empty,
					email : '<i class="icon icon-exclamation-sign"></i>'+email_error
				},
				new_password : {
					required : '<i class="icon icon-exclamation-sign"></i>'+new_password_empty,
					minlength : '<i class="icon icon-exclamation-sign"></i>'+new_password_error
				},
				pwd_confirm : {
					required : '<i class="icon icon-exclamation-sign"></i>'+pwd_confirm_empty,
					equalTo:'<i class="icon icon-exclamation-sign"></i>'+password_error
				}
				
			}
		});
	}
});
</script>
</body>
</html>
