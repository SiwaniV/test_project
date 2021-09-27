<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use App\Entity\Product;
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
            ->setTitle('Admin');

    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Website', 'fas fa-backward', 'default');
        yield MenuItem::linkToCrud('Blog', 'fas fa-list', Blog::class);
        yield MenuItem::linkToCrud('Product', 'fas fa-list', Product::class);
    }
}
