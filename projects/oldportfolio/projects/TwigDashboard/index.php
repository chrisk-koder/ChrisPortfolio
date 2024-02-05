<!doctype html>
<html lang="en">
  <head>
    <title>Synology</title>
    <script src="https://kit.fontawesome.com/03c9aa091c.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://synologyrp.net/synco/css/synco.css">
    <link rel="stylesheet" href="./css/twig-main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald:300,400,500,600,700|Asap+Condensed:400,500,600|Poppins:300,400,500,600,700|Raleway:300,400,500,600&display=swap" rel="stylesheet">
  </head>
  <body>

    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-dark">
        <div class="container-fluid col-11">
            <a class="navbar-brand" href="#">
                <img class="navbar-brand" src="./img/SynologyLogo2.png">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarcollapse">
                <ul class="navbar-nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="https://discord.gg/srS3euA">Discord</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
      <div class="row d-flex justify-content-center">
        <div class="col-11">
          <ul class="nav tabnav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">SERVERS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Applications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" data-toggle="tooltip" data-placement="top" title="Twig Dashboard made by Syncryst">Twig Dashboard</a>
            </li>
          </ul>
          <div class="panel">
            <h1 class="panel-title">Synology Servers</h1>
              <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                      <div class="server-panel shadow-sm">
                          <div class="server-header d-flex justify-content-between">
                            ?php require 'server1_config.php' ?>
                            <h4>Synology Build</h4>
                            <span class="?php if($status == "Online"){echo "online";} elseif ($status == "Offline"){echo "offline";}; ?>"><?php echo $status; ?></span>
                            
                          </div>
                          <div class="server-body">
                              <div class="row">

                                  <div class="col-6">
                                    <h4>Entities</h4>
                                    <p>?php echo $entities; ?></p>
                                  </div>

                                  <div class="col-6">
                                    <h4>Uptime</h4>
                                    <p>?php echo $uptime; ?></p>
                                  </div>

                                  <div class="col-6">
                                    <h4>Location</h4>
                                    <p>?php echo $country_full; ?></p>
                                  </div>

                                  <div class="col-6">
                                    <h4>Players</h4>
                                    <p>?php echo $players_cur . "/" . $players_max; ?></p>
                                  </div>

                                  <div class="col-6">
                                    <h4>FPS</h4>
                                    <p>?php echo $fps; ?></p>
                                  </div>

                                  <div class="col-6">
                                    <h4>Players AVG</h4>
                                    <p>?php echo $players_avg; ?></p>
                                  </div>
                              </div>
                          </div>
                        <div class="server-footer">connect: ?php echo $ip . ":" . $port; ?></div>
                      </div>
                  </div>

              </div>
          </div>

          <footer class="d-flex justify-content-between ">
              <h3>2019 &copy; Synologyrp.net</h3>
              <h3>Syncryst </h3>
          </footer>

        </div>
      </div>
    </div>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://synologyrp.net/synco/js/synco.js"></script>
    <script src="./js/tooltip.js"></script>
  </body>
</html>