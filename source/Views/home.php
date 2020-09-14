<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
<link rel="stylesheet" href="<?= asset("/css/styleMain.min.css"); ?>" />
<?= $v->end; ?>

<!--main hero-->
<section id="main_hero">
    <div class="container">

        <!--header-->
        <header class="main_hero_header">
            <h1>Especializada em<br><strong>Emplacamento Automotivo</strong></h1>
            <hr>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="main_hero_content">
            <p>A <strong>EmplaCar's</strong> é uma empresa especializada em emplacamentos automotivos no padrão Mercosul </p>
        </div>
        <!--end of content-->

        <!--scroll-->
        <div class="main_hero_scroll">
            <a href="#quem-somos">
                <span></span>
            </a>
        </div>
        <!--end of scroll-->

    </div>
</section>
<!--end of main hero-->

<!--about-->
<section id="quem-somos">
    <div class="main_about_row">

        <!--image-->
        <div class="main_about_row_image">
            <img src="<?= asset("img/img-about.jpg"); ?>" alt="Emplacar's - Quem Somos">
        </div>
        <!--end of image-->

        <!--content-->
        <div class="main_about_row_content">

            <!--header-->
            <header class="main_about_row_content_header">
                <h1>Quem somos</h1>
            </header>
            <!--end of header-->

            <!--text-->
            <div class="main_about_row_content_text">
                <p>A <strong>EmplaCar's</strong> é uma empresa especializada em emplacamento automotivo no Padrão MERCOSUL, devidamente credenciada e habilitada perante o DETRAN-SP.</p>  
                <p>Com equipamentos modernos e colaboradores especializados, estamos prontos a atendê-lo e oferecer-lhe o melhor serviço do mercado.</p>
                <p>Visite uma de nossas lojas e venha emplacar conosco.</p>
            </div>
            <!--end of text-->
        </div>
        <!--end of content-->

    </div>
</section>
<!--end of about-->

<!--buy now-->
<section id="compre-ja">
    <div class="container">

        <!--header-->
        <header class="main_buyNow_header">
            <h1>Compre já sua <br><strong>Placa Mercosul</strong></h1>
            <hr>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="main_buyNow_content">
            <?php
            $jsonProduct = file_get_contents(__DIR__ . "/includes/products.json");
            $productList = json_decode($jsonProduct, true);

            foreach ($productList['products'] as $product):
                ?>
                <!--card-->
                <article class="main_buyNow_content_card">

                    <!--image-->
                    <div class="main_buyNow_content_card_image">
                        <img src="<?= asset("img/{$product["image"]}.jpg"); ?>" alt="Compre já sua Placa Mercosul">
                    </div>
                    <!--end of image-->

                    <!--content-->
                    <div class="main_buyNow_content_card_content">
                        <h2><?= $product["title"]; ?></h2>

                        <!--price-->
                        <div class="main_buyNow_content_card_content_price">
                            <p>R$<span><?= $product["price"]; ?></span></p>
                            <p><small><?= $product["description"]; ?></small></p>
                        </div>
                        <!--end of price-->

                        <!--button cta-->
                        <div class="main_buyNow_content_card_content_buttonCta">
                            <a class="btn-small btn-outline-color1" href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?= PHONE["whatsapp"]; ?>" title="Whatsapp Emplacar's" target="_blank">Comprar placa</a>
                            <p><small>Faça o pedido pelo Whatsapp</small></p>
                        </div>
                        <!--end of button cta-->

                    </div>
                    <!--end of content-->
                </article>
                <!--end of card-->

            <?php endforeach; ?>

        </div>
        <!--end of content-->

    </div>
</section>
<!--end of buy now-->

<!--units-->
<section id="unidades">
    <div class="container">

        <!--header-->
        <header class="main_units_header">
            <h1>Conheça as<br><strong>Nossas unidades</strong></h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="main_units_content">
            <?php
            $jsonUnits = file_get_contents(__DIR__ . "/includes/units.json");
            $unitsList = json_decode($jsonUnits, true);

            foreach ($unitsList['units'] as $unit):
                ?>

                <!--card-->
                <article class="main_units_content_card">

                    <!--image-->
                    <div class="main_units_content_card_image">
                        <img src="<?= asset("img/vt-units.svg"); ?>" alt="Unidade Emplacar's">
                    </div>
                    <!--end of image-->
                    
                    <!--content-->
                    <div class="main_units_content_card_content">
                        <h2><?= $unit["title"]; ?></h2>
                        
                        <!--address-->
                        <div class="main_units_content_card_content_address">
                            <address><?= $unit["address"]; ?></address>
                        </div>
                        <!--end of address-->
                        
                        <!--zip code-->
                        <div class="main_units_content_card_content_zipCode">
                            <p>CEP: <?= $unit["zip_code"]; ?></p>
                        </div>
                        <!--end of zip code-->
                        
                        <!--phone-->
                        <div class="main_units_content_card_content_phone">
                            <?php
                                foreach ($unit["phones"] as $phone):
                            ?>
                            
                            <p>Tel: <?= $phone; ?></p>
                            
                            <?php endforeach; ?>
                        </div>
                        
                        <!--button cta-->
                        <div class="main_units_content_card_content_buttonCta">
                            <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5511<?= $unit["whatsapp"]; ?>&text=Olá! Gostaria de solicitar uma placa" class="btn btn-color1" title="Solicite sua placa aqui na <?= $unit["title"]; ?>" target="_blank">Solicite sua placa aqui</a>
                        </div>
                        <!--end of button cta-->
                        
                        <!--end of phone-->
                    </div>
                    <!--end of content-->

                </article>
                <!--end of card-->

            <?php endforeach; ?>

        </div>
        <!--end of content-->

    </div>
</section>
<!--end of units-->


