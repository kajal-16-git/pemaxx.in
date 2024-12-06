<?php
include_once('header.php');
?>

<style>
    body{
        background-color:#8080801f ;
    }
    .circle-text {
        position: relative;
        padding-left: 25px; /* Adjust padding to make space for the circle */
    }
    
    .circle-text::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 10px; /* Circle width */
        height: 10px; /* Circle height */
        background-color: black; /* Circle color */
        border-radius: 50%; /* Makes it a circle */
    }
</style>

 <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_1.jpg); background-size: cover; background-position: bottom; height: 30ch;" >
        <div class="container pt-5">
          <div class="pt-5"></div>
          <h1 class="fs-2 text-white pt-5 mt-3">Average and RSI crossover strategy</h1>
          <nav class="breadcrumb text-light">
            <a class="breadcrumb-item text-light" href="index.php">Home</a>
           <a class="breadcrumb-item text-light" href="trading_strategies.php">Trading Strategies</a>
            <span class="breadcrumb-item active text-light" aria-current="page">Average and RSI crossover strategy</span>
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
                          The Moving Average and RSI crossover strategy</h3>
                       </div><br><br>
                  </div>
             <div>
                        <p style= "font-size: 20px;  ">
                           This trend-following strategy from our expert Manish Patel will help you improve your trading performance.<br> You can use it for trend trading, day trading, and scalping.
                           </p>
               </div>
                <br>
            
               <div>
                            <p style="margin-top: -27px;"><b>Level:</b> beginner and intermediate</p>
                     <p style="margin-top: -13px;">Timeframe: M15 (M5 for aggressive traders)</p>
                     <p style="margin-top: -13px;">Currency pairs: majors (EURUSD preferable)</p>
                     <p style="margin-top: -13px;">Market state: continuation (preferable)</p>
                     <p><b>Required indicators:</b></p>
      <ul  style="list-style-type:disc; ">
        <li style="margin-top: -18px;">3 EMAs (10, 20, 50)</li>
        <li>RSI (14), RSI levels (10, 45, 50, 55, 90)
        </li>
      </ul><br>
       
       <h4 class="mb-3"><strong>The Buy order setup</strong></h4>
       <p><b>Tack Profit</b></p>
       <p style="margin-top:-10px;">
        Take your profit with a risk/reward ratio of 1:1.5, 1:2, or 1:3.<br>
        Here is a simple setup of 3 EMAs and RSI, along with price levels (S&R zones, trendlines on an H1<br> timeframe) and an M15 trading timeframe.<br>
        You can use this simple setup to trade on an M15 timeframe to get from 10 to 60 pips with the Stop Loss 10<br>-20-30 pips.</p>
      <br><br>
      </div>
  </div>

               <div class="col-12 col-md-8 mx-auto mb-4" style="padding-left: -31px;">

               <div class="mb-5" style="display: flex; flex-direction: column;">
               <img src="assets/images/logo/1 start here.png" alt="Alert Icon" style="width: 571px; height: auto; border-radius: 26px;">
                <p style="margin-top: 10px;">Pic 1. RSI—No trade zone</p>
              </div>

        <h3> Entry conditions for a long position (Buy):
       <br></h3>
      
                     <p>To open a Buy order using this strategy, follow these steps:</p>
                     

            <div class="col-12 col-md-8 mb-4" style="    padding-left: 30px;" >

      <ul  style="list-style-type:number; ">
        <p></p>
        <li> The overall market trend should move upwards (minimum 1D, 4H, or 1H timeframe).</li>
        <li>Draw a trendline on a 1H timeframe or use the 50 MA to confirm an uptrend.</li>
        <li> Move to the M15 timeframe.</li>
        <li>Wait for all 3 EMAs to cross on the upward move and the RSI to be above 55 for a Buy order possibility.</li>
        <li>Once the price crosses above the 10 EMA, after crossing the 50 EMA and the 20 EMA, and the RSI is above 55, you can execute a Buy order.</li>
        <li> You can also get confirmation using such price action candlestick patterns as:
            <ul style="list-style-type:disc;">
                <li>the Bullish Marubozu</li>
                <li>the Bullish engulfing</li>
                <li> the Bullish hammer</li>
                <li>the Tweezer bottom</li>
                <li> the Inverted hammer</li>
                <li>the Morning Doji star</li>
                <li>the Bullish pin bar</li>
                <li> the Bullish inside bar</li>
                <li> the Dragonfly Doji and many other.</li>
            </ul>
        </li>
        <li>Set a minimum Take Profit of 10-15 or even 30-40 pips, or apply the Trailing Stop Loss.</li>
      </ul><br>
    </div>


    <div class="mb-5" style="display: flex; flex-direction: column;">
                            <img src="assets/images/logo/2 Confirmation Buy.png" alt="Alert Icon" style="width: 571px; height: auto; border-radius: 26px;">
                             <p style="margin-top: 10px;">Pic 2. Buy Confirmation</p>
                            </div>
                           
                            <div class="mb-5" style="display: flex; flex-direction: column; ">
                            <img src="assets/images/logo/3 Buy Setup.png" alt="Alert Icon" style="width:571px; height: auto; border-radius: 26px;">
                            <p style="margin-top:10px">Pic 3. Buy Setup</p>
                            </div>
                             
      <div>
      
      <h4>Exit conditions for a long position (Buy):</h4><br>

      <p>There are five ways you can close your Buy order:</p>

      <div>
      <ul  style="list-style-type:number;     margin-left: 20px;">
        <p></p>
        <li> Close your order as soon as your target reaches 10-15 pips, or a maximum of 30-50 pips if you haven't fixed the TP value.</li>
        <li>Close your order if prices are going below and close below the 10 EMA or the 20 EMA.</li>
        <li> Hold your order if you want to get maximum pips. But, once the price closes below the 50 EMA, you should <b>close</b> the order.</li>
        <li>After you reach your target, close your order if you see the following bearish price action candlesticks:
            <ul style="list-style-type:disc;">
                <li>the Bearish Marubozu</li>
                <li>the Bearish engulfing</li>
                <li>the Shooting star</li>
                <li>the Evening star</li>
                <li>the Tweezer top</li>
                <li>the Hanging man</li>
                <li>the Bearish pin bar</li>
                <li>the Bearish inside bar</li>
                <li>the Gravestone Doji and many other.</li>
            </ul>
        </li>
        <li>Close your order if the RSI is 45-50 or going up.</li>
      </ul><br>
