<?php

    include('init.php');
?>
     <body>
</br>
</br>
<h1>Keeping Up with Kai</h1>


    <img src="/images/profileLakeBW.jpg" alt="Kai at Lake" style="display: block; margin-left:auto; margin-right:auto; height: 50vh;"/>
    <h3> "True empowerment is staying in the vibration of</br> happiness and inviting others to join you there. </br>Not lowering your vibration to meet them." </br>
        -Maryam Hasnaa
    </h3>

            <!--        <img src="/images/kjProfileSmile.jpg" alt="Kai smile" style="height: 100vh;"/>
               </div>
               <div id = "quote">
                   <h3> When we have our health we have EVERYTHING.</h3>
               </div>
           <div id="page2">
                <div id="blogPosts">
                    <h3>Latest blog posts</h3><br/>
                </div><br>
               </div>

               <div id="page3">
                 <div id="pictures"><h3>pictures</h3><br/>

               </div>

                <div id=subscription> Join Us!
                     <form method="POST" action="public/subscribe.php">
                         <p>Name: <input type="text" name="Name" size="20"></p>
                         <p>Email: <input type="text" name="Email" size="20"></p>
                         <p><input type="submit" value="Submit" name="Submit"></p>
                     </form>
               </div>
-->
		<h3 style = 'text-align: center;'> Peep my blog post...
		</h3>
		<?php

		    $posts = getAllBlogPosts();
				foreach($posts as $index => $post){
								echo "
								<li>
										<a href = '/view/viewpost.php?blogPostId=$index'>$post[title]</a>
										";
				}


		 ?>

<br /> <br /> <br />


           </body>
   </html>
