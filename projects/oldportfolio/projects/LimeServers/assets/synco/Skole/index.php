<!doctype html>
    <html lang="en">
    <head>
        <title>1 TPA</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <style>
            * {
                color: #707070;
                font-family: "Trebuchet MS", sans-serif;
            }

            h1 {
                margin-top: 30px; 
                font-size: 3.5rem;
            }
            
            .panel {
                margin-top: 30px;
                background: #F2F2F2;
                padding: 20px;
            }

            .list {
                font-size: 1.7rem;
                text-decoration: none;
                color: #707070 !important;
            }

            a {
                color: #707070 !important;
                text-decoration: none;
            }
        </style>
            
        <div class="container text-center">
            <h1>1 TPA 19</h1>

            <div class="container panel">
                <div class="row">
                    <?php
                        $path = ".";
                        $dh = opendir($path);
                        $i=1;
                        while (($file = readdir($dh)) !== false) {
                            if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "cgi-bin") {
                                $filelist = "<a href='$path/$file'>$file</a>";
                                $listFormat = "<div class='col-3 list'>" . $filelist . "</div>";

                                echo $listFormat;
                                $i++;
                            }
                        }
                        closedir($dh);
                    ?>
                </div>
            </div>

        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
    </html>