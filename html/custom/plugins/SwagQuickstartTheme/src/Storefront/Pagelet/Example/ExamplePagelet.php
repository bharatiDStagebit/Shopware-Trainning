<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Pagelet\Example;
use Shopware\Storefront\Pagelet\Pagelet;


class ExamplePagelet extends Pagelet
{
  public $product;

  public function getProducts()
  {
      return $this->product;
  }

  public function setProducts($product)
  {
      $this->product = $product;
  }
}