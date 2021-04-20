<?php 
require 'header.php';
require 'includes/dbcl.php';
?>

<?php
		$name=$_SESSION['name'];
		$sql="SELECT * FROM highscores WHERE username=?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{
			exit();
		}
		mysqli_stmt_bind_param($stmt,"s",$name);
		mysqli_stmt_execute($stmt);
		$r=mysqli_stmt_get_result($stmt);
?>
<div class="container table-responsive table-container ">
	<table class="table table-striped table-bordered table-condensed highscoretable">
		<thread>
			<tr>
		        <th>Domain</th>
		        <th>Highscores</th>
		        <th>Total Score</th>
	      	</tr>
      	</thread>
      	<tbody>
      		<?php 
      		while($rw=mysqli_fetch_assoc($r))
      		{
      			echo'<tr>
      					<td>'.$rw['domain'].'</td>
      					<td>'.$rw['score'].'</td>
      					<td>'.$rw['total'].'</td>
      				</tr>';
      		}
      		?>
      	</tbody>
	</table>
</div>