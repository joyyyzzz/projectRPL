                <?php
                if(isset($_GET['x']) && $_GET['x'] == 'home'){
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'reservasi'){
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'meja'){
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'user'){
                    include "main.php";
                }elseif(isset($_GET['x']) && $_GET['x'] == 'login'){
                    include "login.php";
                }else{
                    include "main.php";
                }
                ?>