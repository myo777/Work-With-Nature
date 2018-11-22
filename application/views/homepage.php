<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Work with Nature</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css"/>
    
    <style>
      
      /*
      * Globals
      */

      /* Links */
      a,
      a:focus,
      a:hover {
      color: #fff;
      }

      /* Custom default button */
      .btn-secondary,
      .btn-secondary:hover,
      .btn-secondary:focus {
      color: #333;
      text-shadow: none; /* Prevent inheritance from `body` */
      background-color: #fff;
      border: .05rem solid #fff;
      }


      /*
      * Base structure
      */

      html,
      body {
      height: 100%;
/*      background-color: white;
*/      background-image: url("https://images.unsplash.com/photo-1473134090548-69219f9cbb80?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=62343964adc102604ce5ede2c12e9eac&auto=format&fit=crop&w=1500&q=80");
      background-size: cover;
      }

      body {
      display: -ms-flexbox;
      display: flex;
      color: #fff;
      text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
      box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
      }

      .cover-container {
      max-width: 42em;
      }


      /*
      * Header
      */
      .masthead {
      margin-bottom: 2rem;
      }

      .masthead-brand {
      margin-bottom: 0;
      }

      .nav-masthead .nav-link {
      padding: .25rem 0;
      font-weight: 700;
      color: rgba(255, 255, 255, .5);
      background-color: transparent;
      border-bottom: .25rem solid transparent;
      }

      .nav-masthead .nav-link:hover,
      .nav-masthead .nav-link:focus {
      border-bottom-color: rgba(255, 255, 255, .25);
      }

      .nav-masthead .nav-link + .nav-link {
      margin-left: 1rem;
      }

      .nav-masthead .active {
          color: #fff;
          border-bottom-color: #fff;
      }

      @media (min-width: 48em) {
          .masthead-brand {
              float: left;
          }
          .nav-masthead {
              float: right;
          }
      }

    </style>

  </head>

  <body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand">Work with Nature</h3>
          <nav class="nav nav-masthead justify-content-center">
          
          </nav>
        </div>
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading">Individual</h1>
        <!-- <p class="lead">PLACEHOLDER.</p> -->
          <a class="nav-link" href="login.php">Sign in</a> 
          <a class="nav-link" href="/register_individual">Sign up</a>
        <h1 class="cover-heading">Company</h1>
        <p class="lead">Interested in donating to Work With Nature as a company? Click below to leave your contact details and we will reach out to you.</p>
          <a class="nav-link" href="register.php">Sign up</a>
      </main>
      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Adopt a rainforest.</p>
        </div>
      </footer>
    </div>
  </body>
</html>

