<?php
define("PAGE_TITLE", "发布");
define("PAGE_CONTENT", "build/modules/writer/publish.php");
define("HIDE_FOOTER", 1);
include "build/templates/common.php";
?>
<script src="../powerd/scripts/emoji/twemoji.min.js"></script>
<script src="build/templates/js/emoji.panel.js"></script>
<script>
    $(function () {

        var cursor = {
            lastIndex: 0,
            lastCount: 0
        };
        document.addEventListener("selectionchange", function (e) {
            if (e.target.activeElement.className.indexOf("content-area") >= 0) {
                var sel = document.getSelection();
                var from = sel.anchorOffset;
                var to = sel.focusOffset;
                cursor.lastIndex = from > to ? to : from;
                //如果count变化
                /*if(cursor.lastCount!=$(".content-area").text().length){
                 twemoji.parse($(".content-area")[0], {"size": 16});
                 }*/
                cursor.lastCount = $(".content-area").text().length;
            }
        });

        var status = [];
        var renderTwitterEmojiToPanel = function () {
            var emos = twemoji.font.slice(597, 662);
            var _MAX = 200;//每页显示200个
            var pages = Math.ceil(emos.length / _MAX);
            for (var i = 0; i < pages; i++) {
                status['emoji_page_' + i] = 0;
            }
            var htmlNode = emoji_panel_template.metro(emos, _MAX, function (event, sid) {
                if (event == 'tabClick') {
                    if (!status[sid.replace("#", "")]) {
                        twemoji.parse($(sid)[0], {"size": 16});
                        status[sid.replace("#", "")] = 1;
                    }
                } else {
                    $("#compose-textarea").focus();
                }
            });
            $('.emoji-panel').html($(htmlNode).html());
            //twemoji.parse($(".nav-tabs")[0], {"size": 16});
        };
        renderTwitterEmojiToPanel();

        /**
         * 设置光标
         * @param node
         * @param index
         */
        function setCaret(node, index) {
            var el = node;
            var range = document.createRange();
            var sel = document.getSelection();
            range.setStart(el.childNodes[0], index);
            range.collapse(true);
            sel.removeAllRanges();
            sel.addRange(range);
            el.focus();
        }

        $('[data-fred-action="insertEmoji"]').bind("click", function () {
            $(".emoji-panel-parent").toggle();
            $("#compose-textarea").focus();
            if ($(".emoji-panel-parent").css("display") != "none" && status["emoji_page_0"] != 1) {
                twemoji.parse($("#emoji_page_0")[0], {"size": 16});
            }
        });
        $(".emoji-link").bind("click", function () {
            //输入区域获取焦点
            $("#compose-textarea").focus();
            //移动焦点到上次保存的地方

            var s = $("#compose-textarea").text();

            s = s.substring(0, cursor.lastIndex) + $(this).find("img")[0].alt + s.substring(cursor.lastIndex, s.length);
            $("#compose-textarea").text(s);
            setCaret($("#compose-textarea")[0], ++cursor.lastIndex);
            //insertHtmlAtCaret(" " + $(this).html() + " ");

            //$("#compose-textarea")[0].appendChild($(this).clone().find("img")[0]);
            //twemoji.parse($("#compose-textarea")[0], {"size":36});
        });
    });


</script>
<!--
<script src="../powerd/scripts/markdown.min.js"></script>
<script src="../powerd/scripts/markdown.converter.js"></script>
<script>
    (function init(document) {

        /*var btns = document.querySelectorAll(".toolbar-item");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                //输入区域获取焦点
                document.querySelector(".content-area").focus();
                //移动焦点到上次保存的地方
                setCaret(document.querySelector(".content-area"), cursor.lastIndex);
            });
        }*/
        /**
         * 设置光标
         * @param node
         * @param index
         */
        function setCaret(node, index) {
            var el = node;
            var range = document.createRange();
            var sel = document.getSelection();
            range.setStart(el.childNodes[0], index);
            range.collapse(true);
            sel.removeAllRanges();
            sel.addRange(range);
            el.focus();
        }

        var cursor = {
            lastIndex: 0
        };
        document.addEventListener("selectionchange", function (e) {
            if (e.target.activeElement.className.indexOf("content-area") >= 0) {
                var sel = document.getSelection();
                var from = sel.anchorOffset;
                var to = sel.focusOffset;
                cursor.lastIndex = from > to ? to : from;
                //如果count变化
//                new Editor(document.querySelector(".content-area"), document.querySelector(".content-preview"));
            }
        });




    })(document);


</script>-->