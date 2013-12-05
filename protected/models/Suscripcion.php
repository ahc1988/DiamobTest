<?php

/**
 * This is the model class for table "suscripcion".
 *
 * The followings are the available columns in table 'suscripcion':
 * @property integer $ID
 * @property string $TIPO
 * @property string $DESCRIPCION
 * @property integer $IMAGEN
 * @property integer $PERIOCIDAD_ENVIO
 * @property integer $FK_BOLETIN
 */
class Suscripcion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'suscripcion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TIPO, DESCRIPCION, IMAGEN, PERIOCIDAD_ENVIO, FK_BOLETIN', 'required'),
			array('IMAGEN, PERIOCIDAD_ENVIO, FK_BOLETIN', 'numerical', 'integerOnly'=>true),
			array('TIPO', 'length', 'max'=>512),
			array('DESCRIPCION', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ID, TIPO, DESCRIPCION, IMAGEN, PERIOCIDAD_ENVIO, FK_BOLETIN', 'safe', 'on'=>'search'),
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
			'TIPO' => 'Tipo',
			'DESCRIPCION' => 'Descripcion',
			'IMAGEN' => 'Imagen',
			'PERIOCIDAD_ENVIO' => 'Periocidad Envio',
			'FK_BOLETIN' => 'Fk Boletin',
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
		$criteria->compare('TIPO',$this->TIPO,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('IMAGEN',$this->IMAGEN);
		$criteria->compare('PERIOCIDAD_ENVIO',$this->PERIOCIDAD_ENVIO);
		$criteria->compare('FK_BOLETIN',$this->FK_BOLETIN);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Suscripcion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
