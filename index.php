<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="styles.css">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-nav">
    <div class="container-fluid">
      <a class="navbar-brand text-primary" href="#">WEATHER</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
          <a class="nav-link" href="#">Guide</a>
          <a class="nav-link" href="#">Maps</a>
          <a class="nav-link" href="#">Dashboard</a>
          <a class="nav-link" href="#">Our Initiatives</a>
          <a class="nav-link" href="#">Partners</a>
          <a class="nav-link" href="#">Blogs</a>
        </div>
      </div>
      <form class="d-flex" role="logout">
        <p style="margin: 10px 0px;">Welcome,Mr.Mickey Arthur</p>
        <img src="images/user3.jpg" alt="userimage" style="width: 48px;height:48px;border-radius:24px;margin-right:20px">

        <a class="btn btn-outline-danger"  href="login.php" role="button" >
          Logout
        </a>
      </form>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-8"></div>
      <div class="col-4">
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search City" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
      </div>

    </div>

    <div class="card mt-3">
      <div class="card-body">
        <div class="row">
          <div class="col-4">
            <div class="row">
              <div class="col">
                <p>
                  <?php echo date("l") . " , " . date("Y/m/d"); ?>
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h2>Colombo</h2>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <i id="icon_size1" class="ri-cloud-line"></i>
              </div>
              <div class="col-10">
                <h1>31<span>&#176;</span>C</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <div class="verticle_line"></div>
              </div>
              <div class="col-10">
                <ul>
                  <li>
                    <p>2.5m/s SSE</p>
                  </li>
                  <li>
                    <p>1009hPa</p>
                  </li>
                  <li>
                    <p>Humidity: 81%</p>
                  </li>
                  <li>
                    <p>UV: 5</p>
                  </li>
                  <li>
                    <p>Dew point:27<span>&#176;</span>C</p>
                  </li>
                  <li>
                    <p>Visibility: 10.0km</p>
                  </li>
                </ul>
              </div>
            </div>

          </div>
          <div class="col-8">
            <div id="google_map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58638718967!2d79.77380253336985!3d6.9220019822788705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1705110737970!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>



      </div>
    </div>
    <div class="card mt-3">
      <div class="card-body">
        <div class="row">
          <div class="col">
            <h2>3-days weather forecast</h2>
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>

                    <?php
                    $date = date_create(date("Y/m/d"));
                    date_add($date, date_interval_create_from_date_string("1 days"));
                    $date1 =  date_format($date, "m/d");

                    $timestamp = strtotime($date1);
                    $day = date('l', $timestamp);
                    echo $day . " , " . $date1;
                    ?>
                  </td>
                  <td style="display: flex;">
                    <i id="icon_size2" class="ri-cloud-line"></i>
                    <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                  </td>
                  <td>
                    <p>
                      <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                        broken clouds<i class="ri-arrow-down-s-fill"></i>
                      </a>

                    </p>
                    <div class="collapse" id="collapseExample1">
                      <div class="card card-body">
                        <div class="row">
                          <div class="col" id="con1">
                            <i id="icon_size1" class="ri-cloud-line"></i>
                            <div>
                              <p><strong>Broken clouds.Moderate breeze.</strong></p>
                              <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                            </div>

                          </div>
                        </div>
                        <div class="row">
                          <div class="col-1">
                            <div class="verticle_line"></div>
                          </div>
                          <div class="col-11">
                            <div class="row">
                              <div class="col">
                                <div id="con">
                                  <p>7%</p>
                                  <p>6.6m/s N</p>
                                  <p>1013hPa</p>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="con">
                                  <p>Humidity: 67%</p>
                                  <p>UV: 11</p>
                                  <p>Dew point: 21<span>&#176;</span>C</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <table class="table table-borderless">
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td>Morning</td>
                                  <td>Afternoon</td>
                                  <td>Evening</td>
                                  <td>Night</td>
                                </tr>
                                <tr>
                                  <td style="color: grey;">Temperature</td>
                                  <td>24<span>&#176;</span>C</td>
                                  <td>27<span>&#176;</span>C</td>
                                  <td>28<span>&#176;</span>C</td>
                                  <td>24<span>&#176;</span>C</td>
                                </tr>
                                <tr>
                                  <td style="color: grey;">Feels like</td>
                                  <td>25<span>&#176;</span>C</td>
                                  <td>29<span>&#176;</span>C</td>
                                  <td>31<span>&#176;</span>C</td>
                                  <td>25<span>&#176;</span>C</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div id="foot">
                              <div id="sunrise">
                                <p>SUNRISE</p>
                                <p>06:26 am</p>
                              </div>
                              <div id="sunset">
                                <p>SUNSET</p>
                                <p>06:11 pm</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <?php
                    $date = date_create(date("Y/m/d"));
                    date_add($date, date_interval_create_from_date_string("2 days"));
                    $date1 =  date_format($date, "m/d");

                    $timestamp = strtotime($date1);
                    $day = date('l', $timestamp);
                    echo $day . " , " . $date1;
                    ?>
                  </td>
                  <td style="display: flex;">
                    <i id="icon_size2" class="ri-cloud-line"></i>
                    <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                  </td>
                  <td>
                    <p>
                      <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        broken clouds<i class="ri-arrow-down-s-fill"></i>
                      </a>

                    </p>
                    <div class="collapse" id="collapseExample2">
                      <div class="card card-body">
                        <div class="row">
                          <div class="col" id="con1">
                            <i id="icon_size1" class="ri-cloud-line"></i>
                            <div>
                              <p><strong>Broken clouds.Moderate breeze.</strong></p>
                              <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                            </div>

                          </div>
                        </div>
                        <div class="row">
                          <div class="col-1">
                            <div class="verticle_line"></div>
                          </div>
                          <div class="col-11">
                            <div class="row">
                              <div class="col">
                                <div id="con">
                                  <p>7%</p>
                                  <p>6.6m/s N</p>
                                  <p>1013hPa</p>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="con">
                                  <p>Humidity: 67%</p>
                                  <p>UV: 11</p>
                                  <p>Dew point: 21<span>&#176;</span>C</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <table class="table table-borderless">
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td>Morning</td>
                                  <td>Afternoon</td>
                                  <td>Evening</td>
                                  <td>Night</td>
                                </tr>
                                <tr>
                                  <td style="color: grey;">Temperature</td>
                                  <td>24<span>&#176;</span>C</td>
                                  <td>27<span>&#176;</span>C</td>
                                  <td>28<span>&#176;</span>C</td>
                                  <td>24<span>&#176;</span>C</td>
                                </tr>
                                <tr>
                                  <td style="color: grey;">Feels like</td>
                                  <td>25<span>&#176;</span>C</td>
                                  <td>29<span>&#176;</span>C</td>
                                  <td>31<span>&#176;</span>C</td>
                                  <td>25<span>&#176;</span>C</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div id="foot">
                              <div id="sunrise">
                                <p>SUNRISE</p>
                                <p>06:26 am</p>
                              </div>
                              <div id="sunset">
                                <p>SUNSET</p>
                                <p>06:11 pm</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <?php
                    $date = date_create(date("Y/m/d"));
                    date_add($date, date_interval_create_from_date_string("3 days"));
                    $date1 =  date_format($date, "m/d");

                    $timestamp = strtotime($date1);
                    $day = date('l', $timestamp);
                    echo $day . " , " . $date1;
                    ?>
                  </td>
                  <td style="display: flex;">
                    <i id="icon_size2" class="ri-cloud-line"></i>
                    <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                  </td>
                  <td>
                    <p>
                      <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                        broken clouds<i class="ri-arrow-down-s-fill"></i>
                      </a>

                    </p>
                    <div class="collapse" id="collapseExample3">
                      <div class="card card-body">
                        <div class="row">
                          <div class="col" id="con1">
                            <i id="icon_size1" class="ri-cloud-line"></i>
                            <div>
                              <p><strong>Broken clouds.Moderate breeze.</strong></p>
                              <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                            </div>

                          </div>
                        </div>
                        <div class="row">
                          <div class="col-1">
                            <div class="verticle_line"></div>
                          </div>
                          <div class="col-11">
                            <div class="row">
                              <div class="col">
                                <div id="con">
                                  <p>7%</p>
                                  <p>6.6m/s N</p>
                                  <p>1013hPa</p>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="con">
                                  <p>Humidity: 67%</p>
                                  <p>UV: 11</p>
                                  <p>Dew point: 21<span>&#176;</span>C</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <table class="table table-borderless">
                              <tbody>
                                <tr>
                                  <td></td>
                                  <td>Morning</td>
                                  <td>Afternoon</td>
                                  <td>Evening</td>
                                  <td>Night</td>
                                </tr>
                                <tr>
                                  <td style="color: grey;">Temperature</td>
                                  <td>24<span>&#176;</span>C</td>
                                  <td>27<span>&#176;</span>C</td>
                                  <td>28<span>&#176;</span>C</td>
                                  <td>24<span>&#176;</span>C</td>
                                </tr>
                                <tr>
                                  <td style="color: grey;">Feels like</td>
                                  <td>25<span>&#176;</span>C</td>
                                  <td>29<span>&#176;</span>C</td>
                                  <td>31<span>&#176;</span>C</td>
                                  <td>25<span>&#176;</span>C</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <div id="foot">
                              <div id="sunrise">
                                <p>SUNRISE</p>
                                <p>06:26 am</p>
                              </div>
                              <div id="sunset">
                                <p>SUNSET</p>
                                <p>06:11 pm</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div style="padding:10px;margin-top:0">
        <p>
          <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="true" aria-controls="collapseExample1">
            view more
          </a>
        </p>
        <!--collapse for view more-->
        <div class="collapse" id="collapseExample4">
          <div class="card text-bg-light card-body">
            <div class="row">
              <div class="col">
                <h2>7-days weather forecast</h2>
                <table class="table table-borderless">
                  <tbody>
                    <tr>
                      <td>

                        <?php
                        $date = date_create(date("Y/m/d"));
                        date_add($date, date_interval_create_from_date_string("1 days"));
                        $date1 =  date_format($date, "m/d");

                        $timestamp = strtotime($date1);
                        $day = date('l', $timestamp);
                        echo $day . " , " . $date1;
                        ?>
                      </td>
                      <td style="display: flex;">
                        <i id="icon_size2" class="ri-cloud-line"></i>
                        <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                      </td>
                      <td>
                        <p>
                          <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                            broken clouds<i class="ri-arrow-down-s-fill"></i>
                          </a>

                        </p>
                        <div class="collapse" id="collapseExample1">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col" id="con1">
                                <i id="icon_size1" class="ri-cloud-line"></i>
                                <div>
                                  <p><strong>Broken clouds.Moderate breeze.</strong></p>
                                  <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <div class="verticle_line"></div>
                              </div>
                              <div class="col-11">
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>7%</p>
                                      <p>6.6m/s N</p>
                                      <p>1013hPa</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>Humidity: 67%</p>
                                      <p>UV: 11</p>
                                      <p>Dew point: 21<span>&#176;</span>C</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <table class="table table-borderless">
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td>Morning</td>
                                      <td>Afternoon</td>
                                      <td>Evening</td>
                                      <td>Night</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Temperature</td>
                                      <td>24<span>&#176;</span>C</td>
                                      <td>27<span>&#176;</span>C</td>
                                      <td>28<span>&#176;</span>C</td>
                                      <td>24<span>&#176;</span>C</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Feels like</td>
                                      <td>25<span>&#176;</span>C</td>
                                      <td>29<span>&#176;</span>C</td>
                                      <td>31<span>&#176;</span>C</td>
                                      <td>25<span>&#176;</span>C</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="foot">
                                  <div id="sunrise">
                                    <p>SUNRISE</p>
                                    <p>06:26 am</p>
                                  </div>
                                  <div id="sunset">
                                    <p>SUNSET</p>
                                    <p>06:11 pm</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php
                        $date = date_create(date("Y/m/d"));
                        date_add($date, date_interval_create_from_date_string("2 days"));
                        $date1 =  date_format($date, "m/d");

                        $timestamp = strtotime($date1);
                        $day = date('l', $timestamp);
                        echo $day . " , " . $date1;
                        ?>
                      </td>
                      <td style="display: flex;">
                        <i id="icon_size2" class="ri-cloud-line"></i>
                        <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                      </td>
                      <td>
                        <p>
                          <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                            broken clouds<i class="ri-arrow-down-s-fill"></i>
                          </a>

                        </p>
                        <div class="collapse" id="collapseExample2">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col" id="con1">
                                <i id="icon_size1" class="ri-cloud-line"></i>
                                <div>
                                  <p><strong>Broken clouds.Moderate breeze.</strong></p>
                                  <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <div class="verticle_line"></div>
                              </div>
                              <div class="col-11">
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>7%</p>
                                      <p>6.6m/s N</p>
                                      <p>1013hPa</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>Humidity: 67%</p>
                                      <p>UV: 11</p>
                                      <p>Dew point: 21<span>&#176;</span>C</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <table class="table table-borderless">
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td>Morning</td>
                                      <td>Afternoon</td>
                                      <td>Evening</td>
                                      <td>Night</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Temperature</td>
                                      <td>24<span>&#176;</span>C</td>
                                      <td>27<span>&#176;</span>C</td>
                                      <td>28<span>&#176;</span>C</td>
                                      <td>24<span>&#176;</span>C</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Feels like</td>
                                      <td>25<span>&#176;</span>C</td>
                                      <td>29<span>&#176;</span>C</td>
                                      <td>31<span>&#176;</span>C</td>
                                      <td>25<span>&#176;</span>C</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="foot">
                                  <div id="sunrise">
                                    <p>SUNRISE</p>
                                    <p>06:26 am</p>
                                  </div>
                                  <div id="sunset">
                                    <p>SUNSET</p>
                                    <p>06:11 pm</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php
                        $date = date_create(date("Y/m/d"));
                        date_add($date, date_interval_create_from_date_string("3 days"));
                        $date1 =  date_format($date, "m/d");

                        $timestamp = strtotime($date1);
                        $day = date('l', $timestamp);
                        echo $day . " , " . $date1;
                        ?>
                      </td>
                      <td style="display: flex;">
                        <i id="icon_size2" class="ri-cloud-line"></i>
                        <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                      </td>
                      <td>
                        <p>
                          <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            broken clouds<i class="ri-arrow-down-s-fill"></i>
                          </a>

                        </p>
                        <div class="collapse" id="collapseExample3">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col" id="con1">
                                <i id="icon_size1" class="ri-cloud-line"></i>
                                <div>
                                  <p><strong>Broken clouds.Moderate breeze.</strong></p>
                                  <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <div class="verticle_line"></div>
                              </div>
                              <div class="col-11">
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>7%</p>
                                      <p>6.6m/s N</p>
                                      <p>1013hPa</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>Humidity: 67%</p>
                                      <p>UV: 11</p>
                                      <p>Dew point: 21<span>&#176;</span>C</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <table class="table table-borderless">
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td>Morning</td>
                                      <td>Afternoon</td>
                                      <td>Evening</td>
                                      <td>Night</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Temperature</td>
                                      <td>24<span>&#176;</span>C</td>
                                      <td>27<span>&#176;</span>C</td>
                                      <td>28<span>&#176;</span>C</td>
                                      <td>24<span>&#176;</span>C</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Feels like</td>
                                      <td>25<span>&#176;</span>C</td>
                                      <td>29<span>&#176;</span>C</td>
                                      <td>31<span>&#176;</span>C</td>
                                      <td>25<span>&#176;</span>C</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="foot">
                                  <div id="sunrise">
                                    <p>SUNRISE</p>
                                    <p>06:26 am</p>
                                  </div>
                                  <div id="sunset">
                                    <p>SUNSET</p>
                                    <p>06:11 pm</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php
                        $date = date_create(date("Y/m/d"));
                        date_add($date, date_interval_create_from_date_string("4 days"));
                        $date1 =  date_format($date, "m/d");

                        $timestamp = strtotime($date1);
                        $day = date('l', $timestamp);
                        echo $day . " , " . $date1;
                        ?>
                      </td>
                      <td style="display: flex;">
                        <i id="icon_size2" class="ri-cloud-line"></i>
                        <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                      </td>
                      <td>
                        <p>
                          <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            broken clouds<i class="ri-arrow-down-s-fill"></i>
                          </a>

                        </p>
                        <div class="collapse" id="collapseExample3">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col" id="con1">
                                <i id="icon_size1" class="ri-cloud-line"></i>
                                <div>
                                  <p><strong>Broken clouds.Moderate breeze.</strong></p>
                                  <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <div class="verticle_line"></div>
                              </div>
                              <div class="col-11">
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>7%</p>
                                      <p>6.6m/s N</p>
                                      <p>1013hPa</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>Humidity: 67%</p>
                                      <p>UV: 11</p>
                                      <p>Dew point: 21<span>&#176;</span>C</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <table class="table table-borderless">
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td>Morning</td>
                                      <td>Afternoon</td>
                                      <td>Evening</td>
                                      <td>Night</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Temperature</td>
                                      <td>24<span>&#176;</span>C</td>
                                      <td>27<span>&#176;</span>C</td>
                                      <td>28<span>&#176;</span>C</td>
                                      <td>24<span>&#176;</span>C</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Feels like</td>
                                      <td>25<span>&#176;</span>C</td>
                                      <td>29<span>&#176;</span>C</td>
                                      <td>31<span>&#176;</span>C</td>
                                      <td>25<span>&#176;</span>C</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="foot">
                                  <div id="sunrise">
                                    <p>SUNRISE</p>
                                    <p>06:26 am</p>
                                  </div>
                                  <div id="sunset">
                                    <p>SUNSET</p>
                                    <p>06:11 pm</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php
                        $date = date_create(date("Y/m/d"));
                        date_add($date, date_interval_create_from_date_string("5 days"));
                        $date1 =  date_format($date, "m/d");

                        $timestamp = strtotime($date1);
                        $day = date('l', $timestamp);
                        echo $day . " , " . $date1;
                        ?>
                      </td>
                      <td style="display: flex;">
                        <i id="icon_size2" class="ri-cloud-line"></i>
                        <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                      </td>
                      <td>
                        <p>
                          <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            broken clouds<i class="ri-arrow-down-s-fill"></i>
                          </a>

                        </p>
                        <div class="collapse" id="collapseExample3">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col" id="con1">
                                <i id="icon_size1" class="ri-cloud-line"></i>
                                <div>
                                  <p><strong>Broken clouds.Moderate breeze.</strong></p>
                                  <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <div class="verticle_line"></div>
                              </div>
                              <div class="col-11">
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>7%</p>
                                      <p>6.6m/s N</p>
                                      <p>1013hPa</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>Humidity: 67%</p>
                                      <p>UV: 11</p>
                                      <p>Dew point: 21<span>&#176;</span>C</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <table class="table table-borderless">
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td>Morning</td>
                                      <td>Afternoon</td>
                                      <td>Evening</td>
                                      <td>Night</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Temperature</td>
                                      <td>24<span>&#176;</span>C</td>
                                      <td>27<span>&#176;</span>C</td>
                                      <td>28<span>&#176;</span>C</td>
                                      <td>24<span>&#176;</span>C</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Feels like</td>
                                      <td>25<span>&#176;</span>C</td>
                                      <td>29<span>&#176;</span>C</td>
                                      <td>31<span>&#176;</span>C</td>
                                      <td>25<span>&#176;</span>C</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="foot">
                                  <div id="sunrise">
                                    <p>SUNRISE</p>
                                    <p>06:26 am</p>
                                  </div>
                                  <div id="sunset">
                                    <p>SUNSET</p>
                                    <p>06:11 pm</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php
                        $date = date_create(date("Y/m/d"));
                        date_add($date, date_interval_create_from_date_string("6 days"));
                        $date1 =  date_format($date, "m/d");

                        $timestamp = strtotime($date1);
                        $day = date('l', $timestamp);
                        echo $day . " , " . $date1;
                        ?>
                      </td>
                      <td style="display: flex;">
                        <i id="icon_size2" class="ri-cloud-line"></i>
                        <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                      </td>
                      <td>
                        <p>
                          <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            broken clouds<i class="ri-arrow-down-s-fill"></i>
                          </a>

                        </p>
                        <div class="collapse" id="collapseExample3">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col" id="con1">
                                <i id="icon_size1" class="ri-cloud-line"></i>
                                <div>
                                  <p><strong>Broken clouds.Moderate breeze.</strong></p>
                                  <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <div class="verticle_line"></div>
                              </div>
                              <div class="col-11">
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>7%</p>
                                      <p>6.6m/s N</p>
                                      <p>1013hPa</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>Humidity: 67%</p>
                                      <p>UV: 11</p>
                                      <p>Dew point: 21<span>&#176;</span>C</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <table class="table table-borderless">
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td>Morning</td>
                                      <td>Afternoon</td>
                                      <td>Evening</td>
                                      <td>Night</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Temperature</td>
                                      <td>24<span>&#176;</span>C</td>
                                      <td>27<span>&#176;</span>C</td>
                                      <td>28<span>&#176;</span>C</td>
                                      <td>24<span>&#176;</span>C</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Feels like</td>
                                      <td>25<span>&#176;</span>C</td>
                                      <td>29<span>&#176;</span>C</td>
                                      <td>31<span>&#176;</span>C</td>
                                      <td>25<span>&#176;</span>C</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="foot">
                                  <div id="sunrise">
                                    <p>SUNRISE</p>
                                    <p>06:26 am</p>
                                  </div>
                                  <div id="sunset">
                                    <p>SUNSET</p>
                                    <p>06:11 pm</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <?php
                        $date = date_create(date("Y/m/d"));
                        date_add($date, date_interval_create_from_date_string("7 days"));
                        $date1 =  date_format($date, "m/d");

                        $timestamp = strtotime($date1);
                        $day = date('l', $timestamp);
                        echo $day . " , " . $date1;
                        ?>
                      </td>
                      <td style="display: flex;">
                        <i id="icon_size2" class="ri-cloud-line"></i>
                        <p style="margin-left: 10px;">30 / 24<span>&#176;</span>C</p>
                      </td>
                      <td>
                        <p>
                          <a class="btn btn-default" data-bs-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                            broken clouds<i class="ri-arrow-down-s-fill"></i>
                          </a>

                        </p>
                        <div class="collapse" id="collapseExample3">
                          <div class="card card-body">
                            <div class="row">
                              <div class="col" id="con1">
                                <i id="icon_size1" class="ri-cloud-line"></i>
                                <div>
                                  <p><strong>Broken clouds.Moderate breeze.</strong></p>
                                  <p>The high will be 30<span>&#176;</span>C, the low will be 24<span>&#176;</span>C</p>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <div class="verticle_line"></div>
                              </div>
                              <div class="col-11">
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>7%</p>
                                      <p>6.6m/s N</p>
                                      <p>1013hPa</p>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div id="con">
                                      <p>Humidity: 67%</p>
                                      <p>UV: 11</p>
                                      <p>Dew point: 21<span>&#176;</span>C</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <table class="table table-borderless">
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td>Morning</td>
                                      <td>Afternoon</td>
                                      <td>Evening</td>
                                      <td>Night</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Temperature</td>
                                      <td>24<span>&#176;</span>C</td>
                                      <td>27<span>&#176;</span>C</td>
                                      <td>28<span>&#176;</span>C</td>
                                      <td>24<span>&#176;</span>C</td>
                                    </tr>
                                    <tr>
                                      <td style="color: grey;">Feels like</td>
                                      <td>25<span>&#176;</span>C</td>
                                      <td>29<span>&#176;</span>C</td>
                                      <td>31<span>&#176;</span>C</td>
                                      <td>25<span>&#176;</span>C</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div id="foot">
                                  <div id="sunrise">
                                    <p>SUNRISE</p>
                                    <p>06:26 am</p>
                                  </div>
                                  <div id="sunset">
                                    <p>SUNSET</p>
                                    <p>06:11 pm</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

</body>

</html>