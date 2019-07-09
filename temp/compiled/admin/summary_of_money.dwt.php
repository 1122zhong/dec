<!doctype html>
<html>
<head>
    <?php echo $this->fetch('library/admin_html_head.lbi'); ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'../js/vue/vue.min.js')); ?>
</head>
<body class="iframe_body">
    <div class="warpper">
        <div class="title"><?php echo $this->_var['lang']['31_fund']; ?> - <?php echo $this->_var['lang']['01_summary_of_money']; ?></div>
        <div class="content">
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['summary_of_money']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['summary_of_money']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist mt30">
            	<div class="query_result">
                    <div class="common-head">
                        <div class="fl">
                            <div class="fbutton m0" id="fbutton_1"><a href="javascript:void(0);"><div class="csv" title="<?php echo $this->_var['lang']['export_list']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?></span></div></a></div>
                        </div>
                    </div>
                    <div class="common-content" id="vueFund">
                        <div class="section-module">
                            <div class="title_head"><h3 v-text="title"></h3><div class="time" v-text="time"></div></div>
                            <div class="module-content">
                                <ul class="module_ss_ul">
                                    <li v-for="(item,index) in items" :key="index">
                                        <div class="desc">
                                            <i class="iconfont" :class="item.icon"></i>
                                            <h3 v-text="item.title"></h3>
                                            <span v-text="item.desc"></span>
                                            <div class="number" v-text="item.number"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="section-module">
                            <div class="title_head"><h3 v-text="title"></h3><div class="time" v-text="time"></div></div>
                            <div class="module-content">
                                <div id="today_trend" style="height:378px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript" src="../js/echarts-all.js"></script>
	<script>
    /* vue js */
    new Vue({
        el:"#vueFund",
        data:{
            title:"<?php echo $this->_var['lang']['day_fund_stats']; ?>",
            time:"( 更新时间：<?php echo $this->_var['update_time']; ?> )",
            items:[
                {
                    title:"<?php echo $this->_var['lang']['total_fee']; ?>",
                    desc:"<?php echo $this->_var['lang']['total_fee_notic']; ?>",
                    number:<?php echo $this->_var['today_sale']['total_fee']; ?>,
                    icon:'icon-edit1'
                },
                {
                    title:"<?php echo $this->_var['lang']['user_num']; ?>",
                    desc:"<?php echo $this->_var['lang']['user_num_notic']; ?>",
                    number:<?php echo $this->_var['today_sale']['user_num']; ?>,
                    icon:'icon-crown'
                },
                {
                    title:"<?php echo $this->_var['lang']['order_num']; ?>",
                    desc:"<?php echo $this->_var['lang']['order_num_notic']; ?>",
                    number:<?php echo $this->_var['today_sale']['order_num']; ?>,
                    icon:'icon-order'
                },
                {
                    title:"<?php echo $this->_var['lang']['goods_number']; ?>",
                    desc:"<?php echo $this->_var['lang']['goods_number_notic']; ?>",
                    number:<?php echo $this->_var['today_sale']['goods_number']; ?>,
                    icon:'icon-shangpin'
                },
                {
                    title:"<?php echo $this->_var['lang']['average_goods_price']; ?>",
                    desc:"<?php echo $this->_var['lang']['average_goods_price_notic']; ?>",
                    number:<?php echo $this->_var['today_sale']['average_goods_price']; ?>,
                    icon:'icon-tag-alt'
                },
                {
                    title:"<?php echo $this->_var['lang']['average_total_fee']; ?>",
                    desc:"<?php echo $this->_var['lang']['average_total_fee_notic']; ?>",
                    number:<?php echo $this->_var['today_sale']['average_total_fee']; ?>,
                    icon:'icon-bonus'
                }
            ]
        }
    })

    //统计
    $(function(){
        search_chart_view('fund_stats.php', "form[name='selectForm']", 'today_trend', {act:'get_chart_data'});
    })
    </script>
</body>
</html>