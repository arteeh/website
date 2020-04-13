<?php
$modal = 'reflectie';
$titel = 'Reflectie op les 2';
$les = '2';
$file = '';
?>

<a
	data-toggle="modal"
	data-target="#<?php echo $modal; ?>"
>
	<div class="card" style="width: 18rem;">
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

<p>
	Deze les vond ik een stuk leuker dan de vorige. De 6-3-5 brainwriting bracht heel veel leuke ideeën naar boven waarvan ik vind dat Windesheim die best kan gebruiken.
	<br>
	<br>
	De 'elkaar leren kennen' opdrachten ("geef degene tegenover je een compliment") vond ik best ongemakkelijk, ik sta liever voor de klas en vertel heel kort wat over mezelf. De opdrachten leiden niet tot oprechte gesprekken/banden. Ik denk dat dat komt omdat we meer technisch en minder sociaal gerichte personen zijn.
	<br>
	<br>
	Deze les had wat meer theorie en minder - maar grotere - opdrachten, waar ik me wat meer gemakkelijk mee voel i.p.v. weinig nieuwe theorie en telkens springen van opdracht naar opdracht.
	<br>
	<br>
	Brainstormen is enorm belangrijk in ICT. Die vaardigheid leidt tot kansen die je kunt pakken, wat leidt tot succes.
	<br>
	<br>
	Ik ben niet blij met hoe laat deze les is gepland. Ik merk telkens dat klasgenoten i.v.m. het late tijdstip wat gaar, moe, melig worden. Aan het eind van de dag heb je geen zin meer om je hersenen aan het werk te zetten.
</p>

			</div>
		</div>
	</div>
</div>
