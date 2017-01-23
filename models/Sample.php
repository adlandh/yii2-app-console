<?php
/**
 * Created by PhpStorm.
 * User: dh
 * Date: 23.01.17
 * Time: 21:16
 */

namespace app\models;

use Yii;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "sample_table".
 *
 * @property integer $id
 * @property string $name
 *
 */

class Sample extends ActiveRecord
{

    public static function tableName()
    {
        return 'sample_table';
    }

    public function rules()
    {
        return [
            [['name', 'id'], 'required'],
            [['id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

}