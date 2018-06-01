<?php

//This function is getting a secific blog post from the database
function getPost($blogPostId) {
    $result=dbQuery("
        SELECT *
        FROM posts
        WHERE blogPostId = :blogPostId
        ",
        array(
            "blogPostId"=>$blogPostId,
        ));
return $result->fetch();
    }


//This function is getting all blog posts from the database
    function getAllBlogPosts(){
        $result=dbQuery("
            SELECT *
            FROM posts
        ");

    return $result->fetchAll();
    }

// I have  been trying to create a function that creates a link for each new blog post
        //foreach($Post as $indiv){
            // $indiv['title']
        //    echo "
        //    <a href='/public/viewpost.php?$BlogPostId=".$indiv['PostId']."'>".$indiv['Title']."</a>";

        //}
        ?>
