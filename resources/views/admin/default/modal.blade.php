<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Apr 2024 08:15:59 GMT -->
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

<link rel="stylesheet" type="text/css" href="../files/bower_components/sweetalert/css/sweetalert.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">

<link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="../files/assets/css/component.css">

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
<li class="pcoded-hasmenu active pcoded-trigger">
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
<li class="active">
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
<li class="pcoded-hasmenu">
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
<li class=" ">
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
<i class="feather icon-gitlab bg-c-blue"></i>
<div class="d-inline">
<h5>Modal</h5>
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
<li class="breadcrumb-item"><a href="#!">Advance Components</a>
</li>
<li class="breadcrumb-item">
<a href="#!">Modal</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">

<div class="page-body button-page">
<div class="row">

<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Static Example</h5>
</div>
<div class="card-block">

<div class="bd-example bd-example-modal">
<div class="modal">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Modal title</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<p>Modal body text goes here.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary mobtn" data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary mobtn">Save changes</button>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


<div class="col-lg-12 col-xl-6">
<div class="card">
<div class="card-header">
<h5>Bootstrap Modals</h5>
</div>
<div class="card-block">
<p>use code<code> modal-lg, modal-sm</code> to use large and small popup modal.</p>
<ul>
<li>

<button type="button" class="btn btn-default waves-effect" data-bs-toggle="modal" data-bs-target="#default-Modal">Static</button>
<div class="modal fade" id="default-Modal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Modal title</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<h5>Static Modal</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default waves-effect " data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button>
</div>
</div>
</div>
</div>
</li>
<li>

<button type="button" class="btn btn-primary waves-effect" data-bs-toggle="modal" data-bs-target="#large-Modal">Large</button>
<div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Modal title</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<h5>Default Modal</h5>
<p>This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default waves-effect " data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button>
</div>
</div>
</div>
</div>
</li>
<li>

<button type="button" class="btn btn-success waves-effect" data-bs-toggle="modal" data-bs-target="#small-Modal">Small</button>
<div class="modal fade" id="small-Modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Modal title</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<h5>Small Modal</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing .</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default waves-effect " data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>


<div class="col-lg-12 col-xl-6">
<div class="card">
<div class="card-header">
<h5>Custom Modals</h5>
</div>
<div class="card-block">
<p>use custom modals tabs, overflow, lightbox, Multi modal.</p>
<ul>
<li>

<button type="button" class="btn btn-warning waves-effect" data-bs-toggle="modal" data-bs-target="#Modal-tab">Tabs</button>

<div class="modal fade modal-flex" id="Modal-tab" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<ul class="nav nav-tabs" role="tablist">
<li class="nav-item">
<a class="nav-link active" data-bs-toggle="tab" href="#tab-home" role="tab">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#tab-profile" role="tab">Profile</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#tab-messages" role="tab">Messages</a>
</li>
<li class="nav-item">
<a class="nav-link" data-bs-toggle="tab" href="#tab-settings" role="tab">Settings</a>
</li>
</ul>
<div class="tab-content modal-body">
<div class="tab-pane active" id="tab-home" role="tabpanel">
<h6>Home</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing</p>
</div>
<div class="tab-pane" id="tab-profile" role="tabpanel">
<h6>Profile</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing</p>
</div>
<div class="tab-pane" id="tab-messages" role="tabpanel">
<h6>Messages</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing</p>
</div>
<div class="tab-pane" id="tab-settings" role="tabpanel">
<h6>Settings</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing</p>
</div>
</div>
</div>
</div>
</div>
</div>
</li>
<li>

<button type="button" class="btn btn-danger waves-effect" data-bs-toggle="modal" data-bs-target="#Modal-overflow">Overflow</button>

