<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\FooterDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @var FooterDataRepository
     */
    private FooterDataRepository $footerDataRepository;

    private CategoryRepository $categoryRepository;

    public function __construct(FooterDataRepository $footerDataRepository, CategoryRepository $categoryRepository)
    {
        $this->footerDataRepository = $footerDataRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @Route("/{_locale}",name="home",defaults = {"_locale" = "en"})
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $footerData = $this->footerDataRepository->findAll();
        $categories = $this->categoryRepository->findAll();
        return $this->render('index.html.twig',[
            'footerData' => $footerData,
            'categories' => $categories
        ]);
    }
}