<?php
include_once('header.php');
?>
<style>
  #pivot-point-calculator-562906 svg {
  display: none;
}

</style>


    <!-- Breadcrumb Start -->
      <section class="breadcrumb mb-0" style="background-image: url(assets/images/bg/bg_1.jpg); background-size: cover; background-position: bottom; height: 30ch;">
        <div class="container pt-5">
          <div class="pt-5"></div>
          <h1 class="fs-2 text-white pt-5 mt-3"> PIP Calculator</h1>
          <nav class="breadcrumb text-light">
            <a class="breadcrumb-item text-light" href="index.php">Home</a>
            <span class="breadcrumb-item active text-light" aria-current="page">PIP Calculator</span>
          </nav>
        </div>
      </section>
    <!-- Breadcrumb End -->


    <!-- P&l Calculater Start -->
      <section class="profite-loss-calculater padding-top padding-bottom bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-sm-2"></div>
            <div class="col-lg-8 col-sm-8">
              <div class="card p-4">
                <h1 class="fs-3 mb-3">PIP Calculator</h1>
                <div id="pivot-point-calculator-562906">
                  <script type="text/javascript" src="https://www.cashbackforex.com/Content/remote/remote-widgets.js">
                  </script>
                  <script type="text/javascript">
                    RemoteCalc({
                      "Url": "https://www.cashbackforex.com",
                      "TopPaneStyle": "YmFja2dyb3VuZDogd2hpdGU7IGNvbG9yOiBibGFjazsgYm9yZGVyOiBub25lOyBib3JkZXItYm90dG9tOiBub25lOyA=",
                      "BottomPaneStyle": "YmFja2dyb3VuZDogd2hpdGU7IGJvcmRlcjogbm9uZTsgY29sb3I6IGJsYWNrOw==",
                      "ButtonStyle": "YmFja2dyb3VuZDogYmxhY2s7IGNvbG9yOiB3aGl0ZTsgYm9yZGVyLXJhZGl1czogMjBweDs=",
                      "TitleStyle": "dGV4dC1hbGlnbjogbGVmdDsgZm9udC1zaXplOiA0MHB4OyBmb250LXdlaWdodDogNTAwOw==",
                      "TextboxStyle": "YmFja2dyb3VuZC1jb2xvcjogd2hpdGU7IGNvbG9yOiBibGFjazsgYm9yZGVyOiBzb2xpZCAxcHggI2FhYWFhYQ==",
                      "ContainerWidth": "1200",
                      "HighlightColor": "#ffff00",
                      "IsDisplayTitle": false,
                      "IsShowEmbedButton": false,
                      "Lang": "en",
                      "CompactType": "large",
                      "Calculator": "pivot-point-calculator",
                      "ContainerId": "pivot-point-calculator-562906"
                    });
                  </script>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-2"></div>
          </div>
        </div>
      </section>
    <!-- P&l Calculater End -->

    
<?php
include_once('footer.php');
?>