<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>CRM Admin panel</title>
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/dist/img/ico/favicon.png" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
         <!-- Pe-icon-7-stroke -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="assets/dist/css/stylecrm.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            
            <div class="container-center lg">
             <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>KAYDOL</h3>
                                <small><strong>LÜTFEN KAYIT İÇİN BİLGİLERİ GİRİN.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="index.php" id="loginForm" novalidate>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Kullanıcı Adı</label>
                                    <input type="text" value="" id="username" class="form-control" name="username">
                                    <span class="help-block small"></span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Şifre</label>
                                    <input type="password" value="" id="password" class="form-control" name="password">
                                    <span class="help-block small"></span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Şifreyi tekrarlayın </label>
                                    <input type="password" value="" id="repeatpassword" class="form-control" name="repeatpassword">
                                    <span class="help-block small"></span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Email Adresini Girin </label>
                                    <input type="text" value="" id="email" class="form-control" name="email">
                                    <span class="help-block small"></span>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-warning">KAYDOL</button>
                                <a class="btn btn-add" href="login.php">GİRİŞ YAP</a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>