<?php

/**
 * This is the model class for table "consumidor_empresa".
 *
 * The followings are the available columns in table 'consumidor_empresa':
 * @property integer $FK_CONSUMIDOR
 * @property integer $FK_EMPRESA
 *
 * The followings are the available model relations:
 * @property ConsumidorEmpresa $fKCONSUMIDOR
 * @property ConsumidorEmpresa[] $consumidorEmpresas
 * @property ConsumidorEmpresa $fKEMPRESA
 * @property ConsumidorEmpresa[] $consumidorEmpresas1
 */
class ConsumidorEmpresa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consumidor_empresa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FK_CONSUMIDOR, FK_EMPRESA', 'required'),
			array('FK_CONSUMIDOR, FK_EMPRESA', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FK_CONSUMIDOR, FK_EMPRESA', 'safe', 'on'=>'search'),
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
			'fKCONSUMIDOR' => array(self::BELONGS_TO, 'ConsumidorEmpresa', 'FK_CONSUMIDOR'),
			'consumidorEmpresas' => array(self::HAS_MANY, 'ConsumidorEmpresa', 'FK_CONSUMIDOR'),
			'fKEMPRESA' => array(self::BELONGS_TO, 'ConsumidorEmpresa', 'FK_EMPRESA'),
			'consumidorEmpresas1' => array(self::HAS_MANY, 'ConsumidorEmpresa', 'FK_EMPRESA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FK_CONSUMIDOR' => 'Fk Consumidor',
			'FK_EMPRESA' => 'Fk Empresa',
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

		$criteria->compare('FK_CONSUMIDOR',$this->FK_CONSUMIDOR);
		$criteria->compare('FK_EMPRESA',$this->FK_EMPRESA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConsumidorEmpresa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
