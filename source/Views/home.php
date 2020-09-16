<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
<link rel="stylesheet" href="<?= asset("/css/styleMain.min.css"); ?>" />
<?= $v->end; ?>

<!--main hero-->
<section id="main_hero">
    <div class="container">

        <!--header-->
        <header class="main_hero_header">
            <h1>Especializada em <br><strong>Emplacamento Automotivo</strong></h1>
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
            <h1>Conheça as <br><strong>Nossas unidades</strong></h1>
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

<!--franchisee-->
<section id="franquia">
    <div class="container">

        <!--content-->
        <div class="main_franchisee_content">

            <!--header-->
            <header class="main_franchisee_content_header">
                <h1>Seja um <br><strong>Franqueado</strong></h1>
            </header>
            <!--end of header-->

            <!--text-->
            <div class="main_franchisee_content_text">
                <p>A EmplaCar’s é uma empresa inovadora, conduzida por pessoas experientes, que buscam como diferenciais a excelência de seu atendimento e a qualidade na prestação de seus serviços.</p>
                <p>E essa é a sua oportunidade de se juntar a nós e investir num negócio simples e lucrativo, com baixo investimento inicial e pequenos custos operacionais.</p>
            </div>

            <!--article-->
            <div class="main_franchisee_content_text_article">

                <!--header-->
                <div class="main_franchisee_content_text_article_header">
                    <h2>O que é necessário?</h2>
                </div>
                <!--end of header-->

                <!--content-->
                <div class="main_franchisee_content_text_article_content">
                    <p>Ter espírito empreendedor e dedicação ao seu negócio.</p>
                    <p>Pronto! Você está preparado para iniciar sua franquia <strong>EmplaCar’s</strong> e se tornar um empreendedor de sucesso.</p>
                </div>
                <!--end of content-->

            </div>
            <!--end of article-->

            <!--article-->
            <div class="main_franchisee_content_text_article">

                <!--header-->
                <div class="main_franchisee_content_text_article_header">
                    <h2>Como funciona?</h2>
                </div>
                <!--end of header-->

                <!--content-->
                <div class="main_franchisee_content_text_article_content">
                    <p>O modelo de negócio é bastante simples, sem necessidade de conhecimento na área e a <strong>EmplaCar’s</strong> fornece todo o apoio e suporte necessário para você iniciar sua empresa.</p>
                    <p>Entre em contato com um de nossos especialistas e torne-se um franqueado de sucesso agora mesmo, clicando no botão abaixo.</p>
                </div>
                <!--end of content-->

            </div>
            <!--end of article-->

            <!--button cta-->
            <div class="main_franchisee_content_text_buttonCta">
                <a class="btn btn-color1" href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?= PHONE["whatsapp"]; ?>" title="Seja um Franqueado Emplacar's" target="_blank">Quero ser um franqueado</a>

            </div>
            <!--end of button cta-->

            <!--end of text-->

        </div>
        <!--end of content-->

        <!--image-->
        <div class="main_franchisee_image">
            <img src="<?= asset("img/img-franquia.jpg") ?>" alt="Franquia Emplacar's">
        </div>
        <!--end of image-->

    </div>
</section>
<!--end of franchisee-->

<!--license plate-->
<section id="main_licensePlate">

    <!--content-->
    <div class="main_licensePlate_content">

        <!--header-->
        <header class="main_licensePlate_content_header">
            <h1>Emplacamento Domiciliar</h1>
            <hr>
        </header>
        <!--end of header-->

        <!--text-->
        <div class="main_licensePlate_content_text">
            <p>Com a <strong>EmplaCar’s</strong>, você emplaca seu veículo sem sair do conforto de sua casa.</p>
            <p>É isso mesmo, a EmplaCar’s vai até você.</p>
            <br>
            <p>Solicite seu orçamento agora mesmo, através da unidade mais próxima.</p>
        </div>
        <!--end of text-->

        <!--button cta-->
        <div class="main_licensePlate_content_buttonCta">
            <a class="btn btn-color3" href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?= PHONE["whatsapp"]; ?>" title="Solicitar orçamento" target="_blank">Solicitar orçamento</a>
        </div>

        <!--end of button cta-->

    </div>
    <!--end of content-->

    <!--image-->
    <div class="main_licensePlate_image">
        <img src="<?= asset("img/img-emplacamento.jpg") ?>" alt="Emplacamento Domiciliar Emplacar's">
    </div>
    <!--end of image-->

