<pre>
<?php
$id = $_GET['id'];
// echo $id ;


if(isset($_GET['money'])){
  $yen = $_GET['money'];
  $cashFlow = [];

  $max = 0;
  $fp = fopen('../csv/cashFlow.csv','r');
  //配列一次元
  while($row = fgets($fp)){//最初は入らないから後のインクリメントを見て1
      $row = str_replace("\n" , "" , $row); //改行を消す
      $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
      $cashFlow = explode(',',$row);
      if($max < $cashFlow[0]){
          $max = $cashFlow[0];
      }
  }
  fclose($fp);

  $max++;

  $fp = fopen('../csv/cashFlow.csv','a');

  fputs($fp,$max.','.$yen.','.$id."\n");
  fclose($fp);

}
//キャッシュフローから

$yenList = [];
$fp = fopen('../csv/cashFlow.csv','r');
while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $yenList[] = explode(',',$row);
}
fclose($fp);

// var_dump($yenList);

//トータルを算出
$totalYen = 0;
foreach($yenList as $key => $val){
  if($val[2] == $id){
    $totalYen = $val[1] + $totalYen;
  }
}






//リストに入れる
$list = [];
$fp = fopen('../csv/dataFun.csv','r');

while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $list[] = explode(',',$row);
}
fclose($fp);

//入力した項目を探して表示させるためにリストに入れ
$output = [];
foreach($list as $key => $val){
  if($val[0] == $id){
    $output[] = $val[0];
    $output[] = $val[1];
    $output[] = $val[2];
    $output[] = $val[3];
    $output[] = $val[4];
    $output[] = $val[5];
    $output[] = $val[6];
    $output[] = $val[7];
  }
}
// var_dump($output);

$ans = "";
$result = "";
//累計と募集金額の差額
if($output[3] > $totalYen){
  $result = $output[3] - $totalYen;
  $ans = "残り".$result."円";
}
else {
  $ans = "募金額を上回りました!";
}

//

$syousuu = $totalYen / $output[3];
$parsent = $syousuu * 100;

$parsent = round($parsent);
$totalYen = number_format($totalYen);
$output[3] = number_format($output[3]);
//画像データをリストに入れる
$imgList = [];
$fp = fopen('../csv/imgData.csv','r');

while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $imgList[] = explode(',',$row);
}
fclose($fp);

//ジャンルの値と日本語ひっつけ
if($output[6] == 1){
  $genre = '動物保護';
}
elseif($output[6] == 2){
  $genre = '環境保全';
}
elseif($output[6] == 3){
  $genre = 'SDGs';
}
elseif($output[6] == 4){
  $genre = 'その他';
}



?>
</pre>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styleFun.css">
    <title><?php echo $output[2];?></title>
</head>
<body>
    <header>
    <h1><a href="./index.html">Animal Protection</a></h1>
    </header>
    <nav>
    <ul>
        <a href="./inputFun.php"><li>プロジェクトをはじめる</li></a>
        <a href="./listFun.php?id=<?php echo $_COOKIE['cookieID'];?>&pass=<?php echo $_COOKIE['cookiePass'];?>"><li>プロジェクトをさがす</li></a>
    </ul>
    </nav>
    <main>
    <div class="container">
       <!-- <div class="loginTitle"><h3>プロジェクト内容</h3></div> -->
            <div class="checkOutputFunConte givFunConte">
            <!-- <div class="checkOutputKakunin"><p>以下の内容でよろしいですか?</p></div> -->
            <div class="checkOutputImg"><img src="../user_img/<?php echo $output[5] ;?>"></div>
                <h3><?php echo $output[2] ;?></h3>
                <div class="checkMinConte">
                    <div class="checkName">
                        <p><i class="fas fa-user myAccount"></i> <?php echo $output[1];?></p>
                    </div>
                    <div class="checkGenre"><p><i class="fas fa-tag"></i> <?php echo $genre ;?></p></div>
                </div>
                <div class="checkMinConte2">
                    <div class="checkMinConteKingaku">
                        <div class="checkMinConteKingakuMin">
                            <p>目標金額</p>
                            <p><?php echo $output[3] ;?>円</p>
                        </div>
                        <div class="checkMinConteKingakuMin2">
                            <p>累計金額</p>
                            <p><?php echo $totalYen;?>円</p>
                        </div>
                    </div>
                    <div id="parsentConte"><div id="width"></div><p class="parsentMath2"><span id="parsentMath"><?php echo $parsent;?></span>％</p></div>
                </div>
                <div class="checkMatter">
                    <p class="checkMatterT">内容</p>
                    <p><?php echo $output[4];?></p>
                </div>
                <div class="sienSuru"><a class="sienSuru2" href="./giveMoney.php?id=<?php echo $id; ?>" >このプロジェクトを支援する <i class="fas fa-chevron-circle-right"></i></a></div>
      </div>
    </main>
    <footer class="footer">
        <div class="footConteiner">
        <div class="footerBokin">
                <a href="./input.php"><div>
            <h3>寄付をする</h3>
            <p>ご支援いただける方</p>
            </div></a>
            </div>
            <div class="footerTop">
                <a href="./index.html"><div>
                <h3>TOP</h3>
                <p>私たちの活動</p>
                </div></a>
            </div>
        </div>
            <p class="copyright">Copyright 2022 Animal Protection</p>
    </footer>
    <script src="../js/styleparsent.js"></script>
</body>
</html>