</div>

    <div>
      <p><b>Stop Loss</b></p>
      <p>There are three ways you can use Stop Loss in this strategy:</p>
      </div>
      <div>
      <ul  style="list-style-type:number;    margin-left: 20px; ">
        <p></p>
        <li> You can use the Average True Range (ATR) formula:<br>
((Current ATR value × 1.5) + 10 pips approximately))</li>
        <li>You can set the SL 5-10 pips below the previous low from which you have executed the Buy order.</li>
        <li>  You can set the SL 10-20-30 pips below the 50 EMA, 10-20-30 pips below the crossing of 3 EMAs, or 10-<br>20-30 pips below the previous low of the 50 EMA</li>
    </ul>
</div>

        <h4>The Sell order setup</h4>
        <p><b>Take Profit</b></p>
        <p>Take your profit with a risk/reward ratio of 1:1.5, 1:2, or 1:3.<br>
Here is a simple setup of 3 EMAs and RSI, along with price levels (S&R zones, trendlines on an H1<br> timeframe) and an M15 trading timeframe.<br>
You can use this simple setup to trade on an M15 timeframe to get from 10 to 60 pips with a Stop Loss of 10-<br>20 pips.</p>

      <div class="mb-5" style="display: flex; flex-direction: column;">
          <img src="assets/images/logo/1 start here (1).png" class="img-fluid" alt="Trading image 1" style="width:571px;">
          <p style="margin-top:10px;">Pic 1. RSI—No trade zone</p>
      </div><br><br>
        
            <h4>Entry conditions for a short position (Sell):</h4>
            <p>To open a Sell order using this strategy, follow these steps:</p>

            <div>
      <ul  style="list-style-type:number;     margin-left: 20px;">
        <p></p>
        <li>  The overall market trend should be in downward movement (minimum 1D, 4H, or 1H timeframe).</li>
        <li> Draw a trendline on a 1H timeframe or use the 50 MA to confirm a downtrend.</li>
        <li>  Move to the M15 timeframe.</li>
        <li>Wait for all 3 EMAs to cross on the downward move and the RSI to be below 45 for a Sell order possibility.</li>
        <li> Once the price crosses below the 10 EMA, after crossing below the 50 EMA and the 20 EMA, and theRSI is below 45, you can execute a Sell order.</li>
        <li> You can also get confirmation using such price action candlestick patterns as:
                <p class="circle-text ">the Bearish Marubozu</p>
                <p class="circle-text ">the Bearish engulfing</p>
                <p class="circle-text ">the Shooting star</p>
                <p class="circle-text "> the Evening star</p>
                <p class="circle-text ">the Tweezer top</p>
                <p class="circle-text ">the Hanging man</p>
                <p class="circle-text ">the Bearish pin bar</p>
                <p class="circle-text "> the Bearish inside bar</p>
                <p class="circle-text ">the Gravestone Doji and many other.</p>
            
        <p class="circle-text "> Set a minimum Take Profit of 10-15 pips or even 30-40 pips, or apply the Trailing Stop Loss.</p>
      <br>
