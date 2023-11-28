                <?php
                session_start();
                if(isset($_GET['x']) && $_GET['x'] == 'home'){
                    $page = "home.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'reservasi'){
                    $page = "reservasi.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'meja'){
                    $page = "meja.php";
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'user'){
                    if($_SESSION["level_waroeng"]==1){
                        $page = "user.php";
                        include "main.php";
                    }else{
                        $page = "home.php";
                        include "main.php";
                    }
                }elseif(isset($_GET['x']) && $_GET['x'] == 'laporan'){
                    if($_SESSION["level_waroeng"]==1){
                        $page = "laporan.php";
                        include "main.php";
                    }else{
                        $page = "home.php";
                        include "main.php";
                    }
                }elseif(isset($_GET['x']) && $_GET['x'] == 'login'){
                    include "login.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'logout'){
                    include "proses/proses_logout.php";
                }else{
                    $page = "home.php";
                    include "main.php";
                }
                ?>