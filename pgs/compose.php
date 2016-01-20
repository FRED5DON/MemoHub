<?php
define("PAGE_TITLE", "发布");
define("PAGE_CONTENT", "build/modules/writer/publish.php");
define("HIDE_FOOTER", 1);
include "build/templates/common.php";
?>
<!-- Bootstrap WYSIHTML5 -->
<script src="../powerd/scripts/emoji/emoji-list-with-image.js"></script>
<script src="../powerd/scripts/emoji/punycode.min.js"></script>
<script src="../powerd/scripts/emoji/emoji.js"></script>
<script  type="text/javascript" src="../powerd/scripts/emoji/twemoji.min.js" ></script>
<script src="../pgs/build/templates/js/emoji.panel.js"></script>


<script>
    $(function(){
         /*function mkEmojiPanel(listCallback){
            $.get("https://api.github.com/repos/FRED5DON/htmso/contents/emoji/emojis",listCallback);
        }
        mkEmojiPanel(function(data){
            var ja=JSON.parse(data);
            alert();
        });*/

        var renderEmojiToPanel=function(){
            var emos = getEmojiList()[0];//此处按需是否生成所有emoji
            var _MAX=emos.length;//每页显示50个
            var htmlNode=emoji_panel_template.standard(emos,_MAX);
            $('.emoji-panel').html($(htmlNode).html());
        };
		var renderTwitterEmojiToPanel=function(){
            var emos = twemoji.font;
            var _MAX=emos.length;//每页显示50个
            var htmlNode=emoji_panel_template.metro(emos,_MAX);
            $('.emoji-panel').html($(htmlNode).html());
        };
        renderTwitterEmojiToPanel();
		twemoji.parse($(".emoji-panel")[0], {"size":16});

        $('[data-fred-action="insertEmoji"]').bind("click",function(){
            $(".emoji-panel-parent").toggle();
        });
        $(".emoji-link").bind("click",function(){
			$("#compose-textarea").focus();
			insertHtmlAtCaret($(this).html());
            //$("#compose-textarea")[0].appendChild($(this).clone().find("img")[0]);
			//twemoji.parse($("#compose-textarea")[0], {"size":36});
        });
    });


</script>