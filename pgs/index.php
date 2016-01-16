<?php
define("PAGE_TITLE", "首页");
define("PAGE_CONTENT", "build/modules/index/index.php");
include "build/common.php";
?>

<script>
    $(document).ready(function () {
        var isPageMax = false;
        var mScrollHeight = 0; //滚动距离总长(注意不是滚动条的长度)
        var mScrollTop = 0;   //滚动到的当前位置
        var mWindowHeight = $(window).height();
        var OFFSET = 10;
        $(window).scroll(function (e) {
            mScrollHeight = $("body")[0].scrollHeight;
            mScrollTop = $("body")[0].scrollTop;
            if (mScrollTop + mWindowHeight + OFFSET >= mScrollHeight) {
                if ($(".pull-up-load").css("visibility") == 'hidden') {
                    $(".pull-up-load").css("visibility", "visible");
                    return;
                }
                if (isPageMax) {
                    if ($(".pull-up-load").css("visibility") == 'visible') {
                        $(".pull-up-load").css("visibility", "hidden");
                    }
                }
            }
        });
    });

</script>