            <footer class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <p class="wow fadeInUp">Got an interesting project? I can help you.</p>
                                    </div>
                              </div>
                        </div>

                        <br>

                        <div class="hr">
                              <div class="row"></div>
                        </div>

                        <br><br>

                        <div class="info">
                              <div class="row">
                                    <div class="col-lg-4" id="personal">
                                          <p class="wow fadeInUp">connect with me</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">IG @jason.mishi</h4>
                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="media">
                                          <p class="wow fadeInUp" data-wow-delay="0s">follow me</p>

                                          <ul>
                                                <li id="github" class="wow fadeInUp" data-wow-delay="0\.4s"><a href="https://github.com/JasonCarvalho-tech">github</a></li>
                                                <li id="ig" class="wow fadeInUp" data-wow-delay="0.6s"><a href="https://www.instagram.com/jimidante//">ig</a></li>
                                                <li id="tw" class="wow fadeInUp" data-wow-delay="0.8s"><a href="https://twitter.com/DanteJimi">tw</a></li>

                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="address">
                                          <p class="wow fadeInUp" data-wow-delay="0s">say hello</p>
                                          <h4 class="wow fadeInUp" data-wow-delay="0.2s">jml123carvalho@gmail.com</h4>
                                          <br><br>
                                    </div>
                              </div>
                        </div>
            </footer>
            <!--------------- footer ends here --------------->
      </div>

      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script type="text/javascript">
            // navigation starts here

            $("#toggle").click(function() {
                  $(this).toggleClass('on');
                  $("#resize").toggleClass("active");
            });

            $("#resize ul li a").click(function() {
                  $(this).toggleClass('on');
                  $("#resize").toggleClass("active");
            });

            $(".close-btn").click(function() {
                  $(this).toggleClass('on');
                  $("#resize").toggleClass("active");
            });

            // navigation ends here

            // nav animation

            TweenMax.from("#brand", 1, {
                  delay: 0.4,
                  y: 10,
                  opacity: 0,
                  ease: Expo.easeInOut
            })

            TweenMax.staggerFrom("#menu li a", 1, {
                  delay: 0.4,
                  opacity: 0,
                  ease: Expo.easeInOut
            }, 0.1);

            // nav animation ends

            new WOW().init();

      </script>
</body>
</html>
