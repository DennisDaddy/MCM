<div class="sidebar">
<div id='stitle'>Recent Stories</div>

	   <?php


	 $get_posts = "select * from posts order by 1 DESC LIMIT 0,5";

	   $run_posts = mysqli_query($con,$get_posts); 

	   while ($row_posts = mysqli_fetch_array($run_posts)){
		 $post_id = $row_posts['post_id'];
		 $post_title = $row_posts['post_title'];
		 $post_image = $row_posts['post_image'];
		 

		 echo " 

		 <div class='recent_posts'>
            <h2><a  href='details.php?post=$post_id'>$post_title</a></h2>
           
            <img src='admin/news_images/$post_image' width='100' height='100'/> 
            </div>
            
            
            ";
	 }

	 ?>
	</div>
	
	