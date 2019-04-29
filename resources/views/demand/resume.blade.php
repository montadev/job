
    <!-- Styles -->
   

    <!-- Fonts -->
    

  

    <!-- Navigation bar -->

    <!-- END Navigation bar -->


    <!-- Page header -->
   
      
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <img src="{{asset('demand/profile_img')}}/{{$user->profile->photo}}" alt="">
          </div>

          <div class="col-xs-12 col-sm-8 header-detail">
            <div class="hgroup">
              <h1>{{$user->name}}</h1>
              <h3>{{$user->profile->post}}</h3>
            </div>
            <hr>
            <p class="lead">{{$user->profile->description}}</p>

            <ul class="details cols-2">
              <li>
                <i class="fa fa-map-marker"></i>
                <span>{{$user->profile->adress}}</span>
              </li>

              <li>
                <i class="fa fa-car"></i>
                 @if($user->profile->motorise!=NULL)
                <span>Oui</span>
                  @else
                  <span>Non</span>
                  @endif
              </li>

              <li>
                <i class="fa fa-id-card"></i>
                 @if($user->profile->permis!=NULL)
                <span>Oui</span>
                 @else
                  <span>Non</span>
                  @endif
              </li>

              <li>
                <i class="fa fa-phone"></i>
                <span>{{$user->profile->tel}}</span>
              </li>

              
            </ul>

            <div class="tag-list">

               <h6><strong>Competences:</strong></h6> 
              <span>{{$user->profile->competence}}</span>
              
            </div>
          </div>
        </div>

        <div class="button-group">
          

          <div class="action-buttons">
            <a class="btn btn-gray" href="#">Download CV</a>
            <a class="btn btn-success" data-toggle="modal" data-target="#modal-contact" href="#">Contact me</a>
          </div>
        </div>
      
 
    <!-- END Page header -->


    <!-- Main container -->
    <main>


      <!-- Education -->
      <section id="education">
        <div class="container">

          <header class="section-header">
           
            <h2>Education</h2>
          </header>
          
          <div class="row">


            @foreach($user->profile->formations as $formation)
            <div class="col-lg-12  block-education">
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-mit.png" alt="">
                  <div class="hgroup">
                    <h4>{{$formation->diplome}}</h4>
                    <h5>{{$formation->universite}}</h5>
                  </div>
                  <h6 class="time">2012 - 2014</h6>
                </header>
                <div class="item-body">
                  <p>{{$formation->description}}</p>
                </div>
              </div>
            </div>
              
              @endforeach
            
          </div>

        </div>
      </section>
      <!-- END Education -->


      <!-- Work Experience -->
      <section class="bg-alt" id="experience">
        <div class="container">
          <header class="section-header">
            
            <h2>Work Experience</h2>
          </header>
          
          <div class="row">

            <!-- Work item -->

            @foreach($user->profile->experiences as $experience) 
            <div class="col-lg-12 block-experience">
              
              <div class="item-block">
                <header>
                  <img src="assets/img/logo-google.jpg" alt="">
                  <div class="hgroup">
                    <h4>{{$experience->position}}</h4>
                    <h5>{{$experience->entreprise}}</h5>
                  </div>
                  <h6 class="time">Jan 2016 - Present</h6>
                </header>
                <div class="item-body">
                  <p>Responsibilities:</p>
                  {{$experience->description}}
                 
                </div>
              </div>

            </div>
                    @endforeach
           
            <!-- END Work item -->





          </div>

        </div>
      </section>
      <!-- END Work Experience -->


      <!-- Skills -->
      <section>
        <div class="container">
          <header class="section-header">
            <span>Expertise Areas</span>
            <h2>Skills</h2>
          </header>
          
          <br>
          <ul class="skills cols-3">
            <li>
              <div>
                <span class="skill-name">HTML</span>
                <span class="skill-value">100%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 100%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">CSS</span>
                <span class="skill-value">95%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 95%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Javascript</span>
                <span class="skill-value">80%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 80%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Photoshop</span>
                <span class="skill-value">60%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 60%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">ReactJS</span>
                <span class="skill-value">70%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 70%;"></div>
              </div>
            </li>

            <li>
              <div>
                <span class="skill-name">Team work</span>
                <span class="skill-value">90%</span>
              </div>
              <div class="progress">
                <div class="progress-bar" style="width: 90%;"></div>
              </div>
            </li>
          </ul>

        </div>
      </section>
      <!-- END Skills -->


    </main>
    <!-- END Main container -->





    <!-- Back to top button -->
 
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
   

  