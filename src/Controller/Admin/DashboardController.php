<?php

namespace App\Controller\Admin;

use App\Entity\Produit;
use App\Entity\User;
use App\Entity\Categorie;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Boutique Admin');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::section('Gestion Profil');
        yield MenuItem::linkToCrud('User', 'fas fa-user', User::class);
        yield MenuItem::section('Gestion Achat');
        yield MenuItem::linkToCrud('Produit', 'fa fa-shopping-bag', Produit::class);
        yield MenuItem::linkToCrud('Categorie', 'fa fa-book', Categorie::class);
    }
}
