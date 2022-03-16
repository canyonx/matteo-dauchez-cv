<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/mystyles.css">
	<!-- <link rel="stylesheet" href="node_modules/bulma/css/bulma.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<title>CV de Mattéo Dauchez</title>
</head>

<style>
	.hero {
		border-radius: 5px 5px 0 0;
	}
</style>

<body>
	<div class="has-background-light py-6">
		<div class="container card is-max-widescreen">

			<?php include('template/hero.html'); ?>
			<!-- COLUMNS -->
			<section class="section">
				<div class="container">
					<div class="columns">
						<?php
						include('template/main.html');
						include('template/side.html');
						?>
					</div>
				</div>
			</section>
			<!-- COLUMNS -->

		</div>
	</div>
</body>

</html>