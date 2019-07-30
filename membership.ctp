<!DOCTYPE html>
<html>
<head>

</head>
<body>
  <?php echo $this->Flash->render(); ?>
<header>
  <?php require("header.php");?>
</header>

  <div class="background">
    <h2>新規登録</h2>
    <?=$this->Form->create(null, ['url' => ['controller' => 'Homeaways', 'action' => 'membership'], 'type' => 'post']) ?>
      <dl class="clearfix">
          <dt><?=$this->Form->text("user.familyname",['placeholder' => '姓', 'label'=>'名前:']) ?></dt>
          <dt><?=$this->Form->text("user.firstname",['placeholder' => '名', 'label'=>'名前:']) ?></dt>
          <dt><?=$this->Form->email("user.email",['placeholder' => 'Eメール', 'label'=>'名前:']) ?></dt>
          <dt><?=$this->Form->email("user.email_re",['placeholder' => '再確認Eメール', 'label'=>'名前:']) ?></dt>
          <dt><?=$this->Form->password("user.password",['placeholder' => 'パスワード', 'label'=>'名前:']) ?></dt>
          <dt><?=$this->Form->password("user.password_re",['placeholder' => '再確認パスワード', 'label'=>'名前:']) ?></dt>
          <dt><?=$this->Form->text("user.tel",['placeholder' => '090-1234-5678', 'label'=>'名前:']) ?></dt>
          <dt><?=$this->Form->checkbox("user.check",['checked' => true]) ?>利用規約に同意する</dt>
          <dt><?=$this->Form->radio("user.radio",[
                                                    ['text'=>'男性','name'=>'gender','value'=>'men'],
                                                    ['text'=>'女性','name'=>'gender','value'=>'women']
                                                  ],
                                                    ['label'=>true, 'value'=>'men'])
              ?>
      </dl>
      <dl>
        <?=$this->Form->submit("登  録",['label'=>'submit_btn']) ?>
      </dl>
  </div>

<footer>
  <?php require("footer.php");?>
</footer>
</body>
</html>
