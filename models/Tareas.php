<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tareas".
 *
 * @property integer $idtarea
 * @property string $nombretarea
 * @property string $descripcion
 * @property string $fechainicio
 * @property string $fechafin
 * @property integer $tipo_idtipo
 * @property integer $usuario_idusuario
 *
 * @property Tipo $tipoIdtipo
 * @property Usuario $usuarioIdusuario
 */
class Tareas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tareas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idtarea', 'tipo_idtipo', 'usuario_idusuario'], 'required'],
            [['idtarea', 'tipo_idtipo', 'usuario_idusuario'], 'integer'],
            [['fechainicio', 'fechafin'], 'safe'],
            [['nombretarea', 'descripcion'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtarea' => 'Idtarea',
            'nombretarea' => 'Nombretarea',
            'descripcion' => 'Descripcion',
            'fechainicio' => 'Fechainicio',
            'fechafin' => 'Fechafin',
            'tipo_idtipo' => 'Tipo Idtipo',
            'usuario_idusuario' => 'Usuario Idusuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoIdtipo()
    {
        return $this->hasOne(Tipo::className(), ['idtipo' => 'tipo_idtipo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarioIdusuario()
    {
        return $this->hasOne(Usuario::className(), ['idusuario' => 'usuario_idusuario']);
    }
}