<div class="modal fade modal-flex" id="Modal-overflow" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body model-container">
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<h5 class="font-header">Some text above the scrollable box</h5>
<p>This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
<div class="overflow-container">
<h5>Overflow container</h5>
</div>
<img src="../files/assets/images/Modal/overflow.html" alt class="img img-fluid" />
<p class="p-t-15">Similique velit aut et cumque illum consequatur doloribus quis ipsam sunt sint qui impedit nihil voluptate animi nesciunt corporis aspernatur quaerat sed rem voluptas commodi magnam porro eum sunt quis ullam aut odit laudantium quia soluta corrupti aut qui officiis hic voluptatibus aut itaque voluptates qui expedita minus autem aliquid et debitis omnis provident quia voluptate illo tempora illum maiores perferendis dolorem recusandae ut reprehenderit ad est eum occaecati quam non et quod amet illo id doloremque vitae porro porro sit amet voluptatem quia laboriosam aliquam quia quis facilis eveniet dolorum sunt neque rerum earum ut eaque ab tenetur quia nam quis rerum cumque eos excepturi nostrum qui distinctio porro enim vitae eligendi accusantium quia possimus et autem error repellendus vitae ad quia laborum minima autem nulla optio ad ea nobis animi illo voluptates cum recusandae temporibus voluptate amet quam excepturi odio quia suscipit inventore et rerum quos rerum aut doloribus aut consequatur earum impedit reiciendis saepe voluptates exercitationem maxime culpa saepe ducimus culpa ut aliquam magnam aut veniam sit totam architecto vel distinctio aspernatur aut qui labore quaerat rerum voluptatem sapiente sint sed explicabo et hic laboriosam sit nesciunt et minus et aut dignissimos ut porro incidunt sint et nihil id tempora aut et illum molestiae aperiam minus earum repellendus tempora illo itaque amet facilis quia rem iure quod corrupti dolores et sequi sunt ipsa labore quia unde qui blanditiis ut eos at quia beatae sit repellat quibusdam neque natus expedita sed perspiciatis atque quas voluptatem autem velit enim qui omnis molestiae et repellat sapiente corporis ipsam sed veritatis in quo quod et occaecati quia rerum iusto cumque accusamus numquam sunt quo sequi id molestiae consequatur doloribus molestiae autem nisi nostrum blanditiis et nihil sed nobis incidunt omnis quos minima eius quo accusamus qui ea minus aut est tempora quia inventore ad delectus vel et accusamus fuga eius ipsa aliquam alias sint maxime quae enim atque corrupti libero eos nesciunt et voluptas velit numquam illo non qui quaerat enim omnis et ex asperiores inventore quisquam est enim labore ut nobis consequatur fuga ut quo vel molestiae alias eius quod aspernatur laudantium pariatur eius fuga inventore esse at alias repudiandae perspiciatis id qui fuga consequatur recusandae atque iste commodi sapiente eaque labore ipsa aut sint quo vel recusandae ab iusto ducimus minus voluptas ex et illo commodi ipsa pariatur qui quae adipisci saepe dicta delectus nostrum illum incidunt laboriosam est maxime eum debitis et explicabo quia doloribus quod occaecati tempore tempora labore nihil enim recusandae et dolorum temporibus molestiae sint non porro neque minus provident reprehenderit similique illum voluptate qui dicta dolorum totam quia ut nihil dolore fugiat laboriosam molestiae eveniet omnis consequatur non magni nemo consequatur laboriosam non facilis harum eaque illo pariatur rerum dolores quis autem nemo aut enim tenetur pariatur et non quam repudiandae quia aliquam sunt corporis aperiam natus aut reprehenderit non non illum cum laboriosam nulla quaerat eligendi laudantium perspiciatis.</p>
</div>
<div class="p-15">
<h5 class="font-header">Some text above the scrollable box</h5>
<p>This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
</div>
</div>
</div>
</div>
</li>
<li>

<button type="button" class="btn btn-info waves-effect" data-bs-toggle="modal" data-bs-target="#Modal-lightbox">Light Box</button>

<div class="modal fade" id="Modal-lightbox" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<img src="../files/assets/images/Modal/overflow.html" alt class="img img-fluid" />
</div>
</div>
</div>
</div>
</li>
<li>

<button type="button" class="btn btn-success waves-effect m-b-10" data-bs-toggle="modal" data-bs-target="#myModal">Multi Model</button>

