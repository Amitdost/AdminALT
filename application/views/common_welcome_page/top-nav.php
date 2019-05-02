<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Your Poetary Hub</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('/assest/custom_css/main.css')?>" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="<?php echo base_url('assest/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url('assest/'); ?>custom_js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <div class="logo">TechBadhava</div>
    <nav>
        <ul>
            <li><a href="<?php echo base_url('index.php/Welcome/')?>">HOME</a></li>
            <li><a href="#">POETRY</a></li>
            <li><a href="#">CATEGORY</a>
                <ul>
                    <li><a href="#">POETRY</a></li>
                    <li><a href="#">POETRY</a></li>
                    <li><a href="#">POETRY</a></li>
                    <li><a href="#">POETRY</a></li>
                </ul>
            </li>
            <li><a href="<?php echo base_url('index.php/Welcome/login')?>">ABOUT US</a></li>
            <li><a href="<?php echo base_url('index.php/Login/sign_up')?>">CONTACT</a></li>
        </ul>
    </nav>
    <div class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
</header>
<input type="hidden" value="<?php echo base_url()?>" id="base_url"/>