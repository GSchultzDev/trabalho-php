<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);


        $ext_array = array(".html", ".php", ".js");
        
        $dir1 = "."; 
        $d1 = dir($dir1);
        $thelist = array();

        while ($f1 = $d1->read()) { 
            $fext = substr($f1,strrpos($f1,".")); 
                        if (in_array($fext, $ext_array)) { 
                continue;
            } else {
                if(($f1!= '.') && ($f1!= '..')) {
                    $thelist[] = '<a href="'.$f1.'"><div class="content">
                                    <span class="icon"><i class="bi bi-pass"></i></span>
                                    <span class="txt-link">'.$f1.'</span>
                                  </div></a>';
                } 
            }
        }
    ?>

    <nav class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi-list" id="btn-exp"></i>
        </div>
        <ul>
            <li class="item-menu ativo">
                <a href="#" id="btn-exp">
                    <span class="icon"><i class="bi bi-filetype-php"></i></span>
                    <span class="txt-link">PHP</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-database"></i></span>
                    <span class="txt-link">Banco</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-filetype-java"></i></span>
                    <span class="txt-link">Java</span>
                </a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <?php
            asort($thelist);
            foreach($thelist as $item){
                echo $item;
            }
        ?>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="modal-body"></div>
        </div>
    </div>

    <script src="../js/index.js"></script>
</body>
</html>
