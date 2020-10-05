<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title><?= $this->e($title); ?></title>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/reset.css') ?>">
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
	<nav>
		<div class="nav-wrapper p2">
			<a href="/" class="brand-logo">Logo</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="">CSS</a></li>
				<li><a href="blog">Blog</a></li>
			</ul>
		</div>
	</nav>

	<ul class="sidenav" id="mobile-demo">
		<li><a href="">CSS</a></li>
		<li><a href="blog">Blog</a></li>
	</ul>
	<div class="container">
		<header>
			<h1> <?= $this->e($title); ?></h1>
		</header>

		<section class="col-12">
			<?= $this->section('main_content'); ?>
		</section>

		<footer>
		</footer>
	</div>

	<?= $this->section('js'); ?>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('.sidenav');
			var instances = M.Sidenav.init(elems);
		});

		document.addEventListener('DOMContentLoaded', function() {
			var elems = document.querySelectorAll('select');
			var instances = M.FormSelect.init(elems);
		});
	</script>
</body>

</html>