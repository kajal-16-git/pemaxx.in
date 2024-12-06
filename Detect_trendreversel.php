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
   <body>
    <section class="breadcrumb mb-0" style=" background-image: url(assets/images/bg/bg_1.jpg); background-size: cover; background-position: bottom; height: 30ch;" >
        <div class="container pt-5">
            <div class="pt-5"></div>
            <h1 class="fs-2 text-white pt-5 mt-3">  Detect Trend Reversal</h1>
        <nav class="breadcrumb text-light">
             <a class="breadcrumb-item text-light" href="index.php">Home</a>
             <a class="breadcrumb-item text-light" href="trading_strategies.php">Trading Strategies</a>
            <span class="breadcrumb-item active text-light" aria-current="page">Detect Trend Reversal</span>
            </nav>
          </div>
        </section>

    <section>
    <div class="container my-5">
        <div class="card p-4">
            <div class="card-body">
                  <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -25px;">
                <!-- Main Heading Section -->
                <div class="row">
                    <div class="col-12">

                        <h2 style="margin-left: -15px; display: flex;  wrap;font-size: 35px;">
                            Detect trend reversal with MACD <br>and Bollinger Bands
                        </h2>

                    </div>
                </div>

                <!-- Text Section (First Paragraph) -->
                <div class="row my-4">
                    <div class="col-12">
                        <p style= "display: flex;margin-left:-15px;">
                            This strategy will teach you to easily detect trend reversal and use it to your advantage.</p>
                        </div>
                     </div>
                 </div>
                  </div> 
                        <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -31px;">
                            <p><b>Timeframe:</b> all</p>
                     <p><b>Currency pairs:</b> all</p>
                      <p><b>Market state:</b>  reversal</p><br>
                            <p>Required indicators:</p>
      <ul  style="list-style-type:disc;margin-left: 20px;font-size: 20px; ">
        <li>MACD (12, 26, 9)</li>
        <li>Bollinger Bands (100, close, 2, 0)</li>
        
      </ul><br>
      <p>The main indicator in this strategy is MACD. It will help you detect divergence. Additionally, we will use Bollinger Bands to identify 'extreme' prices that might signal the reversal of the trend. This additional filter will help you increase the accuracy of the detected signals.</p>
      <p>To find the divergence in a Sell order, you need to draw an arrow on the histogram highs and another arrow on price highs and check if they move in different directions. For a Buy order, draw an arrow on histogram lows and another on price lows and check if they move in different directions.</p><br>

      <h4>Conversely, when Lead 1 crosses below Lead 2, it indicates a bearish crossover. That means the trend is probably heading downwards.</h4>
     </div>
            <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -31px;">
              <ul  style="list-style-type:number;margin-left: 20px;font-size: 20px; ">
              <li>The price should close above the upper Bollinger Band line</li>
              <li>The divergence happens if the price goes up and MACD goes down.</li>
              <li>Set the entry point when MACD drops below zero.</li>
              </ul><br>
            <div>
         <b style="font-size:20px;">Stop Loss</b>
         <p>Set the Stop Loss order above the previous high and before the entry point.</p>

         <b style="font-size:20px">Take Profit</b>
         <p>Take your profit with a risk-reward ratio of 1:1.5.
         </p>
         <div>
          <img src="assets/images/gallery/trading-strategy6-sell.png" class="img-fluid" alt="Trading image 1">
       </div><br><br>
         <div>
           <h4>Entry conditions for a long position (Buy):</h4>
           <ul  style="list-style-type:number;margin-left: 20px;font-size: 20px;">
           <li>The price should close above the upper Bollinger Band line</li>
           <li>The divergence happens if the price goes up and MACD goes down.</li>
          <li>Set the entry point when MACD drops below zero.</li>
          </ul><br>
        </div>
        <div>
       <b style="font-size:20px">Stop Loss</b>
       <p>Set the Stop Loss order above the previous high and before the entry point.</p>

       <b style="font-size:20px">Take Profit</b>
       <p>Take your profit with a risk-reward ratio of 1:1.5.
      </p>
  </div><br>
      <div>
          <img src="assets/images/gallery/trading-strategy6-buy.png" class="img-fluid" alt="Trading image 1"><br>
      </div><br>
      </div>
      <div style="text-align: center;">
    <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c; border-radius:15px;">Trade Now</a>
    </div>


    </div>
    
                   
     <!--  <div class="container my-4">
    <div class="p-4 bg-light rounded text-center">
        <h5>Download indicators settings to your desktop platform</h5>
        <p>If you're looking for a quick method to apply the indicators from this strategy, click on the button below. Read detailed instructions <a href="#">here</a>.</p>
        
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 my-2">
                <a href="https://crm.pemaxx.com/register" class="btn w-100" style="background-color: white;">Settings for MT5</a>
            </div>
        </div> -->
         <div class="container my-4">
            <div class="p-4 mx-auto" style="max-width: 710px;background-color: #f3f5fe;border-radius: 1.275rem;">
             <h6>Download indicators settings to your desktop platform</h6>
              <p>If you're looking for a quick method to apply the indicators from this strategy, click on the button below. Read detailed instructions <a href="#">here</a>.</p>
        <div class="row justify-content-center">
               <div class="col-12 col-md-4 my-2">
                <a href="learn more.php" class="btn w-75%" style="background-color: #ff561c; margin-left:30px;">Settings for MT5</a>
            </div>
           </div>
        </div>
    </div>

    
    </div>
</div>

             
</section>
</body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include_once('footer.php');
?>