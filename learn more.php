<?php
include_once('header.php');
?>

<style>
      @media (max-width: 768px) {
             

            .nav-item {
                width: 100% !important; /* Make tabs full width on mobile */
                margin-bottom: 5px; /* Add space between each tab */

            }
        }

.download-button {
            display: flex;
            align-items: center;
            background-color: #000; /* Button background color */
            color: #00ff00; /* Text color */
            padding: 10px 15px; /* Padding */
            border-radius: 5px; /* Rounded corners */
            text-decoration: none; /* Remove underline */
            font-weight: bold; /* Bold text */
            font-family: Arial, sans-serif; /* Font family */
        }

        .download-button i {
            margin-right: 10px; /* Space between icon and text */
            font-size: 20px; /* Icon size */
            
        }

        .download-button:hover {
            background-color: #333; /* Change background on hover */
        }
        .btn-warning:hover {
        background-color: #012e69; /* Change the color to dark blue on hover */
        color: white; /* Change the text color to white on hover */
    }
     /*body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 100px;
        }
        .text-section {
            max-width: 600px;
        }
        .text-section h1 {
           font-size: 42px;
           font-weight: 600;
           margin-left: -217px;
        }
        .text-section ul {
            list-style-type: none;
            padding: 0;
            font-size: 16px;
            color: #333;
                margin-left: -181px;
        }
        .text-section ul li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 20px;
        }
        .text-section ul li:before {
            content: '•';
            position: absolute;
            left: 0;
            color: #28a745;
            font-size: 18px;
            font-weight: bold;
        }
        .cta-links {
            margin-top: 20px;
        }
        .cta-links a {
            display: block;
            color: #28a745;
            text-decoration: none;
            margin-bottom: 10px;
        }
        .cta-links a:hover {
            text-decoration: underline;
        }
        .image-section img {
            max-width: 100%;
            height: auto;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                text-align: center;
            }
            .image-section {
                margin-top: 20px;
            }
        }*/

          section {
        margin-left: 0;
        margin-top: 20px;
    }

    /* Media Queries for Mobile Responsiveness */
    @media (max-width: 767px) {
        .text-section h1 {
            font-size: 24px;
            text-align: center; /* Center text on mobile */
        }

        .text-section ul {
            padding-left: 20px; /* Adjust padding for mobile */
        }

        .img-fluid {
            max-height: 300px; /* Reduce image size for smaller screens */
            margin-top: 0;
        }
    }

    @media (min-width: 768px) {
        .text-section h1 {
            text-align: left; /* Left align for larger screens */
        }

        .img-fluid {
            max-height: 622px; /* Original image size for larger screens */
        }
    }
    .img-fluid {
            max-width: 106%;
            height: auto;
        }
        .text-container {
            background-color: #1E90FF;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .text-container h2 {
            font-size: 2.5rem;
        }
        .text-container a {
            color: white;
            font-weight: bold;
            text-decoration: underline;
            display: block;
            margin-top: 10px;
        }

         .button-green {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 5px;
            text-align: center;
            display: inline-block;
            margin-top: 20px;
        }
        .button-green:hover {
            background-color: #218838;
            color: white;
            text-decoration: none;
        }
       
        .list-right {
    counter-reset: listItem; /* Initialize the counter */
}

.list-right li {
    list-style: none; /* Remove the default list styling */
    position: relative;
    padding-left: 30px; /* Space for the number */
}

.list-right li:before {
    content: counter(listItem, decimal-leading-zero) " - "; /* Leading zeros */
    counter-increment: listItem; /* Increment the counter */
    position: absolute;
    left: 0;
    color: #000; /* Number color (change as needed) */
    font-weight: bold; /* Make the numbers bold if needed */
}

      

</style>

   <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_3.jpg); background-size: cover; background-position: bottom; height: 30ch;">
    <div class="container pt-5"style="margin-top: -28px;">
        <div class="pt-5"></div>
        <h1 class="fs-2 text-white pt-5 mt-3" style="font-size: 3rem !important;">MetaTrader 5</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">MetaTrader 5</li>
            </ol>
        </nav>
    </div>
</section>

<!-- <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_3.jpg); background-size: cover; background-position: bottom; height: 45ch;">
    <div class="container pt-5" style="margin-top: -25px;">
        <div class="pt-5"></div>
        <h1 class="fs-2 text-white pt-5 mt-3" style="font-size: 3rem !important;">MetaTrader 5 FREE Trading Software</h1>
        <h5 style="color: white;">The World’s Next Most Popular<br> Forex Trading Platform</h5>
         
           <a href="#" class="btn" style="background-color: #ff561c;">DOWNLOAD </a>
                          
        <nav class="breadcrumb text-light">
            <span class="breadcrumb-item active text-light" aria-current="page"></span>
        </nav>
    </div>
