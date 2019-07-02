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
                    <form action="javascript:searchOrder()" name="searchForm">
                        <div id="status" class="imitate_select select_w145">
                            <div class="cite"><?php echo $this->_var['lang']['select_please']; ?></div>
                            <ul>
                                <li><a href="javascript:;" data-value="-1" class="ftx-01"><?php echo $this->_var['lang']['select_please']; ?></a></li>
                                <?php $_from = $this->_var['status_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                                <li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['list']; ?></a></li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                            <input name="status" type="hidden" value="-1"/>
                        </div>
                        <input type="text" class="text w140 mr10" name="consignee" value="" placeholder="<?php echo $this->_var['lang']['consignee']; ?>">
                        <input type="text" class="text w140 mr10" name="order_sn" value="" placeholder="<?php echo $this->_var['lang']['order_sn']; ?>">
                        <div class="search-key">
                        <input type="text" class="text w140" name="keywords" value="" placeholder="<?php echo $this->_var['lang']['search_keywords_placeholder2']; ?>">
                        <input type="submit" class="submit" value="<?php echo $this->_var['lang']['button_search']; ?>">
                        </div>
                    </form>
                    </div>
                </div>
                <div class="btn-info">
                	<a href="javascript:void(0);" class="sc-btn sc-blue-btn" ectype="merge_order"><i class="icon icon-copy"></i><?php echo $this->_var['lang']['merge_order']; ?></a>
                        <a href="javascript:download_orderlist();" class="sc-btn sc-blue-btn"><i class="icon-download-alt"></i><?php echo $this->_var['lang']['11_order_export']; ?></a>
                </div>
                <div class="clear"></div>
                <div class="order_state_tab">
                    <a href="order.php?act=list&serch_type=-1" data-value="-1" <?php if ($this->_var['serch_type'] == - 1): ?>class="current"<?php endif; ?>><?php echo $this->_var['lang']['all']; ?><?php if ($this->_var['serch_type'] == - 1): ?>(<?php echo $this->_var['filter']['record_count']; ?>)<?php endif; ?></a>
                    <?php $_from = $this->_var['status_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['list']):
?>
                    <a href="order.php?act=list&serch_type=<?php echo $this->_var['key']; ?>" data-value="<?php echo $this->_var['key']; ?>" <?php if ($this->_var['serch_type'] == $this->_var['key']): ?>class="current"<?php endif; ?>><?php echo $this->_var['list']; ?><?php if ($this->_var['serch_type'] == $this->_var['key']): ?>(<?php echo $this->_var['filter']['record_count']; ?>)<?php endif; ?></a>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </div>
                <?php endif; ?>
                <form method="post" action="order.php?act=operate" name="listForm" onsubmit="return check()">
                <div class="table_list" id="listDiv">
                    <table class="ecsc-default-table order">
                        <thead>
                            <tr>
                            	<th class="w50 frist"><?php echo $this->_var['lang']['record_id']; ?></th>
                                <th class="w500 tl"><?php echo $this->_var['lang']['goods_info']; ?></th>
                                <th class="w100"><a href="javascript:listTable.sort('consignee', 'DESC'); "><?php echo $this->_var['lang']['consignee']; ?></a><?php echo $this->_var['sort_consignee']; ?></th>
                                <th class="w100"><a href="javascript:listTable.sort('total_fee', 'DESC'); "><?php echo $this->_var['lang']['total_fee']; ?></a><?php echo $this->_var['sort_total_fee']; ?></th>
                                <th class="w100"><?php echo $this->_var['lang']['formated_order_amount']; ?></th>
                                <th class="w100"><?php echo $this->_var['lang']['all_status']; ?></th>
                                <th class="w150"><?php echo $this->_var['lang']['handler']; ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('okey', 'order');if (count($_from)):
    foreach ($_from AS $this->_var['okey'] => $this->_var['order']):
?>
                        	<tr class="cut"><td colspan="8" class="sep-row">&nbsp;</td></tr>
                            <tr>
                                <th colspan="8">
                                	<div class="order-sku">
                                        <div class="item"><span><?php echo $this->_var['lang']['order_sn']; ?>：</span><a href="order.php?act=info&order_id=<?php echo $this->_var['order']['order_id']; ?>" id="order_<?php echo $this->_var['okey']; ?>"><?php echo $this->_var['order']['order_sn']; ?></a></div>
                                        <div class="item"><span><?php echo $this->_var['lang']['order_time']; ?>：</span><span><?php echo $this->_var['order']['short_order_time']; ?></span></div>
                                        <div class="item"><a href="javascript:void();" onclick="window.open('tp_api.php?act=order_print&order_id=<?php echo $this->_var['order']['order_id']; ?>')" class="sc-btn sc-org-btn" title="<?php echo $this->_var['lang']['print_shipping_form']; ?>"><i class="icon-print"></i><?php echo $this->_var['lang']['print_shipping_form']; ?></a></div>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                            	<td class="bdl frist trigger">
                                    <div class="checkbox-info">
                                        <input type="checkbox" class="ui-checkbox" value="<?php echo $this->_var['order']['order_sn']; ?>" id="checkbox_<?php echo $this->_var['order']['order_sn']; ?>" name="checkboxes[]"><label for="checkbox_<?php echo $this->_var['order']['order_sn']; ?>" class="ui-label"></label>
                                    </div>
                                    <div class="number"><?php echo $this->_var['order']['order_id']; ?></div>
                                </td>
                                <td class="bdl order-goods-list">
                                    <?php $_from = $this->_var['order']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goodsList'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goodsList']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goodsList']['iteration']++;
?>
                                        <div class="product_info <?php if (($this->_foreach['goodsList']['iteration'] == $this->_foreach['goodsList']['total'])): ?>last<?php endif; ?>">
											<?php if ($this->_var['goods']['oi_extension_code'] == "group_buy"): ?>
											<div class="ecsc-goods-thumb" ><a href="../group_buy.php?act=view&id=<?php echo $this->_var['goods']['extension_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" onmouseover="toolTip('<img src=<?php echo $this->_var['goods']['goods_thumb']; ?>>')" onmouseout="toolTip()"></a></div>
											<?php elseif ($this->_var['goods']['oi_extension_code'] == "exchange_goods"): ?>
											<div class="ecsc-goods-thumb" ><a href="../exchange.php?id=<?php echo $this->_var['goods']['extension_id']; ?>&act=view" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" onmouseover="toolTip('<img src=<?php echo $this->_var['goods']['goods_thumb']; ?>>')" onmouseout="toolTip()"></a></div>
											<?php elseif ($this->_var['goods']['oi_extension_code'] == "snatch"): ?>
											<div class="ecsc-goods-thumb" ><a href="../snatch.php?id=<?php echo $this->_var['goods']['extension_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" onmouseover="toolTip('<img src=<?php echo $this->_var['goods']['goods_thumb']; ?>>')" onmouseout="toolTip()"></a></div>
											<?php elseif ($this->_var['goods']['oi_extension_code'] == "seckill"): ?>
											<div class="ecsc-goods-thumb" ><a href="../seckill.php?id=<?php echo $this->_var['goods']['extension_id']; ?>&act=view" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" onmouseover="toolTip('<img src=<?php echo $this->_var['goods']['goods_thumb']; ?>>')" onmouseout="toolTip()"></a></div>
											<?php elseif ($this->_var['goods']['oi_extension_code'] == "auction"): ?>
											<div class="ecsc-goods-thumb" ><a href="../auction.php?id=<?php echo $this->_var['goods']['extension_id']; ?>&act=view" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" onmouseover="toolTip('<img src=<?php echo $this->_var['goods']['goods_thumb']; ?>>')" onmouseout="toolTip()"></a></div>
											<?php elseif ($this->_var['goods']['oi_extension_code'] == "presale"): ?>
											<div class="ecsc-goods-thumb" ><a href="../presale.php?id=<?php echo $this->_var['goods']['extension_id']; ?>&act=view" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" onmouseover="toolTip('<img src=<?php echo $this->_var['goods']['goods_thumb']; ?>>')" onmouseout="toolTip()"></a></div>
											<?php elseif ($this->_var['goods']['extension_code'] == "package_buy"): ?>
											<div class="ecsc-goods-thumb" ><a href="../package.php" target="_blank"><img src="../data/gallery_album/package_goods_default.jpg" onmouseover="toolTip('<img src=<?php echo $this->_var['goods']['goods_thumb']; ?>>')" onmouseout="toolTip()"></a></div>
											<?php else: ?>
                                            <div class="ecsc-goods-thumb" ><a href="../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" onmouseover="toolTip('<img src=<?php echo $this->_var['goods']['goods_thumb']; ?>>')" onmouseout="toolTip()"></a></div>
											<?php endif; ?>
                                            <div class="goods-info">
												<?php if ($this->_var['goods']['oi_extension_code'] == "group_buy"): ?>
												<div class="goods-name"><a target="_blank" href="../group_buy.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?></a></div>
												<?php elseif ($this->_var['goods']['oi_extension_code'] == "exchange_goods"): ?>
												<div class="goods-name"><a target="_blank" href="../exchange_goods.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?></a></div>
												<?php elseif ($this->_var['goods']['oi_extension_code'] == "snatch"): ?>
												<div class="goods-name"><a target="_blank" href="../snatch.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?></a></div>
												<?php elseif ($this->_var['goods']['oi_extension_code'] == "seckill"): ?>
												<div class="goods-name"><a target="_blank" href="../seckill.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?></a></div>
												<?php elseif ($this->_var['goods']['oi_extension_code'] == "auction"): ?>
												<div class="goods-name"><a target="_blank" href="../auction.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?></a></div>
												<?php elseif ($this->_var['goods']['oi_extension_code'] == "presale"): ?>
												<div class="goods-name"><a target="_blank" href="../presale.php?act=view&id=<?php echo $this->_var['order']['extension_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?></a></div>
												<?php elseif ($this->_var['goods']['extension_code'] == "package_buy"): ?>
												<div class="goods-name"><a target="_blank" href="../package_buy.php"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?></a></div>
												<?php else: ?>
												<div class="goods-name"><a target="_blank" href="../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>"><?php echo $this->_var['goods']['goods_name']; ?><?php if ($this->_var['goods']['trade_url']): ?><a href="<?php echo $this->_var['goods']['trade_url']; ?>" target="_blank"><span class="org">[<?php echo $this->_var['lang']['trade_snapshot']; ?>]</span></a><?php endif; ?></a></div>
												<?php endif; ?>
                                                
                                                <div class="price">￥<?php echo $this->_var['goods']['goods_price']; ?></div>
                                                <div class="num">* <?php echo $this->_var['goods']['goods_number']; ?></div>
                                                <?php if ($this->_var['goods']['goods_attr']): ?><div class="price">【<?php echo $this->_var['goods']['goods_attr']; ?>】</div><?php endif; ?>
                                                <div class="clear"></div>
                                                <div class="goods-icons">
                                                    <?php if ($this->_var['order']['is_stages'] == 1): ?><div class="order_icon order_icon_bt" title="<?php echo $this->_var['lang']['baitiao_stage']; ?>"><?php echo $this->_var['lang']['baitiao_stage']; ?></div><?php endif; ?>
                                                    <?php if ($this->_var['order']['is_zc_order'] == 1): ?><div class="order_icon order_icon_zc" title="<?php echo $this->_var['lang']['zc_order']; ?>"><?php echo $this->_var['lang']['zc_order']; ?></div><?php endif; ?>
                                                    <?php if ($this->_var['order']['is_store_order'] == 1): ?><div class="order_icon order_icon_so" title="<?php echo $this->_var['lang']['so_order']; ?>"><?php echo $this->_var['lang']['so_order']; ?></div><?php endif; ?>
                                                    <?php if ($this->_var['order']['is_drp_order'] == 1): ?><div class="order_icon order_icon_fx" title="<?php echo $this->_var['lang']['fx_order']; ?>"><?php echo $this->_var['lang']['fx_order']; ?></div><?php endif; ?>
                                                    <?php if ($this->_var['order']['o_extension_code'] == "group_buy"): ?>
                                                        <div class="order_icon order_icon_tg" title="<?php echo $this->_var['lang']['group_buy']; ?>"><?php echo $this->_var['lang']['group_buy']; ?></div>
                                                        <span class="red"><?php echo $this->_var['order']['cur_status']; ?></span>
                                                    <?php elseif ($this->_var['order']['o_extension_code'] == "exchange_goods"): ?>
                                                        <div class="order_icon order_icon_jf" title="<?php echo $this->_var['lang']['exchange_goods']; ?>"><?php echo $this->_var['lang']['exchange_goods']; ?></div>
                                                    <?php elseif ($this->_var['order']['o_extension_code'] == "auction"): ?>
                                                        <div class="order_icon order_icon_pm" title="<?php echo $this->_var['lang']['auction']; ?>"><?php echo $this->_var['lang']['auction']; ?></div>
                                                    <?php elseif ($this->_var['order']['o_extension_code'] == "snatch"): ?>
                                                        <div class="order_icon order_icon_db" title="<?php echo $this->_var['lang']['snatch']; ?>"><?php echo $this->_var['lang']['snatch']; ?></div>
                                                    <?php elseif ($this->_var['order']['o_extension_code'] == "presale"): ?>
                                                        <div class="order_icon order_icon_ys" title="<?php echo $this->_var['lang']['presale']; ?>"><?php echo $this->_var['lang']['presale']; ?></div>  
                                                    <?php elseif ($this->_var['order']['o_extension_code'] == "seckill"): ?>
                                                        <div class="order_icon order_icon_ms" title="<?php echo $this->_var['lang']['seckill']; ?>"><?php echo $this->_var['lang']['seckill']; ?></div>  
                                                    <?php elseif ($this->_var['order']['o_extension_code'] == "team_buy"): ?>
                                                        <div class="order_icon order_icon_team" title="<?php echo $this->_var['lang']['team_order']; ?>"><?php echo $this->_var['lang']['team_order']; ?></div>
                                                    <?php elseif ($this->_var['order']['o_extension_code'] == "bargain_buy"): ?>
                                                        <div class="order_icon order_icon_bargain" title="<?php echo $this->_var['lang']['bargain_order']; ?>"><?php echo $this->_var['lang']['bargain_order']; ?></div>    
                                                    <?php elseif ($this->_var['order']['o_extension_code'] == "wholesale"): ?>    
                                                        <div class="order_icon order_icon_wholesale" title="<?php echo $this->_var['lang']['wholesale_order']; ?>"><?php echo $this->_var['lang']['wholesale_order']; ?></div>    
                                                    <?php endif; ?>
                                                    <?php if ($this->_var['order']['iog_extension_code'] == "package_buy"): ?>
                                                        <div class="order_icon order_icon_package" title="<?php echo $this->_var['lang']['package_order']; ?>"><?php echo $this->_var['lang']['package_order']; ?></div>
                                                    <?php elseif ($this->_var['order']['iog_extension_code'] == 'virtual_card'): ?>
                                                        <div class="order_icon order_icon_xn" title="<?php echo $this->_var['lang']['xn_order']; ?>"><?php echo $this->_var['lang']['xn_order']; ?></div>
                                                    <?php endif; ?>
                                                    <?php if ($this->_var['order']['is_stages'] == 0 && $this->_var['order']['is_zc_order'] == 0 && $this->_var['order']['is_store_order'] == 0 && $this->_var['order']['o_extension_code'] == '' && $this->_var['order']['iog_extension_code'] == ''): ?>
                                                        <?php if ($this->_var['order']['iog_extension_codes']): ?>
                                                        <?php $_from = $this->_var['order']['iog_extension_codes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'extension_code');if (count($_from)):
    foreach ($_from AS $this->_var['extension_code']):
?>
                                                            <?php if ($this->_var['extension_code'] == ''): ?>
                                                            <div class="order_icon order_icon_pt" title="<?php echo $this->_var['lang']['pt_order']; ?>"><?php echo $this->_var['lang']['pt_order']; ?></div>
                                                            <?php elseif ($this->_var['extension_code'] == 'virtual_card'): ?>
                                                            <div class="order_icon order_icon_xn" title="<?php echo $this->_var['lang']['xn_order']; ?>"><?php echo $this->_var['lang']['xn_order']; ?></div>
                                                            <?php endif; ?>
                                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                                        <?php else: ?>
                                                        <div class="order_icon order_icon_pt" title="<?php echo $this->_var['lang']['pt_order']; ?>"><?php echo $this->_var['lang']['pt_order']; ?></div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    <?php if ($this->_var['order']['order_child'] != 0): ?>
                                                        <div class="order_icon" title="<?php echo $this->_var['lang']['to_order_sn2']; ?>"><?php echo $this->_var['lang']['to_order_sn2']; ?></div>
                                                    <?php endif; ?>
                                                    <?php if (! $this->_var['order']['order_child'] > 0): ?>                                            
                                                        <?php if ($this->_var['order']['main_order_id'] > 0): ?>
                                                        <div class="order_icon order_icon_zdd"><?php echo $this->_var['lang']['sub_order_sn2']; ?></div>
                                                        <?php endif; ?>
                                                    <?php endif; ?>
                                                    
                                                    
                                                    <?php if ($this->_var['goods']['ret_id']): ?>
                                                        <div class="order_icon order_icon_return" title="<?php echo $this->_var['lang']['return_order']; ?>"><?php echo $this->_var['lang']['return_order']; ?></div>
                                                    <?php endif; ?>
                                                    <?php if ($this->_var['order']['store_order_id']): ?>
                                                    <div class="order_icon order_icon_dian" title="<?php echo $this->_var['lang']['dian']; ?>"><?php echo $this->_var['lang']['dian']; ?></div>
                                                    <?php endif; ?>   
                                                    
                                                    <?php if ($this->_var['goods']['ret_id']): ?>
                                                    <a href="order.php?act=return_info&ret_id=<?php echo $this->_var['goods']['ret_id']; ?>&rec_id=<?php echo $this->_var['goods']['rec_id']; ?>" class="sc-btn sc-blueBg-btn btn25"><?php echo $this->_var['goods']['back_order']['return_status']; ?></a>
                                                    <?php endif; ?>  
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </td>
                                <td class="bdl" rowspan="1">
                                    <div class="buyer">
                                        <?php echo $this->_var['order']['consignee']; ?><p member_id="1"></p>
                                        <div class="buyer-info"><em></em>
                                            <div class="con">
                                                <h3><i></i><span><?php echo $this->_var['lang']['contact_info']; ?></span></h3>
                                                <dl>
                                                    <dt><?php echo $this->_var['lang']['label_name']; ?></dt>
                                                    <dd><?php echo $this->_var['order']['consignee']; ?></dd>
                                                </dl>
                                                <dl>
                                                    <dt><?php echo $this->_var['lang']['label_service_phone']; ?></dt>
                                                    <dd><?php echo $this->_var['order']['mobile']; ?></dd>
                                                </dl>
                                                <dl>
                                                    <dt><?php echo $this->_var['lang']['label_shop_address']; ?></dt>
                                                    <dd>[<?php echo $this->_var['order']['region']; ?>]<?php echo $this->_var['order']['address']; ?></dd>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="bdl" rowspan="1">
                                    <p class="ecsc-order-amount"><?php echo $this->_var['order']['formated_total_fee']; ?></p>
                                    <p class="goods-pay"><?php echo $this->_var['order']['pay_name']; ?></p>
                                    <div class="price-tag">
                                        <span><?php if ($this->_var['order']['referer'] == 'mobile'): ?>APP<?php elseif ($this->_var['order']['referer'] == 'touch'): ?>WAP<?php elseif ($this->_var['order']['referer'] == 'ecjia-cashdesk'): ?><?php echo $this->_var['lang']['cashdesk']; ?><?php else: ?>PC<?php endif; ?><?php echo $this->_var['lang']['04_order']; ?></span>
                                    </div>
                                </td>
                                <td class="bdl" rowspan="1">
                                    <p class="ecsc-order-amount"><?php echo $this->_var['order']['formated_total_fee_order']; ?></p>
                                </td>
                                <td class="bdl bdr" rowspan="1">
                                    <p><span><?php echo $this->_var['lang']['os'][$this->_var['order']['order_status']]; ?><br><?php echo $this->_var['lang']['ps'][$this->_var['order']['pay_status']]; ?><br><?php echo $this->_var['lang']['ss'][$this->_var['order']['shipping_status']]; ?></span></p>
                                    <!-- 订单查看 -->
                                    <p></p>
                                    <!-- 物流跟踪 -->
                                    <p></p>
                                </td>
                                <!-- 取消订单 -->
                                <td class="bdl bdr" rowspan="1"><a href="order.php?act=info&order_id=<?php echo $this->_var['order']['order_id']; ?>"><?php echo $this->_var['lang']['order_detail_alt']; ?></a>
                                    <?php if ($this->_var['order']['can_remove'] && $this->_var['order_os_remove']): ?>
                                    <p><a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['order']['order_id']; ?>, remove_confirm, 'remove_order')" class="red"><?php echo $this->_var['lang']['remove']; ?></a></p>
                                    <?php endif; ?>
                                    <?php if ($this->_var['order']['is_delete'] == 1): ?>
                                    <p><font class="red" title="<?php echo $this->_var['lang']['notice_trash_order']; ?>"><?php echo $this->_var['lang']['order_not_operable']; ?></font></p>
                                    <?php endif; ?>
                               </td>
                            </tr>
                            <tr>
                                <th colspan="8">
                                	<div class="order-sku">
                                        <div class="item"><span><?php echo $this->_var['lang']['pay_name']; ?>：</span><span class="ecsc-order-amount"><?php echo $this->_var['order']['pay_name']; ?></span></div>
                                        <div class="item fl"><span><?php echo $this->_var['lang']['shipping_name']; ?>：</span><span class="ecsc-order-amount"><?php echo $this->_var['order']['shipping_name']; ?></span></div>
                                    	<?php if ($this->_var['order']['bill_sn']): ?>
                                        <div class="item fr">
                                            <?php if ($this->_var['order']['chargeoff_status'] == 1): ?>
                                            <em class="red">【<?php echo $this->_var['lang']['have_commission_bill']; ?>：<?php echo $this->_var['order']['bill_sn']; ?>】</em>
                                            <?php else: ?>
                                            <em class="red">【<?php echo $this->_var['lang']['knot_commission_bill']; ?>：<?php echo $this->_var['order']['bill_sn']; ?>】</em>
                                            <?php endif; ?>
                                            <a href="merchants_commission.php?act=bill_detail&bill_id=<?php echo $this->_var['order']['bill_id']; ?>&seller_id=<?php echo $this->_var['order']['seller_id']; ?>&proportion=<?php echo $this->_var['order']['proportion']; ?>&commission_model=<?php echo $this->_var['order']['commission_model']; ?>" target="_blank">【<?php echo $this->_var['lang']['view_commission_bill']; ?>】</a>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </th>
                            </tr>
							<?php endforeach; else: ?>
							<tr><td class="no-records" colspan="11"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                        	<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </tbody>
                        <tfoot>
                        	<tr><td colspan="8"></td></tr>
                            <tr class="head">
                                <td class="frist tc"><input type="checkbox" id="all" class="ui-checkbox" name="checkboxes[]" value='' onclick='listTable.selectAll(this, "checkboxes")'><label for="all" class="ui-label"></label></td>
                                <td class="batch-operation" colspan="20">
                                    <input name="confirm" type="submit" id="btnSubmit" value="<?php echo $this->_var['lang']['op_confirm']; ?>" class="sc-btn btn_disabled" disabled="true" onclick="this.form.target = '_self'" />
                                    <input name="invalid" type="submit" id="btnSubmit1" value="<?php echo $this->_var['lang']['op_invalid']; ?>" class="sc-btn btn_disabled" disabled="true" onclick="this.form.target = '_self'" />
                                    <input name="cancel" type="submit" id="btnSubmit2" value="<?php echo $this->_var['lang']['op_cancel']; ?>" class="sc-btn btn_disabled" disabled="true" onclick="this.form.target = '_self'" />
                                    <?php if ($this->_var['order_os_remove']): ?>
                                    <input name="remove" type="submit" id="btnSubmit3" value="<?php echo $this->_var['lang']['remove']; ?>" class="sc-btn btn_disabled" disabled="true" onclick="this.form.target = '_self'" />
                                    <?php endif; ?>
                                    <input name="print" type="submit" id="btnSubmit4" value="<?php echo $this->_var['lang']['print_order']; ?>" class="sc-btn btn_disabled" disabled="true" onclick="this.form.target = '_blank'" />
                                    <input type="button" id="btnSubmit5" value="<?php echo $this->_var['lang']['print_shipping']; ?>" class="sc-btn btn_disabled" disabled="true" print-data="print_shipping" />
                                    <input name="batch" type="hidden" value="1" />
                                    <input name="order_id" type="hidden" value="" />
                                    <span><?php if ($this->_var['record_count']): ?><?php echo $this->_var['lang']['total_data']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?><?php endif; ?></span> 
                                    <span class="page page_3">
                                    	<i><?php echo $this->_var['lang']['page_size']; ?></i> <input type='text' size='3' id='pageSize' style=" border:1px solid #e5e5e5; background:#FFF; text-align:center; padding:3px; border-radius:4px;" value="<?php echo $this->_var['filter']['page_size']; ?>" onkeypress="return listTable.changePageSize(event)" />
                                    </span>
                                </td>
                            </tr>
                            <tr>
                            	<td colspan="8"><?php echo $this->fetch('page.dwt'); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                </form>
                <?php if ($this->_var['full_page']): ?>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/jquery.picTip.js,jquery.purebox.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js')); ?>
<script type="text/javascript">
	listTable.recordCount = <?php echo $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo $this->_var['page_count']; ?>;
	
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	
    /**
     * 搜索订单
     */
    function searchOrder()
    {
		listTable.filter['keywords'] = Utils.trim(document.forms['searchForm'].elements['keywords'].value);
        listTable.filter['order_sn'] = Utils.trim(document.forms['searchForm'].elements['order_sn'].value);
        listTable.filter['consignee'] = Utils.trim(document.forms['searchForm'].elements['consignee'].value);
        listTable.filter['composite_status'] = document.forms['searchForm'].elements['status'].value;
        listTable.filter['page'] = 1;
        listTable.loadList();
    }

    function check()
    {
      var snArray = new Array();
      var eles = document.forms['listForm'].elements;
      for (var i=0; i<eles.length; i++)
      {
        if (eles[i].tagName == 'INPUT' && eles[i].type == 'checkbox' && eles[i].checked && eles[i].value != 'on')
        {
          snArray.push(eles[i].value);
        }
      }
	  
      if (snArray.length == 0)
      {
        return false;
      }
      else
      {
        //eles['order_id'].value = snArray.toString();
		$("input[name='order_id']").val(snArray.toString());
        return true;
      }
    }

	//导出订单列表
	function download_orderlist()
	{
        page_downloadList("<?php echo $this->_var['page_count']; ?>",'order','ajax_download','order','order_download',jl_order_export_dialog);
	}
	
	//列表批量处理
	/*$(document).on("click",".batch-operation a.sc-btn",function(){
		var _this = $(this),
			table = _this.parents(".ecsc-default-table"),
			checked = table.find("input[name='checkboxes[]']").is(":checked"),
			type = _this.data("type");
		if(checked){
			$("form[name='listForm']").submit();
		}else{
			alert("请勾选商品");
		}
	});*/
	
	$(document).on("click", "a[ectype='merge_order']", function () {
		Ajax.call('order.php', 'act=merge', function(data){
			var content = data.content;
			pb({
				id:"merge_order",
				title:jl_merge_order,
				width:680,
				content:content,
				ok_title:jl_merge,
				cl_title:jl_cancel,
				drag:false,
				foot:true,
				cl_cBtn:true,
				onOk:function(){
					if (confirm(jl_sure_merge_order)) {
						var fromOrderSn = document.getElementById('from_order_sn').value;
						var toOrderSn = document.getElementById('to_order_sn').value;
						Ajax.call('order.php?is_ajax=1&act=ajax_merge_order','from_order_sn=o' + fromOrderSn + '&to_order_sn=o' + toOrderSn, merge_orderResponse, 'POST', 'JSON');
					}
				}
			});
		}, 'POST', 'JSON');
	})
	function merge_orderResponse(result)
	{
		if (result.message.length > 0)
		{
			alert(result.message);
		}
	}
	$(document).on('click',"*[print-data='print_shipping']",function(){
		var frm = $("form[name='listForm']");
		var checkboxes = [];
		frm.find("input[name='checkboxes[]']:checkbox:checked").each(function(){
			var val = $(this).val();
			if(val){
				checkboxes.push(val);
			}
		});
		if(checkboxes){
			window.open("print_batch.php?act=print_batch&checkboxes="+checkboxes);
		}
	});
	
	$(document).on('click',"*[id='all']",function(){
		var frm = $("form[name='listForm']");
		var checkboxes = [];
		frm.find("input[name='checkboxes[]']").each(function(){
			var val = $(this).val();
			if(val){
				checkboxes.push(val);
			}
		});
		if(checkboxes){
			$(":input[name='order_id']").val(checkboxes);
		}
	});
</script>
</body>
</html>
<?php endif; ?>
