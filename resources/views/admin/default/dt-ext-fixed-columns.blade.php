<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Apr 2024 08:18:17 GMT -->
<head>
<title>Admindek | Admin Template</title>


<!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 5 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">

<link href="../../../fonts.googleapis.com/css0f7c.css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="../../../fonts.googleapis.com/css1180.css?family=Quicksand:500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
</head>
<body>

<div class="loader-bg">
<div class="loader-bar"></div>
</div>

<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">

<nav class="navbar header-navbar pcoded-header">
<div class="navbar-wrapper">
<div class="navbar-logo">
<a href="index.html">
<img class="img-fluid" src="../files/assets/images/logo.png" alt="Theme-Logo" />
</a>
<a class="mobile-menu" id="mobile-collapse" href="#!">
<i class="feather icon-menu icon-toggle-right"></i>
</a>
<a class="mobile-options waves-effect waves-light">
<i class="feather icon-more-horizontal"></i>
</a>
</div>
<div class="navbar-container container-fluid">
<ul class="nav-left">
<li class="header-search">
<div class="main-search morphsearch-search">
<div class="input-group">
<span class="input-group-text search-close">
<i class="feather icon-x input-group-text"></i>
</span>
<input type="text" class="form-control" placeholder="Enter Keyword">
<span class="input-group-text search-btn">
<i class="feather icon-search input-group-text"></i>
</span>
</div>
</div>
</li>
<li>
<a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
<i class="full-screen feather icon-maximize"></i>
</a>
</li>
</ul>
<ul class="nav-right">
<li class="header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-bs-toggle="dropdown">
<i class="feather icon-bell"></i>
<span class="badge bg-c-red">5</span>
</div>
<ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<h6>Notifications</h6>
<label class="form-label label label-danger">New</label>
</li>
<li>
<div class="d-flex">
<div class="flex-shrink-0">
<img class="img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
</div>
<div class="flex-grow-1">
<h5 class="notification-user">John Doe</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="d-flex">
<div class="flex-shrink-0">
<img class="img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
</div>
<div class="flex-grow-1">
<h5 class="notification-user">Joseph William</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
<li>
<div class="d-flex">
<div class="flex-shrink-0">
<img class="img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
</div>
<div class="flex-grow-1">
<h5 class="notification-user">Sara Soudein</h5>
<p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
<span class="notification-time">30 minutes ago</span>
</div>
</div>
</li>
</ul>
</div>
</li>
<li class="header-notification">
<div class="dropdown-primary dropdown">
<div class="displayChatbox dropdown-toggle" data-bs-toggle="dropdown">
<i class="feather icon-message-square"></i>
<span class="badge bg-c-green">3</span>
</div>
</div>
</li>
<li class="user-profile header-notification">
<div class="dropdown-primary dropdown">
<div class="dropdown-toggle" data-bs-toggle="dropdown">
<img src="../files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
<span>John Doe</span>
<i class="feather icon-chevron-down"></i>
</div>
<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
<li>
<a href="#!">
<i class="feather icon-settings"></i> Settings
</a>
</li>
<li>
<a href="#">
<i class="feather icon-user"></i> Profile
</a>
</li>
<li>
<a href="email-inbox.html">
<i class="feather icon-mail"></i> My Messages
</a>
</li>
<li>
<a href="auth-lock-screen.html">
<i class="feather icon-lock"></i> Lock Screen
</a>
</li>
<li>
<a href="auth-sign-in-social.html">
<i class="feather icon-log-out"></i> Logout
</a>
</li>
</ul>
</div>
</li>
</ul>
</div>
</div>
</nav>

<div id="sidebar" class="users p-chat-user showChat">
<div class="had-container">
<div class="p-fixed users-main">
<div class="user-box">
<div class="chat-search-box">
<a class="back_friendlist">
<i class="feather icon-x"></i>
</a>
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
<button class="btn btn-primary waves-effect waves-light" type="button">
<i class="feather icon-search"></i>
</button>
</div>
</div>
</div>
<div class="main-friend-list">
<div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="chat-header">Josephin Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Lary Doe</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
<div class="live-status bg-success"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alice</div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
</div>
</div>
<div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
<a class="media-left" href="#!">
<img class="media-object img-radius" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
<div class="live-status bg-default"></div>
</a>
<div class="media-body">
<div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="showChat_inner">
<div class="d-flex chat-inner-header">
<a class="back_chatBox">
<i class="feather icon-x"></i> Josephin Doe
</a>
</div>
<div class="main-friend-chat">
<div class="d-flex chat-messages">
<a class="media-left photo-table" href="#!">
<div class="flex-shrink-0">
<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</div>
</a>
<div class="flex-grow-1 chat-menu-content">
<div class>
<p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
<div class="d-flex chat-messages">
<div class="flex-grow-1 chat-menu-reply">
<div class>
<p class="chat-cont">Ohh! very nice</p>
</div>
<p class="chat-time">8:22 a.m.</p>
</div>
</div>
<div class="d-flex chat-messages">
<a class="media-left photo-table" href="#!">
<div class="flex-shrink-0">
<img class="media-object img-radius img-radius m-t-5" src="../files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
</div>
</a>
<div class="media-body chat-menu-content">
<div class>
<p class="chat-cont">can you come with me?</p>
</div>
<p class="chat-time">8:20 a.m.</p>
</div>
</div>
</div>
<div class="chat-reply-box">
<div class="right-icon-control">
<div class="input-group input-group-button">
<input type="text" class="form-control" placeholder="Write hear . . ">
<button class="btn btn-primary waves-effect waves-light" type="button">
<i class="feather icon-message-circle"></i>
</button>
</div>
</div>
</div>
</div>

