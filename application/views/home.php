
<!DOCTYPE html>
<html lang="en" data-ng-app="northwindApp">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0, user-scalable=0" />
        <meta name="description" content="SPA Application" />

        <title>Virtuzone</title>

        <link href="<?php echo base_url() ?>css/bootstrap.3.3.1.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>css/font-awesome.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>css/default.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>css/site.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>css/kendo/2014.1.318/kendo.common.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>css/kendo/2014.1.318/kendo.bootstrap.css" rel="stylesheet"/> 

        <script src="<?php echo base_url() ?>js/modernizr-2.7.2.js"></script>

        <style type="text/css">
            .overlay {
                position: fixed;
                z-index: 1041;
                top: 50%;
                left: 50%;
                width: 80px;
                height: 80px;
                margin:-40px 0 0 -40px;
            }

        </style>
    </head>
    <body>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="row">
                <div class="leftpanelblk">
                    <div class="navbar-brand"><img src="../images/vz-logo-white.png" />
                        <button aria-controls="navbar2" aria-expanded="false" data-target="#navbar2" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="dispmob mobile-details-blk" data-toggle="modal" data-target=".mobile-details"><i class="fa fa-user"></i></span>
                    </div>
                    <div class="dateblk">Sunday - Jan 24, 2016</div>
                    <div class="scrollbar-macosx">
                        <div class="navbar-collapse collapse" id="navbar2">

                            <ul class="cbp-vimenu" id="menu">
                                <li><a href="#/home" class="clrbrd1">Dashboard</a></li>
                                <li><a href="#/admin/PaymentLog" class="clrbrd2">Payment Log</a></li>
                                <li><a href="#/admin/userlog" class="clrbrd3">User Log</a></li>
                                <li><a href="#/admin/SchedPayments" class="clrbrd4">Scheduled Payments</a></li>
                                <li><a href="#/admin/ApproveProfile" class="clrbrd5">Profile Changes</a></li>
                            </ul>
                        </div>
                        <div class="hidden-xs">
                            <div class="profdetsblk">
                                <p><strong style="font-size:16px;"></strong></p>
                                <p>Virtuzone Administrator</p>
                            </div>
                        </div>
                    </div>
                    <div class="profdetsblkbtm last-login-blk hidden-xs">
                        <p>Last Logged In : Jan 21 2016 09:24 PM</p>
                        <p><a href="/User/logout" class="btn btn-danger">Logout</a> <span><a href="#/home/changepwd">Change Password</a></span></p>
                    </div>        
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9"><div class="row">
                <div id="maincontent" class="main-content">
                    <div class="body-content">
                        <div ng-view></div>
                        <div class="toggle">
                            <img src="<?php echo base_url() ?>images/preloader.gif" />
                        </div>  
                    </div>
                </div>
            </div>
        </div>
        
        <script src="<?php echo base_url() ?>js/jquery-2.1.0.js"></script>
        <script src="<?php echo base_url() ?>js/angular.js"></script>
        <script src="<?php echo base_url() ?>js/angular-route.js"></script>
        <script src="<?php echo base_url() ?>js/angular-animate.js"></script>
        <script src="<?php echo base_url() ?>js/app/app.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/homeController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/aboutController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/changepwdController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/statementofacctsController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/unpaidinvoicesController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/profileController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/editprofileController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/dummyviewController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/approveprofileController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/errorController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/userlogController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/authController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/cancelController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/declController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/paymentlogController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/schedpaymentsController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/paidinvoiceController.js"></script>
        <script src="<?php echo base_url() ?>js/app/controllers/schedpayController.js"></script>
        <script src="<?php echo base_url() ?>js/jquery-ui.js"></script>
        <script src="<?php echo base_url() ?>js/bootstrap.js"></script>
        <script src="<?php echo base_url() ?>js/respond.js"></script>
        <script src="<?php echo base_url() ?>js/kendo/2014.1.318/kendo.web.min.js"></script>
        <script src="<?php echo base_url() ?>js/jquery.scrollbar.min.js"></script>

        <script>
            function Show() {
                $('.toggle').show();
            }
            $(document).ready(function () {
                $('.toggle').show();
                $('[data-toggle="tooltip"]').tooltip();
                $('.scrollbar-macosx').scrollbar();
                $('.scrollbar-macosx').css({'height': $(window).height() - 220 + 'px'});
                $(window).resize(function () {
                    $('.scrollbar-macosx').css({'height': $(window).height() - 220 + 'px'});
                    $('.page-header').css({'height': ($('.navbar-brand').height() + 14) + 'px'});
                    $('.page-header h2').css({'line-height': ($('.navbar-brand').height() + 14) + 'px'});
                });
            });
        </script>
    </body>
</html>
