<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $idusuario
 * @property string $nombre
 * @property string $apellido
 * @property string $domicilio
 * @property string $telefono
 * @property string $ciudad
 * @property string $estado
 *
 * @property Tareas[] $tareas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idusuario'], 'required'],
            [['idusuario'], 'integer'],
            [['nombre', 'apellido', 'domicilio', 'telefono', 'ciudad', 'estado'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idusuario' => 'Idusuario',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'domicilio' => 'Domicilio',
            'telefono' => 'Telefono',
            'ciudad' => 'Ciudad',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareas()
    {
        return $this->hasMany(Tareas::className(), ['usuario_idusuario' => 'idusuario']);
    }
}
