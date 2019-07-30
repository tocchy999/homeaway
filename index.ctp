<!DOCTYPE html>
<!-- http://192.168.33.10/cakephp/homeaways/ -->
<html>
<head>
<script>
// function getSelectData(obj){
//     alert("地域が選択されました。");
// }
</script>
<!-- JapanMap // -->

<!-- Datepicker // Datepicker 参考：http://www.webdesign-fan.com/jquery-ui-datepicker -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css">
<script>
  $(function() {
    // $("#location").datepicker();
    // $("#location").datepicker("option", "showOn", 'both');//’both’を設定すると、ボタンと入力欄どちらをクリックしてもカレンダーを呼び出すことが出来ます
    // $("#location").datepicker("option", "buttonImageOnly", true);//trueを設定することでボタン画像の周りの枠が消えます。
    // $("#location").datepicker("option", "buttonImage", '<?= $this->Html->image('img.homeaway/icon_pin.jpeg', ['alt' => 'アイコン'])?>');//カレンダーアイコンを指定します

    $("#datepicker_go").datepicker();
    $("#datepicker_go").datepicker("option", "showOn", 'both');//’both’を設定すると、ボタンと入力欄どちらをクリックしてもカレンダーを呼び出すことが出来ます
    $("#datepicker_go").datepicker("option", "buttonImageOnly", true);//trueを設定することでボタン画像の周りの枠が消えます。
    $("#datepicker_go").datepicker("option", "buttonImage", '<?= $this->Html->image('img.homeaway/icon_calendar.png', ['alt' => 'アイコン'])?>');//カレンダーアイコンを指定します
    $("#datepicker_home").datepicker();
    $("#datepicker_home").datepicker("option", "showOn", 'both');//’both’を設定すると、ボタンと入力欄どちらをクリックしてもカレンダーを呼び出すことが出来ます
    $("#datepicker_home").datepicker("option", "buttonImageOnly", true);//trueを設定することでボタン画像の周りの枠が消えます。
    $("#datepicker_home").datepicker("option", "buttonImage", '<?= $this->Html->image('img.homeaway/icon_calendar.png', ['alt' => 'アイコン'])?>');//カレンダーアイコンを指定します
  });
</script>
<!-- Datepicker_end //Datepicker参考：http://www.webdesign-fan-guide.com/jquery-ui-datepicker/-->
</head>
<body>

<header>
  <?php require("header.php");?>
</header>
<!-- header -->

<div class="main_img"  alt="メインキャッチ画像" class="clearfix">
    <p class="chatchcopy">休日にピッタリの家を見つけよう</p>
    <form name="form" action="triplist.php" method="POST">
      <dl>
        <dt>ロケーション</dt>
        <dd>
          <input list="list" id="location" name="location" placeholder="　日本" onchange="getSelectData(this)">
          <datalist id="list">
              <option value="京都">
              <option value="仙台">
              <option value="三重">
              <option value="島根">
          </datalist>
        </dd>
        <dt>滞在期間</dt>
        <dd><input type="text" id="datepicker_go" name="go" placeholder="　出発日"></dd>
        <dd><input type="text" id="datepicker_home" name="home" placeholder="　到着日"></dd>
      </dl>

      <div class="button">
        <a href="http://192.168.33.10/cakephp/homeaways/triplist/">
          <div class="button">
            <?= $this->Html->image('img.homeaway/btn.png', ['alt' => '検索']) ?>
          </div>
        </a>
        <p class="search">検索</p>
      </div>
    </form>
</div>

<footer>
  <?php require("footer.php");?>
</footer>
<!-- footer -->
</body>
</html>
