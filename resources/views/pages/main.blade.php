@extends('layouts.app')
@section('content')
@include('layouts.includes.carousel')
<div class="container-fluid">
      <!-- carousel -->

      <!-- START THE FEATURETTES -->
      <!-- under fold -->
      <section class="no-bg">
        <div class="row featurette">
          <div class="col-md-7 col-md-push-5">
            <div class="embed-responsive embed-responsive-16by9" id="yt-player">
              <iframe class="embed-responsive-item" width="100%" height="100%" src="https://www.youtube.com/embed/6555xkqgfpQ" allowfullscreen></iframe>  
            </div>
          </div>
          <div class="col-md-5 col-md-pull-7">
            <h2 class="featurette-heading">Watch the trailer. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Imagine the existence of a time machine that could instantly transport you 130,000 years into the past. But what exactly would you see when you take your first step outside the time machine? You would bear witness to the event to which we all thank our lives; The great confrontation between Homo Sapiens and Homo Erectus. The confrontation 130,000 years ago greatly influenced our destiny. In the end, we, the Homo Sapiens just barely made it. If we hadn't, the world would have looked entirely different.</p>
             <p><a class="btn btn-lg btn-warning" href="http://erectus.wiki/videos.html" target="_blank" role="button">Watch more videos &hellip;</a></p>
          </div>
        </div> 
      </section>
      	
      <!-- end under fold -->

      <!-- about -->
      <section class="has-bg">
        <div class="row featurette section-about ta-center">
          <div class="col-md-12">
            <h2 class="featurette-heading">What is Erectus The Game?</h2>
            <div class="text-container">
              <p class="lead">
              The game is about building and expanding your empire in a pre-historic world that existed 130,000 years ago. Back then Homo sapiens weren’t alone on this planet. Next to Homo sapiens there was also another type of humans, called Homo erectus. Where the development of the Homo sapiens was mainly technology driven, the development of the Homo erectus was based on a symbiosis with nature. The Homo erectus worked together with animals and lived on our planet for 1.5 million years.
              In the game, you play as a white, brown, black or yellow individual of the Homo sapiens. Together with thousands of other players, you explore the dynamics of working together, trading and forming alliances. The common enemy that you encounter in the game, is the Erectus people.
             </p>
            </div>
             <p><a class="btn btn-lg btn-warning" href="http://erectus.wiki/story.html" target="_blank" role="button">The Story of Erectus &hellip;</a></p>
          </div>        
        </div>
      </section>
      
      <!-- end about -->

      <!-- Fours characters -->
      <section class="no-bg">
        <h1 class="featurette-heading text-center">Characters</h1>
        <div class="row screenshots">
          <div class="col-xs-6 col-md-3 hover-shadow" data-toggle="modal" data-target="#modal-assura" id="assura-panel">
            <img class="img-character" src="{{ asset('assets/images/race-assura.png') }}" alt="">
            <h3 class="featurette-heading">Assura</h3>

          </div><!-- /.col-lg-3 -->
          <div class="col-xs-6 col-md-3 hover-shadow" data-toggle="modal" data-target="#modal-ikari" id="ikari-panel">
            <img class="img-character" src="{{ asset('assets/images/race-ikari.png') }}" alt="">
            <h3 class="featurette-heading">Ikari</h3>
          </div><!-- /.col-lg-3 -->
          <div class="col-xs-6 col-md-3 hover-shadow" data-toggle="modal" data-target="#modal-ngane" id="ngane-panel">
            <img class="img-character" src="{{ asset('assets/images/race-ngane.png') }}" alt="">
            <h3 class="featurette-heading">Ngane</h3>
          </div><!-- /.col-lg-3 -->
          <div class="col-xs-6 col-md-3 hover-shadow" data-toggle="modal" data-target="#modal-okiteng" id="okiteng-panel">
            <img class="img-character" src="{{ asset('assets/images/race-okiteng.png') }}" alt="">
            <h3 class="featurette-heading">Okiteng</h3>
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
      </section>
      
      <!-- end of characters -->

      <!-- rag -->
      <section class="has-bg" id="rag">
            <div class="row featurette section-rag">
              <div class="col-md-12">
                <h2 class="featurette-heading ta-center">Tournament Rules and Guidelines</h2>
                
                <div class="text-container">
                  <ol class="lead">
                    <li>
                      All contestants must be bona fide students of their respective institution and currently enrolled in the second semester of current academic year.
                    </li>
                    <li>
                      Each team shall consist of a minimum of five (5) to a maximum of twenty (20) members only. An institution can have more than one team.
                    </li>
                    <li>
                      Each member of a team should represent the same department.
                    </li>
                    <li>
                      The team should compose of unique members. If a team member is found to be registered to another team, the latter team will either find another member or they will not be able to register the tournament.
                    </li>
                    <li>
                      A team should have a team leader or coordinator.
                    </li>
                    <li>
                      To apply for registration, the student must approach their respective Dean’s office for application. A recommendation letter from the said office will follow which includes the names of all the participants per team to be passed to the organizers of this tournament.
                    </li>
                    <li>
                      Upon registration, the applicant will be given a beta key to access the official game website for the tournament. The website will post details and updates on the game tournament.
                    </li>
                    <li>
                      Each beta key is unique and will be given individually.
                    </li>
                    <li>
                      The tournament will start on November 21, 2016 and will cover whole Mindanao Region.
                    </li>
                    <li>
                      Deadline of registration of entries will be on November 7, 2016. Late entries will not be accommodated.
                    </li>
                  </ol>      
            </div>
      </section>      
      <!-- end rag -->

      <!-- prizes -->
      <section class="no-bg" id="prizes">
            <div class="row featurette section-prizes text-center">
              <div class="col-md-12">
                <h2 class="featurette-heading">Tournament Prizes</h2>              
              </div>
              <div class="col-md-12">
                <h3 class="text-muted">Awesome prizes will be revealed soon. You'll be surprised&hellip;</h3>
              </div>
            </div>
      </section>
      <!-- end prizes -->

      <!-- stats -->
        <section class="has-bg" id="statistics">
            
          <div class="row featurette section-statistics">
              <h2 class="featurette-heading ta-center">Statistics</h2>
              <div class="col-md-6">
               <div class="col-md-12 stat-panel hover-shadow text-center" data-url="{{ route('etg.best.players') }}">
                <h4>Top 10 Players</h4><span class="fa fa-list-ol stat-icon"></span>
               </div>
              </div>
              <div class="col-md-6" >
               <div class="col-md-12 stat-panel hover-shadow text-center" data-url="{{ route('etg.best.teams') }}">
                <h4>Top 10 Teams | Alliances</h4><span class="fa fa-list-ul stat-icon"></span>
               </div>
              </div>         
          </div>
      </section>
      <!-- end stats -->

      <!-- faq -->
      <section class="no-bg" id="faq">
        <div class="row featurette section-faq">
          <h2 class="featurette-heading text-center">FAQs</h2>
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h4 class="panel-title">
                    General Gameplay
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
               <div class="panel-body">
                      <ol>
                        <li>What is the game about?
                          <ul>
                            <li>The dramatic encounter between Homo sapiens and Homo erectus 130,000 years ago. As a player you play as the Homo sapiens</li>
                          </ul>
                        </li>
                        <li>What is the reward for winning?
                          <ul>
                            <li>Fame and Glory</li>
                          </ul>
                        </li>
                        <li>Is the game free to play?
                          <ul>
                            <li>Yes, the game can be played entirely for free. Premium boosts can be bought (optional) by players to improve various aspects of the game.</li>
                          </ul>
                        </li>
                        <li>Is there a tutorial or manual on how to play the game?
                          <ul>
                            <li>Yes. It can be found here. <a href="http://erectus.wiki/index.html" target="_blank">Erectus Wiki</a></li>
                          </ul>
                        </li>
                        <li>Can I play as the erectus?
                          <ul>
                            <li>No, the erectus are computer controlled</li>
                          </ul>
                        </li>
                      </ol>
                    </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h4 class="panel-title">
                    Registration
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
               <div class="panel-body">
                      <ol>
                        <li>I'm getting an error message telling me that my e-mail address is invalid, what do I do?
                          <ul>
                            <li>You will receive this message when trying to sign up using an e-mail address that is already in our database, please use a different e-mail address.</li>
                          </ul>
                        </li>
                        <li>I did not receive a confirmation email after signing up
                          <ul>
                            <li>You should receive one soon after the registration. Check your spam folder.</li>
                          </ul>
                        </li>
                        <li>Where can I register?
                          <ul>
                            <li>At the homepage! <a href="http://www.erectus.world" target="_blank">Click here</a></li>
                            <li>If you are a resident of Brunei, Indonesia, Malaysia or Philippines, you can also play on www.erectus.asia and join the tournament.</li>
                          </ul>
                        </li>
                      </ol>
                    </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h4 class="panel-title">            
                    Login                
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                        <ol>
                          <li>I can't login with Facebook.
                            <ul>
                              <li>You have to have a Facebook account in order to be able to log in using Facebook. Make sure to have your Facebook login details at hand.</li>
                            </ul>
                          </li>
                          <li>I can't login with Google.
                            <ul>
                              <li>You have to have a Google account in order to be able to log in using Google. Make sure to have your Google login details at hand.</li>
                            </ul>
                          </li>
                          <li>I forgot my password, where can I reset it?
                            <ul>
                              <li>You can reset your password using the “Forgot password” button on the login screen.</li>
                            </ul>
                          </li>
                        </ol>
                      </div>
              </div>
            </div>
          </div>
        </div>
        
      </section>
      <!-- end faq -->
</div><!-- /.container -->

<!-- modal -->
 @include('layouts.includes.modals')
<!-- end modal -->
@endsection