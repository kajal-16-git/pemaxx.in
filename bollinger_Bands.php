<?php
include_once('header.php');
?>

 <style>
    body{
        background-color:#8080801f ;
    }
    p{
        font-size: 20px;
         text-align: justify;
    }
    .img-fluid{
        max-width: 95%;
    }
 </style>

    <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_1.jpg); background-size: cover; background-position: bottom; height: 30ch;" >
        <div class="container pt-5">
           <div class="pt-5"></div>
           <h1 class="fs-2 text-white pt-5 mt-3">  Bollinger Bands</h1>
        <nav class="breadcrumb text-light">
             <a class="breadcrumb-item text-light" href="index.php">Home</a>
             <a class="breadcrumb-item text-light" href="trading_strategies.php">Trading Strategies</a>
         <span class="breadcrumb-item active text-light" aria-current="page">Bollinger Bands</span>
        </nav>
        </div>
      </section>


   <section>
        <div class="container my-5">
          <div class="card p-4">
            <div class="card-body">
                    <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -46px;">
                <!-- Main Heading Section -->
                <div class="row">
                 <div class="col-12">
                    <h6 style=" display: flex;flex-wrap: wrap;font-size:33px;margin-left"       >
                        The Bollinger Bands, the RSI, and round number levels strategy
                     </h6>
                    </div>
                   </div>

<!-- Text Section (First Paragraph) -->
               <div class="row my-4">
                <div class="col-12">
               <p style="text-align: center; display: flex; flex-wrap: wrap;margin-left: -48px;">
                   This strategy will help you identify situations when the price has deviated substantially from the norm and benefit from it.
                 </p>
               </div>
             </div>

               </div> 
                   <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -46px;">
                            <p><b>Timeframe:</b> all</p>
                     <p><b>Currency pairs:</b> all</p>
                      <p><b>Market state:</b>temporary price anomaly</p><br>
                            <p>Required indicators:</p>
      <ul  style="list-style-type:disc;margin-left: 20px; font-size: 20px;">
        <li>Bllinger Bands (20, 2.5)</li>
        <li>RSI (14, 14, 2)</li>
         <li>Round number levels</li>
        
      </ul>
       
  </div>
   <div class="container my-4">
    <center>
        <div class="p-4" style="max-width: 100%; width: 100%; max-width: 646px;background-color: #f3f5fe !important;border-radius: 1.275rem;margin-left: -66px;">
            <p>In order to choose the correct entry point for your trading positions, use the following recommendations</a>
            </p>
        </div>
    </center>
</div>

   <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -46px;">

      <ul  style="list-style-type:number;margin-left:20px;font-size: 20px;">
        <li>The price should close above the upper Bollinger Band line</li>
        <li>The divergence happens if the price goes up and MACD goes down.</li>
        <li>Set the entry point when MACD drops below zero.</li>
        
      </ul><br>
      <div>
      <b style="font-size:20px;">Stop Loss</b>
      <p>Set the Stop Loss order above the previous high and before the entry point.</p><br>

      <b style="font-size: 20px;">Take Profit</b>
      <p>Take your profit with a risk-reward ratio of 1:1.5.
      </p><br>
      <div>
          <img src="assets/images/gallery/trading-strategy2-buy.png" class="img-fluid" alt="Trading image 1">
      </div><br><br>
       <div>
        <h4>Entry steps for a short position (Sell):</h4>
      <ul  style="list-style-type:number;margin-left: 20px; font-size:20px;">
        <li>Make sure that the price closed above the upper Bollinger Band.</li>
        <li> Check that the RSI is above 70.</li>
        <li>Look for the first bearish closed candlestick.</li>
        <li>Ensure that the candlestick closed near a round number level.</li>
        
      </ul><br>
      </div>
      <div>
      <b style="font-size:20px;">Stop Loss</b>
      <p>Place Stop Loss above the previous swing high</p><br>

      <b style="font-size:20px;">Take Profit</b>
      <p>Take your profit when Risk-reward ratio reaches 1:1.5.
      </p><br>
  </div>
      <div>
          <img src="assets/images/gallery/trading-strategy2-sell.png" class="img-fluid" alt="Trading image 1"><br>

      </div><br><br>
      </div>
      <div style="text-align: center;">
    <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c; border-radius:15px;">Trade Now</a>
    </div>


    </div>
    
                   
   <div class="container my-4" style="margin-left:-16px">
            <div class="p-4 mx-auto" style="max-width: 674px;background-color: #f3f5fe;border-radius: 1.275rem;">
             <h6>Download indicators settings to your desktop platform</h6>
              <p>If you're looking for a quick method to apply the indicators from this strategy, click on the button below. Read detailed instructions <a href="#">here</a>.</p>
        <div class="row justify-content-center">
               <div class="col-12 col-md-4 my-2">
                <a href="learn more.php" class="btn w-75%" style="background-color: #ff561c; margin-left:36px;">Settings for MT5</a>
            </div>
           </div>
        </div>
    </div>

    
</div>


             
</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include_once('footer.php');
?>