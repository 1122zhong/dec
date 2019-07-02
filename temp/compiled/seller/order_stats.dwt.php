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
                <div class="clear"></div>
                <div class="order_stats">
                    <div class="order_stats_top">
                        <div class="order_stats_items">
                            <div class="order_stats_item order_stats_item2">
                            	<i class="icon"><img src="images/icon2.png" /></i>
                                <div class="desc">
                                	<span class="tit"><?php echo $this->_var['lang']['overall_sum']; ?></span>
                                    <span class="value"><?php echo $this->_var['total_turnover']; ?></span>
                                </div>
                            </div>
                            <div class="order_stats_item order_stats_item3">
                            	<i class="icon"><img src="images/icon3.png" /></i>
                                <div class="desc">
                                	<span class="tit"><?php echo $this->_var['lang']['overall_choose']; ?></span>
                                    <span class="value"><?php echo $this->_var['click_count']; ?></span>
                                </div>
                            </div>
                            <div class="order_stats_item order_stats_item4">
                            	<i class="icon"><img src="images/icon4.png" /></i>
                                <div class="desc">
                                	<span class="tit"><?php echo $this->_var['lang']['kilo_buy_amount']; ?></span>
                                    <span class="value"><?php echo $this->_var['click_ordernum']; ?></span>
                                </div>
                            </div>
                            <div class="order_stats_item order_stats_item5">
                            	<i class="icon"><img src="images/icon5.png" /></i>
                                <div class="desc">
                                	<span class="tit"><?php echo $this->_var['lang']['kilo_buy_sum']; ?></span>
                                    <span class="value"><?php echo $this->_var['click_turnover']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_stats_search">
                    	<div class="screeItme">
                            <form action="" method="post" id="selectForm" name="selectForm">
                                <strong class="fl lh mr10"><?php echo $this->_var['lang']['start_end_date']; ?>：</strong>
                                <div class="text_time" id="text_time1">
                                    <input name="start_date" id="start_date" value="<?php echo $this->_var['start_date']; ?>" class="text" readonly="readonly"/>
                                </div>
                                <div class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</div>
                                <div class="text_time" id="text_time2">
                                    <input name="end_date" id="end_date" value="<?php echo $this->_var['end_date']; ?>" class="text" readonly="readonly"/>
                                </div>
                                <input type="submit" name="submit" value="<?php echo $this->_var['lang']['query']; ?>" class="sc-btn sc-blueBg-btn btn30 ml10" />
                            </form>
                        </div>
                        <div class="screeItme mt10">
                            <form method="post" id="selectForm" name="selectForm">
                                <strong class="fl lh mr10"><?php echo $this->_var['lang']['select_year_month']; ?>：</strong>
                                <!--<?php $_from = $this->_var['start_date_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'start_date_0_93353200_1561260053');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['start_date_0_93353200_1561260053']):
?>-->
                                <?php if ($this->_var['k'] > 0): ?>
                                <span class="bolang">&nbsp;&nbsp;+&nbsp;&nbsp;</span>
                                <?php endif; ?>
                                <div class="text_time" id="text_time_start">
                                    <input type="text" class="text text_2 mr0" name="year_month[]" id="year_month_<?php echo $this->_var['k']; ?>" value="<?php echo $this->_var['start_date_0_93353200_1561260053']; ?>" autocomplete="off" readonly>
                                </div>
                                <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
                                <input type="hidden" name="is_multi" value="1" />
                                <input type="submit" name="submit" value="<?php echo $this->_var['lang']['query']; ?>" class="sc-btn sc-blueBg-btn btn30 ml10" />
                            </form>
                        </div>
                    </div>
                    <div class="main-content p0 mt20">
                    	<div class="tabmenu">
                            <ul class="tab">
                                <li class="active" id="order_circs-tab" data-tab="order_circs"><a href="javascript:void(0);"><?php echo $this->_var['lang']['order_circs']; ?></a></li>
                                <li id="shipping-tab" data-tab="shipping"><a href="javascript:void(0);"><?php echo $this->_var['lang']['shipping_method']; ?></a></li>
                                <li id="pay-tab" data-tab="pay"><a href="javascript:void(0);"><?php echo $this->_var['lang']['pay_method']; ?></a></li>
                                <li id="area-tab" data-tab="area"><a href="javascript:void(0);"><?php echo $this->_var['lang']['tab_area']; ?></a></li>
                            </ul>
                        </div>
                        <div class="items-info">
                        	<div class="wrapper-list">
                            	<div id="order_main" style="height:378px;"></div>
                                <div id="order_main_price" style="height:378px;"></div>
                            </div>
                            <div class="wrapper-list" style="display:none;">
                            	<div id="ship_main" style="width:970px; height:500px;"></div>
                            </div>
                            <div class="wrapper-list" style="display:none;">
                            	<div id="pay_main" style="width:970px; height:500px;"></div>
                            </div>
                            <div class="wrapper-list" style="display:none;">
                            	<div id="area_main" style="width:970px; height:500px;"></div>
                            </div>							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/seller_footer.lbi'); ?>
<script type="text/javascript" src="../js/echarts-all.js"></script>
<script type="text/javascript">
	//统计数据 start
	var is_multi = <?php if ($this->_var['is_multi']): ?>true<?php else: ?>false<?php endif; ?>;
	var order_data = <?php if ($this->_var['order_data']): ?><?php echo $this->_var['order_data']; ?><?php else: ?>''<?php endif; ?>;
	var sale_data = <?php if ($this->_var['sale_data']): ?><?php echo $this->_var['sale_data']; ?><?php else: ?>''<?php endif; ?>;
	var ship_data = <?php if ($this->_var['ship_data']): ?><?php echo $this->_var['ship_data']; ?><?php else: ?>''<?php endif; ?>;
	var pay_data = <?php if ($this->_var['pay_data']): ?><?php echo $this->_var['pay_data']; ?><?php else: ?>''<?php endif; ?>;
	var area_data = <?php if ($this->_var['area_data']): ?><?php echo $this->_var['area_data']; ?><?php else: ?>''<?php endif; ?>;

	var myChart_order = echarts.init(document.getElementById("order_main"));
	var myChart_ship = echarts.init(document.getElementById("ship_main"));
	var myChart_pay = echarts.init(document.getElementById("pay_main"));
	var myChart_area = echarts.init(document.getElementById("area_main"));
	var myChart_price = echarts.init(document.getElementById("order_main_price"));
	
	if(is_multi){
		//订单概况
		var option_order = {
			title : {
				text: '<?php echo $this->_var['lang']['order_survey']; ?>',
				subtext: ''
			},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['<?php echo $this->_var['lang']['order_state_01']; ?>','<?php echo $this->_var['lang']['order_state_02']; ?>',"<?php echo $this->_var['lang']['order_state_03']; ?>","<?php echo $this->_var['lang']['order_state_04']; ?>"]
			},
			toolbox: {
				show : true,
				feature : {
					magicType : {show: true, type: ['line', 'bar']},
					restore : {show: true},
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			xAxis : [
				{
					type : 'category',
					data : order_data[0]
				}
			],
			yAxis : [
				{
					type : 'value'
				}
			],
			series : [
				{
					name:'<?php echo $this->_var['lang']['order_state_01']; ?>',
					type:'bar',
					data:order_data[1],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name: '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_02']; ?>',
					type:'bar',
					data:order_data[2],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_03']; ?>',
					type:'bar',
					data:order_data[3],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_04']; ?>',
					type:'bar',
					data:order_data[4],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				}
			]
		};

		//订单概况
		var option_sale = {
			title : {
				text: '<?php echo $this->_var['lang']['sale_survey']; ?>',
				subtext: ''
			},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['<?php echo $this->_var['lang']['order_state_01']; ?>','<?php echo $this->_var['lang']['order_state_02']; ?>',"<?php echo $this->_var['lang']['order_state_03']; ?>","<?php echo $this->_var['lang']['order_state_04']; ?>"]
			},
			toolbox: {
				show : true,
				feature : {
					magicType : {show: true, type: ['line', 'bar']},
					restore : {show: true},
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			xAxis : [
				{
					type : 'category',
					data : sale_data[0]
				}
			],
			yAxis : [
				{
					type : 'value'
				}
			],
			series : [
				{
					name:'<?php echo $this->_var['lang']['order_state_01']; ?>',
					type:'bar',
					data:sale_data[1],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name: '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_02']; ?>',
					type:'bar',
					data:sale_data[2],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_03']; ?>',
					type:'bar',
					data:sale_data[3],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_04']; ?>',
					type:'bar',
					data:sale_data[4],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				}
			]
		};
	}else{
	}
	
	//配送方式
	option_ship = {
		title : {
			text: '<?php echo $this->_var['lang']['distribution_mode']; ?>',
			subtext: '',
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			data: ship_data[0]
		},
		series : [
			{
				name: '<?php echo $this->_var['lang']['access_source']; ?>',
				type: 'pie',
				radius : '55%',
				center: ['50%', '60%'],
				data: ship_data[1],
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};
	
	//支付方式
	option_pay = {
		title : {
			text: '<?php echo $this->_var['lang']['payment_method']; ?>',
			subtext: '',
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			data: pay_data[0]
		},
		series : [
			{
				name: '<?php echo $this->_var['lang']['access_source']; ?>',
				type: 'pie',
				radius : '55%',
				center: ['50%', '60%'],
				data: pay_data[1],
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};

	//配送地区
	option_area = {
		title : {
			text: '<?php echo $this->_var['lang']['distribution_area']; ?>',
			subtext: '',
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			data: area_data[0]
		},
		series : [
			{
				name: '<?php echo $this->_var['lang']['access_source']; ?>',
				type: 'pie',
				radius : '55%',
				center: ['50%', '60%'],
				data: area_data[1],
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};
	
	if(is_multi){
		//订单概况
		myChart_order.setOption(option_order);
		myChart_price.setOption(option_sale);
	}else{
		//订单概况
		myChart_order.setOption(order_data['order']);
		myChart_price.setOption(order_data['sale']);
	}
	//配送方式
	myChart_ship.setOption(option_ship);
	//支付方式
	myChart_pay.setOption(option_pay);
	//配送地区
	myChart_area.setOption(option_area);	
	//统计数据 end

	//日期选择插件调用start sunle
	var opts1 = {
		'targetId':'start_date',//时间写入对象的id
		'triggerId':['start_date'],//触发事件的对象id
		'alignId':'text_time1',//日历对齐对象
		'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
	},opts2 = {
		'targetId':'end_date',
		'triggerId':['end_date'],
		'alignId':'text_time2',
		'format':'-'
	},opts3 = {
		'targetId':'year_month_0',
		'triggerId':['year_month_0'],
		'alignId':'year_month_0',
		'format':'-'
	},opts4 = {
		'targetId':'year_month_1',
		'triggerId':['year_month_1'],
		'alignId':'year_month_1',
		'format':'-'
	},opts5 = {
		'targetId':'year_month_2',
		'triggerId':['year_month_2'],
		'alignId':'year_month_2',
		'format':'-'
	},opts6 = {
		'targetId':'year_month_3',
		'triggerId':['year_month_3'],
		'alignId':'year_month_3',
		'format':'-'
	},opts7 = {
		'targetId':'year_month_4',
		'triggerId':['year_month_4'],
		'alignId':'year_month_4',
		'format':'-'
	}

	xvDate(opts1);
	xvDate(opts2);
	xvDate(opts3);
	xvDate(opts4);
	xvDate(opts5);
	xvDate(opts6);
	xvDate(opts7);
	//日期选择插件调用end sunle
</script>
</body>
</html>
