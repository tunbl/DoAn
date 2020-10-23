<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    public function catalog(){
        return $this->belongsTo('App\Catalog','id_catalog','id');
    }
    public static function filter($params) {
	$isEmptyMin = empty($params['minimum_price']);
	$isEmptyMax = empty($params['maximum_price']);
	$isEmptyCat = empty($params['categories']) || count($params['categories']) == 0;
	
	$products = Product::get();
	
	if($isEmptyCat && $isEmptyMax && $isEmptyMin) {
		return self::buildResponse($products);
	}

	$products = Product::where('price_unit', '>=', $params['minimum_price'])
							->where('price_unit', '<=', $params['maximum_price']);

	if (!$isEmptyCat) {
		$products = $products->whereIn('id_parent', $params['categories']);
	}
	
	return self::buildResponse($products->get());
}   

public static function buildResponse($products) {
		$output = '';
		
		foreach($products as $item) {
		
			if($item->new==1){$item->new = "new";} else{$item->new=" ";} 
			
			$output .='<div class="col-md-4 col-xs-6">
				<div class="product">
					<div class="product-img">
						<img style="height:212px;width:212px;" src="./img/'.$item->image.'" alt="">
						<div class="product-label">
							<span class="sale">-30%</span>
							
							<span class="new">
							'.$item->new.'
							</span>
							
						</div>
					</div>
					<div class="product-body">`
						<p class="product-category">Catalog</p>
					<h3 class="product-name">
						
							
					<a href="/product/'.$item->slug.'/'.$item->id.'">
					'.$item->name.'
					</a>

					</h3>
						<h4 class="product-price">'.$item->price_unit.'-'.$item->price_promotion.'
							<del class="product-old-price">'.$item->price_unit.'</del>
						</h4>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product-btns">
							<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
							<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
							<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
						</div>
					</div>
					<div class="add-to-cart">
					<a href="/add-to-card/'.$item->id.'">
					<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</a>

					</div>
				</div>
			</div>
			<div class="clearfix visible-sm visible-xs"></div>
			';

		}
		return $output;
	}
}
