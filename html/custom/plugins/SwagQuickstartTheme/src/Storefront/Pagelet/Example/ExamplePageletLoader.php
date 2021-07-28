<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Pagelet\Example;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\GenericPageLoaderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Filter\EqualsFilter;


class ExamplePageletLoader
{
    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;
     /**
     * @var EntityRepositoryInterface
     */
    private $productRepository;

    public function __construct(EventDispatcherInterface $eventDispatcher,EntityRepositoryInterface $productRepository )
    {
        $this->eventDispatcher = $eventDispatcher;
        $this->productRepository = $productRepository;
    }

    public function load(Request $request, SalesChannelContext $context): ExamplePagelet
    {
        $categoryId = $request->query->get('catId');
       
        $pagelet = new ExamplePagelet();
        $criteria = new Criteria();
        $criteria->addFilter(new EqualsFilter('categoryIds',  $categoryId ));
        $criteria->setLimit(10);

        // Do additional stuff, e.g. load more data from repositories and add it to page
       $products = $this->productRepository->search($criteria, $context->getContext());
       $pagelet->setProducts($products);


        $this->eventDispatcher->dispatch(
            new ExamplePageletLoadedEvent($pagelet, $context, $request)
        );

        return $pagelet;
    }
}