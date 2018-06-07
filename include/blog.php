<html>
<br /><br />
</html>
<?php

	function getPost($blogPostId) {
	    $result=dbQuery("
	        SELECT *
	        FROM posts
	        WHERE blogPostId = :blogPostId
	        ",
	      array(
	            "blogPostId"=>$blogPostId,
	        ));
				return $result -> fetch();
  }

	function getAllBlogPosts(){
	        $result=dbQuery("
	            SELECT *
	            FROM posts
	        ");
	    	return $result->fetchAll();
	 }


	function getCommentsForPost($blogPostId){

			    $result=dbQuery("
			    SELECT *
			    FROM comments
			    WHERE blogPostId = :blogPostId
			    ",
					array('blogPostId' => $blogPostId));
			    return $result->fetchAll();
	}

			//i think the function below is not used...
			// function getComments9($blogPostId) {
			// 		$result=dbQuery("
			// 				SELECT *
			// 				FROM comments
			// 				WHERE blogPostId = :blogPostId
			// 				",
			// 				array(
			// 						"blogPostId"=>$blogPostId,
			// 				));
			//
			// return $result->fetch();
			// }

			function saveComment($blogPostId){
			    $name=$_POST['name'];
			    $email=$_POST['email'];
			   	$comment=$_POST['comment'];

			    $result=dbQuery("INSERT INTO comments (blogPostId, name, email, comment)
			    VALUES (:blogPostId, :name, :email, :comment)",

			    array(
			        'blogPostId'=>$blogPostId ,
			        'name'=>$name,
			        'email'=>$email,
			        'comment'=>$comment,
			    ));
			}

			function getComment($commentId){

			    $result=dbQuery("
			    SELECT*
			    FROM comments
			    WHERE commentId=commentId
			    ");
			    return $result->fetch();
			}

	$blogPostId = $_REQUEST['blogPostId'];
			if(isset($_REQUEST['commentFormSubmit'])) {

			     saveComment($blogPostId);
			}

		?>
