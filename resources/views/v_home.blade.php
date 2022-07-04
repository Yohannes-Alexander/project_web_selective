
@extends('layout.v_template')
@section('title','Home')



@section('content')
    <div class="banner">
        <div class="owl-four owl-carousel" itemprop="image">
            <img src="https://source.unsplash.com/1366x600/?coffee" alt="Image of Bannner">
            <img src="https://source.unsplash.com/1366x600/?cup" alt="Image of Bannner">
            <img src="https://source.unsplash.com/1366x600/?bread" alt="Image of Bannner">
        </div>
        <div class="container" itemprop="description">
            <h1>welcome to Selective Coffee Roaster</h1>
            <h3>Provide The Finest Selected Beans</h3>
        </div>
        <div id="owl-four-nav" class="owl-nav"></div>
    </div>
    <!-- <div class="banner">
        <div class="owl-five owl-carousel owl-theme">
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ENVW3uZ3a-4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/0bfk90rWV9U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="item-video">
                <iframe width="100%" height="450" src="https://www.youtube.com/embed/ktvTqknDobU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
    </div>
    </div> -->
    <!-- Banner Close -->
    <div class="page-heading">
        <div class="container">
            <h2>popular menu</h2>
        </div>
    </div>
    <!-- Popular courses End -->
    <div class="learn-courses">
        <div class="container">
            <div class="courses">
                <div class="owl-one owl-carousel">
                    <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap" itemprop="image"><img src="https://source.unsplash.com/380x253/?coffee" alt="courses picture"></div>
                            <a href="#" class="learn-desining-banner" itemprop="name">Kopi </a>
                        <div class="box-body" itemprop="description">
                            <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                            <section itemprop="time">
                                {{-- <p><span>Duration:</span> 4 Years</p>
                                <p><span>Class Time:</span> 6am-12am / 11am-5pm</p> --}}
                                <p><span>Harga:</span> Rp. 10.000</p>
                                <p><br></p>
                                <p><br></p>
                            </section>
                        </div>
                    </div>

                    <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap"  itemprop="image"><img src="https://source.unsplash.com/380x253/?roti" alt="courses picture"></div>
                            <a href="#" class="learn-desining-banner" itemprop="name">Roti </a>
                        <div class="box-body" itemprop="description">
                            <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                            <section itemprop="time">
                                <p><span>Harga:</span> Rp. 10.000</p>
                                <p><br></p>
                                <p><br></p>
                            </section>
                        </div>
                    </div>

                    <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap"  itemprop="image"><img src="https://source.unsplash.com/380x253/?cake" alt="courses picture"></div>
                            <a href="#" class="learn-desining-banner" itemprop="name">Kue </a>
                        <div class="box-body" itemprop="description">
                            <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                            <section itemprop="time">
                                <p><span>Harga:</span> Rp. 10.000</p>
                                <p><br></p>
                                <p><br></p>
                            </section>
                        </div>
                    </div>

                    <div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
                        <div class="img-wrap"  itemprop="image"><img src="https://images.solopos.com/2020/10/03roti-kopi-roti-boy.jpg" alt="courses picture"></div>
                            <a href="#" class="learn-desining-banner" itemprop="name">Coffee bun</a>
                        <div class="box-body" itemprop="description">
                            <p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
                            <section itemprop="time">
                                <p><span>Harga:</span> Rp. 10.000</p>
                                <p><br></p>
                                <p><br></p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Learn courses End -->
    <section class="whyUs-section">
        <div class="container">
            <div class="featured-points">
                <ul>
                    <li><i class="fas fa-book"></i>Consistent with quality</li>
                    <li><i class="fas fa-money-check-alt"></i>Make something new for people</li>
                    <li><i class="fas fa-chalkboard-teacher"></i>Excellent aftersales service</li>
                    <li> <i class="fas fa-book"></i>Works according to deadline</li>
                    <li> <i class="fas fa-book"></i>Striving for coffee excellence</li>
                    <li> <i class="fas fa-book"></i>Sourching the finest coffee</li>
                </ul>
            </div>
            <div class="whyus-wrap">
                <h1>why us?</h1>
                <p itemprop="description">We are aiming to provide the finest selected coffee beans, so that people can easily recognize the quality of the coffee flavors itself. Therefore, we are investing in the right tools to enjoy a cup of coffee into the details of coffee spectrum flavours and we have a job to bring the finest by uniting the taste from the downstream to upstream in one frame</p>
                <p itemprop="description">In order to bring good coffee for our market, our team are really careful in sourcing good grean beans and doing the most suitable profiling to bring out the best potential of the coffee flavour itself. So, customer can taste and enjoy good-selected coffee with affordable prices and also help to encourage new customers to get great experiences in coffee.</p>

                {{-- <a href="#" class="read-more-btn">read more</a> --}}
            </div>
        </div>
    </section>
    <!-- Closed WhyUs section -->
    <section class="page-heading">
        <div class="container">
            <h2>gallery</h2>
        </div>
    </section>
    <section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery">
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?coffee" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?coffee" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?cafe" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?cafe" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?meeting" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?meeting" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?restaurant" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?restaurant" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?milkshake" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?milshake" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?cake" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?cake" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?milk" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?milk" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?talking" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?talking" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?bread" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?bread" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?toast" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?toast" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?rice" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?rice" alt="gallery-images">
            </a>
        </div>
        <div class="gallery-img-wrap">
            <a href="https://source.unsplash.com/1366x600/?juice" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
                <img src="https://source.unsplash.com/1366x600/?juice" alt="gallery-images">
            </a>
        </div>
    </section>
    <!-- End of gallery Images -->
    <section class="page-heading">
        <div class="container">
            <h2>Cabang Kami</h2>
        </div>
    </section>
    <section class="events-section" itemprop="event" itemscope itemtype=" http://schema.org/Event">
        <div class="container">
            <div class="event-wrap">
                <div class="img-wrap" itemprop="image">
                    <img src="template/edulab/images/events.jpg" alt="event images">
                </div>
                <div class="details">
                    <a href=""><h3 itemprop="name">Selective HQ</h3></a>
                    <p itemprop="description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus vero iste animi deserunt suscipit ipsam vitae unde earum fugit cumque. Autem facere cupiditate corrupti veniam ipsum odit illum corporis totam.</p>

                    <h5 itemprop="startDate"><i class="far fa-clock"></i> 16.00 WIB | 21.00 WIB</h5>
                    <h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Bangka, Jakarta Selatan</h5>
                </div>
            </div>

            <div class="event-wrap">
                <div class="img-wrap" itemprop="image">
                    <img src="template/edulab/images/events.jpg" alt="event images">
                </div>
                <div class="details">
                    <a href=""><h3 itemprop="name">Selective Kelapa Gading</h3></a>
                    <p itemprop="description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente, quidem vel veniam hic assumenda rerum, architecto dolorem eos rem enim consectetur dicta adipisci! Architecto sunt nostrum porro! Numquam, suscipit quam?</p>

                    <h5 itemprop="startDate"><i class="far fa-clock"></i> 10.00 WIB | 22.00 WIB</h5>
                    <h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Kelapa Gading, Jakarta Utara</h5>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Events section -->
    <section class="what-other-say">
        <!-- <div class="container">
            <div class="wrap-others-say" itemprop="review" itemscope itemtype="http://schema.org/ReviewAction">
                <h1>what other say about us</h1>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <li class="img-wrap">
                            <figure itemprop="image">
                                <img src="images/review-big-img.jpg" alt="Person Image">
                                <figcaption class="hidden">
                                    <h3>Sagar Sapkota</h3>
                                    <h4>UI Designer</h4>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="img-wrap">
                            <figure itemprop="image">
                                <img src="images/review-big-img.jpg" alt="Person Image">
                                <figcaption class="hidden">
                                    <h3>Sagar Sapkota</h3>
                                    <h4>UI Designer</h4>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="img-wrap">
                            <figure itemprop="image">
                                <img src="images/review-big-img.jpg" alt="Person Image">
                                <figcaption class="hidden">
                                    <h3>Sagar Sapkota</h3>
                                    <h4>UI Designer</h4>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="img-wrap">
                            <figure itemprop="image">
                                <img src="images/review-big-img.jpg" alt="Person Image">
                                <figcaption class="hidden">
                                    <h3>Sagar Sapkota</h3>
                                    <h4>UI Designer</h4>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="img-wrap">
                            <figure itemprop="image">
                                <img src="images/review-big-img.jpg" alt="Person Image">
                                <figcaption class="hidden">
                                    <h3>Sagar Sapkota</h3>
                                    <h4>UI Designer</h4>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="img-wrap">
                            <figure itemprop="image">
                                <img src="images/review-big-img.jpg" alt="Person Image">
                                <figcaption class="hidden">
                                    <h3>Sagar Sapkota</h3>
                                    <h4>UI Designer</h4>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="img-wrap">
                            <figure itemprop="image">
                                <img src="images/review-big-img.jpg" alt="Person Image">
                                <figcaption class="hidden">
                                    <h3>Sagar Sapkota</h3>
                                    <h4>UI Designer</h4>
                                </figcaption>
                            </figure>
                        </li>
                        <li class="img-wrap">
                            <figure itemprop="image">
                                <img src="images/review-big-img.jpg" alt="Person Image">
                                <figcaption class="fig">
                                    <h3 class="hidden">Sagar Sapkota</h3>
                                    <h4 class="hidden">UI Designer</h4>
                                </figcaption>
                            </figure>
                        </li>
                    </ul>
                </div>

                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="testimonial-holder" itemprop="description">
                                <strong class="title">Amazing service and amazing team. Thank you!</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
                                <div class="rateYo"></div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial-holder" itemprop="description">
                                <strong class="title">Very Satisfaied with their service</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
                                <div class="rateYo"></div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial-holder" itemprop="description">
                                <strong class="title">Quick, efficient and meets your expectations</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
                                <div class="rateYo"></div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial-holder" itemprop="description">
                                <strong class="title">The website was according our imagination</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
                                <div class="rateYo"></div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial-holder" itemprop="description">
                                <strong class="title">Amazing service and amazing team. Thank you!</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
                                <div class="rateYo"></div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial-holder" itemprop="description">
                                <strong class="title">Very Satisfaied with their service</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
                                <div class="rateYo"></div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial-holder" itemprop="description">
                                <strong class="title">Quick, efficient and meets your expectations</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
                                <div class="rateYo"></div>
                            </div>
                        </li>
                        <li>
                            <div class="testimonial-holder" itemprop="description">
                                <strong class="title">The website was according our imagination</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique fer-<br/>mentum mauris, non tincidunt arcu venenatis vel. Nam et vehicula turpis. Ut nunc purus, mattis eu odio a, egestas facilisis nibh. Mauris magna diam, iaculis vitae sapien non, pharetra congue purus. Phasellus in odio purus.</p>
                                <div class="rateYo"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
        <div class="container">
            <h4 class="article-subtitle">Get to Know</h4>
            <h2 class="head">what our customer say</h2>
            <div class="three owl-carousel owl-theme">
                <div class="customer-item" itemscope itemtype="http://schema.org/Rating">
                    <div class="border">
                        <div class="customer">
                            <figure>
                                <img class="customer-img" src="template/edulab/images/ilham.png" alt="Person image">
                                <figcaption>
                                    <span itemprop="author">ILHAM NUR AKBAR</span>
                                    <div class="rateYo" itemprop="ratingValue"></div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="customer-review">
                            <p itemprop="description">
                                "Selective coffee roaster ini memiliki suasana coffee shop yang cozy
                                 dan bener bener cocok banget buat semua kalangan yang mau nyari tempat
                                 yang instagrammable ataupun hanya sekedar nongkrong doang "
                            </p>
                        </div>
                    </div>
                </div>
                <div class="customer-item" itemscope itemtype="http://schema.org/Rating">
                    <div class="border">
                        <div class="customer">
                            <figure>
                                <img class="customer-img" src="https://media-exp1.licdn.com/dms/image/C4D03AQH_gcvcoKc26g/profile-displayphoto-shrink_800_800/0/1621264960592?e=1656547200&v=beta&t=aOHMVs9l_KVexEjInGbaMCNyp538MxG01GlW1MyCjWo" alt="Person image">
                                <figcaption>
                                    <span itemprop="author">YOHANNES ALEXANDER AGUSTI SINAGA</span>
                                    <div class="rateYo" itemprop="ratingValue"></div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="customer-review">
                            <p itemprop="description">
                                "Selective coffee roaster cocok banget buat semua kalangan. 
                                 menunya pun juga sangat beragam yang terinspirasi dari nusantara
                                 next time bakal kesini terus kalau pulang dari kerja "
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Others talk -->
    {{-- <section class="page-heading">
        <div class="container">
            <h2>latest news</h2>
        </div>
    </section>
    <section class="latest-news">
        <div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
            <div class="owl-two owl-carousel">
                <div class="news-wrap" itemprop="event">
                    <div class="news-img-wrap" itemprop="image">
                        <img src="edulab/images/latest-new-img.jpg" alt="Latest News Images">
                    </div>
                    <div class="news-detail" itemprop="description">
                        <a href=""><h1>Orientation Programme for new Students.</h1></a>
                        <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

                        <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
                    </div>
                </div>

                <div class="news-wrap" itemprop="event">
                    <div class="news-img-wrap" itemprop="image">
                        <img src="edulab/images/latest-new-img.jpg" alt="Latest News Images">
                    </div>
                    <div class="news-detail" itemprop="description">
                        <a href=""><h1>Orientation Programme for new Students.</h1></a>
                        <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

                        <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
                    </div>
                </div>

                <div class="news-wrap" itemprop="event">
                    <div class="news-img-wrap" itemprop="image">
                        <img src="edulab/images/latest-new-img.jpg" alt="Latest News Images">
                    </div>
                    <div class="news-detail" itemprop="description">
                        <a href=""><h1>Orientation Programme for new Students.</h1></a>
                        <h2 itemprop="startDate">By Admin | 20 Dec. 2018</h2>

                        <p>Orientation Programme for new sffs Students. Orientatin Programmes for new Students.. Orientatin Programmes for new Students</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- Latest News CLosed -->
    <section class="query-section">
        <div class="container">
            <p></p>
            {{-- <p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p> --}}
        </div>
    </section>


@endsection
