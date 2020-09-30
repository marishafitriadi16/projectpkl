<!DOCTYPE html>
<!-- 
Template Name: COVdINFO
Version: 4.5.6
Author: Marisha Nurazizah Fitriadi
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>COVdINFO SUMUT - Marissa Fitriadi</title>
    <!-- Bootstrap Styles-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.css"/>
    <!-- FontAwesome Styles-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome.css"/>
    <!-- Morris Chart Styles-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/js/morris/morris-0.4.3.min.css"/>
    <!-- Custom Styles-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custom-styles.css"/>
    <!-- Google Fonts-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/http://fonts.googleapis.com/css?family=Open+Sans" type='text/css'/>
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/js/Lightweight-Chart/cssCharts.css"/> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><strong>
                    <i class=<img src=" {{asset('frontend') }}/images/jpg" alt="....." class="img-circle profile_img">>
                    </i>Marissa Fitriadi</strong></a>
				
		<div id="sideNav" href="">
		<i class="fa fa-bars icon"></i> 
		</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Lee Gon</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Kamu harus istirahat,, pulang ca. Jangn 24 jam full kerja terus terusan.... takutnya ntar sakit</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Siska S</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Kami baru saja menemukan lokasi pasien positif corona yang kabur kemarin sore</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Maximillian Xander</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Saya minta laporannya tanggal 25 September harus sudah selesai semua.</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Zona Hijau</strong>
                                        <span class="pull-right text-muted">60%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Zona Biru</strong>
                                        <span class="pull-right text-muted">58%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                                            <span class="sr-only">58% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Zona Kuning</strong>
                                        <span class="pull-right text-muted">60%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Zona Merah</strong>
                                        <span class="pull-right text-muted">45%</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Lihat informasi lainnya</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">Baru Saja</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 190 New Followers
                                    <span class="pull-right text-muted small">10 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small"></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                   <li>
                        <a href="tab-panel.html"><a class="nav-link" href="{{ ('medicalcenter-master') }}/index.html">
                       <i class="fa fa-qrcode"></i>Home</a>
                    </li>
                    <li>
                        <a href="tab-panel.html"><a class="nav-link" href="{{ ('colorlib-regform-4') }}/index.html">
                            <i class="fa fa-table"></i>Input</a>
                    </li>
                    <li>
                        <a href="form.html"><i class="fa fa-edit"></i> Edit </a>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                        Welcome <small>Marissa Fitriadi(admin)</small></h1>
                        <body>
            	<div class="page">
                    <div class="content">
                        <section class="header5 cid-r7o72Bhmed mbr-fullscreen" id="header5-3">
                            <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(130, 130, 130);">
                            </div>
                            <div class="form-row">
                                     <div class="col-md-6 form-group">
                                      <div class="heading">
                                        Nama Fasilitas Kesehatan*
                                      </div>
                                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                      <div class="validate"></div>
                                     </div>
                                     <div class="col-md-6 form-group">
                                      <div class="heading">
                                       Harga
                                      </div>
                                      <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                      <div class="validate"></div>
                                     </div>
                                     <div class="col-md-6 form-group">
                                      <div class="heading">
                                        Jenis Fasilitas Kesehatan*
                                      </div>
                                      <select name="department" id="department" class="form-control">
                                        <option value="Rumah Sakit">Rumah Sakit</option>
                                        <option value="Klinik">Klinik</option>
                                        <option value="Puskesmas">Puskesmas</option>
                                        <option value="Lab">Lab</option>
                                      </select>
                                      <div class="validate"></div>
                                     </div>
                                     <div class="col-md-6 form-group">
                                      <div class="heading">
                                       Nomor Telepon
                                      </div>
                                      <input type="tel" class="form-control" name="phone" id="phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                      <div class="validate"></div>
                                     </div>
                                     <div class="col-md-6 form-group">
                                      <div class="heading">
                                        Jenis Tes Yang Tersedia*
                                      </div>
                                      <select name="doctor" id="doctor" class="form-control">
                                        <option value="Rapid">Rapid</option>
                                        <option value="PCR/Swab">PCR/Swab</option>
                                      </select>
                                      <div class="validate"></div>
                                     </div>
                                     <div class="col-md-6 form-group">
                                      <div class="heading">
                                        Alamat
                                      </div>
                                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                      <div class="validate"></div>
                                     </div>
                                    </div>
                                    <br>
                                    <div class="container-contact100-form-btn">
                                    <button class="contact100-form-btn">
                                    <span>
                                    Submit
                                    <i class="fa fa-long-arrow-right m-1-7" aria-hidden="true"></i>
                                    </span>
                                    <br>
                                    </button>
                        </section>
                    </body>
                <p>All right reserved. Template by: <a href="Marissa Fitriadi">Pinang Sumut.com</a></p>
            </p>
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{ asset('frontend') }}/assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="{{ asset('frontend') }}/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/morris/morris.js"></script>
	
	
	<script src="{{ asset('frontend') }}/assets/js/easypiechart.js"></script>
	<script src="{{ asset('frontend') }}/assets/js/easypiechart-data.js"></script>
	
	 <script src="{{ asset('frontend') }}/assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="{{ asset('frontend') }}/assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="{{ asset('frontend') }}/assets/text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="{{ asset('frontend') }}/assets/text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>