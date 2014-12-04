<?php

/**
 * This is the model class for table "Usuario".
 *
 * The followings are the available columns in table 'Usuario':
 * @property string $id_usuario
 * @property string $usuario
 * @property string $dni
 * @property string $email
 * @property string $id_tipo
 * @property string $id_pass
 * @property string $id_perfil
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_usuario, dni, email', 'required'),
			array('id_usuario, id_pass, id_perfil', 'length', 'max'=>5),
			array('usuario, email', 'length', 'max'=>20),
			array('dni', 'length', 'max'=>8),
			array('id_tipo', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_usuario, usuario, dni, email, id_tipo, id_pass, id_perfil', 'safe', 'on'=>'search'),
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
			'perfil'=>array(self::BELONGS_TO,'Perfil','id_perfil'),
			'usuario2Experto'=>array(self::BELONGS_TO,'Experto','id_usuario'),
				
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_usuario' => 'Id Usuario',
			'usuario' => 'Usuario',
			'dni' => 'Dni',
			'email' => 'Email',
			'id_tipo' => 'Id Tipo',
			'id_pass' => 'Id Pass',
			'id_perfil' => 'Id Perfil',
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

		$criteria->compare('id_usuario',$this->id_usuario,true);
		$criteria->compare('usuario',$this->usuario,true);
		$criteria->compare('dni',$this->dni,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('id_tipo',$this->id_tipo,true);
		$criteria->compare('id_pass',$this->id_pass,true);
		$criteria->compare('id_perfil',$this->id_perfil,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
