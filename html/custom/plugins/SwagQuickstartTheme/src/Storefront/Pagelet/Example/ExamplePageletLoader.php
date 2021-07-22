<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Pagelet\Example;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\GenericPageLoaderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;

class ExamplePageletLoader
{
    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;
     /**
     * @var EntityRepositoryInterface
     */
    private $categoryRepository;

    public function __construct(EventDispatcherInterface $eventDispatcher,EntityRepositoryInterface $categoryRepository )
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->categoryRepository = $categoryRepository;
    }

    public function load(Request $request, SalesChannelContext $context): ExamplePagelet
    {
      
        $pagelet = new ExamplePagelet();
        //$criteria = new Criteria();

        // Do additional stuff, e.g. load more data from repositories and add it to page
         // $getCategories = $this->categoryRepository->search($criteria, $context->getContext());
       
        $staticdata="Hello This Is Custom Pagelete Static Data";
        $pagelet->setStaticData($staticdata);


        $this->eventDispatcher->dispatch(
            new ExamplePageletLoadedEvent($pagelet, $context, $request)
        );

        return $pagelet;
    }
}