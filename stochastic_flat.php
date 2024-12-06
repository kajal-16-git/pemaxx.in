<?php
include_once('header.php');
?>

<style>
    body{
        background-color:#8080801f ;
    }
     p{
        font-size: 21px;
       text-align: justify;
    }
</style>

    <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_1.jpg); background-size: cover; background-position: bottom; height: 30ch;" >
        <div class="container pt-5">
          <div class="pt-5"></div>
          <h1 class="fs-2 text-white pt-5 mt-3"> Stochastic-based Strategy</h1>
          <nav class="breadcrumb text-light">
            <a class="breadcrumb-item text-light" href="index.php">Home</a>
            <a class="breadcrumb-item text-light" href="learn more.php">Trading Strategies</a>
            <span class="breadcrumb-item active text-light" aria-current="page">stochastic-based strategy</span>
          </nav>
        </div>
      </section>
    <div class="container my-5">
         <div class="card p-4">
             <div class="card-body">
                <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -32px;">

                <!-- Text Section (First Paragraph) -->
                <div class="row my-4">
                    <div class="col-12">
                        <h3 style= "display: flex;">
                          A simple stochastic-based strategy to trade in a flat market</h3><br><br>
                       </div>
                       <p>This strategy will teach you to trade in a flat market using one of the most common indicators.</p>
                  </div>
               </div> 
                        <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -32px;">
                            <p><b>Timeframe:</b> H4 chart for candlestick analysis, M15 chart for trading</p>
                     <p><b>Currency pairs:</b>all</p>
                      <p><b>Market state:</b>: flat</p>

                        <p>Required indicators:</p>
      <ul  style="list-style-type:disc;margin-left: 20px; font-size: 20px;">
        <li>Bllinger Bands (20, 2.5)</li>
        <li>RSI (14, 14, 2)</li>
         <li>Round number levels</li>
        
      </ul>
          <br><br>
          <h5>Entry steps for a short position <span style="color:red;">(Sell):</h5></span>
                     
      <ul  style="list-style-type:number;margin-left: 20px;font-size: 21px; ">
        <li> Look for an inside bar on a H4 timeframe and mark its borders.</li>
        <li>Jump to the M15 timeframe and wait for the price to touch the upper border.</li>
        <li> Make sure that the stochastic's value is greater than 80.</li>
        <li>
            Look for the first bearish candlestick closing below the upper border.
        </li>
        </ul><br>
      
          <div>   
         <b style="font-size:20px;">Stop Loss</b>
         <p>Place a Stop Loss above the previous swing high.</p><br>
        <b style="font-size:20px;">Take Profit</b>
         <p>Take your profit when risk to reward ratio reaches 1:2 or when the price touches the opposite border.
      </p>
      </div>


  </div><br>
  <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -31px;">
        <div>
          <img src="assets/images/gallery/trading-strategy-4-1.png" class="img-fluid" alt="Trading image 1" style="height: 323px;
             width: 654px;"><br><br><br>
         <img src="assets/images/logo/trading-strategt-3.png" alt="Alert Icon" class="img-fluid" alt="Trading image 1" style="height: 323px;
             width: 654px;">
      </div><br><br>
       <div>
        <h4>Entry steps for a long position  <span style="color:green;">(Buy):</span></h4>
      <ul  style="list-style-type:number;margin-left: 20px;font-size: 21px; ">
        <li>Look for an inside bar on H4 timeframe and mark its borders..</li>
        <li> Jump to the M15 timeframe and wait for the price to touch the lower border.</li>
         <li> Make sure that the stochastic's value is less than 20.</li>
        <li>Look for the first bullish candlestick closing above the lower border.</li>



      </ul><br>
      </div>
      <div>
      <b style="font-size:20px;">Stop Loss</b>
      <p>Place a Stop Loss below the previous swing low.</p><br>

      <b style="font-size:20px;">Take Profit</b>
      <p>Take your profit when the risk to reward ratio reaches 1:2 or when the price touches the opposite borderline.
      </p>
  </div>
      <div>
          <img src="assets/images/logo/trading-strategt2.png" class="img-fluid" alt="Trading image 1" style="height: 323px;
           width: 654px;"><br><br><br>
          
      </div>

        <div>
          <img src="assets/images/logo/trading-strategt-4.png" style="height: 323px;
           width: 654px;"><br><br>
          
      </div><br>

      </div>
      <div style="text-align: center;">
    <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c; border-radius:15px;">Trade Now</a>
       </div>
    </div>
    
                   
         <div class="container my-4" style="margin-left: -17px;">
            <div class="p-4 mx-auto" style="max-width: 650px;background-color: #f3f5fe;border-radius: 1.275rem;">
             <h6>Download indicators settings to your desktop platform</h6>
              <p>If you're looking for a quick method to apply the indicators from this strategy, click on the button below. Read detailed instructions <a href="#">here</a>.</p>
        <div class="row justify-content-center">
               <div class="col-12 col-md-4 my-2">
                <a href="learn more.php" class="btn w-75%" style="background-color: #ff561c; margin-left:35px;">Settings for MT5</a>
            </div>
           </div>
        </div>
    </div>
</div>
</div>
       
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
include_once('footer.php');
?>