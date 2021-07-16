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


/**
 * @RouteScope(scopes={"storefront"})
 */
class ExampleController extends StorefrontController
{
   /**
     * @var ExamplePageLoader
     */
    private  $examplePageLoader;

    public function __construct(
        ExamplePageLoader $examplePageLoader
    ) {
        $this->examplePageLoader = $examplePageLoader;
 
    }
     /**
    * @Route("/example/category", name="frontend.example.category.page", options={"seo"="false"}, methods={"GET"})
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