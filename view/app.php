<?php
    if(isset($_GET['page'])){
        $page = $_GET['page'];

        switch ($page) {
            case '':
                
                break;
            
            default:
                # code...
                break;
        }
    }else{
        include "include/dangki.php";
    }
    
?>