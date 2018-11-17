<?php
//connect to database signup

    ?>

    <html>
        <head>
            <title>Welcome page</title>
            <style>
                header{ color:blue ; font-weight:600;font-size: 1.2em; padding:10px;}
                *{ font-family:calibri; font-size:1.1em;}
            </style>
        </head>
        <body>
            <header> Your bio: </header> 
            <div> 
               <div> <?php echo ('Firstname :'. $_COOKIE['firstname']) ?> <br>
            <?php echo ('Lastname :' .$_COOKIE['lastname']) ?> <br>
             Click here for more details <a href="details.php"> Read more</a> </div>
</div>
        </body>
    </html>