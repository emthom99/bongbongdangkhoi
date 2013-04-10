<?php

/**
 * This is the model class for table "tbl_goods".
 *
 * The followings are the available columns in table 'tbl_goods':
 * @property string $code
 * @property string $fake_code
 * @property string $name
 * @property string $price
 * @property string $sale_off_price
 * @property string $description
 * @property string $image_url
 * @property string $type
 * @property integer $is_promoted
 * @property integer $is_favorited
 * @property integer $is_highlight1
 * @property integer $is_highlight2
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 */
class Goods extends CBongBongActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Goods the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_goods';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fake_code', 'required'),
			array('is_promoted, is_favorited, is_highlight1, is_highlight2', 'numerical', 'integerOnly'=>true),
			array('fake_code', 'length', 'max'=>10),
			array('name, price, sale_off_price, description, type', 'length', 'max'=>50),
			array('create_user_id, update_user_id', 'length', 'max'=>20),
			array('image_url, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('code, fake_code, name, price, sale_off_price, description, image_url, type, is_promoted, is_favorited, is_highlight1, is_highlight2, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'code' => 'Code',
			'fake_code' => 'Fake Code',
			'name' => 'Name',
			'price' => 'Price',
			'sale_off_price' => 'Sale Off Price',
			'description' => 'Description',
			'image_url' => 'Image Url',
			'type' => 'Type',
			'is_promoted' => 'Is Promoted',
			'is_favorited' => 'Is Favorited',
			'is_highlight1' => 'Is Highlight1',
			'is_highlight2' => 'Is Highlight2',
			'create_user_id' => 'Create User',
			'create_time' => 'Create Time',
			'update_user_id' => 'Update User',
			'update_time' => 'Update Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('code',$this->code,true);
		$criteria->compare('fake_code',$this->fake_code,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('sale_off_price',$this->sale_off_price,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image_url',$this->image_url,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('is_promoted',$this->is_promoted);
		$criteria->compare('is_favorited',$this->is_favorited);
		$criteria->compare('is_highlight1',$this->is_highlight1);
		$criteria->compare('is_highlight2',$this->is_highlight2);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}