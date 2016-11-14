<!DOCTYPE html>
<html>
<head>
	<title>MY NEWS</title>
	<link rel="stylesheet" type="text/css" href="styles /style.css" media="all" />
</head>
<body>
<div class="container" >

	<div class="head">
		<img src="">
	</div>

	<?php include("includes/navbar.php");   ?>

	<div class="post_area">
	 <?php

	 if (isset($_GET['post'])) {

	 	$post_id = $_GET['post'];

	 $get_posts = "select * from posts where post_id='$post_id'";

	   $run_posts = mysqli_query($con,$get_posts);

	   while ($row_posts = mysqli_fetch_array($run_posts)){
		 
		 $post_title = $row_posts['post_title'];
		 $post_date = $row_posts['post_date'];
		 $post_author = $row_posts['post_author'];
		 $post_image = $row_posts['post_image'];
		 $post_content = $row_posts['post_content'];


		 echo " 
            <h2>$post_title</h2>
            <span> <i>By:</i><strong>$post_author</strong> </span> &nbsp; <span><b> $post_date </b></span><span style='color:brown;'><b>Comments(2)</b></span>
            <img src='admin/news_images/$post_image' width='300' height='300'/> 
            <div>$post_content</div>
            ";
	 }
	}

	 ?>

	</div>

     
	<form method="post" action="details.php?post=<?php echo $post_id; ?>">
	<h2>Post a Comment</h2>
	<table width="730" align="center" >
		<tr>
			<td>Your Name:</td>
			<td><input type="text" name="comment_name" /> </td>
		</tr>

		<tr>
			<td>Your Email:</td>
			<td><input type="text" name="comment_email" /> </td>
		</tr>

		<tr>
			<td>Your Comment:</td>
			<td><textarea name="comment" cols="25" rows="16" ></textarea> </td>
		</tr>

		

		<tr>
			
			<td><input type="submit" name="submit" value="Post Comment" /> </td>
		</tr>
	</table>
		
	</form>




	<?php include("includes/sidebar.php");   ?>


	<div class="footer_area">This is footer</div>
	

</div>
</body>
</html>