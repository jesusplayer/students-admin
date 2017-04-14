<meta charset="UTF-8">
<link rel = "stylesheet" type = "text/css" href = "styles/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css" href = "styles/styles.css">
<script type = "text/javascript" src = "js/lib/jquery.min.js"></script>
<script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>


<?php 
        function getAlert($msg,$type,$page) {
            return '<div class="center-alert">
                        <div class="alert alert-'.$type.' text-center"  role="alert">
                    <h4>'.$msg.'</h4>
                    <a href="'.$page.'" class="alert-link">
                        <input type="button" class="btn btn-default " value="Ok"/>
                    </a>
                    </div></div>';
        }
        
       
?>