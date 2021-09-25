<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel 8x Lazy loading</title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title"><span>Featured Products</span></div>
                    <div class="row">
                        @foreach($products as $product)
                            @if ($isLazyLoad && $loop->iteration > 8)
                                <div class="col-sm-6 col-md-3 box-product-outer">
                                    <div class="box-product">
                                        <div class="img-wrapper">
                                            <a href="detail.html">
                                                <noscript class="loading-lazy">
                                                    <img alt="Product"
                                                        class="img-fluid"
                                                        loading="lazy"
                                                        width="300"
                                                        height="200"
                                                        src="{{ asset('images/istockphoto-' . strval($loop->iteration) . '-612x612.jpeg') }}"
                                                        onerror="this.onerror=null;this.src='{{asset('images/no-image-placeholder.svg')}}';"
                                                    />
                                                </noscript>
                                            </a>
                                            <div class="tags">
                                                <span class="label-tags"><span class="label label-danger">Sale</span></span>
                                                <span class="label-tags"><span class="label label-info">Featured</span></span>
                                                <span class="label-tags"><span class="label label-warning">Polo</span></span>
                                            </div>
                                            <div class="option">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add to Cart"><i class="ace-icon fa fa-shopping-cart"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Compare"><i class="ace-icon fa fa-align-left"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Wishlist"><i class="ace-icon fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <h6><a href="detail.html">IncultGeo Print Polo T-Shirt</a></h6>
                                        <div class="price">
                                            <div>$16.59<span class="price-down">-10%</span></div>
                                            <span class="price-old">$15.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class="ace-icon fa fa-star"></i>
                                            <i class="ace-icon fa fa-star"></i>
                                            <i class="ace-icon fa fa-star"></i>
                                            <i class="ace-icon fa fa-star"></i>
                                            <i class="ace-icon fa fa-star-half-o"></i>
                                            <a href="#">(2 reviews)</a>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="col-sm-6 col-md-3 box-product-outer">
                                    <div class="box-product">
                                        <div class="img-wrapper">
                                            <a href="detail.html">
                                                <img alt="Product"
                                                    class="img-fluid"
                                                    src="{{ asset('images/istockphoto-' . strval($loop->iteration) . '-612x612.jpeg') }}"
                                                    width="300"
                                                    height="200"
                                                    onerror="this.onerror=null;this.src='{{asset('images/no-image-placeholder.svg')}}';"
                                                />
                                            </a>
                                            <div class="tags">
                                                <span class="label-tags"><span class="label label-danger">Sale</span></span>
                                                <span class="label-tags"><span class="label label-info">Featured</span></span>
                                                <span class="label-tags"><span class="label label-warning">Polo</span></span>
                                            </div>
                                            <div class="option">
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Add to Cart"><i class="ace-icon fa fa-shopping-cart"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Compare"><i class="ace-icon fa fa-align-left"></i></a>
                                                <a href="#" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Wishlist"><i class="ace-icon fa fa-heart"></i></a>
                                            </div>
                                        </div>
                                        <h6><a href="detail.html">IncultGeo Print Polo T-Shirt</a></h6>
                                        <div class="price">
                                            <div>$16.59<span class="price-down">-10%</span></div>
                                            <span class="price-old">$15.00</span>
                                        </div>
                                        <div class="rating">
                                            <i class="ace-icon fa fa-star"></i>
                                            <i class="ace-icon fa fa-star"></i>
                                            <i class="ace-icon fa fa-star"></i>
                                            <i class="ace-icon fa fa-star"></i>
                                            <i class="ace-icon fa fa-star-half-o"></i>
                                            <a href="#">(2 reviews)</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
         <!-- Include: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
