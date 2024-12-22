<html lang="en" >
<html>
<head>
  <title>Login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>

<body class="body">
    <nav>
        <label class="logo">Student Education and Sports Management</label> 
            <ul>
                <li><a class="button" href="about.php">About Us</a></li>
               
            </ul>
        
    </nav>
    <?php 
    
    session_start();
    include 'registerdb.php';
    if (isset($_POST["submit"])){
      {
         
          $Registernumber = $_POST['Register_number'];
          $Password = $_POST['Password'];
      
      }
      $sql = "select Register_number, Password from register where Register_number ='$Registernumber' AND Password = '$Password'";
      $r = mysqli_query($conn,$sql);
      if (mysqli_num_rows($r) === 1) {

        $row = mysqli_fetch_assoc($r);
        $_SESSION["r_n"]=$Registernumber;
//        $_SESSION["pw"]=$row["Password"];
        header("Location:home.php");
      }
      // $sql = "INSERT INTO Login (Register_number, Password)
      // VALUES ('".$_POST["Register_number"]."','".$_POST["Password"]."')" ;
      
      
//        if database nalli edre session variable ge aki home page ge hoguthe
//        else login page mathe redirect to login page
    }
   
    ?>
<div class="login-page">
  <div class="form">
      <form action="login.php" method="post">
          <h1>Login</h1>
          
           
                           <input type="text" name="Register_number" placeholder="&#xf007; Register ID"/> <br>
                           <input type="password" id="password2" name="Password" placeholder="&#xf023; Password"/>
                                 <i class="fas fa-eye" onclick="show()"></i> 

                           <br>
                           <br>
                           <button type="submit" value="login" name="submit">LOGIN</button> 
                           <p class="message"></p>
      </form>
      <p>To Register...?<a href="Register.php" style="color:blue;font-weight: bold">Register</a>.</P>
      <!--<button type="button" onclick="window.location.href='Register.php'">Register</button>-->
  </form>
  </div>
</div>
    <script>
        function show(){
      var password = document.getElementById("password2");
      var icon = document.querySelector(".fas")

      // ========== Checking type of password ===========
      if(password.type === "password"){
        password.type = "text";
      }
      else {
        password.type = "password";
      }
    };
    </script>
</body>
</html>
    