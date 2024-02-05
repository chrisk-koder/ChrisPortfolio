<!doctype html>
<html lang="en">
  <head>
    <title>LoServers - Voice Servers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=ice-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="./dist/img/logo.png">
    <script src="https://kit.fontawesome.com/03c9aa091c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">

    <link rel="stylesheet" href="./dist/css/all.css">
    <link rel="stylesheet" href="./dist/css/voiceservers/main.css">
  </head>
  <body>

    <!-- NAVBAR Start | EDIT IN LAYOUT  -->
    <? require './layout/navbar.php';?>
    <!-- NAVBAR End -->

    <!---------------------------------------------------------------------------------------------->

    <!-- MAIN Start -->
    <main>
       <div class="divider"></div>
       <div class="container">
           <div class="row voices justify-content-center">
              <h2 class="title col-lg-12">Voice Servers</h2>
               <a href="#" class="col-lg-6 col-sm-12 voice shrink">
                <div class="teamspeak">
                    <div class="voiceTitle">
                        <h1>Teamspeak</h1>
                    </div>
                </div>
              </a>
               <a href="#" class="col-lg-6 col-sm-12 voice shrink">
                <div class="mumble">
                    <div class="voiceTitle">
                        <h1>Mumble</h1>
                    </div>
                </div>
              </a>
           </div>
       </div>
    </main>
    <!-- MAIN End -->

    <!-- FOOTER Start | EDIT IN LAYOUT -->
    <!-- Set ID to 'stayAtBottom' if content on page doesn't make footer stay at bottom --->
    <footer id="stayAtBottom"> 
        <? require './layout/footer.php'; ?>  
    </footer>
    <!-- FOOTER End-->

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