</section> -->

<section class="mt5-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <div>
                <img src="assets/images/gallery/logo.png" alt="logo" style="height: 271px;
    width: 498px;">
          
        </div>
        <div class="row justify-content-center mt-4" >
            <div class="col-12 col-md-8 text-center">
                <h1 style="font-size: 2rem;">Download MetaTrader 5 for your device</h1>
            </div>
        </div>
    </div>
</section>

<!-- Tabs for Platform Selection -->
<div class="container mt-4">
    <ul class="nav nav-tabs justify-content-center row" id="platformTab" role="tablist" style="margin-top: 142px;">
        <li class="nav-item col-2">
            <a class="nav-link" id="android-tab" data-bs-toggle="tab" href="#android" role="tab" aria-controls="android" aria-selected="false">Android</a>
        </li>
        <li class="nav-item col-2">
            <a class="nav-link" id="ios-tab" data-bs-toggle="tab" href="#ios" role="tab" aria-controls="ios" aria-selected="false">IOS</a>
        </li>
        <li class="nav-item col-2">
            <a class="nav-link" id="windows-tab" data-bs-toggle="tab" href="#windows" role="tab" aria-controls="windows" aria-selected="false">Windows</a>
        </li>
        <li class="nav-item col-2">
            <a class="nav-link" id="mac-tab" data-bs-toggle="tab" href="#mac" role="tab" aria-controls="mac" aria-selected="false">macOS</a>
        </li>
        <li class="nav-item col-2">
            <a class="nav-link active" id="web-tab" data-bs-toggle="tab" href="#web" role="tab" aria-controls="web" aria-selected="true">Web platform</a>
        </li>
    </ul>
