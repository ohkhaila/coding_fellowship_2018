<?php
    include('init.php');
echo "<br />
			";

$blogPostId = $_REQUEST['blogPostId'];

$Post = getPost($_REQUEST['blogPostId']);
            echo "
                <h1>$Post[title]</h1>
                <body>$Post[body]</body><br />";

echo " <h3>
				Leave a comment! We love hearing from you!
			</h3>
		";

$showComments=getCommentsForPost($blogPostId);
	foreach ($showComments as $comment){
				   echo "
					 <div class = comment>
							<h2>".$comment['name']."</h2>
					   	<body>".$comment['comment']."</body> <br />
							<body>".$comment['timestamp']."
					</div>	<br/>
							";
								}
?>



<form method='post' name='comment'>
	NAME:		 <input type = 'text' name='name' id='name'/><br/>
	Email:		<input type = 'text' name='email' id='email'/><br/>
	Comment:	<input type="hidden" name="getCommentsForPost" value="true"/>
						<textarea name='comment' id='comment'></textarea>
						<input type='submit' name='commentFormSubmit' value='Submit'/>
</form>
