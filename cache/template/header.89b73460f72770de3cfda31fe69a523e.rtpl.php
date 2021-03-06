<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>

<head>
    <!-- Meta and Title -->
    <meta charset="utf-8">
    <title>Arionum Pool</title>
    <meta name="keywords" content="Arionum Pool"/>
    <meta name="description" content="Arionum Pool">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Icomoon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/icomoon/icomoon.css">

    <link rel="stylesheet" type="text/css" href="assets/js/plugins/datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css"
          href="assets/js/plugins/datatables/extensions/Editor/css/dataTables.editor.css">
    <link rel="stylesheet" type="text/css"
          href="assets/js/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css">

  
    <!-- CSS - theme -->

    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/less/theme.min.css">

    <!-- CSS - allcp forms -->
    <link rel="stylesheet" type="text/css" href="assets/allcp/forms/css/forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/arionum.ico">

    <!-- IE8 HTML5 support  -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
.info-block h2 { font-size: 32px; }
.info-block i { font-size: 16px; }
</style>
</head>

<body class="dashboard-page with-customizer">

<!-- Body Wrap  -->
<div id="main">

    <!-- Header  -->
    <header class="navbar navbar-fixed-top">
        <div class="navbar-logo-wrapper dark bg-dark">
            <span class="navbar-logo-image" style="font-size: 25px; font-weight:bold; color:#00e6e6;" href="/"></a>
                Arionum Pool
            </span>
        </div>
        <span id="sidebar_left_toggle" class="ad ad-lines navbar-nav navbar-left"></span>



    </header>
    <!-- /Header  -->

    <!-- Sidebar  -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- Sidebar Left Wrapper  -->
        <div class="sidebar-left-content nano-content">

          
            <!-- Sidebar Menu  -->
            <ul class="nav sidebar-menu">
                <li <?php if( $q=='' ){ ?>class="active"<?php } ?>>
                    <a href="/">
                        <span class="sidebar-title">Dashboard</span>
                        <span class="sb-menu-icon fa fa-home"></span>
                    </a>
                </li>
                <li <?php if( $q=='blocks' ){ ?>class="active"<?php } ?> >
                    <a  href="/?q=blocks">
                        <span class="sidebar-title">Blocks Won</span>
                        <span class="sb-menu-icon fa fa-share-square-o"></span>
                    </a>
                </li>

                <li <?php if( $q=='payments' ){ ?>class="active"<?php } ?> >
                    <a  href="/?q=payments">
                        <span class="sidebar-title">Payments</span>
                       
                        <span class="sb-menu-icon fa fa-list-ul"></span>
                    </a>
                </li>
                <li <?php if( $q=='info' ){ ?>class="active"<?php } ?> >
                    <a  href="/?q=info">
                        <span class="sidebar-title">How to mine</span>
                       
                        <span class="sb-menu-icon fa fa-info"></span>
                    </a>
                </li>
		<li <?php if( $q=='benchmarks' ){ ?>class="active"<?php } ?> >
                    <a  href="/?q=benchmarks">
                        <span class="sidebar-title">Benchmarks</span>

                        <span class="sb-menu-icon fa fa-compass"></span>
                    </a>
                </li>
                <li>
                    <a  href="https://arionum.info/calculator">
                        <span class="sidebar-title">Calculator</span>

                        <span class="sb-menu-icon fa fa-calculator"></span>
                    </a>
                </li>

                <li>
                    <a href="https://arionum.info/discord">
                        <span class="sidebar-title">Discord</span>
                       
                        <span class="sb-menu-icon fa fa-slack"></span>
                    </a>
                </li>

            </ul>
            <!-- /Sidebar Menu  -->

        </div>
        <!-- /Sidebar Left Wrapper  -->

    </aside>
    <!-- /Sidebar -->

    <!-- Main Wrapper -->
    <section id="content_wrapper">


  
        <!-- Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- Column Center -->
            <div class="chute chute-center">

