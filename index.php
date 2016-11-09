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

	<div class="navbar">
		<ul id="menu">
		  <?php
		  include("includes/database.php");

		  $get_cats = "select * from categories";

		  $run_cats = mysqli_query($con,$get_cats);

		  while ($cats_row =mysqli_fetch_array($run_cats)) {
		  	$cat_id = $cats_row['cat_id'];
		  	$cat_title = $cats_row['cat_title'];

		  	echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
		  }
 

		  ?>
		</ul>
		<div id="form">
			<form method="get" action="results.php" enctype="multipart/form-data">
			  <input type="text" name="search_query" />
			  <input type="submit" name="search" value="Search Now" >
				
			</form>
		</div>


	</div>

	<div class="post_area">
	 <?php


	 $get_posts = "select * from posts order by rand() LIMIT 0,5";

	   $run_posts = mysqli_query($con,$get_posts);

	   while ($row_posts = mysqli_fetch_array($run_posts)){
		 $post_id = $row_posts['post_id'];
		 $post_title = $row_posts['post_title'];
		 $post_date = $row_posts['post_date'];
		 $post_author = $row_posts['post_author'];
		 $post_image = $row_posts['post_image'];
		 $post_content = substr($row_posts['post_content'],0,300);


		 echo " 
            <h2>$post_title</h2>
            <span> $post_author </span> <span> $post_date </span>
            <img src='admin/news_images/$post_image' width='100' height='100'/> 
            <div>$post_content <a style='float:right;' href='details.php?post=$post_id'>Read More</a></div>
            ";
	 }

	 ?>

	</div>

	<div class="sidebar">
	This is post body
	</div>

	<div class="footer_area">This is footer</div>
	

</div>
</body>
</html>