<div class="pcoded-main-container">
<div class="pcoded-wrapper">

<nav class="pcoded-navbar">
<div class="nav-list">
<div class="pcoded-inner-navbar main-menu">
<div class="pcoded-navigation-label">Navigation</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-home"></i></span>
<span class="pcoded-mtext">Dashboard</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="index.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Default</span>
</a>
</li>
<li class>
<a href="dashboard-crm.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CRM</span>
</a>
</li>
<li class>
<a href="dashboard-analytics.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Analytics</span>
<span class="pcoded-badge label label-info ">NEW</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
<span class="pcoded-mtext">Page layouts</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
<ul class="pcoded-submenu">
<li class=" pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Vertical</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="menu-static.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static Layout</span>
</a>
</li>
<li class>
<a href="menu-header-fixed.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Header Fixed</span>
</a>
</li>
<li class>
<a href="menu-compact.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Compact</span>
</a>
</li>
<li class>
<a href="menu-sidebar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sidebar Fixed</span>
</a>
</li>
</ul>
</li>
<li class=" pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Horizontal</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="menu-horizontal-static.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static Layout</span>
</a>
</li>
<li class>
<a href="menu-horizontal-fixed.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed layout</span>
</a>
</li>
<li class>
<a href="menu-horizontal-icon.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Static With Icon</span>
</a>
</li>
<li class>
<a href="menu-horizontal-icon-fixed.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed With Icon</span>
</a>
</li>
</ul>
</li>
<li class>
<a href="menu-bottom.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Bottom Menu</span>
</a>
</li>
</ul>
</li>
<li class>
<a href="navbar-light.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-menu"></i>
</span>
<span class="pcoded-mtext">Navigation</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-layers"></i>
</span>
<span class="pcoded-mtext">Widget</span>
<span class="pcoded-badge label label-danger">100+</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="widget-statistic.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Statistic</span>
</a>
</li>
<li class>
<a href="widget-data.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data</span>
</a>
</li>
<li class>
<a href="widget-chart.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Chart Widget</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">UI Element</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-box"></i>
</span>
<span class="pcoded-mtext">Basic</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="alert.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Alert</span>
</a>
</li>
<li class>
<a href="breadcrumb.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Breadcrumbs</span>
</a>
</li>
<li class>
<a href="button.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
</li>
<li class>
<a href="box-shadow.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Box-Shadow</span>
</a>
</li>
<li class>
<a href="accordion.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Accordion</span>
</a>
</li>
<li class>
<a href="generic-class.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Generic Class</span>
</a>
</li>
<li class=" ">
<a href="tabs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tabs</span>
</a>
</li>
<li class=" ">
<a href="color.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Color</span>
</a>
</li>
<li class=" ">
<a href="label-badge.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Label Badge</span>
</a>
</li>
<li class=" ">
<a href="progress-bar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Progress Bar</span>
</a>
</li>
<li class=" ">
<a href="list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List</span>
</a>
</li>
<li class=" ">
<a href="tooltip.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tooltip And Popover</span>
</a>
</li>
<li class=" ">
<a href="typography.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Typography</span>
</a>
</li>
<li class=" ">
<a href="other.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Other</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-gitlab"></i>
</span>
<span class="pcoded-mtext">Advance</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="draggable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Draggable</span>
</a>
</li>
</li>
<li class=" ">
<a href="modal.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Modal</span>
</a>
</li>
<li class=" ">
<a href="notification.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Notifications</span>
</a>
</li>
<li class=" ">
<a href="rating.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rating</span>
</a>
</li>
<li class=" ">
<a href="range-slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Range Slider</span>
</a>
</li>
<li class=" ">
<a href="slider.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Slider</span>
</a>
</li>
<li class=" ">
<a href="syntax-highlighter.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Syntax Highlighter</span>
</a>
</li>
<li class=" ">
<a href="tour.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tour</span>
</a>
</li>
<li class=" ">
<a href="treeview.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Tree View</span>
</a>
</li>
<li class=" ">
<a href="nestable.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nestable</span>
</a>
</li>
<li class=" ">
<a href="toolbar.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Toolbar</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-package"></i>
</span>
<span class="pcoded-mtext">Extra</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="session-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Timeout</span>
</a>
</li>
<li class=" ">
<a href="session-idle-timeout.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Session Idle Timeout</span>
</a>
</li>
<li class=" ">
<a href="offline.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="animation.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-aperture rotate-refresh"></i>
</span>
<span class="pcoded-mtext">Animations</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-command"></i>
</span>
<span class="pcoded-mtext">Icons</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="icon-font-awesome.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Font Awesome</span>
</a>
</li>
<li class=" ">
<a href="icon-themify.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Themify</span>
</a>
</li>
<li class=" ">
<a href="icon-simple-line.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Simple Line Icon</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">Forms</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-clipboard"></i>
</span>
<span class="pcoded-mtext">Form</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="form-elements-component.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Components</span>
</a>
</li>
<li class=" ">
<a href="form-elements-add-on.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Add-On</span>
</a>
</li>
<li class=" ">
<a href="form-elements-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance</span>
</a>
</li>
<li class=" ">
<a href="form-validation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Validation</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="form-picker.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-edit-1"></i>
</span>
<span class="pcoded-mtext">Form Picker</span>
<span class="pcoded-badge label label-warning">NEW</span>
</a>
</li>
<li class=" ">
<a href="form-select.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-feather"></i>
</span>
<span class="pcoded-mtext">Form Select</span>
</a>
</li>
<li class=" ">
<a href="form-masking.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-shield"></i>
</span>
<span class="pcoded-mtext">Form Masking</span>
</a>
</li>
<li class=" ">
<a href="form-wizard.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-tv"></i>
</span>
<span class="pcoded-mtext">Form Wizard</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Tables</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-credit-card"></i>
</span>
<span class="pcoded-mtext">Bootstrap Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="bs-basic-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-sizing.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sizing Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-border.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Border Table</span>
</a>
</li>
<li class=" ">
<a href="bs-table-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling Table</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-inbox"></i>
</span>
<span class="pcoded-mtext">Data Table</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-basic.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-advance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Advance Initialization</span>
</a>
</li>
<li class=" ">
<a href="dt-styling.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Styling</span>
</a>
</li>
<li class=" ">
<a href="dt-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">API</span>
</a>
</li>
<li class=" ">
<a href="dt-ajax.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Ajax</span>
</a>
</li>
<li class=" ">
<a href="dt-server-side.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Server Side</span>
</a>
</li>
<li class=" ">
<a href="dt-plugin.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Plug-In</span>
</a>
</li>
<li class=" ">
<a href="dt-data-sources.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Sources</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu active pcoded-trigger">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-server"></i>
</span>
<span class="pcoded-mtext">DT Extensions</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-autofill.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">AutoFill</span>
</a>
</li>
<li class="pcoded-hasmenu">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Button</span>
</a>
<ul class="pcoded-submenu">
<li class=" ">
<a href="dt-ext-basic-buttons.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Basic Button</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-buttons-html-5-data-export.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Export</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="dt-ext-col-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Col Reorder</span>
</a>
</li>
<li class="active">
<a href="dt-ext-fixed-columns.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Columns</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-fixed-header.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Fixed Header</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-key-table.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Key Table</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-responsive.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Responsive</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-row-reorder.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Row Reorder</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-scroller.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Scroller</span>
</a>
</li>
<li class=" ">
<a href="dt-ext-select.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Select Table</span>
</a>
</li>
</ul>
</li>
<li class=" ">
<a href="foo-table.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-hash"></i>
</span>
<span class="pcoded-mtext">FooTable</span>
</a>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-airplay"></i>
</span>
<span class="pcoded-mtext">Handson Table</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="handson-appearance.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Appearance</span>
</a>
</li>
<li class>
<a href="handson-data-operation.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Data Operation</span>
</a>
</li>
<li class>
<a href="handson-rows-cols.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Columns</span>
</a>
</li>
<li class>
<a href="handson-columns-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Columns Only</span>
</a>
</li>
<li class>
<a href="handson-cell-features.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Features</span>
</a>
</li>
<li class>
<a href="handson-cell-types.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Cell Types</span>
</a>
</li>
<li class>
<a href="handson-integrations.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Integrations</span>
</a>
</li>
<li class>
<a href="handson-rows-only.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rows Only</span>
</a>
</li>
<li class>
<a href="handson-utilities.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Utilities</span>
</a>
</li>
</ul>
</li>
<li class>
<a href="editable-table.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-edit"></i>
</span>
<span class="pcoded-mtext">Editable Table</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Chart And Maps</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-pie-chart"></i>
</span>
<span class="pcoded-mtext">Charts</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="chart-google.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Chart</span>
</a>
</li>
<li class>
<a href="chart-chartjs.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">ChartJs</span>
</a>
</li>
<li class>
<a href="chart-list.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">List Chart</span>
</a>
</li>
<li class>
<a href="chart-float.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Float Chart</span>
</a>
</li>
<li class>
<a href="chart-knob.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Knob chart</span>
</a>
</li>
<li class>
<a href="chart-morris.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Morris Chart</span>
</a>
</li>
<li class>
<a href="chart-nvd3.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Nvd3 Chart</span>
</a>
</li>
<li class>
<a href="chart-peity.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Peity Chart</span>
</a>
</li>
<li class>
<a href="chart-radial.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Radial Chart</span>
</a>
</li>
<li class>
<a href="chart-rickshaw.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Rickshaw Chart</span>
</a>
</li>
<li class>
<a href="chart-sparkline.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Sparkline Chart</span>
</a>
</li>
<li class>
<a href="chart-c3.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">C3 Chart</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-map"></i>
</span>
<span class="pcoded-mtext">Maps</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="map-google.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Maps</span>
</a>
</li>
<li class>
<a href="map-vector.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Vector Maps</span>
</a>
</li>
<li class>
<a href="map-api.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Google Map Search API</span>
</a>
</li>
<li class>
<a href="location.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Location</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">Pages</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-unlock"></i>
</span>
<span class="pcoded-mtext">Authentication</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="auth-sign-in-social.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Login</span>
</a>
</li>
<li class>
<a href="auth-sign-up-social.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Registration</span>
</a>
</li>
<li class>
<a href="auth-reset-password.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Forgot Password</span>
</a>
</li>
<li class>
<a href="auth-lock-screen.html" target="_blank" class="waves-effect waves-dark">
<span class="pcoded-mtext">Lock Screen</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-sliders"></i>
</span>
<span class="pcoded-mtext">Maintenance</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="error.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Error</span>
</a>
</li>
<li class>
<a href="comming-soon.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Comming Soon</span>
</a>
</li>
<li class>
<a href="offline-ui.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Offline UI</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-mail"></i>
</span>
<span class="pcoded-mtext">Email</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="email-compose.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Compose Email</span>
</a>
</li>
<li class>
<a href="email-inbox.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Inbox</span>
</a>
</li>
<li class>
<a href="email-read.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Read Mail</span>
</a>
</li>
</ul>
</li>
</ul>
<div class="pcoded-navigation-label">App</div>
<ul class="pcoded-item pcoded-left-item">
<a href="todo.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-bookmark"></i>
</span>
<span class="pcoded-mtext">To-Do</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Extension</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-file-plus"></i>
</span>
<span class="pcoded-mtext">Editor</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="ck-editor.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CK-Editor</span>
</a>
</li>
<li class>
<a href="wysiwyg-editor.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">WYSIWYG Editor</span>
</a>
</li>
</ul>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-calendar"></i>
</span>
<span class="pcoded-mtext">Event Calendar</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="event-full-calender.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">Full Calendar</span>
</a>
</li>
<li class>
<a href="event-clndr.html" class="waves-effect waves-dark">
<span class="pcoded-mtext">CLNDER</span>
<span class="pcoded-badge label label-info">NEW</span>
</a>
</li>
</ul>
</li>
<li class>
<a href="image-crop.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-scissors"></i>
<b>IC</b>
</span>
<span class="pcoded-mtext">Image Cropper</span>
</a>
</li>
<li class>
<a href="file-upload.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-upload-cloud"></i>
</span>
<span class="pcoded-mtext">File Upload</span>
</a>
</li>
<li class>
<a href="change-loges.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-briefcase"></i>
</span>
<span class="pcoded-mtext">Change Loges</span>
<span class="pcoded-badge label label-warning">1.0</span>
</a>
</li>
</ul>
<div class="pcoded-navigation-label">Other</div>
<ul class="pcoded-item pcoded-left-item">
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-list"></i>
</span>
<span class="pcoded-mtext">Menu Levels</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.1</span>
</a>
</li>
<li class="pcoded-hasmenu ">
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.2</span>
</a>
<ul class="pcoded-submenu">
<li class>
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 3.1</span>
</a>
</li>
</ul>
</li>
<li class>
<a href="javascript:void(0)" class="waves-effect waves-dark">
<span class="pcoded-mtext">Menu Level 2.3</span>
</a>
</li>
</ul>
</li>
<li class>
<a href="javascript:void(0)" class="disabled waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-power"></i>
<b>D</b>
</span>
<span class="pcoded-mtext">Disabled Menu</span>
</a>
</li>
<li class>
<a href="sample-page.html" class="waves-effect waves-dark">
<span class="pcoded-micon">
<i class="feather icon-watch"></i>
</span>
<span class="pcoded-mtext">Sample Page</span>
</a>
</li>
</ul>
</div>
</div>
</nav>

