<?php 	include_once('header.php'); ?>

<style>
    .btn-warning:hover {
        background-color: #012e69; /* Change the color to dark blue on hover */
        color: white; /* Change the text color to white on hover */
    }

   /* .card img {
            width: 50px;
            height: auto;
            margin-bottom: 15px;
        }
        .start-trading {
            background-color: #0066ff;
            color: white;
            font-weight: bold;
            border-radius: 30px;
        }*/
        .card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #ffffff;
    border-radius: 10px;
}

.card img {
    width: 100%; /* Ensure the image fills the card's width */
    height: auto; /* Maintain the aspect ratio */
    object-fit: cover; /* Make sure the image covers the available space without distorting */
    margin-bottom: -16px;

}

.image-container {
    margin-top: auto; /* Ensure the image stays at the bottom */
}

.start-trading {
    background-color: #0066ff;
    color: white;
    font-weight: bold;
    border-radius: 30px;
}

</style>

 <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_3.jpg); background-size: cover; background-position: bottom; height: 30ch;">
    <div class="container pt-5">
        <div class="pt-5"></div>
        <h1 class="fs-2 text-white pt-5 mt-3">Account Type</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Account Type</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Include Swiper's CSS and JS files -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<div class="container my-5">
    <h2 class="text-center mb-4">Pemaxx Trading Account Types</h2>

    <div class="swiper mySwiper">
        <div class="swiper-wrapper justify-content-center"> <!-- Center the cards -->
            <!-- Card 1 -->
           <div class="row justify-content-center">
            <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>ECN</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>5000$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.1PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td><strong>Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base Currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forex pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                             <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yes</td>
                            </tr>
                             <tr>
                    <td colspan="2">
                        <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                    </td>
                </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>PLATINUM</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>1000$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.3PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>ELITE</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>1000$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.3PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=" col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px; ">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>GOLD</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>100$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.5PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>SILVER</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>50$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.5PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>DIAMOND</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>30$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.6PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>TITANIUM</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>10$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.6PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
            <!-- Repeat this swiper-slide for more cards -->

        </div>
        <br>
        <div class="d-flex flex-column align-items-center">
    <h5>Open a trading account that best fits your trading style</h5>
    <br>
    <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Open Account</a>
</div>
        <!-- Pagination -->
        <!-- <div class="swiper-pagination"></div> -->

        <!-- Navigation buttons -->
       <!--  <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div> -->
    </div>
</div>

<!-- <section>
    <div class="container" >
        <h5 class="text-center mb-4">Pemaxx Forex account types compared</h5>
    </div>
    <div class="card platform-card p-3 shadow-sm">
                    <div class="platform-title text-center">TECHNICALLY ADVANCED</div>
                    <h5 class="text-center my-3">
                         MetaTrader 5
                    </h5>
                    <p><strong>Spread from:</strong> 0.6 pips</p>
                    <p><strong>Trading commission:</strong> $0</p>
                    <p><strong>Min deposit:</strong> $20 (Recommended: $100)</p>
                    <p><strong>Instruments:</strong> 277</p>
                    <ul>
                        <li>52 currency pairs</li>
                        <li>Gold and silver</li>
                        <li>3 energies</li>
                        <li>10 indices</li>
                        <li>34 cryptocurrencies</li>
                        <li>150 stocks</li>
                        <li>26 intraday assets</li>
                    </ul>
                </div>
            </div>

</section> -->

