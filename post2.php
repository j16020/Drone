<?php
$moji4 = $_POST['textbox'];
echo $moji4;

if($moji4=="get"){
    unlink('drone_config/run.py');
}

?>