<?php
$modal = 'titel';
$titel = 'Titel';
$les = '0';
$file = '';
?>

<a
	data-toggle="modal"
	data-target="#<?php echo $modal; ?>"
>
	<div class="card" style="width: 18rem;">
		<img src="<?php echo $file; ?>" class="card-img-top">
		<div class="card-body">
			<h5 class="card-title">
				<?php echo $titel; ?>
			</h5>
			<p class="card-text">
				<small class="text-muted">
					Les <?php echo $les; ?>
				</small>
			</p>
		</div>
	</div>
</a>

<div
	class="modal fade"
	id="<?php echo $modal; ?>"
	tabindex="-1"
	role="dialog"
	aria-labelledby="exampleModalScrollableTitle"
	aria-hidden="true"
>
	<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalScrollableTitle">
					<?php echo $titel; ?>
				</h4>
				<button
					type="button"
					class="close"
					data-dismiss="modal"
					aria-label="Close"
				>
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				
<img src="<?php echo $file; ?>" class="card-img-top my-3">
<h5>Omschrijving van de tool</h5>
<p>
	...
</p>
<h5>Wat is het doel van de tool?</h5>
<p>
	...
</p>
<h5>Wat vind ik van de tool?</h5>
<p>
	...
</p>
<h5>Wat heb ik geleerd?</h5>
<p>
	...
</p>
<h5>Ga ik deze tool vaker gebruiken? Waarom wel? / Waarom niet?</h5>
<p>
	...
</p>

			</div>
		</div>
	</div>
</div>
