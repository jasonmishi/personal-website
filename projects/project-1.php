<?php $title = "Jason Carvalho | Software Engineer";
      include '../templates/header.php';?>
<div class="whitespace"></div>

<!--------------- hero section starts here --------------->
<div class="container">
      <div class="hero-content">
            <br><br>
            <div class="row">
                  <div class="col-lg-12">
                        <br>

                        <h1 class="wow fadeInUp" data-wow-delay="1s">Personal website (this website)</h1><br><br>

                        <div class="row">
                              <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.2s">service :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.3s">Web Development</h6>
                              </div>

                              <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.4s">started :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.5s">8 May 2019</h6>
                              </div>

                              <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.6s">completed :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.7s">15 May 2019</h6>
                              </div>
                        </div>
                        <br>
                        <div class="row project-link">
                              <div class="col-lg-12">
                                    <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Link :</b> </span>
                                    <span class="wow fadeInUp" data-wow-delay="1.7s"> <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'];?>" target="_blank"><?php echo "http://" . $_SERVER['SERVER_NAME'];?></a></span>
                              </div>
                        </div>
                        <div class="row project-link">
                              <div class="col-lg-12">
                                    <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Code :</b> </span>
                                    <span class="wow fadeInUp" data-wow-delay="1.7s"><ion-icon name="logo-github"></ion-icon> <a href="https://github.com/JasonCarvalho-tech/personal-website" target="_blank">https://github.com/JasonCarvalho-tech/personal-website</a></span>
                              </div>
                        </div>
                        <br>
                        <p class="wow fadeInUp" data-wow-delay="1.8s">This website has been written in PHP, HTML, CSS, JavaScript (for the animations) and JQuerry for the <a href="../contact.html#contactForm">contact form</a> validations. To get the contact form to send me an e-mail I used Formspree.io. I experimented by using a darker theme and am really happy with the result. Some of the images used are my own and the rest are in the public domain. I hope to add further functionality to the website and as it's my personal website it is a never ending work in progress. I had a lot of fun building this and it has tought me a lot as well. :D</p>
                  </div>
                  <div>
                        <img  class="wow fadeInUp project-image" data-wow-delay="2s" src="./project-1.jpg" alt="Image of personal website">
                  </div>
            </div>
      </div>
</div>
<!--------------- hero section ends here --------------->

<br><br>

<!--------------- project nav starts here --------------->

<div class="project-nav">
      <div class="container">
            <div class="row">
                  <span onclick="javascript:location.href='../projects/project-8.php'"><ion-icon name="arrow-back"></ion-icon>previous</span>
                  <span onclick="javascript:location.href='../projects/project-2.php'">next<ion-icon name="arrow-forward"></ion-icon></span>
            </div>
      </div>
</div>

<!--------------- project nav starts here --------------->

<div class="whitespace"></div>

<?php include '../templates/footer.php'?>
