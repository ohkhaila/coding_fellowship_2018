<?php
    include('init.php');
echo "<br />
		";
$BlogPostId = $_REQUEST['postId'];
    //View blog post. This is printing the html/css of the blog post
        $Post = getPost($_REQUEST['postId']);
            echo "
                <h1>$Post[title]</h1>
                <body>$Post[body]</body>";
