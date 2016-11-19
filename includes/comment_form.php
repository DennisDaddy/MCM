<div>

		<?php
		include("includes/database.php");

		if (isset($_GET['post'])) {

			 	$post_id = $_GET['post'];

			 $get_posts = "select * from posts where post_id='$post_id'";

			   $run_posts = mysqli_query($con,$get_posts);
			   $row = mysqli_fetch_array($run_posts);
			   $post_new_id = $row['post_id'];
			}

			$get_comments = "select * from comments where post_id='$post_com_id' AND status='approve' ";

			$run_comments = mysqli_query($get_comments);

			while ($row_comments = mysql_fetch_array($run_comments)) {
				
			}

		?>

	 	<h2>Post a Comment</h2>     
	<form method="post" action="details.php?post=<?php echo $post_new_id; ?>">
	
	<table width="730" align="center" bgcolor="#99CCCC" >
		<tr>
			<td align="right" ><strong>Your Name:</strong></td>
			<td><input type="text" name="comment_name" size="40" /> </td>
		</tr>

		<tr>
			<td align="right" ><strong>Your Email:</strong></td>
			<td><input type="text" name="comment_email" size="40" /> </td>
		</tr>

		<tr>
			<td align="right" ><strong>Your Comment:</strong></td>
			<td><textarea name="comment" cols="34" rows="16" ></textarea> </td>
		</tr>

		

		<tr>
			
			<td align="right" colspan="4" ><input type="submit" name="submit" value="Post Comment" /> </td>
		</tr>
	</table>
		
	</form>

	<?php


	if (isset($_POST['submit'])) {
		$post_com_id = $post_new_id;
		$comment_name = $_POST['comment_name'];
		$comment_email = $_POST['comment_email'];
		$comment = $_POST['comment'];
		$status = "unapprove";
 
		if ($comment_name=='' OR $comment_email=='' OR $comment=='' ) {

			echo "<script>alert('please fill in all blanks')</script>";
			echo "<script>window.open('details.php?post=$post_id')</script>";
			exit();
		}

		else{

			$query_comment = "insert into comments(post_id,comment_name, comment_email, comment_text, status) values('$post_com_id','$comment_name','$comment_email','$comment', '$status')";
			$run_query = mysqli_query($con,$query_comment); 

			
				echo "<script>alert('Your comment will be approved after approval!')</script>";
			echo "<script>window.open('details.php?post=$post_id')</script>";
			exit();
			
		}

	}

	?>


	 </div>