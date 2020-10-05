<?php $this->layout('layout', ['title' => 'Accueil']); ?>

<?php $this->start('main_content'); ?>
<h2>Let's code.</h2>
<p></p>
<div class="container">
	<div class="row">
		<img src="https://source.unsplash.com/CCvPBLutwT8/300x200">
	</div>
	<div class="row">
		<div class="input-field col s12">
			<select placeholder="none">
				<option value="" disabled selected>Choisissez votre choix</option>
				<?php 
				
				foreach ($galleries as $key => $gallery) {
					echo '<option value="'. $gallery .'">' .  $key  . '</option>';
				}
				?>
				
			
			</select>
			<label>Choisir une coleur</label>
		</div>
	</div>
</div>




<?php $this->stop(); ?>