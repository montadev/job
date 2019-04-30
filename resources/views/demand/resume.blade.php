
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Resume detail</title>

    <!-- Styles -->
    <link href="demand/css/app.min.css" rel="stylesheet">
    <link href="demand/css/custom.css" rel="stylesheet">
    <link href="demand/css/customjob.css" rel="stylesheet">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="demand/img/favicon.ico">
  </head>

  <body class="nav-on-header smart-nav">

    <!-- Navigation bar -->
    <nav class="navbar">
      <div class="container">

        <!-- Logo -->
        <div class="pull-left">
          <a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

          <div class="logo-wrapper">
            <a class="logo" href="index.html"><img src="demand/img/logo.png" alt="logo"></a>
            <a class="logo-alt" href="index.html"><img src="demand/img/logo-alt.png" alt="logo-alt"></a>
          </div>

        </div>
        <!-- END Logo -->

        <!-- User account -->
        <div class="pull-right user-login">
          <a class="btn btn-sm btn-primary" href="user-login.html">Login</a> or <a href="user-register.html">register</a>
        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a href="{{route('dashbord')}}">Dashbord</a>

          </li>
          <li>
            <a href="{{route('resume')}}">Resume</a>

          </li>
          <li>
            <a class="active" href="#">Resume</a>

          </li>
          <li>
            <a href="#">Company</a>

          </li>
          <li>
            <a href="#">Pages</a>

          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->


    <!-- Page header -->
    <header class="page-header bg-img" style="background-color: #375dcd;">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
             @if($user->profile!=NULL)
      <img src="{{asset('demand/profile_img')}}/{{$user->profile->photo}}" alt="">
             @else
      <img src="{{asset('demand/profile_img/user_profile_anynoms.png')}}" alt="">
             @endif
          </div>

          <div class="col-xs-12 col-sm-8 header-detail">
            <div class="hgroup">
              <h1>{{$user->name}}</h1>
               @if($user->profile!=NULL)
              <h3>{{$user->profile->post}}</h3>
               @else
               <h3>À compléter</h3>
               @endif
            </div>
            <hr>
             @if($user->profile!=NULL)
            <p class="lead">{{$user->profile->description}}</p>
            @else
             <p class="lead complete" >À Compléter</p>
            @endif

            <ul class="details cols-2">
              <li>
                <i class="fa fa-map-marker"></i>
                @if($user->profile!=NULL)
                <span>{{$user->profile->adress}}</span>
                @else
               <span class="complete">À Compléter</span>  
                @endif
              </li>

              <li>
                <i class="fa fa-car"></i>

                @if($user->profile!=NULL)
                 @if($user->profile->motorise!=NULL)
                <span>Oui</span>
                  @else
                  <span>Non</span>
                  @endif

                  @else
                  <span class="complete">À Compléter</span>
                  @endif
              </li>

              <li>
                <i class="fa fa-book" aria-hidden="true"></i>
                @if($user->profile!=NULL)
                 @if($user->profile->permis!=NULL)
                <span>Oui</span>
                 @else
                  <span>Non</span>
                  @endif
                    @else
                  <span class="complete">À Compléter</span>
                  @endif
              </li>

              <li>
                <i class="fa fa-phone"></i>
                @if($user->profile!=NULL)
                <span>{{$user->profile->tel}}</span>
                 @else
                  <span class="complete">À Compléter</span>
                  @endif
              </li>

              
            </ul>

            <div class="tag-list">

               <h6><strong>Competences:</strong></h6>
                @if($user->profile!=NULL) 
              <span>{{$user->profile->competence}}</span>
               @else
                  <span class="complete" style="color:#ea5959;font-weight: bold">À Compléter</span>
              @endif
              
            </div>
          </div>
        </div>

        <div class="button-group">
         

          <div class="action-buttons">
            <a class="btn btn-gray" href="#">Download CV</a>
            <a class="btn btn-success" data-toggle="modal" data-target="#modal-contact" href="#">Contact me</a>
          </div>
        </div>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>


      <!-- Education -->
      <section>
        <div class="container">

          <header class="section-header">
         
            <h2>Formations</h2>
          </header>
          
          <div class="row">
           
          @if($user->profile!=NULL)


             @foreach($user->profile->formations as $formation)
            <div class="col-lg-12  block-education">
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-mit.png" alt="">
                  <div class="hgroup">
                    @if($formation->diplome!=NULL)
                    <h4>{{$formation->diplome}}</h4>
                    @endif
                    @if($formation->universite!=NULL)
                    <h5>{{$formation->universite}}</h5>
                    @endif
                  </div>

                  @if($formation->date_debut!=NULL)

                  <h6 class="time">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    {{$formation->date_debut->format('d F Y')}}

                  </h6>
                  @endif

                  @if($formation->date_debut!=NULL)
                  <h6 class="time">

                    <i class="fa fa-calendar" aria-hidden="true"></i>

                    {{$formation->date_fin->format('d F Y')}}
                  </h6>
                  @endif
                </header>
                <div class="item-body">
                  @if($formation->description!=NULL)
                  <p>{{$formation->description}}</p>
                  @endif
                </div>
              </div>
            </div>
              
              @endforeach

              @else
               <h5 class="text-center formation-expercience">Vous n'avez pas encore saisir aucune Formation</h5>

              @endif
          </div>

        </div>
      </section>
      <!-- END Education -->


      <!-- Work Experience -->
      <section class="bg-alt">
        <div class="container">
          <header class="section-header">
            
            <h2>Expériences professionnelles - Stages</h2>
          </header>
          
          <div class="row">

            <!-- Work item -->
           @if($user->profile!=NULL)


             @foreach($user->profile->experiences as $experience) 
            <div class="col-lg-12 block-experience">
              
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                     @if($experience->position!=NULL)
                    <h4>{{$experience->position}}</h4>
                    @endif
                    @if($experience->entreprise!=NULL)
                    <h5>{{$experience->entreprise}}</h5>
                    @endif
                  </div>
                    @if($experience->date_debut!=NULL)
                  <h6 class="time">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    {{$experience->date_debut->format('d F Y')}}
                    
                  </h6>
                   @endif
                   @if($experience->date_debut!=NULL)
                  <h6 class="time">

                    <i class="fa fa-calendar" aria-hidden="true"></i>

                    {{$experience->date_fin->format('d F Y')}}
                  </h6>
                   @endif
                </header>
                <div class="item-body">
                  @if($experience->description!=NULL)
                  {{$experience->description}}
                  @endif
                 
                </div>
              </div>

            </div>
                    @endforeach
                    @else
                    <h5 class="text-center formation-expercience">Vous n'avez pas encore saisir aucune Expérience</h5>
                    @endif
            <!-- END Work item -->


           
            <!-- END Work item -->


          </div>

        </div>
      </section>
      <!-- END Work Experience -->


      
      <!-- END Skills -->


    </main>
    <!-- END Main container -->


    <!-- Site footer -->
    <footer class="site-footer">

      <!-- Top section -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">An employment website is a web site that deals specifically with employment or careers. Many employment websites are designed to allow employers to post job requirements for a position to be filled and are commonly known as job boards. Other employment sites offer employer reviews, career and job-search advice, and describe different job descriptions or employers. Through a job website a prospective employee can locate and fill out a job application.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Company</h6>
            <ul class="footer-links">
              <li><a href="page-about.html">About us</a></li>
              <li><a href="page-typography.html">How it works</a></li>
              <li><a href="page-faq.html">Help center</a></li>
              <li><a href="page-typography.html">Privacy policy</a></li>
              <li><a href="page-contact.html">Contact us</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Trendeing jobs</h6>
            <ul class="footer-links">
              <li><a href="job-list.html">Front-end developer</a></li>
              <li><a href="job-list.html">Android developer</a></li>
              <li><a href="job-list.html">iOS developer</a></li>
              <li><a href="job-list.html">Full stack developer</a></li>
              <li><a href="job-list.html">Project administrator</a></li>
            </ul>
          </div>
        </div>

        <hr>
      </div>
      <!-- END Top section -->

      <!-- Bottom section -->
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyrights &copy; 2016 All Rights Reserved by <a href="http://themeforest.net/user/shamsoft">ShaMSofT</a>.</p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- END Bottom section -->

    </footer>
    <!-- END Site footer -->


    <!-- Back to top button -->
    <a id="scroll-up" href="#"><i class="ti-angle-up"></i></a>
    <!-- END Back to top button -->


    <!-- Contact modal -->
    <div class="modal fade" id="modal-contact" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="myModalLabel">Send message</h5>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="subject" class="control-label">Subject</label>
                <input type="text" class="form-control" id="subject">
              </div>
              <div class="form-group">
                <label for="message-text" class="control-label">Message</label>
                <textarea class="form-control" id="message-text"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Scripts -->
    <script src="demand/js/app.min.js"></script>
    <script src="demand/js/custom.js"></script>

  </body>
</html>
