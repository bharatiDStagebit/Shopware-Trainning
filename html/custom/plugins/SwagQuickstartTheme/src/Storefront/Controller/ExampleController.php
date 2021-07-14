<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Controller;

use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Controller\StorefrontController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Shopware\Storefront\Page\GenericPageLoader;


/**
 * @RouteScope(scopes={"storefront"})
 */
class ExampleController extends StorefrontController
{
  protected $genericPageLoader;

  public function __construct(
      GenericPageLoader $genericPageLoader
  ) {
      $this->genericPageLoader = $genericPageLoader;
  }
    /**
    * @Route("/example", name="frontend.example.example", defaults={"XmlHttpRequest"=true},methods={"GET"})
    */
    // public function showExample(Request $request, SalesChannelContext $context): Response
    // {
    //   $page = $this->genericPageLoader->load($request, $context);
    //     return $this->renderStorefront('@SwagBasicExample/storefront/page/example/index.html.twig', [
    //       'example'=>'Hello world','page'=>$page]);
    // }
    public function showExamplejson(Request $request, SalesChannelContext $context): jsonResponse
     {
      $old_count = $request->query->get('old_count');
      $new_count=$old_count + 1;
       return new JsonResponse(['timestamp' => $new_count]);
     }
}