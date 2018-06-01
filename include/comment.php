<?php
function getCommentsForPost($blogPostId){

    $result=dbQuery("
    SELECT *
    FROM comments
    WHERE blogPostId = :blogPostId
    ", array('blogPostId' => $blogPostId));
    return $result->fetchAll();
}

//i think the function below is not used...
function getComments9($blogPostId) {
		$result=dbQuery("
				SELECT *
				FROM comments
				WHERE blogPostId = :blogPostId
				",
				array(
						"blogPostId"=>$blogPostId,
				));

return $result->fetch();
}

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

//below moved from viewpost.php
if(isset($_REQUEST['commentFormSubmit'])) {
     saveComment($blogPostId);
}

?>
<html>
</br>
    <form method='post' name='comment'>
        NAME: <input type = 'text' name='name' id='name'/><br/>
        Email:<input type = 'text' name='email' id='email'/><br/>
        Comment:<br/>
        <input type="hidden" name="getCommentsForPost" value="true"/>
        <textarea name='comment' id='comment'></textarea>
        <input type='submit' name='commentFormSubmit' value='Submit'/>
        <!-- call a function when you submit -->
    </form>
</html>
<h1> Comments</h1>
<?php
//saving comments to database
// getCommentsForPost($BlogPostId);
    //Displaying comments
$Comments=getCommentsForPost($blogPostId);
foreach ($comments as $comment){
    //$ShowComment= getComment($_REQUEST['CommentId']);


    echo "
    <h2>".$comment['name']."</h2>
    <body>".$comment['comment']."</body>";
}