</div>
       <div class="mb-5" style="display: flex; flex-direction: column;">
          <img src="assets/images/logo/4 Confirmation Sell.png" class="img-fluid" alt="Trading image 1" style="width:571px;">
          <p style="margin-top:10px;">Pic 6. Sell Confirmation</p>
      </div><br><br>
        

                <div class="mb-5" style="display: flex; flex-direction: column;">
          <img src="assets/images/logo/5.1 Sell setup.png" class="img-fluid" alt="Trading image 1" style="width:571px;">
          <p style="margin-top:10px;">Pic 7. Sell Setup</p>
      </div><br><br>
        
       
      
      <h4>Exit conditions for a short position (Sell):</h4>
            <p>There are five ways you can close your Sell order:</p>

            <div>
      <!-- <ul  style="list-style-type:number; "> -->
        <p></p>
        <p>1.  Close your order as soon as your target reaches 10-15 pips, or a maximum of 30-50 pips if you haven't fixed the TP value.</p>
        <p>2.  Close your order if prices are going above and close above the 10 EMA or the 20 EMA.</p>
        <p>3.  Hold your order if you want to get maximum pips. But, once the price closes above the 50 EMA, you should close the order.</p>
        <p>4.After you reach your target, close your order if you see the following bullish price action candlesticks:</p>
        <!-- <ul style="list-style-type:disc;"> -->
                <p class="circle-text ">the Bullish Marubozu</p>
                <p class="circle-text ">the Bullish engulfing</p>
                <p class="circle-text ">the Bullish hammer</p>
                <p class="circle-text "> the Tweezer bottom</p>
                <p class="circle-text "> the Inverted hammer</p>
                <p class="circle-text ">the Morning Doji star</p>
                <p class="circle-text ">the Bullish pin bar</p>
                <p class="circle-text ">  the Bullish inside bar</p>
                <p class="circle-text ">the Dragonfly Doji and many other.</p>
        <p class="circle-text "> Close your order if the RSI is 45 or going up.</p>
      <br>
</div>
                <div>
                <p class="justify-content-center"><b>Stop Loss</b></p>
      <p>There are three ways you can use Stop Loss in this strategy:</p>
      <div class="col-12 col-md-8 mb-4" style="padding-left: 19px;" >

      <ul  style="list-style-type:number; ">
        <p></p>
        <li>  You can use the Average True Range (ATR) formula:<br>
((Current ATR value × 1.5) + 10 pips approximately))</li>
        <li>You can set the SL 5-10 pips above the previous high from which you have executed the Sell order.</li>
        <li>   You can set the SL 10-20-30 pips above the 50 EMA, 10-20-30 pips above the crossing of 3 EMAs, or 10-<br>20-30 pips above the previous high of the 50 EMA.</li>
    </ul>
</div>

    </div><br><br>
    
<div style="text-align: center;">
    <a href="https://crm.pemaxx.com/register" class="btn btn-warning mt-3 hover" style="background-color:#ff561c; border-radius:22px;">Trade Now</a>
    </div>
  </li>
  </ul>
  </div>
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