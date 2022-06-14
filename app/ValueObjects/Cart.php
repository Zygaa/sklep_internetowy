<?php

namespace App\ValueObjects;

use App\Models\Product;
use Illuminate\Support\Collection;

class Cart{
  private Collection $items;

  /**
  * @param Collection|null $items
  */
  public function __construct(Collection $items = null){
    $this->items = $items ?? Collection::empty();
  }

    /**
     * @return Collection
     */
    public function getItems(): Collection
    {
        return $this->items;
    }

    public function getSum(): float
    {
        return $this->items->sum(function ($item) {
            return $item->getSum();
        });
    }

    public function addItem(Product $product): Cart
    {
      $items = $this->items;
      $item = $items->first(function ($item) use ($product){
        return $product->id == $item->getProductId();
      });
      if(!is_null($item)){
        $items = $items->reject(function ($item) use ($product) {
            return $product->id == $item->getProductId();
        });
        $newItem = $item->addQuantity($product);
      }else{
        $newItem = new CartItem($product);
      }
      $items->add($newItem);
      return new Cart($items);
    }

    public function removeItem(Product $product): Cart
    {
        $items = $this->items->reject(function ($item) use ($product) {
            return $product->id == $item->getProductId();
        });
        return new Cart($items);
    }
}
