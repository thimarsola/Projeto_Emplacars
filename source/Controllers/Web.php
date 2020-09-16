<?php

namespace Source\Controllers;

use League\Plates\Engine;

class Web extends Controller
{

    /**
     * HOME
     */
    public function home(): void
    {

        $head = $this->seo->optimize(
                        site("name"),
                        site("desc"),
                        $this->router->route("web.home"),
                        routeImage("Home")
                )->render();

        echo $this->view->render("home", [
            "head" => $head,
        ]);
    }

    /**
     * CONTATO
     */
    public function contato(): void
    {

        $head = $this->seo->optimize(
                        site("name"),
                        site("desc"),
                        $this->router->route("web.contato"),
                        routeImage("Contato")
                )->render();

        echo $this->view->render("contato", [
            "head" => $head,
        ]);
    }

    /**
     * ERRO
     */
    public function error($data): void
    {
        $error = filter_var($data["errcode"], FILTER_VALIDATE_INT);

        $head = $this->seo->optimize(
                        "Ooops - Erro {$error} | " . site("name"),
                        site("desc"),
                        $this->router->route("web.error", ["errcode" => $error]),
                        routeImage($error)
                )->render();

        echo $this->view->render("error", [
            "head" => $head,
            "error" => $error
        ]);
    }

    /**
     * @param $data
     */
    public function sendMail($data): void
    {
        $email = filter_var($data["email"], FILTER_VALIDATE_EMAIL);

        if(!$email){
            echo $this->ajaxResponse("message", [
                "type" => "alert",
                "message" => "O e-mail informado não é valido"
            ]);
            return;
        }

        echo json_encode($data);
    }

}
