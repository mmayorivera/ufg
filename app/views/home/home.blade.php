@extends('master/container')
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords }}">
<meta name="author" content="{{ $meta_author }}">
<meta property="og:title" content="{{ ucfirst($meta_description) }} - {{ $sitename }}"/>
@stop
@section('content')
<div id="content">
    <!--======= Details Features Tabs =========-->
    <section id="det_fea" class="fea_colour">
      <div class="features_bg">
        <div class="container">
          <ul class="row features">
            <li class="col-md-4 bg_color_1 nopadding">
              <div class="icon wow bounceInUp" data-wow-duration="0.90s" data-wow-delay="200ms"> <i class="ion-clipboard bg_color_1"></i> </div>
              <h4>Mission statement</h4>
              <p>To educate and guide both current and upcoming generations to a successful and prosperous financial future.</p>
            </li>
            <li class="col-md-4 bg_color_2 nopadding">
              <div class="icon wow bounceInUp"  data-wow-duration="0.90s" data-wow-delay="400ms"> <i class="ion-ios7-clock-outline bg_color_2"></i> </div>
              <h4>Vision statement</h4>
              <p>Within five years, the current generation will gain knowledge and understanding on how to save and plan for a better future. The upcoming generations will learn how to save and manage money through the implementation of UFG in the school system. This will better the economy by substantially reducing debt that is generated by the current “American way” of living.</p>
            </li>
            <li class="col-md-4 bg_color_3 nopadding">
              <div class="icon wow bounceInUp" data-wow-duration="0.90s" data-wow-delay="600ms"> <i class="ion-ios7-videocam bg_color_3"></i> </div>
              <h4>PROCESS PLAN</h4>
              <p>Tree Simple Steps</p>
              <p>Educate - Guidance - Planning</p>
            </li>
          </ul>
        </div>
      </div>
      
      <!--======= ICONS =========-->
      <div class="learngo bg_color_2">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h4 class="border">Learn<span>Go</span> Settings Features</h4>
              <p>It is a long established fact that a reader will be distracted by the readable content.</p>
              
              <!--======= ICONS =========-->
              <div class="features_services">
                <ul class="row">
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn"  data-wow-delay="200ms" data-wow-iteration="2"> <i class="ion-help-buoy bg_color_3"></i> </div>
                    <h4>What is UFG</h4>
                    <p>An organization of young adults who have set out to educate and guide the youth to a successful, prosperous financial future. UFG works with a purpose to help the current youth and upcoming generations. </p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceInbounceIn"  data-wow-delay="400ms" data-wow-iteration="2"> <i class="ion-ios7-people bg_color_3"></i> </div>
                    <h4>Who is UFG</h4>
                    <p>UFG was started by a young man in San Bernardino who witnessed a lot of his college peers wasting the money that they received from FAFSA and/or their parents. He noticed that they were spending this loaned money on Vegas trips, parties, clothes, and other things that were irrelevant to their future. Those poor financial habits continued as they advanced in their lives and careers. Now UFG is built and managed by young adults who know what it’s like in today’s world, being influenced by so many social and political factors. UFG members are college students, high school students, young parents, young men and women who have held mediocre jobs while they dreamt of long term careers. UFG is youth teaching youth, working together to rise up against the new slavery: Debt. </p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn" data-wow-delay="600ms" data-wow-iteration="2"> <i class="ion-hammer bg_color_3"></i> </div>
                    <h4>Why UFG</h4>
                    <p>UFG aims to fill in the missing piece of the educational framework that currently molds our youth. Where math class teaches you how to count money, UFG teaches how to use it as a tool in life. Where economics teaches you how money flows through society, UFG teaches you how manage your own cash flow without getting in debt. Where school teaches you how you can make money for the rest of your life, UFG teaches how to work with the money you make to build a successful future and be a positive influence to those around you.</p>
                  </li>
                  
                  <!--======= ICONS =========-->
                  <li class="col-md-6">
                    <div class="icon  wow bounceIn" data-wow-delay="800ms" data-wow-iteration="2s"> <i class="ion-filing bg_color_3"></i> </div>
                    <h4>How does UFG work</h4>
                    <p>UFG is prevention, not intervention. Our goal is to avoid debt and build a lasting future; to develop good financial habits before bad ones are instilled and harder to break. UFG works by raising young people to be prepared men and women of a successful financial future. UFG hosts seminars, providing this education, in high schools and in colleges.</p>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    
    <!--======= Perfect Analitic Lessons =========-->
    <section id="lesson" class="bg_color_3">
      <div class="container">
        <h2 class="wow tada" data-wow-delay="200ms">Perfect <span>Analitic Lessons</span></h2>
        <p class="wow tada" data-wow-delay="400ms">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dua has been...</p>
        <div id="owl-learn" class="owl-carousel owl-theme"> 
          
          <!--======= Slide 1 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="theme/images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconva has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
              <a href="#." class="btn">Check out our library </a> </div>
          </div>
          
          <!--======= SLIDE 2 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="theme/images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconva has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
              <a href="#." class="btn">Check out our library </a> </div>
          </div>
          
          <!--======= SLIDE 2 =========-->
          <div class="row item">
            <div class="col-md-6"> <img class="img-responsive" src="theme/images/browser_img.png" alt=""> </div>
            <div class="col-md-6 text_sec">
              <div class="icon"> <i class="ion-android-data"></i> </div>
              <h3>Perfect Lessons System</h3>
              <div class="clearfix"></div>
              <p class="padding20_top">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconva has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
              <a href="#." class="btn">Check out our library </a> </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--======= Video Section =========-->
    <section id="vedio">
      <div class="container">
        <h2 class="wow tada" data-wow-delay="200ms">Test Learn Videos Play!</h2>
        <hr>
        <p class="align-center wow tada" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eros ligula, pulvinar ut porta ac, pharetra a mi. Mauris sed elit nec lectus venenatis condimentum nec vitae tellus. </p>
        <!--<img class="img-responsive" src="theme/images/vedio_img.png" alt="">-->
        <div class="vedio_bg">
          <iframe src="http://player.vimeo.com/video/25541923?color=c9161f"></iframe>
        </div>
      </div>
    </section>
    
    <!--======= Classes Section popup=========-->
    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
      <div class="pop_up">
        <h3>Design Classes</h3>
        <p>Select your Classes - Test Videos - Desing Lesson Video</p>
        <ul>
          <li><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
          <li class="dark"><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
          <li><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
          <li><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
          <li><span><i class="ion-folder"></i> Lesson Titlename File - Lessons Programs.exe</span><span>File Size  :   1.52 GB </span><span>Download  Time  : 30 Munite</span> <span><a href="#."><i class="ion-arrow-down-b"></i></a></span> </li>
        </ul>
        <div class="photo"> <img src="theme/images/photo.png" alt="" >
          <h4>Kristina JUMPS</h4>
          <p>Math Teacher</p>
        </div>
        <div class="rating">
          <div class="star"><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i>
            <p>12314 Happy Student</p>
          </div>
        </div>
        <div class="details"> <i class="ion-folder"></i>
          <p>Description of the Courseras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis insectetur ac, vestibulum at eros.</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    
    <!--======= Vedio Section Popup=========-->
    <div id="small-vedio" class="zoom-anim-dialog mfp-hide">
      <div class="pop_up">
        <h3>Design Classes</h3>
        <p>Select your Classes - Test Videos - Desing Lesson Video</p>
        <iframe src="http://player.vimeo.com/video/25541923?color=c9161f"></iframe>
        <div class="padding10_all"></div>
        <div class="photo"> <img src="theme/images/photo.png" alt="" >
          <h4>Kristina JUMPS</h4>
          <p>Math Teacher</p>
        </div>
        <div class="rating">
          <div class="star"><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i>
            <p>12314 Happy Student</p>
          </div>
        </div>
        <div class="details"> <i class="ion-folder"></i>
          <p>Description of the Courseras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis insectetur ac, vestibulum at eros.</p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    

    <!-- Clients Section ===========================================-->
    <div id="clients">
      <div class="container">
        <div id="owl-clients" class="owl-carousel owl-theme">
          <div class="item"><a href="#."><img src="theme/images/c_img_1.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="theme/images/c_img_2.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="theme/images/c_img_3.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="theme/images/c_img_4.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="theme/images/c_img_1.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="theme/images/c_img_2.jpg" alt=""></a></div>
          <div class="item"><a href="#."><img src="theme/images/c_img_3.jpg" alt=""></a></div>
        </div>
      </div>
    </div>

    <section id="teachers">
      <h2 class="wow tada" data-wow-delay="200ms">Lesson Professional Teachers</h2>
      <hr>
      <div class="container">
        <p class="padding-5per align-center wow tada" data-wow-delay="400ms">You'll earn badges as you journey through our extensive library of courses. These badges are an indicator of what skills you currently possess and are viewable by anyone online.</p>
        <div id="owl-teacher">
          <div class="item">
            <div class="testi">
              <div class="avatar"><img src="theme/images/testi-img-1.png" alt=""></div>
              <h4>John DOES</h4>
              <hr>
              <p class="padding10_bottom">Computer Teacher</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              <ul class="social_icons">
                <li  class="facebook"><a href="#."><i class="ion-social-facebook"></i></a></li>
                <li class="googleplus"><a href="#."><i class="ion-social-googleplus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="item red">
            <div class="testi">
              <div class="avatar"><img src="theme/images/testi-img-2.png" alt=""></div>
              <h4>John DOES</h4>
              <hr>
              <p class="padding10_bottom">Computer Teacher</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              <div class="rating">
                <div class="icon"><i class="ion-android-contact"></i></div>
                <div class="star"><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i>
                  <p>12314 Happy Student</p>
                </div>
              </div>
              <ul class="social_icons">
                <li  class="facebook"><a href="#."><i class="ion-social-facebook"></i></a></li>
                <li class="googleplus"><a href="#."><i class="ion-social-googleplus"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="item">
            <div class="testi">
              <div class="avatar"><img src="theme/images/testi-img-3.png" alt=""></div>
              <h4>John DOES</h4>
              <hr>
              <p class="padding10_bottom">Computer Teacher</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              <ul class="social_icons">
                <li  class="facebook"><a href="#."><i class="ion-social-facebook"></i></a></li>
                <li class="googleplus"><a href="#."><i class="ion-social-googleplus"></i></a></li>
                <li class="linkedin"><a href="#."><i class="ion-social-linkedin"></i></a></li>7
            </div>
          </div>
          <div class="item red">
            <div class="testi">
              <div class="avatar"><img src="theme/images/testi-img.png" alt=""></div>
              <h4>John DOES</h4>
              <hr>
              <p class="padding10_bottom">Computer Teacher</p>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500 when an unknown printer.</p>
              <div class="rating">
                <div class="icon"><i class="ion-android-contact"></i></div>
                <div class="star"><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i><i class="ion-star"></i>
                  <p>12314 Happy Student</p>
                </div>
              </div>
              <ul class="social_icons">
                <li  class="facebook"><a href="#."><i class="ion-social-facebook"></i></a></li>
                <li class="googleplus"><a href="#."><i class="ion-social-googleplus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="testimonial" class="bg_color_4">
      <h2 class="wow tada" data-wow-delay="200ms">Your Feedback</h2>
      <hr>
      <div class="container">
        <p class="padding-5per align-center wow tada" data-wow-delay="400ms">You'll earn badges as you journey through our extensive library of courses. These badges are an indicator of what skills you currently possess and are viewable by anyone online.</p>
        <div id="owl-feed">
          <div class="feedback">
            <div class="avatar"> <img src="theme/images/testi-img-3.png" alt=""> </div>
            <h3>There are many variations of passages of lorem ipsum the lorem gorem merem.</h3>
            <h5>John DOE - Gamerging Studio</h5>
          </div>
          <div class="feedback">
            <div class="avatar"> <img src="theme/images/testi-img-2.png" alt=""> </div>
            <h3>There are many variations of passages of lorem ipsum the lorem gorem merem.</h3>
            <h5>John DOE - Gamerging Studio</h5>
          </div>
          <div class="feedback">
            <div class="avatar"> <img src="theme/images/testi-img-4.png" alt=""> </div>
            <h3>There are many variations of passages of lorem ipsum the lorem gorem merem.</h3>
            <h5>John DOE - Gamerging Studio</h5>
          </div>
          <div class="feedback">
            <div class="avatar"> <img src="theme/images/testi-img-1.png" alt=""> </div>
            <h3>There are many variations of passages of lorem ipsum the lorem gorem merem.</h3>
            <h5>John DOE - Gamerging Studio</h5>
          </div>
        </div>
      </div>
    </section>
    <div id="phone_number">
      <div class="container">
        <div class="number wow rollIn" data-wow-delay="200ms"> <i class="ion-iphone"></i> <span> 123-45676-789</span></div>
        <div class="address">
          <p>Call from Monday to Friday from <strong>12:00</strong>to <strong>14:00</strong> and from <strong> 14:00 </strong> to <strong>22:00</strong></p>
        </div>
      </div>
    </div>
    <section id="news">
      <div class="container">
        <div class="newsletter wow bounceIn" data-wow-delay="200ms">
          <div class="row">
            <div class="col-md-4">
              <h1>Your <span>Newsletter</span></h1>
            </div>
            <div class="col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="" value="E-mail address ..">
                <input name="submit" type="submit" value="SUBSCRIBE"/>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <p class="padding-5per align-center wow tada" data-wow-delay="400ms">You'll earn badges as you journey through our extensive library of courses. These badges are an indicator of what skills you currently possess and are viewable by anyone online.</p>
      </div>
    </section>
    @include('master/footer')
  </div>
@stop