</div>

    <div class="tab-content mt-4">
        <!-- Web Platform Content -->
        <div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="web-tab">
            <section class="feature-section">
                <div class="container">
                    <div class="row align-items-center" style="margin-top: 80px;">
                        <div class="col-lg-6 col-md-12 text-center">
                            <img src="assets/images/gallery/screen-web@1x.png" alt="Trading Platform on Laptop" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h3>MetaTrader 5 Web platform</h3>
                            <p>Trade Forex and indices with the MetaTrader 5 <a class="btn-t48 tutorials__btn-link" style=" color: #ff561c;" href=" https://web.metatrader.app/terminal" target="_blank">web platform </a>without installing or downloading any software application. You can trade on the Forex market with any browser and operating system with an internet connection. Access your trading account with MetaTrader 5 web platform right now.</p>
                           
                             <div class="text-center mt-4">
                         <a href=" https://web.metatrader.app/terminal" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">LOGIN</a>
                         </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Android Platform Content -->
        <div class="tab-pane fade" id="android" role="tabpanel" aria-labelledby="android-tab">
            <section class="feature-section">
                <div class="container">
                    <div class="row align-items-center" style="margin-top: 80px;">
                        <div class="col-lg-6 col-md-12 text-center">
                            <img src="assets/images/gallery/screen-android@1x.png" alt="Trading Platform on Android" class="img-fluid" style="width: 189px;">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h3>
                         MetaTrader 5 for Android</h3>
                    <p> Download MetaTrader 5 on your Android phone or tablet and trade currencies on the go. MetaTrader 5 is available for Android allowing you to trade and check your account from wherever you are. Using your smartphone or tablet you can access the main features of the platform.</p>
                            <div class="text-center mt-4" style="margin-left: 131px;">
                               <a href=" https://download.mql5.com/cdn/mobile/mt5/android?server=PemaxxLiquidity-Server" class="download-button" style="width: 179px;
                                margin-left: 21px;height: 51px;">
                                  <i class="fab fa-android " style="margin-bottom: 10px;
                                    width: 42px;
                                   height: 31px;"></i> 
                                <span style="color: white;">DOWNLOAD ANDROID APK</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="tab-pane fade" id="ios" role="tabpanel" aria-labelledby="ios-tab">
            <section class="feature-section">
                <div class="container">
                    <div class="row align-items-center" style="margin-top: 80px;">
                        <div class="col-lg-6 col-md-12 text-center">
                            <img src="assets/images/gallery/screen-android@1x.png" alt="Trading Platform on Android" class="img-fluid" style="    width: 233px;">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h3>MetaTrader 5 for Ios</h3>
                            <p>Download MetaTrader 5 on your Ios phone or tablet and trade currencies on the go. MetaTrader 5 is available for Ios allowing you to trade and check your account from wherever you are. Using your smartphone or tablet you can access the main features of the platform.</p>
                            <div class="text-center mt-4" style="margin-left: 131px;">
                               <a href="  https://download.mql5.com/cdn/mobile/mt5/ios?server=PemaxxLiquidity-Server" class="download-button" style="width: 179px;
                                margin-left: 21px;height: 51px;">
                                  <i class="fa-brands fa-apple" style="margin-bottom: 10px;
                                    width: 42px;
                                   height: 31px;"></i> 
                                <span style="color: white;">DOWNLOAD IOS APK</span>
                                </a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- Windows Platform Content -->
        <div class="tab-pane fade" id="windows" role="tabpanel" aria-labelledby="windows-tab">
            <section class="feature-section">
                <div class="container">
                    <div class="row align-items-center" style="margin-top: 80px;">
                        <div class="col-lg-6 col-md-12 text-center">
                            <img src="assets/images/gallery/screen-windows@1x.png" alt="Trading Platform on Windows" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h3>MetaTrader 5 for Windows</h3>
                            <p>Download MetaTrader 5 and start trading Forex and indices with amazing functionality, technical and fundamental market analysis, copy trading and automated trading features incorporated into this platform. This version offers a diversity of order types and execution modes.</p>
                            <!--  <div class="text-center mt-4">
                         <a href="https://download.mql5.com/cdn/web/pemaxx.liquidity.limited/mt5/pemaxxliquiditylimited5setup.exe" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">DOWNLOAD</a>
                         </div> -->
                         <div class="text-center mt-4" style="margin-left: 131px; ">
                     <a href=" https://download.mql5.com/cdn/web/pemaxx.liquidity.limited/mt5/pemaxxliquiditylimited5setup.exe" class="download-button" style="width: 179px;
                                margin-left: 21px;height: 51px;">
                                  <i class="fa-brands fa-windows" style="margin-bottom: 10px;
                                    width: 42px;
                                   height: 31px;"></i> 
                                <span style="color: white; ">DOWNLOAD</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- macOS Platform Content -->
        <div class="tab-pane fade" id="mac" role="tabpanel" aria-labelledby="mac-tab">
            <section class="feature-section">
                <div class="container">
                    <div class="row align-items-center" style="margin-top: 80px;">
                        <div class="col-lg-6 col-md-12 text-center">
                            <img src="assets/images/gallery/screen-desktop@1x.png" alt="Trading Platform on macOS" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h3>MetaTrader 5 for macOS</h3>
                            <p>Download MetaTrader 5 and start trading Forex and indices with amazing functionality, technical and fundamental market analysis, copy trading and automated trading features incorporated into this platform. This version offers a diversity of order types and execution modes.</p>
                        
                          <div class="text-center mt-4" style="margin-left: 131px;">
                               <a href=" https://download.mql5.com/cdn/web/metaquotes.ltd/mt5/MetaTrader5.pkg.zip?utm_source=www.metatrader5.com&amp;utm_campaign=download.mt5.macos" class="download-button" style="width: 179px;
                                margin-left: 21px;height: 51px;">
                                  <i class="fa-brands fa-apple" style="margin-bottom: 10px;
                                    width: 42px;
                                   height: 31px;"></i> 
                                <span style="color: white;">DOWNLOAD</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div><br><br>


 <div class="container my-5">
        <div class="row align-items-center"style="margin-top: 116px;">
            <!-- Left text column -->
            <div class="col-md-8">
                <h2>The Next Generation Trading Platform to Replace MT4</h2>
                <p>MetaTrader 5, or MT5, is a next-gen multi-asset trading platform that will replace MT5 in the very near future. Its back-testing functions are not only faster than those of MT5, but it also allows simultaneous multi-pair testing. A similar graphical interface to MT5 will help you get used to the platform quickly, while unique MT5 integration with centralized exchanges enables traders to trade commodities and indices in addition to Forex.</p>
               
            </div>
            <!-- Right list column -->
            <div class="col-md-4 list-right">
                <ol style="background-color: rgba(0, 0, 0, 0.075); ">
                      
                    <li>Easy trading</li>
                    <li>Algorithmic trading</li>
                    <li>Pemaxx MT5 demo &amp; features</li>
                
                </ol>
            </div>
        </div>
    </div>




