<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\FooterDataRepository;
use App\Repository\SocialMediaRepository;
use Psr\Container\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    private CategoryRepository $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @Route("/{_locale}/category/{categoryId}",name="product_page_category_listing",defaults = {"_locale" = "en"})
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $selectedCategory = $this->categoryRepository->find($request->get('categoryId'));
        $categories = $this->categoryRepository->findAll();

        $availableLanguages = $this->getParameter('languages');

        if (($key = array_search($request->getLocale(), $availableLanguages)) !== false) {
            unset($availableLanguages[$key]);
        }

        return $this->render('Product/index.html.twig', [
            'locale' => $request->getLocale(),
                'availableLanguages' => $availableLanguages,
                'categories' => $categories,
                'selectedCategory' => $selectedCategory
            ]
        );
    }
}