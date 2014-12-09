<?php

/**
 * This is the model class for table "Matricula".
 *
 * The followings are the available columns in table 'Matricula':
 * @property string $id_matricula
 * @property string $id_alumno
 * @property string $id_experto
 * @property string $id_sesion
 */
class Matricula extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Matricula';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_matricula', 'required'),
			array('id_matricula, id_alumno, id_experto, id_sesion', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_matricula, id_alumno, id_experto, id_sesion', 'safe', 'on'=>'search'),
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
			//'id_alumno' => 	array(self::HAS_ONE, 'Alumno','id_alumno');
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_matricula' => 'Id Matricula',
			'id_alumno' => 'Id Alumno',
			'id_experto' => 'Id Experto',
			'id_sesion' => 'Id Sesion',
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

		$criteria->compare('id_matricula',$this->id_matricula,true);
		$criteria->compare('id_alumno',$this->id_alumno,true);
		$criteria->compare('id_experto',$this->id_experto,true);
		$criteria->compare('id_sesion',$this->id_sesion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Matricula the static model class
	 */

	public function findalumnos(){
		$criteria = new CDbCriteria;
		$criteria->join = 'left join Alumno B on t.id_alumno=B.id_alumno';
		//$criteria->join = 'left join Sesion S on t.id_sesion=S.id_sesion';
		$criteria->select = 't.id_alumno,t.id_sesion';
		//S.titulo_sesion,S.desc_sesion
		$data = $this->findall($criteria);
		//print_r($data);
		return $data;

	}


	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
