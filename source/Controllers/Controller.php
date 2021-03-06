<?php

namespace Source\Controllers;

use CoffeeCode\Optimizer\Optimizer;
use CoffeeCode\Router\Router;
use League\Plates\Engine;

abstract class Controller
{
    /** @var Engine */
    protected $view;
    
    /** @var Router */
    protected $router;
    
    /** @var Optimizer */
    protected $seo;
    
    /**
     * Controller constructor
     * @param $router
     */
    public function __construct($router)
    {
        $this->router = $router;
        $this->view = Engine::create(dirname(__DIR__, 1) . "/Views", "php");
        $this->view->addData(["router" => $this->router]);
        
        $this->seo = new Optimizer();
        $this->seo->openGraph(site("name"), site("locale"), site("article"))
            ->publisher(SOCIAL["facebook_page"], SOCIAL["facebook_author"])
            ->twitterCard(SOCIAL["twitter_creator"], SOCIAL["twitter_site"], site("domain"))
            ->facebook(SOCIAL["facebook_appId"]);
    }
    
}
