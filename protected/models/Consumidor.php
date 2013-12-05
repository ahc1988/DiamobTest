<?php

/**
 * This is the model class for table "consumidor".
 *
 * The followings are the available columns in table 'consumidor':
 * @property integer $ID
 * @property string $NOMBRE
 * @property string $APELLIDO
 * @property string $E_MAIL
 * @property string $USERNAME
 * @property string $FECHA_DE_INSCRIPCION
 * @property string $DIRECCION
 * @property string $CIUDAD
 * @property string $ESTADO_PROVINCIA
 * @property string $PAIS
 * @property string $METODO_REEMBOLSO
 * @property integer $FK_CONSUMIDOR
 * @property integer $FK_CASHBACK
 * @property integer $FK_SUSCRIPCION
 * @property integer $FK_TRACKING_TICKET
 */
class Consumidor extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'consumidor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOMBRE, APELLIDO, E_MAIL, USERNAME, FECHA_DE_INSCRIPCION, DIRECCION, CIUDAD, ESTADO_PROVINCIA, PAIS, METODO_REEMBOLSO, FK_CONSUMIDOR, FK_CASHBACK, FK_SUSCRIPCION, FK_TRACKING_TICKET', 'required'),
			array('FK_CONSUMIDOR, FK_CASHBACK, FK_SUSCRIPCION, FK_TRACKING_TICKET', 'numerical', 'integerOnly'=>true),
			array('NOMBRE, APELLIDO, USERNAME, DIRECCION, CIUDAD, ESTADO_PROVINCIA, PAIS, METODO_REEMBOLSO', 'length', 'max'=>512),
			array('E_MAIL', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, NOMBRE, APELLIDO, E_MAIL, USERNAME, FECHA_DE_INSCRIPCION, DIRECCION, CIUDAD, ESTADO_PROVINCIA, PAIS, METODO_REEMBOLSO, FK_CONSUMIDOR, FK_CASHBACK, FK_SUSCRIPCION, FK_TRACKING_TICKET', 'safe', 'on'=>'search'),
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
			'NOMBRE' => 'Nombre',
			'APELLIDO' => 'Apellido',
			'E_MAIL' => 'E Mail',
			'USERNAME' => 'Username',
			'FECHA_DE_INSCRIPCION' => 'Fecha De Inscripcion',
			'DIRECCION' => 'Direccion',
			'CIUDAD' => 'Ciudad',
			'ESTADO_PROVINCIA' => 'Estado Provincia',
			'PAIS' => 'Pais',
			'METODO_REEMBOLSO' => 'Metodo Reembolso',
			'FK_CONSUMIDOR' => 'Fk Consumidor',
			'FK_CASHBACK' => 'Fk Cashback',
			'FK_SUSCRIPCION' => 'Fk Suscripcion',
			'FK_TRACKING_TICKET' => 'Fk Tracking Ticket',
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
		$criteria->compare('NOMBRE',$this->NOMBRE,true);
		$criteria->compare('APELLIDO',$this->APELLIDO,true);
		$criteria->compare('E_MAIL',$this->E_MAIL,true);
		$criteria->compare('USERNAME',$this->USERNAME,true);
		$criteria->compare('FECHA_DE_INSCRIPCION',$this->FECHA_DE_INSCRIPCION,true);
		$criteria->compare('DIRECCION',$this->DIRECCION,true);
		$criteria->compare('CIUDAD',$this->CIUDAD,true);
		$criteria->compare('ESTADO_PROVINCIA',$this->ESTADO_PROVINCIA,true);
		$criteria->compare('PAIS',$this->PAIS,true);
		$criteria->compare('METODO_REEMBOLSO',$this->METODO_REEMBOLSO,true);
		$criteria->compare('FK_CONSUMIDOR',$this->FK_CONSUMIDOR);
		$criteria->compare('FK_CASHBACK',$this->FK_CASHBACK);
		$criteria->compare('FK_SUSCRIPCION',$this->FK_SUSCRIPCION);
		$criteria->compare('FK_TRACKING_TICKET',$this->FK_TRACKING_TICKET);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Consumidor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
