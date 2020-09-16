<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
    <link rel="stylesheet" href="<?= asset("/css/styleError.min.css"); ?>" />
<?= $v->end; ?>

<?= $v->start("navbar"); ?>
    <a href="<?= url(); ?>" class="btn btn-color1">Voltar</a>
<?= $v->end; ?>

<section id="error">
	<div class="container">
		
		<!-- header -->
		<header class="error_header">
			<h1><?= "Erro " . $error . "!"; ?></h1>
		</header>
		<!-- end of header -->

		<!-- content -->
		<div class="error_content">
			<p>A página que você está procurando não existe.</p>
    		<a href="<?= url(); ?>" class="btn btn-color1">Voltar</a>
		</div>
		<!-- end of content -->

	</div>
</section>



