<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Earthquake Data Analyzer Dashboard</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <!--newly added-->
                        <div class="btn btn-danger square-btn-adjust">District Profile</div>
    					<div class="btn-group">
                                     <form action="dashboard.php" method="post">
                                           
                                          <select name = "chosen_district" class="btn btn-default" value="kathmandu">
                                                  <option value="kathmandu">Kathmandu</option>
                                                  <option value="bhaktapur">Bhaktapur</option>
                                                  <option value="lalitpur">Lalitpur</option>
                                                  <option value="sindhupalchowk">Sindhupalchowk</option>
                                                  <option value="kavrepalanchowk">Kavrepalanchowk</option>
                                                  <option value="dhading">Dhading</option>
                                                  <option value="nuwakot">Nuwakot</option>
                                                  <option value="rasuwa">Rasuwa</option>
                                                  <option value="gorkha">Gorkha</option>
                                                  <option value="dolakha">Dolakha</option>
                                            </select>
                                            <input type="submit">
                                    </form> 
                        </div>
    		</div>
                                          
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
  
                <div style="color: white;
                    padding: 15px 50px 5px 50px;
                    float: right;
                    font-size: 16px;"> Date : <?php $dt = new DateTime(); echo $dt->format('Y-m-d');?>
                <!-- &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> H:i:s -->
                </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
    				<li class="text-center"></li>
    				
                        <li>
                            <a  href="dashboard.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                        </li>
                        <li  >
                            <a  href="reporttable.php"><i class="fa fa-table fa-3x"></i> Tables </a>
                        </li>
                         <li  >
                            <a  href="figures.php"><i class="fa fa-table fa-3x"></i> Figures </a>
                        </li>
                        <li>
                            <a  href="charts/districtchart.php"><i class="fa fa-desktop fa-3x"></i> Charts</a>
                        </li>
                        <!--
                        <li>
                            <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                        </li>
                        <li>
                            <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                        </li>
    						   <li  >
                            <a  href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                        </li>	
                          
                        <li  >
                            <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                        </li>				
    					
    					                   
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Link</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Link</a>
                                        </li>

                                    </ul>
                                   
                                </li>
                            </ul>
                          </li>  
                      <li  >
                            <a href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                        </li>	
                    </ul>              
                </div>           
            </nav>         

         <!-- /. PAGE WRAPPER  -->
    </div>
    </nav>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
