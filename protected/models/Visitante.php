<?php

/**
 * This is the model class for table "visitante".
 *
 * The followings are the available columns in table 'visitante':
 * @property integer $idVisitante
 * @property string $nombreV
 * @property string $apellidoV
 * @property string $direccion
 * @property integer $fkMunicipio
 * @property integer $fkNac
 *
 * The followings are the available model relations:
 * @property Adolescente[] $adolescentes
 * @property Municipio $fkMunicipio0
 * @property Nacionalidad $fkNac0
 */
class Visitante extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Visitante the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'visitante';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idVisitante, nombreV, apellidoV, direccion, fkMunicipio, fkNac', 'required'),
			array('idVisitante, fkMunicipio, fkNac', 'numerical', 'integerOnly'=>true),
			array('nombreV, apellidoV, direccion', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idVisitante, nombreV, apellidoV, direccion, fkMunicipio, fkNac', 'safe', 'on'=>'search'),
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
			'adolescentes' => array(self::MANY_MANY, 'Adolescente', 'relacion(fkVisitante, fkAdolescente)'),
			'fkMunicipio0' => array(self::BELONGS_TO, 'Municipio', 'fkMunicipio'),
			'fkNac0' => array(self::BELONGS_TO, 'Nacionalidad', 'fkNac'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idVisitante' => 'Id Visitante',
			'nombreV' => 'Nombre V',
			'apellidoV' => 'Apellido V',
			'direccion' => 'Direccion',
			'fkMunicipio' => 'Fk Municipio',
			'fkNac' => 'Fk Nac',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idVisitante',$this->idVisitante);
		$criteria->compare('nombreV',$this->nombreV,true);
		$criteria->compare('apellidoV',$this->apellidoV,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('fkMunicipio',$this->fkMunicipio);
		$criteria->compare('fkNac',$this->fkNac);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}