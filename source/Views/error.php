<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
    <link rel="stylesheet" href="<?= asset("/css/error.css"); ?>" />
<?= $v->end; ?>

    <h1><?= "Erro " . $error; ?></h1>



