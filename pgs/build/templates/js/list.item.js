var fd_li_template={
    styles:{
        comment:1
    },
    standard:function(param,me){
        var node=document.createElement("div");
        node.className="box box-widget fred-note-item";
        node.setAttribute("data-id",param.id);
        var temps=[];
        temps.push('<div class="box-header with-border">');

        temps.push('<div class="user-block">');//<!-- /.user-block -->
        temps.push('<img class="img-circle" src="'+param.imgUrl+'" alt="">');
        temps.push('<span class="username"><a href="#">'+param.username+'</a></span>');
        temps.push('<span class="description">'+param.desc+'</span></div>');

        temps.push('<div class="box-tools">');
        temps.push('<button class="btn btn-box-tool"><i class="fa fa-star-o"></i></button>');
        temps.push('<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>');
        temps.push('</button>');
        temps.push('</div>');
        temps.push('</div>');
        temps.push('<div class="box-body">');
        if(param.content){
            var cts=param.content.split("\n");
            for(var i=0;i<cts.length;i++){
                temps.push('<p>');
                temps.push(cts[i]);
                temps.push('</p>');
            }
        }
        if(param.quote && param.quote.length>0){
            temps.push('<div class="attachment-block clearfix">');
            temps.push('<img class="attachment-img" src="'+param.quote.logo+'" alt="">');
            temps.push('<div class="attachment-pushed">');
            temps.push('<h4 class="attachment-heading"><a>'+param.quote.title+'</a></h4>');
            temps.push('<div class="attachment-text">');
            temps.push(param.quote.desc);
            temps.push('</div>');
            temps.push('</div>');
            temps.push('</div>');
        }
        if(param.imgs && param.imgs.length>0){
            temps.push('<div class="row margin-bottom">');
            var colNum=param.imgs.length>2?3:4;
            for(var i=0;i<param.imgs.length;i++){
                temps.push('<div class="col-sm-'+colNum+'">');
                temps.push('<img class="img-responsive" src="'+param.imgs[i]+'" alt="">');
                temps.push('</div>');
                if(i==3){
                    break;
                }
               /* if(i==0){
                    temps.push('<div class="col-sm-6">');
                    temps.push('<img class="img-responsive" src="'+param.imgs[i]+'" alt="">');
                    temps.push('</div>');

                    temps.push('<div class="col-sm-6">');
                    temps.push('<div class="row">');
                }
                else{
                    if(i%2!=0){
                        temps.push('<div class="col-sm-6">');
                        temps.push('<img class="img-responsive" src="'+param.imgs[i]+'" alt="">');
                        temps.push('<br>');
                    }else{
                        temps.push('<img class="img-responsive" src="'+param.imgs[i]+'" alt="">');
                        temps.push('</div>');
                    }
                }
                if(i!=0 && i==param.imgs.length-1){
                    temps.push('</div>');
                    temps.push('</div>');
                }*/

            }
            temps.push('</div>');
        }
        temps.push('</div>');
        if(this.styles.comment){
            <!-- Social sharing buttons -->
            temps.push('<ul class="list-inline">');
            temps.push('<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> '+param.shareCount+'</a>');
            temps.push('</li>');
            temps.push('<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> '+param.likeCount+'</a>');
            temps.push('</li>');
            temps.push('<li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> 评论 '+param.comments.length+'</a></li>');
            temps.push('</ul>');
        }else{
            <!-- Social sharing buttons2 -->
            temps.push("<br/>")
            temps.push('<button class="btn btn-default btn-xs"><i class="fa fa-share"></i>'+param.shareCount+'</button>');
            temps.push('<button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i>'+param.likeCount+'</button>');
            temps.push('<span class="pull-right text-muted">'+param.comments.length+'</span>');
        }
        if(param.comments && param.comments.length>0){
            temps.push('<div class="box-footer box-comments">');
            for(var i=0;i<param.comments.length;i++){
                var comment=param.comments[i];
                temps.push('<div class="box-comment">');
                temps.push('<img class="img-circle img-sm" src="'+comment.imgUrl+'" alt="user image">');
                temps.push('<div class="comment-text">');
                temps.push('<span class="username">');
                temps.push(comment.name);
                temps.push('<span class="text-muted pull-right">'+comment.createTime+'</span>');
                temps.push('</span>');
                temps.push(comment.content);
                temps.push('</div>');
                temps.push('</div>');
            }
            temps.push('</div>');
        }
        temps.push('<div class="box-footer">');
        temps.push('<img class="img-responsive img-circle img-sm fred-img-spacing" src="'+me.imgUrl+'" alt="">');
        temps.push('<div class="input-group">');
        temps.push('<input type="text" name="message" placeholder="输入内容" class="form-control">');
        temps.push('<span class="input-group-btn">');
        temps.push('<button type="button" class="btn btn-warning btn-flat">评论</button>');
        temps.push('</span> </div> </div>');
        node.innerHTML=temps.join('');
        return node;
    }



};