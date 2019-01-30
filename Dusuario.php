<?php

/**
 * This is the model class for table "dusuario".
 *
 * The followings are the available columns in table 'dusuario':
 * @property integer $idusuario
 * @property string $nombre
 * @property string $apellido
 * @property integer $cedula
 * @property string $direccion
 * @property string $correo
 * @property string $clave
 * @property integer $tipousuario
 * @property string $nomusuario
 * @property string $telefono
 */
class Dusuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dusuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, apellido, cedula, direccion, correo, clave, tipousuario, nomusuario, telefono', 'required'),
			array('cedula, tipousuario', 'numerical', 'integerOnly'=>true),
			array('nombre, apellido', 'length', 'max'=>50),
			array('direccion', 'length', 'max'=>150),
			array('correo', 'length', 'max'=>35),
			array('clave', 'length', 'max'=>100),
			array('nomusuario', 'length', 'max'=>15),
                    	array('telefono', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idusuario, nombre, apellido, cedula, direccion, correo, clave, tipousuario, nomusuario, telefono', 'safe', 'on'=>'search'),
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
			'idusuario' => 'Id',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
			'cedula' => 'Cedula',
			'direccion' => 'Direccion',
			'correo' => 'Correo',
			'clave' => 'Clave',
			'tipousuario' => 'Tipo usuario',
			'nomusuario' => 'Nickname',
                        'telefono' => 'Telefono',
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

		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);
		$criteria->compare('cedula',$this->cedula);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('correo',$this->correo,true);
		$criteria->compare('clave',$this->clave,true);
		$criteria->compare('tipousuario',$this->tipousuario);
		$criteria->compare('nomusuario',$this->nomusuario,true);
                $criteria->compare('telefono',$this->telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Dusuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