<section class="feature-section">
                <div class="container">
                    <div class="row align-items-center" style="margin-top: 80px;">
                        <div class="col-lg-6 col-md-12 text-center">
                            <img src="assets/images/gallery/screen-desktop@1x.png" alt="Trading Platform on macOS" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <h3>Why Choose MetaTrader 5?</h3>
                            <p>MetaTrader 5 (MT5), besides simply offering more than <a class="btn-t48 tutorials__btn-link" style="  color: #ff561c;" href="learn more.php" target="_blank">MT5</a>  does, also includes features and trading functionalities that are better than many other online trading platforms available today. With MT5, MetaQuotes Software has increased the number of technical analysis tools available, along with more charting and timeframe options. Problems like limited types of pending orders and inability to segregate or get a quick ask/buy with a few clicks have been eliminated, making trading easier and slicker through additional for-traders features.</p>
                           
                            <div class="text-center mt-4">
                         <a href="https://download.mql5.com/cdn/web/metaquotes.ltd/mt5/MetaTrader5.pkg.zip?utm_source=www.metatrader5.com&amp;utm_campaign=download.mt5.macos" class="btn btn-warning mt-3 hover" style="background-color:#ff561c;">DOWNLOAD</a>
                         </div>
                        </div>
                    </div>
                </div>
            </section>

<section class="py-5" style="background-color: #f6f7f8;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-lg-6 mb-4 text-section">
                <h1 class="text-center text-lg-start">Easier Trading with MetaTrader 5</h1>
                <ul style="list-style-type: disc">
                    <li><b>More pending order types:</b> Traders can place eight types of pending orders to get more precise control over open positions.</li>
                    <li><b>Cryptocurrency trading:</b> MT5 allows intraday swing trading or position trading. A new hedging feature enables scalping as well.</li>
                    <li><b>One-click trading:</b> MT5 simplifies the process of opening a new position with a single click.</li>
                    <li><b>More technical analysis tools:</b> MT5 includes additional technical tools, which provide options to choose from over 21 timeframes for charting.</li>
                    <li><b>Clear segregation:</b> MT5 allows segregation between the terms of order, position, and transaction.</li>
                    <li><b>Optimized strategy tester:</b> Improved testing capabilities for expert advisors and detailed presentation of results.</li>
                    <li><b>Improved EAs:</b> Integrated MQL Forex market product tabs for EAs.</li>
                    <li><b>Economic calendar:</b> Traders can stay up-to-date on economic events, data, and indicators in real-time, every hour, for market monitoring.</li>
                </ul>
            </div>

            <!-- Image Section -->
            <div class="col-lg-6 text-center">
                <img src="assets/images/gallery/screen-iphone-lg@1x.png" alt="Trading Platform on Windows" class="img-fluid mx-auto" style="max-height: 622px;">
            </div>
        </div>
    </div>
</section>


<section class="d-flex align-items-center center-content py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Text Section -->
            <div class=" text-section">
                <h2 class="mb-3 text-center">Trading on MT5 Supports All Order Types</h2>
                <p class="text-center" style="margin-left: 0;">MT5 trading software gives traders the ease of achieving their trading objectives, regardless of whether they are looking for request, instant, exchange, or market execution. With the MT5 trading platform, you can place any type of trade order, including pending, market, stop, and trailing stop orders.</p>
                
                <ul class="mt-4" style="list-style-type: disc; padding-left: 20px;">
                    <li><b>Market orders:</b> For instant execution, trade orders can be immediately completed with traders or brokers' consent. There are two types of market orders on MT5.</li>
                    <li><b>Pending orders:</b> Orders can be executed in the future as soon as the market situation agrees with the specified conditions. There are six pending orders available.</li>
                    <li><b>Stop orders:</b> Can be used with both market and pending orders to minimize losses and lock in profits. There are two stop orders on MT5.</li>
                    <li><b>Trailing stop:</b> Stop-losses can be trailed to follow the current price. If the price moves in the opposite direction, the stop-loss levels are changed.</li>
                </ul>
                
                <a href="https://crm.pemaxx.com/register" class="text-success d-block text-center mt-4">LEARN HOW TO START WITH METATRADER 5</a>
            </div>
        </div>
    </div>