<!-- <section style="background-color: #f2f6ff; padding: 50px 0;">
    <div class="container">
        <h2 class="text-center" style="font-weight: bold; margin-bottom: 30px;">Pemaxx Forex account types compared</h2>
        
        <div class="table-responsive" style="max-width: 800px; margin: 0 auto;">
            <table class="table table-bordered text-center" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <thead style="background-color: white; border-bottom: 2px solid #000080;">
                    <tr>
                        <th style="width: 50%;"></th>
                        <th style="width: 50%; font-weight: bold;">MetaTrader 5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Floating spread</strong></td>
                        <td>From 0.6 pips</td>
                    </tr>
                    <tr>
                        <td><strong>No commissions, spread markup</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Base currency</strong></td>
                        <td>USD</td>
                    </tr>
                    <tr>
                        <td><strong>Minimum deposit</strong></td>
                        <td>20 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Forex pairs</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Metals</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Energies</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Indices</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Cryptocurrencies</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Stocks</strong></td>
                        <td>✔</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

     <div class="container">
        <div class="table-responsive" style="max-width: 800px; margin: 0 auto;">
            <table class="table table-bordered text-center" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <thead style="background-color: white; border-bottom: 2px solid #000080;">
                    <tr>
                        <th style="width: 50%;"></th>
                        <th style="width: 50%; font-weight: bold;">MetaTrader 5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Floating spread</strong></td>
                        <td>From 0.6 pips</td>
                    </tr>
                    <tr>
                        <td><strong>No commissions, spread markup</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Base currency</strong></td>
                        <td>USD</td>
                    </tr>
                    <tr>
                        <td><strong>Minimum deposit</strong></td>
                        <td>20 USD</td>
                    </tr>
                    <tr>
                        <td><strong>Forex pairs</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Metals</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Energies</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Indices</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Cryptocurrencies</strong></td>
                        <td>✔</td>
                    </tr>
                    <tr>
                        <td><strong>Stocks</strong></td>
                        <td>✔</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
 -->
<!-- <section style="padding: 50px 0;">-->
<!--    <div class="container">-->
<!--        <h2 class="text-center" style="font-weight: bold; margin-bottom: 30px;">Pemaxx Forex account types compared</h2>-->
                
<!--                <div class="content">-->
<!--        <div id="deposit" class="tab-content">-->
<!--            <div class="table-responsive">-->
<!--                <table class="table table-bordered table-hover">-->
<!--                    <thead class="thead-light">-->
<!--                        <tr>-->
<!--                            <th>Account Type</th>-->
<!--                            <th>Min.Deposit</th>-->
<!--                            <th>Spread form</th>-->
<!--                            <th>Commission</th>-->
<!--                            <th>Swap</th>-->
<!--                            <th>Floating spread</th>-->
<!--                            <th>Base Currency</th>-->
<!--                            <th>Forex pairs</th>-->
<!--                            <th>Metals</th>-->
<!--                            <th>Energies</th>-->
<!--                            <th>Indices</th>-->
<!--                            <th>Cryptocurrency</th>-->
<!--                            <th>Stock</th>-->
<!--                            <th></th>-->
<!--                        </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                        <tr>-->
<!--                            <td>ECN</td>-->
<!--                            <td>5000$</td>-->
<!--                            <td>0.1PIP</td>-->
<!--                            <td>7</td>-->
<!--                            <td>No</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>USD</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td>PLATINUM</td>-->
<!--                            <td>1000$</td>-->
<!--                            <td>0.3PIP</td>-->
<!--                            <td>0</td>-->
<!--                            <td>No</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>USD</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                            <td>ELITE</td>-->
<!--                            <td>1000$</td>-->
<!--                            <td>0.3PIP</td>-->
<!--                            <td>0</td>-->
<!--                            <td>No</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>USD</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>-->
<!--                        </tr>-->
<!--                        <tr>-->
<!--                           <td>GOLD</td>-->
<!--                            <td>100$</td>-->
<!--                            <td>0.5PIP</td>-->
<!--                            <td>0</td>-->
<!--                            <td>No</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>USD</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>-->
<!--                        </tr>-->

<!--                         <tr>-->
<!--                           <td>SIVER</td>-->
<!--                            <td>50$</td>-->
<!--                            <td>0.5PIP</td>-->
<!--                            <td>0</td>-->
<!--                            <td>No</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>USD</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>-->
<!--                        </tr>-->

<!--                            <tr>-->
<!--                           <td>DIAMOND</td>-->
<!--                            <td>30$</td>-->
<!--                            <td>0.6PIP</td>-->
<!--                            <td>0</td>-->
<!--                            <td>No</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>USD</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>-->
<!--                        </tr>-->

