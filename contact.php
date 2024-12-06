<?php
include_once('header.php');
?>
<style>
  
  .trk-btn {
    transition: none; /* Disable transition effects */
}

.trk-btn:hover {
    background-color: #ff561c; /* Keep the background color the same */
    color: #ff561c; /* Keep the text color the same */
    border-color: #ff561c; /* Keep the border color the same */
}

</style>

    <!-- Breadcrumb Start -->
      <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_3.jpg); background-size: cover; background-position: bottom; height: 30ch;">
        <div class="container pt-5">
          <div class="pt-5"></div>
          <h1 class="fs-2 text-white pt-5 mt-3"> Contact Us</h1>
          <nav class="breadcrumb text-light">
            <a class="breadcrumb-item text-light" href="index.php">Home</a>
            <span class="breadcrumb-item active text-light" aria-current="page">Contact Us</span>
          </nav>
        </div>
      </section>
    <!-- Breadcrumb End -->


    <!-- About Start -->

  <div class="container my-5">
    <div class="row">
        <!-- Contact Form (Left) -->
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="trade-warning border rounded border-light p-4">
                <h4 class="mb-1" style="color: black;"><span> Contact Us</span></h4><br/>
                <form action="" method="post" id="contact_form">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" id="name" name="name" class="form-control form-control-sm" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="phone" id="phone" name="phone" class="form-control form-control-sm" placeholder="Your Phone" required>
                        </div>
                        <div class="col-md-6 col-sm-12 mb-3">
                            <input type="subject" id="subject" name="subject" list="subjects" class="form-control form-control-sm" placeholder="Your Subject" required>
                            <datalist id="subjects">
                                <option value="Technical Issue">
                                <option value="Deposit Issue">
                                <option value="Withdraw Issue">
                            </datalist>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <textarea id="message" name="message" rows="2" class="form-control form-control-sm" placeholder="Your Message" required></textarea>
                        </div>
                        <div class="col-sm-4"></div>
                          <div class="col-sm-4 mb-3">
                          <div class="g-recaptcha" data-sitekey="6Le_UCgqAAAAAGPEc49CggwHwT3F0FBtZ9npXiWY"></div>
                          </div>
                        <div class="col-sm-12 text-center ">
    <button type="submit" class="trk-btn trk-btn--border trk-btn--primary  justify-content-center">Send Message</button>
    <button class="trk-btn trk-btn--border trk-btn--primary process-btn disabled btn btn-secondary" style="position: absolute; top: 0; left: 0; right: 0; visibility: hidden;">
        <i class="fa fa-spinner fa-spin me-2"></i> Processing...
    </button>
