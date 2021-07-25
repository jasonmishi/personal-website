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
                        <h1 class="wow fadeInUp" data-wow-delay="1s">KULeuven: UML Class Diagrams for Software Engineering </h1><br><br>

                        <!--customize info-->
                        <div class="row">
                                <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.2s">Service :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.3s">Certification</h6>
                                </div>

                                <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.4s">started :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.5s">12 Jun 2021</h6>
                                </div>

                                <div class="col-lg-4">
                                    <p class="wow fadeInUp" data-wow-delay="1.6s">completed :</p>
                                    <h6 class="wow fadeInUp" data-wow-delay="1.7s">14 Jum 2021</h6>
                                </div>
                        </div>
                        <br>
                        <div class="row project-link">
                            <div class="col-lg-12">
                                <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Link :</b> </span>
                                <span class="wow fadeInUp" data-wow-delay="1.7s"><img src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/assets/edx-icon.svg"> <a href="https://courses.edx.org/certificates/e6b48d4bb3d946d2be64661497074a3c" target="_blank">https://courses.edx.org/certificates/e6b48d4bb3d946d2be64661497074a3c</a></span>
                            </div>
                        </div>
                        <br> <!--customize description-->
                        <p class="wow fadeInUp" data-wow-delay="1.8s">This certification titled "UMLx: UML Class Diagrams for Software Engineering" is offered by KULeuven's KULeuvenX on edX, it went into the specifics and nitty gritty details of UML class diagrams and how to read them. This was the first course that I did on edX, just to see how everything works and comes out before jumping into a more expensive course. It was a good experience and I can say I gained a lot of new knowledge regarding class diagrams that I previously didn't have. Specifacally in-depth knowledge on how associations work, this might prove useful for me later on. The course was enjoyable and intresting and I will do more courses on edX if they are of a similar quality.</p>
                    </div>
            </div>
            <!--------------- project image section starts here --------------->
            <div>
                    <img class="project-image wow fadeInUp" data-wow-delay="2s" src="./project-6.jpg" alt="Image of personal website">
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
            <span onclick="javascript:location.href='../projects/project-5.php'"><ion-icon name="arrow-back"></ion-icon>previous</span>
            <span onclick="javascript:location.href='../projects/project-1.php'">next<ion-icon name="arrow-forward"></ion-icon></span>
        </div>
    </div>
</div>

<!--------------- project nav starts here --------------->

<div class="whitespace"></div>

<?php include '../templates/footer.php'?>