<!--                            <tr>-->
<!--                           <td>TITANIUM</td>-->
<!--                            <td>10$</td>-->
<!--                            <td>0.6PIP</td>-->
<!--                            <td>0</td>-->
<!--                            <td>No</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>USD</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td>Yes</td>-->
<!--                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>-->
<!--                        </tr>-->


<!--                    </tbody>-->
<!--                </table>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--        <br><br>-->
        <!-- <div class="row justify-content-center">
<!--            <div class="col-md-3 col-lg-3" style="min-width: 300px;">-->
<!--                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">-->
<!--                    <table class="table table-bordered text-center">-->
<!--                        <thead style="background-color: white; border-bottom: 2px solid #000080;">-->
<!--                            <tr>-->
<!--                                <th>ECN</th>-->
<!--                                <th style="font-weight: bold;">MetaTrader 5</th>-->
<!--                            </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td><strong>Min. Deposit</strong></td>-->
<!--                                <td>5000$</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Spread from</strong></td>-->
<!--                                <td>0.1PIP</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Commission</strong></td>-->
<!--                                <td>7</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Swap</strong></td>-->
<!--                                <td>No</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Floating Spread</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Base Currency</strong></td>-->
<!--                                <td>USD</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Forex pairs</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Metals</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Energies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Indices</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                             <tr>-->
<!--                                <td><strong>Cryptocurrencies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Stocks</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                             <tr>-->
<!--                    <td colspan="2">-->
<!--                        <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>-->
<!--                    </td>-->
<!--                </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-md-3 col-lg-3" style="min-width: 300px;">-->
<!--                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">-->
<!--                    <table class="table table-bordered text-center">-->
<!--                        <thead style="background-color: white; border-bottom: 2px solid #000080;">-->
<!--                            <tr>-->
<!--                                <th>PLATINUM</th>-->
<!--                                <th style="font-weight: bold;">MetaTrader 5</th>-->
<!--                            </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td><strong>Min. Deposit</strong></td>-->
<!--                                <td>1000$</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Spread from</strong></td>-->
<!--                                <td>0.3PIP</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Commission</strong></td>-->
<!--                                <td>0</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong> Swap</strong></td>-->
<!--                                <td>No</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Floating Spread</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Base currency</strong></td>-->
<!--                                <td>USD</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Forec pairs</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Metals</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Energies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Indices</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Cryptocurrencies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Stocks</strong></td>-->
<!--                                <td>Yss</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                 <td colspan="2">-->
<!--                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>-->
<!--                            </td>-->
<!--                            </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 col-lg-3" style="min-width: 300px;">-->
<!--                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">-->
<!--                    <table class="table table-bordered text-center">-->
<!--                        <thead style="background-color: white; border-bottom: 2px solid #000080;">-->
<!--                            <tr>-->
<!--                                <th>ELITE</th>-->
<!--                                <th style="font-weight: bold;">MetaTrader 5</th>-->
<!--                            </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td><strong>Min. Deposit</strong></td>-->
<!--                                <td>1000$</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Spread from</strong></td>-->
<!--                                <td>0.3PIP</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Commission</strong></td>-->
<!--                                <td>0</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong> Swap</strong></td>-->
<!--                                <td>No</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Floating Spread</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Base currency</strong></td>-->
<!--                                <td>USD</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Forec pairs</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Metals</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Energies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Indices</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Cryptocurrencies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Stocks</strong></td>-->
<!--                                <td>Yss</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                 <td colspan="2">-->
<!--                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>-->
<!--                            </td>-->
<!--                            </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class=" col-md-3 col-lg-3" style="min-width: 300px;">-->
<!--                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px; ">-->
<!--                    <table class="table table-bordered text-center">-->
<!--                        <thead style="background-color: white; border-bottom: 2px solid #000080;">-->
<!--                            <tr>-->
<!--                                <th>GOLD</th>-->
<!--                                <th style="font-weight: bold;">MetaTrader 5</th>-->
<!--                            </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td><strong>Min. Deposit</strong></td>-->
<!--                                <td>100$</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Spread from</strong></td>-->
<!--                                <td>0.5PIP</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Commission</strong></td>-->
<!--                                <td>0</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong> Swap</strong></td>-->
<!--                                <td>No</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Floating Spread</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Base currency</strong></td>-->
<!--                                <td>USD</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Forec pairs</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Metals</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Energies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Indices</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Cryptocurrencies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Stocks</strong></td>-->
<!--                                <td>Yss</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                 <td colspan="2">-->
<!--                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>-->
<!--                            </td>-->
<!--                            </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--             <div class="col-md-3 col-lg-3" style="min-width: 300px;">-->
<!--                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">-->
<!--                    <table class="table table-bordered text-center">-->
<!--                        <thead style="background-color: white; border-bottom: 2px solid #000080;">-->
<!--                            <tr>-->
<!--                                <th>SILVER</th>-->
<!--                                <th style="font-weight: bold;">MetaTrader 5</th>-->
<!--                            </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td><strong>Min. Deposit</strong></td>-->
<!--                                <td>50$</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Spread from</strong></td>-->
<!--                                <td>0.5PIP</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Commission</strong></td>-->
<!--                                <td>0</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong> Swap</strong></td>-->
<!--                                <td>No</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Floating Spread</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Base currency</strong></td>-->
<!--                                <td>USD</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Forec pairs</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Metals</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Energies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Indices</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Cryptocurrencies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Stocks</strong></td>-->
<!--                                <td>Yss</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                 <td colspan="2">-->
<!--                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>-->
<!--                            </td>-->
<!--                            </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--             <div class="col-md-3 col-lg-3" style="min-width: 300px;">-->
<!--                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">-->
<!--                    <table class="table table-bordered text-center">-->
<!--                        <thead style="background-color: white; border-bottom: 2px solid #000080;">-->
<!--                            <tr>-->
<!--                                <th>DIAMOND</th>-->
<!--                                <th style="font-weight: bold;">MetaTrader 5</th>-->
<!--                            </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td><strong>Min. Deposit</strong></td>-->
<!--                                <td>30$</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Spread from</strong></td>-->
<!--                                <td>0.6PIP</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Commission</strong></td>-->
<!--                                <td>0</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong> Swap</strong></td>-->
<!--                                <td>No</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Floating Spread</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Base currency</strong></td>-->
<!--                                <td>USD</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Forec pairs</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Metals</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Energies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Indices</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Cryptocurrencies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Stocks</strong></td>-->
<!--                                <td>Yss</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                 <td colspan="2">-->
<!--                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>-->
<!--                            </td>-->
<!--                            </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--             <div class="col-md-3 col-lg-3" style="min-width: 300px;">-->
<!--                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">-->
<!--                    <table class="table table-bordered text-center">-->
<!--                        <thead style="background-color: white; border-bottom: 2px solid #000080;">-->
<!--                            <tr>-->
<!--                                <th>TITANIUM</th>-->
<!--                                <th style="font-weight: bold;">MetaTrader 5</th>-->
<!--                            </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td><strong>Min. Deposit</strong></td>-->
<!--                                <td>10$</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Spread from</strong></td>-->
<!--                                <td>0.6PIP</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Commission</strong></td>-->
<!--                                <td>0</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong> Swap</strong></td>-->
<!--                                <td>No</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Floating Spread</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Base currency</strong></td>-->
<!--                                <td>USD</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Forec pairs</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Metals</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Energies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Indices</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Cryptocurrencies</strong></td>-->
<!--                                <td>Yes</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td><strong>Stocks</strong></td>-->
<!--                                <td>Yss</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                 <td colspan="2">-->
<!--                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>-->
<!--                            </td>-->
<!--                            </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div> -->-->
<!--    </div>-->
<!--</section>-->

 <section style="padding: 50px 0;">
    <div class="container ">
        <h2 class="text-center" style="font-weight: bold; margin-bottom: 30px;">Pemaxx Forex account types compared</h2>
                
                <div class="content">
        <div id="deposit" class="tab-content">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                   <!--  <thead class="thead-light text-center" style="margin-top:10px;">
                        <tr>
                            <th>Account Type</th>
                            <th>Min.Deposit</th>
                            <th>Spread form</th>
                            <th>Commission</th>
                            <th>Swap</th>
                            <th>Floating spread</th>
                            <th>Base Currency</th>
                            <th>Forex pairs</th>
                            <th>Metals</th>
                            <th>Energies</th>
                            <th>Indices</th>
                            <th>Crypto</th>
                            <th>Stock</th>
                            <th></th>
                        </tr>
                    </thead> -->

                    <div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="thead-light text-center" style="    vertical-align: top;">
            <tr>
                <th>Account Type</th>
                <th>Min. Deposit</th>
                <th>Spread Form</th>
                <th>Commission</th>
                <th>Swap</th>
                <th>Floating Spread</th>
                <th>Base Currency</th>
                <th>Forex Pairs</th>
                <th>Metals</th>
                <th>Energies</th>
                <th>Indices</th>
                <th>Crypto</th>
                <th>Stock</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
                    <tbody>
                        <tr>
                            <td>ECN</td>
                            <td>5000$</td>
                            <td>0.1PIP</td>
                            <td>7</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>USD</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>
                        <tr>
                            <td>PLATINUM</td>
                            <td>1000$</td>
                            <td>0.3PIP</td>
                            <td>0</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>USD</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>
                        <tr>
                            <td>ELITE</td>
                            <td>1000$</td>
                            <td>0.3PIP</td>
                            <td>0</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>USD</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>
                        <tr>
                           <td>GOLD</td>
                            <td>100$</td>
                            <td>0.5PIP</td>
                            <td>0</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>USD</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>

                         <tr>
                           <td>SIVER</td>
                            <td>50$</td>
                            <td>0.5PIP</td>
                            <td>0</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>USD</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>

                            <tr>
                           <td>DIAMOND</td>
                            <td>30$</td>
                            <td>0.6PIP</td>
                            <td>0</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>USD</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>

                            <tr>
                           <td>TITANIUM</td>
                            <td>10$</td>
                            <td>0.6PIP</td>
                            <td>0</td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>USD</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td><a href="https://crm.pemaxx.com/login" class="btn" style="background-color:#ff561c; color: white;">Deposit</a></td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <br><br>
        <!-- <div class="row justify-content-center">
            <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>ECN</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>5000$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.1PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>7</td>
                            </tr>
                            <tr>
                                <td><strong>Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base Currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forex pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                             <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yes</td>
                            </tr>
                             <tr>
                    <td colspan="2">
                        <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                    </td>
                </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>PLATINUM</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>1000$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.3PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>ELITE</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>1000$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.3PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class=" col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px; ">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>GOLD</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>100$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.5PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>SILVER</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>50$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.5PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>DIAMOND</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>30$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.6PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <div class="col-md-3 col-lg-3" style="min-width: 300px;">
                <div class="table-responsive" style="background-color: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-top: 40px;">
                    <table class="table table-bordered text-center">
                        <thead style="background-color: white; border-bottom: 2px solid #000080;">
                            <tr>
                                <th>TITANIUM</th>
                                <th style="font-weight: bold;">MetaTrader 5</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Min. Deposit</strong></td>
                                <td>10$</td>
                            </tr>
                            <tr>
                                <td><strong>Spread from</strong></td>
                                <td>0.6PIP</td>
                            </tr>
                            <tr>
                                <td><strong>Commission</strong></td>
                                <td>0</td>
                            </tr>
                            <tr>
                                <td><strong> Swap</strong></td>
                                <td>No</td>
                            </tr>
                            <tr>
                                <td><strong>Floating Spread</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Base currency</strong></td>
                                <td>USD</td>
                            </tr>
                            <tr>
                                <td><strong>Forec pairs</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Metals</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Energies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Indices</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Cryptocurrencies</strong></td>
                                <td>Yes</td>
                            </tr>
                            <tr>
                                <td><strong>Stocks</strong></td>
                                <td>Yss</td>
                            </tr>
                            <tr>
                                 <td colspan="2">
                                <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">Deposit</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> -->
    </div>
