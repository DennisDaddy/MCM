<div>
	 	<h2>Post a Comment</h2>     
	<form method="post" action="details.php?post=<?php echo $post_id; ?>">
	
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


	 </div>