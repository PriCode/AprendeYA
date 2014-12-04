<?php

/**
 * This is the model class for table "Logueo".
 *
 * The followings are the available columns in table 'Logueo':
 * @property string $id_logueo
 * @property string $fecha
 * @property string $hora_entrada
 * @property string $hora_salida
 * @property string $id_usuario
 */
class Logueo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Logueo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_logueo', 'required'),
			array('id_logueo, id_usuario', 'length', 'max'=>5),
			array('fecha, hora_entrada, hora_salida', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_logueo, fecha, hora_entrada, hora_salida, id_usuario', 'safe', 'on'=>'search'),
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
			'id_logueo' => 'Id Logueo',
			'fecha' => 'Fecha',
			'hora_entrada' => 'Hora Entrada',
			'hora_salida' => 'Hora Salida',
			'id_usuario' => 'Id Usuario',
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

		$criteria->compare('id_logueo',$this->id_logueo,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora_entrada',$this->hora_entrada,true);
		$criteria->compare('hora_salida',$this->hora_salida,true);
		$criteria->compare('id_usuario',$this->id_usuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Logueo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
