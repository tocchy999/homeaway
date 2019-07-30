<!DOCTYPE html>
<html>
<head>
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
</head>
<body>

<header>
  <?php require("header.php");?>
</header>

  <div class="main_img">
    <h2 style="font-size: 3em;"><?php echo $this->request->data('user.familyname'); ?> 様 ようこそ</h2>
    <?=$this->Form->create(null, ['url' => ['controller' => 'Homeaways', 'action' => 'triplist'], 'type' => 'post']) ?>
          <dl>
            <dt>ロケーション</dt>
            <dd><?=$this->Form->text("user.location",['placeholder' => 'ロケーション', 'label'=>'location']) ?></dd>
            <dt>滞在期間</dt>
            <dd><?=$this->Form->text("user.datepicker_go",['placeholder' => '出発日', 'label'=>'datepicker_go']) ?></dd>
            <dd><?=$this->Form->text("user.datepicker_home",['placeholder' => '到着日', 'label'=>'datepicker_home']) ?></dd>
          </dl>
    <div class="button">
      <a href="http://192.168.33.10/cakephp/homeaways/triplist/">
        <?= $this->Html->image('img.homeaway/btn.png', ['alt' => '検索']) ?>
      </a>
      <p class="search">検索</p>
    </div>
  </div>

<footer>
  <?php require("footer.php");?>
</footer>
</body>
</html>
