
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>TheJobs - Add resume</title>

    <!-- Styles -->
    <link href="demand/css/app.min.css" rel="stylesheet">
    <link href="demand/vendors/summernote/summernote.css" rel="stylesheet">
    <link href="demand/css/custom.css" rel="stylesheet">
    <!-- date piker cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

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
        <div class="pull-right">

          <div class="dropdown user-account">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">
              <img src="demand/img/logo-envato.png" alt="avatar">
            </a>

            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="user-login.html">Login</a></li>
              <li><a href="user-register.html">Register</a></li>
              <li><a href="user-forget-pass.html">Forget pass</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </div>

        </div>
        <!-- END User account -->

        <!-- Navigation menu -->
        <ul class="nav-menu">
          <li>
            <a href="index.html">Home</a>
            <ul>
              <li><a href="index.html">Version 1</a></li>
              <li><a href="index-2.html">Version 2</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Position</a>
            <ul>
              <li><a href="job-list-1.html">Browse jobs - 1</a></li>
              <li><a href="job-list-2.html">Browse jobs - 2</a></li>
              <li><a href="job-list-3.html">Browse jobs - 3</a></li>
              <li><a href="job-detail.html">Job detail</a></li>
              <li><a href="job-apply.html">Apply for job</a></li>
              <li><a href="job-add.html">Post a job</a></li>
              <li><a href="job-manage.html">Manage jobs</a></li>
              <li><a href="job-candidates.html">Candidates</a></li>
            </ul>
          </li>
          <li>
            <a class="active" href="#">Resume</a>
            <ul>
              <li><a href="resume-list.html">Browse resumes</a></li>
              <li><a href="resume-detail.html">Resume detail</a></li>
              <li><a class="active" href="resume-add.html">Create a resume</a></li>
              <li><a href="resume-manage.html">Manage resumes</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Company</a>
            <ul>
              <li><a href="company-list.html">Browse companies</a></li>
              <li><a href="company-detail.html">Company detail</a></li>
              <li><a href="company-add.html">Create a company</a></li>
              <li><a href="company-manage.html">Manage companies</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul>
              <li><a href="page-blog.html">Blog</a></li>
              <li><a href="page-post.html">Blog-post</a></li>
              <li><a href="page-about.html">About</a></li>
              <li><a href="page-contact.html">Contact</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-typography.html">Typography</a></li>
              <li><a href="page-ui-elements.html">UI elements</a></li>
            </ul>
          </li>
        </ul>
        <!-- END Navigation menu -->

      </div>
    </nav>
    <!-- END Navigation bar -->

    <form action="{{route('profile')}}" method="post">
        @csrf
      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Add your resume</h1>
          <p class="lead text-center">Create your resume and put it online.</p>
        </div>

        <div class="container">

          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="form-group">
                <input type="file" class="dropify" data-default-file="demand/img/avatar.jpg">
                <span class="help-block">Photo</span>
              </div>
            </div>

            <div class="col-xs-12 col-sm-8">
              <label for="contrat">Votre Votre Cv *</label>
              <div class="form-group">
                <input type="file" name="cv" class="form-control input-lg">
              </div>
              
              <div class="form-group">
                <label for="contrat">Titre du poste désiré (Exemple Front-end developer)*</label>
                <input type="text" name="post" class="form-control">
              </div>

                <div class="form-group">
                  <label for="contrat">Type d'emploi désiré *</label>
                  <select class="form-control" name="contrat" id="contrat">
                    <option>CDI</option>
                    <option>CDD</option>
                    <option>SIPV</option>
                    <option>Contrat al karama</option>
                    <option>Freelance</option>
                     <option>Saisonnier</option>
                  </select>
              </div>

              <div class="form-group">
                  <label for="category">Catégories *</label>
                  <select class="form-control" name="category" id="category" multiple>
                    <option>Informatique</option>
                    <option>Centres d'appels</option>
                    <option>Industrie</option>
                    <option>Ingenierie</option>
                    <option>Technologie de l'information</option>
                     <option>Commerce</option>
                  </select>
              </div>

              <div class="form-group">
                <label for="category">Compétences *</label>
                <textarea class="form-control" name="competences" rows="3" ></textarea>
              </div>

              <hr class="hr-lg">

              <h6>Informations de base</h6>
              <div class="row">

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" class="form-control" name="adresse" placeholder="adresse *">
                  </div>
                </div>
               

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="tel" class="form-control" placeholder="Tel *">
                  </div>
                </div>
                 <h6>Information Suplémentaire</h6>
                <div class="form-group col-xs-12 col-sm-12 col-lg-12">
                <div class="form-check">

                <input class="form-check-input" name="permis" type="checkbox"  id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                 Permis de conduire
                </label>

               </div>
               </div>

               <div class="form-group col-xs-12 col-sm-12 col-lg-12">
            <div class="form-check">

            <input class="form-check-input" name="motorise" type="checkbox"  id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
              Motorisé
            </label>

           </div>
           </div>
          </div>

            

 

            </div>
          </div>


        </div>
      </header>
      <!-- END Page header -->


      <!-- Main container -->
      <main>

        <!-- Education -->
        <section class=" bg-alt">
          <div class="container">

            <header class="section-header">

              <h2>FORMATIONS</h2>
            </header>
            
            <div class="row">

              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">


                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                           <label for="formation">Diplôme ou spécialité</label>
                          <input type="text" name="diplome[]" class="form-control">
                        </div>


                        <div class="form-group">
                          <label for="formation">Université ou établissement</label>
                          <input type="text" name="universite[]" class="form-control">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">De</span>
                            <input type="text"  name="from[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj">
                            <span class="input-group-addon">A</span>
                            <input type="text" name="to[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj">
                          </div>
                        </div>

                         <div class="form-group">
                          <textarea class="form-control" name="desc_form[]" rows="3" placeholder="Short description"></textarea>
                        </div>


                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 duplicateable-content">
                <div class="item-block">
                  <div class="item-form">
  
                    <button class="btn btn-danger btn-float btn-remove"><i class="ti-close"></i></button>

                    <div class="row">

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                           <label for="formation">Diplôme ou spécialité</label>
                          <input type="text" name="diplome[]" class="form-control">
                        </div>

                        <div class="form-group">
                          <label for="formation">Université ou établissement</label>
                          <input type="text" name="universite[]" class="form-control">
                        </div>

                         <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">De</span>
                            <input type="text" name="from[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj">
                            <span class="input-group-addon">A</span>
                            <input type="text" name="to[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj">
                          </div>
                        </div>

                        <div class="form-group">
                          <textarea class="form-control" name="desc_form[]" rows="3" placeholder="Short description"></textarea>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-xs-12 text-center">
                <br>
                <button class="btn btn-primary btn-duplicator">Ajouter Formation</button>
              </div>


            </div>
          </div>
        </section>
        <!-- END Education -->


        <!-- Work Experience -->
        <section>
          <div class="container">
            <header class="section-header">
              <h2>EXPÉRIENCES PROFESSIONNELLES - STAGES</h2>
            </header>
            
            <div class="row ">

              <div class="col-xs-12 item-form-exp">
                <div class="item-block">
                  <div class="item-form">
  
                    

                    <div class="row">
                      

                      <div class="col-xs-12 col-sm-8">
                        <div class="form-group">
                          <label>Entreprise</label>
                          <input type="text" name="entreprise[]" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Position</label>
                          <input type="text" name="position[]" class="form-control">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">De</span>
                            <input type="text" name="from_post[]" class="form-control date_form_mon" 
                            placeholder="AAAA-mm-jj">
                            <span class="input-group-addon">A</span>
                            <input type="text" name="to_post[]" class="form-control date_form_mon" 
                            placeholder="AAAA-mm-jj">
                          </div>
                        </div>

                      </div>

                      <div class="col-xs-12">
                        <div class="form-group">
                          <div class="form-group">
                          <textarea class="form-control" name="desc_post[]" rows="3" placeholder="Short description"></textarea>
                        </div>
                        </div>
                      </div>
                    </div>

                </div>
                </div>
              </div>

              

              <div class="col-xs-12 text-center">
                <br>
                <button class="btn btn-primary btn-duplicator-ex">Ajouter Expérience</button>
              </div>


            </div>

          </div>
        </section>
        <!-- END Work Experience -->






        <!-- Submit -->
        <section class=" bg-img" style="background-image: url(demand/img/bg-facts.jpg);">
          <div class="container">
            

            <p class="text-center"><button type="submit" class="btn btn-success btn-xl btn-round">Submit your resume</button></p>

          </div>
        </section>
        <!-- END Submit -->
      </main>
      <!-- END Main container -->

    </form>

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

    <!-- Scripts -->
    <script src="demand/js/app.min.js"></script>
    <script src="demand/vendors/summernote/summernote.min.js"></script>
    <script src="demand/js/custom.js"></script>
    <!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
  </body>
