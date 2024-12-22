<html>
    <heade>
        <title> HomePage</title>
        <link rel="stylesheet" type="text/css" href="home.css">
        <meta name="viewport" content="width=device-width,instial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap.min.css">


    </heade>
    <body>
        <?php
        session_start();
        if (!isset($_SESSION['r_n'])) {
            header("location:login.php");
        }
        ?>
        <nav>
            <label class="logo">Student Education and Sports Management</label>   
            <ul>
                <li><a class="button" href="home.php">Home</a></li>
                <li><a class="button" href="about.php">About</a></li>
                <li><a class="button" href="uploads.php">Upload Here</a></li> 
                <li><a class="button" href="entindex.php">Entertainment</a><li>
                <li><a class="button" href="logout.php">logout</a></li>
            </ul>

        </nav>
        <div class="contend">
           
            <form class="text">
                <div>

                    <a href="document.php">
                        <img src="doc.jpg" >
                    </a> 

                    <button type="button" onclick="window.location.href = 'uploads.php'">Upload Document</button>
                </div>
                <div>


                    <a href="tallent.php">

                        <img src="ent.jpg">
                    </a>
                    <button type="button" onclick="window.location.href = 'entindex.php'">
                        Entertainment
                    </button>

                </div>
        </div>


    </body>
</html>