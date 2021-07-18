<?php $title = "About Me | Jason Carvalho | Software Engineer";
include 'templates/header.php';?>
<div class="whitespace"></div>

<!--------------- hero section starts here say hello 👋 --------------->
<section id="hero" class="container">
        <div class="hero-content">
            <br><br>

            <div class="row">
                    <div class="col-lg-8">

                        <h3 class="wow fadeInUp" data-wow-delay="1s">Say Hello 👋</h3><br>
                        <p class="wow fadeInUp" data-wow-delay="1.2s">Fill in the details below to send me an email if the project exites me I'll respomd via e-mail.</p>
                    </div>
            </div>
        </div>
</section>
<!--------------- hero section ends here --------------->

<!-- <div class="whitespace"></div> No need imo idk tho-->

<!--------------- form section starts here --------------->
<section class="container-fluid" id='contactForm'>
        <div class="row">
            <div class="col-lg-8">
                    <form name="contact-form" id="contact-form" method="POST" action="https://formspree.io/jml123carvalho@gmail.com" />

            <ul>

                    <li class="wow fadeInUp" data-wow-delay="1.4s">
                        <label for="contact-name">Name :</label>
                        <div class="textarea">
                                <input type="text" name="contact-name" id="contact-name" value="" required>
                        </div>
                    </li>

                    <li class="wow fadeInUp" data-wow-delay="1.6s">
                        <label for="contact-email">Email :</label>
                        <div class="textarea">
                                <input type="email" class='email' name="contact-email" id="contact-email" required>
                        </div>
                    </li>

                    <li class="wow fadeInUp" data-wow-delay="1.6s">
                        <label for="contact-project">Message :</label>
                        <div class="textarea">
                                <textarea type="text" name="contact-project" id="contact-project" rows="6" value='null' required></textarea>
                        </div>
                    </li>

                    <li id='status'>

                    </li>
            </ul>

                    <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp">
                        Send Message
                    </button>

                    </form>
            </div>
        </div>
</section>

<!--------------- form section ends here --------------->

<div class="whitespace"></div>

<!--------------- footer starts here --------------->
<?php include 'templates/footer.php' ?>
