<?php

/**
 * This is the model class for table "oferta_subcategoria".
 *
 * The followings are the available columns in table 'oferta_subcategoria':
 * @property integer $FK_OFERTA
 * @property integer $FK_SUBCATEGORIA
 *
 * The followings are the available model relations:
 * @property OfertaSubcategoria $fKOFERTA
 * @property OfertaSubcategoria[] $ofertaSubcategorias
 * @property OfertaSubcategoria $fKSUBCATEGORIA
 * @property OfertaSubcategoria[] $ofertaSubcategorias1
 */
class OfertaSubcategoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'oferta_subcategoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FK_OFERTA, FK_SUBCATEGORIA', 'required'),
			array('FK_OFERTA, FK_SUBCATEGORIA', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FK_OFERTA, FK_SUBCATEGORIA', 'safe', 'on'=>'search'),
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
			'fKOFERTA' => array(self::BELONGS_TO, 'OfertaSubcategoria', 'FK_OFERTA'),
			'ofertaSubcategorias' => array(self::HAS_MANY, 'OfertaSubcategoria', 'FK_OFERTA'),
			'fKSUBCATEGORIA' => array(self::BELONGS_TO, 'OfertaSubcategoria', 'FK_SUBCATEGORIA'),
			'ofertaSubcategorias1' => array(self::HAS_MANY, 'OfertaSubcategoria', 'FK_SUBCATEGORIA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FK_OFERTA' => 'Fk Oferta',
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

		$criteria->compare('FK_OFERTA',$this->FK_OFERTA);
		$criteria->compare('FK_SUBCATEGORIA',$this->FK_SUBCATEGORIA);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return OfertaSubcategoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
