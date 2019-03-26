<?php include 'htmlstart.php'; ?>

<div>
	<?php
		//scan articles folder for files
		$files = glob('articles/*.article');
		
		//sort articles from new to old
		rsort($files);
		
		//for each article in the folder, place a sneak peek on the homepage
		foreach($files as $file)
		{
			$filename = $file;
			$file = fopen($file, "r");
			
			echo '<div>';
				echo '<a href="article.php?article=' . $filename . '"><h2>' . fgets($file) . '</h2></a>';
				echo '<p>' . fgets($file) . '</p>';
				echo '<br>';
				echo '<p>' . fgets($file) . '<a href="article.php?article=' . $filename . '">Full text..</a>' . '</p>';
			echo '</div>';
			echo '<hr>';
			
			fclose($file);
		}
	?>
	
</div>

<?php include 'htmlend.php'; ?>
