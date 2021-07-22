<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Page\Example;

use Shopware\Core\System\SalesChannel\SalesChannelContext;
use Shopware\Storefront\Page\GenericPageLoaderInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Shopware\Core\Framework\DataAbstractionLayer\Search\EntitySearchResult;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;


class ExamplePageLoader
{
    /**
     * @var GenericPageLoaderInterface
     */
    private $genericPageLoader;

    /**
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;
    /**
     * @var EntityRepositoryInterface
     */
    private $categoryRepository;
    
    public function __construct(
    GenericPageLoaderInterface $genericPageLoader, 
    EventDispatcherInterface $eventDispatcher,
    EntityRepositoryInterface $categoryRepository
    ){
        $this->genericPageLoader = $genericPageLoader;
        $this->eventDispatcher = $eventDispatcher;
        $this->categoryRepository = $categoryRepository;
  
    }

    public function load(Request $request, SalesChannelContext $salesChannelContext): ExamplePage
    {
        $page = $this->genericPageLoader->load($request, $salesChannelContext);
        $page = ExamplePage::createFrom($page);
        
        $criteria = new Criteria();
        $getCategories = $this->categoryRepository->search($criteria, $salesChannelContext->getContext());
        // echo "<pre>";
        // print_r($getCategories);
        $page->setCategories($getCategories);

        $this->eventDispatcher->dispatch(
            new ExamplePageLoadedEvent($page, $salesChannelContext, $request)
        );

       
        return $page;
    }

   
}