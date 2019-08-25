 <!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jul 2019 14:27:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Smart City</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/img/vv.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/fonts/flaticon.css">
    <!-- Full Calender CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/fullcalendar.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/style.css">
    <!-- Modernize js -->
    <script src="<?=base_url()?>assets/js/modernizr-3.6.0.min.js"></script>
</head>

<style type="text/css">
form .form-group .fa-eye
 {
    cursor: pointer;
 }
 form .form-group img
 {
    max-width: 250px;
    max-height: 150px;
  }

 .notfound
 {
   display: none;
 }
 .table>thead>tr>th , .table>tbody>tr>td
 {
    text-align: left;
 }

</style>

<script type="text/javascript">
   function show_password() 
   {
     $('#password').attr('type','text');
   }

   function hide_password() 
   {
      $('#password').attr('type','password');
   }
</script>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
       <!-- Header Menu Area Start Here -->
        <div class="navbar navbar-expand-md header-menu-one bg-light">
            <div class="nav-bar-header-one">
                <div class="header-logo">
                    <a href="<?=base_url()?>">
                        <img src="<?=base_url()?>assets/img/bk.png" alt="logo">
                        <!-- smart city -->
                    </a>
                </div>
                 <div class="toggle-button sidebar-toggle">
                    <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="d-md-none mobile-nav-bar">
               <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                    <i class="far fa-arrow-alt-circle-down"></i>
                </button>
                <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="header-main-menu collapse navbar-collapse " id="mobile-navbar">
                <ul class="navbar-nav">
                    <li class="navbar-item header-search-bar">
                        <div class="input-group stylish-input-group">
                            <!-- <span class="input-group-addon">
                                <button type="submit">
                                    <span class="flaticon-search" aria-hidden="true"></span>
                                </button>
                            </span>
                            <input type="text" class="form-control" placeholder="Find Something . . ."> -->
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ">
                    <li class="navbar-item dropdown header-admin">
                        <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            <div class="admin-title">
                                <h5 class="item-title">Welcome</h5>
                                <span>Admin</span>
                            </div>
                            <div class="admin-img">
                                <img src="<?=base_url()?>assets/img/figure/admin.jpg" alt="Admin">
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- <div class="item-header">
                                <h6 class="item-title">Steven Zone</h6>
                            </div> -->
                            <div class="item-content">
                                <ul class="settings-list">
                                   
                                    <li><a  onclick="change_pass()" style="cursor: pointer;"><i class="flaticon-gear-loading"></i>Change Password</a></li>
                                    <li><a href="<?=base_url()?>index.php/admin/logout"><i class="flaticon-turn-off"></i>Log Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    
                   
                    
                </ul>
            </div>
        </div>
        <!-- Header Menu Area End Here -->

        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color " style="height: -webkit-fill-available">
               <div class="mobile-sidebar-header d-md-none">
                    <div class="header-logo">
                        <a href="<?=base_url()?>assets/index.html">
                            <img src="<?=base_url()?>assets/img/logo1.png" alt="logo">
                        </a>
                    </div>
               </div>
                <div class="sidebar-menu-content">
                    <ul class="nav nav-sidebar-menu sidebar-toggle-view">
                        <li class="nav-item sidebar-nav-item">
                            <a href="<?=base_url()?>" class="nav-link"><i class="flaticon-dashboard"></i><span>Dashboard</span></a>
                            
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="<?=base_url()?>index.php/admin/approval_requests" class="nav-link"><i class="flaticon-classmates"></i><span>Approval Requests</span></a>
                        </li>
                        <li class="nav-item sidebar-nav-item">
                            <a href="<?=base_url()?>index.php/admin/location_list" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Locations</span></a>
                            
                        </li>

                         <li class="nav-item sidebar-nav-item">
                            <a href="<?=base_url()?>index.php/admin/users_list" class="nav-link"><i
                                    class="flaticon-multiple-users-silhouette"></i><span>Users</span></a>
                            
                        </li>
                        
                       
                        
                        
                    </ul>
                </div>
            </div>
            <!-- Sidebar Area End Here -->

            <script type="text/javascript">
  function change_pass()
    {
        var txt;
        var password = prompt("Please enter your Password:");
        if (password!=null) 
        {
            var user_password = prompt("Enter New Password:");
            if (user_password!=null) 
            {
                var SEND_DATA={password:password,user_password:user_password};
                 $.ajax({
                 type: 'POST',
                 url:'<?=base_url()?>index.php/admin/change_password',
                 data:SEND_DATA,

                success:function(data)
                {
                    alert(data);
                    location.reload();
                }
            });
            }
        }
           
    }
</script>    

<script type="text/javascript">
  
$('img[data-enlargable]').addClass('img-enlargable').click(function(){
    var src = $(this).attr('src');
    $('<div>').css({
        background: 'RGBA(0,0,0,.5) url('+src+') no-repeat center',
        backgroundSize: 'contain',
        width:'100%', height:'100%',
        position:'fixed',
        zIndex:'10000',
        top:'0', left:'0',
        cursor: 'zoom-out'
    }).click(function(){
        $(this).remove();
    }).appendTo('body');
});

</script>