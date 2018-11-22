<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Welcome to CodeIgniter</title>
    
</head>
<body>


<dir class="main">
<div class="container-fluid">    
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
              <div class="second">
                <p><b>Portfolio</b></p>
              </div>
               <div class="second1">
                 <ul>
                   <li><a href="#">Cases</a></li>
                   <li><a href="#">Portfolio</a></li>
                   <li><a href="#">klantenlijst</a></li>
                   <li><a href="#">Referenties</a></li>
                 </ul>
               </div>
      
     </div><!--end of left bar-->
  
    
     <div class="col-sm-7 text-left"> 
          <div class= "myo">
              <a href="#" >Cases</a>
                
              <h1>Projecten in de spotlight</h1>
              <h5>Bekijk hier enkele opvallende, door RB-Media ontwikkelde, projecten.</h5>
          </div>
      </div>
    
       <div class="col-sm-2 sidenav">
            <div class="well">media@org.nl</div>
            <div class="well">fax:78430598557</div>
        </div>
    
  </div>
    <div class="row">
      <div class="col-sm-3"></div>
    <div class="col-sm-7">

      <div class="third">
            <img src="image/panasonic6.PNG" alt="image from panasonic" style="width:200px; ">
      
            <img src="image/panasonic7.PNG" alt="image from panasonic" style="width:200px; ">
      
            <img src="image/panasonic8.PNG" alt="image from panasonic" style="width:200px; ">
        </div>
    </div>
    <div class="col-sm-2"></div>
</div>
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-7">
          <div class="icon">
           <a href="#">bekijk alle cases<i class="fa fa-arrow-right"></i></a>
          </div>
      </div>
      <div class="col-sm-2"></div>
      <hr>
  </div>

  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-7">
          <div class="myo">
            <a href="#">Portfolio</a>

              <h1>Bekijk het werk van RB-Media</h1>
              <h5>Een overzicht van projecten waar wij met veel plezier aan hebben gewerkt.</h5>
          </div>
      </div>
      <div class="col-sm-2"></div>
      <hr>
  </div>
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-7">
          <div class="third4">
            <img src="image/panasonic9.PNG" alt="image from panasonic"  style="width: 180px; height: 190px;">
          </div>
          <div class="third5">
            <img src="image/panasonic10.PNG" alt="image from panasonic" style="width: 180px; height: 190px;">
          </div>
          <div class="third6">
            <img src="image/panasonic11.PNG" alt="image from panasonic" style="width: 180px; height: 190px;">
          </div>
          <div class="third7">
            <img src="image/panasonic12.PNG" alt="image from panasonic" style="width: 180px; height: 190px;">
          </div>
          <div class="third8">
            <img src="image/panasonic13.PNG" alt="image from panasonic" style="width: 180px; height: 190px;">
          </div>
          <div class="third9">
            <img src="image/panasonic14.PNG" alt="image from panasonic" style="width: 180px; height: 190px;">
          </div>
          <div class="icon">
              <a href="#">bekijk complete portfolio<i class="fa fa-arrow-right"></i></a>
            </div>

            <div class="myo">
              <a href="#">Klantenlijst</a>

              <h1>Enkele van onze klanten:</h1>
          </div>
        </div>
       
      
      <div class="col-sm-2"></div>
      
  </div>
  <hr>

  <div class="boxmap">
    <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
              <h2>Find our location using this google map</h2>   
                 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7N5rzg4TryUOAJso8O9XDrPzJjbfX1M4&libraries=places&callback=initAutocomplete"
                 async defer></script>
                <input  type="text" name="Search" id="pac-input" placeholder="Search address">
                <button id="search-button" class="search">Search</button>
         
                <div id="map"></div>
          </div>
      <div class="col-sm-3"></div>
      
    </div> 
  </div>

<div class="row">
   
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
  <div class="myo">
              <a href="#">Klantenlijst</a>

              <h1>Enkele van onze klanten:</h1>
          </div>
          
      <div class="icon">
        <a href="#">bekijk de complete klantenlijst<i class="fa fa-arrow-right"></i></a>
      </div>

      <div class="four">
            <h3>Enthousiast geworden? Plan een vrijblijvende kennismaking met RB-Media!</h3>
          </div>
          <button class="head1" >neem contact met ons op!</button>
      
      </div>
   
      
      <div class="col-sm-4">
        <div class="form">
             <h3>we will contact you soon</h3>

            <form>
              <label>
                First Name:
                <input type="text" name="text">

              </label>
              <label>
                LastnName:   
                <input type="text" name="text">

              </label>
              <label>
                Email:
                <input type="text" name="text">

              </label><br>
              <button type="submit" class="send">Send</button>
              
            </form>
            <div id=button>
            
          </div>
          </div>
      </div>
      </div>
      
  </div>
  <hr>



  <div class="container">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/flim1.jpg" alt="Los Angeles" style="width:100%; height:  400px;">
      </div>

      <div class="item">
        <img src="image/flim2.jpg" alt="Chicago" style="width:100%; height:  400px;">
      </div>
    
      <div class="item">
        <img src="image/flim3.jpg" alt="New york" style="width:100%; height:  400px;">
      </div>
      <div class="item">
        <img src="image/flim4.jpg" alt="New york" style="width:100%; height:  400px;">
      </div>
      
       <div class="item">
        <img src="image/flim16.jpg" alt="New york" style="width:100%; height:  400px;">
      </div>
       <div class="item">
        <img src="image/flim11.jpg" alt="New york" style="width:100%; height:  400px;">
      </div>
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</dir>


</body>
</html>