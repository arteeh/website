<?php
$modal = 'mindmap';
$titel = 'Mindmap';
$les = '2';
$file = 'img/mindmap.jpg';
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
	Maak een mindmap over een bepaald onderwerp. In ons geval:
	<ul>
		<li>Hoe gaat COP Duurzaamheid eruit zien?</li>
		<li>Hoe betrekken we meer bedrijven bij kennis van duurzaamheid op Windesheim?</li>
		<li>Welke rol speelt ICT daarbij?</li>
	</ul>

</p>
<h5>Wat is het doel van de tool?</h5>
<p>
	Het doel is om alle ideeën die je over een bepaald onderwerp hebt op papier te gooien en mild te structureren. Zo kun je later goede ideeën meenemen en de slechten van tafel halen.
</p>
<h5>Wat vind ik van de tool?</h5>
<p>
	Dit is een hele belangrijke in mijn werkveld. Hier heb ik al vaker mee gewerkt binnen en buiten school en het hielp elke keer. Het is een goede manier om een project te beginnen (wat gaan we wel/niet doen? Wat brengt ons naar een resultaat en wat niet?)
</p>
<h5>Wat heb ik geleerd?</h5>
<p>
	Illustraties maken een mindmap een stuk makkelijker om naar te kijken en helpen je om specifieke dingen in de muur van tekst te vinden.
</p>
<h5>Ga ik deze tool vaker gebruiken? Waarom wel? / Waarom niet?</h5>
<p>
	Ik ga het gegarandeerd vaak gebruiken. In de ICT wereld wordt het al vaak gebruikt en het helpt meestal om ideeën naar boven te brengen.
</p>

			</div>
		</div>
	</div>
</div>