<div class="modal fade modal-flex" id="Modal-Multi" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
<h4 class="modal-title">Modal title</h4>
</div>
<div class="modal-body text-center">
<div>
<button type="button" class="btn btn-default waves-effect m-t-20 " data-bs-toggle="modal" data-bs-target="#meta-Modal">Click Here!</button>
</div>
<div class="modal fade" id="meta-Modal" tabindex="-1" role="dialog">
<div class="modal-dialog modal-sm" role="document">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Modal title</h4>
</div>
<div class="modal-body">
<h5>Small Modal</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing .</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<p class="m-t-10">Lorem ipsum dolor sit amet, consectetur adipiscing lorem impus dolorsit.onsectetur adipiscing</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default waves-effect " data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary waves-effect waves-light ">Save changes</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="myModal">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Modal 1</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="container"></div>
<div class="modal-body">Content for the dialog / modal goes here.
<p class="p-t-40 p-b-40">more content</p>
<a data-bs-toggle="modal" href="#myModal2" class="btn btn-primary">Launch modal</a>
</div>
<div class="modal-footer"> <a href="#" data-bs-dismiss="modal" class="btn">Close</a>
<a href="#" class="btn btn-primary">Save changes</a>
</div>
</div>
</div>
</div>
<div class="modal fade" id="myModal2">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Modal 2</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="container"></div>
<div class="modal-body">Content for the dialog / modal goes here.
<p class="p-t-30 p-b-40">come content</p>
<a data-bs-toggle="modal" href="#myModal3" class="btn btn-primary">Launch modal</a>
</div>
<div class="modal-footer"> <a href="#" data-bs-dismiss="modal" class="btn">Close</a>
<a href="#" class="btn btn-primary">Save changes</a>
</div>
</div>
</div>
</div>
<div class="modal fade" id="myModal3">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Modal 3</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="container"></div>
<div class="modal-body">Content for the dialog / modal goes here.
<a data-bs-toggle="modal" href="#myModal4" class="btn btn-primary">Launch modal</a>
</div>
<div class="modal-footer"> <a href="#" data-bs-dismiss="modal" class="btn">Close</a>
<a href="#" class="btn btn-primary">Save changes</a>
</div>
</div>
</div>
</div>
<div class="modal fade" id="myModal4">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h4 class="modal-title">Modal 4</h4>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
</div>
<div class="container"></div>
<div class="modal-body">Content for the dialog / modal goes here.</div>
<div class="modal-footer"> <a href="#" data-bs-dismiss="modal" class="btn">Close</a>
<a href="#" class="btn btn-primary">Save changes</a>
</div>
</div>
</div>
</div>

</li>
</ul>
</div>
</div>
</div>


<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Bootstrap Modals</h5>
</div>
<div class="card-block">
<p>use button<code> onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);"</code> to use effect.</p>
<ul>
<li>
<button type="button" class="btn btn-primary sweet-1 m-b-10" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'sweet-1']);">Basic</button>
</li>
<li>
<button type="button" class="btn btn-success alert-success-msg m-b-10" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success']);">Success</button>
</li>
<li>
<button type="button" class="btn btn-warning alert-confirm m-b-10" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-confirm']);">Confirm</button>
</li>
<li>
<button type="button" class="btn btn-danger alert-success-cancel m-b-10" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-success-cancel']);">Success or Cancel</button>
</li>
<li>
<button type="button" class="btn btn-primary alert-prompt m-b-10" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-prompt']);">Prompt</button>
</li>
<li>
<button type="button" class="btn btn-success alert-ajax m-b-10" onclick="_gaq.push(['_trackEvent', 'example', 'try', 'alert-ajax']);">Ajax</button>
</li>
</ul>
</div>
</div>
</div>


