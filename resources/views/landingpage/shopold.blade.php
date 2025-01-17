@extends('landingpage.index')
@section('content')
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/projek/tv.jpg" class="img-fluid" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/projek/monitor.jpg" class="img-fluid" alt="...">
        </div>
    </div>s
    <div class="row product__filter">
        <div class="col-lg-12 margin-tb mt-4">
            <div class="pull-left">
                <h3>Categoris</h3>
            </div>
            <div class="d-flex justify-content-end">
                <a class="btn btn-success" href="#"> View All</a>
            </div>
        </div>
        <div class="row d-flex justify-content-around mt-2">
            <div class="col-sm-3">
                <div class="card d-block mx-auto" style="width: 18rem;">
                    <img src="img/projek/monitor.jpg" class="card-img-top" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Monitor</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card d-block mx-auto" style="width: 18rem;">
                    <img src="img/projek/setrika.jpg" class="card-img-top" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Setrika</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card d-block mx-auto" style="width: 18rem;">
                    <img src="img/projek/earphone.jpg" class="card-img-top" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Handphone</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 ">
                <div class="card d-block mx-auto" style="width: 18rem;">
                    <img src="img/projek/l2.jpg" class="card-img-top" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Laptop</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row product__filter">
        <div class="col-lg-12 margin-tb mt-4">
            <div class="pull-left">
                <h3>Prosucts</h3>
            </div>
            <div class="d-flex justify-content-end">
                <a class="btn btn-success" href="#"> View All</a>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/acer.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/apple.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/mito.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/bardi.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/philips.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/mfi.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/mi.jpg">
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/ZYRX.png">
                </div>
            </div>
        </div>
    </div>
    <div class="row product__filter">
        <div class="col-lg-12 margin-tb mt-4">
            <div class="pull-left">
                <h3>Recomendation</h3>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/l3.jpg">
                    <span class="label">New</span>
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Piqué Biker Jacket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                        <label for="pc-1">
                            <input type="radio" id="pc-1">
                        </label>
                        <label class="active black" for="pc-2">
                            <input type="radio" id="pc-2">
                        </label>
                        <label class="grey" for="pc-3">
                            <input type="radio" id="pc-3">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/mfi.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Piqué Biker Jacket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$67.24</h5>
                    <div class="product__color__select">
                        <label for="pc-4">
                            <input type="radio" id="pc-4">
                        </label>
                        <label class="active black" for="pc-5">
                            <input type="radio" id="pc-5">
                        </label>
                        <label class="grey" for="pc-6">
                            <input type="radio" id="pc-6">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item sale">
                <div class="product__item__pic set-bg" data-setbg="img/projek/tv.jpg">
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Multi-pocket Chest Bag</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$43.48</h5>
                    <div class="product__color__select">
                        <label for="pc-7">
                            <input type="radio" id="pc-7">
                        </label>
                        <label class="active black" for="pc-8">
                            <input type="radio" id="pc-8">
                        </label>
                        <label class="grey" for="pc-9">
                            <input type="radio" id="pc-9">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/sandisk.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Diagonal Textured Cap</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$60.9</h5>
                    <div class="product__color__select">
                        <label for="pc-10">
                            <input type="radio" id="pc-10">
                        </label>
                        <label class="active black" for="pc-11">
                            <input type="radio" id="pc-11">
                        </label>
                        <label class="grey" for="pc-12">
                            <input type="radio" id="pc-12">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/phone1.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Lether Backpack</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$31.37</h5>
                    <div class="product__color__select">
                        <label for="pc-13">
                            <input type="radio" id="pc-13">
                        </label>
                        <label class="active black" for="pc-14">
                            <input type="radio" id="pc-14">
                        </label>
                        <label class="grey" for="pc-15">
                            <input type="radio" id="pc-15">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
            <div class="product__item sale">
                <div class="product__item__pic set-bg" data-setbg="img/projek/philips.jpg">
                    <span class="label">Sale</span>
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Ankle Boots</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$98.49</h5>
                    <div class="product__color__select">
                        <label for="pc-16">
                            <input type="radio" id="pc-16">
                        </label>
                        <label class="active black" for="pc-17">
                            <input type="radio" id="pc-17">
                        </label>
                        <label class="grey" for="pc-18">
                            <input type="radio" id="pc-18">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/tp-link.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>T-shirt Contrast Pocket</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$49.66</h5>
                    <div class="product__color__select">
                        <label for="pc-19">
                            <input type="radio" id="pc-19">
                        </label>
                        <label class="active black" for="pc-20">
                            <input type="radio" id="pc-20">
                        </label>
                        <label class="grey" for="pc-21">
                            <input type="radio" id="pc-21">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="img/projek/setrika.jpg">
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>Basic Flowing Scarf</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>$26.28</h5>
                    <div class="product__color__select">
                        <label for="pc-22">
                            <input type="radio" id="pc-22">
                        </label>
                        <label class="active black" for="pc-23">
                            <input type="radio" id="pc-23">
                        </label>
                        <label class="grey" for="pc-24">
                            <input type="radio" id="pc-24">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 margin-tb mt-4">
            <div class="d-flex justify-content-center">
                <a class="btn btn-success" href="#"> View All</a>
            </div>
        </div>
    </div>
@endsection
