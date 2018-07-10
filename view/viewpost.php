<?php
	   include('init.php');
				echo "<br /> <br /> <br />";


		$blogPostId = $_REQUEST['blogPostId'];
		$Post = getPost($_REQUEST['blogPostId']);
		            echo "
		                <h1>$Post[title]</h1>
		                <body>$Post[body]
										<img src='$Post[image]'  style='display: block; margin-left:auto; margin-right:auto; height: 50vh;'/>
										</body><br />
										";

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
<!-- this is the old php comments
<html>
	<form method='post' name='comment'>
		NAME:		 <input type = 'text' name='name' id='name'/><br/>
		Email:		<input type = 'text' name='email' id='email'/><br/>
		Comment:	<input type="hidden" name="getCommentsForPost" value="true"/>
							<textarea name='comment' id='comment'></textarea>
							<input type='submit' name='commentFormSubmit' value='Submit'/>
	</form> -->

	<!-- trying to use AJAX for comments -->

	<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>
	<script type='text/javascript'>

		function saveAjaxComment(blogPostId){
//ended confused around this area....
			var commentContent = $('#comment').val(); //gets the content of the comment field
			var commentAuthor = $('#name').val();
			$.post('/save_comment_endpoint.php'), {blogPostId, commentAuthor, commentContent},
				function(contentEchoedFromServer){
					$('#putTheCommentHere').html(contentEchoedFromServer);
				}
			)
		}

	</script>
	<?php
?>

	<body>
		<div class = 'comment'>
			<!-- after you get the comment to work add in email and stuff -->
			NAME:		 <input type = 'text' name='name' id='name'/><br/>
			Email:		<input type = 'text' name='email' id='email'/><br/>
			Comment:	<input type="hidden" name="getCommentsForPost" value="true"/>
								<textarea name='comment' id='comment'></textarea>
			<input type = 'button' onclick = 'saveAjaxComment()' value = 'Save Comment'/>
			<div id = 'putTheCommentHere'></div>
		</div>
	</body>
</html>
