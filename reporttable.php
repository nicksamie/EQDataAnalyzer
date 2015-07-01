<?php include 'index.php';  
?>
 </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"></div>
                 <!-- /. ROW  -->

              <div class="row">
                <div class="col-md-12">

               <!--       /*if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<br>".$row["district"]."total_popn: " . $row["total_popn"]. "Dead Male: " . $row["dead_male"]. "<br>";
                        }
                    } else {
                        echo "0 results";
                    }*/
                /*
                    $server = mysql_connect("localhost","root", "");
                    $db =  mysql_select_db("MyDatabase",$server);
                    $query = mysql_query("select * from employees");
                */
                  -->
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Earthquake Incident 2015 Nepal
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>District</th>
                                            <th>Total No. Houses</th>
                                            <th>Total Popn</th>
                                            <th>Injured</th>
                                            <th>Govt Houses Fully Dest.</th>
                                            <th>Public Houses Fully Dest.</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                             require_once('mysqlconnection.php');
                                            
                                             $fetchtable = "SELECT sn,district,total_no_houses,total_popn,injured,
                                             gov_houses_fully_dest,pub_houses_fully_dest from eqreport2015";
                                             $result = connect_mysql($fetchtable);
                                             

                                               while ($row = $result->fetch_assoc()) {
                                                   echo "<tr>";
                                                   echo "<td>".$row["sn"]."</td>";
                                                   echo "<td>".$row["district"]."</td>";
                                                   echo "<td>".$row["total_no_houses"]."</td>";
                                                   echo "<td>".$row["total_popn"]."</td>";
                                                   echo "<td>".$row["injured"]."</td>";
                                                   echo "<td>".$row["gov_houses_fully_dest"]."</td>";
                                                   echo "<td>".$row["pub_houses_fully_dest"]."</td>";
                                                   echo "</tr>";
                                               }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  --><!-- /. ROW  -->
            <div class="row"></div>
                <!-- /. ROW  -->
            <div class="row"></div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
