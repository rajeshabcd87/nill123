<?php
session_start();

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
      <h1>Agniveer Personal Details</h1>
    </div>

    <div class="container mt-1">
      <div class="row">
        <div class="col-sm-8">
          <h2>Personal Details</h2>
          <form action="/Agniveerfinal/details.php" method="POST">
            <div class="mb-1 mt-1">
              <label for="name">Name</label>
              <input
                type="text"
                class="form-control"
                id="name"
                placeholder="Enter full name"
                name="name"
              />
            </div>
            <div div class="mb-3 mt-3">
              <label for="rank">Rank</label>
              <input
                type="text"
                class="form-control"
                id="rank"
                placeholder="Enter rank"
                name="rank"
              />
            </div>
            <div div class="mb-3 mt-3">
              <label for="browser3" class="form-label">Total Service</label>
              <input
                class="form-control"
                list="browsers1"
                name="browser2"
                id="browser3"
              />
              <datalist id="browsers1" >
                <option value="1 year"></option>
                <option value="2 year"></option>
                <option value="3 year"></option>
              </datalist>
            </div>
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
            <div class="mb-3">
              <label for="browser1" class="form-label"
                >Choose your Qualification from the list:</label
              >
              <input
                class="form-control"
                list="browsers5"
                name="browser1"
                id="browser1"
              />
              <datalist id="browsers5" >
                <option value="10th"></option>
                <option value="12th"></option>
                <option value="B.Tech"></option>
                <option value="B.Sc"></option>
                <option value="B.Com"></option>
                <option value="LLB"></option>
                <option value="B.A"></option>
                <option value="Post Graduate"></option>
              </datalist>
            </div>
            <div class="form-check mb-3">
              <label class="form-check-label">
                <input
                  class="form-check-input"
                  type="checkbox"
                  name="remember"
                />
                Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
        </div>
        <div class="col-sm-4">
          <h2>Insert Image</h2>
          <p>Upload Passport size photograph of Agniveer</p> 
							<p>Please make sure the Details of Agniveer is already added to database before uploading the image.</p>
							<br>							
							<!-- <form method="POST" action="" name="imageForm" id="imageForm" method="post"> -->
                <form method="POST" action="/Agniveerfinal/agniveer_image.php" enctype="multipart/form-data">
							  <div class="form-row">
								<div class="form-group col-md-3" style="display:inline-block">
								  <label for="itemImageItemNumber">Agniveer Number<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemImageItemNumber" id="itemImageItemNumber" autocomplete="off">
								  <!-- <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div> -->
								</div>
								<div class="form-group col-md-4">
									<label for="itemImageItemName">Agniveer Name</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" >
								</div>
							  </div>
							  <br>
							  <div class="form-row">
								  <div class="form-group col-md-7">
                    <!-- <form method="POST" action="/Agniveerfinal/agniveer_image.php" enctype="multipart/form-data"> -->
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <!-- <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div> -->
        
									<!-- <label for="itemImageFile">Select Image ( <span class="blueText">jpg</span>, <span class="blueText">jpeg</span>, <span class="blueText">gif</span>, <span class="blueText">png</span> only )</label>
									<input type="file" class="form-control-file btn btn-dark" id="itemImageFile" name="itemImageFile"> -->
								  </div>
							  </div>
							  <br>
							  <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
							  <button type="button" id="deleteImageButton" class="btn btn-danger">Delete Image</button>
							  <button type="reset" class="btn">Clear</button>
							

                            
						</div>
					</form>
        </div>
      </div>
    </div>
    
    <div >
      <form action=""> 
  <select name="customers" onchange="showCustomer(this.value)">
    <option value="">Select Agniveer number</option>
    <option value="<?php echo $_SESSION['agniveer_no']; ?>"><?php echo $_SESSION['agniveer_no']; ?></option>
    
  </select>
</form>
    </div>
    <div id="txtHint"></div>
    <div style="margin-right:50%;">
      <form action="" method="POST">
        <input type="submit" value="submit1" name="submit1">
    </form>
      <div id="display-image"  style="margin-right: 200px;">
        <?php
        if(isset($_POST['submit1']))
        {
        $servername="localhost";
        $username="root";
        $password="";
        $database="assessment";
        $a=$_SESSION['agniveer_no'];

        $conn=mysqli_connect($servername, $username, $password, $database);
        if (!$conn)
        {
            echo "not connected";
        }
        
        $query = " SELECT* from image where agniveer_no=$a ";
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
          ?>

      
            <img src="./image/<?php echo $data['filename']; ?>">
 <?php
        
        }
      }
        ?>
    </div>
    </div>
<script>
function showCustomer(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "view_agniveer.php?q="+str);
  xhttp.send();
}
</script>

    
   
  </body>
</html>
