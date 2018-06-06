<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "moderador".
 *
 * @property int $id_moderador
 * @property string $Nombre
 * @property string $Apellido
 * @property string $Afiliacion
 * @property string $Telefono
 * @property string $Correo
 */
class Moderador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'moderador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre', 'Apellido', 'Afiliacion', 'Telefono', 'Correo'], 'required'],
            [['Nombre', 'Apellido', 'Afiliacion', 'Correo'], 'string', 'max' => 50],
            [['Telefono'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_moderador' => 'Id Moderador',
            'Nombre' => 'Nombre',
            'Apellido' => 'Apellido',
            'Afiliacion' => 'Afiliacion',
            'Telefono' => 'Telefono',
            'Correo' => 'Correo',
        ];
    }
}
