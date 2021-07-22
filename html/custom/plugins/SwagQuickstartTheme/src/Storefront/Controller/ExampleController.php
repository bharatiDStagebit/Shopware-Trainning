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
use SwagQuickstartTheme\Storefront\Pagelet\Example\ExamplePageletLoader;
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
     * @var ExamplePageletLoader
     */
    
    private  $examplePageletLoader;
    /**
     * @var EntityRepositoryInterface
     */
    private $categoryRepository;

    public function __construct(
        ExamplePageLoader $examplePageLoader,
        ExamplePageletLoader $examplePageletLoader,
        EntityRepositoryInterface $categoryRepository
       
     
    ) {
        $this->examplePageLoader = $examplePageLoader;
        $this->examplePageletLoader = $examplePageletLoader;
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
    /**
    * @Route("/example-pagelet", name="frontend.example.pagelet", methods={"GET"}, defaults={"XmlHttpRequest"=true})
    */
    public function examplePagelet(Request $request, SalesChannelContext $context): Response
    {
        $pagelet = $this->examplePageletLoader->load($request, $context);

        return $this->renderStorefront('@Storefront/storefront/pagelet/example/index.html.twig', [
        'pagelet' => $pagelet
        ]);
    }

// public function showExamplejson(Request $request, SalesChannelContext $context): jsonResponse
// {
//  $old_count = $request->query->get('old_count');
//  $new_count=$old_count + 1;
//   return new JsonResponse(['timestamp' => $new_count]);
// }

}