<?php
    include('init.php');
echo "<br />
		";
$blogPostId = $_REQUEST['blogPostId'];
    //View blog post. This is printing the html/css of the blog post
        $Post = getPost($_REQUEST['blogPostId']);
            echo "
                <h1>$Post[title]</h1>
                <body>$Post[body]</body>";
