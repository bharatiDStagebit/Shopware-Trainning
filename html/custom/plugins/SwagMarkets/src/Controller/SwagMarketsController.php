<?php

namespace Swag\Markets\Controller;

use Swag\Markets\Service\SwagMarketsService;
use Swag\Markets\Setup\Install;
use Shopware\Core\Framework\Api\Controller\ApiController;
use Shopware\Core\Framework\Api\Response\ResponseFactoryInterface;
use Shopware\Core\Framework\Api\Util\AccessKeyHelper;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SwagMarketsController
 * @package SwagMarkets\Controller
 *
 * @RouteScope(scopes={"api"})
 * @Route(
 *     "api/swagMarkets",
 *     name="bf."
 * )
 */
class SwagMarketsController extends AbstractController
{
    /**
     * @var SwagMarketsService $swagMarketsService
     */
    private $swagMarketsService;

    /**
     * SwagMarketsController constructor.
     */
    public function __construct(SwagMarketsService $swagMarketsService)
    {
        $this->swagMarketsService = $swagMarketsService;
    }

    /**
     * @Route("/variations", name="get", methods={"GET"})
     * @return JsonResponse
     */
    public function getUsedVariations() : JsonResponse
    {
        try {
            $result = $this->swagMarketsService->getVariationsUsedByProducts();

            return new JsonResponse(
                [
                    'success' => true,
                    'data' => $result
                ], 200
            );
        } catch (\Exception $e) {
            return new JsonResponse(
                [
                    'success' => false,
                    'data' => [

                        'message' => $e->getMessage(),
                    ]
                ], 500
            );
        }
    }
}
