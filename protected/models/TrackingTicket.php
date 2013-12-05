<?php

/**
 * This is the model class for table "tracking_ticket".
 *
 * The followings are the available columns in table 'tracking_ticket':
 * @property integer $ID
 * @property string $HORA_GENERACION
 * @property string $RESULTADO
 * @property string $COOKIE
 * @property integer $MONTO
 * @property integer $FK_CONSUMIDOR
 * @property integer $FK_OFERTA
 * @property integer $FK_CASHBACK
 */
class TrackingTicket extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tracking_ticket';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HORA_GENERACION, RESULTADO, COOKIE, MONTO, FK_CONSUMIDOR, FK_OFERTA', 'required'),
			array('MONTO, FK_CONSUMIDOR, FK_OFERTA, FK_CASHBACK', 'numerical', 'integerOnly'=>true),
			array('RESULTADO', 'length', 'max'=>512),
			array('COOKIE', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, HORA_GENERACION, RESULTADO, COOKIE, MONTO, FK_CONSUMIDOR, FK_OFERTA, FK_CASHBACK', 'safe', 'on'=>'search'),
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
			'HORA_GENERACION' => 'Hora Generacion',
			'RESULTADO' => 'Resultado',
			'COOKIE' => 'Cookie',
			'MONTO' => 'Monto',
			'FK_CONSUMIDOR' => 'Fk Consumidor',
			'FK_OFERTA' => 'Fk Oferta',
			'FK_CASHBACK' => 'Fk Cashback',
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
		$criteria->compare('HORA_GENERACION',$this->HORA_GENERACION,true);
		$criteria->compare('RESULTADO',$this->RESULTADO,true);
		$criteria->compare('COOKIE',$this->COOKIE,true);
		$criteria->compare('MONTO',$this->MONTO);
		$criteria->compare('FK_CONSUMIDOR',$this->FK_CONSUMIDOR);
		$criteria->compare('FK_OFERTA',$this->FK_OFERTA);
		$criteria->compare('FK_CASHBACK',$this->FK_CASHBACK);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TrackingTicket the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
