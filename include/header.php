<?php

/*function siteHeader(){
    echo */
    //make sidebar footer
    ?>
    <html>
        <head>
            <title>Keeping Up with Kai</title>
                   <link rel='stylesheet' href='/style.css?Time=<?php echo microtime()?>'/>
                   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
                   <link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet"/>
                   <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script|Lobster|Pacifico" rel="stylesheet">
        </head>
        <body>
<?php
        function navigation(){
            echo '<div id="nav">';
                echo '<ul>';
                    echo '<li><a href="/index.php">Home</a></li>';
                    echo '<li><a href="/view/mind.php">Mind</a></li>';
                    echo '<li><a href="/view/body.php">Body</a></li>';
                    echo '<li><a href="/view/spirit.php">Spirit</a></li>';
                    echo '<li><a href="/view/about.php">About</a></li>';
                    echo '<li><a href="/education/behavior.php">Student Behavior Tracker></a></li>';
                echo '</ul>';
             echo '<a href="https://twitter.com/OhKHAila" class="fa fa-twitter"></a>';
             echo '<a href="https://www.snapchat.com/add/yo_jonesy" class="fa fa-snapchat-ghost"></a>';
             echo '<a href="https://www.pinterest.com/khailaj43/" class="fa fa-pinterest"></a>';
             echo '<a href="https://www.linkedin.com/in/khaila-jones-913699aa/" class="fa fa-linkedin"></a>';
             echo '<a href="https://www.youtube.com/channel/UCLN0Ysl72hd0MQgKdrB7sAg" class="fa fa-youtube"></a>';
             echo '<a href="https://www.instagram.com/ohkhaila" class="fa fa-instagram"></a>';
            echo '</div>';
        }
        navigation();
?>
        </head>
    <!--   <div id="sidebar">
        </br>
        <h2>
                 Welcome
            </h2>
            <img src="/images/headshot.jpg" alt="headshot" style= "width:204px; height:128px; border-radius:50%"/>
                <p>I'll put more info about myself here. I am a junior at Webster University studying Secondary Education with an emphasis in English Language Arts.</p>

                <div id=subscription>
                        Subscribe and never miss a new blog post!
                    <form method="POST" action="public/subscribe.php">
                         <p>Name: <input type="text" name="Name" size="20"></p>
                         <p>Email: <input type="text" name="Email" size="20"></p>
                         <p><input type="submit" value="Submit" name="Submit"></p>
                    </form>
                </div>
                <br/>
             <h2>
                Be Social!<br/>
                <a href="https://www.instagram.com/ohkhaila" class="fa fa-instagram"></a>
                <a href="https://twitter.com/OhKHAila" class="fa fa-twitter"></a>
                <a href="https://www.snapchat.com/add/yo_jonesy" class="fa fa-snapchat-ghost"></a><br/>
                <a href="https://www.pinterest.com/khailaj43/" class="fa fa-pinterest"></a>
                <a href="https://www.linkedin.com/in/khaila-jones-913699aa/" class="fa fa-linkedin"></a>
                <a href="https://www.youtube.com/channel/UCLN0Ysl72hd0MQgKdrB7sAg" class="fa fa-youtube"></a>
            </h2>

        </div> -->
    </body>
</br></br>
