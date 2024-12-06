<?php include_once('header.php'); ?>

<section style="background-image: url(assets/images/bg/bg_3.jpg); background-size: cover; background-position: center; min-height: 100vh;">
    <!-- Your content here -->
    <section class="breadcrumb mb-0">
    <div class="container pt-5">
        <div class="pt-5"></div>
        <h1 class="fs-2 text-white pt-5 mt-3">Why Choose Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php" class="text-light">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">Why Choose Us</li>
            </ol>
        </nav>
    </div>
</section>
		<h1 class="text-center" style="color:white;">Why Us</h1>
		<p class="text-center mb-5" style="color:white;"><b>Earn more with our trading conditions</b></p>
		<br><br>
<!-- Scroll Down Icon -->
    <!--<a class="" href="#nextSection" class="scroll-down" style="position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); margin-bottom: -34px;">-->
    <!--    <img src="assets/images/icons/down.png" alt="Scroll Down" style="width: 40px; height: auto;"><p style="color:white; text-align: center;  margin-left: -16px;"> ScrollDown</p>-->
    <!--</a>-->

<!--<div id="nextSection">-->
    <!-- Content for the next section -->
<!--</div>-->


<section class="service padding-top ">
      <div class="container">
        <div class="row gx-5 gy-4 gy-sm-09 align-items-center mt-3">
          <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card border-0">
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "FX:EURUSD",
                "width": "100%",
                "height": 220,
                "locale": "in",
                "dateRange": "ALL",
                "colorTheme": "light",
                "isTransparent": false,
                "autosize": false,
                "largeChartUrl": "",
                "noTimeScale": false
              }
                </script>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card border-0">
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "BITSTAMP:BTCUSD",
                "width": "100%",
                "height": 220,
                "locale": "in",
                "dateRange": "ALL",
                "colorTheme": "light",
                "isTransparent": false,
                "autosize": false,
                "largeChartUrl": "",
                "noTimeScale": false
              }
                </script>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card border-0">
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "MIL:1TSLA",
                "width": "100%",
                "height": 220,
                "locale": "in",
                "dateRange": "ALL",
                "colorTheme": "light",
                "isTransparent": false,
                "autosize": false,
                "largeChartUrl": "",
                "noTimeScale": false
              }
                </script>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card border-0">
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "TVC:USOIL",
                "width": "100%",
                "height": 220,
                "locale": "in",
                "dateRange": "ALL",
                "colorTheme": "light",
                "isTransparent": false,
                "autosize": false,
                "largeChartUrl": "",
                "noTimeScale": false
              }
                </script>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card border-0">
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "BLACKBULL:US30",
                "width": "100%",
                "height": 220,
                "locale": "in",
                "dateRange": "ALL",
                "colorTheme": "light",
                "isTransparent": false,
                "autosize": false,
                "largeChartUrl": "",
                "noTimeScale": false
              }
                </script>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-sm-6 col-12 mb-3">
            <div class="card border-0">
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                "symbol": "CAPITALCOM:GOLD",
                "width": "100%",
                "height": 220,
                "locale": "in",
                "dateRange": "ALL",
                "colorTheme": "light",
                "isTransparent": false,
                "autosize": false,
                "largeChartUrl": "",
                "noTimeScale": false
              }
                </script>
              </div>
            </div>
          </div>
          
      </div>   
      </div>
    </section>
</section>

<!--<script>-->
<!--    window.addEventListener('scroll', function() {-->
<!--        const section = document.getElementById('nextSection');-->
<!--        const sectionPosition = section.getBoundingClientRect().top;-->
        const screenPosition = window.innerHeight / 1.5; // Adjust as needed

<!--        if (sectionPosition < screenPosition) {-->
            section.style.opacity = 1; // Show the section
            section.style.transform = 'translateY(0)'; // Reset the transform
<!--        }-->
<!--    });-->
<!--</script>-->

<?php include_once('footer.php'); ?>