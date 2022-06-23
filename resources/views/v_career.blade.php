@extends('layout.v_template')
@section('title','Career')
@section('content')
<br><br>
    <h1 align="center">Cari Lowongan Pekerjaan...</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/career">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Input Nama Posisi (ex: Barista)" name="search" value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary" >Search</button>
                </div>

            </form>
        </div>
    </div>
    <div class="page-content">
        <div class="container">
              
            <div class="grid-container" itemscope itemtype=" http://schema.org/Event">
                
                @foreach ($pelamar as $item)
                    <div class="grid-box-wrap">
                        <div class="grid-img" itemprop="image">
                            <img src="https://source.unsplash.com/321x209/?{{ $item->name }}" alt="travel images">
                        </div>
                        <div class="grid-body">
                            <h4 itemprop="date">{{ $item->cabang  }} | {{ $item->created_at }}</h4>
                            <h1 itemprop="name">{{ $item->name }}</h1>
                            <p itemprop="description">{{ $item->note }} </p>
                            <a href="/career/{{ $item->id }}">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div> 
                    
                @endforeach
                
                    

                {{-- <div class="grid-box-wrap">
                    <div class="grid-img" itemprop="image">
                        <img src="https://source.unsplash.com/321x209/?cashier" alt="travel images">
                    </div>
                    <div class="grid-body">
                        <h4 itemprop="date">Kelapa Gading, Jakarta | December 10, 2022</h4>
                        <h1 itemprop="name">Kasir</h1>
                        <p itemprop="description">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>

                        <a href="/career_detail">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

                <div class="grid-box-wrap">
                    <div class="grid-img" itemprop="image">
                        <img src="https://source.unsplash.com/321x209/?manager" alt="travel images">
                    </div>
                    <div class="grid-body">
                        <h4 itemprop="date">Kelapa Gading, Jakarta | December 10, 2022</h4>
                        <h1 itemprop="name">Manajer Operasional</h1>
                        <p itemprop="description">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>

                        <a href="/career_detail">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

                <div class="grid-box-wrap">
                    <div class="grid-img" itemprop="image">
                        <img src="https://source.unsplash.com/321x209/?maid" alt="travel images">
                    </div>
                    <div class="grid-body">
                        <h4 itemprop="date">Tebet, Jakarta | December 10, 2022</h4>
                        <h1 itemprop="name">Office Boy</h1>
                        <p itemprop="description">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>

                        <a href="/career_detail">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

                <div class="grid-box-wrap">
                    <div class="grid-img" itemprop="image">
                        <img src="https://source.unsplash.com/321x209/?security" alt="travel images">
                    </div>
                    <div class="grid-body">
                        <h4 itemprop="date">Tebet, Jakarta | December 10, 2022</h4>
                        <h1 itemprop="name">Security</h1>
                        <p itemprop="description">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>

                        <a href="/career_detail">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

                <div class="grid-box-wrap">
                    <div class="grid-img">
                        <img src="https://source.unsplash.com/321x209/?barista" alt="travel images">
                    </div>
                    <div class="grid-body">
                        <h4>Tebet, Jakarta | December 10, 2022</h4>
                        <h1>Barista</h1>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>

                        <a href="/career_detail">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div> --}}

                {{-- <div class="grid-box-wrap">
                    <div class="grid-img" itemprop="image">
                        <img src="https://source.unsplash.com/321x209/?jobs" alt="travel images">
                    </div>
                    <div class="grid-body">
                        <h4 itemprop="date">December 10, 2022 | Author | 0 Comments</h4>
                        <h1 itemprop="name">Best Destination to travel this winter</h1>
                        <p itemprop="description">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>

                        <a href="#">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div> --}}

                {{-- <div class="grid-box-wrap">
                    <div class="grid-img" itemprop="image">
                        <img src="https://source.unsplash.com/321x209/?jobs" alt="travel images">
                    </div>
                    <div class="grid-body">
                        <h4 itemprop="date">December 10, 2022 | Author | 0 Comments</h4>
                        <h1 itemprop="name">Best Destination to travel this winter</h1>
                        <p itemprop="description">Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum </p>

                        <a href="#">read more <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div> --}}
            <br>
            <nav class="navigation pagination">
                <div class="nav-links">
                    <a href="#" class="page-numbers">Previous</a>
                    <a href="#" class="page-numbers current">1</a>
                    <a href="#" class="page-numbers">2</a>
                    <a href="#" class="page-numbers">3</a>
                    <a href="#" class="page-numbers">Next</a>
                </div>
            </nav>
            </div>
            {{-- <aside>
                <div class="news-letter">
                    <h2>Newsletter</h2>
                    <hr>
                    <p>Don't miss a thing! Sign up to receive daily deals.</p>
                    <input type="email" name="userEmail" placeholder="Your Email Address...">
                    <a href="#">Subscribe now</a>
                </div>
                <!-- New Letter Ends -->
                <div class="recent-post">
                    <h2>recent posts</h2>
                    <div class="post">
                        <div class="post-wrap">
                            <div class="img-wrap">
                                <img src="images/recent-post-img.jpg" alt="Post Images">
                            </div>
                            <a href="#"><div class="post-content">
                                <h3>How to find best college for you..</h3>
                                <p>26 Dec, 2022</p>
                            </div></a>
                        </div>

                        <div class="post-wrap">
                            <div class="img-wrap">
                                <img src="images/recent-post-img.jpg" alt="Post Images">
                            </div>
                            <a href="#"><div class="post-content">
                                <h3>How to find best college for you..</h3>
                                <p>26 Dec, 2022</p>
                            </div></a>
                        </div>

                        <div class="post-wrap">
                            <div class="img-wrap">
                                <img src="images/recent-post-img.jpg" alt="Post Images">
                            </div>
                            <a href="#"><div class="post-content">
                                <h3>How to find best college for you..</h3>
                                <p>26 Dec, 2022</p>
                            </div></a>
                        </div>

                        <div class="post-wrap">
                            <div class="img-wrap">
                                <img src="images/recent-post-img.jpg" alt="Post Images">
                            </div>
                            <a href="#"><div class="post-content">
                                <h3>How to find best college for you..</h3>
                                <p>26 Dec, 2022</p>
                            </div></a>
                        </div>
                    </div>
                </div>
                <!-- Recent Post Close -->
                <div class="follow-us">
                    <h2>Follow us on</h2>
                    <hr>
                    <div class="socialmedia">
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        <a href=""><i class="fab fa-facebook-messenger"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-skype"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <!-- Follow Us close -->
                {{-- <div class="latest-course">
                    <h2>Latest Courses</h2>
                    <hr>
                    <div class="courses-wrap">
                            <a href="#"><img src="images/course1-img.jpg" alt="Course Image">
                            <span>$100</span>
                            <p>Learn web designing</p></a>
                    </div>

                    <div class="courses-wrap">
                            <a href="#"><img src="images/course2-img.jpg" alt="Course Image">
                            <span>$100</span>
                            <p>Learn web designing</p></a>
                    </div>

                    <div class="courses-wrap">
                            <a href="#"><img src="images/course3-img.jpg" alt="Course Image">
                            <span>$100</span>
                            <p>Learn web designing</p></a>
                    </div>

                    <div class="courses-wrap">
                            <a href="#"><img src="images/course3-img.jpg" alt="Course Image">
                            <span>$100</span>
                            <p>Learn web designing</p></a>
                    </div>
                </div>
            </aside> --}}
            {{-- <aside>
                
                <div class="news-letter">
                    <h2>Cari Lowongan Pekerjaan</h2>
                    <hr>
                    <p>Don't miss a thing! Search your career.</p>
                    
                    <form action="/career">
                        <input type="text" name="search" placeholder="Cari Pekerjaan..."> --}}
                        {{-- <input type="email" name="text" placeholder="Cari Cabang..."> --}}
                        {{-- <button class="btn btn-danger" type="submit">Search</button> --}}
                    {{-- </form> --}}
                        
                    

                    {{-- <a href="#">Search</a> --}}
                {{-- </div> --}}
                <!-- New Letter Ends -->
                
            {{-- </aside>  --}}
        
        </div>
    </div>
    <section class="query-section">
        <div class="container">
            <p>Any Queries? Ask us a question at<a href="tel:+9779813639131"><i class="fas fa-phone"></i> +977 9813639131</a></p>
        </div>
    </section>

    
@endsection