<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h5>Bootstrap Modals</h5>
</div>
<div class="card-block">
<p>use button with class<code> md-effect-1 to 18</code> to use effect.</p>
<div class="animation-model">
<button type="button" class="btn btn-default btn-outline-default waves-effect md-trigger" data-modal="modal-1">Fade in &amp; Scale</button>
<button type="button" class="btn btn-primary btn-outline-primary waves-effect md-trigger" data-modal="modal-2">Slide in (right)</button>
<button type="button" class="btn btn-success btn-outline-success waves-effect md-trigger" data-modal="modal-3">Slide in (bottom)</button>
<button type="button" class="btn btn-warning btn-outline-warning waves-effect md-trigger" data-modal="modal-4">Newspaper</button>
<button type="button" class="btn btn-danger btn-outline-danger waves-effect md-trigger" data-modal="modal-5">Fall</button>
<button type="button" class="btn btn-info btn-outline-info waves-effect md-trigger" data-modal="modal-6">Side Fall</button>
<button type="button" class="btn btn-default btn-outline-default waves-effect md-trigger" data-modal="modal-7">Sticky Up</button>
<button type="button" class="btn btn-primary btn-outline-primary waves-effect md-trigger" data-modal="modal-8">3D Flip (horizontal)</button>
<button type="button" class="btn btn-success btn-outline-success waves-effect md-trigger" data-modal="modal-9">3D Flip (vertical)</button>
<button type="button" class="btn btn-warning btn-outline-warning waves-effect md-trigger" data-modal="modal-10">3D Sign</button>
<button type="button" class="btn btn-danger btn-outline-danger waves-effect md-trigger" data-modal="modal-11">Super Scaled</button>
<button type="button" class="btn btn-info btn-outline-info waves-effect md-trigger" data-modal="modal-12">Just Me</button>
<button type="button" class="btn btn-primary btn-outline-primary waves-effect md-trigger" data-modal="modal-13">3D Slit</button>
<button type="button" class="btn btn-success btn-outline-success waves-effect md-trigger" data-modal="modal-14">3D Rotate Bottom</button>
<button type="button" class="btn btn-warning btn-outline-warning waves-effect md-trigger" data-modal="modal-15">3D Rotate In Left</button>
<button type="button" class="btn btn-danger btn-outline-danger waves-effect md-trigger md-setperspective" data-modal="modal-17">Let me in</button>
<button type="button" class="btn btn-default btn-outline-default waves-effect md-trigger md-setperspective" data-modal="modal-18">Make way!</button>
<button type="button" class="btn btn-primary btn-outline-primary waves-effect md-trigger md-setperspective" data-modal="modal-19">Slip from top</button>

<div class="md-modal md-effect-1" id="modal-1">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-2" id="modal-2">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-3" id="modal-3">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-4" id="modal-4">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-5" id="modal-5">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-6" id="modal-6">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-7" id="modal-7">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-8" id="modal-8">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-9" id="modal-9">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-10" id="modal-10">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-11" id="modal-11">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-12" id="modal-12">
<div class="md-content">
<h3><span class="text-muted text-center">Modal Dialog</span></h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-13" id="modal-13">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-14" id="modal-14">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-15" id="modal-15">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-17" id="modal-17">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-18" id="modal-18">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-19" id="modal-19">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>
<div class="md-modal md-effect-20" id="modal-20">
<div class="md-content">
<h3>Modal Dialog</h3>
<div>
<p>This is a modal window. You can do the following things with it:</p>
<ul>
<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
<li><strong>Close:</strong> click on the button below to close the modal.</li>
</ul>
<button type="button" class="btn btn-primary waves-effect md-close">Close</button>
</div>
</div>
</div>

<div class="md-overlay"></div>
</div>
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


<script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<script src="../files/assets/pages/waves/js/waves.min.js"></script>

<script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

<script type="text/javascript" src="../files/bower_components/sweetalert/js/sweetalert.min.js"></script>
<script type="text/javascript" src="../files/assets/js/modal.js"></script>


<script src="../files/assets/js/classie.js"></script>
<script type="text/javascript" src="../files/assets/js/modalEffects.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="../files/assets/js/script.js"></script>
</body>

<!-- Mirrored from demo.dashboardpack.com/admindek-html/default/modal.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Apr 2024 08:16:06 GMT -->
</html>
