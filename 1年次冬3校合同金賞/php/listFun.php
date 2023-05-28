<pre>
<?php

/**
 * メイン
 * 
 * ログイン
 * 
 * 全ての募集中のクラファン
 * 
 * ここから
 * 募金ページに遷移
 * 
 * 
 */
//クッキーにID 名前 pass登録

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $pass = $_GET['pass'];
}

// echo $id;
if(isset($_COOKIE['cookieID'])){
    $id = $_COOKIE['cookieID'];
    $pass = $_COOKIE['cookiePass'];
}

// echo $_COOKIE['cookieID'];


$cookieList = [];
$fp = fopen('../csv/member.csv','r');

while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $cookieList[] = explode(',',$row);
}
fclose($fp);

for($i = 0; $i < count($cookieList); $i++){
    if($cookieList[$i][1] == $id && $cookieList[$i][2] == $pass){
        $cookieName = $cookieList[$i][0];
        $cookieID = $cookieList[$i][1];
        $cookiePass = $cookieList[$i][2];
        break;
    }
}

if(empty($_COOKIE['cookieName'])){
    setcookie('cookieName',$cookieName,time() + 60 * 60 * 24);
    setcookie('cookieID',$cookieID,time() + 60 * 60 * 24);
    setcookie('cookiePass',$cookiePass,time() + 60 * 60 * 24);
}



//キャッシュフロー を配列入れる

$cashList = [];

$fp = fopen('../csv/cashFlow.csv','r');

while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $cashList[] = explode(',',$row);
}
fclose($fp);

// var_dump($cashList);

//合計値を各計算



// $keys=array_values(array_unique(array_column($cashList,2)));

// var_dump($keys);
// $totalCash = [];
// foreach($keys as $value){
// 	$num = 0;
// 	foreach($cashList as $row){
// 		if($row[2]==$value){
// 			$num = $num+$row[1];
// 		}
//         $total = [];
//         $total[0] = $num;
//         $total[1] = $value;
//         $totalCash = $total;
// 	}

// }

// ksort($total);

// var_dump($totalCash);


//ログイン確認
$row = '';
$memberList = [];
$fp = fopen('../csv/member.csv','r');
while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $memberList[] = explode(',',$row);
}
$flag = false;
for($i = 0; $i < count($memberList); $i++){
    if($memberList[$i][1] == $id && $memberList[$i][2] == $pass){
        $flag = true;
        break;
    }
}
// var_dump($memberList);
if($flag !== true){
    header("Location: ./loginError.php");
    exit();
}

//ログイン値の保持


//リストに入れる
$maelist = [];
$fp = fopen('../csv/dataFun.csv','r');

while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $list[] = explode(',',$row);
}
fclose($fp);


$mae = array_column($list, 0);
array_multisort($mae, SORT_DESC, $list);

// var_dump($list);



if(isset($_GET['genre'])){
    $output = [];
 
    foreach($list as $key => $val){
    if($val[6] == $_GET['genre']){
        $out = [];
        $out[] = $val[0];
        $out[] = $val[1];
        $out[] = $val[2];
        $out[] = number_format($val[3]);
        $out[] = $val[4];
        $out[] = $val[5];
        $out[] = $val[6];
        $out[] = $val[7];
        $output[] = $out; 
    }
    elseif(5 == $_GET['genre']){
        $out = [];
        $out[] = $val[0];
        $out[] = $val[1];
        $out[] = $val[2];
        $out[] = number_format($val[3]);
        $out[] = $val[4];
        $out[] = $val[5];
        $out[] = $val[6];
        $out[] = $val[7];
        $output[] = $out; 
    }
            
    }
}
else{
    $output = [];
    foreach($list as $key => $val){
        $out = [];
        $out[] = $val[0];
        $out[] = $val[1];
        $out[] = $val[2];
        $out[] = number_format($val[3]);
        $out[] = $val[4];
        $out[] = $val[5];
        $out[] = $val[6];
        $out[] = $val[7];
        $output[] = $out;
     }
        
}

