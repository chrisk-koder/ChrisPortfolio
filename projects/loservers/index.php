<!doctype html>
<html lang="en">
  <head>
    <title>LoServers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=ice-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="./dist/img/logo.png">
    <script src="https://kit.fontawesome.com/03c9aa091c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../dist/css/alertWIP.css">

    <link rel="stylesheet" href="./dist/css/all.css">
    <link rel="stylesheet" href="./dist/css/index/main.css">
  </head>
  <body>

    <!-- NAVBAR Start | EDIT IN LAYOUT  -->
    <? require './layout/navbar.php';?>
    <!-- NAVBAR End -->

    <!---------------------------------------------------------------------------------------------->

    <!-- MAIN Start -->
    <main>
      <section id="header" class="banner">
        <div class="container">
            <div class="row content">
                <div class="col-lg-3"></div>
                <div class="title col-lg-6">
                    <h1><span>LoServers</span>, Low Prices</h1>
                    <p>We strive to offer you the best prices we can get on the market while still having max slots on all servers. We charge on hardware, not slots. We find It's a more reliable source for the pricing. Come take a look!</p>
                    <a class="orderBtn shadow" href="#order" role="button">Order</a>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
      </section>
      <div class="divider"></div>
      <section id="features">
        <div class="title">
          <h3>Features</h3>
          <p>LoServers members will recieve a wide range of features</p>
        </div>
        <div class="container">
          <div class="row features justify-content-center">
            <div class="col-lg-3 col-md-12 col-sm-12 featureIcons">
              <div class="feature">
                <div class="icon">
                  <div class="innerIcon">
                    <i class="fas fa-desktop"></i>
                  </div>
                </div>
                <div class="description">
                  <p>Monitoring</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 featureIcons">
              <div class="feature">
                <div class="icon">
                  <div class="innerIcon">
                    <i class="fas fa-key"></i>
                  </div>
                </div>
                <div class="description">
                  <p>Security</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 featureIcons">
              <div class="feature">
                <div class="icon">
                  <div class="innerIcon">
                    <i class="fas fa-list-ul"></i>
                  </div>
                </div>
                <div class="description">
                  <p>Perfect UI</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row features justify-content-center">
            <div class="col-lg-3 col-md-12 col-sm-12 featureIcons">
              <div class="feature">
                <div class="icon ">
                  <div class="innerIcon">
                    <i class="fas fa-shopping-cart"></i>
                  </div>
                </div>
                <div class="description">
                  <p>Low Prices</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 featureIcons">
              <div class="feature">
                <div class="icon">
                  <div class="innerIcon">
                    <i class="fas fa-mobile-alt"></i>
                  </div>
                </div>
                <div class="description">
                  <p>Discord Server</p>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 featureIcons">
              <div class="feature">
                <div class="icon">
                  <div class="innerIcon">
                    <i class="fas fa-life-ring"></i>
                  </div>
                </div>
                <div class="description">
                  <p>24/7 Support</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="FAQ">
        <div class="container faq">
          <div class="title">
            <h3>Frequently Asked Questions</h3>
          </div>
          <div class="row questions">
            <div class="col-lg-6 col-md-12 question">
              <div class="body">
                <h5>How much does it cost?</h5>
              <p>We have many different packages all with different pricepoints in order to match every individuals needs and budget.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 question">
              <div class="body">
                <h5>Which countries do you support?</h5>
              <p>Our servers are hosted in Germany so anyone in Europe can get great ping although we are planning to add more nodes in the US.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 question">
              <div class="body">
                <h5>How many slots does every server have?</h5>
              <p>We charge on hardware instead of slots so that we can get the best prices for any need or budget, therefore all servers come equipped with max slots!</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 question">
              <div class="body">
                <h5>How do you set the prices?</h5>
              <p>We set the prices according to the amount of hardware you are allocated, this allows you to have more control with what you are spending and means you only buy what you need and use.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="order">
        <div class="container order">
          <div class="title">
            <h3>Order</h3>
            <div class="row">
              <a href="../../wip.html" class="col-lg-6 option shrink">
                <div class="panel game">
                  <p>Game Server</p>
                </div>
              </a>
              <a href="../../wip.html" class="col-lg-6 option shrink">
                <div class="panel voice">
                  <p>Voice Server</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>

    </main>
    <!-- MAIN End -->

    <!-- FOOTER Start | EDIT IN LAYOUT -->
    <!-- Set ID to 'stayAtBottom' if content on page doesn't make footer stay at bottom --->
    <footer id=""> 
        <? require './layout/footer.php'; ?>  
    </footer>
    <!-- FOOTER End-->

    <!-- Scroll to Top -->
    <div class="scrollToTop">
      <a id="scroller" href="#top"><i class="far fa-arrow-alt-circle-up"></i></a>
    </div>

    <? require './layout/tawkto.php'; ?>  

    <link rel="stylesheet" href="../../wip.css">
    <script src="../../wip.js"></script>
    <div id="CHRISWIP" class="CHRISWIP container-fluid">
      <div class="row col-12 justify-content-center">
        <h1 class="col-12">Website preview (Unfinished website)</h1>
        <h5 class="col-12">Copyright &copy; 2022 ChrisK</h5>
        <a href="../../index.html" class="CHRISBTN col-lg-2 col-md-12">
          <h6>Home</h6>
        </a>
      </div>
      <div id="CHRISCLOSE">
        <a href="#" onclick="closeWIP()">x</a>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./dist/js/navbarScroll.js"></script>
    <script src="./dist/js/dropdown.js"></script>
    <script src="./dist/js/smoothScroll.js"></script>
    <script src="./dist/js/scrollToTop.js"></script>
  </body>
</html>