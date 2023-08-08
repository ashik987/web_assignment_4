<?php
    

    $city = $_POST['city'];
    $day = $_POST['day'];
    

   


    

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Weather Map 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
 

  <style>
    .submit-button{
      vertical-align: middle;
      color: #fff;
      background-color: #F56332;
      border-radius: 25px;
      width:140px;
      
    }
    .selectpicker{
      width: 100%;
      padding: 8px;
      border-radius: 20px;
      border-color: #E3E3E3;
    }
    .selectpicker:focus{
      outline: none;
      border-color: #F56332;
    }
    .card-footer{
      padding-bottom: 30px;
    }
    .footer > .col-md-12{
      text-align: center;
    }
      
      .per_day{
          margin-top: 20px;
          margin-left: 200px;
          margin-bottom: 20px;
      }
  </style>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="yellow">
 
       <div class="logo">
        <img src="assets/img/forcast.jpg" alt="">
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="index.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#">5 days weather forcasting</a>
          </div>
          
          
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      
      <div class="content">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-chart">

              

              
              <div class="card-header">
                <h4 class="card-title">Weather</h4>
              </div>

              
              <div class="card-body">
              <div class="row per_day">
                    <div class="col-md-4 pl-1">
                      <img src="assets/img/download.jpg" alt="">
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <?php 
                  
                  
                  $key = 'ed072901afdcb9a41beff212f4b6640a';
                  $url = 'http://api.openweathermap.org/data/2.5/forecast?q='.$city.'&appid='.$key;
                  
                  $weather_data = json_decode( file_get_contents($url),true);
                  
                  if($day=='saturday'){
                      $temperature = $weather_data['list'][0]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h2>Saturday<br>$temp_in_cel &deg;C</h2>";
                      
                  
                  }
                  else if($day=='sunday'){
                      $temperature = $weather_data['list'][1]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h2>Sunday<br>$temp_in_cel &deg;C</h2>";
                  
                  }
                  else if($day=='monday'){
                      $temperature = $weather_data['list'][2]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h2>Monday<br>$temp_in_cel &deg;C</h2>";
                  
                  }
                  else if($day=='tuesday'){
                      $temperature = $weather_data['list'][3]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h2>Tuesday<br>$temp_in_cel &deg;C</h2>";
                  
                  }
                  else if($day=='wednesday'){
                      $temperature = $weather_data['list'][4]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h2>Wednesday<br>$temp_in_cel &deg;C</h2>";
                  
                  }
                  
                  
                  
                  ?>
                    </div>
                  </div>
                  
                  <div class="row">
                      <div class="col-md-4 pl-1">
                          <?php 
                          $temperature = $weather_data['list'][0]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h5>Saturday: $temp_in_cel &deg;C</h5>";
                          ?>
                      </div>
                      <div class="col-md-4 pl-1">
                          <?php 
                          $temperature = $weather_data['list'][1]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h5>Sunday: $temp_in_cel &deg;C</h5>";
                          ?>
                      </div>
                      <div class="col-md-4 pl-1">
                          <?php 
                          $temperature = $weather_data['list'][2]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h5>Monday: $temp_in_cel &deg;C</h5>";
                          ?>
                      </div>
                      <div class="col-md-4 pl-1">
                          <?php 
                          $temperature = $weather_data['list'][3]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h5>Tuesday: $temp_in_cel &deg;C</h5>";
                          ?>
                      </div>
                      <div class="col-md-4 pl-1">
                          <?php 
                          $temperature = $weather_data['list'][4]['main']['temp'];
                      $temp_in_cel = $temperature-273.15;
                  echo "<h5>Wednesday: $temp_in_cel &deg;C</h5>";
                          ?>
                      </div>
                  </div>
               
               
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Weather Map</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  
 

  
  <script>
    
    $(".submit-button").click(function(){
      $("#user-form").submit();
    });

    $(".close").click(function(){
      $(".alert").hide();
    })

    $("#role-picker").change(function(){
      if($("#role-picker").val() == "student"){
        $("#program_id").prop("disabled", false);
      }else{
        $("#program_id").prop("disabled", true);
      }
    });
  </script>
</body>

</html>


