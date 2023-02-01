 <?php 

session_start();
echo $_SESSION['agniveer_no'];
if(isset($_SESSION['agniveer_no']))
{

if(isset($_POST["submit"]))
{
$servername = "localhost";
$username = "root";
$password = "";
$database="assessment";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$year=4;
$_SESSION['year']=$year;
$agniveer_no=$_SESSION['agniveer_no'];
    for($i=1;$i<10; $i++)
{
     if ($i==1)
        {
        $field="BPET";
        $weightage="3%";
        $max="100";

        $BPET=$_POST["bpet1"];
        $BPETR=$_POST["bpetr1"];

        $sql="INSERT into assessment4 values('$agniveer_no','$field','$weightage','$max','$BPET', '$BPETR')";
        if (mysqli_query($conn, $sql)) 
        {
                        //echo "data inserted";
        }
        }
    else if($i==2)
        {
        
        $field="PPT";
        $weightage="3%";
        $max="100";

        $BPET=$_POST["ppt"];
        $BPETR=$_POST["pptr"];

        $sql="INSERT into assessment4 values('$agniveer_no','$field',' $weightage',' $max','$BPET', '$BPETR')";
        if (mysqli_query($conn, $sql)) 
        {
                        //echo "data inserted";
        }
        }
    else if($i==3)
        {
        $field="DRILL";
                
        $weightage="1%";
        $max="100";
        $BPET=$_POST["drill"];
        $BPETR=$_POST["drillr"];
                    
        $sql="INSERT into assessment4 values('$agniveer_no','$field','$weightage','$max','$BPET','$BPETR')";
        if (mysqli_query($conn, $sql)) 
        {
                          //echo "data inserted";
        }
        }              
    else if ($i==4)
        {
        $fields="Firing";
        $max="100";
        $weightage="3%";
        $marks=$_POST['Firing'];
        $bpetr=$_POST["Firingr"];
        
        $sql="INSERT into assessment4 values('$agniveer_no','$fields','$weightage','$max','$marks','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                          //echo "data inserted";
        }
        }
    else if ($i==5)
        {
        $fields="Trade/Op";
        $max="100";
        $weightage="12%";
        $marks=$_POST['Trade'];
        $bpetr=$_POST["Trader"];
    
        $sql="INSERT into assessment4 values('$agniveer_no','$fields','$weightage','$max','$marks','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                          // echo "data inserted";
        }
        }
    else if ($i==6)
        {
        $fields="Common Mil Knowledge";
        $max="20";
        $weightage="13%";
        $marks=$_POST['mil'];
        $bpetr=$_POST["milr"];

        $sql="INSERT into assessment4 values('$agniveer_no','$fields','$weightage','$max','$marks','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                            // echo "data inserted";
        }
        }
    else if ($i==7)
        {
        $fields="Basic Tactics";
        $max="40";
        $weightage="13%";
        $marks=$_POST['tac'];
        $bpetr=$_POST["tacr"];
      
        $sql="INSERT into assessment4 values('$agniveer_no','$fields','$weightage','$max','$marks','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
              // echo "data inserted";
        }
        }
    else if ($i==8)
        {
        $fields="Trade Proficiency";
        $max="40";
        $weightage="13%";
        $marks=$_POST['tradep'];
        $bpetr=$_POST["tradepr"];
                 
        $sql="INSERT into assessment4 values('$agniveer_no','$fields','$weightage','$max','$marks','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                 // echo "data inserted";
        }
        }
    else if($i==9)
        {
        $fields="Weapon/EqptHandling";
        $max="30";
        $weightage="13%";
        $marks=$_POST['wpn'];
        $bpetr=$_POST["wpnr"];
                
        $sql="INSERT into assessment4 values('$agniveer_no','$fields','$weightage','$max','$marks','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                   //echo "data inserted";
        }
        }
}
}


            

?>
<html>
    <head>
</head>
<style>
    body {
      background-image: url('agniveerimage.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
     
      font-size:30px;
    }
    table, th, td {
     border: 1px solid rgb(5, 1, 12);
     border-collapse: collapse;
     text-align: left;
     padding: 15px;
     border-spacing: 20px;
     font-size:20px;


    }
    input{
        width : 100px;
        height: 30px;
    }
    </style>
<body>
    <table style="width:100% ;background-color: rgba(99, 130, 170, 0.5);">
        
              <form action="" method="POST">
            <tr>
                <th colspan="6"  style=" text-align:center; background-color:red; color: white;";><h2> Assessment Sheet</h2></th>
            </tr>
            <tr>
                <th>S.no</th>
                <th>Fields</th>
                <th>Weightage</th>
                <th>Max Marks</th>
                <th>Marks Obtained</th>
                <th>Remarks</th>
            </tr>
            <tr>
                <td>1</td>
                <td>BPET</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="bpet" name="bpet1" value="number"></td>
                <td><input type="textbox" id="bpetr" name="bpetr1"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>PPT</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="ppt" name="ppt" value="number"></td>
                <td><input type="textbox" id="pptr" name="pptr"></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Drill</td>
                <td>1%</td>
                <td>100</td>
                <td><input type="number" id="drill" name="drill" value="number"></td>
                <td><input type="textbox" id="drillr" name="drillr"></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Firing</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="Firing" name="Firing" value="number"></td>
                <td><input type="textbox" id="Firingr" name="Firingr"></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Trade Expertise/Op efficiency</td>
                <td>12%</td>
                <td>100</td>
                <td><input type="number" id="Trade" name="Trade" value="number"></td>
                <td><input type="textbox" id="Trader" name="Trader"></td>
            </tr>
            <tr>
                <td>6</td>
                <td>Common Mil Knowledge</td>
                <td>13%</td>
                <td>20</td>
                <td><input type="number" id="mil" name="mil" value="number"></td>
                <td><input type="textbox" id="milr" name="milr"></td>
            </tr>
            <tr>
                <td>7</td>
                <td>Basic Tactics</td>
                <td>13%</td>
                <td>40</td>
                <td><input type="number" id="tac" name="tac" value="number"></td>
                <td><input type="textbox" id="tacr" name="tacr"></td>
            </tr>
            <tr>
                <td>8</td>
                <td>Trade Proficiency</td>
                <td>13%</td>
                <td>40</td>
                <td><input type="number" id="tradep" name="tradep" value="number"></td>
                <td><input type="textbox" id="tradepr" name="tradepr"></td>
            </tr>
            <tr>
                <td>9</td>
                <td>Weapon/Equipment Handling</td>
                <td>13%</td>
                <td>30</td>
                <td><input type="number" id="wpn" name="wpn" value="number"></td>
                <td><input type="textbox" id="wpnr" name="wpnr"></td>
            </tr>
            



       
    </table>
    
        <input type="submit" id="submit" name="submit">
</form>

<!-- <form action="viewmarksheet.php" method="POST">
    <h3>View Marksheet</h1>
    <label for="marksheet">Enter Agniveer No</label>
    <input type="number" name="agniveer_no" value="agniveer_no">
    <input type="submit" name="submit">
</form> -->

<!-- 
<form action="calculate_marks.php" method="POST">
    <h2>Calculate total marks</h1>
    <label for="marksheet">Enter Agniveer No</label>
    <input type="number" name="agniveer_no" value="agniveer_no">
    <input type="submit" name="submit">
</form> -->
    </body>
</html>

<?php

}
?>

