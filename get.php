<?php
$moji1 = $_POST['options11'];
$moji2 = $_POST['options31'];
$moji3 = $_POST['options1[2]'];
$moji4 = $_POST['options2[2]'];
$selected1 = array();
$selected2 = [];
function escape1($str)
{
    return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}

//echo $moji1;
        
$i = 0;
while(true){
    $opt1 = "options1".$i;
    $opt2 = 'options2'.$i;
    $opt3 = 'options3'.$i;
    
    $pos = $_POST[$opt1];
    $sec = $_POST[$opt2];
    $pic = $_POST[$opt3];
    
    if($pic==4){
        $pic = "pic";
    }else{
        $pic = "no";
    }

    if($pos!== Null){
    array_push($selected1,[$pos,$sec,$pic]);
    }

    $i++;
    if($i==100){
        break;
        
    }
}



$FP = fopen("/var/www/html/mirai/drone/drone_config/create.py","w");
$FPH = file_get_contents("/var/www/html/mirai/drone/drone_config/header.py");
$FPF = file_get_contents("/var/www/html/mirai/drone/drone_config/fotter.py");
$i1 = 0;
    fwrite($FP,$FPH."\n"."\n"."\n"."\n");
    foreach($selected1 as $key => $value){
        
        

        if($selected1[$key][0] == "back"){
           
            fwrite($FP,"\n"."\n".'    print("back")'."\n");
            if($selected1[$key][1] == 1){
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 2){
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 3){
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 4){
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=-10, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            fwrite($FP,"    mambo.smart_sleep(3)"."\n");
            if($selected1[$key][2] == "pic"){
                fwrite($FP,"    pic_success = mambo.take_picture()"."\n");
                fwrite($FP,"    import func1.py"."\n");
            }
        }
        if($selected1[$key][0] == "forward"){
            
            fwrite($FP,"\n"."\n".'    print("forward")'."\n");
            if($selected1[$key][1] == 1){
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 2){
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 3){
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 4){
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            fwrite($FP,"    mambo.smart_sleep(3)"."\n");
            if($selected1[$key][2] == "pic"){
                fwrite($FP,"    pic_success = mambo.take_picture()"."\n");
                fwrite($FP,"    import func1.py"."\n");
            }
        }
        if($selected1[$key][0] == "left"){
            
            fwrite($FP,"\n"."\n".'    print("left")'."\n");
            if($selected1[$key][1] == 1){
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 2){
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 3){
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 4){
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            fwrite($FP,"    mambo.smart_sleep(3)"."\n");
            if($selected1[$key][2] == "pic"){
                fwrite($FP,"    pic_success = mambo.take_picture()"."\n");
                fwrite($FP,"    import func1.py"."\n");
            }
        }
        if($selected1[$key][0] == "right"){
            
            fwrite($FP,"\n"."\n".'    print("right")'."\n");
            if($selected1[$key][1] == 1){
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 2){
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 3){
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            if($selected1[$key][1] == 4){
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
                fwrite($FP,"    mambo.fly_direct(roll=-10, pitch=0, yaw=0, vertical_movement=-2, duration=1)"."\n");
            }
            fwrite($FP,"    mambo.smart_sleep(3)"."\n");
            if($selected1[$key][2] == "pic"){
                fwrite($FP,"    pic_success = mambo.take_picture()"."\n");
                fwrite($FP,"    import func1.py"."\n");
            }

        }

        
        $i1++;
    }
    fwrite($FP,"\n"."\n"."\n"."\n".$FPF);
    fclose($f);
    fclose($FP);
    fclose($FPH);
    fclose($FPF);


?>
<?php include('common/header.html');?>
<?php unlink('common/php/count.txt');?>
<?php touch('common/php/count.txt');?>
<?php include('common/nav.html');?>
<?php include('common/back.html');?>

<?php include('html/get.html');?>
<?=escape1($moji1);?>
<?=escape1($moji2)?>
<?=escape1($moji3)?>
<?=escape1($moji4)?>
<?php include('common/footer.html');?>