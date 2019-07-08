<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['13_backup']; ?> - <?php echo $this->_var['ur_here']; ?></div>
		<div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['optimize']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['optimize']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                    <div class="form-div">
                    <form method="post" action="database.php" name="theForm">
                        <input type="submit" value="<?php echo $this->_var['lang']['start_optimize']; ?>" class="btn btn30 red_btn" />
                        <label class="ml10"><?php echo $this->_var['lang']['chip_count']; ?>：</label>
                        <label class="red"><?php echo $this->_var['num']; ?></label>
                        <input type= "hidden" name= "num" value = "<?php echo $this->_var['num']; ?>">
                        <input type= "hidden" name="act" value = "run_optimize">
                    </form>
                    </div>
                </div>
                <div class="common-content">
                    <div class="list-div" id="listDiv">
                    <table cellspacing='0' cellpadding='0' id='listTable'>
                      <tr>
                        <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['table']; ?></div></th>
                        <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['type']; ?></div></th>
                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['rec_num']; ?></div></th>
                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['rec_size']; ?></div></th>
                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['rec_chip']; ?></div></th>
                        <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['charset']; ?></div></th>
                        <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['status']; ?></div></th>
                      </tr>
                      <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
                        <tr>
                          <td><div class="tDiv"><?php echo $this->_var['item']['table']; ?></div></td>
                          <td><div class="tDiv"><?php echo $this->_var['item']['type']; ?></div></td>
                          <td><div class="tDiv"><?php echo $this->_var['item']['rec_num']; ?></div></td>
                          <td><div class="tDiv"><?php echo $this->_var['item']['rec_size']; ?></div></td>
                          <td><div class="tDiv"><?php echo $this->_var['item']['rec_chip']; ?></div></td>
                          <td><div class="tDiv"><?php echo $this->_var['item']['charset']; ?></div></td>
                          <td><div class="tDiv"><?php echo $this->_var['item']['status']; ?></div></td>
                        </tr>
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </table>
                    </div>
                </div>
            </div>
		</div>
	</div>
</body>
</html>