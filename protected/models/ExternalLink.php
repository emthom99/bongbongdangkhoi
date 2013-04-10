<?php

/**
 * This is the model class for table "tbl_external_link".
 *
 * The followings are the available columns in table 'tbl_external_link':
 * @property string $code
 * @property string $title
 * @property string $url
 * @property string $image_url
 * @property string $create_user_id
 * @property string $create_time
 * @property string $update_user_id
 * @property string $update_time
 */
class ExternalLink extends CBongBongActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ExternalLink the static model class
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
		return 'tbl_external_link';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title', 'length', 'max'=>255),
			array('create_user_id, update_user_id', 'length', 'max'=>20),
			array('url, image_url, create_time, update_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('code, title, url, image_url, create_user_id, create_time, update_user_id, update_time', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'url' => 'Url',
			'image_url' => 'Image Url',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('image_url',$this->image_url,true);
		$criteria->compare('create_user_id',$this->create_user_id,true);
		$criteria->compare('create_time',$this->create_time,true);
		$criteria->compare('update_user_id',$this->update_user_id,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}