</section>



<section style=" padding: 50px 0;">
    <div class="container text-center">
        <h2 style="font-weight: bold;">How to open an Pemaxx trading account</h2>
        <p>
            To open your first Pemaxx trading account, sign up and <a href="#" style="color: #2b67db;">follow the instructions</a>.
            You can always open more trading accounts on different trading platforms for free.
        </p>

        <div class="row text-center mt-5">
            <div class="col-md-3 col-sm-6 mb-4">
                <div>
                    <img src="assets/images/icons/checked.png" alt="Sign up" class="mb-3" style="width: 53px;">
                    <h5><strong>Sign up</strong></h5>
                    <p>
                        <a class="btn-t48 tutorials__btn-link" style="color: #ff561c;" href=" https://crm.pemaxx.com/register" target="_blank">Register</a> and follow our trading account opening process.
                        Customise your account—real or demo—or just create a standard margin account in one click.
                    </p>
                </div>
            </div>

             <div class="col-md-3 col-sm-6 mb-4">
                <div>
                    <img src="assets/images/icons/profile.png" alt="Verify" class="mb-3" style="width:53px;">
                    <h5><strong>Verify</strong></h5>
                    <p>
                        Upload your ID for review. The process usually takes about 1–2 business hours. Once we confirm your identity, you can start  <a class="btn-t48 tutorials__btn-link" style="color: #ff561c;" href="depositswithdrawals.php" target="_blank">withdrawing funds</a> from your trading account.
                    </p>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 mb-4">
                <div>
                    <img src="assets/images/icons/paypal.png" alt="Deposit" class="mb-3" style="width:53px;">
                    <h5><strong>Deposit</strong></h5>
                    <p>
                        Make your first deposit: the minimum investment size is about 20 USD depending on the <a class="btn-t48 tutorials__btn-link" style="color: #ff561c;" href="paymentoption.php" target="_blank">payment method</a> you are using.
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div>
                    <img src="assets/images/icons/treding.png" alt="Trade" class="mb-3" style="width:53px;">
                    <h5><strong>Trade</strong></h5>
                    <p>
                        That's it, you are all set. Log in to your online trading account or download the app and launch it to start <a class="btn-t48 tutorials__btn-link" style="color: #ff561c;" href="Forex_Trading.php" target="_blank">trading Forex</a> pairs and other assets.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
      <a href=" https://crm.pemaxx.com/register" class="btn" style="background-color: #ff561c; color:white;">OPEN  ACCOUNT</a>
    </div>
    </div>
