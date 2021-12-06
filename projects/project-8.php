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
                        <h1 class="wow fadeInUp" data-wow-delay="1s">HarvardX: TinyML Professional Certificate</h1><br><br>

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
                                    <h6 class="wow fadeInUp" data-wow-delay="1.7s">26 November 2021</h6>
                                </div>
                        </div>
                        <br>
                        <div class="row project-link">
                            <div class="col-lg-12">
                                <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Link :</b> </span>
                                <span class="wow fadeInUp" data-wow-delay="1.7s"><img src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/assets/edx-icon.svg"> <a href="https://credentials.edx.org/credentials/6a47bab396284f1c935965e152ee9bbb/" target="_blank">https://credentials.edx.org/credentials/6a47bab396284f1c935965e152ee9bbb/</a></span>
                            </div>
                        </div>
                        <br> <!--customize description-->
                        <p class="wow fadeInUp" data-wow-delay="1.8s">This is a certification offered by Harvard on EdX through their HarvardX program, it consisted of 3 certifications I completed, dealing with creating, optimizing and deploying machine learning applications to Tiny Devices (Microcontrollers).</p>
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
            <span onclick="javascript:location.href='../projects/project-7.php'"><ion-icon name="arrow-back"></ion-icon>previous</span>
            <span onclick="javascript:location.href='../projects/project-1.php'">next<ion-icon name="arrow-forward"></ion-icon></span>
        </div>
    </div>
</div>

<!--------------- project nav starts here --------------->

<div class="whitespace"></div>

<?php include '../templates/footer.php'?>
