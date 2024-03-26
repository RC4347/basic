<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $schoolNumber
 * @property string $phoneNumber
 * @property string $grade
 */
class Users extends ActiveRecord
{
    public static function tableName()
    {
        return "users";
    }

    public function rules()
    {
        return [
            [['firstname', 'lastname', 'schoolNumber', 'phoneNumber', 'grade'], 'required']
        ];
    }
}