<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\FooterDataRepository;
use App\Repository\SocialMediaRepository;
use Psr\Container\ContainerInterface;
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

    private SocialMediaRepository $socialMediaRepository;


    public function __construct(
        FooterDataRepository $footerDataRepository,
        CategoryRepository $categoryRepository,
        SocialMediaRepository $socialMediaRepository
    )
    {
        $this->footerDataRepository = $footerDataRepository;
        $this->categoryRepository = $categoryRepository;
        $this->socialMediaRepository = $socialMediaRepository;
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
        $socialMedia = $this->socialMediaRepository->findAll();
        $availableLanguages = $this->getParameter('languages');

        if (($key = array_search($request->getLocale(), $availableLanguages)) !== false) {
            unset($availableLanguages[$key]);
        }

        return $this->render('Home/index.html.twig',[
            'footerData' => $footerData,
            'categories' => $categories,
            'locale' => $request->getLocale(),
            'availableLanguages' => $availableLanguages,
            'socialMediaLinks' => $socialMedia[0],
            'videoLink' => $socialMedia[0]->getVideoLink()
        ]);
    }
}