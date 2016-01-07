<?php
//$configs = $_COOKIE['style_cfg'];
$configs = null;
if (isset($_COOKIE['style_cfg'])) {
    $configs = json_decode($_COOKIE['style_cfg'], true);
}
include_once "build/servo/env.php";
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fliker | 首页 </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bootstrap/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="../dist/css/skins/skin-purple.min.css">
    <link rel="stylesheet" href="../powerd/styles/powerd.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../bootstrap/js/html5shiv.min.js"></script>
    <script src="../bootstrap/js/respond.min.js"></script>
    <![endif]-->
    <script>
        window.envir = window.envir || {};
        window.envir.hostConfig = JSON.parse('<?=json_encode(Env::getConfig()) ?>');
    </script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-purple sidebar-mini <?= $configs['isCollapsed'] ? "sidebar-collapse" : "" ?> fixed">
<div class="wrapper">

    <!-- Main Header -->
    <?php include_once "build/header.php"; ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <?php include_once "build/sideMenu.php"; ?>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!--<section class="content-header">-->
        <!--<h1>-->
        <!--Page Header-->
        <!--<small>Optional description</small>-->
        <!--</h1>-->
        <!--<ol class="breadcrumb">-->
        <!--<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>-->
        <!--<li class="active">Here</li>-->
        <!--</ol>-->
        <!--</section>-->

        <!-- Main content -->
        <section class="content">

            <div class="fred-col2-auto">
            <!-- Your Page Content Here -->
            <div class="box box-widget fred-note-item">
                <div class="box-header with-border">
                    <div class="user-block">
                        <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                        <span class="description">Shared publicly - 7:30 PM Today</span>
                    </div>
                    <!-- /.user-block -->
                    <div class="box-tools">

                        <button class="btn btn-box-tool"><i class="fa fa-star-o"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- post text -->
                    <p>Far far away, behind the word mountains, far from the
                        countries Vokalia and Consonantia, there live the blind
                        texts. Separated they live in Bookmarksgrove right at</p>

                    <p>the coast of the Semantics, a large language ocean.
                        A small river named Duden flows by their place and supplies
                        it with the necessary regelialia. It is a paradisematic
                        country, in which roasted parts of sentences fly into
                        your mouth.</p>

                    <!-- Attachment -->
                    <div class="attachment-block clearfix">
                        <img class="attachment-img" src="../dist/img/photo1.png" alt="attachment image">

                        <div class="attachment-pushed">
                            <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text
                                    generator</a></h4>

                            <div class="attachment-text">
                                Description about the attachment can be placed here.
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a
                                    href="#">more</a>
                            </div>
                            <!-- /.attachment-text -->
                        </div>
                        <!-- /.attachment-pushed -->
                    </div>
                    <!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
                    <button class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                    <button class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="pull-right text-muted">45 likes - 2 comments</span>
                </div>
                <!-- /.box-body -->
                <div class="box-footer box-comments">
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="user image">

                        <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="user image">

                        <div class="comment-text">
                      <span class="username">
                        Nora Havisham
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    <img class="img-responsive img-circle img-sm fred-img-spacing"
                         src="../dist/img/user4-128x128.jpg"
                         alt="alt text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-warning btn-flat">Send</button>
                      </span>
                    </div>
                </div>
                <!-- /.box-footer -->
            </div>
            <div class="box box-widget fred-note-item">
                <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg"
                         alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                </div>
                <!-- /.user-block -->
                <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                </p>

                <div class="row margin-bottom">
                    <div class="col-sm-6">
                        <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="img-responsive" src="../dist/img/photo2.png" alt="Photo">
                                <br>
                                <img class="img-responsive" src="../dist/img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <img class="img-responsive" src="../dist/img/photo4.jpg" alt="Photo">
                                <br>
                                <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
                    </li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right"><a href="#" class="link-black text-sm"><i
                                class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                </ul>
                <div class="box-footer box-comments">
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="user image">

                        <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="user image">

                        <div class="comment-text">
                      <span class="username">
                        Luna Stark
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    <img class="img-responsive img-circle img-sm fred-img-spacing"
                         src="../dist/img/user4-128x128.jpg"
                         alt="alt text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-warning btn-flat">Send</button>
                      </span>
                    </div>
                </div>
                <!-- /.box-footer -->
            </div>
            <div class="box box-widget fred-note-item">
                <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../dist/img/user1-128x128.jpg"
                         alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                </div>
                <!-- /.user-block -->
                <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                </p>

                <div class="row margin-bottom">
                    <div class="col-sm-6">
                        <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <img class="img-responsive" src="../dist/img/photo2.png" alt="Photo">
                                <br>
                                <img class="img-responsive" src="../dist/img/photo3.jpg" alt="Photo">
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-6">
                                <img class="img-responsive" src="../dist/img/photo4.jpg" alt="Photo">
                                <br>
                                <img class="img-responsive" src="../dist/img/photo1.png" alt="Photo">
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a>
                    </li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right"><a href="#" class="link-black text-sm"><i
                                class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
                </ul>
                <div class="box-footer box-comments">
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="user image">

                        <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                    <div class="box-comment">
                        <!-- User image -->
                        <img class="img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="user image">

                        <div class="comment-text">
                      <span class="username">
                        Luna Stark
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>
                        <!-- /.comment-text -->
                    </div>
                    <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                    <img class="img-responsive img-circle img-sm fred-img-spacing"
                         src="../dist/img/user4-128x128.jpg"
                         alt="alt text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="input-group">
                        <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-warning btn-flat">Send</button>
                      </span>
                    </div>
                </div>
                <!-- /.box-footer -->
            </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="pull-up-load">
            <i class="fa fa-refresh fa-spin"></i>&nbsp;&nbsp;
            <small>正在加载，请稍后...</small>
        </div>
        <!-- To the right -->
        <div class="pull-right hidden-xs">
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016 <a href="#">SagoSoft</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->

        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane active" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>

                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:;">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <h3 class="control-sidebar-heading">General Settings</h3>

                <div class="form-group">
                    <label class="control-sidebar-subheading">
                        Report panel usage
                        <input type="checkbox" class="pull-right" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.1.4 -->
<script src="../powerd/scripts/common_pre.js"></script>
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.js"></script>
<script src="../powerd/scripts/common.js"></script>
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
</body>
</html>
