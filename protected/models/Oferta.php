<?php

/**
 * This is the model class for table "oferta".
 *
 * The followings are the available columns in table 'oferta':
 * @property integer $ID
 * @property string $NOMBRE
 * @property string $DESCRIPCION
 * @property double $CASHBACK_PORCENTAJE
 * @property double $CASHBACK_FIJO
 * @property double $COMISION_PORCENTAJE
 * @property double $COMISION_FIJA
 * @property string $FECHA_INICIO
 * @property string $FECHA_FINAL
 * @property integer $FK_EMPRESA
 */
class Oferta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oferta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('NOMBRE, DESCRIPCION, CASHBACK_PORCENTAJE, CASHBACK_FIJO, COMISION_PORCENTAJE, COMISION_FIJA, FECHA_INICIO, FECHA_FINAL, FK_EMPRESA', 'required'),
			array('FK_EMPRESA', 'numerical', 'integerOnly'=>true),
			array('CASHBACK_PORCENTAJE, CASHBACK_FIJO, COMISION_PORCENTAJE, COMISION_FIJA', 'numerical'),
			array('NOMBRE', 'length', 'max'=>512),
			array('DESCRIPCION', 'length', 'max'=>2048),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, NOMBRE, DESCRIPCION, CASHBACK_PORCENTAJE, CASHBACK_FIJO, COMISION_PORCENTAJE, COMISION_FIJA, FECHA_INICIO, FECHA_FINAL, FK_EMPRESA', 'safe', 'on'=>'search'),
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
			'DESCRIPCION' => 'Descripcion',
			'CASHBACK_PORCENTAJE' => 'Cashback Porcentaje',
			'CASHBACK_FIJO' => 'Cashback Fijo',
			'COMISION_PORCENTAJE' => 'Comision Porcentaje',
			'COMISION_FIJA' => 'Comision Fija',
			'FECHA_INICIO' => 'Fecha Inicio',
			'FECHA_FINAL' => 'Fecha Final',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('NOMBRE',$this->NOMBRE,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('CASHBACK_PORCENTAJE',$this->CASHBACK_PORCENTAJE);
		$criteria->compare('CASHBACK_FIJO',$this->CASHBACK_FIJO);
		$criteria->compare('COMISION_PORCENTAJE',$this->COMISION_PORCENTAJE);
		$criteria->compare('COMISION_FIJA',$this->COMISION_FIJA);
		$criteria->compare('FECHA_INICIO',$this->FECHA_INICIO,true);
		$criteria->compare('FECHA_FINAL',$this->FECHA_FINAL,true);
		$criteria->compare('FK_EMPRESA',$this->FK_EMPRESA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Oferta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
