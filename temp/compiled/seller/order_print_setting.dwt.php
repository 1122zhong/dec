<?php if ($this->_var['full_page']): ?>
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
                <div class="search-info">
                    <div class="search-form">
                        <form action="javascript:searchSize()" name="searchForm">
                            <div class="search-key">
                                <input type="text" name="keyword" size="15" class="text text_2" placeholder="<?php echo $this->_var['lang']['keyword']; ?>" />
                                <input type="submit" value="<?php echo $this->_var['lang']['button_search']; ?>" class="submit" />
                            </div>
                        </form>
                    </div>
                </div>
				<?php endif; ?>
				<form method="post" action="" name="listForm">
					<div class="list-div" id="listDiv"> 
						<table class="ecsc-default-table mt20">
                        	<thead>
                                <tr>
                                    <th width="5%" class="tl pl10"><?php echo $this->_var['lang']['record_id']; ?></th>
                                    <th width="15%" class="tl"><?php echo $this->_var['lang']['specifications']; ?></th>
                                    <th width="20%" class="tl"><?php echo $this->_var['lang']['printer']; ?></th>
                                    <th width="20%" class="tl"><?php echo $this->_var['lang']['width']; ?>(mm)</th>
									<th width="15%" class="tl"><?php echo $this->_var['lang']['sort_order']; ?></th>
                                    <th width="15%" class="tl"><?php echo $this->_var['lang']['set_default']; ?></th>
                                    <th width="10%"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $_from = $this->_var['print_setting']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            <tr>
                                <td class="first-cell tl pl10"><span><?php echo $this->_var['list']['id']; ?></span></td> 
                                <td class="tl"><span><?php echo $this->_var['list']['specification']; ?></span></td>
                                <td class="tl"><span onclick="javascript:listTable.edit(this, 'edit_order_printer', <?php echo $this->_var['list']['id']; ?>)"><?php echo $this->_var['list']['printer']; ?></span></td>
                                <td class="tl"><span onclick="javascript:listTable.edit(this, 'edit_print_width', <?php echo $this->_var['list']['id']; ?>)"><?php echo $this->_var['list']['width']; ?></span></td>
								<td class="tl"><span onclick="javascript:listTable.edit(this, 'edit_sort_order', <?php echo $this->_var['list']['id']; ?>)"><?php echo $this->_var['list']['sort_order']; ?></span></td>
                                <td class="tl"><span>
								    <div class="switch <?php if ($this->_var['list']['is_default']): ?>active<?php endif; ?>" title="<?php if ($this->_var['list']['is_default']): ?>是<?php else: ?>否<?php endif; ?>" data-type="only" onclick="listTable.switchBt(this, 'toggle_order_is_default', <?php echo $this->_var['list']['id']; ?>)">
										<div class="circle"></div>
									</div>
									<input type="hidden" value="<?php echo $this->_var['list']['is_default']; ?>" name="">
								</span></td>
                                <td class="ecsc-table-handle">
                                    <span><a href="tp_api.php?act=order_print_setting_edit&id=<?php echo $this->_var['list']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn-green"><i class="icon icon-edit"></i><p><?php echo $this->_var['lang']['edit']; ?></p></a></span>
                                    <span><a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>', 'order_print_setting_remove')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn-red"><i class="icon icon-trash"></i><p><?php echo $this->_var['lang']['remove']; ?></p></a></span>
                                </td>
                            </tr>
                            <?php endforeach; else: ?>
                            <tr><td class="no-records" colspan="5"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                            <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
							<tfoot>
								<tr><td colspan="10"><?php echo $this->fetch('page.dwt'); ?></td></tr>
							</tfoot>
						</table>
						<?php if ($this->_var['full_page']): ?>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="text/javascript">
  listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
  listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
  listTable.query = 'order_print_setting_query';

  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
  onload = function()
  {
    startCheckOrder();
  }
  
  function searchSize()
  {
	listTable.filter['keyword'] = Utils.trim(document.forms['searchForm'].elements['keyword'].value);
	listTable.filter['page'] = 1;

	listTable.loadList();
  }
  
</script>
</body>
</html>
<?php endif; ?>
