<?php include('common/header2.html');?>
<?php unlink('common/php/count.txt');?>
<?php touch('common/php/count.txt');?>
<?php include('common/nav.html');?>
<?php include('common/back.html');?>
<?php
rename('/var/www/html/mirai/drone/drone_config/create.py', '/var/www/html/mirai/drone/drone_config/run.py');
$filename = '/var/www/html/mirai/drone/drone_config/run.py';

    if(file_exists($filename)){
        echo "";
        include('html/run.html');
    
    }else{
    include('html/run2.html');
    }



?>



<?php include('common/footer.html');?>