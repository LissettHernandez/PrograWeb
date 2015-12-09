<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tareas */

$this->title = $model->idtarea;
$this->params['breadcrumbs'][] = ['label' => 'Tareas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tareas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'idtarea' => $model->idtarea, 'tipo_idtipo' => $model->tipo_idtipo, 'usuario_idusuario' => $model->usuario_idusuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'idtarea' => $model->idtarea, 'tipo_idtipo' => $model->tipo_idtipo, 'usuario_idusuario' => $model->usuario_idusuario], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'idtarea',
            'nombretarea',
            'descripcion',
            'fechainicio',
            'fechafin',
            'tipo_idtipo',
            'usuario_idusuario',
        ],
    ]) ?>

</div>
