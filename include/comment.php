<?php
function getCommentsForPost($BlogPostId){

    $result=dbQuery("
    SELECT *
    FROM comments
    WHERE BlogPostId = :BlogPostId
    ", array('BlogPostId' => $BlogPostId));
    return $result->fetchAll();
}

//i think the function below is not used... 
function getComments9($PostId) {
		$result=dbQuery("
				SELECT *
				FROM comments
				WHERE BlogPostId = :BlogPostId
				",
				array(
						"PostId"=>$PostId,
				));

return $result->fetch();
}

function saveComment($BlogPostId){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
   	$Comment=$_POST['Comment'];

    $result=dbQuery("INSERT INTO comments (BlogPostId, Name, Email, Comment)
    VALUES (:BlogPostId, :Name, :Email, :Comment)",

    array(
        'BlogPostId'=>$BlogPostId ,
        'Name'=>$Name,
        'Email'=>$Email,
        'Comment'=>$Comment,
    ));
}

function getComment($CommentId){

    $result=dbQuery("
    SELECT*
    FROM comments
    WHERE CommentId=CommentId
    ");
    return $result->fetch();
}

//below moved from viewpost.php
if(isset($_REQUEST['commentFormSubmit'])) {
     saveComment($BlogPostId);
}

?>
<html>
</br>
    <form method='post' name='comment'>
        NAME: <input type = 'text' name='Name' id='Name'/><br/>
        Email:<input type = 'text' name='Email' id='Email'/><br/>
        Comment:<br/>
        <input type="hidden" name="getCommentsForPost" value="true"/>
        <textarea name='Comment' id='Comment'></textarea>
        <input type='submit' name='commentFormSubmit' value='Submit'/>
        <!-- call a function when you submit -->
    </form>
</html>
<h1> Comments</h1>
<?php
//saving comments to database
// getCommentsForPost($BlogPostId);
    //Displaying comments
$Comments=getCommentsForPost($BlogPostId);
foreach ($Comments as $Comment){
    //$ShowComment= getComment($_REQUEST['CommentId']);


    echo "
    <h2>".$Comment['Name']."</h2>
    <body>".$Comment['Comment']."</body>";
}
