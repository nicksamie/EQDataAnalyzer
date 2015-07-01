<?php include 'index.php';  
?>
 </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row"></div>
                                <div class="form-group">
                                            <label>Generate Maximum Figures</label>
                                            <select id="selectBox" onchange="changeFunc()" class="form-control">
                                            <option value="">-- SELECT --</option>
                                                <option value="max_death">Max Death</option>
                                                <option value="max_injured">Max Injured</option>
                                                <option value="max_govt_houses_dest">Max Govt Houses Destroyed</option>
                                                <option value="max_pub_houses_dest">Max Public Houses Destroyed</option>
                                            </select>
                                </div>
                            <script type="text/javascript">
                                function changeFunc() {
                                   var selectBox = document.getElementById("selectBox");
                                   var selectedValue = selectBox.options[selectBox.selectedIndex].value;
                                   //alert(selectedValue);
                                   window.location.href = "figures.php?w1=" + selectedValue;
                                }   
                            </script>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Maximum Value Display
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.N</th>
                                            <th>District</th>
                                            <th>Value #</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                             require_once('mysqlconnection.php');
                                           // $fetchtable = "SELECT * FROM incidentreporteq2015 WHERE id=(
                                            //$fetchtable = "SELECT sn,district, MAX(dead_male+dead_female) as total_death FROM eqreport2015";
                                             //$fetchtable = "SELECT sn,district,total_popn,injured from incidentreporteq2015 limit 5 ";
                                                if (empty($_GET["w1"])){
                                                    $selectedValue = 'max_death' ;
                                                  } else {
                                                    $selectedValue = $_GET["w1"] ;
                                                }
                                                  
                                
                                        Global $fetchtable;
                                switch ($selectedValue) {
                                    case "max_death":
                                        $fetchtable = "SELECT sn,district, MAX(dead_male+dead_female) as total FROM eqreport2015";
                                        break;
                                    case "max_injured":
                                        $fetchtable = "SELECT sn,district, MAX(injured) as total FROM eqreport2015";
                                        break;
                                    case "max_govt_houses_dest":
                                        $fetchtable = "SELECT sn,district, MAX(gov_houses_fully_dest) as total FROM eqreport2015";
                                        break;
                                    case "max_pub_houses_dest":
                                        $fetchtable = "SELECT sn,district, MAX(pub_houses_fully_dest) as total FROM eqreport2015";
                                        break;
                                    default:
                                        $fetchtable = "SELECT sn,district, MAX(dead_male+dead_female) as total FROM eqreport2015";
                                }
                                             $result = connect_mysql($fetchtable);
                                             echo "Total : <h4>". $selectedValue . "</h4>";
                                               while ($row = $result->fetch_assoc()) {
                                                   echo "<tr>";
                                                   echo "<td>".$row["sn"]."</td>";
                                                   echo "<td>".$row["district"]."</td>";
                                                   echo "<td>".$row["total"]."</td>";
                                                   //echo "<td>".$row["injured"]."</td>";
                                                   echo "</tr>";
                                               }
                                        ?>
                                    </tbody>
                                </table>

                                
                            </div>
                        </div>
                    </div>
                
            <div class="row">
                <?php //include 'charts/districtchart.php';
                ?>
            </div>
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
