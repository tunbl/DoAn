{{-- @extends('layouts.layout')
<style>


</style>
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @foreach ($product ??[] as $item)
                    @foreach ($catalogs ??[] as $cata)
                        @if( $item->id_parent == $$cata->id)
                            <div class="product">
                                <div class="product-img">

                                
                                <?php
                                    $img_aray = explode(",",$item->image);
                                ?>
                                
                                <img src="./upload/{{$img_aray[0]}}" alt="">
                                    @if ($item->new == 1)
                                
                                        <div class="product-label">
                                            <span class="new">NEW</span>
                                        </div>	
                                    @endif
                                </div>
                                <div class="product-body">
                                <p class="product-category">{{$cata->name}}</p>
                                    
                                <h3 class="product-name"><a href='{{route('product',['id'=>$item->id,'slug'=>$item->slug])}}'>{{$item->name}}</a></h3>		
                                <h4 class="product-price">${{$item->price_promotion}}.000<del class="product-old-price">${{$item->price_unit}}.000</del></h4>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>	
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="product-btns">
                                        <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                        <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                        <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                    </div>
                                </div>
                                <div class="add-to-cart">
                                <a href="{{route('addCart',$item->id)}}">
                                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection --}}
