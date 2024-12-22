
<?php 
include 'document.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="upload.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
       <nav>
             <label class="logo">Student Education and Sports Management</label>   

            <ul>
                
         
                <li><a href="home.php">Home </a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    <div class="container">
      <div class="row">
        <form action="viewdoc.php" method="post" enctype="multipart/form-data" >
            <a href="viewdoc.php"><h1>uploaded Files</h1></a>
          
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>
