<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View</title>
        <style>
            *{
                padding: 0px;
                margin:0px;
                box-sizing: border-box;


            }
            body{
                background-color: white;
            }
            /*        body {
                        display: flex;
                        justify-content: start;
                        align-items: center;
                        flex-direction: column;
                        flex-wrap: wrap;
                        min-height: 100vh;
                        background-color: rgb(0, 0, 128);
                        background-image: url('pexels-pixabay-106155.jpg');
                        background-color: white;
                    }
                    nav .logo{
                            background-color: black;
                            height: 80px;
                            width: 100%;
                        }
                        nav .logo{
                            color:white;
                            font-size: 25px;
                            inline-box-align: 60px;
                            line-height: 70px;
                            padding: 0 90px;
                            float: left;
                            font-weight: bold;
            
                        }
            
            */

            video {
                width: 640px;
                height: 360px;
                display: block;
                background: gray;
                float: center;
                padding: 30px;
                margin:10px;
            }
            /*a{color: blue;
                text-decoration: none;
                font-size: 15px;
                padding: 8px 16px;
                border-radius: 3px;
                text-transform: uppercase;
                line-height:70px;
                margin: 0 2px;
                display: inline-block;
                float:right;
                margin-right: 10px;
                list-style: none;
                
                    a {
                        text-align: center;
                        text-decoration: none;
                         color: #006CFF; 
                        font-size: 1.5rem;
                        display: inline-block;
                        background-color: black;
                        margin: 1rem;
                        padding: 10px 16px;
                        border-radius: 3px;
                        color: white;
                        float: right;
                        text-transform: uppercase;
                        
                    }
            
                    a:hover {
                        background-color: coral;
                        text-decoration: underline;
                        transform: scale(1.1);
                    }
            
                    nav  {
                        display:inline-block;
                         flex-direction: column; 
                        justify-content:flex-end;
                        align-items: center;
                         background-color: red; 
                        width: 100%;
                        height: 50%;
                        float: right;
                    }*/

            nav{
                background-color: black;
                height: 80px;
                width: 100%;
            }
            nav .logo{
                color:white;
                font-size: 25px;
                inline-box-align: 60px;
                line-height: 70px;
                padding: 0 90px;
                font-weight: bold;

            }
            nav ul {
                float: right;
                list-style: none;
                margin-right: 10px;
            }
            nav ul li{
                display: inline-block;
                line-height:70px;
                margin: 0 2px;

            }
            nav ul a{
                /*border: 2px dashed darkgray;*/
                color: white;
                text-decoration: none;
                font-size: 15px;
                padding: 8px 16px;
                border-radius: 3px;
                text-transform: uppercase;
            }
            nav a:hover{
                background:coral;
                /*trasition: .5s;*/
            }

            .alb{
                display: flex;
                flex-wrap: wrap;
                gap: 2rem;
                justify-content: center;
                align-items:center ;
            }
            form button{
                padding: 0.6rem;
                border: none;
                background-color: red;
                border-radius: 0.4rem;
                color: white;
                font-size: 1.1rem;
                /*inline-box-align: 40%;*/
            }

        </style>
    </head>

    <body>
        <nav>
            <label class="logo">ENTERTAINMENT</label> 

            <ul>
                <li> <a class="button" href="entindex.php">UPLOAD</a></li>
                <li>   <a  class="button" href="home.php">home</a></li>
            </ul>
        </nav>

        <div class="alb">
            <?php
            include "registerdb.php";
            $sql = "SELECT * FROM videos ORDER BY id DESC";
            $res = mysqli_query($conn, $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($video = mysqli_fetch_assoc($res)) {
                    ?>

                    <video src="entuploads/<?= $video['video_url'] ?>" controls>

                    </video>
                    <form action="delete.php" method="post">
                        <button name="delete" value="<?php echo $video['id']
                    ?>">delete</button>
                    </form>
                    <?php
                }
            } else {
                echo "<h1>Empty</h1>";
            }
            ?>
        </div>
    </body>

</html>