<div class="pcoded-content">

<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<i class="feather icon-server bg-c-blue"></i>
<div class="d-inline">
<h5>Fixed Columns</h5>
<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title breadcrumb-padding">
<li class="breadcrumb-item">
<a href="index.html"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Data Table</a>
</li>
<li class="breadcrumb-item"><a href="#!">Fixed Columns</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">

<div class="row">
<div class="col-lg-6">
<div class="card">
<div class="card-header">
<h5>Left And Right Fixed Columns</h5>
<span>When displaying a table which scrolls along the x-axis, it can sometimes be useful to the end user for the left most column to be fixed in place, if it shows grouping, index or similar information. This is basically the same idea as 'freeze columns' in Excel. This can be achieved with the FixedColumns plug-in for DataTables, as shown below.</span>
</div>
<div class="card-block">
<table id="left-right-fix" class="table stripe row-border order-column">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
<td>5421</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a8dc86c6c1d0c7c6e8ccc9dcc9dcc9cac4cddb86c6cddc">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
<td>8422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="492e673e20273d2c3b3a092d283d283d282b252c3a67272c3d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
<td>1562</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="60014e030f1820040114011401020c05134e0e0514">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
<td>6224</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a6c588cdc3cacadfe6c2c7d2c7d2c7c4cac3d588c8c3d2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
<td>5407</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89e8a7fae8fde6fcc9ede8fde8fde8ebe5ecfaa7e7ecfd">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
<td>4804</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fc9ed28b959090959d918f9392bc989d889d889d9e90998fd2929988">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
<td>9608</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="325a1c515a535c565e574072565346534653505e57411c5c5746">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
<td>6200</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="03712d6762756a67706c6d43676277627762616f66702d6d6677">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
<td>2360</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="88eba6e0fdfafbfcc8ece9fce9fce9eae4edfba6e6edfc">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
<td>1667</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0c7f226a7e637f784c686d786d786d6e60697f22626978">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
<td>3814</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f79dd990969e999284b7939683968396959b9284d9999283">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
<td>9497</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6d1c430b011403032d090c190c190c0f01081e43030819">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
<td>6741</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="75165b181407061d14191935111401140114171910065b1b1001">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
<td>3597</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82eaace9e7ecece7e6fbc2e6e3f6e3f6e3e0eee7f1acece7f6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
<td>1965</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb8fd59d928f818b9a8f89929890bb9f9a8f9a8f9a99979e88d5959e8f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
<td>1581</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="630e4d100a0f150223070217021702010f06104d0d0617">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
<td>3059</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="75055b170c071135111401140114171910065b1b1001">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
<td>1721</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f394dd9f9a87879f96b3979287928792919f9680dd9d9687">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
<td>2558</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1d7f337a6f78786f5d797c697c697c7f71786e33737869">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
<td>2290</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="563278243f392516323722372237343a332578383322">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
<td>1937</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c7ade9a4a6aba3b0a2abab87a3a6b3a6b3a6a5aba2b4e9a9a2b3">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
<td>6154</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="572e79353225252e17333623362336353b322479393223">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
<td>8330</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f89bd68e99969b9db89c998c998c999a949d8bd6969d8c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
<td>3023</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f1bbe2fcf9f1f0e7d5f1f4e1f4e1f4f7f9f0e6bbfbf0e1">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
<td>5797</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4a5eab6a5a9abb784a0a5b0a5b0a5a6a8a1b7eaaaa1b0">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
<td>8822</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dfb8f1b5b0a6bcba9fbbbeabbeabbebdb3baacf1b1baab">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
<td>9239</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8fe5a1ece7eee1e8cfebeefbeefbeeede3eafca1e1eafb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
<td>1314</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c7e326b7d7b72796e5c787d687d687d7e70796f32727968">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
<td>2947</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="690f470e1b0c0c07290d081d081d080b050c1a47070c1d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
<td>8899</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="74075a1d001b0134101500150015161811075a1a1100">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
<td>2769</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9bf6b5f3f4eee8fedbfffaeffaeffaf9f7fee8b5f5feef">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
<td>6832</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2655084453544d5566424752475247444a435508484352">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
<td>3606</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4b4eaa6a5b6b0a8a1b0b084a0a5b0a5b0a5a6a8a1b7eaaaa1b0">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
<td>2860</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9ff8b1fcf0edebfae5dffbfeebfeebfefdf3faecb1f1faeb">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
<td>8240</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86eba8ebe5e5f4e7ffc6e2e7f2e7f2e7e4eae3f5a8e8e3f2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="493c672b3c3d252c3b092d283d283d282b252c3a67272c3d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
<td>7031</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb4f2b4bda8bab5b9b0b89cb8bda8bda8bdbeb0b9aff2b2b9a8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
<td>6318</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0f6721697a6a617b6a7c4f6b6e7b6e7b6e6d636a7c21616a7b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
<td>9422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6d1b43050c1f1f0801012d090c190c190c0f01081e43030819">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
<td>7580</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f5b01424040414a566f4b4e5b4e5b4e4d434a5c01414a5b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
<td>1042</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="167c3874647772657e776156727762776277747a736538787362">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
<td>2120</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="aac584c6c3cbc4cdeacecbdecbdecbc8c6cfd984c4cfde">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
<td>6222</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f391dd9d92809bb3979287928792919f9680dd9d9687">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
<td>9383</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3a4914435b575b57554e557a5e5b4e5b4e5b58565f4914545f4e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
<td>8327</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b3f653c2a273f24250b2f2a3f2a3f2a29272e3865252e3f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
<td>2927</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef89c18c8e828e8c8780af8b8e9b8e9b8e8d838a9cc1818a9b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
<td>8352</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c7b4e9a5a6aba3b0aea987a3a6b3a6b3a6a5aba2b4e9a9a2b3">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
<td>7439</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cbb1e5adb9aaa5a08bafaabfaabfaaa9a7aeb8e5a5aebf">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
<td>4389</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ef4a0fdebfcfcefe0e1ceeaeffaeffaefece2ebfda0e0ebfa">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
<td>3431</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbb1f5bab8b4a8afba9bbfbaafbaafbab9b7bea8f5b5beaf">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
<td>3990</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="51327f22253427343f2211353025302530333d34227f3f3425">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
<td>1016</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a4cc8ac6d1d0c8c1d6e4c0c5d0c5d0c5c6c8c1d78acac1d0">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
<td>6733</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb97d59c899e9e89bb9f9a8f9a8f9a99979e88d5959e8f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
<td>8196</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f35713e333a273e313b3a2d1f3b3e2b3e2b3e3d333a2c71313a2b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
<td>6373</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3c4f1258595f57594e7c585d485d485d5e50594f12525948">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1b763579696e787e5b7f7a6f7a6f7a79777e6835757e6f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
<td>4226</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="23470d504d4a47465163474257425742414f46500d4d4657">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="card">
<div class="card-header">
<h5>Right Fixed Column</h5>
<span>FixedColumns has the ability to freeze columns on both the left and right hand sides of the table. By default it will fix the first column on the left, but using the initialisation parameters leftColumns and rightColumns you can alter this to fix the columns on the right as well. This example shows a single column fixed in place, in this case the right most column.</span>
</div>
<div class="card-block">
<table id="right-fix" class="table stripe row-border order-column">
<thead>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Position</th>
<th>Office</th>
<th>Age</th>
<th>Start date</th>
<th>Salary</th>
<th>Extn.</th>
<th>E-mail</th>
</tr>
</thead>
<tbody>
<tr>
<td>Tiger</td>
<td>Nixon</td>
<td>System Architect</td>
<td>Edinburgh</td>
<td>61</td>
<td>2011/04/25</td>
<td>$320,800</td>
<td>5421</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3c79ddddacbdcddf3d7d2c7d2c7d2d1dfd6c09dddd6c7">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Garrett</td>
<td>Winters</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>63</td>
<td>2011/07/25</td>
<td>$170,750</td>
<td>8422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="01662f76686f7564737241656075607560636d64722f6f6475">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Ashton</td>
<td>Cox</td>
<td>Junior Technical Author</td>
<td>San Francisco</td>
<td>66</td>
<td>2009/01/12</td>
<td>$86,000</td>
<td>1562</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="07662964687f47636673667366656b627429696273">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cedric</td>
<td>Kelly</td>
<td>Senior Javascript Developer</td>
<td>Edinburgh</td>
<td>22</td>
<td>2012/03/29</td>
<td>$433,060</td>
<td>6224</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="03602d68666f6f7a43676277627762616f66702d6d6677">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Airi</td>
<td>Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td>33</td>
<td>2008/11/28</td>
<td>$162,700</td>
<td>5407</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c7d326f7d6873695c787d687d687d7e70796f32727968">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brielle</td>
<td>Williamson</td>
<td>Integration Specialist</td>
<td>New York</td>
<td>61</td>
<td>2012/12/02</td>
<td>$372,000</td>
<td>4804</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5e3c7029373232373f332d31301e3a3f2a3f2a3f3c323b2d70303b2a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Herrod</td>
<td>Chandler</td>
<td>Sales Assistant</td>
<td>San Francisco</td>
<td>59</td>
<td>2012/08/06</td>
<td>$137,500</td>
<td>9608</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="640c4a070c050a0008011624000510051005060801174a0a0110">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Rhona</td>
<td>Davidson</td>
<td>Integration Specialist</td>
<td>Tokyo</td>
<td>55</td>
<td>2010/10/14</td>
<td>$327,900</td>
<td>6200</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ef9dc18b8e99868b9c8081af8b8e9b8e9b8e8d838a9cc1818a9b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Colleen</td>
<td>Hurst</td>
<td>Javascript Developer</td>
<td>San Francisco</td>
<td>39</td>
<td>2009/09/15</td>
<td>$205,500</td>
<td>2360</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c9aae7a1bcbbbabd89ada8bda8bda8aba5acbae7a7acbd">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sonya</td>
<td>Frost</td>
<td>Software Engineer</td>
<td>Edinburgh</td>
<td>23</td>
<td>2008/12/13</td>
<td>$103,600</td>
<td>1667</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e0d50180c110d0a3e1a1f0a1f0a1f1c121b0d50101b0a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jena</td>
<td>Gaines</td>
<td>Office Manager</td>
<td>London</td>
<td>30</td>
<td>2008/12/19</td>
<td>$90,560</td>
<td>3814</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3953175e5850575c4a795d584d584d585b555c4a17575c4d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Quinn</td>
<td>Flynn</td>
<td>Support Lead</td>
<td>Edinburgh</td>
<td>22</td>
<td>2013/03/03</td>
<td>$342,000</td>
<td>9497</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="cdbce3aba1b4a3a38da9acb9acb9acafa1a8bee3a3a8b9">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Charde</td>
<td>Marshall</td>
<td>Regional Director</td>
<td>San Francisco</td>
<td>36</td>
<td>2008/10/16</td>
<td>$470,600</td>
<td>6741</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c2f62212d3e3f242d20200c282d382d382d2e20293f62222938">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Haley</td>
<td>Kennedy</td>
<td>Senior Marketing Designer</td>
<td>London</td>
<td>43</td>
<td>2012/12/18</td>
<td>$313,500</td>
<td>3597</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="21490f4a444f4f44455861454055405540434d44520f4f4455">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Tatyana</td>
<td>Fitzpatrick</td>
<td>Regional Director</td>
<td>London</td>
<td>19</td>
<td>2010/03/17</td>
<td>$385,750</td>
<td>1965</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1a6e347c736e606a7b6e687379715a7e7b6e7b6e7b78767f6934747f6e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Silva</td>
<td>Marketing Designer</td>
<td>London</td>
<td>66</td>
<td>2012/11/27</td>
<td>$198,500</td>
<td>1581</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a9c487dac0c5dfc8e9cdc8ddc8ddc8cbc5ccda87c7ccdd">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Paul</td>
<td>Byrd</td>
<td>Chief Financial Officer (CFO)</td>
<td>New York</td>
<td>64</td>
<td>2010/06/09</td>
<td>$725,000</td>
<td>3059</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b7c799d5cec5d3f7d3d6c3d6c3d6d5dbd2c499d9d2c3">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gloria</td>
<td>Little</td>
<td>Systems Administrator</td>
<td>New York</td>
<td>59</td>
<td>2009/04/10</td>
<td>$237,500</td>
<td>1721</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dbbcf5b7b2afafb7be9bbfbaafbaafbab9b7bea8f5b5beaf">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bradley</td>
<td>Greer</td>
<td>Software Engineer</td>
<td>London</td>
<td>41</td>
<td>2012/10/13</td>
<td>$132,000</td>
<td>2558</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e6c20697c6b6b7c4e6a6f7a6f7a6f6c626b7d20606b7a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Dai</td>
<td>Rios</td>
<td>Personnel Lead</td>
<td>Edinburgh</td>
<td>35</td>
<td>2012/09/26</td>
<td>$217,500</td>
<td>2290</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="43276d312a2c3003272237223722212f26306d2d2637">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jenette</td>
<td>Caldwell</td>
<td>Development Lead</td>
<td>New York</td>
<td>30</td>
<td>2011/09/03</td>
<td>$345,000</td>
<td>1937</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="dcb6f2bfbdb0b8abb9b0b09cb8bda8bda8bdbeb0b9aff2b2b9a8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Yuri</td>
<td>Berry</td>
<td>Chief Marketing Officer (CMO)</td>
<td>New York</td>
<td>40</td>
<td>2009/06/25</td>
<td>$675,000</td>
<td>6154</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f980d79b9c8b8b80b99d988d988d989b959c8ad7979c8d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Caesar</td>
<td>Vance</td>
<td>Pre-Sales Support</td>
<td>New York</td>
<td>21</td>
<td>2011/12/12</td>
<td>$106,450</td>
<td>8330</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="30531e46515e535570545144514451525c55431e5e5544">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Doris</td>
<td>Wilder</td>
<td>Sales Assistant</td>
<td>Sidney</td>
<td>23</td>
<td>2010/09/20</td>
<td>$85,600</td>
<td>3023</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5b3f752c32373f3e291b3f3a2f3a2f3a39373e2875353e2f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Angelica</td>
<td>Ramos</td>
<td>Chief Executive Officer (CEO)</td>
<td>London</td>
<td>47</td>
<td>2009/10/09</td>
<td>$1,200,000</td>
<td>5797</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0b1fea2b1bdbfa390b4b1a4b1a4b1b2bcb5a3febeb5a4">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Joyce</td>
<td>Developer</td>
<td>Edinburgh</td>
<td>42</td>
<td>2010/12/22</td>
<td>$92,575</td>
<td>8822</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d8bff6b2b7a1bbbd98bcb9acb9acb9bab4bdabf6b6bdac">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Chang</td>
<td>Regional Director</td>
<td>Singapore</td>
<td>28</td>
<td>2010/11/14</td>
<td>$357,650</td>
<td>9239</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6bcf8b5beb7b8b196b2b7a2b7a2b7b4bab3a5f8b8b3a2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Brenden</td>
<td>Wagner</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>28</td>
<td>2011/06/07</td>
<td>$206,850</td>
<td>1314</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8ae8a4fdebede4eff8caeeebfeebfeebe8e6eff9a4e4effe">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Fiona</td>
<td>Green</td>
<td>Chief Operating Officer (COO)</td>
<td>San Francisco</td>
<td>48</td>
<td>2010/03/11</td>
<td>$850,000</td>
<td>2947</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="472169203522222907232633263326252b223469292233">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shou</td>
<td>Itou</td>
<td>Regional Marketing</td>
<td>Tokyo</td>
<td>20</td>
<td>2011/08/14</td>
<td>$163,000</td>
<td>8899</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c0b3eea9b4afb580a4a1b4a1b4a1a2aca5b3eeaea5b4">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michelle</td>
<td>House</td>
<td>Integration Specialist</td>
<td>Sidney</td>
<td>37</td>
<td>2011/06/02</td>
<td>$95,400</td>
<td>2769</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b2df9cdaddc7c1d7f2d6d3c6d3c6d3d0ded7c19cdcd7c6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Suki</td>
<td>Burks</td>
<td>Developer</td>
<td>London</td>
<td>53</td>
<td>2009/10/22</td>
<td>$114,500</td>
<td>6832</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="483b662a3d3a233b082c293c293c292a242d3b66262d3c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Prescott</td>
<td>Bartlett</td>
<td>Technical Author</td>
<td>London</td>
<td>27</td>
<td>2011/05/07</td>
<td>$145,000</td>
<td>3606</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b3b65292a393f272e3f3f0b2f2a3f2a3f2a29272e3865252e3f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Gavin</td>
<td>Cortez</td>
<td>Team Leader</td>
<td>San Francisco</td>
<td>22</td>
<td>2008/10/26</td>
<td>$235,500</td>
<td>2860</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="32551c515d4046574872565346534653505e57411c5c5746">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Martena</td>
<td>Mccray</td>
<td>Post-Sales support</td>
<td>Edinburgh</td>
<td>46</td>
<td>2011/03/09</td>
<td>$324,050</td>
<td>8240</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b2665262828392a320b2f2a3f2a3f2a29272e3865252e3f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Unity</td>
<td>Butler</td>
<td>Marketing Designer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/12/09</td>
<td>$85,675</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e99cc78b9c9d858c9ba98d889d889d888b858c9ac7878c9d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Howard</td>
<td>Hatfield</td>
<td>Office Manager</td>
<td>San Francisco</td>
<td>51</td>
<td>2008/12/16</td>
<td>$164,500</td>
<td>7031</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="9cf4b2f4fde8faf5f9f0f8dcf8fde8fde8fdfef0f9efb2f2f9e8">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hope</td>
<td>Fuentes</td>
<td>Secretary</td>
<td>San Francisco</td>
<td>41</td>
<td>2010/02/12</td>
<td>$109,850</td>
<td>6318</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fc94d29a89999288998fbc989d889d889d9e90998fd2929988">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Vivian</td>
<td>Harrell</td>
<td>Financial Controller</td>
<td>San Francisco</td>
<td>62</td>
<td>2009/02/14</td>
<td>$452,500</td>
<td>9422</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7600581e170404131a1a36121702170217141a130558181302">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Timothy</td>
<td>Mooney</td>
<td>Office Manager</td>
<td>London</td>
<td>37</td>
<td>2008/12/11</td>
<td>$136,200</td>
<td>7580</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c68327173737279655c787d687d687d7e70796f32727968">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jackson</td>
<td>Bradshaw</td>
<td>Director</td>
<td>New York</td>
<td>65</td>
<td>2008/09/26</td>
<td>$645,750</td>
<td>1042</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7913571b0b181d0a11180e391d180d180d181b151c0a57171c0d">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Olivia</td>
<td>Liang</td>
<td>Support Engineer</td>
<td>Singapore</td>
<td>64</td>
<td>2011/02/03</td>
<td>$234,500</td>
<td>2120</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2f400143464e41486f4b4e5b4e5b4e4d434a5c01414a5b">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Bruno</td>
<td>Nash</td>
<td>Software Engineer</td>
<td>London</td>
<td>38</td>
<td>2011/05/03</td>
<td>$163,500</td>
<td>6222</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="96f4b8f8f7e5fed6f2f7e2f7e2f7f4faf3e5b8f8f3e2">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Sakura</td>
<td>Yamamoto</td>
<td>Support Engineer</td>
<td>Tokyo</td>
<td>37</td>
<td>2009/08/19</td>
<td>$139,575</td>
<td>9383</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fc8fd2859d919d91938893bc989d889d889d9e90998fd2929988">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Thor</td>
<td>Walton</td>
<td>Developer</td>
<td>New York</td>
<td>61</td>
<td>2013/08/11</td>
<td>$98,540</td>
<td>8327</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4a3e643d2b263e25240a2e2b3e2b3e2b28262f3964242f3e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Finn</td>
<td>Camacho</td>
<td>Support Engineer</td>
<td>San Francisco</td>
<td>47</td>
<td>2009/07/07</td>
<td>$87,500</td>
<td>2927</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="24420a47454945474c4b64404550455045464841570a4a4150">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Serge</td>
<td>Baldwin</td>
<td>Data Coordinator</td>
<td>Singapore</td>
<td>64</td>
<td>2012/04/09</td>
<td>$138,575</td>
<td>8352</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="53207d31323f37243a3d13373227322732313f36207d3d3627">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zenaida</td>
<td>Frank</td>
<td>Software Engineer</td>
<td>New York</td>
<td>63</td>
<td>2010/01/04</td>
<td>$125,250</td>
<td>7439</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0e7420687c6f60654e6a6f7a6f7a6f6c626b7d20606b7a">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Zorita</td>
<td>Serrano</td>
<td>Software Engineer</td>
<td>San Francisco</td>
<td>56</td>
<td>2012/06/01</td>
<td>$115,000</td>
<td>4389</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ea90c4998f98988b8485aa8e8b9e8b9e8b88868f99c4848f9e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jennifer</td>
<td>Acosta</td>
<td>Junior Javascript Developer</td>
<td>Edinburgh</td>
<td>43</td>
<td>2013/02/01</td>
<td>$75,650</td>
<td>3431</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a30743b3935292e3b1a3e3b2e3b2e3b38363f2974343f2e">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Cara</td>
<td>Stevens</td>
<td>Sales Assistant</td>
<td>New York</td>
<td>46</td>
<td>2011/12/06</td>
<td>$145,600</td>
<td>3990</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="80e3aef3f4e5f6e5eef3c0e4e1f4e1f4e1e2ece5f3aeeee5f4">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Hermione</td>
<td>Butler</td>
<td>Regional Director</td>
<td>London</td>
<td>47</td>
<td>2011/03/21</td>
<td>$356,250</td>
<td>1016</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="82eaace0f7f6eee7f0c2e6e3f6e3f6e3e0eee7f1acece7f6">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Lael</td>
<td>Greer</td>
<td>Systems Administrator</td>
<td>London</td>
<td>21</td>
<td>2009/02/27</td>
<td>$103,500</td>
<td>6733</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6804460f1a0d0d1a280c091c091c090a040d1b46060d1c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Jonas</td>
<td>Alexander</td>
<td>Developer</td>
<td>San Francisco</td>
<td>30</td>
<td>2010/07/14</td>
<td>$86,500</td>
<td>8196</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6b01450a070e130a050f0e192b0f0a1f0a1f0a09070e1845050e1f">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Shad</td>
<td>Decker</td>
<td>Regional Director</td>
<td>Edinburgh</td>
<td>51</td>
<td>2008/11/13</td>
<td>$183,000</td>
<td>6373</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="285b064c4d4b434d5a684c495c495c494a444d5b06464d5c">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Michael</td>
<td>Bruce</td>
<td>Javascript Developer</td>
<td>Singapore</td>
<td>29</td>
<td>2011/06/27</td>
<td>$183,000</td>
<td>5384</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="462b68243433252306222732273227242a233568282332">[email&#160;protected]</a></td>
</tr>
<tr>
<td>Donna</td>
<td>Snider</td>
<td>Customer Support</td>
<td>New York</td>
<td>27</td>
<td>2011/01/25</td>
<td>$112,000</td>
<td>4226</td>
<td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="690d471a07000d0c1b290d081d081d080b050c1a47070c1d">[email&#160;protected]</a></td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>

</div>
</div>
</div>

</div>
</div>

<div id="styleSelector">
</div>
</div>
</div>
</div>
</div>


<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../../cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
<script src="../files/assets/pages/data-table/extensions/fixed-colums/js/dataTables.fixedColumns.min.js"></script>

<script src="../files/assets/pages/data-table/extensions/fixed-colums/js/fixed-column-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/dt-ext-fixed-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Apr 2024 08:18:21 GMT -->
</html>
