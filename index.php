<?php
   require "vendor/autoload.php";

   class SendEmail{

      public static function SendMail($to, $content){
         $key = "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";

         $email = new \SendGrid\Mail\Mail();
         $email->setFrom($to, "Paki");
         $email->setSubject("You got mail");
         $email->addTo("nasa.nase72@gmail.com");
         $email->addContent("text/plain", $content);

         $sendgrid = new \SendGrid($key);

         try{
               $response = $sendgrid->send($email);
               return $response;
         }
         catch (Exception $e){
               echo "Error: ".$e->getMessage();
               return false;
         }
      }
   }

   if(isset($_POST['submit'])){
      SendEmail::SendMail($_POST['email'], $_POST['message']);
   }
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name='description' content="Junior Front End Developer with big goals">
      <title>Nikola Pavlovic</title>
      <!-- CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <!-- Favicon -->
      <link rel="shortcut icon" href="media/android-chrome-192x192.png" type="image/x-icon">
   </head>

   <body>
      <div id='preloader'>
         <div id='preloader__loading'>LOADING</div>
      </div>

      <!-- Null Section -->
      <section class='section-0'>
         <div class='section-0__overlay'></div>
         <video src='media/gg.mp4' autoplay loop muted></video>
         <span class='section-0__paki'>paki</span>
         <div class='section-0__quote'>
            <div class='glitch' data-text="強烈なノスタルジ" title='Macintosh Plus 420 - Intense Nostalgia'>強烈なノスタルジ</div>
         </div>
         <div class='section-0__text'>
            <p>boy with eastern aesthetics</p>
            <p>and western taste in music</p>
            <p>Nikola <span style='color: crimson'>paki</span> Pavlovic</p>
            <p style='color: crimson'>front-end developer</p>
         </div>
         <span class='section-0__line'></span>
         <div class='section-0__social'>
            <h6><a href='https://github.com/pakiZBRG' target="_blank">GitHub</a></h6>
            <h6><a href='https://www.linkedin.com/in/nikola-pavlovic-621562172/' target="_blank">LinkedIn</a></h6>
            <h6><a href='RESUME.pdf' download>Resume</a></h6>
         </div>
      </section>

      <!-- First Section -->
      <section class='section-1' id='trigger1'>
         <div class='section-1__overlay'>
            <div class='section-1__name' id='name1'>
               <div class='glitch' data-text='skills'>
                  skills
               </div>
            </div>
         </div>
         <span class='section-1__paki' id='up1'>paki</span>

         <section class='section-1__flex'>
            <div class='section-1__intro'>
               <h2>12 months of self taught</h2>
            </div>
            
            <div class='section-1__btns'>
               <p class='section-1__btn selected' id='front'>Frond End</p>
               <p class='section-1__btn' id='back'>Back End</p>
            </div>
            <section class='section-1__front'>
                <!-- HTML5 -->
               <article class='section-1__card'>
                  <img src='icons/html5.svg' alt='html5'> 
                  <div class='section-1__card--title'>HTML5</div>
               </article>

               <!-- CSS3 -->
               <article class='section-1__card'>
                  <img src='icons/css3.png' alt='css3'> 
                  <div class='section-1__card--title'>CSS3</div>
               </article>

               <!-- BOOTSTRAP4 -->
               <article class='section-1__card'>
                  <img src='icons/bootstrap.svg' alt='bootstrap'> 
                  <div class='section-1__card--title'>Bootstrap4</div>
               </article>

               <!-- SCSS -->
               <article class='section-1__card'>
                  <img src='icons/sass.svg' alt='sass'> 
                  <div class='section-1__card--title'>SCSS</div>
               </article>

               <!-- JAVASCRIPT -->
               <article class='section-1__card'>
                  <img src='icons/js.jpg' alt='javascript'> 
                  <div class='section-1__card--title'>JavaScript</div>
               </article>

               <!-- REACT -->
               <article class='section-1__card'>
                  <img src='icons/react.png' alt='react'> 
                  <div class='section-1__card--title'>React</div>
               </article>

               <!-- ASYNCHRONOUS -->
               <article class='section-1__card'>
                  <img src='icons/ajax.png' alt='ajax'> 
                  <div class='section-1__card--title'>Asynchronous</div>
               </article>

               <!-- JSON -->
               <article class='section-1__card'>
                  <img src='icons/json.png' alt='json'> 
                  <div class='section-1__card--title'>JSON</div>
               </article>

               <!-- JQUERY -->
               <article class='section-1__card'>
                  <img src='icons/jquery.gif' alt='jquery'> 
                  <div class='section-1__card--title'>jQuery</div>
               </article>
               
               <!-- GITHUB -->
               <article class='section-1__card'>
                  <img src='icons/github.png' alt='github'> 
                  <div class='section-1__card--title'>GitHub</div>
               </article>
            </section>
           
            <section class='section-1__back'>
               <!-- SQL -->
               <article class='section-1__card'>
                  <img src='icons/sql.png' alt='sql'> 
                  <div class='section-1__card--title'>SQL</div>
               </article>

               <!-- PHP -->
               <article class='section-1__card'>
                  <img src='icons/php.jpg' alt='php'> 
                  <div class='section-1__card--title'>PHP</div>
               </article>

               <!-- Node.js -->
               <article class='section-1__card'>
                  <img src='icons/nodejs.png' alt='nodejs'> 
                  <div class='section-1__card--title'>Node.js</div>
               </article>

               <!-- Express -->
               <article class='section-1__card'>
                  <img src='icons/express.png' alt='express'> 
                  <div class='section-1__card--title'>Express</div>
               </article>

               <!-- JWT -->
               <article class='section-1__card'>
                  <img src='icons/jwt.svg' alt='jwt'> 
                  <div class='section-1__card--title'>JWT</div>
               </article>
            </section>
         </section>
         <span class='section-1__line'></span>
      </section>

      <!-- Second Section -->
      <section class='section-2' id='trigger2'>
         <div class='section-2__overlay'>
            <div class='section-2__name' id='name2'>
               <div class='glitch' data-text='work'>
                  work
               </div>
            </div>
         </div>
         <span class='section-2__paki' id='up2'>paki</span>

         <div class='section-2__title'>
             <h3>My Bets Projects and Works</h3>
             <h4>Click on image to preview the website</h4>
         </div>
     
         <section class='section-2__grid'>
            <article class='section-2__grid-card'>
               <a href='https://customusicplayer.netlify.app/' target='_blank'>
                  <img src='media/Screenshot_1_1.jpg' alt='music-project'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Custom Music Player</h4>
                  <p>Enjoy in my (not yours) favorite music</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/html5.svg' alt='html5'>
                  <img src='icons/css3.png' alt='css3'>
                  <img src='icons/js.jpg' alt='js'>
                  <img src='icons/jquery.gif' alt='jquery'>
               </div>
            </article>

            <!-- Add To-Do -->
            <article class='section-2__grid-card'>
               <a href="https://addtodo.netlify.app/" target="_blank">
                  <img src='media/Screenshot_2_1.jpg' alt='add-todo'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Add To-Do</h4>
                  <p>Track your activites and daily duties</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/html5.svg' alt='html5'>
                  <img src='icons/css3.png' alt='css3'>
                  <img src='icons/js.jpg' alt='js'>
               </div>
            </article>

            <!-- Covid19 Tracker -->
            <article class='section-2__grid-card'>
               <a href="https://trackercorona.netlify.app/" target="_blank">
                  <img src='media/Screenshot_3_1.jpg' alt='covid_19-tracker'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Covid-19 Tracker</h4>
                  <p>View all information about covid19 outbreak globally or per country</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/react.png' alt='react'>
                  <img src='icons/reactHooks.png' alt='hooks'>
                  <img src='icons/styled.png' alt='styled'>
                  <img src='icons/ts.png' alt='ts'>
               </div>
            </article>

            <!-- Weather Forcast -->
            <article class='section-2__grid-card'>
               <a href="https://weather-information.netlify.app/" target="_blank">
                  <img src='media/Screenshot_4_1.jpg' alt='weather-forcast'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Weather Information</h4>
                  <p>View current and up to 5 days forcast on every 3 hours</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/react.png' alt='react'>
                  <img src='icons/reactHooks.png' alt='hooks'>
                  <img src='icons/sass.svg' alt='sass'>
                  <img src='icons/axios.png' alt='axios'>
               </div>
            </article>

            <!-- Makelele Car Shop -->
            <article class='section-2__grid-card'>
               <a href="https://makelelecarshop.netlify.app/" target="_blank">
                  <img src='media/Screenshot_5_1.jpg' alt='car-shop'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Makelele Car Shop</h4>
                  <p>Buy and see your favorite cars. <i>*Hits the car's roof*</i></p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/react.png' alt='react'>
                  <img src='icons/reactHooks.png' alt='hooks'>
                  <img src='icons/ts.png' alt='ts'>
               </div>
            </article>

            <!-- Paki's Resort -->
            <article class='section-2__grid-card'>
               <a href="https://pakiresort.netlify.app/" target="_blank">
                  <img src='media/Screenshot_6_1.jpg' alt='hotel-rooms'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Paki's Resort</h4>
                  <p>Reserve your hotel room with splendid extravangance that we offer</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/react.png' alt='react'>
                  <img src='icons/reactHooks.png' alt='hooks'>
                  <img src='icons/reactRouter.png' alt='router'>
                  <img src='icons/styled.png' alt='styled'>
               </div>
            </article>

            <!-- Mobile Store -->
            <article class='section-2__grid-card'>
               <a href="https://store-mobile.netlify.app/" target="_blank">
                  <img src='media/Screenshot_7_1.jpg' alt='mobile-store'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Mobile Store</h4>
                  <p>In need for a new phone? Visit our shop for brand new models</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/react.png' alt='react'>
                  <img src='icons/reactRouter.png' alt='router'>
                  <img src='icons/ts.png' alt='ts'>
               </div>
            </article>

            <!-- Exercise Italian -->
            <article class='section-2__grid-card'>
               <a href="https://exerciseitalian.netlify.app/" target="_blank">
                  <img src='media/Screenshot_8_1.jpg' alt='exercise-italian'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Exercise Italian</h4>
                  <p>Learn and improve with this new Italian app</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/html5.svg' alt='html5'>
                  <img src='icons/css3.png' alt='css3'>
                  <img src='icons/js.jpg' alt='js'>
                  <img src='icons/json.png' alt='json'>
               </div>
            </article>

            <!-- Paki's Movie -->
            <article class='section-2__grid-card'>
               <a href="https://pakismovie.netlify.app/" target="_blank">
                  <img src='media/Screenshot_9_1.jpg' alt='pakis-movie'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Paki's Movie</h4>
                  <p>Sort, watch trailers and see full informations for your favorite titles</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/react.png' alt='react'>
                  <img src='icons/reactHooks.png' alt='hooks'>
                  <img src='icons/reactRouter.png' alt='router'>
                  <img src='icons/axios.png' alt='axios'>
               </div>
            </article>

            <!-- Holly Places Around the World -->
            <article class='section-2__grid-card'>
               <a href="https://beautifulholyplaces.netlify.app/" target="_blank">
                  <img src='media/Screenshot_10_1.jpg' alt='holly-places'>
               </a>
               <div class='section-2__grid-card-text'>
                  <h4>Holly Places Around the World</h4>
                  <p>View the magnificents of religions across the globe</p>
               </div><hr>
               <div class='section-2__grid-card-footer'>
                  <img src='icons/html5.svg' alt='html5'>
                  <img src='icons/css3.png' alt='css3'>
                  <img src='icons/js.jpg' alt='js'>
               </div>
            </article>
         </section>
         <span class='section-2__line'></span>
      </section>

      <!-- Third Section -->
      <section class='section-3' id='trigger3'>
         <div class='section-3__overlay'>
            <div class='section-3__name' id='name3'>
               <div class='glitch' data-text='contact'>
                  contact
               </div>
            </div>
         </div>
         
         <span class='section-3__paki' id='up3'>paki</span>
         <section class='section-3__grid'>
            <aside class='section-3__map' id="map"></aside>
            <article class='section-3__form'>
               <p>
                  <i class='fa fa-github fa-lg' style='color: coral'></i> 
                  <a href='https://github.com/pakiZBRG' target="_blank">GitHub</a>
               </p>
               <p>
                  <i class='fa fa-linkedin fa-lg' style='color: coral'></i> 
                  <a href='https://www.linkedin.com/in/nikola-pavlovic-621562172/' target="_blank">LinkedIn</a>
               </p>
               <p>
                  <i class='fa fa-file fa-lg' style='color: coral'></i> 
                  <a href='RESUME.pdf' download>Resume</a>
               </p>
               <form style='width: 75%' action="" methd="POST"> 
                  <input type="email" name="email" id="email" class="form-control" placeholder="Enter email" required>
                  <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message" required></textarea>
                  <input type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">
               </form>
            </article>
         </section>
      </section>

      <!-- GSAP and SCROLL MAGIC -->
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.js"></script>
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.js"></script>
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
      <script sec = "https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSRulePlugin.min.js"></script>
      <script src = 'js/gsap.js'></script>
      <!-- GOOGLE MAPS -->
      <script src = 'js/map.js'></script>
      <script async defer src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyB2bbVHiy49yERPNxWkbZjF1MjLLheKL64&callback=initMap"></script>
      <!-- TOGGLER -->
      <script src = 'js/switcher.js'></script>
      <!-- PRELOADER -->
      <script src='js/pace.js'></script>
      <script src='js/preloader.js'></script>
      <script src='https://cdn.jsdelivr.net/npm/jquery-bez@1.0.11/src/jquery.bez.js'></script>
   </body>
</html>