</section>


<div class="container text-center py-5">
    <h4 class="mb-5">Favorable trading conditions for all Pemaxx trading accounts</h4>

    <div class="row justify-content-center g-4">
        <div class="col-md-3">
    <div class="card p-3 h-100 d-flex flex-column">
        <div class="content">
            <h2 class="h5"><b>Pemaxx Status Program</b></h2>
            <p>Unlock lower spreads, personal guidance, and many other benefits by increasing your account balance.</p>
        </div>
        <div class="image-container mt-auto">
            <img src="assets/images/icons/condition.png" alt="Pemaxx Status">
        </div>
    </div>
</div>


        <div class="col-md-3">
            <div class="card p-3 h-100">
                
                <h2 class="h5"><b>No commissions or fees</b></h2>
                <p>Make trades free of charge: no trading commissions and no fees for deposits, withdrawals, or inactivity.</p>
                <img src="assets/images/icons/10.png" alt="No Commission" style="width: 122px; margin-left: 70px;">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 h-100">
               
                <h2 class="h5"><b>Flexible margin trading</b></h2>
                <p>Use leverage of up to 1:1000 to expand your trading possibilities and earn more with lesser deposits.</p>
                 <img src="assets/images/icons/margin.jpeg" alt="Flexible Margin">
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 h-100">
                
                <h2 class="h5"><b>Useful trading tools</b></h2>
                <p>Discover useful tools for traders: economic calendar, trading ideas and strategies, trading news, and more.</p>
                <img src="assets/images/icons/candal.jpeg" alt="Trading Tools" style="width: 171px;
    margin-left: 20px;">
            </div>
        </div>
    </div><br>
