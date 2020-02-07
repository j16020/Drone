<?php
    $value = $_GET['options'];
    $filename = "common/php/count.txt";

        $FP = fopen($filename,"w");
        $i = 1;
    if(file_exists($filename)){
        $f = fopen($filename, "r");
        while(!feof($f)){
            $tmp = fgets($f);
            $i++;
        if($tmp == "running"){
             echo '<div class="spinner-grow text-success" role="status"><span class="sr-only">Loading...</span></div>';
        }
        if($tmp == "stop"){
            echo '<div class="spinner-grow text-danger" role="status"><span class="sr-only">Loading...</span></div>';
       }
       
       
        if ($value == $tmp) {
            
            
        }else{
            
            fwrite($FP,$value);
            
        }

    }
        fclose($f);
    }else{

        echo("ファイル{$filename}はありません");
    }


   
    
    $i = 1;
    if(file_exists($filename)){
        $f = fopen($filename, "r");
        while(!feof($f)){
            $tmp = fgets($f);
            $i++;
            
            echo "*",$tmp,"/",$value,"*";
            if ($value == $tmp) {
                
                echo $value;
                echo "1konobaai";
            }else{
                
                fwrite($FP,$value);
                
            }
            
    }
        fclose($f);
    }else{
        echo("ファイル{$filename}はありません");
    }


?>