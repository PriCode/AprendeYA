<?php

/**
 * This is the model class for table "Experto".
 *
 * The followings are the available columns in table 'Experto':
 * @property string $id_Experto
 * @property integer $nivel_actividad
 * @property integer $nro_sesion
 * @property string $id_aceptacion
 * @property string $id_usuario
 * @property double $calificacion
 */
class Experto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Experto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_Experto, id_usuario', 'required'),
			array('nivel_actividad, nro_sesion', 'numerical', 'integerOnly'=>true),
			array('calificacion', 'numerical'),
			array('id_Experto, id_aceptacion, id_usuario', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_Experto, nivel_actividad, nro_sesion, id_aceptacion, id_usuario, calificacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array('experto2usuario'=>array(self::BELONGS_TO,'Usuario','id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_Experto' => 'Id Experto',
			'nivel_actividad' => 'Nivel Actividad',
			'nro_sesion' => 'Nro Sesion',
			'id_aceptacion' => 'Id Aceptacion',
			'id_usuario' => 'Id Usuario',
			'calificacion' => 'Calificacion',
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

		$criteria->compare('id_Experto',$this->id_Experto,true);
		$criteria->compare('nivel_actividad',$this->nivel_actividad);
		$criteria->compare('nro_sesion',$this->nro_sesion);
		$criteria->compare('id_aceptacion',$this->id_aceptacion,true);
		$criteria->compare('id_usuario',$this->id_usuario,true);
		$criteria->compare('calificacion',$this->calificacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Experto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
