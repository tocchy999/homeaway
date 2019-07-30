<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HomeAway</title>
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/triplist.css">
</head>
<body>

<header>
  <?php require("header.php");?>
</header>
<!-- header -->
<div class="main_img"  alt="メインキャッチ画像" class="clearfix">
    <p class="chatchcopy">休日にピッタリの家を見つけよう</p>

    <?php foreach ($variable as $key => $value): ?>
      <div class="a">
        <div class="listimg">
        </div>
      </div>
    <?php endforeach; ?>
</div>

<footer>
  <?php require("footer.php");?>
</footer>
<!-- footer -->
</body>
</html>
