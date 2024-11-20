<?php

namespace Sthom\App\Controller;

use Sthom\App\Model\User_;
use Sthom\Kernel\AbstractController;
use Sthom\Kernel\Repository;

class HomeController extends AbstractController
{
    public function index(): void
    {
        //$repoUser = new Repository(User_::class);
        //$repoUser->delete(1);

        $this->render('home/index', ['title' => 'Home']);
    }

    public function home(): void
    {
        $this->render('home/index', ['title' => 'Page d\'accueil']);
    }
}