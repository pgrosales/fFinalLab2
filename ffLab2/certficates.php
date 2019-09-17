<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PATRICK</title>

  <<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href=""> 
    
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
    <title>Learnings</title>

</head>
  <nav>
  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="page-2.html">Activities</a></li>
    <li><a href="page-3.html">Reflections</a></li>
    <li id="li3"><a href="projects.html">Projects</a></li>
    <li><a href="certficates.html">Learnings</a></li>
  </ul>
</nav>
 
 
  </button>
 
  </div> 
</div>
<BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR> <BR>


     <div class="w3-content w3-display-container">
            <img class="mySlides" src="img/cert1.PNG" style="width:100%">
              <img class="mySlides" src="img/cert2.PNG" style="width:100%">
                <img class="mySlides" src="img/cert3.PNG" style="width:100%">
                  <img class="mySlides" src="img/cert4.PNG" style="width:100%">
                    <img class="mySlides" src="img/cert5.PNG" style="width:100%">
                      <img class="mySlides" src="img/cert6.PNG" style="width:100%">
              <center>
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                 <Br> <br> <br> <Br>

          </center>
          </div>  

               
        </div>
              <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
        </script>
      </body>
