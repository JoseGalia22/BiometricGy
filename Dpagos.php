<?php

/**
 * This is the model class for table "dpagos".
 *
 * The followings are the available columns in table 'dpagos':
 * @property integer $idpago
 * @property integer $cedula
 * @property integer $idusuario
 * @property string $nombre
 * @property string $mensualidad
 * @property integer $precio
 */
class Dpagos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dpagos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cedula, idusuario, nombre, mensualidad, precio, referencia', 'required'),
			array('cedula, idusuario, precio', 'numerical', 'integerOnly'=>true),
			array('nombre, mensualidad', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idpago, cedula, idusuario, nombre, mensualidad, precio', 'safe', 'on'=>'search'),
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
			'idusuario' => array(self::BELONGS_TO, 'Dusuario', 'idusuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idpago' => 'Idpago',
			'cedula' => 'Cedula',
			'idusuario' => 'Idusuario',
			'nombre' => 'Nombre',
			'mensualidad' => 'Mensualidad',
			'precio' => 'Precio',
                        'referencia' => 'N°Referencia',
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

		$criteria->compare('idpago',$this->idpago);
		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('mensualidad',$this->mensualidad,true);
		$criteria->compare('precio',$this->precio);
                $criteria->compare('referencia',$this->referencia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dpagos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
