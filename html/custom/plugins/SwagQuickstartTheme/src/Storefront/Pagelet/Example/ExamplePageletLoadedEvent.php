<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Pagelet\Example;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Pagelet\PageletLoadedEvent;
use Symfony\Component\HttpFoundation\Request;

class ExamplePageletLoadedEvent extends PageletLoadedEvent
{
    /**
     * @var ExamplePagelet
     */
    protected $pagelet;

    public function __construct(ExamplePagelet $pagelet, SalesChannelContext $salesChannelContext, Request $request)
    {
        $this->pagelet = $pagelet;
        parent::__construct($salesChannelContext, $request);
    }

    public function getPagelet(): ExamplePagelet
    {
        return $this->pagelet;
    }
}