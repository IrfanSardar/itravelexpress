<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ItravelExpress</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <style>

  </style>
  <script>
    function text(x) {


      if (x == 0) {
        //document.write("Hello");
        document.getElementById('code').style.display = "none";
        document.getElementById('check1').style.display = "none";

      } else {
        // document.write("Hello1");

        document.getElementById("code").style.display = "hidden";
        document.getElementById("check").style.display = "none";
      }
      return;
    }

    function text1(x) {


      if (x == 0) {
        //document.write("Hello");
        document.getElementById('code1').style.display = "none";
        document.getElementById('checkbox1').style.display = "none";

      } else {
        // document.write("Hello1");

        document.getElementById("code1").style.display = "hidden";
        document.getElementById('checkbox').style.display = "none";
      }
      return;
    }
  </script>


</head>

<body>
  <!-- NavBar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item">
          <a class="nav-link" href="#">Our Fleet</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Service Rate</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Pages</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0" action="booking" method="post">
        @csrf

        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

  <!-- NavBarEnd -->

  <!-- Form Section -->
  <div class="container-fluid " style="background-image: url(../assets/img/avatars/3.jpg)">
    <div class="row">

      <div class="col-10">
        <html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

        <head>
          <meta charset="utf-8" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


          <meta name="description" content="" />

          <!-- Favicon -->
          <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

          <!-- Fonts -->
          <link rel="preconnect" href="https://fonts.googleapis.com" />
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
          <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

          <!-- Icons. Uncomment required icon fonts -->
          <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

          <!-- Core CSS -->
          <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
          <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
          <link rel="stylesheet" href="../assets/css/demo.css" />

          <!-- Vendors CSS -->
          <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

          <!-- Page CSS -->

          <!-- Helpers -->
          <script src="../assets/vendor/js/helpers.js"></script>

          <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
          <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
          <script src="../assets/js/config.js"></script>
        </head>

        <body>
          <!-- Layout wrapper -->
          <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
              <!-- Menu -->

              <div class="menu-inner-shadow"></div>



              </aside>
              <!-- / Menu -->

              <!-- Layout container -->
              <div class="layout-page">


                <!-- Content wrapper -->
                <div class="content-wrapper">
                  <!-- Content -->

                  <div class="container-xxl flex-grow-1 container-p-y">



                    <div class="row">
                      <div class="col-xl-6 bg-dark">
                        <h1 class="text-white bg-warning">   <img src="assets/img/avatars/2.png" width="50px" height="50px" alt="...">ItravelExpress</h1>
                        <div class="nav-align-top mb-4">
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                              <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                                Distance
                              </button>
                            </li>
                            <li class="nav-item">
                              <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                                Hourly Rate
                              </button>
                            </li>

                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">

                              <!-- Form number 1 -->

                              <form action="booking" method="post">
                                @csrf
                                <!-- @if ($errors->any())
                                <div class="alert alert-danger">
                                  <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                  </ul>
                                </div>
                                @endif -->
                                <div class="mb-3">
                                  <label class="form-label" name="numberofguest" for="basic-default-fullname" required>Numbers Of Guest</label>
                                  <input type="text" class="form-control" name="numberofguest" value="{{old('numberofguest')}}" id="basic-default-fullname" />
                                  <span style="color:red">@error('numberofguest'){{$message}} @enderror</span>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="basic-default-fullname" required>Pick Up Address</label>
                                  <input type="text" class="form-control" name="pickupaadress" value="{{old('pickupaadress')}}" id="basic-default-fullname" />
                                  <span style="color:red" >@error('pickupaadress'){{$message}} @enderror</span>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="basic-default-company" required>Drop of Adress</label>
                                  <input type="text" class="form-control" name="dropofaddress" value="{{old('dropofaddress')}}" id="basic-default-company" />
                                  <span style="color:red">@error('dropofaddress'){{$message}} @enderror</span>
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="basic-default-email" required>Pick Of Date</label>
                                  <div class="input-group input-group-merge">
                                    <input type="date" id="basic-default-email" name="pickofdate" value="{{old('pickofdate')}}" class="form-control" />
                                  </div>
                                  <span style="color:red">@error('pickofdate'){{$message}} @enderror</span>
                                  
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="basic-default-phone"  required>Pick Up Time</label>
                                  <input type="time" id="time" name="pickoftime" class="form-control phone-mask"  value="{{old('pickoftime')}}"/>
                                  <span style="color:red">@error('pickoftime'){{$message}} @enderror</span>

                                </div>
                                <div class="mb-3">
                                  <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" required>
                                    <!-- <span>@error('ridetype'){{$message}} @enderror</span> -->
                                    
                                      Ride Type
                                    </button>
                                    <div class="dropdown-menu">
                                      <div class="form-check" id="check">
                                        <input class="checkbox" type="checkbox" name="ridetype" value="" onclick="text(0)">
                                        <label>
                                          One Way
                                        </label>
                                      </div>
                                      <div class="form-check" id="check1">
                                        <input class="checkbox" type="checkbox" name="ridetype" value="" onclick="text(1)">
                                        <label>
                                          Return
                                        </label>
                                      </div>
                                    </div>
                                  </div>


                                </div>
                                <div  id="code" >
                                  <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Return Pick Up Address</label>
                                    <input type="text" class="form-control" id="basic-default-fullname" />
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Return Drop of Adress</label>
                                    <input type="text" class="form-control" id="basic-default-company" />
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Return Pick Of Date</label>
                                    <div class="input-group input-group-merge">
                                      <input type="date" id="basic-default-email" class="form-control" />
                                    </div>


                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="basic-default-phone">Return Pick Up Time</label>
                                    <input type="time" id="time" class="form-control phone-mask" />
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-warning">Reserve Now ></button>

                              </form>
                            </div>
                            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">


                              <!-- Form Number Tow -->


                              <form action="booking" method="post">
                                @csrf
                                <div class="mb-3">
                                  <label class="form-label" for="basic-default-fullname">Numbers Of Guest</label>
                                  <input type="text" name="numberofguest" class="form-control" />
                                  <span style="color:red">@error('numberofguest'){{$message}} @enderror</span>

                                </div>
                                <div class="mb-3">
                                  <label class="form-label" for="basic-default-fullname">Pick Up Address</label>
                                  <input type="text" name="pickupaadress" class="form-control" />
                                  <span style="color:red">@error('pickupaadress'){{$message}} @enderror</span>
                                           
                                </div>
                                <div class="mb-3">
                                  <label class="form-label" name="dropofaddress" for="basic-default-company">Drop of Adress</label>
                                  <input type="text" name="dropofaddress" class="form-control" />
                                  <span style="color:red">@error('dropofaddress'){{$message}} @enderror</span>

                                </div>
                                <div class="mb-3">
                                  <label class="form-label" name="pickofdate" for="basic-default-email">Pick Of Date</label>
                                  <div class="input-group input-group-merge">
                                    <input type="date" name="pickofdate" class="form-control" />
          
                                  </div>
                                  <span style="color:red">@error('pickofdate'){{$message}} @enderror</span>


                                </div>
                                <div class="mb-3">
                                  <label class="form-label" name="pickoftime" for="basic-default-phone">Pick Up Time</label>
                                  <input type="time" name="pickoftime" class="form-control phone-mask" />
                                  <span style="color:red">@error('pickoftime'){{$message}} @enderror</span>

                                </div>

                                <div class="mb-3">
                                  <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Ride Type
                                    </button>
                                    <div class="dropdown-menu">
                                      <div class="form-check" id="checkbox">
                                        <input class="checkbox" type="checkbox" name="checkbox" value="" onclick="text1(0)">
                                        <label class="form-check-label" for="default">
                                          One Way
                                        </label>
                                      </div>
                                      <div class="form-check" id="checkbox1">
                                        <input class="checkbox" type="checkbox" value="" name="checkbox" onclick="text1(1)">
                                        <label class="form-check-label" for="defaultCheck1">
                                          Return
                                        </label>
                                      </div>

                                    </div>
                                  </div>


                                </div>

                                <div id="code1">
                                  <div class="mb-3">
                                    <label class="form-label" for="basic-default-fullname">Return Pick Up Address</label>
                                    <input type="text" class="form-control" />
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="basic-default-company">Return Drop of Adress</label>
                                    <input type="text" class="form-control" />
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="basic-default-email">Return Pick Of Date</label>
                                    <div class="input-group input-group-merge">
                                      <input type="date" class="form-control" />
                                    </div>


                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label" for="basic-default-phone">Return Pick Up Time</label>
                                    <input type="time" class="form-control phone-mask" />
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-warning">Reserve Now ></button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                    <!-- / Content -->


                    <div class="content-backdrop fade"></div>
                  </div>
                  <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
              </div>

              <!-- Overlay -->
              <div class="layout-overlay layout-menu-toggle"></div>
            </div>
            <!-- / Layout wrapper -->

            <div class="buy-now">
              <a href="#" class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
            </div>
           
            <!-- Core JS -->
            <!-- build:js assets/vendor/js/core.js -->
            <script src="../assets/vendor/libs/jquery/jquery.js"></script>
            <script src="../assets/vendor/libs/popper/popper.js"></script>
            <script src="../assets/vendor/js/bootstrap.js"></script>
            <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

            <script src="../assets/vendor/js/menu.js"></script>
            <!-- endbuild -->

            <!-- Vendors JS -->

            <!-- Main JS -->
            <script src="../assets/js/main.js"></script>

            <!-- Page JS -->

            <!-- Place this tag in your head or just before your close body tag. -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
        </body>

        </html>
      </div>
    </div>
  </div>

</body>

</html>