// for($i = 0;$i < count($output);$i++){
//     if($output[$i][0] == $total[])
// }

//アウトプットの中身の中身にkey６が存在するか調べに行くなければ6に0を追加



// var_dump($output);


//画像データをリストに入れる
$imgList = [];
$fp = fopen('../csv/imgData.csv','r');

while($row = fgets($fp)){
    $row = str_replace("\n" , "" , $row); //改行を消す
    $row = str_replace("\r" , "" , $row); //改行を消す 別OS r にも対応
    $imgList[] = explode(',',$row);
}
fclose($fp);

// var_dump($list);
// echo $list[0][5];

$max = 8; //コンテンツの最大数

$contents_sum = count($output); //コンテンツの総数
$max_page = ceil($contents_sum / $max); //ページの最大値

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

$start = $max * ($page - 1); //スタートするページを取得
$view_page = array_slice($output, $start, $max, true); //表示するページを取得



?>
</pre>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleFun.css">
    <title>Animal Protection</title>
</head>
<body>
    <header>
    <h1><a href="./index.html">Animal Protection</a></h1>
    </header>
    <nav>
    <ul>
        <a href="./inputFun.php"><li>プロジェクトをはじめる</li></a>
        <a href="./listFun.php?id=<?php echo $id;?>&pass=<?php echo $pass;?>"><li>プロジェクトをさがす</li></a>
    </ul>
    </nav>
    <main>
        <div class="listWrap">
        <div class="categorySearch">
            <!-- <p>ジャンルで絞り込む</p> -->
            <div class="listFuncategoryConte">
            <form class="listFun" action="./listFun.php" method="get" enctype="multipart/form-data" onchange="submit(this.from)">
                <select name="genre">
                <option value="0">カテゴリで絞り込む<i class="fas fa-angle-down"></i></option>
                <option value="1">動物保護</option>
                <option value="2">環境保全</option>
                <option value="3">SDGs</option> 
                <option value="4">その他</option>
                <option value="5">全てのカテゴリ</option>
                </select>
                <input type="hidden" name="id" value="<?php echo $id ;?>">
                <input type="hidden" name="pass" value="<?php echo $pass ;?>">
                <!-- <button type="submit">送信</button> -->
            </form></div>
        </div>
        <div class="lineFrend"><img src="../jpeg/linefrend.jpg"></div>
        <div class="funListContainer">
            <?php foreach($view_page as $val){ ?>     
                <div class="funListBox">
                    <a href="./giveFun.php?id=<?php echo $val[0]; ?>">
                        <div class="funImg"><img src="../user_img/<?php echo $val[5] ;?>"></div>
                        <div class="listNakami">
                            <p class="listTitle"><?php echo $val[2]; ?></p>
                            <div class="funListMini">
                                <div class="listYen">
                                    <p class="listYenB">募集金額</p>
                                    <p class="listYenM"><?php echo $val[3]?>円</p>
                                </div>
                                <div class="timeStamp">
                                    <p class="timeStampP"><?php echo $val[7];?></p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
            <?php } ?>

        </div>
        <div class="paging">
                <?php  if ($page > 1): ?>
                <div class="pageAnk"><a href="listFun.php?page=<?php echo ($page-1); ?>&id=<?php echo $id; ?>&pass=<?php echo $pass;?>">＜前のページ</a></div>
                <?php endif; ?>
                <?php  if ($page < $max_page): ?>
                <div class="pageAnk"><a href="listFun.php?page=<?php echo ($page+1); ?>&id=<?php echo $id; ?>&pass=<?php echo $pass;?>">次のページ＞</a></div>
                <?php endif; ?>
            </div>
        </div>
        <div class="lineF"><img class="lineF2" src="../jpeg/linefrend.jpg"></div>
    </main>
    <script src="../js/styleparsent.js"></script>
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