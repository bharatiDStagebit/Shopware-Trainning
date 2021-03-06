<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Setting;

use Shopware\Core\Framework\Routing\Annotation\Acl;
use Shopware\Core\Framework\Routing\Annotation\RouteScope;
use Shopware\Core\Framework\Routing\Exception\MissingRequestParameterException;
use Shopware\Core\Framework\Validation\DataBag\RequestDataBag;
use Swag\PayPal\Setting\Service\ApiCredentialServiceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @RouteScope(scopes={"api"})
 */
class SettingsController extends AbstractController
{
    /**
     * @var ApiCredentialServiceInterface
     */
    private $apiCredentialService;

    public function __construct(ApiCredentialServiceInterface $apiService)
    {
        $this->apiCredentialService = $apiService;
    }

    /**
     * @Route("/api/_action/paypal/validate-api-credentials", name="api.action.paypal.validate.api.credentials", methods={"GET"})
     * @Acl({"swag_paypal.viewer"})
     */
    public function validateApiCredentials(Request $request): JsonResponse
    {
        $clientId = $request->query->get('clientId');
        if ($clientId === null) {
            throw new MissingRequestParameterException('clientId');
        }

        $clientSecret = $request->query->get('clientSecret');
        if ($clientSecret === null) {
            throw new MissingRequestParameterException('clientSecret');
        }

        $sandboxActive = $request->query->getBoolean('sandboxActive');

        $credentialsValid = $this->apiCredentialService->testApiCredentials($clientId, $clientSecret, $sandboxActive);

        return new JsonResponse(['credentialsValid' => $credentialsValid]);
    }

    /**
     * @Route("/api/_action/paypal/get-api-credentials", name="api.action.paypal.get.api.credentials", methods={"POST"})
     * @Acl({"swag_paypal.editor"})
     */
    public function getApiCredentials(RequestDataBag $requestDataBag): JsonResponse
    {
        $authCode = $requestDataBag->get('authCode');
        $sharedId = $requestDataBag->get('sharedId');
        $nonce = $requestDataBag->get('nonce');
        $sandboxActive = $requestDataBag->getBoolean('sandboxActive');

        $credentials = $this->apiCredentialService->getApiCredentials($authCode, $sharedId, $nonce, $sandboxActive);

        return new JsonResponse($credentials);
    }
}
