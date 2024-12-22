 <html>

 <head>
     <title>Register</title>

     <link rel="stylesheet" type="text/css" href="Registers.css">

     <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
 </head>
<body class="body">
     <?php

        if (isset($_POST["submit"])) {
            include 'registerdb.php';
            $Firstname = $_POST['First_name'];
            $Lastname = $_POST['Last_name'];
            $Email = $_POST['Email'];
            $Contactnumber = $_POST['Contact_number'];
            $Registernumber = $_POST['Register_number'];
            $Password = $_POST['Password'];
            $Confirmpassword = $_POST['Confirm_password'];


            $sql = "INSERT INTO Register (First_name, Last_name, Email, Contact_number, Register_number, Password)
VALUES ('" . $_POST["First_name"] . "','" . $_POST["Last_name"] . "','" . $_POST["Email"] . "','" . $_POST["Contact_number"] . "','" . $_POST["Register_number"] . "','" . $_POST["Password"] . "')";


            $result = (mysqli_query($conn, $sql));
            if ($result == TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            //            $firstname = $_POST["firstname"];
            header("Location: login.php");
        }
        ?>
     <div class="login-form">
         <nav>
         <label>STUDENT EDUCATION AND SPORTS MANAGEMENT</label>
         </nav>
         <div class="form">
             
             <form action="Register.php" method="post" onsubmit="return checkpassword()">
                 <h1>Register Here!</h1>


                 <input type="text" name="First_name" placeholder="First Name" /><br><br>
                 <input type="text" name="Last_name" placeholder="Last Name" /><br><br>
                 <input type="text" name="Email" placeholder="Email Address" id="email" /><br><br>
                 <input type="phone" name="Contact_number" placeholder="Contact Number" /><br><br>
                 <input type="text" name="Register_number" placeholder="Register Number" /><br><br>
                 <div class="pure-form">

                     <input type="password" id="password1" name="Password" placeholder="Set password" required /><br><br>
                     <input type="password" id="password2" name="Confirm_password" placeholder="Confirm Password" required />
                     <i class="fas fa-eye" onclick="show()"></i>
                     <br>
                     <br>
                 </div>
                 <div class="login-form">
                     <button type="submit" name="submit" onclick="checkpassword()">submit</button>


                     <p>If already Registered?<a href="login.php" style="color:blue;font-weight: bold">Login</a>.</P>
             </form>
         </div>
     </div>
     <script>
         function show() {
             var password1 = document.getElementById("password1");
             var password2 = document.getElementById("password2");
             var icon = document.querySelector(".fas");

             // ========== Checking type of password ===========
             if (password1.type === "password") {
                 password1.type = "text";
                 password2.type = "text";
             } else {
                 password1.type = "password";
                 password2.type = "password";
             }
         }
     </script>
     <script>
         function checkpassword() {

             var pass1 = document.getElementById("password1");
             var pass2 = document.getElementById("password2");
             var inputs = document.querySelectorAll(".login-form .form input")
             inputs.forEach((element) => {
                 if (element.value == null || element.value.length <= 0 || element.value == "") {
                     alert("invalid!.. input is empty " + element.placeholder.toString());
                     return false
                 }
                 if (element.id == "email") {
                     var mail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
                     if (element.value.match(mail)) {
                         console.log("correct email")
                         // return true
                     } else {
                         alert("invalid email format")
                         return false
                     }

                 }
             });
             console.log("working....")
             //if password not entered
             if (pass1.value != pass2.value) {
                 alert(" password did not match");
                 return false
             } else {
                 alert("password created successfully");
                 // return true
             }
             return true

         }
     </script>
 </body>

 </html>