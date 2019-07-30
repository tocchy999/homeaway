<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?= $this->Flash->render() ?>
  <?= $this->Form->create() ?>
<header>
  <?php require("header.php");?>
</header>

  <div class="background">
    <h2>ログイン</h2>
    <?=$this->Form->create(null, ['url' => ['controller' => 'Homeaways', 'action' => 'complete'], 'type' => 'post']) ?>
      <dl class="clearfix">
        <legend><?= __('ユーザ名とパスワードを入力してください') ?></legend>
        <dt><?=$this->Form->control('username',['placeholder' => 'Eメール']) ?></dt>
        <dt><?=$this->Form->control('password',['placeholder' => 'パスワード']) ?></dt>
      </dl>

      <dl>
        <?=$this->Form->button(__('Login')); ?>
        <input type="submit" name="submit" value="ログイン" class="submit_btn">
      </dl>
    <?= $this->Form->end() ?>
  </div>
<footer>
  <?php require("footer.php");?>
</footer>
</body>
</html>
