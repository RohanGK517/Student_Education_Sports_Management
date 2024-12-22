<html>
    <head>
        <link rel ="stylesheet" type="text/css" href="about.css"> 
    </head>
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
                <li><a href="home.php">HOME</li></a>

            </ul></nav>

        <img src="logo.jpeg">
        <p>  It is a Website, Which allows the user to store their documents and can download them anywhere, anytime.<br>
            It also have an option to delete the uploaded documents,<br>By this ,
            we can avoid the burden of carrying the hard copies everywhere we go.<br>
            There will be chances of loosing some of the important documents. 
            So it is safe upload in this website.<br><br>
            Apart from this we also provide a very good platform to showcase the talent,<br>
            in which the user can upload his Paintings,Poetries,Photography and etc......<br>
            So we can use this an a multipurpose  website for a college level activities.</p>
    </div>
</body>
</html>