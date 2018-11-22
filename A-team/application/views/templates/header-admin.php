<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Protect Forest</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
       
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
    
     <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown'>Adopteer<b class='caret'></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo anchor('admin/home.php','home.php') ?></li>
                            <li><?php echo anchor('admin/','') ?></li>
                        </ul>
                        
                        
                     </li>
                    
                       <li class='dropdown'><a href='#' class='dropdown-toggle' data-toggle='dropdown'>ADOPTEER NU<b class='caret'></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo anchor('admin/','') ?></li>
                            <li><?php echo anchor('admin/','') ?></li>
                        </ul>
                        
                        
                     </li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    