<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "administrador".
 *
 * @property int $id_administrador
 * @property string $User
 * @property string $Password
 */
class Administrador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'administrador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['User', 'Password'], 'required'],
            [['User', 'Password'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_administrador' => 'Id Administrador',
            'User' => 'User',
            'Password' => 'Password',
        ];
    }
}
