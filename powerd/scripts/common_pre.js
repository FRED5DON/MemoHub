$(document).ready(function () {
    //PHP 页面参数
    $.cfg_options = {
        "sb_c": "sidebar-collapse"
    };
    $._user = {
        "id": 10028,
        "name": "Fred",
        "state": "1",
        "lastTime": new Date().getTime()
    };

    $.getCFG = function () {
        var prf = localStorage.getItem("style_cfg");
        var configs = null;
        if (prf) {
            try {
                configs = JSON.parse(prf);
            } catch (e) {
                configs = null;
            }
        }
        configs = configs || {};
        return configs;
    };

    //样式缓存参数
    var configs = $.getCFG();
    if (configs.isCollapsed == 1) {
        $("body").removeClass($.cfg_options.sb_c);
    }


});