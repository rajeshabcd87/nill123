<?php
session_start();
?>


<?php
if(isset($_SESSION['agniveer_no']))
{
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
      <h1>Agniveer Enrolement Details</h1>
    </div>

    <div class="container mt-1">
      <div class="row">
        <div class="col-sm-8">
          <h2>Enrolement Details</h2>
          <form action="/Agniveerfinal/enrol.php" method="POST">
            <div class="mb-3">
              <label for="pwd">Agniveer No</label>
              <input
                type="text"
                class="form-control"
                id="agniveer_no"
                placeholder="<?php echo $_SESSION['agniveer_no']; ?>"
                name="agniveer_no"
                value="<?php echo $_SESSION['agniveer_no']; ?>"
                readonly
              />
            </div>
            <div div class="mb-3 mt-3">
              <label for="rank">Enrolement Id</label>
              <input
                type="text"
                class="form-control"
                id="rank"
                placeholder="Enter rank"
                name="id"
              />
            </div>
            <div class="mb-1 mt-1">
              <label for="name">Enrolement City</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Enter full name"
                name="city"
              />
            </div>
            
            <div div class="mb-3 mt-3">
              <label for="date" class="form-label">Enrolement Date</label>
             <input
                type="date"
                class="form-control"
                id="date"
                placeholder="Enter date"
                name="date"
              />
              
            </div>
            
            <div class="mb-3">
              <label for="age">Age at the Time of Enrolement</label>
              <input
                type="number"
                class="form-control"
                id="age"
                placeholder="Enter age"
                name="age"
              />
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
    </div>
    <?php
}
else{
    header("location:agniveer_mainpage.php");
}
?>
    </body>
    </html>
