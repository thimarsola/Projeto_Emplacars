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

}
