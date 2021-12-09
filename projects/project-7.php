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

                        <!--customize topic-->
                        <h1 class="wow fadeInUp" data-wow-delay="1s">HarvardX: Fundamentals of TinyML</h1><br><br>

                        <!--customize info-->
                        <div class="row">
                                <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.2s">Service :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.3s">Certification</h6>
                                </div>

                                <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.4s">started :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.5s">20 Jun 2021</h6>
                                </div>

                                <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.6s">completed :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.7s">4 July 2021</h6>
                                </div>
                        </div>
                        <br>
                        <div class="row project-link">
                            <div class="col-lg-12">
                                <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Link :</b> </span>
                                <span class="wow fadeInUp" data-wow-delay="1.7s"><img src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/assets/edx-icon.svg"> <a href="https://courses.edx.org/certificates/bc8699405aa645c08e8cfac671e9e4a4" target="_blank">https://courses.edx.org/certificates/bc8699405aa645c08e8cfac671e9e4a4</a></span>
                            </div>
                        </div>
                        <br> <!--customize description-->
                        <p class="wow fadeInUp" data-wow-delay="1.8s">This certifate was offered by Harvard on edX it covered the fundementals of AI and how to use it in a microcontroller. There are 2 other courses in the same course and I hope to do those as well.</p>
                    </div>
            </div>
            <!--------------- project image section starts here --------------->
            <div>
                    <img class="project-image wow fadeInUp" data-wow-delay="2s" src="./project-7.jpg">
            </div>
            <!--------------- project image section ends here --------------->
        </div>
</div>
<!--------------- hero section ends here --------------->

<br><br>

<!--------------- project nav starts here --------------->

<div class="project-nav">
    <div class="container">
        <div class="row">
            <span onclick="javascript:location.href='../projects/project-6.php'"><ion-icon name="arrow-back"></ion-icon>previous</span>
            <span onclick="javascript:location.href='../projects/project-8.php'">next<ion-icon name="arrow-forward"></ion-icon></span>
        </div>
    </div>
</div>

<!--------------- project nav starts here --------------->

<div class="whitespace"></div>

<?php include '../templates/footer.php'?>
