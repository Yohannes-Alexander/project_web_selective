@extends('layout.v_template')
@section('title','Testimoni')

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

        <section class="testimonial-page">
            <div class="container">
                <main class="customer-review">
                    <div class="row">
                        <div class="img">
                            <img src="/template/edulab/images/ilham.png" alt="Customer Picture">
                        </div>
                        <div class="rewiew-content">
                            <header>
                                <h3>Very happy to find this coffee shop!</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis adipisci iusto ipsa, tempore porro similique? Laboriosam magni officiis veritatis ex facilis explicabo minima nam sit nihil fugiat. Iusto, ratione doloremque.</p>
                            </header>
                            <footer>
                                <span><h4>Ilham Nur Akbar</h4> <p>Student</p></span>
                                <div class="rateYo"></div>
                            </footer>
                        </div>
                    </div>

                    <div class="row">
                        <div class="img">
                            <img src="https://media-exp1.licdn.com/dms/image/C4D03AQH_gcvcoKc26g/profile-displayphoto-shrink_800_800/0/1621264960592?e=1656547200&v=beta&t=aOHMVs9l_KVexEjInGbaMCNyp538MxG01GlW1MyCjWo" alt="Customer Picture">
                        </div>
                        <div class="rewiew-content">
                            <header>
                                <h3>Very happy to find this Cafe!</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum animi earum, quam itaque veritatis praesentium nesciunt reprehenderit, aperiam porro quas odit ex. Ex eligendi incidunt explicabo amet cupiditate! Doloribus, optio.</p>
                            </header>
                            <footer>
                                <span><h4>Yohannes Alexander Agusti Sinaga</h4> <p>Student</p></span>
                                <div class="rateYo"></div>
                            </footer>
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="img">
                            <img src="images/testimonial-customer.jpg" alt="Customer Picture">
                        </div>
                        <div class="rewiew-content">
                            <header>
                                <h3>Very happy to find this institute!</h3>
                                <p>I am very happy with the service provided by this institute. Now i have got the job as web developer in one of the reputed company of Nepal. Especially trainers are the Professionals from the field of information technology. Thankyou lab theme. Professionals from the field of information technology. Thankyou lab theme.</p>
                            </header>
                            <footer>
                                <span><h4>Bibek Basnet</h4> <p>Web Developer</p></span>
                                <div class="rateYo"></div>
                            </footer>
                        </div>
                    </div>

                    <div class="row">
                        <div class="img">
                            <img src="images/testimonial-customer.jpg" alt="Customer Picture">
                        </div>
                        <div class="rewiew-content">
                            <header>
                                <h3>Very happy to find this institute!</h3>
                                <p>I am very happy with the service provided by this institute. Now i have got the job as web developer in one of the reputed company of Nepal. Especially trainers are the Professionals from the field of information technology. Thankyou lab theme. Professionals from the field of information technology. Thankyou lab theme.</p>
                            </header>
                            <footer>
                                <span><h4>Bibek Basnet</h4> <p>Web Developer</p></span>
                                <div class="rateYo"></div>
                            </footer>
                        </div>
                    </div>

                    <div class="row">
                        <div class="img">
                            <img src="images/testimonial-customer.jpg" alt="Customer Picture">
                        </div>
                        <div class="rewiew-content">
                            <header>
                                <h3>Very happy to find this institute!</h3>
                                <p>I am very happy with the service provided by this institute. Now i have got the job as web developer in one of the reputed company of Nepal. Especially trainers are the Professionals from the field of information technology. Thankyou lab theme. Professionals from the field of information technology. Thankyou lab theme.</p>
                            </header>
                            <footer>
                                <span><h4>Bibek Basnet</h4> <p>Web Developer</p></span>
                                <div class="rateYo"></div>
                            </footer>
                        </div>
                    </div> --}}

                    <a href="#" class="button">show more</a>
                </main>
                <br>
                <aside>
                    <br>
                    <div class="submit-testimonials">
                        <h2>Submit your Testimonials</h2>
                        <form method="POST" action="/testimoni">
                            @csrf
                                <input type="text" name="nama" placeholder="Your Name*" required>
                                <input type="email" name="email" placeholder="Your Email Address..." required>
                                <input type="text" name="pekerjaan" placeholder="Your Occupation*" required>
                                <input type="text" name="title" placeholder="Your title*" required>
                                <textarea name="note" placeholder="Write your message"></textarea>
                                <span>
                                    <p>Rate us*</p>
                                </span>
                                <input type="number" name="rate" step="1" value="1" max="5" required>
                                {{-- <input id="file-upload" type="file" value="Upload Image*" accept="image/*" required>
                                <label for="file-upload" class="custom-file-upload">Upload Image*</label> --}}
                                <br><br>
                                <input type="submit" value="Submit">
                        </form>
                    </div>
                </aside>
            </div>
        </section>

@endsection