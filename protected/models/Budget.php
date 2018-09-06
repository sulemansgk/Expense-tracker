<?php

/**
 * This is the model class for table "budget".
 *
 * The followings are the available columns in table 'budget':
 * @property integer $amount
 * @property integer $id
 * @property integer $category
 * @property string $date
 * @property integer $Paid_By
 * @property integer $Added_By
 */
class Budget extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'budget';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('amount, category, date, Paid_By, Added_By', 'required'),
			array('amount, category, Paid_By, Added_By', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('amount, id, category, date, Paid_By, Added_By', 'safe', 'on'=>'search'),
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
			'amount' => 'Amount',
			'id' => 'ID',
			'category' => 'Category',
			'date' => 'Date',
			'Paid_By' => 'Paid By',
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

		$criteria->compare('amount',$this->amount);
		$criteria->compare('id',$this->id);
		$criteria->compare('category',$this->category);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('Paid_By',$this->Paid_By);
		$criteria->compare('Added_By',$this->Added_By);
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
	 * @return Budget the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
