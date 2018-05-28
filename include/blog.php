<?php
  function getPost($PostId){
    $result = dbQuery("
    SELECT*
    FROM posts
    WHERE PostId = :$PostId
    ",
    array(
      "PostId"=>$PostId
    ));
    return $result->fetch();
    //The FETCH statement retrieves rows of data from the result set of a multiple-row query—one row at a time, several rows at a time, or all rows at once—and stores the data in variables, records, or collections
  }
  function getAllBlogPosts(){
    $result=dbQuery("
    SELECT*
    FROM posts
    ");
    return $result->fetchAll();
  }
//commented out because im getting error : call to undefined function dbQuery  */


	function getAllBlogPostsArray(){
		//make a function called getAllBlogPostsArray
		//used before the SQL lesson
		//this should be a core activity
		return array(
			//return this array that i'm defining below
								1 => array(
										//the first element in the array will be an array of its own (this is a nested array)
													"title" => "Post Numero Uno",
													"body" => "
															<p>I'm going to put really corny things here soon</p>
															<p> then I can write another paragraph</p>
															<p> and probably another one here </p>
															"
														),
									2=> array(
															"title" => "This will be the second blog post",
															"body" => "
																<p>Paragraph about something with the mind</p>
																<p>anotha one</p>
															"
														),
									3 => array(
															"title" => "Something about a podcast that hasn't been born yet",
															"body" => "
																<p>More about this unborn podcast</p>
																"
															),
		);
	}


	//i think this URL is wrong... need to rebuild and get names of variables and things right

function getBlogPost($postId){
	//$postId is the argument passed to the getBlogPost function
					$allPosts = getAllBlogPosts();
					// $allPosts is set as equal to the getAllBlogPosts function (clean code)
					return $allPosts[$postId];
					//returns $allPosts with $postId as the argument
					//$postId will determine which
}
 // die('here');
//whole page working and then get an error that says: Use of undefined constant DB_HOSTNAME - assumed 'DB_HOSTNAME' in /vagrant/site/blog2018/include/db_query.php on line 7

 ?>
