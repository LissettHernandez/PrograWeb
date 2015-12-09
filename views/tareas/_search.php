<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TareasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tareas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idtarea') ?>

    <?= $form->field($model, 'nombretarea') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fecha inicio') ?>

    <?= $form->field($model, 'fecha fin') ?>

    <?php // echo $form->field($model, 'tipo_idtipo') ?>

    <?php // echo $form->field($model, 'usuario_idusuario') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
