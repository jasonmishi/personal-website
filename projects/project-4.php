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

                <h1 class="wow fadeInUp" data-wow-delay="1s">Conway's Game Of Life</h1><br><br>

                <div class="row">
                    <div class="col-lg-4">
                        <p class="wow fadeInUp" data-wow-delay="1.2s">service :</p>
                        <h6 class="wow fadeInUp" data-wow-delay="1.3s">Web Development(React)</h6>
                    </div>

                    <div class="col-lg-4">
                        <p class="wow fadeInUp" data-wow-delay="1.4s">started :</p>
                        <h6 class="wow fadeInUp" data-wow-delay="1.5s">29 Feb 2020</h6>
                    </div>

                    <div class="col-lg-4">
                        <p class="wow fadeInUp" data-wow-delay="1.6s">completed :</p>
                        <h6 class="wow fadeInUp" data-wow-delay="1.7s">6 Mar 2020</h6>
                    </div>
                </div>
                <br>
                <div class="row project-link">
                    <div class="col-lg-12">
                        <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Link :</b> </span>
                        <span class="wow fadeInUp" data-wow-delay="1.7s"> <a href="<?php echo "http://" . $_SERVER['SERVER_NAME'];?>/GameOfLife/" target="_blank"><?php echo "http://" . $_SERVER['SERVER_NAME'];?>/GameOfLife/</a></span>
                    </div>
                </div>
                <div class="row project-link">
                    <div class="col-lg-12">
                        <span class="wow fadeInUp" data-wow-delay="1.6s"><b>Code :</b> </span>
                        <span class="wow fadeInUp" data-wow-delay="1.7s"><ion-icon name="logo-github"></ion-icon> <a href="https://github.com/JasonCarvalho-tech/Game-Of-Life-js" target="_blank">https://github.com/JasonCarvalho-tech/Game-Of-Life-js</a></span>
                    </div>
                </div>
                <br>
                <p class="wow fadeInUp" data-wow-delay="1.8s">This is an implementation of Conway's Game Of Life using React. Conway's game of life is a zero-player cellular automaton that has an infinite board. However my board is restricted to several sizes. Furthermore the website is fully responsive, but the grid does not render well on smaller screens. Really happy with the colour choices and the way it looks. Also thrilled that I could get the cells to be alive or dead using mouse clicks. To learn more about Conway's game of life you can go to its <a href="https://en.wikipedia.org/wiki/Conway's_Game_of_Life">Wikipedia page</a></p>
            </div>
        </div>
        <!--------------- project image section starts here --------------->
        <div>
            <img class="project-image wow fadeInUp" data-wow-delay="2s" src="./project-4.jpg" alt="Conway's game of Life">
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
            <span onclick="javascript:location.href='../projects/project-3.php'"><ion-icon name="arrow-back"></ion-icon>previous</span>
            <span onclick="javascript:location.href='../projects/project-5.php'">next<ion-icon name="arrow-forward"></ion-icon></span>
        </div>
    </div>
</div>

<!--------------- project nav starts here --------------->

<div class="whitespace"></div>

<?php include '../templates/footer.php'?>
