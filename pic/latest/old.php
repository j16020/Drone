<?php include('../../common/header.html');?>
<?php unlink('../../common/php/count.txt');?>
<?php touch('../../common/php/count.txt');?>
<?php include('../../common/nav.html');?>
<?php include('../../common/back.html');?>


<?php include('../empty.html');?>
<?php //include('test.html');?>

<?php
$i = 1;

echo '<div class="box20"style="z-index: 1500"><div class="box3"><div class="box"><h3>解析結果</h3><br>';
echo '<h4>';
include('date.txt');
echo '</h4>';
echo '<div class="card-group">';
 

    //echo '<div class="box13 card"><img src="pic/latest/1.jpg" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">Card title</h5><p class="card-text">This is a wider card with supporting text below as a natural </p></div><div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div></div>';

    while (true) {
       if ($i % 5){


        
        
       }else{
        echo '</div><div class="card-group">';
       }
        if (file_exists(''.$i.'.jpg')) {
 
            // ファイルが存在したら、ファイル名を付けて存在していると表示
            
            echo '<div class="box13 card"><a data-toggle="modal" data-target=".bd-example-modal-'.$i.'"><img src="'.$i.'.jpg" class="card-img-top" alt="..."></a><div class="card-body"><h5 class="card-title">'.$i.'.jpg</h5><p class="card-text">This is a wider card with supporting text below as a natural </p></div><div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div></div>';

            echo '<div style="z-index: 1500"><div class="modal fade bd-example-modal-'.$i.'" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-scrollable modal-xl" style="z-index: 1500"role="document"><div class="modal-content box3"style="z-index: 1500"><div class="modal-header">';
            echo '<h5 class="modal-title" id="exampleModalScrollableTitle">'.$i.'.jpg</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
            echo '<div class="modal-body"><img src="'.$i.'.jpg" class="card-img-top" alt="..."></div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button></div></div></div></div></div>';
          } else {
           
          break;
          }
        

        $i++;
    }
    






echo '</div>';
echo '</div></div></div>';




echo '<div class="box20"><div class="box3"><div class="box"><h3>過去ログ</h3><br>';
echo '<h4>最新のファイル：';
include('../latest/date.txt');
echo '</h4>';
echo '<div class="card-group">';
    


$res = glob('../*');
//var_dump($res);
  // 一覧をループ
  $i2 = 0;
  echo '<div class="box6a">';

  while (true){
    $date = 'date.txt';
    // ファイルを配列に格納し、さらに変数に格納
    $lines = file($date);

    $date2 = $res[$i2].'/date.txt';
    //echo $date2;
    // ファイルを配列に格納し、さらに変数に格納
    $lines2 = file($date2);


    $ret1 = $res[$i2].'/date.txt';
    $rett2 = $res[$i2].'/1.jpg';
    
    if(file_exists($rett2)){
    //$date2 = include($res[$i2].'date.txt');
    if($ret1=="../latest/date.txt"){
    break;
    }else{
    if($lines[0]==$lines2[0]){
      echo '<a href="'.$res[$i2].'/old.php"><div class="box7"><h5>';
    }else{
      echo '<a href="'.$res[$i2].'/old.php"><div class="box6"><h5>';
    }
    //echo $res[$i2];
    //echo $lines[0];
    //echo $lines2[0];
    //echo $ret1;
    //echo $ret1;
    include($ret1);
    echo '</h5></div></a>';
    echo '&nbsp;';
    $i2++;
  }
    if($i2 % 4){
    }else{
      echo '<br>';
      //echo 'aaaa';
    }
    
    }else{
      break;
    }
    
  //break;
  }
	foreach ($res as $f) {
		// is_file() を使ってファイルかどうかを判定
		if (is_file($f)) {
			// ファイルならそのまま出力
			echo $f . "<br />";
		} else {
			// ディレクトリの場合（ファイルでない場合）は再度globAll()を実行
			globAll($f);
		}
	}
  echo '</div>';

// 現在の相対パスを取得
$path = '/var/www/html/mirai/drone/pic';
 
// ディレクトリ一覧の取得
$dirs = scandir($path);
echo $dirs;
echo $path;

// リンク表示
echo '<ul>',"\n";
echo $dirs;
while (true) {

    // 特定のディレクトリの場合は表示させない
    if (in_array($dir, $excludes)) {
        continue;
    }

    if ((is_dir($dir) === true)) {
        echo '<li>';
        echo '<a href="./' . $dir . '">';
        echo h($dir);
        echo '</a></li>'."\n";
    }

  break;
}
echo '</ul>',"\n";


echo '</div>';
echo '</div></div></div>';


?>



<?php include('../../common/footer.html');?>