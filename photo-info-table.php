<?php
$q = intval($_GET['n']);
//MySQL Database Connect
require_once('includes/db_connection.php');
//====================================================================================
echo "<div class='col-lg-12 col-md-4'>";
    echo "<div class='col-lg-6 col-md-4 text-center'>";
    //FOR FETCHING IMAGE of Part A
        $prabhag_num_A = $q."A";          
        $sql = "SELECT Nagarsevak_Name,URL FROM nagarsevak WHERE Prabhag_No = '".$prabhag_num_A."' ";
        $result = mysqli_query($con,$sql);
        $row_A = mysqli_fetch_array($result);
        //fetch tha data from the database
        echo "<div class=''><img width='100' src=".SITE_URL.'assets/'. $row_A['URL']."></div>" ;
        echo "<span>". $row_A['Nagarsevak_Name']."</span>";
    echo "</div>";  
    //=====================================================================================
    echo "<div class='col-lg-6 col-md-4 text-center'>";
    //FOR FETCHING IMAGE of Part B
        $prabhag_num_B = $q."B";          
        $sql = "SELECT Nagarsevak_Name,URL FROM nagarsevak WHERE Prabhag_No = '".$prabhag_num_B."' ";
        $result = mysqli_query($con,$sql);
        $row_B = mysqli_fetch_array($result);
        //fetch tha data from the database
        echo "<div class=''><img width='100' align='' src=".SITE_URL.'assets/'. $row_B['URL']."></div>" ;
        echo "<span>". $row_B['Nagarsevak_Name']."</span>";
    echo "</div>";
echo "</div>";
//=============================================================================
echo "<div class='col-lg-12 col-md-4'>";
    echo "<div class='col-lg-6 col-md-4 text-center'>";
        // nagarsevak info part A
            $sql = "SELECT Party,Total_Questions,Avg_Attendance,Criminal_Records FROM nagarsevak WHERE Prabhag_No = '".$prabhag_num_A."' ";
            $result = mysqli_query($con,$sql);
            echo "<table class='table table-bordered table-striped'>";
            while ($row = mysqli_fetch_array($result))
            {//fetch tha data from the database
                echo "<tr><td>Prabhag No:</td><td>" . $prabhag_num_A."</td></tr>";
                echo "<tr><td>Party:</td><td>" . $row['Party']."</td></tr>";
                echo "<tr><td>Total Questions:</td><td>" . $row['Total_Questions']."</td></tr>";
                echo "<tr><td>Avg Attendance:</td><td>" . $row['Avg_Attendance']."</td></tr>";
                echo "<tr><td>Criminal Charges:</td><td>" . $row['Criminal_Records']."</td></tr>";
            }
            echo "</table>";
    echo "</div>";
    //=======================================================================================
    echo "<div class='col-lg-6 col-md-4 text-center'>";
        // nagarsevak info part B
            $sql = "SELECT Party,Total_Questions,Avg_Attendance,Criminal_Records FROM nagarsevak WHERE Prabhag_No = '".$prabhag_num_B."' ";
            $result = mysqli_query($con,$sql);
            echo "<table class='table table-bordered table-striped'>";
            while ($row = mysqli_fetch_array($result))
            {//fetch tha data from the database
                echo "<tr><td>Prabhag No:</td><td>" .$prabhag_num_B. "</td></tr>";
                echo "<tr><td>Party:</td><td>" . $row['Party']."</td></tr>";
                echo "<tr><td>Total Questions:</td><td>" . $row['Total_Questions']."</td></tr>";
                echo "<tr><td>Avg Attendance:</td><td>" . $row['Avg_Attendance']."</td></tr>";
                echo "<tr><td>Criminal Charges:</td><td>" . $row['Criminal_Records']."</td></tr>";
            }
            echo "</table>";
    echo "</div>";
echo "</div>";
//=============================================================================================

  