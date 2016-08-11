<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include('assets/incs/header.php'); ?>

    <meta property="og:title" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>

    <meta property="fb:app_id" content="1430610453927587" />
    <meta property="fb:admins" content="661515687" />
    <meta property="fb:admins" content="1695176904" />
  </head>

  <body data-spy="scroll" data-target=".navbar-fixed-top">
    <?php include('assets/incs/menu.php'); ?>

    <section id="home" class="home-section tt-fullHeight" style="background: url(assets/images/slider/slide-1.jpg) no-repeat center center #0A0A0A;">
      <div class="intro">
        <h1>Notícias</h1>
      </div>
    </section>

    <section id="about" class="about-section">
      <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="profile-overview">
                <h2>CONVERGENCE VIS ANVIS STAND ALONE PARADIGMS.</h2>

                <ul class="list-inline clearfix">
                  <li><span class="the-time">02 MAY 2015</span></li>
                </ul>
                <p>&nbsp;</p>
                <img src="assets/images/press/press-1.jpg" class="img-responsive " style="float: right; margin: 0 0 30px 30px;" alt="Image">
                <p>Competently incentivize cross-unit value with end-to-end infrastructures. coordinate bricks-and-clicks architectures for highly efficient catalysts for change. Enthusiastically aggregate client-focused content without flexible sources. Holisticly actualize efficient portals for highly efficient materials. Seamlessly reintermediate ubiquitous catalysts for change before fully researched initiatives.</p>

                <p>Synergistically disintermediate efficient intellectual capital for customized process improvements. </p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p>Competently incentivize cross-unit value with end-to-end infrastructures. coordinate bricks-and-clicks architectures for highly efficient catalysts for change. Enthusiastically aggregate client-focused content without flexible sources. Holisticly actualize efficient portals for highly efficient materials. Seamlessly reintermediate ubiquitous catalysts for change before fully researched initiatives.</p>

                <div class="social-links">
                  <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  </ul>
                </div>

              </div><!-- /.profile-overview -->
            </div><!-- /.col-md-12 -->
          </div>

          <div class="row">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=1061089893901641";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
          </div>
      </div>
    </section>

    
    <!-- INÍCIO: Newsletter -->
    <?php include('assets/incs/newsletter.php'); ?>
    <!-- FINAL: Newsletter -->


    <!-- INÍCIO: Contato -->
    <?php include('assets/incs/contato.php'); ?>
    <!-- FINAL: Contato -->

    <?php include('assets/incs/footer.php'); ?>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/smoothscroll.min.js"></script>
    <script src="assets/js/scripts.js"></script>
  </body>
</html>