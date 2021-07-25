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

                <h1 class="wow fadeInUp" data-wow-delay="1s" onclick="javascript:location.href='../holmes-homes/holmes-homes.html'">Holmes' Homes (Real estate site)</h1><br><br>

                <div class="row">
                    <div class="col-lg-4">
                        <p class="wow fadeInUp" data-wow-delay="1.2s">service :</p>
                        <h6 class="wow fadeInUp" data-wow-delay="1.3s">Web Development</h6>
                    </div>

                    <div class="col-lg-4">
                        <p class="wow fadeInUp" data-wow-delay="1.4s">started :</p>
                        <h6 class="wow fadeInUp" data-wow-delay="1.5s">8 October 2019</h6>
                    </div>

                    <div class="col-lg-4">
                        <p class="wow fadeInUp" data-wow-delay="1.6s">completed :</p>
                        <h6 class="wow fadeInUp" data-wow-delay="1.7s">18 October 2019</h6>
                    </div>
                </div>
                <br>
                <div class="row project-link">
                    <div class="col-lg-12">
                        <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Link :</b> </span>
                        <span class="wow fadeInUp" data-wow-delay="1.7s"> <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'];?>/holmes-homes/holmes-homes.html" target="_blank"><?php echo "http://" . $_SERVER['SERVER_NAME'];?>/holmes-homes/holmes-homes.html</a></span>
                    </div>
                </div>
                <div class="row project-link">
                    <div class="col-lg-12">
                        <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Code :</b> </span>
                        <span class="wow fadeInUp" data-wow-delay="1.7s"><ion-icon name="logo-github"></ion-icon> <a href="https://github.com/JasonCarvalho-tech/real-estate" target="_blank">https://github.com/JasonCarvalho-tech/real-estate</a></span>
                    </div>
                </div>
                <br>
                <p class="wow fadeInUp" data-wow-delay="1.8s">This website was been written in HTML, CSS, JavaScript. I used a third party plugin called 'Slick Slider' for the sliders. This website is fully responsive and highlights my ablility to design a fully functional website using a variety of frameworks. I hope to further this project by making a property finder using the google maps API. The website can be found <a href="../holmes-homes/holmes-homes.html" target="_blank">here</a>. The GitHub repo can be found <a href="https://github.com/JasonCarvalho-tech/real-estate" target="_blank">here</a>.</p>
            </div>
        </div>
        <!--------------- project image section starts here --------------->
        <div>
            <img class="project-image wow fadeInUp" data-wow-delay="2s" src="./project-2.jpg" alt="Image of personal website">
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
            <span onclick="javascript:location.href='../projects/project-1.php'"><ion-icon name="arrow-back"></ion-icon>previous</span>
            <span onclick="javascript:location.href='../projects/project-3.php'">next<ion-icon name="arrow-forward"></ion-icon></span>
        </div>
    </div>
</div>

<!--------------- project nav starts here --------------->

<div class="whitespace"></div>

<?php include '../templates/footer.php'?>
