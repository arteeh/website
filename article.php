<?php include 'htmlstart.php'; ?>

<div>
	<?php
		$filename = $_GET["article"];
		
		$file = fopen($filename, "r") or die("Unable to open file!");
		
		echo '<div>';
			echo '<h2>' . fgets($file) . '</h2>';
			echo '<p id="date">' . fgets($file) . '</p>';
			echo "<br>";
			while(!feof($file))
			{
				echo '<p>' . fgets($file) . '</p><br>';
			}
		echo '</div>';
			
		fclose($file);
	?>
</div>

<?php
include 'htmlend.php';
?>
