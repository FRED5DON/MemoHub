<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="bookmark" href="../powerd/images/favicon.ico" type="image/x-icon"/>
    <title><?=PAGE_TITLE?PAGE_TITLE:"Fliker" ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bootstrap/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../bootstrap/js/html5shiv.min.js"></script>
    <script src="../bootstrap/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition register-page">
<div class="login-box">
    <div class="login-logo"><a href="index.php">
            <img src="../powerd/images/logo.png" />

        </a></div><!-- /.login-logo -->
    <div class="login-box-body"
    <p class="login-box-msg">注册</p>
    <form action="../user/regist" method="post">
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Full name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms</a>
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">注册</button>
            </div><!-- /.col -->
        </div>
    </form>
    <hr/>
    <div class="social-auth-links">
        <a class="btn btn-social-icon">
            <i class="fa fa-qq"></i></a>
        &nbsp;&nbsp;<a class="btn btn-social-icon">
            <i class="fa fa-wechat"></i></a>&nbsp;&nbsp;<a class="btn btn-social-icon"><i
                class="fa fa-weibo"></i></a>&nbsp;&nbsp;</div>
    <a href="index.php?method=login" class="text-center">帐号登陆</a></div><!-- /.login-box-body -->

<!-- jQuery 2.1.4 -->
<script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../../plugins/iCheck/icheck.min.js"></script>

</body>
</html>
