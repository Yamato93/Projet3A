

<?php include("../app/include/header.inc.php"); ?>

<div id="poptrox">
	<ul id="gallery" >
		<li class="thumbnail"><img id="mini1" src="public/images/img01.jpg" title="Bulle" alt="" /></li>
		<li class="thumbnail"><img id="mini2" src="public/images/img02.jpg" title="Bulle" alt="" /></li>
		<li class="thumbnail"><img id="mini3" src="public/images/img03.jpg" title="Bulle" alt="" /></li>
		<li class="thumbnail"><img id="mini4" src="public/images/img04.jpg" title="Bulle" alt="" /></li>
		<li class="thumbnail"><img id="mini5" src="public/images/img02.jpg" title="Bulle" alt="" /></li>
		<li class="thumbnail"><img id="mini6" src="public/images/img01.jpg" title="Bulle" alt="" /></li>
		<li class="thumbnail"><img id="mini7" src="public/images/img04.jpg" title="Bulle" alt="" /></li>
		<li class="thumbnail"><img id="mini8" src="public/images/img03.jpg" title="Bulle" alt="" /></li>
	</ul>
	<img id="zoom" src="public/images/img01_big.jpg" title="Texte de bulle" alt="" width="98%" />
	<div class="btn-group btn-group-justified">
		<div class="btn-group">
			<button type="button" id="startdiapo" class="btn btn-default">Lancer le diaporama</button>
		</div>
		<div class="btn-group">
			<button type="button" id="stopdiapo" class="btn btn-default">Arrêter le diaporama</button>
		</div>
	</div>
	<div class="input-group">
			<span class="input-group-addon">Délai :</span>
			<input type="text"  class="form-control" id="delai" size="2" value="2" />
	</div>
</div>

<?php include("../app/include/footer.inc.php"); ?>

<script type="text/javascript" src="public/js/evt.js"></script>
<script type="text/javascript" src="public/js/evt_galerie.js"></script>

</body>
</html>
