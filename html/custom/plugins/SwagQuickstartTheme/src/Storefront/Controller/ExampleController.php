<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use SwagQuickstartTheme\Storefront\Page\Example\ExamplePageLoader;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;


/**
 * @RouteScope(scopes={"storefront"})
 */
class ExampleController extends StorefrontController
{

    /**
     * @var ExamplePageLoader
     */
    private  $examplePageLoader;
    
    /**
     * @var EntityRepositoryInterface
     */
    private $categoryRepository;

    public function __construct(
        ExamplePageLoader $examplePageLoader,
        EntityRepositoryInterface $categoryRepository
       
     
    ) {
        $this->examplePageLoader = $examplePageLoader;
        $this->categoryRepository = $categoryRepository;
        
 
    }
     /**
    * @Route("/example/category", name="frontend.example.category.page", methods={"GET"})
     */
    public function examplePage(Request $request, SalesChannelContext $context): Response
    {
        $page = $this->examplePageLoader->load($request, $context);

        return $this->renderStorefront('@SwagQuickstartTheme/storefront/Page/Example/index.html.twig', [
            'example' => 'Hello world',
            'page' => $page
        ]);
    }
 
    

}