</section>
<!--end of license plate-->


<!--doubts-->
<section id="duvidas">
    <div class="container">

        <!--header-->
        <header class="main_doubts_header">
            <h1>Dúvidas Frequentes</h1>
            <hr>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="main_doubts_content">

            <!--article-->
            <article class="main_doubts_content_article">

                <!--header-->
                <header class="main_doubts_content_article_header">
                    <h1>A troca de placa é obrigatória?</h1>
                    <img src="<?= asset("img/vt-arrow.svg") ?>" alt="Dúvidas Frequentes Emplacar's">
                </header>
                <!--end of header-->

                <!--body-->
                <div class="main_doubts_content_article_body">
                    <div class="main_doubts_content_article_body_content">
                        <p>A troca de placa é obrigatória para o primeiro emplacamento (veículo 0km).</p>
                        <br>
                        <p>Mudança de categoria de veículo.</p>
                        <br>
                        <p>Em caso de furto, extravio, roubo ou dano na placa (inclusive dano à tarjeta e rompimento do lacre da placa traseira padrão cinza).</p>
                        <br>
                        <p>Mudança de munícipio ou de Estado.</p>
                        <br>
                        <p>Quando o veículo for reprovado em vistoria veicular no procedimentos de transferência com observações sobre a placa e/ou lacre (exemplo: placa não refletiva).</p>
                        <br>
                        <p>Necessidade de instalação de placa adicional traseira</p>
                    </div>
                </div>
                <!--end of body-->

            </article>
            <!--end of article-->

            <!--article-->
            <article class="main_doubts_content_article">

                <!--header-->
                <header class="main_doubts_content_article_header">
                    <h1>Qual procedimento seguir para trocar a placa?</h1>
                    <img src="<?= asset("img/vt-arrow.svg") ?>" alt="Dúvidas Frequentes Emplacar's">
                </header>
                <!--end of header-->

                <!--body-->
                <div class="main_doubts_content_article_body">
                    <div class="main_doubts_content_article_body_content">
                        <p>Realize a vistoria veicular (laudo ECV) junto a um empresa credenciada pelo Detran.</p>
                        <br>
                        <p>Dirija-se ao Detran, munido do laudo ECV e solicite a troca do documento do veículo para o novo padrão Mercosul.</p>
                        <br>
                        <p>Com o documento novo em mãos, dirija-se à unidade EmplaCar’s mais próxima de você e obtenha sua placa Mercosul.</p>
                    </div>
                </div>
                <!--end of body-->

            </article>
            <!--end of article-->

            <!--article-->
            <article class="main_doubts_content_article">

                <!--header-->
                <header class="main_doubts_content_article_header">
                    <h1>Houve alguma alteração no documento do veículo?</h1>
                    <img src="<?= asset("img/vt-arrow.svg") ?>" alt="Dúvidas Frequentes Emplacar's">
                </header>
                <!--end of header-->

                <!--body-->
                <div class="main_doubts_content_article_body">
                    <div class="main_doubts_content_article_body_content">
                        <p>Com a implementação das novas placas Mercosul no Estado de São Paulo, houve algumas alterações no documento do veículo, a saber:</p>
                        <br>
                        <p>- inclusão do código AE (Autorização de Estampagem).</p>
                        <p>- alteração do formato da placa.</p>
                        <br>
                        <p>Quanto ao código AE, ele está localizado no canto superior esquerdo, logo acima do campo RENAVAM.</p>
                        <br>
                        <p>Quanto à alteração do formato da placa, explica-se: o segundo número é substituído por uma letra. Assim, uma placa no padrão ABC 0123, torna-se ABC 0B23.</p>
                        <br>
                        <p>Caso o documento do seu veículo já esteja no padrão Mercosul, entre em contato conosco através de um de nossos canais de atendimento e solicite agora mesmo o seu emplacamento veicular Mercosul.</p>
                    </div>
                </div>
                <!--end of body-->

            </article>
            <!--end of article-->

        </div>
        <!--endo of content-->

    </div>
