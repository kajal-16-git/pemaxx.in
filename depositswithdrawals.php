<?php   
 include_once('header.php');
 ?>
 <style>
    .hover-button:hover {
    background-color: #ff561c; /* Your desired hover color */
    text-color:white;
    color: white; /* Optional: change text color for better contrast */
}
  
 </style>


    <!-- Breadcrumb Start -->
     <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_3.jpg); background-size: cover; background-position: bottom; height: 30ch;">
    <div class="container pt-5">
        <div class="pt-5"></div>
        <h1 class="fs-2 text-white pt-5 mt-3">Deposits and Withdrawals</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Deposits and Withdrawals</li>
            </ol>
        </nav>
    </div>
</section>

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 col-lg-5">
            <div class="card text-center mb-4" style="background-color:#ffffff; border: 2px solid #032d69;">
                <img src="assets/images/logo/coin.png" class="card-img-top" alt="Dollar Coin" style="width: 50px;">
                <div class="card-body">
                    <h3 class="card-title">Seamless transfers</h3>
                    <p class="card-text">No commission and no hidden charges</p>
                    <a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c">MAKE A DEPOSIT</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-5">
            <div class="card text-center mb-4" style="background-color:#ffffff; border: 2px solid #032d69;">
                <img src="assets/images/logo/coin.png" class="card-img-top" alt="Mobile Phone" style="width: 50px;">
                <div class="card-body">
                    <h3 class="card-title">The Pemaxx trading app</h3>
                    <p class="card-text">Trade and manage your accounts on the go</p>
                    <a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c">DISCOVER NOW</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3 class="text-center mt-5">We accept all the most popular payment methods</h3>
    <div class="row">
        <div class="col-12 text-center mb-3">
           <div class="btn-group">
   <button class="btn btn-outline-dark tab-button hover-button" onclick="showTab('deposit')">Deposit</button>
<button class="btn btn-outline-dark tab-button hover-button" onclick="showTab('withdrawal')">Withdraw</button>

</div>

        </div>
    </div>
    <div class="content">
        <div id="deposit" class="tab-content">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Payment Method</th>
                            <th>Minimum Amount</th>
                            <th>Commission</th>
                            <th>Execution Time</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Credit Card</td>
                            <td>$10</td>
                            <td>Free</td>
                            <td>Instant</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>
                        <tr>
                            <td>Bank Transfer</td>
                            <td>$50</td>
                            <td>Free</td>
                            <td>Instant</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>
                        <tr>
                            <td>PayPal</td>
                            <td>$20</td>
                            <td>Free</td>
                            <td>Instant</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>
                        <tr>
                            <td>Cheque</td>
                            <td>$200</td>
                            <td>Free</td>
                            <td>Instant</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div id="withdrawal" class="tab-content" style="display: none;">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Payment Method</th>
                            <th>Minimum Amount</th>
                            <th>Commission</th>
                            <th>Execution Time</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bank Transfer</td>
                            <td>$100</td>
                            <td>Free</td>
                            <td>Instant</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Withdraw</a></td>
                        </tr>
                        <tr>
                            <td>PayPal</td>
                            <td>$50</td>
                            <td>Free</td>
                            <td>Instant</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Withdraw</a></td>
                        </tr>
                        <tr>
                            <td>Cash</td>
                            <td>$200</td>
                            <td>Free</td>
                            <td>Instant</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Withdraw</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<section class="service bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h5>Your favourite local banks—just around the corner</h5>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service__item card shadow-sm">
                    <div class="service__thumb mb-3">
                        <img src="assets/images/icons/card.svg" class="img-fluid" alt="Choose Transfer">
                    </div>
                    <div class="service__content">
                        <h5>1. Choose how to transfer</h5>
                        <p>Via ATM, at the bank branch, or using your mobile and online banking</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service__item card shadow-sm">
                    <div class="service__thumb mb-3">
                        <img src="assets/images/icons/icon-02.svg" class="img-fluid" alt="Make Transfer">
                    </div>
                    <div class="service__content">
                        <h5>2. Make a transfer</h5>
                        <p>Specify the payment details from your Personal Area</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service__item card shadow-sm">
                    <div class="service__thumb mb-3">
                        <img src="assets/images/icons/withdrawal.svg" class="img-fluid" alt="Notify Us">
                    </div>
                    <div class="service__content">
                        <h5>3. Notify us</h5>
                        <p>Keep the receipt or other payment proof and notify us about the transfer</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="tutorials__button" style="text-align: center;">
            <a class="btn-t48 tutorials__btn-link" style="padding: 0 52px;  color: #ff561c;font-size: 20px;" href="learn more.php" target="_blank">MT5</a>
        </div>
