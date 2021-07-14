<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\PayPal\Test\Checkout;

use Monolog\Logger;
use PHPUnit\Framework\TestCase;
use Shopware\Core\Framework\Test\TestCaseBase\KernelTestBehaviour;
use Swag\PayPal\Checkout\ErrorController;
use Swag\PayPal\Checkout\SalesChannel\ErrorRoute;
use Swag\PayPal\Test\Mock\LoggerMock;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Contracts\Translation\TranslatorInterface;

class ErrorControllerTest extends TestCase
{
    use KernelTestBehaviour;

    public function testAddErrorMessage(): void
    {
        $container = $this->getContainer();
        /** @var Session $session */
        $session = $container->get('session');
        /** @var TranslatorInterface $translator */
        $translator = $container->get('translator');
        $logger = new LoggerMock();

        $dangerFlashes = $session->getFlashBag()->get('danger');
        static::assertCount(0, $dangerFlashes);

        $response = (new ErrorController(new ErrorRoute($session, $translator, $logger)))->addErrorMessage(new Request([], ['error' => 'test']));

        static::assertSame(Response::HTTP_NO_CONTENT, $response->getStatusCode());
        $dangerFlashes = $session->getFlashBag()->get('danger');
        static::assertCount(1, $dangerFlashes);

        static::assertCount(1, $logger->getLogs());
        static::assertSame(Logger::NOTICE, \current($logger->getLogs())['level']);
        static::assertArrayHasKey('error', \current($logger->getLogs())['context']);
        static::assertSame('test', \current($logger->getLogs())['context']['error']);
    }
}