</section>
<!--end of doubts-->

<!--change-->
<section id="main_change">
    <div class="container">

        <!--header-->
        <header class="main_change_header">
            <h1>O que altera <br><strong>na placa?</strong></h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="main_change_content">

            <!--text-->
            <div class="main_change_content_text">
                <p>A PIV deve ser revestida, em seu anverso, de película retrorrefletiva, na cor branca com uma faixa na cor azul na margem superior, contendo ao lado esquerdo o logotipo do MERCOSUL, ao lado direito a bandeira do Brasil e ao centro o nome BRASIL.</p>
                <br>
                <p>O padrão de estampagem é composto de 07 caracteres alfanuméricos, em alto relevo, na sequência LLLNLNN, com igual espaçamento e combinação aleatória, distribuída e controlada pelo Departamento Nacional de Trânsito (Denatran).</p>
                <br>
                <p>Além disso, o novo modelo de PIV não possuirá lacre. O QR Code (código de barras em formato quadrado) irá substituí-lo.</p>
            </div>
            <!--end of text-->

            <!--image-->
            <div class="main_change_content_image">
                <img src="<?= asset("img/img-placa.png"); ?>" alt="O que altera na placa?">
            </div>
            <!--end of image-->

        </div>
        <!--end of content-->

    </div>    
</section>
<!--end of change-->

<!--models-->
<section id="main_models">
    <div class="container">

        <!--header-->
        <header class="main_models_header">
            <h1>Novos modelos de placas</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="main_models_content">
            <?php
            $jsonModels = file_get_contents(__DIR__ . "/includes/models.json");
            $modelsList = json_decode($jsonModels, true);

            foreach ($modelsList['models'] as $model):
                ?>

                <!--card-->
                <div class="main_models_content_card">

                    <!--image-->
                    <div class="main_models_content_card_image">
                        <img src="<?= asset("img/{$model["image"]}.jpg"); ?>" alt="<?= $model["alt"]; ?>">
                    </div>
                    <!--end of image-->

                    <!--title-->
                    <div class="main_models_content_card_title">
                        <h2><?= $model["title"]; ?></h2>
                    </div>
                    <!--end of title-->

                </div>
                <!--end of card-->

            <?php endforeach; ?>

        </div>
        <!--end of content-->

    </div>
</section>
<!--end of models-->

<!--conversion-->
<section id="main_conversion">
    <div class="container">

        <!--header-->
        <header class="main_conversion_header">
            <h1>Tabela de<br><strong>Conversão</strong></h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="main_conversion_content">
            <p>No caso de substituição da PIV do antigo modelo (padrão LLLNNNN), pela PIV do novo modelo (padrão LLLNLNN), será adotada a seguinte tabela equiparativa, para substituição do antepenúltimo caracter, de número para letra, a fim de que haja uma relação direta entre a antiga e a nova placa.</p>
            <p>O caracter "L" refere-se à letra, e o caracter "N" refere-se ao numeral.</p>

            <!--image-->
            <div class="main_conversion_content_image">
                <img src="<?= asset("img/img-tabela-conversao.png") ?>" alt="Tabela de Conversão">
            </div>
            <!--end of image-->

            <p>A faixa de letras de "A" a "J" será utilizada apenas para a conversão do modelo antigo para o novo de PIV, de forma a permitir a convivência entre ambos os modelos e possibilitar a consulta por ambos os critérios de placas.</p>
        </div>
        <!--end of content-->

    </div>
</section>
<!--end of conversion-->

