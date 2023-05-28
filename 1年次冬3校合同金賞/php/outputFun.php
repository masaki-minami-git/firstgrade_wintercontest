<?php


$name = $_POST['name'];
$title = $_POST['title'];
$needYen = $_POST['needYen'];
$matter = $_POST['matter'];

// $file = $_FILES['image'];

$imgName = $_POST['imgName'];

$genre = $_POST['genre'];

// //ラインに投稿する文章を作成

$sendMessage = '「'.$title . '」というタイトルの新規クラウドファンディングが開始されました!😍'."\n".'ぜひ参加してみましょう!'."\n".'https://animalprotection.main.jp/php/';

//ラインに投稿
lineBroadcast($sendMessage);
 
function lineBroadcast($text){
    $channelToken = 'm0RskykMbbumMHz7s5pD1c6Wz/Jw945G8khsGbdPgq78OwJxVm3uheDmJvjRH4NZGYSD46FelGwSY7jedIMQ/0a4eb8c2NU++DUchNhXa5qwEJzXoz9eWV/mZLPxitGqi66oytkud18tEegeRWB/MgdB04t89/1O/w1cDnyilFU=';
    $headers = [
        'Authorization: Bearer ' . $channelToken,
        'Content-Type: application/json; charset=utf-8',
    ];
 
    $post = [
        'messages' => [
            [
                'type' => 'text',
                'text' => $text,
            ],
        ],
    ];
   
    $url = 'https://api.line.me/v2/bot/message/broadcast';
    $post = json_encode($post);
     
    $ch = curl_init($url);
    $options = [
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => $headers,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_BINARYTRANSFER => true,
        CURLOPT_HEADER => true,
        CURLOPT_POSTFIELDS => $post,
    ];
    curl_setopt_array($ch, $options);
 
    $result = curl_exec($ch);
    $errno = curl_errno($ch);
    if ($errno) {
        print_r($errno);
    }
    // else{
    //     echo 'SUCCESS';
    // }
}

// $ext = substr($file['name'], -4);
// if($ext =='.gif' || $ext == '.jpg' || $ext == 'png'){
//   $filePath = '../user_img/'. $file['name'];
//   $success = move_uploaded_file($file['tmp_name'] , $filePath);

//   if($success === false){
//     header("Location: ./inputFun.php");
//     exit();
//   }
// }

//画像datacsvにkeyと値を入力するためにいったんimgDataを読み込み
$imgList = [];

$max = 0;
$fp = fopen('../csv/imgData.csv','r');
//配列一次元
while($row = fgets($fp)){//最初は入らないから後のインクリメントを見て1
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $imgList = explode(',',$row);
    if($max < $imgList[0]){
        $max = $imgList[0];
    }
}
fclose($fp);

$max++;




//画像データcsvに画像名と添字を入力

$fp = fopen('../csv/imgData.csv','a');

fputs($fp,$max.','.$imgName."\n");
fclose($fp);



$matter = str_replace("\n" , "<br />" , $matter);
// $matter = htmlspecialchars($matter, ENT_QUOTES, "UTF-8");

$max = 0;
$fp = fopen('../csv/dataFun.csv','r');
//配列一次元
while($row = fgets($fp)){//最初は入らないから後のインクリメントを見て1
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $list = explode(',',$row);
    if($max < $list[0]){
        $max = $list[0];
    }
}
fclose($fp);

$max++;

$date = date("Y/m/d");

$fp = fopen('../csv/dataFun.csv','a');

fputs($fp,$max.','.$name.','.$title.','.$needYen.','.$matter.','.$imgName.','.$genre.','.$date."\n");
fclose($fp);

//リストに入れる
$list = [];
$fp = fopen('../csv/dataFun.csv','r');

while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $list[] = explode(',',$row);
}
fclose($fp);
// var_dump($list);

//入力した項目を探して表示させるためにリストに入れ
$output = [];
foreach($list as $key => $val){
  if($val[0] == $max){
    $output[] = $val[0];
    $output[] = $val[1];
    $output[] = $val[2];
    $output[] = $val[3];
    $output[] = $val[4];
    $output[] = $val[5];
  }
}


// var_dump($output);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleFun.css">
    <title>投稿完了</title>
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
      <div class="loginTitle">
        <div class="tourokuKanOutputFun"><a  class="toukouKanOutputFunA" href="./listFun.php?id=<?php echo $_COOKIE['cookieID'] ?>&pass=<?php echo $_COOKIE['cookiePass'] ?>">投稿が完了しました</a></div>
      </div>
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
</body>
</html>