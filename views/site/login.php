<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->registerJs($this->render('_script_login.js'));
?>

<!-- Start: Main -->
<div id="main">
  <div id="content">
    <div class="row">
      <div id="page-logo"> 
        <!-- PUT LOGO HERE -->
        <br/><br/><br/>
      </div>
    </div>

    <div class="row">
    <?php 
      $form = ActiveForm::begin([
                      'id' => 'login-form',
                      'fieldConfig' => [
                      'options' => [
                          'tag' => false, //to make the validator disabled (no helper block in active field)
                      ],
                  ],
              ]); 
    ?>
      <div class="panel-bg">
        <div class="panel">
          <div class="panel-heading"> <span class="panel-title"> 
          <span class="glyphicon glyphicon-lock text-purple2"></span> Login </span> 
          <span class="panel-header-menu pull-right mr15 text-muted fs12">
            <b>Not 
            <?php
            if (Yii::$app->user->isGuest) {
                echo 'Guest';
            }
            else {
                echo Yii::$app->user->identity->username;
            }
            ?>
            ?
            </b>
          </span> </div>
          <div class="panel-body">
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
                <?= $form->field($model, 'username')
                            ->textInput(['autofocus' => true, 'placeholder' => 'Username'])
                            ->label(false) 
                ?>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-link"></span> </span>
              <?= $form->field($model, 'password')
                            ->passwordInput(['autofocus' => true, 'placeholder' => 'Password'])
                            ->label(false) 
              ?>
              </div>
            </div>
          </div>
          <div class="panel-footer"> 
            <span class="text-muted fs12 lh30">
            </span> 
            <?= Html::submitButton('Login', ['class' => 'btn btn-sm bg-purple2 pull-right', 'name' => 'login-button']) ?>
            <div class="clearfix"></div>
          </div>
          
        </div>
      </div>
    <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>
<!-- End: Main -->
<div class="overlay-black"></div>
