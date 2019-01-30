<?php

/**
 * This is the model class for table "dclientes".
 *
 * The followings are the available columns in table 'dclientes':
 * @property integer $idcliente
 * @property string $nombre
 * @property string $apellido
 * @property string $correo
 * @property string $fechanac
 * @property string $mensuentrada
 * @property string $mensuvencimiento
 * @property string $direccion
 * @property integer $cedula
 */
class Dclientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dclientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, correo, fechanac, mensuentrada, mensuvencimiento, direccion, cedula, miembro', 'required'),
			array('cedula', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido, correo', 'length', 'max'=>50),
			array('direccion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcliente, nombre, apellido, correo, fechanac, mensuentrada, mensuvencimiento, direccion, cedula, miembro', 'safe', 'on'=>'search'),
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
			'idcliente' => 'Id',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'correo' => 'Correo',
			'fechanac' => 'Cumpleaños',
			'mensuentrada' => 'Mes Pago',
			'mensuvencimiento' => 'Activo hasta',
			'direccion' => 'Direccion',
			'cedula' => 'Cedula',
                        'miembro' => 'Miembro desde',
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

		$criteria->compare('idcliente',$this->idcliente);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('fechanac',$this->fechanac,true);
		$criteria->compare('mensuentrada',$this->mensuentrada,true);
		$criteria->compare('mensuvencimiento',$this->mensuvencimiento,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('cedula',$this->cedula);
                $criteria->compare('miembro',$this->miembro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dclientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
