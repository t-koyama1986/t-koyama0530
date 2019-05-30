<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select2.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert2.php">
  <div class="jumbotron">
   <fieldset>
    <legend>顧客別　商品推奨システム（営業員向け）</legend>
     <label>法人or個人：<input type="number" name="category1"></label><br>
     <label>新規or既存：<input type="number" name="category2"></label><br>
     <label>業態：<input type="number" name="category3"></label><br>
     <label>広さ：<input type="number" name="category4"></label><br>
     <label>お困りごと：<input type="number" name="category5"></label><br>
     <label>予備：<input type="number" name="category6"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
