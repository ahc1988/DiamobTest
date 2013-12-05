<?php

/**
 * This is the model class for table "empresa_subcategoria".
 *
 * The followings are the available columns in table 'empresa_subcategoria':
 * @property integer $FK_EMPRESA
 * @property integer $FK_SUBCATEGORIA
 *
 * The followings are the available model relations:
 * @property EmpresaSubcategoria $fKSUBCATEGORIA
 * @property EmpresaSubcategoria[] $empresaSubcategorias
 * @property EmpresaSubcategoria $fKEMPRESA
 * @property EmpresaSubcategoria[] $empresaSubcategorias1
 */
class EmpresaSubcategoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'empresa_subcategoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FK_EMPRESA, FK_SUBCATEGORIA', 'required'),
			array('FK_EMPRESA, FK_SUBCATEGORIA', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FK_EMPRESA, FK_SUBCATEGORIA', 'safe', 'on'=>'search'),
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
			'fKSUBCATEGORIA' => array(self::BELONGS_TO, 'EmpresaSubcategoria', 'FK_SUBCATEGORIA'),
			'empresaSubcategorias' => array(self::HAS_MANY, 'EmpresaSubcategoria', 'FK_SUBCATEGORIA'),
			'fKEMPRESA' => array(self::BELONGS_TO, 'EmpresaSubcategoria', 'FK_EMPRESA'),
			'empresaSubcategorias1' => array(self::HAS_MANY, 'EmpresaSubcategoria', 'FK_EMPRESA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FK_EMPRESA' => 'Fk Empresa',
			'FK_SUBCATEGORIA' => 'Fk Subcategoria',
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

		$criteria->compare('FK_EMPRESA',$this->FK_EMPRESA);
		$criteria->compare('FK_SUBCATEGORIA',$this->FK_SUBCATEGORIA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EmpresaSubcategoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
