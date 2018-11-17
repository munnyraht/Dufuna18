<?php

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
               <div> <?php echo ('Firstname :'. $_SESSION['firstname']) ?> <br>
            <?php echo ('Lastname :' .$_SESSION['lastname']) ?> <br>
             Click here for more details <a href="details.php"> Read more</a> </div>
</div>
        </body>
    </html>