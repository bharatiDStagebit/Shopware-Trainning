<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Page\Example;

use Shopware\Storefront\Page\Page;


class ExamplePage extends Page
{
    
    public $categories;

    public function getCategories()
    {
        return $this->categories;
    }

    public function setCategories($categories)
    {
        $this->categories = $categories;
    }
}