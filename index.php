  <?php $pageTitle = "Joseph Wood Portfolio | Home";
  include "inc/header.php"?>
  <?php include "inc/function.php" ?>
         <main>

         <div id="hero-image">
                <div id="hero-text">
                <div id="app1"></div>
                </div>
          <a href="#project-cards" id='scroll-down-text'>
            <div id="scroll-down">
              <h2>Scroll Down<br><i class="fas fa-chevron-down"></i></h2>
            </div>
          </a>
        </div>



   <!-- Project cards start here -->


          <div id="project-cards">

              <div id="c1" class="pc card-space">
                  <a href="http://netmatters.joseph-wood.netmatters-scs.co.uk/" target="_blank">
                      <div class="image-div">
                        <img id="ci1" src="images/netmatters-homepage.png" class="card-img-top" alt="...">
                      </div>
                          <div class="card-body">
                            <h5 class="card-title">Netmatters Home Page</h5>
                            <p class="card-desc">A project with the goal to recreate the Netmatters homepage.
                            <p class="card-text">View Project</p>
                      </div>
                    </a>
              </div>



              <div id="c2" class="pc card-space">
                <a href="#">
                  <div class="image-div">
                    <img id="ci2" src="images/netmatters-homepage.png" class="card-img-top" alt="...">
                  </div>
                    <div class="card-body">
                        <h5 class="card-title">Project 2</h5>
                        <p class="card-text">View Project</p>
                    </div>
                  </a>
              </div>



              <div id="c3" class="pc card-space">
                <a href="#">
                    <div class="image-div">
                      <img id="ci3" src="images/netmatters-homepage.png" class="card-img-top" alt="...">
                    </div>
                      <div class="card-body">
                          <h5 class="card-title">Project 3</h5>
                          <p class="card-text">View Project</p>
                      </div>
                  </a>
              </div>



              <div id="c4" class="pc card-space">
                <a href="#">
                    <div class="image-div">
                      <img id="ci4" src="images/netmatters-homepage.png" class="card-img-top" alt="...">
                    </div>
                      <div class="card-body">
                            <h5   class="card-title">Project 4</h5>
                            <p class="card-text">View Project</p>
                      </div>
                  </a>
              </div>



              <div id="c5" class="pc card-space">
              <a href="#">
                  <div class="image-div">
                    <img id="ci5" src="images/netmatters-homepage.png" class="card-img-top" alt="...">
                  </div>
                    <div class="card-body">
                          <h5 class="card-title">Project 5</h5>
                          <p class="card-text">View Project</p>
                    </div>
                </a>
              </div>


              <div id="c6" class="pc card-space">
                <a href="#">
                    <div class="image-div">
                      <img id="ci6" src="images/netmatters-homepage.png" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                          <h5 class="card-title">Project 6</h5>
                          <p class="card-text">View Project</p>
                    </div>
                </a>
              </div>

          </div>

        <div id="contact-area">
          <div id="contact-text">
            <h2>Contact Me</h2>
            <p><strong>Please feel free to contact me anytime, my details are below or use the contact form to get in touch.  Thank you.</strong></p>
            <p>Telephone: <tcxspan id="phonecall" tcxhref="07506119468" title="Call  07506119468 via 3CX"> 07506119468</tcxspan></p>
            <p>Email:<a href="mailto:webmaster@example.com">jwood4589@gmail.com</a></p>
          </div>
          <div id="form-container">
             
              <div id="form-area">
              <div id="contact-success" name="success" class="contact-notify alert-success alert-hide">
                  <span>Your message has been sent!</span>
                  <button type="close" class="close-button" onclick="closeSubmit()" >
                      <i class='fas fa-times'></i>
                  </button>
              </div>


              <div id="message-fail" class="contact-notify alert-danger alert-hide">
                  <span>The message must be at least 5 characters</span>
                  <button type="close" class="close-button" onclick="closeSubmit()">
                      <i class='fas fa-times'></i>
                  </button>
              </div>

                <form id="contact-form" method="POST"
          action="#"
          accept-charset="UTF-8" id="sign-up" name="contactForm">
                    <input type="text" id="firstname" name="first-name" class="<?php
                    if ($firstNameErr == "fail"){
                      echo ("input-invalid");
                    } else {
                      echo ("input-area");
                    };?>" placeholder="First Name*">

                    <input type="text" id="lastname" name="last-name" class="<?php
                    if ($lastNameErr == "fail"){
                      echo ("input-invalid");
                    } else {
                      echo ("input-area");
                    };?>" placeholder="Last Name*">
                    <input type="email" id="email" name="email" class="<?php
                    if ($emailErr == "fail"){
                      echo ("input-invalid");
                    } else {
                      echo ("input-area");
                    };?>" placeholder="Email Address*">
                    <input type="text" id="subject" name="subject" class="<?php
                    if ($subjectErr == "fail"){
                      echo ("input-invalid");
                    } else {
                      echo ("input-area");
                    };?>" placeholder="Subject*">
                    <textarea type="text" id="message" name="message" class="<?php
                    if ($messageErr == "fail"){
                      echo ("input-invalid");
                    } else {
                      echo ("input-area");
                    };?>" placeholder="Message*"></textarea>
                    <button id="submit" type="submit" href="index.php#contact-area" name="submit" >Submit</button>
                </form>
              </div>
          </div>
        </div>
        <a href="#" id='scroll-up-text'>
          <div id="scroll-up">
            <h2><i class="fas fa-chevron-up"></i><br>Scroll up</h2>
          </div>
          </a>
        </main>
      <?php include "inc/footer.php" ?>
