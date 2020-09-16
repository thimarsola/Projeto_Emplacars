<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
    <link rel="stylesheet" href="<?= asset("/css/styleError.min.css"); ?>" />
<?= $v->end; ?>

<?= $v->start("navbar"); ?>
    <a href="<?= url(); ?>" class="btn btn-color1">Voltar</a>
<?= $v->end; ?>

<?php 
    use Source\Support\Email;

    if (isset($_POST['submit'])){
        $messageForm = $_POST['message'];
        $nameForm = $_POST['name'];
        $mailForm = $_POST['mail'];
        $phoneForm = $_POST['phone'];

        $email = new Email();

        $email->add(
                $subjectForm,
                "<h1>Mensagem de contato site</h1>
                <br>
                <p>Olá Emplacar's,</p>
                <p>Me chamo {$nameForm}, estou entrando em contato através do formulário do site.</p>
                <br>
                <p>Aqui estão os meus dados para contato:</p>
                <p><strong>E-mail:</strong> <br>{$mailForm}</p>
                <p><strong>Telefone:</strong> <br>{$phoneForm}</p>
                <br>
                <p><strong>Mensagem:</strong><p>
                <br>
                <p>$messageForm</p>",
                "Thiago Marsola",
                "tmarsola94@gmail.com"
        )->send();

        if ($email->error()) {
            echo $email->error()->getMessage();
        }
    }
?>

<section id="error">
    <div class="container">
        
        <!-- header -->
        <header class="error_header">
            <h1>E-mail enviado com sucesso!</h1>
        </header>
        <!-- end of header -->

        <!-- content -->
        <div class="error_content">
            <p>Em breve estaremos entrando em contato</p>
            <a href="<?= url(); ?>" class="btn btn-color1">Voltar</a>
        </div>
        <!-- end of content -->

    </div>
</section>