<!--contact-->
<section id="contato">

    <!--content-->
    <div class="main_contact_content">

        <!--header-->
        <header class="main_contact_content_header">
            <h1>Entre em <br><strong>Contato</strong></h1>
        </header>
        <!--end of header-->

        <!--form-->
        <div class="main_contact_content_form">
            <p>Entre em contato conosco e agende um orçamento gratuito!</p>

            <!--form-->
            <form action="<?= asset("php/send-mail.php"); ?>" method="POST" autocomplete="off">
                <div class="main_contact_content_form_group">
                    <input name="name" type="text" placeholder="Insira seu nome">
                </div>

                <div class="main_contact_content_form_group">
                    <input name="mail" type="email" placeholder="Insira seu melhor e-mail">
                </div>

                <div class="main_contact_content_form_group">
                    <input name="phone" type="text" placeholder="Insira seu telefone com DDD...">
                </div>

                <div class="main_contact_content_form_group">
                    <textarea name="message" rows="4" placeholder="Escreva a sua mensagem"></textarea>
                </div>

                <div class="main_contact_content_form_button">
                    <button type="submit" class="btn btn-color1">Enviar Contato</button>
                </div>
            </form>
            <!--end of form-->
        </div>
        <!--end of form-->

    </div>
    <!--end of content-->
    
    <!--image-->
    <div class="main_contact_image">
        <img src="<?= asset("img/img-contato.jpg") ?>" alt="Contato Emplacar's">
    </div>
    <!--end of image-->

</section>
<!--contact-->

<section id="main_information">
    <div class="container">
        
        <!--header-->
        <header class="main_information_header">
            <h1>Dados para contato</h1>
        </header>
        <!--end of header-->
        
        <!--content-->
        <div class="main_information_content">
            
            <!--card-->
            <div class="main_information_content_card">
                
                <!--header-->
                <header class="main_information_content_card_header">
                    <img src="<?= asset("img/vt-mail.svg") ?>" alt="E-mail Emplacar's">
                    <h2>Envie um e-mail</h2>
                </header>
                <!--end of header-->
                
                <!--body-->
                <div class="main_information_content_card_body">
                    <p>Nossos atendentes irão entrar em contato com você assim que possível.</p>
                    <a href="mailto:emplacars@gmail.com">emplacars@gmail.com</a>
                </div>
                <!--end of body-->
                
            </div>
            <!--end of card-->
            
            <!--card-->
            <div class="main_information_content_card">
                
                <!--header-->
                <header class="main_information_content_card_header">
                    <img src="<?= asset("img/vt-phone.svg") ?>" alt="Telefone Emplacar's">
                    <h2>Por Telefone</h2>
                </header>
                <!--end of header-->
                
                <!--body-->
                <div class="main_information_content_card_body">
                    <p>Estamos disponíveis nos números abaixo no horário comercial.</p>
                    <a href="tel:1123735337">(11) 2373-5337</a>
                </div>
                <!--end of body-->
                
            </div>
            <!--end of card-->
            
            <!--card-->
            <div class="main_information_content_card">
                
                <!--header-->
                <header class="main_information_content_card_header">
                    <img src="<?= asset("img/vt-whatsapp.svg") ?>" alt="Whatsapp Emplacar's">
                    <h2>Por Whatsapp</h2>
                </header>
                <!--end of header-->
                
                <!--body-->
                <div class="main_information_content_card_body">
                    <p>Estamos disponíveis nos números abaixo no horário comercial.</p>
                    <a href="https://api.whatsapp.com/send?l=pt_BR&phone=55<?= PHONE["whatsapp"]; ?>" target="_blank">(11) 2373-5337</a>
                </div>
                <!--end of body-->
                
            </div>  
            <!--end of card-->
            
        </div>
        <!--end of content-->
        
    </div>
</section>

<!--map-->
<div class="main_map">
    <iframe src="https://www.google.com/maps/d/embed?mid=1uWksnGTMBoLFQ4JvJJ1-kIFNWJDwY4Tj"></iframe>
</div>
<!--end of map-->