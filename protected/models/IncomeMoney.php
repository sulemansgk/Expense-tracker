<?php

/**
 * This is the model class for table "income_money".
 *
 * The followings are the available columns in table 'income_money':
 * @property integer $Income_id
 * @property string $Income_name
 * @property integer $income_amount
 * @property integer $income_category
 * @property string $Added_date
 * @property integer $Added_By
 */
class IncomeMoney extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'income_money';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('Income_name, income_amount, income_category, Added_date, Added_By', 'required'),
			array('income_amount, income_category, Added_By', 'numerical', 'integerOnly'=>true),
			array('Income_name', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Income_id, Income_name, income_amount, income_category, Added_date, Added_By', 'safe', 'on'=>'search'),
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
			'Income_id' => 'Income',
			'Income_name' => 'Income Name',
			'income_amount' => 'Income Amount',
			'income_category' => 'Income Category',
			'Added_date' => 'Added Date',
			'Added_By' => 'Added By',
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

		$criteria->compare('Income_id',$this->Income_id);
		
		$criteria->compare('Income_name',$this->Income_name,true);
		$criteria->compare('income_amount',$this->income_amount);
		$criteria->compare('income_category',$this->income_category);
		$criteria->compare('Added_date',$this->Added_date,true);
		$criteria->compare('Added_By',$this->Added_By);
		$criteria->condition = 'Added_By=:c';
		$criteria->params = array(':c' => Yii::app()->user->getId());

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return IncomeMoney the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
