<?php
$modal = 'brainwriting';
$titel = 'Brainwriting 6-3-5';
$les = '2';
$file = 'img/brainwriting635.jpg';
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

Hier was mijn sheet met ideeën. Ik heb natuurlijk ook ideeën op de bladen van andere teamleden geschreven.
<img src="<?php echo $file; ?>" class="card-img-top my-3">
<h5>Omschrijving van de tool</h5>
<p>
	In een team heeft ieder lid een blad (zoals bovenstaand). met een 'job to be done'. Je begint op de eerste rij zelf 3 ideeën op te schrijven om de Job op te lossen. Vervolgens geef je je blad door aan de teamlid links van je en krijg je het blad van het teamlid links van je. Hier schrijf je nu op de tweede kolom weer 3 ideeën. Zo gaat het door tot je meerdere kolommen hebt (in ons geval 4 rondes). Je eindigt met een aantal bladen vol met verschillende ideeën.
</p>
<h5>Wat is het doel van de tool?</h5>
<p>
	Het doel is om in een korte tijd in een team veel ideeën verkrijgen.
</p>
<h5>Wat vind ik van de tool?</h5>
<p>
	Ik vind het een leuke opdracht. Je komt vaak met gekke dingen die een school zoals Windesheim nooit uit zou voeren maar die alsnog heel leuk zouden zijn. Ik was best trots op mijn ideeën over hoe HBO-ICT de creativiteit op Windesheim kan bevorderen.
</p>
<h5>Wat heb ik geleerd?</h5>
<p>
	Dat de Windesheim veel leuker ingericht had kunnen zijn, vol met leuke projecten gemaakt door studenten. Ook evenementen van en voor studenten etc.
</p>
<h5>Ga ik deze tool vaker gebruiken? Waarom wel? / Waarom niet?</h5>
<p>
	Misschien. Het overlapt een beetje met mindmappen, waardoor ik denk dat in een realistische situatie we een mindmap zouden gebruiken wanneer we heel veel ideeen willen verzamelen.
</p>

			</div>
		</div>
	</div>
</div>
