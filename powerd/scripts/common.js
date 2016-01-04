$(document).ready(function () {


    /**
     * 监听侧边栏展开关闭【修改源码实现】
     * @param isExpand
     */
    $.AdminLTE.pushMenu.onExpand = function (isExpand) {
        saveConfigCache(isExpand);
    };

    var saveConfigCache = function (isExpand) {
        var configs = $.getCFG();
        if (isExpand) {
            configs.isCollapsed = 1;
        } else {
            configs.isCollapsed = 0;
        }
        localStorage.setItem("style_cfg", JSON.stringify(configs));
    };

    //渲染

    //顶部导航栏事件

    //侧边栏事件

    $(".fd-menu-uc").on("click", function (e) {
        var kModalId = "global-modal";
        //如果已登录
        if ($._user.state == 1) {
            location.href = "pgs/user.html";
        } else {
            //创建modals
            var gm = document.getElementById(kModalId);
            if (!gm) {
                gm = document.createElement("div");
                var htm = '<div class="login-box">' +
                    '<div class="login-logo">' +
                    '<a href="index.html">返回首页</a>' +
                    '</div><!-- /.login-logo -->' +
                    '<div class="login-box-body"' +
                    '<p class="login-box-msg">登录Fliker</p>' +
                    '<form action="index.html" method="post">' +
                    '<div class="form-group has-feedback">' +
                    '<input type="email" class="form-control" placeholder="Email">' +
                    '<span class="glyphicon glyphicon-envelope form-control-feedback"></span>' +
                    '</div>' +
                    '<div class="form-group has-feedback">' +
                    '<input type="password" class="form-control" placeholder="Password">' +
                    '<span class="glyphicon glyphicon-lock form-control-feedback"></span>' +
                    '</div>' +
                    '<div class="row">' +
                    '<div class="col-xs-8">' +
                    '<div class="checkbox icheck">' +
                    '<input type="checkbox" id="remPwd" style="display:inline-block;width: 20px; height: 20px; margin: 0px; padding: 0px; border: 0px;  background: rgb(255, 255, 255);">' +
                    '<label style="margin-left: 24px" for="remPwd">记住密码</label></div>' +
                    '</div><!-- /.col -->' +
                    '<div class="col-xs-4">' +
                    '    <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>' +
                    '</div><!-- /.col -->' +
                    '</div>' +
                    '</form>' +
                    '<div class="social-auth-links">' +
                    '<a class="btn btn-social-icon"><i class="fa fa-qq"></i></a>&nbsp;&nbsp;' +
                    '<a class="btn btn-social-icon"><i class="fa fa-wechat"></i></a>&nbsp;&nbsp;' +
                    '<a class="btn btn-social-icon"><i class="fa fa-weibo"></i></a>&nbsp;&nbsp;' +
                    '</div><!-- /.social-auth-links -->' +
                    '<a href="#">忘记密码</a>&nbsp;&nbsp;&nbsp;&nbsp;' +
                    '<a href="pgs/register.html" class="text-center">注册</a>' +
                    '</div><!-- /.login-box-body -->';
                gm.setAttribute("id", kModalId);
                gm.setAttribute("class", "fred-global-modal");
                gm.innerHTML = htm;
                $("body > .wrapper")[0].appendChild(gm);
                gm.addEventListener("click", function (e) {
                    if (e.target.nodeName == 'DIV' && e.target.getAttribute("id") === 'global-modal') {
                        $("#" + kModalId).addClass("hide");
                        $("body").css({
                            "overflow-y": "auto"
                        });
                    }
                });
            } else {
                $("#" + kModalId).removeClass("hide");
            }
            $("body").css({
                "overflow-y": "hidden"
            });
        }
    });

});