</div>

                    </div>
                </form>
            </div>
        </div>

        <!-- Get in Touch (Right) -->
        <div class="col-lg-6 col-md-4 col-sm-12" style="margin-top:50px;">
            <div class="trade-warning border rounded border-light p-4">
                <div class="">
                    <div class="">
                        <h5 style="margin-top: -46px;
    margin-bottom: 30px;">Get in touch</h5>
                    </div>
                    <div class="">
                        <p class=""><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; +971 56 438 6943</p>
                        <p class=""><i class="fab fa-whatsapp" aria-hidden="true"></i> &nbsp; +971 56 438 6943 /<br> +971 56 4945027</p>
                        <p class=""><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; support@pemaxx.com</p>
                        <p class=""><i class="fa fa-globe" aria-hidden="true"></i> &nbsp;<a href="https://www.pemaxx.com" style="color: gray;">www.pemaxx.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        


    <!-- footer start here -->
    <footer class="footer brand-1">
      <div class="container">
          <div class="footer__wrapper">
              <div class="footer__top footer__top--style1">
                  <div class="row gy-5 gx-4">
                      <div class="col-md-3">
                          <div class="footer__about">
                              <a href="index.php" class="footer__about-logo">
                                  <img src="assets/images/logo/logo.png" alt="Logo" class="img-thumbnail">
                              </a>
                              <p class="footer__about-moto ">Welcome to our trading site! We offer the best, most affordable products and services around. Shop now and start finding great deals!</p>
                          </div>
                      </div>

                      <div class="col-md-2 col-sm-4 col-6">
                          <div class="footer__links">
                              <div class="footer__links-tittle">
                                  <h6>Quick links</h6>
                              </div>
                              <div class="footer__links-content">
                                  <ul class="footer__linklist">
                                      <li class="footer__linklist-item"> <a href="index.php">Home</a></li>
                                      <li class="footer__linklist-item"> <a href="about.php">About Company</a></li>
                                      <li class="footer__linklist-item"> <a href="live_market.php">Live Market</a></li>
                                      <li class="footer__linklist-item"> <a href="service.php">Our Services</a></li>
                                      <!-- <li class="footer__linklist-item"> <a href="product.php">Products</a></li>
                                      <li class="footer__linklist-item"> <a href="platform.php">Platform</a></li>
                                      <li class="footer__linklist-item"> <a href="account.php">Account</a></li>
                                      <li class="footer__linklist-item"> <a href="tools.php">Tools</a></li> -->
                                  </ul>
                              </div>
                          </div>

                      </div>

                      <div class="col-md-2 col-sm-4 col-6">
                          <div class="footer__links">
                              <div class="footer__links-tittle">
                                  <h6>Tools</h6>
                              </div>
                              <div class="footer__links-content">
                                  <ul class="footer__linklist">
                                      <li class="footer__linklist-item"> <a href="pip_calculator.php">PIP Calculator</a></li>
                                      <li class="footer__linklist-item"> <a href="risk_calculator.php">Risk Calculator</a></li>
                                      <li class="footer__linklist-item"> <a href="margin_calculator.php">Margin Calculator</a></li>
                                      <li class="footer__linklist-item"> <a href="profit_loss_calculator.php">P&L Calculator</a></li>
                                  </ul>
                              </div>
                          </div>

                      </div>

                      <div class="col-md-2 col-sm-4 col-6">
                          <div class="footer__links">
                              <div class="footer__links-tittle">
                                  <h6>Get in touch</h6>
                              </div>
                              <div class="footer__links-content">
                                      <p class="footer__linklist-item"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; +971 56 438 6943 </p>
                                      <p class="footer__linklist-item"><i class="fab fa-whatsapp" aria-hidden="true" ></i> &nbsp; +971 56 438 6943  /<br>  +971 56 4945027 </p>
                                      <p class="footer__linklist-item"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp; support@pemaxx.com</p>
                                      <p class="footer__linklist-item"><i class="fa fa-globe" aria-hidden="true"></i> &nbsp;<a href="https://www.pemaxx.com">www.pemaxx.com</a></p>
                                      <!-- <p class="footer__linklist-item"><i class="fa fa-map" aria-hidden="true"></i> &nbsp; &nbsp; Physical Office Address : <br>OFFICE-2008, Dubai BusinessBay, 33, Marasi Drive Road, CloverBay Tower 345-BURJ KHALIF</p>
                                      <p class="footer__linklist-item"><i class="fa fa-map" aria-hidden="true"></i> &nbsp; &nbsp; Register Office : <br>20 Edith Cavell Street, Level 6 Ken Lee Building, Port Louis 11302,Mauritius</p> -->
                              </div>
                          </div>
                      </div>
                      <div class="col-md-2 col-sm-4 col-6">
                          <div class="footer__links" style="font-size: 12px;">
                              <div class="footer__links-tittle">
                                <h6>Address</h6>
                              </div>
                                <div class="footer__links-content">
                      <p class="footer__linklist-item"><i class="fa fa-map" aria-hidden="true"></i> &nbsp; &nbsp; Physical Office Address : <br>OFFICE-2008, Dubai BusinessBay, 33, Marasi Drive Road, CloverBay Tower 345-BURJ KHALIFA</p>
                                      <p class="footer__linklist-item"><i class="fa fa-map" aria-hidden="true"></i> &nbsp; &nbsp; Register Office : <br>20 Edith Cavell Street, Level 6 Ken Lee Building, Port Louis 11302,Mauritius</p>
                                    </div>
                                  </div>
                                </div>
                  </div>

                  <!-- <div class="row">
                    <div class="trade-warning border rounded border-light p-4 mt-5">
                      <h6 class="mb-1" style="color: #ffffff;"><span> <i class="fas fa-envelope fa-sm"></i> Contact Us</span></h6><br/>
                      <form action="" method="post" id="contact_form">
                        <div class="row">
                          <div class="col-md-6 col-sm-12 mb-3">
                            <input type="text" id="name" name="name" class="form-control form-control-sm" placeholder="Your Name" required>
                          </div>
                      
                          <div class="col-md-6 col-sm-12 mb-3">
                            <input type="email" id="email" name="email" class="form-control form-control-sm" placeholder="Your Email" required>
                          </div>
                            
                          <div class="col-md-6 col-sm-12 mb-3">
                            <input type="phone" id="phone" name="phone" class="form-control form-control-sm" placeholder="Your Phone" required>
                          </div>
                          <div class="col-md-6 col-sm-12 mb-3">
                            <input type="subject" id="subject" name="subject" list="subjects" class="form-control form-control-sm" placeholder="Your Subject" required>
                            <datalist id="subjects">
                              <option value="Technical Issue">
                              <option value="Deposit Issue">
                              <option value="Withdraw Issue">
                            </datalist>
                          </div>
                          <div class="col-sm-12 mb-3">
                            <textarea id="message" name="message" rows="2" class="form-control form-control-sm" placeholder="Your Message" required></textarea>
                          </div>
                          <div class="col-sm-4"></div>
                          <div class="col-sm-4 mb-3">
                          <div class="g-recaptcha" data-sitekey="6Le_UCgqAAAAAGPEc49CggwHwT3F0FBtZ9npXiWY"></div>
                          </div>
                          <div class="col-sm-4"></div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4 text-center">
                            <button type="submit" class="trk-btn trk-btn--border trk-btn--primary submit-btn">Send Message</button>
                            <button class="trk-btn trk-btn--border trk-btn--primary process-btn disabled" style="display:none;"><i class="fa fa-spinner fa-spin me-2"></i> Processing...</button>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>
                      </form>
                    </div>
                  </div> -->
                  
                  <div class="row">
                      <div class="trade-warning border rounded border-light p-4 mt-5">
                          <h6 class="mb-1" style="color: #ffffff;"><span> <i class="fas fa-triangle-exclamation fa-sm"></i> Risk warning</span></h6>
                          <p class="mb-0" style="color: #ffffff;"> Risk Warning: Pemaxx Liquidity Limited offers trading on Foreign Exchange (‘Forex’ or ‘FX’) and Contracts for Difference (‘CFDs’), which are complex financial products that are traded on margin. They carry a high level of risk since leverage can work both to your advantage and disadvantage. As a result, these products may not be suitable for all investors, as loss of all invested capital may occur. You should not risk more than you are prepared to lose. Before deciding to trade, you need to ensure that you understand the risks involved and consider your investment objectives and level of experience. Seek independent advice, if necessary.
                              Pemaxx Liquidity Limited does not issue advice, recommendations or opinions in relation to acquiring, holding or disposing of a CFD. Easy way global limited is not a financial advisor and all services are provided on an execution-only basis. This communication is not an offer or solicitation to enter into a transaction and shall not be construed as such.                                
                              This website is not directed at any jurisdiction and is not intended for any use that would be contrary to local law or regulation.                                
                              By using www.pemaxx.com you agree to use our cookies to enhance your experience.                                
                              <br>
                              Pemaxx Liquidity Limited, all right reserved 2023</p>
                              <br>
                              <br>
                              <br>
                              <p class="mb-0" style="color: #ffffff;">PeMaxx Liquidity does not offer financial services to the following country residents: China,N.Korea,United States of America and <a href="https://www.fatf-gafi.org/en/countries/black-and-grey-lists.html" target="_blank" style="color: #ff561c;" > FATF black listed countries.</a>
                              </p>
                      </div>

                      
                  </div>


              </div>
              <div class="footer__bottom">
                  <div class="footer__end">
                      <div class="footer__end-copyright">
                          <p class=" mb-0">© 2023 All Rights Reserved By <a href="#" target="_blank" rel="noopener">Pemaxx Global Liquidity</a>
                          </p>
                      </div>
                      <div>
                          <ul class="social">
                            <li class="social__item">
                              <a href="https://www.facebook.com/profile.php?id=100095345371541" target="_blank"  rel="noopener" class="social__link social__link--style1 active"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="social__item">
                              <a href="https://www.linkedin.com/feed/?trk=homepage-basic_sign-in-submit" target="_blank" rel="noopener" class="social__link social__link--style1"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="social__item">
                              <a href="https://www.instagram.com/pemaxxliquidityprovider/" class="social__link social__link--style1" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="social__item">
                              <a href=" https://twitter.com/PemaxxP" target="_blank"  rel="noopener" class="social__link social__link--style1"><i class="fab fa-twitter"></i></a>
                            </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer__shape">
          <span class="footer__shape-item footer__shape-item--1"><img src="assets/images/icons/footer_1.png" alt="shape icon"></span>
          <span class="footer__shape-item footer__shape-item--2"> <span></span> </span>
      </div>
    </footer>
    <!-- footer end here -->

    <!-- Success Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="messageModalLabel">Success</h5>
            <button type="button" class="close closeModal" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary closeModal" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <!-- scrollToTop start -->
    <a href="#" class="scrollToTop scrollToTop--home1"><i class="fa-solid fa-arrow-up-from-bracket"></i></a>
    <!-- scrollToTop ending -->

    <!-- vendor plugins -->

    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/fslightbox.js"></script>
    <script src="assets/js/purecounter_vanilla.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
    $(document).on('click','.closeModal',function(){
      $('#messageModal').modal('hide');
      
    });
    
   
    $(document).on("click", ".header-bar", function(){
        if($(this).hasClass("active")){
            $('.header-bar').removeClass("active");
            $('.menu--style1').removeClass("active");
        }
        else{
            $('.header-bar').addClass("active");
            $('.menu--style1').addClass("active");
        }
    });
    
      $(document).ready(function(){
          var form_submit = 0;
      $(document).on("submit", "#contact_form", function(e){
        e.preventDefault();
        if (form_submit === 0) {
          form_submit = 1;
          $.ajax({
            url: "https://pemaxx.com/process_contact.php",
            type: "POST",
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
              $('.submit-btn').css('display','none');
              $('.process-btn').css('display','block');
            },
            success: function (data) {
              if(data.status=='error'){
                  $('#messageModal .modal-header').removeClass('bg-success').addClass('bg-danger');
                  $('#messageModal .modal-title').html('Error');
                $('#messageModal .modal-body').html(data.message);
              }
              else{
                  $('#messageModal .modal-header').removeClass('bg-danger').addClass('bg-success');
                  $('#messageModal .modal-title').html('Success');
                $('#messageModal .modal-body').html(data.message);
              }
              $('#messageModal').modal('show');
              $('.process-btn').css('display','none');
            },
            error: function () {
              $('.submit-btn').css('display','block');
              $('.process-btn').css('display','none');
            },
            complete: function() {
              $('.submit-btn').css('display','block');
              $('.process-btn').css('display','none');
            }
          });
        }
        else{
            $('#messageModal .modal-header').removeClass('bg-success').addClass('bg-danger');
          $('#messageModal .modal-title').html('Error');
          $('#messageModal .modal-body').html("Form already submitted!!");
          $('#messageModal').modal('show');
        }
      });
      });
    </script>


  </body>

</html>