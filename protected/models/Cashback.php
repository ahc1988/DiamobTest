<?php

/**
 * This is the model class for table "cashback".
 *
 * The followings are the available columns in table 'cashback':
 * @property integer $ID
 * @property string $APROBADO_EN
 * @property string $SE_HIZO_EFECTIVO
 * @property integer $FK_TRACKING_TICJET
 */
class Cashback extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cashback';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('APROBADO_EN, SE_HIZO_EFECTIVO, FK_TRACKING_TICJET', 'required'),
			array('FK_TRACKING_TICJET', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, APROBADO_EN, SE_HIZO_EFECTIVO, FK_TRACKING_TICJET', 'safe', 'on'=>'search'),
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
			'ID' => 'ID',
			'APROBADO_EN' => 'Aprobado En',
			'SE_HIZO_EFECTIVO' => 'Se Hizo Efectivo',
			'FK_TRACKING_TICJET' => 'Fk Tracking Ticjet',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('APROBADO_EN',$this->APROBADO_EN,true);
		$criteria->compare('SE_HIZO_EFECTIVO',$this->SE_HIZO_EFECTIVO,true);
		$criteria->compare('FK_TRACKING_TICJET',$this->FK_TRACKING_TICJET);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cashback the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
