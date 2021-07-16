<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Page\Example;

use Shopware\Storefront\Page\Page;
use SwagQuickstartTheme\Core\Content\Example\ExampleEntity;

class ExamplePage extends Page
{
    /**
     * @var ExampleEntity
     */
    protected $exampleData;

    public function getExampleData(): ExampleEntity
    {
        return $this->exampleData;
    }

    public function setExampleData(ExampleEntity $exampleData): void
    {
        $this->exampleData = $exampleData;
    }
}