</section>
 <div class="container">
        <div class="row align-items-center my-5">
            <!-- Image column -->
            <div class="col-md-6 text-center">
               <img src="assets/images/gallery/screen-set@1x.png" alt="Trading Platform on Laptop" class="img-fluid">
            </div>
            <!-- Text column -->
            <div class="col-md-6 text-container" style=" height: 592px;
    width: 433px;
    margin-left: -4px; background-color: #022d6a;">
                <div>
                    <h2 style="color:#fff;">MetaTrader 5 runs on all major devices</h2>
                    <p>MetaTrader 5 is available as a web platform that's compatible with Windows, Linux, and Mac OS. MT5 can also be accessed from a smartphone or tablet, whether it has an iOS or Android operating system. Trade anytime and anywhere, and have access to trading information 24 hours a day, even while you're traveling or on vacation. It's super easy to download and install the terminal on any compatible device.</p>
                    <a href=" https://download.mql5.com/cdn/mobile/mt5/android?server=PemaxxLiquidity-Server">HOW TO INSTALL MT5 ON MOBILE</a>
                    <a href="https://download.mql5.com/cdn/web/pemaxx.liquidity.limited/mt5/pemaxxliquiditylimited5setup.exe">HOW TO INSTALL MT5 ON DESKTOP</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<section class="d-flex align-items-center center-content py-5">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Text Section -->
            <div class=" text-section">
                <h2 class="mb-3 text-center">MetaTrader 5 Is a Flexible Trading System You Will Love</h2>
                <p class="text-center" style="margin-left: 0;">The user-friendly and robust trading platform gives an up-to-date account information and enables greater flexibility in executing trades. The system offers two major accounting modes:</p>
                
                <ul class="mt-4" style="list-style-type: disc; padding-left: 20px;">
                    <li><b>Hedging mode:</b> Adopted for Forex trading; a new position is opened with any new deal on a financial instrument.</li>
                    <li><b>Netting mode:</b> Adopted for exchange markets; it enables traders to open only one position on a financial instrument at a time.</li>
                   
                </ul>
                
                
        </div>
    </div>
</section>
    
    <section class="d-flex align-items-center center-content py-5" style="background-color: #f6f7f8;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <!-- Text Section -->
            <div class=" text-section">
                <h2 class="mb-3 text-center" style="margin-top: 45px;">MetaTrader 5 Сharting Tools for Technical Analysis</h2>
                <p class="text-center" style="margin-left: -14px;">MT5 has 44 analytical objects, including Gann, Fibonacci retracements, Elliott Tools, Geometric Shapes, and more. Apply objects on charts manually, set calculation parameters, and customize the appearance of graphical objects according to your taste.</p>
               <!--  <a href="#" class="text-success d-block mt-4"><u>How to perform technical analysis of the Forex market</u></a> -->
                <p style="    margin-top: 41px;">
                Choose from the most popular technical indicators that are unique to MetaTrader 5: Trend Oscillators, Volume Indicators, and Bill Williams’ Tools. Add indicators to the price charts or use as separate sub-windows with individual scales of value. You can also overlap indicators on one chart for better control. Moreover, whenever you feel you need more indicators for your specific <a class="btn-t48 tutorials__btn-link" style="  color: #ff561c;" href="trading_strategies.php" target="_blank">trading strategies</a>, you can access the Market and Code Base to download additional indicators for the MetaTrader 5 trading platform. Developers can access MetaEditor to build customised indicators for the platform.</p>

              <!--   <a href="#" class="text-success d-block mt-4"><u>How to use Autochartist MetaTrader plugin</u></a> -->
                
        </div>
    </div>
</section>
<section class="feature-section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Text Content -->
        <div class="col-lg-6 col-md-12 content" style="margin-top: -145px; margin-top: 69px;">
          <h3 style="margin-top: -21px;">Fundamental Analysis on MT5</h3>
          <h6 style="margin-top: 32px"> Macroeconomic Indicators/Economic Calendar</h6>
           <p style="margin-top: 28px;">
           The MetaTrader 5 Economic Calendar is where important macroeconomic indicators can be viewed in real time, in order to forecast price trends. The calendar features both current and past weeks’ events, while also publishing upcoming events. All indicators come with release time, priority, and previous values. There is color coding to demonstrate the difference in expected values and actual values of the indicators.
          <p style="margin-top: 57px;">
            The indicators can be viewed on the ‘Calendar’ tab of the Toolbox window. To add indicators tothe charts, simply click on ‘Add All Events’ in the calendar menu <a class="btn-t48 tutorials__btn-link" style=" color: #ff561c;" href="trading_strategies.php" target="_blank">here</a>
.
           </p>

          </p>
        </div>
        <!-- Image Content -->
        <div class="col-lg-6 col-md-12 image">
          <img src="assets/images/gallery/screen-desktop@1x.png" alt="Trading Platform on Laptop" style="max-width: 102%;margin-top: -33px;margin-top: -30px;">
        </div>
      </div><br><br>
  </div>
</section>
      
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

   
        </div>
    </div>
</div><br><br>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>

<?php
include_once('footer.php');
?>