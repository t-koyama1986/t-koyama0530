<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ

// index.phpから送られてきたデータを変数で受け取る
$category1 = $_POST["category1"];
$category2 = $_POST["category2"];
$category3 = $_POST["category3"];
$category4 = $_POST["category4"];
$category5 = $_POST["category5"];
$category6 = $_POST["category6"];


//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db3;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_db3_table(id, category1,category2,category3,category4,category5,category6) VALUES(NULL, :category1, :category2, :category3, :category4, :category5, :category6)");
// $stmt = $pdo->prepare("INSERT INTO gs_an_table(id, name, email, naiyou,indate) VALUES(NULL, :name, :email, :naiyou, sysdate())");



$stmt->bindValue('category1', $category1, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('category2', $category2, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('category3', $category3, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('category4', $category4, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('category5', $category5, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue('category6', $category6, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト　この処理がないと画面が切り替わらない
  header("Location: select2.php");
}
?>


