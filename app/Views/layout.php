<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title><?= $this->e($title); ?></title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?= $this->section('css'); ?>
</head>

<body>
	<div class="container">
		<header>
			<h1>Framework W :: <?= $this->e($title); ?></h1>
		</header>

		<section>
			<?= $this->section('main_content'); ?>
		</section>

		<footer>
		</footer>
	</div>

	<?= $this->section('js'); ?>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>