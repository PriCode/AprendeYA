<?php

/**
 * This is the model class for table "Perfil".
 *
 * The followings are the available columns in table 'Perfil':
 * @property string $id_perfil
 * @property string $descrip_perfil
 * @property string $descrip_intereses
 * @property string $id_red
 */
class Perfil extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Perfil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_perfil', 'required'),
			array('id_perfil, id_red', 'length', 'max'=>5),
			array('descrip_perfil', 'length', 'max'=>200),
			array('descrip_intereses', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_perfil, descrip_perfil, descrip_intereses, id_red', 'safe', 'on'=>'search'),
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
			'id_perfil' => 'Id Perfil',
			'descrip_perfil' => 'Descrip Perfil',
			'descrip_intereses' => 'Descrip Intereses',
			'id_red' => 'Id Red',
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

		$criteria->compare('id_perfil',$this->id_perfil,true);
		$criteria->compare('descrip_perfil',$this->descrip_perfil,true);
		$criteria->compare('descrip_intereses',$this->descrip_intereses,true);
		$criteria->compare('id_red',$this->id_red,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Perfil the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
