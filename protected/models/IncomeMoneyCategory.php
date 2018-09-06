<?php

/**
 * This is the model class for table "income_money_category".
 *
 * The followings are the available columns in table 'income_money_category':
 * @property integer $id
 * @property string $Income_money_name
 * @property string $added_date
 * @property integer $added_By
 * @property integer $servity_level
 */
class IncomeMoneyCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'income_money_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Income_money_name, added_date, added_By, servity_level', 'required'),
			array('added_By, servity_level', 'numerical', 'integerOnly'=>true),
			array('Income_money_name', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Income_money_name, added_date, added_By, servity_level', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'Income_money_name' => 'Income Money Name',
			'added_date' => 'Added Date',
			'added_By' => 'Added By',
			'servity_level' => 'Servity Level',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('Income_money_name',$this->Income_money_name,true);
		$criteria->compare('added_date',$this->added_date,true);
		$criteria->compare('added_By',$this->added_By);
		$criteria->compare('servity_level',$this->servity_level);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IncomeMoneyCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
