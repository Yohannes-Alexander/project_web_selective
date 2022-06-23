
@extends('layout.v_template')
@section('title','Minuman')



@section('content')
    <div class="banner">
        <div class="owl-four owl-carousel" itemprop="image">
            <img src="https://source.unsplash.com/1366x600/?cake" alt="Image of Bannner">
            <img src="https://source.unsplash.com/1366x600/?toast" alt="Image of Bannner">
            <img src="https://source.unsplash.com/1366x600/?bread" alt="Image of Bannner">
        </div>
        <div class="container" itemprop="description">
            <h1>welcome to Selective Coffee Roaster</h1>
            <h3>Provide The Finest Selected Beans</h3>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>

    <section class="course-listing-page">
        <div class="container">
            <div id="filters" class="button-group">
                <button class="button" data-filter="*">all</button>
                <button class="button" data-filter=".coffee">coffee</button>
                <button class="button" data-filter=".noncoffee">non-coffee</button>
            </div>

            <div class="grid" id="cGrid">
                <div class="grid-item coffee" data-category="coffee">
                    <div class="img-wrap">
                        <img src="template/edulab/images/coffee.jfif" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Black </p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item coffee" data-category="coffee">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?coffee" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">White</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>NON-COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 20.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item noncoffee" data-category="noncoffee">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?strawberry" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Milkshake strawberry</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>NON-COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 20.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item noncoffee" data-category="noncoffee">
                    <div class="img-wrap">
                        <img src="template/edulab/images/milkshake.jfif" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Milkshake chocolate</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>NON-COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 20.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item noncoffee" data-category="noncoffee">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?icecream" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Ice Cream</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>NON-COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 20.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item noncoffee" data-category="noncoffee">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?juice" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Juice</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>NON-COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 20.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item coffee" data-category="coffee">
                    <div class="img-wrap">
                        <img src="template/edulab/images/coffee.jfif" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Manual brew Local</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item noncoffee" data-category="noncoffee">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?moccachino" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Mochaccino</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>NON-COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 20.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item coffee" data-category="coffee">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?cappucino" alt="courses picture">
                    </div>
                    <p class="learn-desining-banner-course">Cappucino</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item coffee" data-category="coffee">
                    <div class="img-wrap">
                        <img src="template/edulab/images/coffee.jfif" alt="courses picture">
                    </div>
                    <p class="learn-desining-banner-course">Ice Coffee-milk</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item coffee" data-category="coffee">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?coffee" alt="courses picture">
                    </div>
                    <a  class="learn-desining-banner-course">Manual brew Import</a>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item coffee" data-category="coffee">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?coffee" alt="courses picture">
                    </div>
                    <a  class="learn-desining-banner-course">Split shot</a>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>COFFEE</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Courses -->

@endsection
