<?php

require_once 'dbconnect.php';

if(isset($_GET['keywords']))
{
	$keywords = $con->escape_string($_GET['keywords']);

	$query = $con->query("
			SELECT * FROM restaurant WHERE name LIKE '%{$keywords}%'
		");
	?>

	<div class="result-count">
		Found <?php echo $query->num_rows; ?> results.
	</div>

	<?php

	if($query->num_rows){
		while($r = $query->fetch_object())
		{
			?>
			<div class="result">
				<a href="#"><?php echo $r->name; ?></a>
			</div>
			<?php
		}
	}
}
