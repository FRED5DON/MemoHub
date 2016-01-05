(function (win) {
    var envir = {};
//PHP 页面参数
    envir.cfg_options = {
        "sb_c": "sidebar-collapse"
    };
    envir._user = {
        "id": 10028,
        "name": "Fred",
        "state": "0",
        "lastTime": new Date().getTime()
    };

    envir.getCFG = function () {
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
    envir.getCookieCFG = function () {
        var prf = envir.getCookie("style_cfg");
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

    envir.setCookie = function (c_name, value, expiredays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + expiredays);
        document.cookie = c_name + "=" + encodeURIComponent(value) +
            ((expiredays == null) ? "" : ";expires=" + exdate.toGMTString());
    };
    envir.getCookie = function (c_name) {
        if (document.cookie.length > 0) {
            c_start = document.cookie.indexOf(c_name + "=");
            if (c_start != -1) {
                c_start = c_start + c_name.length + 1;
                c_end = document.cookie.indexOf(";", c_start);
                if (c_end == -1) c_end = document.cookie.length;
                return decodeURI(document.cookie.substring(c_start, c_end));
            }
        }
        return "";
    };

//样式缓存参数
    var configs = envir.getCookieCFG();
    if (configs.isCollapsed == 0) {
        document.querySelector("body").setAttribute("class", document.querySelector("body").className.replace(envir.cfg_options.sb_c, ''));
    } else {
    }
    win.envir = envir;
})(window);

