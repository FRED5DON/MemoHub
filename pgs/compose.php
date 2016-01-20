<?php
define("PAGE_TITLE", "发布");
define("PAGE_CONTENT", "build/modules/writer/publish.php");
define("HIDE_FOOTER", 1);
include "build/templates/common.php";
?>

<script src="../powerd/scripts/emoji/twemoji.min.js"></script>
<script src="../pgs/build/templates/js/emoji.panel.js"></script>
<script>
    $(function () {
        /*function mkEmojiPanel(listCallback){
         $.get("https://api.github.com/repos/FRED5DON/htmso/contents/emoji/emojis",listCallback);
         }
         mkEmojiPanel(function(data){
         var ja=JSON.parse(data);
         alert();
         });*/
        var status = [];
        var renderTwitterEmojiToPanel = function () {
            var emos = twemoji.font;
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
            twemoji.parse($(".nav-tabs")[0], {"size": 16});
        };
        renderTwitterEmojiToPanel();


        $('[data-fred-action="insertEmoji"]').bind("click", function () {
            $(".emoji-panel-parent").toggle();
            $("#compose-textarea").focus();
            if ($(".emoji-panel-parent").css("display") != "none" && status["emoji_page_0"] != 1) {
                twemoji.parse($("#emoji_page_0")[0], {"size": 16});
            }
        });
        $(".emoji-link").bind("click", function () {
            $("#compose-textarea").focus();
            insertHtmlAtCaret(" " + $(this).html() + " ");
            //$("#compose-textarea")[0].appendChild($(this).clone().find("img")[0]);
            //twemoji.parse($("#compose-textarea")[0], {"size":36});
        });
    });


</script>