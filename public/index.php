<?php
define("PAGE_TITLE", "首页");
define("PAGE_CONTENT", "build/modules/index/index.php");
include "build/templates/common.php";
?>
<script src="build/templates/js/list.item.js"></script>
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

        var renderData=function(){
            var param={
                id:100,
                imgUrl:"http://pic14.nipic.com/20110522/7411759_164157418126_2.jpg",
                username:"Fred Don",
                desc:"",
                content:"何を好きになるのは、人を妨害させない限り、他人に言わせて、あなたは永遠に他人を満足できないため！",
                imgs:["http://localhost/dist/img/photo1.png",
                "http://localhost/dist/img/photo2.png",
                "http://localhost/dist/img/photo1.png",
                "http://localhost/dist/img/photo2.png"
                ],
                shareCount:100,
                likeCount:10,
                quote:{
                    logo:"",
                    title:"",
                    desc:""
                },
                comments:[
                    {
                        id:1809,
                        imgUrl:"",
                        name:"",
                        content:"",
                        createTime:"2016-01-18"
                    }
                ]
            };
            var me={
                imgUrl:""
            };
            var itemNode=fd_li_template.standard(param,me);
            $(".content > .fred-col2-auto")[0].appendChild(itemNode);
        };
        renderData();
    });

</script>