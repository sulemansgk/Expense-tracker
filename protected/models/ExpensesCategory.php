<?php

/**
 * This is the model class for table "expenses_category".
 *
 * The followings are the available columns in table 'expenses_category':
 * @property integer $Expense_category_Id
 * @property string $Name
 * @property integer $Servity_level
 * @property integer $added_By
 */
class ExpensesCategory extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'expenses_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Expense_category_Id, Name, Servity_level, added_By', 'required'),
			array('Expense_category_Id, Servity_level, added_By', 'numerical', 'integerOnly'=>true),
			array('Name', 'length', 'max'=>250),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Expense_category_Id, Name, Servity_level, added_By', 'safe', 'on'=>'search'),
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
			'Expense_category_Id' => 'Expense Category',
			'Name' => 'Name',
			'Servity_level' => 'Servity Level',
			'added_By' => 'Added By',
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

		$criteria->compare('Expense_category_Id',$this->Expense_category_Id);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Servity_level',$this->Servity_level);
		$criteria->compare('added_By',$this->added_By);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ExpensesCategory the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
