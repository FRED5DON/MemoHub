var emoji_panel_template = {
    styles: {
        comment: 1
    },
	metro:function (emos,_MAX,callback) {
        var pages = Math.ceil(emos.length / _MAX);
        var node = document.createElement("div");
        node.className = "box";
        var tabs = [], tabContent = [];//#创建tabs、contents
        var temps = [];
        tabs.push('<ul class="nav nav-tabs">');
        for (var i = 0; i < pages; i++) {
            var id = "emoji_page_" + i;
            var emo = emos[i * _MAX];
            tabs.push('<li class="' + (i == 0 ? 'active' : '') + '"><a href="#' + id + '" data-toggle="tab" aria-expanded="' + (i == 0 ? 'true' : 'false') + '">');
            tabs.push(emo);
            tabs.push('</a></li>');
            tabContent.push('<div class="tab-pane '+(i == 0 ? 'active' : '')+'" id="' + id + '">');
            tabContent.push('<ul class="fc-color-picker emoji-box">');
            //插入emoji
            for (var j = i * _MAX; j < emos.length && j < (i + 1) * _MAX; j++) {
                var em = emos[j];
                tabContent.push('<li class="emoji-link"><a  href="#">');
                tabContent.push(em);
                tabContent.push('</a></li>');
            }
            tabContent.push('</ul>');
            tabContent.push('</div>');

        }
        tabs.push('<li class="pull-right"><a href="javascript:;" class="text-muted hide-emoji-panel" ><i class="fa fa-times"></i></a></li>');
        tabs.push('</ul>');

        temps.push('<div class="nav-tabs-custom">');
        temps.push(tabs.join(''));//放入tabs
        temps.push('<div class="tab-content">');
        temps.push(tabContent.join(''));//放入content
        temps.push('</div>');
        temps.push('</div>');

        node.innerHTML = temps.join('');
        this.initTabEvent(callback);
        return node;
    },
    standard: function (emos,_MAX) {
        var pages = Math.ceil(emos.length / _MAX);
        var node = document.createElement("div");
        node.className = "box";
        var tabs = [], tabContent = [];//#创建tabs、contents
        var temps = [];
        tabs.push('<ul class="nav nav-tabs">');
        for (var i = 0; i < pages; i++) {
            var id = "emoji_page_" + i;
            var emo = emos[i * _MAX];
            var data = 'data:image/png;base64,' + emo[2];
            var title = '<img style="display:inline;vertical-align:middle;" src="' + data + '"  unicode16="' + emo[1] + '" />';
            tabs.push('<li class="' + (i == 0 ? 'active' : '') + '"><a href="#' + id + '" data-toggle="tab" aria-expanded="' + (i == 0 ? 'true' : 'false') + '">');
            tabs.push(title);
            tabs.push('</a></li>');
            tabContent.push('<div class="tab-pane '+(i == 0 ? 'active' : '')+'" id="' + id + '">');
            tabContent.push('<ul class="fc-color-picker emoji-box">');
            //插入emoji
            for (var j = i * _MAX; j < emos.length && j < (i + 1) * _MAX; j++) {
                var em = emos[j];
                var dat = 'data:image/png;base64,' + em[2];
                var tit = '<img style="display:inline;vertical-align:middle;" src="' + dat + '"  unicode16="' + em[1] + '" />';
                tabContent.push('<li class="emoji-link"><a  href="#">');
                tabContent.push(tit);
                tabContent.push('</a></li>');
            }
            tabContent.push('</ul>');
            tabContent.push('</div>');

        }
        tabs.push('<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>');
        tabs.push('</ul>');

        temps.push('<div class="nav-tabs-custom">');
        temps.push(tabs.join(''));//放入tabs
        temps.push('<div class="tab-content">');
        temps.push(tabContent.join(''));//放入content
        temps.push('</div>');
        temps.push('</div>');

        node.innerHTML = temps.join('');
        return node;
    },
    initTabEvent:function(callback){
        setTimeout(function(){
            $('ul.nav-tabs > li a[data-toggle="tab"]').click(function(){
                if(typeof callback =='function'){
                    callback("tabClick",$(this)[0].hash);
                }
            });
            $('a.hide-emoji-panel').click(function(){
                $(".emoji-panel-parent").toggle();
                if(typeof callback =='function'){
                    callback("hideClick",null);
                }
            });
        },50);

    }


};