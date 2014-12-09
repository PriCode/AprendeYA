<?php

/**
 * This is the model class for table "Sesion".
 *
 * The followings are the available columns in table 'Sesion':
 * @property string $id_sesion
 * @property string $titulo_sesion
 * @property string $desc_sesion
 * @property string $dia
 * @property string $hora_ini
 * @property string $hora_fin
 * @property string $lugar
 * @property string $id_tipo_sesion
 * @property string $id_tema
 */
class Sesion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Sesion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sesion', 'required'),
			array('id_sesion, id_tipo_sesion, id_tema', 'length', 'max'=>5),
			array('titulo_sesion', 'length', 'max'=>30),
			array('desc_sesion', 'length', 'max'=>200),
			array('lugar', 'length', 'max'=>45),
			array('dia, hora_ini, hora_fin', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_sesion, titulo_sesion, desc_sesion, dia, hora_ini, hora_fin, lugar, id_tipo_sesion, id_tema', 'safe', 'on'=>'search'),
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
			'id_sesion' => 'Id Sesion',
			'titulo_sesion' => 'Titulo Sesion',
			'desc_sesion' => 'Desc Sesion',
			'dia' => 'Dia',
			'hora_ini' => 'Hora Ini',
			'hora_fin' => 'Hora Fin',
			'lugar' => 'Lugar',
			'id_tipo_sesion' => 'Id Tipo Sesion',
			'id_tema' => 'Id Tema',
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

		$criteria->compare('id_sesion',$this->id_sesion,true);
		$criteria->compare('titulo_sesion',$this->titulo_sesion,true);
		$criteria->compare('desc_sesion',$this->desc_sesion,true);
		$criteria->compare('dia',$this->dia,true);
		$criteria->compare('hora_ini',$this->hora_ini,true);
		$criteria->compare('hora_fin',$this->hora_fin,true);
		$criteria->compare('lugar',$this->lugar,true);
		$criteria->compare('id_tipo_sesion',$this->id_tipo_sesion,true);
		$criteria->compare('id_tema',$this->id_tema,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sesion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