<div class="text-center mt-4">
      <a href=" https://crm.pemaxx.com/register" class="btn" style="background-color: #ff561c; color:white;">START TRADING</a>
    </div>
   <!--  <a href="https://crm.pemaxx.com/register" class="btn start-trading mt-5 px-4 py-2" style="background-color: #ff561c; color:white;">START TRADING</a>
</div> -->
<br><br>
<section style="background-color: #f8f9fa; padding: 30px;">
    <div class="container">
        <h1 class="text-center mb-4">FAQ</h1>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" data-bs-parent="#faqAccordion" style="background-color: white;  font-size: 17px;">
                       What is a trading account?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        A trading account is where you store funds and trade currencies or other assets. You can create multiple trading accounts for your pemaxx profile, each with its own balance and leverage.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" data-bs-parent="#faqAccordion" style="background-color: white;  font-size: 17px;">
                   What is a trading platform?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse">
                    <div class="accordion-body">
                       A trading platform is a software interface that provides access to the Forex market. Each platform has its own set of tools and tradable assets. pemaxx allows you to choose between three platforms: pemaxxTrader, MetaTrader 4, and MetaTrader 5. They define the three types of trading accounts offered by pemaxx.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" data-bs-parent="#faqAccordion"style="background-color: white;  font-size: 17px;">
                  How can I change the type of my pemaxx trading account?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                       You can only choose the trading platform when creating an account. Once it is created, you cannot switch the type of your pemaxx trading account. However, you can just create another one on a different trading platform—for free.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" data-bs-parent="#faqAccordion"style="background-color: white;  font-size: 17px;">
                   What is a margin account in trading?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                     A margin account is a trading account that allows using leverage to open larger orders. pemaxx features margin trading on all available trading accounts: you can use leverage of up to 1:1000 for Forex pairs.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" data-bs-parent="#faqAccordion"style="background-color: white;  font-size: 17px;">
                    What is a demat account?
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse">
                    <div class="accordion-body">
                       A demat account is a digital storage mostly used by Indian investors to hold securities in virtual form. The main difference between demat and trading accounts is that the former is just a repository, and the latter allows you to buy and sell your securities. pemaxx features only trading accounts.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" data-bs-parent="#faqAccordion"style="background-color: white;  font-size: 17px;">
                    What is the pemaxx Status Program?
                    </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      The pemaxx Status Program allows traders to unlock valuable benefits by increasing their trading account balance. The program is divided into four levels, and reaching each of them unlocks more benefits: lower spreads, faster transfers and withdrawals, personal help from pemaxx experts, and so on.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" data-bs-parent="#faqAccordion"style="background-color: white;  font-size: 17px;">
                    How does the pemaxx deposit bonus work?
                    </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      pemaxx provides a 50% bonus for all deposits exceeding 50 USD. To claim it, open a real account, make a deposit of at least 50 USD using any payment method, and activate your bonus. However, you cannot withdraw these bonus funds right away. To cash out, trade half of that sum in lots: for example, to take a bonus of 100 USD, you need to trade at least 50 lots.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" data-bs-parent="#faqAccordion"style="background-color: white;  font-size: 17px;">
                   Does pemaxx feature Islamic trading accounts?
                    </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse">
                    <div class="accordion-body">
                      All pemaxx trading accounts are swap-free and thus fully in line with Islamic rules. That means you do not need to open a special Islamic trading account: just sign up and start trading.
                    </div>
                </div>
            </div>
            <!-- More accordion items here -->
        </div>
    </div>
</section>


<!-- Swiper JS initialization -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 30,
            }
        }
    });
</script>

<!-- Add Bootstrap 5 CSS -->

</div>
</tbody>
</table>
</div>
</table>
</div>
</div>
</div>
</div>
</section>


<?php 	include_once('footer.php'); ?>