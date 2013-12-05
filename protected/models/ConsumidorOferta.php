<?php

/**
 * This is the model class for table "consumidor_oferta".
 *
 * The followings are the available columns in table 'consumidor_oferta':
 * @property integer $FK_CONSUMIDOR
 * @property integer $FK_OFERTA
 *
 * The followings are the available model relations:
 * @property ConsumidorOferta $fKCONSUMIDOR
 * @property ConsumidorOferta[] $consumidorOfertas
 * @property ConsumidorOferta $fKOFERTA
 * @property ConsumidorOferta[] $consumidorOfertas1
 */
class ConsumidorOferta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consumidor_oferta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FK_CONSUMIDOR, FK_OFERTA', 'required'),
			array('FK_CONSUMIDOR, FK_OFERTA', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FK_CONSUMIDOR, FK_OFERTA', 'safe', 'on'=>'search'),
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
			'fKCONSUMIDOR' => array(self::BELONGS_TO, 'ConsumidorOferta', 'FK_CONSUMIDOR'),
			'consumidorOfertas' => array(self::HAS_MANY, 'ConsumidorOferta', 'FK_CONSUMIDOR'),
			'fKOFERTA' => array(self::BELONGS_TO, 'ConsumidorOferta', 'FK_OFERTA'),
			'consumidorOfertas1' => array(self::HAS_MANY, 'ConsumidorOferta', 'FK_OFERTA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FK_CONSUMIDOR' => 'Fk Consumidor',
			'FK_OFERTA' => 'Fk Oferta',
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
		$criteria->compare('FK_OFERTA',$this->FK_OFERTA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ConsumidorOferta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
