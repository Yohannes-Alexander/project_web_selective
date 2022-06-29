
@extends('layout.v_template')
@section('title','Bijih Kopi')



@section('content')
    <div class="banner">
        <div class="owl-four owl-carousel" itemprop="image">
            <img src="https://p4.wallpaperbetter.com/wallpaper/154/415/811/coffee-macro-cup-closeup-wallpaper-preview.jpg" alt="Image of Bannner">
            <img src="https://img.okezone.com/content/2016/10/17/320/1516671/ekspor-biji-kopi-lampung-turun-ini-alasannya-xtWWf6j1Mq.jpg" alt="Image of Bannner">
            <img src="https://img.okezone.com/content/2016/10/17/320/1516671/ekspor-biji-kopi-lampung-turun-ini-alasannya-xtWWf6j1Mq.jpg" alt="Image of Bannner">
        </div>
        <div class="container" itemprop="description">
            <h1>welcome to Selective filter Roaster</h1>
            <h3>Provide The Finest Selected Beans</h3>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>
    <section class="course-listing-page">
        <div class="container">
            <div id="filters" class="button-group">
                <button class="button" data-filter="*">all</button>
                <button class="button" data-filter=".filter">filter</button>
                <button class="button" data-filter=".espressoblend">espresso blend</button>
            </div>

            <div class="grid" id="cGrid">
                <div class="grid-item filter" data-category="filter">
                    <div class="img-wrap">
                        <img src="https://pict.sindonews.net/dyn/620/pena/news/2021/10/01/34/556208/hari-kopi-internasional-deretan-kedai-kopi-favorit-ini-tebar-diskon-jlf.jpg" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Ethiopia Foge #2</p>
                    <div class="box-body">
                        <h1>Floral, Stone Fruit,
                            Sugar Cane, Vanilla</h1>
                        <h1> <br></h1>
                        <p>Ethiopia, Yirgacheffe, Celinga</p>
                        <section>
                            <p><strong><span>FILTER</span></strong></p>
                            <p><span>Weight:</span> 200 gr</p>
                            <p><span>Harga:</span> Rp 110.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item filter" data-category="filter">
                    <div class="img-wrap">
                        <img src="https://pict.sindonews.net/dyn/620/pena/news/2021/10/01/34/556208/hari-kopi-internasional-deretan-kedai-kopi-favorit-ini-tebar-diskon-jlf.jpg" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Cibeureum Fortunate</p>
                    <div class="box-body">
                        <h1>Floral, Pomello, Orange</h1>
                        <h1> <br></h1>
                        <p>Indonesia, West Java, Bandung</p>
                        <section>
                            <p><strong><span>FILTER</span></strong></p>
                            <p><span>Weight:</span> 200 gr</p>
                            <p><span>Harga:</span> Rp 90.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item espressoblend" data-category="espressoblend">
                    <div class="img-wrap">
                        <img src="https://pict.sindonews.net/dyn/620/pena/news/2021/10/01/34/556208/hari-kopi-internasional-deretan-kedai-kopi-favorit-ini-tebar-diskon-jlf.jpg" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Exo</p>
                    <div class="box-body">
                        <h1>50% Gayo Wethull Arabica</h1>
                        <h1>50% Kerinci Fullwashed Arabica</h1>
                        <p><span>Tasting Notes :</span> Almond, Milk Chocolate, Orange</p>
                        <section>
                            <p><strong><span></span>ESPRESSO BLEND</strong></p>
                            <p><span>Weight:</span> 1000 gr</p>
                            <p><span>Harga:</span> Rp 220.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item espressoblend" data-category="espressoblend">
                    <div class="img-wrap">
                        <img src="https://pict.sindonews.net/dyn/620/pena/news/2021/10/01/34/556208/hari-kopi-internasional-deretan-kedai-kopi-favorit-ini-tebar-diskon-jlf.jpg" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Fine Robusta</p>
                    <div class="box-body">
                        <h1>100% Fine Robusta Kerinci</h1>
                        <h1> </h1>
                        <p><span>Tasting Notes :</span> Bittersweet, Milk Chocolate, Bold</p>
                        <section>
                            <p><strong><span></span>ESPRESSO BLEND</strong></p>
                            <p><span>Weight:</span> 1000 gr</p>
                            <p><span>Harga:</span> Rp 125.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item espressoblend" data-category="espressoblend">
                    <div class="img-wrap">
                        <img src="https://pict.sindonews.net/dyn/620/pena/news/2021/10/01/34/556208/hari-kopi-internasional-deretan-kedai-kopi-favorit-ini-tebar-diskon-jlf.jpg" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Coffee Hunter</p>
                    <div class="box-body">
                        <h1>50% Gayo Wethull Arabica</h1>
                        <h1>50% Kerinci Arabica</h1>
                        <p><span>Tasting Notes :</span> Chocolate, Bold, Orange</p>
                        <section>
                            <p><strong><span></span>ESPRESSO BLEND</strong></p>
                            <p><span>Weight:</span> 1000 gr</p>
                            <p><span>Harga:</span> Rp 160.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item filter" data-category="filter">
                    <div class="img-wrap">
                        <img src="https://pict.sindonews.net/dyn/620/pena/news/2021/10/01/34/556208/hari-kopi-internasional-deretan-kedai-kopi-favorit-ini-tebar-diskon-jlf.jpg" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Argopuro</p>
                    <div class="box-body">
                        <h1>Rose Apple, Apricot, Cherry</h1>
                        {{-- <h1> <br></h1> --}}
                        <p>Rose Apple, Apricot, Cherry</p>
                        <section>
                            <p><strong><span>FILTER</span></strong></p>
                            <p><span>Weight:</span> 200 gr</p>
                            <p><span>Harga:</span> Rp 80.000</p>
                        </section>
                    </div>
                </div>

                {{-- <div class="grid-item filter" data-category="filter">
                    <div class="img-wrap">
                        <img src="template/edulab/images/filter.jfif" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Manual brew Local</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>filter</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item espresso blend" data-category="espresso blend">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?moccachino" alt="courses picture">
                    </div>
                    <p  class="learn-desining-banner-course">Mochaccino</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>NON-filter</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 20.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item filter" data-category="filter">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?cappucino" alt="courses picture">
                    </div>
                    <p class="learn-desining-banner-course">Cappucino</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>filter</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item filter" data-category="filter">
                    <div class="img-wrap">
                        <img src="template/edulab/images/filter.jfif" alt="courses picture">
                    </div>
                    <p class="learn-desining-banner-course">Ice filter-milk</p>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>filter</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item filter" data-category="filter">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?filter" alt="courses picture">
                    </div>
                    <a  class="learn-desining-banner-course">Manual brew Import</a>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>filter</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div>

                <div class="grid-item filter" data-category="filter">
                    <div class="img-wrap">
                        <img src="https://source.unsplash.com/370x246/?filter" alt="courses picture">
                    </div>
                    <a  class="learn-desining-banner-course">Split shot</a>
                    <div class="box-body">
                        <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                        <section>
                            <p><strong><span>filter</span></strong></p>
                            <p></p>
                            <p><span>Harga:</span> Rp 17.000</p>
                        </section>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- Upcomming Events Closed -->
    

@endsection
