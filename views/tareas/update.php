<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tareas */

$this->title = 'Update Tareas: ' . ' ' . $model->idtarea;
$this->params['breadcrumbs'][] = ['label' => 'Tareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idtarea, 'url' => ['view', 'idtarea' => $model->idtarea, 'tipo_idtipo' => $model->tipo_idtipo, 'usuario_idusuario' => $model->usuario_idusuario]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tareas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