</html>



<script>

  /****************** duplicate experience *******************************/
  $('.btn-duplicator-ex').click(function(Event){


       Event.preventDefault();
       
       

       
  
  $('.item-form-exp').append('<div class="item-block"><button class="test-center sup">Supprimer</button><div class="item-form "><div class="row"><div class="col-xs-12 col-sm-8"><div class="form-group"><label>Entreprise</label><input type="text" name="entreprise[]" class="form-control"></div><div class="form-group"><label>Position</label><input type="text" name="position[]" class="form-control"></div><div class="form-group"><div class="input-group"><span class="input-group-addon">De</span><input type="text" name="from_post[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj"><span class="input-group-addon">A</span><input type="text" name="to_post[]" class="form-control date_form_mon" placeholder="AAAA-mm-jj"></div></div></div><div class="col-xs-12"><div class="form-group"><div class="form-group"><textarea class="form-control" name="desc_post[]" rows="3" placeholder="Short description"></textarea></div></div> </div></div></div></div>');

    var date_input=$('.date_form_mon'); //our date input has the name "date"
       
      var options={
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        language: "fr"
      };
      date_input.datepicker(options);




  });

/****** add event listner pour supprimer un experience ********/
    $(document).on('click', '.sup',function(event){

       
        event.preventDefault();


       $(this).parent().remove();

    });


/******* initialisation data picker hors chargement de la page *******/
    $(document).ready(function(){

         
      var date_input=$('.date_form_mon'); //our date input has the name "date"
      
      var options={
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
        language: "fr"
      };
      date_input.datepicker(options);
    })
</script>