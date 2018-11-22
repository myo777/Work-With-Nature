<div class ="container-fluid">
    <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="panel panel-default">
               <div class="panel-heading">
                   <h3 class="panel-title"><span class="glyphicon glypicon-globe"></span>Peta</h3>
                </div>
                <div class="panel-body">
                    <div  style="height:600px;" id="map-canvas"></div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="panel panel-default">
                        <dir class="container-fluid">
   
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
     

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://azfhakami.azureedge.net/~/media/17_images/late-availability/sherwood-forest-golden-oak.ashx?h=200&la=en&w=380" alt="Los Angeles" style="width:100%; height:  200px;">
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS93Y0FosA2ZBZT4NY98PbAI2-_7-omQj3Y0yaKL1T5BiIanUwhDg" alt="Chicago" style="width:100%; height:  200px;">
      </div>
    
      <div class="item">
        <img src="https://foresteurope.org/wp-content/uploads/2016/09/103055DSC0172ssw2-1024x685.jpg" alt="New york" style="width:100%; height:  200px;">
      </div>
      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDhjlZhVJvg49blCd-WvSt0TQ4587JBxQ1poBLkyaGDjJf6wLf" alt="New york" style="width:100%; height:  200px;">
      </div>
        <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQDhjlZhVJvg49blCd-WvSt0TQ4587JBxQ1poBLkyaGDjJf6wLf" alt="New york" style="width:100%; height:  200px;">
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
    
</dir>



                <div class="panel-body">
                    <form action="koordinatjembatan/storeCoords" method="post">
                        <div class="row">
                              <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="latitude">Latitude</label>
                                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="">
                                  </div>
                              </div>
                            
                              <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="longitude">Longitude</label>
                                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="">
                                  </div>
                              </div>
                              
                                    <div class="form-group">
                                        <label for="jembatan_id">User Name </label><br>
                                        <input type="text" name="name" value="Name">
                                        
                                  </div>
                                  <div class="form-group">
                                        
                                      <button class="btn btn-primary" id="simpan" name="simpan">Send</button>
                                  </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq3kPPoW_ZkOIUKaFHTWhgeZXwi-k_8rg&callback=myMap"></script>
<script>
    var map;
    var markers = [];
    
    function initialize(){
        var mapOption = {
            zoom: 14,
            mapTypeId: 'satellite',
            center: new google.maps.LatLng(10.006919, -83.355426),
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOption);
        
         google.maps.event.addListener(map, 'rightclick', addLating);
         google.maps.event.addListener(map, 'rightclick', function(event){
             
         var lat = event.latLng.lat();
         var lng = event.latLng.lng();
         $('#latitude').val(lat);
         $('#longitude').val(lng);
         // pass coords to php function
        $.post('')
        });
    }
    
    function addLating(event) {
          var lat = event.latLng.lat();
          var lng = event.latLng.lng();
          var rectangle = new google.maps.Rectangle({
            strokeColor: '#00FF00',
            strokeOpacity: 0.8,
            strokeWeight: 2,
            fillColor: '#00FF00',
            fillOpacity: 0.35,
            map: map,
            bounds: {
              north: lat + .0001,
              south: lat - .0001,
              east: lng + .0001,
              west: lng - .0001
            }
        });
    }
     // function addLating(event){  # original function myo
    //     var marker = new google.maps.Marker({
    //         position: event.latLng,
    //         title:'simple GIS',
    //         map: map
    //     });
    //     markers.push(marker);
    // }
    google.maps.event.addDomListener(window,'load',initialize);
 </script>