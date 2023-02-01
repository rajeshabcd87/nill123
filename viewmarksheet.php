<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Enter Assessment Year and FETCH</h2>
  <form action="" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">Assessment Year</label>
      <select class="form-control" id="year" name="year" >
		
		<option id="year" value=2>2nd year</option>
		<option id="year" value=3>3rd Year</option>
		<option id="year" value=4>4th Year</option>
    </select><br>
     
    </div>
    <div class="mb-3">
      <label for="pwd">Enter for Detailed Marksheet</label><br>
      <input class="btn btn-primary"  type="submit" name="submit" value="submit">
      
    </div>
    
    
  </form>
</div>




<!-- 
    <form action="" method="POST">
        <label>Enter Year in Numbers</label>
        <input type="number" name="year" value="2" >
        <input type="submit" name="submit" value="submit">
</form> -->
</body>
</html>

<?php
session_start();
//echo $_SESSION['agniveer_no'];
if(isset($_POST['submit']))
{
    $year=$_POST['year'];
if(isset($_SESSION['agniveer_no']))

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
$agniveer_no=$_SESSION['agniveer_no'];
//$year=$_SESSION['year'];

if($year==2)
{
$sql="select field, weightage, maxmarks, marks, remarks from assessment2 where agniveer_no=$agniveer_no";

$result=mysqli_query($conn, $sql);


//echo "<h style='text-align:center;background-color:white;'1><b> Marksheet</b></h2>";
if(mysqli_num_rows($result)>0)
{
    echo "<style>
    body {
      background-image: url('agniveerimage.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
     background-color:rgb(0, 111, 139);
      font-size:20px;
    }
    table, th, td {
     border: 1px solid rgb(5, 1, 12);
     border-collapse: collapse;
     text-align: left;
     padding: 15px;
     border-spacing: 20px;
     font-size:20px;
      background-color:rgba(232, 235, 238, 0.897);


    }
    input{
        width : 100px;
        height: 30px;
    }
    </style>";
    echo "<table>
    <tr>
    <th>S.no</th>
    <th>Fields</th>
    <th>Maxmarks</th>
    <th>Weightage</th>
    <th>Marks Obtained</th>
    </tr>";
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>
        <td>".$i."</td>
        <td>".$row['field']."</td>
        <td>".$row['maxmarks']."</td>
        <td>".$row['weightage']."</td>
        <td>".$row['marks']."</td>
        </tr>";
        $i=$i+1;
    }
    echo "</table>";
}
else{
    echo "no data found";
}
}
if($year==3)
{
$sql="select field, weightage, maxmarks, marks, remarks from assessment3 where agniveer_no=$agniveer_no";

$result=mysqli_query($conn, $sql);


echo "<h style='text-align:center;background-color:white;'1><b> Marksheet</b></h2>";
if(mysqli_num_rows($result)>0)
{
    echo "<style>
    body {
      background-image: url('agniveerimage.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
     background-color:rgb(0, 111, 139);
      font-size:20px;
    }
    table, th, td {
     border: 1px solid rgb(5, 1, 12);
     border-collapse: collapse;
     text-align: left;
     padding: 15px;
     border-spacing: 20px;
     font-size:20px;
      background-color:rgba(232, 235, 238, 0.897);


    }
    input{
        width : 100px;
        height: 30px;
    }
    </style>";
    echo "<table>
    <tr>
    <th>S.no</th>
    <th>Fields</th>
    <th>Maxmarks</th>
    <th>Weightage</th>
    <th>Marks Obtained</th>
    </tr>";
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>
        <td>".$i."</td>
        <td>".$row['field']."</td>
        <td>".$row['maxmarks']."</td>
        <td>".$row['weightage']."</td>
        <td>".$row['marks']."</td>
        </tr>";
        $i=$i+1;
    }
    echo "</table>";
}
else{
    echo "no data found";
}
}
if($year==4)
{
$sql="select field, weightage, maxmarks, marks, remarks from assessment4 where agniveer_no=$agniveer_no";

$result=mysqli_query($conn, $sql);


echo "<h style='text-align:center;background-color:white;'1><b> Marksheet</b></h2>";
if(mysqli_num_rows($result)>0)
{
    echo "<style>
    body {
      background-image: url('agniveerimage.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
     background-color:rgb(0, 111, 139);
      font-size:20px;
    }
    table, th, td {
     border: 1px solid rgb(5, 1, 12);
     border-collapse: collapse;
     text-align: left;
     padding: 15px;
     border-spacing: 20px;
     font-size:20px;
      background-color:rgba(232, 235, 238, 0.897);


    }
    input{
        width : 100px;
        height: 30px;
    }
    </style>";
    echo "<table>
    <tr>
    <th>S.no</th>
    <th>Fields</th>
    <th>Maxmarks</th>
    <th>Weightage</th>
    <th>Marks Obtained</th>
    </tr>";
    $i=1;
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr>
        <td>".$i."</td>
        <td>".$row['field']."</td>
        <td>".$row['maxmarks']."</td>
        <td>".$row['weightage']."</td>
        <td>".$row['marks']."</td>
        </tr>";
        $i=$i+1;
    }
    echo "</table>";
}
else{
    echo "no data found";
}
}

}
}
?>
