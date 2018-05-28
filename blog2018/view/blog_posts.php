<?php
include('blog2018/include/everything.php');
$post = getBlogPost($_REQUEST['postId']);
echo "
			<h1>$post[title]</h1>
			<p>$post[body]</p>
			";

 	?>
