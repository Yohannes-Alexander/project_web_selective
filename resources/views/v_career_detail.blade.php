@extends('layout.v_template')
@section('title','Career')
@section('content')
<section class="page-content" id="course-page">
    <div class="container">
        <main class="course-detail">
            <h2>BARISTA</h2><br>
            <img src="https://source.unsplash.com/1000x600/?coffee" alt="">
            <br><br>
            <header>
                <div class="course-box">
                    <i class="far fa-clock"></i>
                    <p>4 years</p>
                    <p>(5 hours/day)</p>
                </div>

                <div class="course-box">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>{{$pelamar->cabang}}</p>
                </div>

                <div class="course-box">
                    <i class="fas fa-money-check-alt"></i>
                    <p>{{ $pelamar->gaji }}</p>
                </div>
            </header>
            <article>
                <section class="course-intro">
                    <h3>Description</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </section>

                <section class="course-objective">
                    <h3>Required Skills</h3>
                    <ul>
                        <li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
                        <li>Create interactive forms that capture and validate user input using JavaScript</li>
                        <li>Create interactive forms that capture and validate user input using JavaScript</li>
                        <li>Control Java Applets, ActiveX Controls and other plug-ins</li>
                        <li>Control Java Applets, ActiveX Controls and other plug-ins</li>
                        <li>Enhance PHP programming skills to successfully build interactive, data-driven web applications</li>
                        <li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
                        <li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
                        <li>Control Java Applets, ActiveX Controls and other plug-ins</li>
                        <li>Create interactive forms that capture and validate user input using JavaScript</li>
                        <li>Develop interactive Web pages using XHTML, HTML/DHTML & CSS</li>
                    </ul>
                </section>
            </article>					
        </main>
        <aside>
            <div class="reserve-course">
                <h2>SUBMIT YOUR APPLICATION</h2>
                <form>
                    <input type="text" placeholder="Your Name*" required>
                    <input type="email" name="userEmail" placeholder="Your Email Address..." required>
                    <input type="text" placeholder="Your Phone*" required>
                    <input type="text" placeholder="Your Address*" required>
                    <textarea placeholder="Write your message"></textarea>
                    <h4>Upload your CV</h4><br>
                    <input id="file-upload" type="file" value="Upload CV*" accept="image/*" required><br><br>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <!-- New Letter Ends -->
            <div class="recent-post">
                <h2>Other Careers</h2>
                <div class="post">
                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img src="https://source.unsplash.com/59x90/?programmer" alt="Post Images">
                        </div>
                        <div class="post-content">
                            <a href="/career_detail ">
                                <br>
                                <h3>Web Developer</h3>
                                <p>Kelapa Gading, Jakarta</p>
                            </a>
                        </div>
                    </div>

                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img src="https://source.unsplash.com/59x90/?programmer" alt="Post Images">
                        </div>
                        <div class="post-content">
                            <a href="/career_detail ">
                                <br>
                                <h3>Web Developer</h3>
                                <p>Tebet, Jakarta</p>
                            </a>
                        </div>
                    </div>

                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img src="https://source.unsplash.com/59x90/?barista" alt="Post Images">
                        </div>
                        <div class="post-content">
                            <a href="/career_detail ">
                                <br>
                                <h3>Barista</h3>
                                <p>Kelapa Gading, Jakarta</p>
                            </a>
                        </div>
                    </div>

                    <div class="post-wrap">
                        <div class="img-wrap">
                            <img src="https://source.unsplash.com/59x90/?security" alt="Post Images">
                        </div>
                        <div class="post-content">
                            <a href="/career_detail ">
                                <br>
                                <h3>Security</h3>
                                <p>Kelapa Gading, Jakarta</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent Post Close -->
        </aside>
    </div>
</section>

    
@endsection