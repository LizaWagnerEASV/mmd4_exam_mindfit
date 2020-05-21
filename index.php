<?php get_header(); ?>





  <body>





      
      



  <nav>
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        

        <li><a href="#test1">Om MindFit</a></li>
        <li><a href="#test2">Behandlinger</a></li>
        <li><a href="#test3">Anbefalinger</a></li>
        <li><a href="#test4">Galleri</a></li>
        <li><a href="#test5">Kontakt</a></li>








      </ul>
    </div>
  </nav>










    <div class="header">
      <div class="container">
        
        
       
      </div>
    </div>
    

    <a name="test1"></a>

    <a href="#scrolltoabout"></a>

    <div class="main">      
      <div class="container">
        <h2><?php the_field('mindfit_description_title'); ?></h2>
        <?php the_field('mindfit_description_text'); ?>
      </div>
    </div>







    <div class="main">      
      <div class="container">
        <img src=<?php the_field('steen_official_pic'); ?> height="350" width="370"></img>
        <h2><?php the_field('steen_title_text'); ?></h2>
        <?php the_field('steen_description_text'); ?>
      </div>
    </div>



  



    </div>
    <div class="jumbotron">
      <div class="container"> 
      
      <h1><?php the_field('white_box_header_text'); ?></h1>
        <p><?php the_field('white_box_description_text'); ?></p>
      </div>
    </div>
    




    <a name="test2"></a>


    <div class="main">      
      <div class="container">
        <img src=<?php the_field('pic1') ?> height="200" width="350"></img>
        <h2><?php the_field('white_box_header_text2'); ?></h2>
        <?php the_field('white_box_description_text2'); ?>
      </div>
    </div>



    <div class="main">      
      <div class="container">
        <img src=<?php the_field('pic2') ?> height="200" width="350"></img>
        <h2><?php the_field('white_box_header_text2_copy'); ?></h2>
        <?php the_field('white_box_description_text3'); ?>
      </div>
    </div>



    <div class="main">      
      <div class="container">
        <img src=<?php the_field('pic3') ?> height="200" width="350"></img>
        <h2><?php the_field('white_box_header_text4'); ?></h2>
        <?php the_field('white_box_description_text4'); ?>
      </div>
    </div>



               

      </div>
    </div>
    <div class="jumbotron1">
      <div class="container"> 
      </div>
    </div>




    <a name="test3"></a>

    
    <div class="main">      
      <div class="container">
        <img src=<?php the_field('test_pic') ?> height="200" width="200"></img>
        <h2><?php the_field('test_header_text'); ?></h2>
        <?php the_field('test_description_text'); ?>
      </div>
    </div>



    <div class="main">      
      <div class="container">
        <img src=<?php the_field('person_pic') ?> height="200" width="200"></img>
        <h2><?php the_field('person_header_text'); ?></h2>
        <?php the_field('person_description_text'); ?>
      </div>
    </div>

    <a name="test4"></a>

    <div class="slider" style="height:600px !important; ">
    <ul class="slides">
      <li>
        <img src=<?php the_field('gallery_img4') ?> <!-- random image -->
        <div class="caption center-align">
          
        </div>
      </li>
      <li>
        <img src=<?php the_field('gallery_img3') ?>  <!-- random image -->
        <div class="caption left-align">
        
        </div>
      </li>
      <li>
        <img src=<?php the_field('gallery_img1') ?> <!-- random image -->
        <div class="caption right-align">
        </div>
      </li>
      <li>
        <img src=<?php the_field('gallery_img2') ?> <!-- random image -->
        <div class="caption center-align">
        </div>
      </li>

    </ul>
  </div>



   


  
        
      <div class="video-container">
      <iframe width="853" height="480" src="https://www.youtube.com/embed/_VOdB6DcK28?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>      </div>
        
        <a name="test5"></a>


    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Steen W.Elkjær-Christensen</h5>
                <li><a class="grey-text text-lighten-3" href="#!">Psykomotorisk terapeut hos MindFit</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Specialist i muskulær og mental agspænding</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Medlem af "Danske psykomotoriske terapeuter"</a></li>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Kontakt</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">29669928</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">kontakt@mindfit.dk</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!"> facebook.com/MindFit.nu/</a></li>

                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Elizaveta Wagner-MMD4
            </div>
          </div>
        </footer>
            
  


    
    <?php get_footer(); ?>













  </body>
</html>