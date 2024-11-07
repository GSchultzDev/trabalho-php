<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../css/index.css">
</head>
<body>
    <button class="voltar"><a href=".."><i class="bi bi-box-arrow-in-left"></a></i></button>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        $ext_array = array(".html", ".js");
        $dir1 = "."; 
        $d1 = dir($dir1);
        $thelist = array();

        while ($f1 = $d1->read()) { 
            $fext = substr($f1,strrpos($f1,".")); 
            if (in_array($fext, $ext_array)) {
                continue;
            } else {
                if(($f1!= '.') && ($f1!= '..') && ($f1 != "index.php") && ($f1 != "exe01_mostra.php") && ($f1 != "exe02_mostra.php")) {
                    $thelist[] = '<div class="content" data-file="'.$f1.'"><a href='.$f1.'>
                        <span class="icon"><i class="bi bi-pass"></i></span>
                        <span class="txt-link">'.$f1.'</span>
                        </a></div>';
                } 
            }
        }
    ?>

    <div class="container">
        
        <?php
            asort($thelist);
            foreach($thelist as $item){
                echo $item;
            }
        ?>
    </div>

</body>
</html>
