<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body"> 
    <div class="warpper">
        <div class="title"><?php echo $this->_var['lang']['31_fund']; ?> - <?php echo $this->_var['lang']['02_member_account']; ?></div>
        <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['member_account']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist mt30">
            	<div class="query_result">
                    <div class="common-content">
                        <div class="switch_info">
                            <div class="stat_order_search stat_order_search2">
                                <form action="" method="post" id="" name="selectForm">
                                    <div class="search_item">
                                        <strong class="label_txt"><?php echo $this->_var['lang']['keywords']; ?>：</strong>
                                        <input type="text" name="keywords" class="text w250" autocomplete="off" placeholder="<?php echo $this->_var['lang']['search_placeholder']; ?>">
                                    </div>
                                    <div class="search_item">
                                        <strong class="label_txt"><?php echo $this->_var['lang']['total_bd_time']; ?>：</strong>
                                        <div class="text_time" id="text_time_start">
                                            <input type="text" class="text" name="start_date" value="" id="start_date" value="" autocomplete="off" readonly>
                                        </div>
                                        <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                        <div class="text_time" id="text_time_end">
                                            <input type="text" class="text" name="end_date" value="" id="end_date" value="" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                    <div class="search_item">
                                        <strong class="label_txt">&nbsp</strong>
                                        <a href="javascript:void(0);" class="btn btn30 blue_btn ml0" ectype="searchButton"><i class="icon icon-search"></i><?php echo $this->_var['lang']['btn_search']; ?></a>
                                    </div>
                                </form>
                            </div>
                            <div class="query_result mt30">
                                <div class="common-head">
                                    <div class="fl">
                                        <div class="fbutton m0" id="fbutton_1"><a href="javascript:void(0);"><div class="csv" title="<?php echo $this->_var['lang']['export_list']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?></span></div></a></div>
                                    </div>
                                    <div class="refresh">
                                        <div class="refresh_tit" onclick="getList(this)" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                                        <div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                                    </div>
                                </div>
                                <div class="list-div" id="listDiv">
                                    <?php endif; ?>
                                    <table cellpadding="0" cellspacing="0" border="0">
                                        <thead>
                                        <tr>
                                            <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                            <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['user_desc']; ?></div></th>
                                            <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['user_rank']; ?></div></th>
                                            <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['user_account']; ?></div></th>
                                            <th width="20%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $_from = $this->_var['order_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['vo']):
?>
                                        <tr>
                                            <td><div class="tDiv"><?php echo $this->_var['vo']['user_id']; ?></div></td>
                                            <td><div class="tDiv">
                                                <?php echo $this->_var['lang']['user_name']; ?>：<?php echo $this->_var['vo']['user_name']; ?><br/>
                                                <?php echo $this->_var['lang']['user_nickname']; ?>：<?php if ($this->_var['vo']['nick_name']): ?><?php echo $this->_var['vo']['nick_name']; ?><?php else: ?><span class="blue"><?php echo $this->_var['lang']['not_set']; ?></span><?php endif; ?>
                                            </div></td>
                                            <td><div class="tDiv"><?php if ($this->_var['vo']['rank_name']): ?><?php echo $this->_var['vo']['rank_name']; ?><?php else: ?><span class="blue"><?php echo $this->_var['lang']['not_rank_name']; ?></span><?php endif; ?></div></td>
                                            <td><div class="tDiv">
                                                <?php echo $this->_var['lang']['user_money']; ?>：<?php echo empty($this->_var['vo']['user_money']) ? '0' : $this->_var['vo']['user_money']; ?><?php echo $this->_var['lang']['yuan']; ?><br/>
                                                <?php echo $this->_var['lang']['frozen_money']; ?>：<?php echo empty($this->_var['vo']['frozen_money']) ? '0' : $this->_var['vo']['frozen_money']; ?><?php echo $this->_var['lang']['yuan']; ?>
                                            </div></td>
                                            <td class="handle">
                                                <div class="tDiv">
                                                    <a href="account_log.php?act=list&user_id=<?php echo $this->_var['vo']['user_id']; ?>&start_date=<?php echo $this->_var['filter']['source_start_date']; ?>&end_date=<?php echo $this->_var['filter']['source_end_date']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['account_log']; ?></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endforeach; else: ?>
                                        <tr>
                                            <td colspan="12" class="no_record"><div class="tDiv"><?php echo $this->_var['lang']['no_records']; ?></div></td>
                                        </tr>
                                        <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="12">
                                                <div class="list-page">
                                                    <?php echo $this->fetch('library/page.lbi'); ?>
                                                </div>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                    <?php if ($this->_var['full_page']): ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
        //分页传值
        listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
        listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
        listTable.url = "fund_stats.php?is_ajax=1";
        listTable.query = "member_account_query";
    
        <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
        //导出报表(销售明细)
        $('#fbutton_1').click(function(){
            location.href='fund_stats.php?act=download';
        })

        //日期选择插件调用start sunle
        var opts1 = {
            'targetId':'start_date',//时间写入对象的id
            'triggerId':['start_date'],//触发事件的对象id
            'alignId':'start_date',//日历对齐对象
            'format':'-',//时间格式 默认'YYYY-MM-DD HH:MM:SS'
            'min':'' //最小时间
        },opts2 = {
            'targetId':'end_date',
            'triggerId':['end_date'],
            'alignId':'end_date',
            'format':'-',
            'min':''
        }
        xvDate(opts1);
        xvDate(opts2);
        //日期选择插件调用end sunle

        //统计
        $(function(){
            $(document).on('click', "[ectype='searchButton']", function(){
                searchData();
            })
        })

        function searchData()
        {       
            listTable.filter['start_date'] = Utils.trim(document.forms['selectForm'].elements['start_date'].value);
            listTable.filter['end_date'] = Utils.trim(document.forms['selectForm'].elements['end_date'].value);
            listTable.filter['keywords'] = Utils.trim(document.forms['selectForm'].elements['keywords'].value);
    
            listTable.filter['page'] = 1;
            listTable.loadList();
        }
    </script>
</body>
</html>
<?php endif; ?>