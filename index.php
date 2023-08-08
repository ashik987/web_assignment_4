
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

              <div class="alert alert-success" <?php if(isset($_GET['response']) && $_GET['response'] == 200){}else{echo "hidden";} ?>>
                <button type="button" aria-hidden="true" class="close">
                  <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <span><b> User Added Successfully.</span>
              </div>

              <div class="alert alert-danger" <?php if(isset($_GET['response']) && $_GET['response'] == 501){}else{echo "hidden";} ?>>
                <button type="button" aria-hidden="true" class="close">
                  <i class="now-ui-icons ui-1_simple-remove"></i>
                </button>
                <span><b> Failed to add user.</span>
              </div>
              <div class="card-header">
                <h4 class="card-title">Weather</h4>
              </div>

              
              <div class="card-body">
                <form action="weather.php" method="POST" id="user-form">
                  <div class="row">
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>City</label>
                        <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round btn-block" id="role-picker" title="RoleSelect" name="city">
                            <option disabled selected>Select a City</option>
                            
                            <option value="london">London</option>
                            <option value="us">US</option>
                            <option value="canada">Canada</option>
                            
                        </select>
                      </div>
                    </div>
                    
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Day</label>
                        <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-round btn-block" id="role-picker" title="RoleSelect" name="day">
                            <option disabled selected>Select a Day</option>
                            
                            <option value="saturday">Saturday</option>
                            <option value="sunday">Sunday</option>
                            <option value="monday">Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            
                        </select>
                      </div>
                    </div>
                  </div>
                  
                </form>
              </div>
              <div class="card-footer" align="center">
                <button type="button" class="btn submit-button">See weather</button>
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