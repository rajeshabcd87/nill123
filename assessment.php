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


// $year=$_POST['year'];
// $_SESSION['year']=$year;
$year=$_SESSION['year1'];
$agniveer_no=$_SESSION['agniveer_no'];



    $sql_check="select agniveer_no from assessment2 where agniveer_no=$agniveer_no";
$result_check=mysqli_query($conn,$sql_check);
if(mysqli_num_rows($result_check)>0)
{
    // while($row=mysqli_fetch_assoc($result_check))
    // {
    //     if($row['agniveer_no']==$agniveer_no)
    //     {
            echo "error";
            header("location:display_failure.php");
    //     }
    // }
}

for($i=1;$i<10; $i++)
{
     if ($i==1)
        {
        $field="BPET";
        $weightage="3%";
        $max="100";

        $BPET=$_POST["bpet1"];
        $BPETR=$_POST["bpetr1"];

        $sql="INSERT into assessment2 values('$agniveer_no','$field','$weightage','$max','$BPET', '$BPETR')";
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

        $sql="INSERT into assessment2 values('$agniveer_no','$field',' $weightage',' $max','$BPET', '$BPETR')";
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
                    
        $sql="INSERT into assessment2 values('$agniveer_no','$field','$weightage','$max','$BPET','$BPETR')";
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
        
        $sql="INSERT into assessment2 values('$agniveer_no','$fields','$weightage','$max','$marks','$bpetr')";
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
    
        $sql="INSERT into assessment2 values('$agniveer_no','$fields','$weightage','$max','$marks','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                          // echo "data inserted";
        }
        }
    else if ($i==6)
        {
        $fields="Common Mil Knowledge";
        $max="0";
        $weightage="0";
        $marks=$_POST['mil'];
        $bpetr=$_POST["milr"];

        $sql="INSERT into assessment2 values('$agniveer_no','$fields','$weightage','$max','0','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                            // echo "data inserted";
        }
        }
    else if ($i==7)
        {
        $fields="Basic Tactics";
        $max="0";
        $weightage="0";
        $marks=$_POST['tac'];
        $bpetr=$_POST["tacr"];
      
        $sql="INSERT into assessment2 values('$agniveer_no','$fields','$weightage','$max','0','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
              // echo "data inserted";
        }
        }
    else if ($i==8)
        {
        $fields="Trade Proficiency";
        $max="0";
        $weightage="0";
        $marks=$_POST['tradep'];
        $bpetr=$_POST["tradepr"];
                 
        $sql="INSERT into assessment2 values('$agniveer_no','$fields','$weightage','$max','0','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                 // echo "data inserted";
        }
        }
    else if($i==9)
        {
        $fields="Weapon/EqptHandling";
        $max="0";
        $weightage="0";
        $marks=$_POST['wpn'];
        $bpetr=$_POST["wpnr"];
                
        $sql="INSERT into assessment2 values('$agniveer_no','$fields','$weightage','$max','0','$bpetr')";
        if (mysqli_query($conn, $sql)) 
        {
                   //echo "data inserted";
        }
        }
}
header("location:display_success.php");
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
    <?php echo $_SESSION['year1']; ?>
    <table style="width:100% ;background-color: rgba(99, 130, 170, 0.5);">
        
        <form action="" method="POST">
			<!-- <select id="year" name="year" >
		
		<option id="year" value=2>2nd year</option>
		<option id="year" value=3>3rd Year</option>
		<option id="year" value=4>4th Year</option>
    </select><br>
         -->
            <tr>
                <th colspan="9"  style=" text-align:center; background-color:red; color: white;";><h2> Assessment Sheet</h2></th>
            </tr>
            <?php
            $alpha =$_SESSION['year1'];
            if($alpha==2 or $alpha==3)
            {
                ?>
            <tr>
                <th>S.no</th>
                <th>Fields</th>
                <th>Weightage</th>
                <th>Max Marks</th>
                <th>Marks Obtained</th>
                <th>Remarks</th>
                <th>Coy Cdr</th>
                <th>Unit Level BOO</th>
                <!-- <th>Member 2</th> -->
            </tr>
            <tr>
                <td>1</td>
                <td>BPET</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="bpet" name="bpet1" value="number"></td>
                <td><input type="textbox" id="bpetr" name="bpetr1"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['bpet1'];  ?>" readonly></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['bpet11'];  ?>" readonly></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['bpet112'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>2</td>
                <td>PPT</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="ppt" name="ppt" value="number"></td>
                <td><input type="textbox" id="pptr" name="pptr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['ppt1'];  ?>" readonly></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['ppt11'];  ?>" readonly></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['ppt112'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>3</td>
                <td>Drill</td>
                <td>1%</td>
                <td>100</td>
                <td><input type="number" id="drill" name="drill" value="number"></td>
                <td><input type="textbox" id="drillr" name="drillr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['drill'];  ?>" readonly></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['drill1'];  ?>" readonly></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['drill12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>4</td>
                <td>Firing</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="Firing" name="Firing" value="number"></td>
                <td><input type="textbox" id="Firingr" name="Firingr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['firing'];  ?>" readonly></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['firing1'];  ?>" readonly></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['firing12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>5</td>
                <td>Trade Expertise/Op efficiency</td>
                <td>12%</td>
                <td>100</td>
                <td><input type="number" id="Trade" name="Trade" value="number"></td>
                <td><input type="textbox" id="Trader" name="Trader"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['trade'];  ?>" readonly></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['trade1'];  ?>" readonly></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['trade12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>6</td>
                <td>Common Mil Knowledge</td>
                <td>13%</td>
                <td>20</td>
                <td><input type="number" id="mil" name="mil" value=0 disabled></td>
                <td><input type="textbox" id="milr" name="milr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['cml'];  ?>" readonly></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['cml1'];  ?>" readonly></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['cml12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>7</td>
                <td>Basic Tactics</td>
                <td>13%</td>
                <td>40</td>
                <td><input type="number" id="tac" name="tac" value=0 disabled></td>
                <td><input type="textbox" id="tacr" name="tacr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['tac'];  ?>" readonly></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['tac1'];  ?>" readonly></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['tac12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>8</td>
                <td>Trade Proficiency</td>
                <td>13%</td>
                <td>40</td>
                <td><input type="number" id="tradep" name="tradep" value=0 disabled></td>
                <td><input type="textbox" id="tradepr" name="tradepr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['op'];  ?>" readonly></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['op1'];  ?>" readonly></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['op12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>9</td>
                <td>Weapon/Equipment Handling</td>
                <td>13%</td>
                <td>30</td>
                <td><input type="number" id="wpn" name="wpn" value=0 disabled></td>
                <td><input type="textbox" id="wpnr" name="wpnr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['wpn'];  ?>" readonly></td>
                 <td><input type="number" id="a" value="<?php echo $_SESSION['wpn1'];  ?>" readonly></td>
                 <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['wpn12'];  ?>" readonly></td> -->
            </tr>  
            <?php
            }
            if($alpha==4)
            {?>
            <tr>
                <th>S.no</th>
                <th>Fields</th>
                <th>Weightage</th>
                <th>Max Marks</th>
                <th>Marks Obtained</th>
                <th>Remarks</th>
                <th>Coy Cdr</th>
                <th>BOO For Final Year</th>
                <!-- <th>Member 2</th> -->
            </tr>
            <tr>
                <td>1</td>
                <td>BPET</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="bpet" name="bpet1" value="number"></td>
                <td><input type="textbox" id="bpetr" name="bpetr1"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['bpet1'];  ?>" disabled></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['bpet11'];  ?>" disabled></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['bpet112'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>2</td>
                <td>PPT</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="ppt" name="ppt" value="number"></td>
                <td><input type="textbox" id="pptr" name="pptr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['ppt1'];  ?>" disabled></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['ppt11'];  ?>" disabled></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['ppt112'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>3</td>
                <td>Drill</td>
                <td>1%</td>
                <td>100</td>
                <td><input type="number" id="drill" name="drill" value="number"></td>
                <td><input type="textbox" id="drillr" name="drillr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['drill'];  ?>" Disabled></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['drill1'];  ?>" disabled></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['drill12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>4</td>
                <td>Firing</td>
                <td>3%</td>
                <td>100</td>
                <td><input type="number" id="Firing" name="Firing" value="number"></td>
                <td><input type="textbox" id="Firingr" name="Firingr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['firing'];  ?>" disabled></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['firing1'];  ?>" disabled></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['firing12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>5</td>
                <td>Trade Expertise/Op efficiency</td>
                <td>12%</td>
                <td>100</td>
                <td><input type="number" id="Trade" name="Trade" value="number"></td>
                <td><input type="textbox" id="Trader" name="Trader"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['trade'];  ?>" disabled></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['trade1'];  ?>" disabled></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['trade12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>6</td>
                <td>Common Mil Knowledge</td>
                <td>13%</td>
                <td>20</td>
                <td><input type="number" id="mil" name="mil" value="number"></td>
                <td><input type="textbox" id="milr" name="milr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['cml'];  ?>" disabled></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['cml1'];  ?>" disabled></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['cml12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>7</td>
                <td>Basic Tactics</td>
                <td>13%</td>
                <td>40</td>
                <td><input type="number" id="tac" name="tac" value="number"></td>
                <td><input type="textbox" id="tacr" name="tacr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['tac'];  ?>" disabled></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['tac1'];  ?>" disabled></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['tac12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>8</td>
                <td>Trade Proficiency</td>
                <td>13%</td>
                <td>40</td>
                <td><input type="number" id="tradep" name="tradep" value="number"></td>
                <td><input type="textbox" id="tradepr" name="tradepr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['op'];  ?>" disabled></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['op1'];  ?>" disabled></td>
                <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['op12'];  ?>" readonly></td> -->
            </tr>
            <tr>
                <td>9</td>
                <td>Weapon/Equipment Handling</td>
                <td>13%</td>
                <td>30</td>
                <td><input type="number" id="wpn" name="wpn" value="number"></td>
                <td><input type="textbox" id="wpnr" name="wpnr"></td>
                <td><input type="number" id="a" value="<?php echo $_SESSION['wpn'];  ?>" disabled></td>
                 <td><input type="number" id="a" value="<?php echo $_SESSION['wpn1'];  ?>" disabled></td>
                 <!-- <td><input type="number" id="a" value="<?php echo $_SESSION['wpn12'];  ?>" readonly></td> -->
            </tr>  
            <?php
            }
            ?>

            
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

