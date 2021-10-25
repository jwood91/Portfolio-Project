<!DOCTYPE HTML>

<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="https://kit.fontawesome.com/cd35332ff4.js"
    crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,400&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="output_css/style.css">
     <title><?php echo $pageTitle; ?></title>
     <link rel="shortcut icon" type="image/ico" href="images/user-tie.png"/>
   </head>

   <body>
    <div id="wrapper">
      <div id='mobile-nav'>
        <a href="index.php" id='initial-link'><h1>JW</h1></a>
        <div id="dropdown-button" onClick="toggleNav()">
          <span class= "hamburger-box">
                       <span class="hb-span"></span>
                     </span>
       </div>
      </div>
      <div id="side-nav">
         <header>
           <div id="sidebar-container">
            <div id="sidebar">
              <div id="sidebar-top">
                <div id="logo-div">
                  <a href="index.php#" id='initials'><h1>JW</h1></a>
               </div>
                <ul id="sidebar-nav">
                    <li><a href="about.php">About Me</a></li>
                    <li><a href="index.php#project-cards">My Portfolio</a></li>
                    <li><a href="coding.php">Coding Examples</a></li>
                    <li><a href="scs.php">SCS Scheme</a></li>
                </ul>
              </div>
                <div id="contact-side">
                  <div id="contact-inner">
                    <div id="contact-link">
                      <a href="index.php#contact-area"><h2 id="contact">Contact Me</h2></a>
                    </div>
                      <ul id="contact-nav">
                         <li><a href="https://www.linkedin.com/in/j-wood-980443211/" target=_blank><i class="fab fa-linkedin"></i></a></li>
                         <li><a href="https://github.com/jwood91" target=_blank><i class="fab fa-github"></i></a></li>
                         <li><a href="#contact-area"><i class="fas fa-envelope"></i></a></li>
                       </ul>
                   </div>
                 </div>
            </div>
          </div>
       </header>
      </div>

      <div id="main-content">

       <div id="main" onclick="sideNavHide()">
