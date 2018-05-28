<html>
	<head>
		<?php
			include('blog2018/include/everything.php');
		?>
</head>
<body>
</br></br>
<?php
echo"
			<h1>Khaila's Blog</h1>
			<p>My posts are all here!</p>
			<ul>
		"; //ul = unordered list
/*breaking		$posts = getAllBlogPosts();
		//argument left open because we're getting all of the posts!

		foreach($posts as $index){
			//$posts is the variable that we set equal to the getAllBlogPosts function.... $index is a variable that we just created -->
			//index the values of $posts will now be stored as $index
			echo "
			<li>
					<a href = 'blog_posts.php?postId=$index'>$post[title]<a>
			</li>
			";
		}
		*/
		$post = getAllBlogPostsArray();
		//blog post link creator
		foreach($post as $indiv){
			echo"
			<a href= '/public/viewpost.php?$post=".$indiv['title'].">".$indiv['title']."</a>";
		}
?>







</body>
