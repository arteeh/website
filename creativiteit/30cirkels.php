<?php
$modal = 'cirkels';
$titel = '30 Cirkels';
$les = '1';
$file = 'img/30cirkels.jpg';
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
>
	<div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">
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
	We krijgen de taak om in een korte tijd 30 cirkels te vullen met wat we maar willen.
</p>
<h5>Wat is het doel van de tool?</h5>
<p>
	Het doel is om jezelf aan het denken te zetten om in een korte tijd creatief na te gaan denken.
</p>
<h5>Wat vind ik van de tool?</h5>
<p>
	Het is een leuke opdracht. Het zet je aan het werk en dwingt je om creatief na te denken. Het is een wakker-makertje.
</p>
<h5>Wat heb ik geleerd?</h5>
<p>
	Ik heb geleerd dat een hele simpele opdracht je actief bezig kan zetten en je productief kan maken.
</p>
<h5>Ga ik deze tool vaker gebruiken? Waarom wel? / Waarom niet?</h5>
<p>
	Zoiets zou ik kunnen gebruiken wanneer een team muf is en de dag alsnog door moet komen. Door tussen de middag zo’n opdracht te geven krijgen ze een leuke afleiding en krijgen ze wat energie.
</p>

			</div>
		</div>
	</div>
</div>
