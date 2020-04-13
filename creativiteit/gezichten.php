<?php
$modal = 'gezichten';
$titel = 'Gezichten';
$les = '1';
$file = 'img/gezichten.jpg';
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
	Teken je buurman in 1 minuut zonder naar je papier te kijken. Maak vervolgens een tweede tekening in twee minuten waar je wel mag kijken.
</p>
<h5>Wat is het doel van de tool?</h5>
<p>
	Om de les te leren dat restricties je forceren om creatiever te werken. De eerste tekening is bij veel mensen inclusief mijne leuker dan de tweede.
</p>
<h5>Wat vind ik van de tool?</h5>
<p>
	Wel leuk om te maken, een beetje ongemakkelijk om iemand die je totaal niet kent nonstop in de ogen te kijken.
</p>
<h5>Wat heb ik geleerd?</h5>
<p>
	Ik heb geleerd dat restricties je forceert om creatief te werken, wat vaak betere resultaten levert.
</p>
<h5>Ga ik deze tool vaker gebruiken? Waarom wel? / Waarom niet?</h5>
<p>
	Nee. Ik zie geen realistische situatie waarin ik dit zou gebruiken.
</p>

			</div>
		</div>
	</div>
</div>
