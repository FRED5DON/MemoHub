
(function (win) {
    var envir = win.envir || {};
//PHP 页面参数
    envir.cfg_options = {
        "sb_c": "sidebar-collapse"
    };
    envir._user = envir._user ||{
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
    envir.httpProxy=envir.httpProxy ||{};
    envir.httpProxy.options={};
    envir.httpProxy.ajax=function(url,data,method,callback){
        $.ajax({
            url: envir.hostConfig.host+url,    //请求的url地址
            data: data,    //参数值
            type: method,   //请求方式
            beforeSend: function(xhr) {
                //请求前的处理
                $.each(envir.httpProxy.options||[],function(name,value){
                    xhr.setRequestHeader(name,value);
                });
            },
            success: function(xhr,responseText,o) {
                //请求成功时处理
                if(typeof callback =='function'){
                    callback(xhr,responseText);
                }
            },
            complete: function(xhr, TS) {
                //请求完成的处理
            },
            error: function(xhr,responseText,o) {
                //请求出错处理
                if(typeof callback =='function'){
                    callback(xhr,responseText);
                }
            }
        });
    };

win.insertHtmlAtCaret=function(html) {
	var sel, range;
	if (window.getSelection) {
	// IE9 and non-IE
	sel = window.getSelection();
	if (sel.getRangeAt && sel.rangeCount) {
	range = sel.getRangeAt(0);
	range.deleteContents();
	// Range.createContextualFragment() would be useful here but is
	// non-standard and not supported in all browsers (IE9, for one)
	var el = document.createElement("div");
	el.innerHTML = html;
	var frag = document.createDocumentFragment(), node, lastNode;
	while ( (node = el.firstChild) ) {
	lastNode = frag.appendChild(node);
	}
	range.insertNode(frag);
	// Preserve the selection
	if (lastNode) {
	range = range.cloneRange();
	range.setStartAfter(lastNode);
	range.collapse(true);
	sel.removeAllRanges();
	sel.addRange(range);
	}
	}
	} else if (document.selection && document.selection.type != "Control") {
	// IE < 9
	document.selection.createRange().pasteHTML(html);
	}
};

    win.envir = envir;
})(window);