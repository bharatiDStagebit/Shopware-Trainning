<?php declare(strict_types=1);

namespace SwagQuickstartTheme\Storefront\Pagelet\Example;

use Shopware\Storefront\Pagelet\Pagelet;


class ExamplePagelet extends Pagelet
{
  public $staticdata;

  public function getStaticData()
  {
      return $this->staticdata;
  }

  public function setStaticData($staticdata)
  {
      $this->staticdata = $staticdata;
  }
}