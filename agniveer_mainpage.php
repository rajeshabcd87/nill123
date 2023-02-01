<?php
session_start();

if(isset($_SESSION['agniveer_no']))
{

  echo $_SESSION['agniveer_no'];
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Agniveer Management and Assessment System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      .fakeimg {
        height: 200px;
        background: #aaa;
      }
    </style>
  </head>
  <body>
    <div class="p-1 bg-primary text-white text-center">
      <h1>Agniveer Management and Assessment System</h1>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <?php
        if($_SESSION['role']=="adjt")
        {
          

        ?>

        <ul class="navbar-nav">
          <li class="nav-item">
            <!-- <form action="" method="POST">
                <input type="number" name="agniveer_no" Placeholder="Enter Agniveer Number" value="no">
                <input type="submit" name="submit"  value="submit" >
            </form> -->
            <!-- <a class="nav-link active" href="/Agniveerfinal/Agniveer_Details.php"
              >Agniveer Details</a
            > -->
          </li>
           <li class="nav-item">
            <li id="approve"><a class="nav-link" href="approve_reset_password.php" target="iframe_a">Approve Request</a></li><p></p>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/Agniveerfinal/enrolement.php" target="iframe_a">Enrolement Details</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="coy_cdr_assess_co.php" target="iframe_a">Assessment Sheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewmarksheet.php" target="iframe_a">View Markssheet</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="calculate_marks.php" target="iframe_a">Calculate Marks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="finalyear1.php" target="_blank">Final Year Assessment</a>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li class="nav-item"> -->
          <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a></li><p></p>
          <li>
        </ul>
        <?php
        }
        else if($_SESSION['role']=="user")
        {
          ?>
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="viewmarksheet.php" target="iframe_a">View Markssheet</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="calculate_marks.php" target="iframe_a">Calculate Marks</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="/Agniveerfinal/enrolement.php" target="iframe_a">Enrolement Details</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a></li><p></p>
          <li>
        </ul>
          <?php
        }
        else if($_SESSION['role']=="coy_cdr")
        {
        ?>
        <ul class="navbar-nav">
        
        <li class="nav-item">
            <a class="nav-link" href="assessment_coycdr.php" target="iframe_a">Assessment Sheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewmarksheet_coy.php" target="iframe_a">View Markssheet</a>
          </li>
           <!-- <li class="nav-item">
            <a class="nav-link" href="calculate_marks.php" target="iframe_a">Calculate Marks</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="finalyear1.php" target="_blank">Final Year Assessment</a>
          </li> -->
           <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a></li><p></p>
          <li>
        </ul>
        <?php
        }
        else if($_SESSION['role']=="member1")
        {
        ?>
        <ul class="navbar-nav">
        
        <li class="nav-item">
            <a class="nav-link" href="assessment_member1.php" target="iframe_a">Assessment Sheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewmarksheet_member1.php" target="iframe_a">View Markssheet</a>
          </li>
           <!-- <li class="nav-item">
            <a class="nav-link" href="calculate_marks.php" target="iframe_a">Calculate Marks</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="finalyear1.php" target="_blank">Final Year Assessment</a>
          </li> -->
           <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a></li><p></p>
          <li>
        </ul>
        <?php
        }
        else if($_SESSION['role']=="member2")
        {
        ?>
        <ul class="navbar-nav">
        
        <li class="nav-item">
            <a class="nav-link" href="assessment_member2.php" target="iframe_a">Assessment Sheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewmarksheet_member2.php" target="iframe_a">View Markssheet</a>
          </li>
           <!-- <li class="nav-item">
            <a class="nav-link" href="calculate_marks.php" target="iframe_a">Calculate Marks</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="finalyear1.php" target="_blank">Final Year Assessment</a>
          </li> -->
           <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a></li><p></p>
          <li>
        </ul>
        <?php
        }
        else if($_SESSION['role']=="co")
        {
        ?>
         <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="coy_cdr_assess_co.php" target="iframe_a">Assessment Sheet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="viewmarksheet.php" target="iframe_a">View Markssheet</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="calculate_marks.php" target="iframe_a">Calculate Marks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="finalyear1.php" target="_blank">Final Year Assessment</a>
          </li>
           <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a></li><p></p>
          <li>
        </ul>
        <?php
        }
        else if($_SESSION['role']=="admin")
        {
        ?>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/Agniveerfinal/enrolement.php" target="iframe_a">Enrolement Details</a>
          </li>
           <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a></li><p></p>
          <li>
        </ul>
        <?php
        }
        ?>


        


        
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-2">
          <h2>About Me</h2>
          <h5></h5>
          <div class="fakeimg"><img src="agniveer_image.jfif" width=100% height=100%></div>
          
          <h3 class="mt-4">Motivational Video</h3>
          
          <video width=100% height=100 controls>
            <source src="motivational_video.mp4" type="video/mp4">
    </video>
          <!-- <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
          </ul> -->
          <hr class="d-sm-none" />
        </div>
        <div class="col-sm-10">
          <iframe src="/Agniveerfinal/Agniveer_Details.php" width=100% height=100% name="iframe_a"></iframe>
          <!-- <h2>TITLE HEADING</h2>
          <h5>Title description, Dec 7, 2020</h5>
          <div class="fakeimg">Fake Image</div>
          <p>Some text..</p>
          <p>
            Sunt in culpa qui officia deserunt mollit anim id est laborum
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco.
          </p>

          <h2 class="mt-5">TITLE HEADING</h2>
          <h5>Title description, Sep 2, 2020</h5>
          <div class="fakeimg">Fake Image</div>
          <p>Some text..</p>
          <p>
            Sunt in culpa qui officia deserunt mollit anim id est laborum
            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco.
          </p> -->
        </div>
      </div>
    </div>

    <div class="mt-5 p-4 bg-dark text-white text-center">
      
          <a class="nav-link" href="logout.php">LOGOUT</a></li><p></p>
          
    </div>

    <?php
    //session_start();
    
  
    // if (isset($_POST['submit']))
    //  {
             
    // $_SESSION['agniveer_no']=$_POST['agniveer_no'];
    //   echo "in php";
      
    
    //     header("location:/Agniveerfinal/Agniveer_Details.php");
    //  }
    // else{
    //     echo "error";
    // }
    
    ?>
  </body>
</html>
<?php
}
else{
  header("location:loginform2.php");
}

?>
