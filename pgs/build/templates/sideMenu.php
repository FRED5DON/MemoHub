<?php
$p_name = basename($_SERVER['REQUEST_URI']);
?>
<section class="sidebar"><!--Sidebar Menu-->
    <ul class="sidebar-menu"><!--<li class="header">HEADER</li>--><!--Optionally,you can add icons to the links-->
        <li <?= $p_name == "index.php" ? "class=\"active\"" : "" ?>><a href="index.php"><i
                    class="fa fa-cube"></i><span>首页</span></a></li>
        <li <?= $p_name == "atme.php" ? "class=\"active\"" : "" ?>><a href="atme.php"><i
                    class="fa fa-at"></i><span>与我相关</span></a></li>
        <li <?= $p_name == "feature.php" ? "class=\"active\"" : "" ?>><a href="feature.php"><i class="fa fa-flag-o"><span
                        class="label-danger fred-label-badage-sidebar">9</span></i><span>我的PIE</span></a>
        </li>
        <li <?= $p_name == "compose.php" ? "class=\"active\"" : "" ?>><a href="compose.php"><i
                    class="fa fa-pencil"></i><span>发布</span></a></li>
        <li <?= $p_name == "settings.php" ? "class=\"active\"" : "" ?>><a href="settings.php"><i class="fa fa-gear"><span
                        class="label-success fred-label-badage-sidebar">2</span></i><span>设置中心</span></a>
        </li>
        <li <?= $p_name == "about.php" ? "class=\"active\"" : "" ?>><a href="about.php"><i
                    class="fa fa-circle-o"></i><span>关于</span></a></li>
    </ul><!--/.sidebar-menu-->
    <div class="user-panel fd-menu-uc">
        <div class="pull-left image"><img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"></div>
        <div class="pull-left info"><p>Alexander Pierce</p><!--Status--><a href="#"><i
                    class="fa fa-circle text-success"></i>Online</a></div>
    </div>
</section>

