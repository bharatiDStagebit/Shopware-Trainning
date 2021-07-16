<?php declare(strict_types=1);
namespace SwagQuickstartTheme\Service;

use Shopware\Core\Framework\DataAbstractionLayer\EntityRepositoryInterface;
use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Search\Criteria;


class ReadingData
{
    private $categoryRepository;
 
    public function __construct (
        EntityRepositoryInterface $categoryRepository
    )
    {
        $this->categoryRepository= $categoryRepository;
    }

    public function getCategoryIds ($categoryNamePart)
    {
        //set up the criteria for the search
        $criteria = new Criteria();
        $criteria->addFilter(new ContainsFilter('name', 'Shoes, Beauty & Sports'));

        //search the category repository, based on the criteria
        $categories = $this->categoryRepository->search($criteria, $context);
        if ($categories) {

            //create an array for storing the IDs
            $categoryIds = [];

            //go through the categories and add their IDs to the array
            foreach ($categories as $category) {
                $categoryIds[] = [ 'id' => $category->getId() ];
            }

            //return the IDs of the categories
            return $categoryIds;
        }
    }
}
