<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <title>Reflections</title>
  </head>
<!--
Sided Template
https://templatemo.com/tm-527-sided
-->
 <body>
    <nav id="navpage2">
  <ul id="ul">
    <li id="li1"><a href="index.html">Home</a></li>
    <li id="li2"><a href="page-2.html">Activities</a></li>
    <li id="li3"><a href="page-3.html">Reflections</a></li>
     <li id="li3"><a href="#">Projects</a></li>
    <li id="li4"><a href="certficates.html">Learnings</a></li>
  </ul>
</nav>

    
      <!-- Logo & Intro -->
      <section id="logo" class="tm-section-logo tm-section-logo-short">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 offset-sm-0 col-md-6 offset-md-6">
              <div class="tm-site-name-container border-bottom-0">
                <div class="tm-site-name-container-inner">
                  <h1 class="text-uppercase tm-text-primary tm-site-name">
                    
                  </h1>
                  <p class="tm-text-primary tm-site-description mb-0">
                    
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- 1st Section, Full Width Image -->
      <section class="tm-p-3-section-1">
        <div class="container-fluid" id=""></div>
      </section>

      <!-- 2nd Section -->
      <section>
        <div class="container-fluid">
          <div class="row">
            <div
              class="col-sm-12 col-md-6 px-0 tm-sm-bg-blue tm-section-image-container tm-img-left-container tm-section-icon-container">
             
            </div>
              <center>
            <div class="col-sm-12 col-md-6 px-0">
              <div class="tm-section-text-container-8 h-100">
                <div class="tm-section-text-container-3 tm-bg-gray h-100">
                <h2 class="tm-section-title-mb tm-text-primary-bright">
                Q1: User Inyerface

                </h2>
                   <img src="img/UIN.PNG" alt="Image" class="img-fluid" />
                
                  <center>
           <div class="col-md-12 col-lg-6 pl-lg-0">
              </center>
                </div>
              </div>


                </p>
                <div class="text-right">
                 </center>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
       <section>
        <center>
        <center>
            <div class="col-sm-12 col-md-6 px-0">
              <div class="tm-section-text-container-8 h-100">
                <div class="tm-section-text-container-3 tm-bg-gray h-100">
                <h2 class="tm-section-title-mb">  <a href="https://pgrosales.herokuapp.com/" target="blank">L1: Version Control and Basic HTML</h2>
                  <h2 class="tm-section-title-mb">  <a href="https://userdes-rosales.herokuapp.com/" target="blank">L2: Web App Level Up! CSS, Bootstrap & Java Script</h2>
                  <a href="https://pgrosales.herokuapp.com/" target="blank">
                <hr class="tm-hr-mb tm-hr-white" />
                <p class="tm-p-mb">
               <c/enter>
                </p>
            
                  </center>
                </div>
              </div>
            </div>
           
          </div>
        </div>

       
    
    <!-- /.columns-bg -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script>
      $(function() {
        // Dynamically set the size of full width background image when browser resize
        $(window).resize(function() {
          const maxImgHeight = 640;
          const minImgHeight = 450;
          const maxContainerWidth = 1310;
          const browserWidth = $(window).width();

          let imgHeight = browserWidth * (maxImgHeight / maxContainerWidth);

          if (imgHeight > maxImgHeight) {
            imgHeight = maxImgHeight;
          } else if (imgHeight < minImgHeight) {
            imgHeight = minImgHeight;
          }

          $("#bg_img_31").height(imgHeight);
        });
      });
    </script>
  </body>
</html>