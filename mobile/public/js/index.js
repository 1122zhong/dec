$(function() {
    var data=['重庆渝中区UU茶咖','重庆渝北区UU茶咖','重庆江北区UU茶咖','重庆九龙坡区UU茶咖','重庆大渡口区UU茶咖','重庆巴南区UU茶咖','重庆沙坪坝区UU茶咖'];
    var hgS1 = new selectSwiper({
        el: '.select_box1',
        data:data,
        init: function (index) {
            if (index !== -1) {
                $('.btn1').html(this.data[index]);
            }
        },
        okFunUndefind: function () {
            alert('至少选一项');
            return false;
        },

        //点击确认选择权证
        okFun: function (index) {
            console.log(this.data[index])
        },
        closeFun: function () {
            console.log('取消');
        },
    });
    $('.btn1').on('click', function () {
        hgS1.openSelectSwiper();
    });
})