<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>video upload php and mysql</title>
        <style>
            *{
                padding: 0px;
                margin:0px;
                box-sizing: border-box;


            }
            body {
                /*padding: 100px;*/
                display: flex;
                /*                justify-content: center;*/
                align-items: center;
                flex-direction: column;
                min-height: 100vh;
                /*background-color: rgb(0, 0, 128);*/
                background-image: url('WhatsApp Image 2022-08-30 at 11.45.52 AM.jpg')
            }
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

            input {
                font-size: 2rem;
            }

            a {
                justify-content: center;
                text-decoration: none;
                /* color: #006CFF; */
                font-size: 1.5rem;
                display: block;
                background-color: rgba(0, 255, 4, 0.992);
                border-radius: 0.5rem;
                padding: 1.5rem;
                color: white;
            }
            a:hover{
                text-decoration: underline;
                transform: scale(1.1);
            }

            form {
                margin: 1rem;
                padding: 1.5rem;
                background-color: gray;
            }

        </style>
    </head>

    <body>
        <nav>
            <label class="logo">Student Education and Sports Management</label>   
        </nav>
        <a href="entview.php">Videos</a>
        <?php if (isset($_GET['error'])) {
            ?>
            <p>
                <?= $_GET['error'] ?>
            </p>
            <?php
        }
        ?>
        <form action="entupload.php" method="post" enctype="multipart/form-data"><input type="file"
                                                                                        name="my_video"><input type="submit" name="submit" value="Upload<?php 'alert("Please choose a file to be uploaded");' ?>"></form>
    </body>

</html>