</section>

 <!-- <section class="secure-trading">
    <h2>Moving forward with secure trading</h2>
    <div class="col-lg-4 col-md-6 mb-4">
    <div class="card-container1">
        <div class="card-01">
            <img src="assets/images/gallery/promo-01.jpg" alt="Security of funds">
            <h3>The security of your funds is our top priority</h3>
            <a href="#" style="color:#ff561c;">Find out more</a>
        </div>
        <div class="card-01">
            <img src="assets/images/gallery/promo-02.jpg" alt="Negative Balance Protection">
            <h3>The Negative Balance Protection saves you from debts</h3>
            <a href="#" style="color:#ff561c;">Find out more</a>
        </div>
    </div>
</div>
</section> -->

<section class="secure-trading bg-light py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2>Moving forward with secure trading</h2>
        </div>
        <div class="row text-center">
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="assets/images/gallery/promo-01.jpg" class="img-fluid mb-3" alt="Security of funds">
                    <div class="card-body">
                        <h3 class="card-title">The security of your funds is our top priority</h3>
                        <a href="fundssecurity.php" style="color:#ff561c;">Find out more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <img src="assets/images/gallery/promo-02.jpg" class="img-fluid mb-3" alt="Negative Balance Protection">
                    <div class="card-body">
                        <h3 class="card-title">The Negative Balance Protection saves you from debts</h3>
                        <a href="nigativebalance.php" style="color:#ff561c;">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="tutorials__button" style="text-align: center;">
            <a class="btn-t48 tutorials__btn-link" style="padding: 0 52px;  color: #ff561c;font-size: 20px;" href="paymentoption.php" target="_blank">Payment option</a>
        </div>
</section>

      
   
<section style="background-color: #f8f9fa; padding: 30px;">
    <div class="container">
        <h1 class="text-center mb-4">FAQ</h1>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" data-bs-parent="#faqAccordion" style="background-color: white;  font-size: 17px;">
                        Which deposit and withdrawal methods are available in Pemaxx?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body" style="background-color: white;">
                        Deposit methods include Visa, Mastercard, Skrill, Neteller, Bitcoin, Ethereum, and more.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" data-bs-parent="#faqAccordion" style="background-color: white; font-size: 17px;">
                        Why are there no charges for deposits or withdrawals?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body" style="background-color: white;">
                        We don’t charge you any hidden commissions or fees. With these conditions, your trading outcomes can become even more beneficial. This is because we profit from spreads, which are the lowest on the market.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" data-bs-parent="#faqAccordion" style="background-color: white;  font-size: 17px;">
                        How to make a deposit to your trading account?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body" style="background-color: white;">
                        1) Log in to your Pemaxx profile.<br>
                        2) Press the New deposit button.<br>
                        3) Choose the trading account you want to top up.<br>
                        4) Choose your preferred payment method and the amount.<br>
                        5) Follow the payment method instructions.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" data-bs-parent="#faqAccordion" style="background-color: white;  font-size: 17px;">
                        How to withdraw a trading profit?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body" style="background-color: white;">
                        1) Ensure your account is verified—this is required by law.<br>
                        2) Log in to your Pemaxx profile.<br>
                        3) Press the Withdrawals button.<br>
                        4) Choose the payout method.<br>
                        5) Provide the required information and choose the trading account you want to withdraw from.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" data-bs-parent="#faqAccordion" style="background-color: white;  font-size: 17px;">
                        How quick are deposits and withdrawals with Pemaxx?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body" style="background-color: white;">
                        We offer you several instant deposit methods depending on your country. Withdrawals usually take no longer than 3 hours.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // Function to show the selected tab content and hide the other
    function showTab(tab) {
        // Hide all tab contents
        document.getElementById('deposit').style.display = 'none';
        document.getElementById('withdrawal').style.display = 'none';

        // Show the selected tab content
        document.getElementById(tab).style.display = 'block';
    }

    // Set the default tab (Deposit)
    document.addEventListener('DOMContentLoaded', () => {
        showTab('deposit');
    });
</script>
<?php   
 include_once('footer.php');
 ?>
