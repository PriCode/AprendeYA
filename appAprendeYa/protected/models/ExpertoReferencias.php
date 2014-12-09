<?php

/**
 * This is the model class for table "Experto_Referencias".
 *
 * The followings are the available columns in table 'Experto_Referencias':
 * @property string $id_experto_referencias
 * @property string $id_experto
 * @property string $url_red1
 * @property string $url_red2
 * @property string $url_red3
 */
class ExpertoReferencias extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Experto_Referencias';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_experto_referencias', 'required'),
			array('id_experto_referencias', 'length', 'max'=>2),
			array('id_experto', 'length', 'max'=>5),
			array('url_red1, url_red2, url_red3', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_experto_referencias, id_experto, url_red1, url_red2, url_red3', 'safe', 'on'=>'search'),
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
			'id_experto_referencias' => 'Id Experto Referencias',
			'id_experto' => 'Id Experto',
			'url_red1' => 'Url Red1',
			'url_red2' => 'Url Red2',
			'url_red3' => 'Url Red3',
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

		$criteria->compare('id_experto_referencias',$this->id_experto_referencias,true);
		$criteria->compare('id_experto',$this->id_experto,true);
		$criteria->compare('url_red1',$this->url_red1,true);
		$criteria->compare('url_red2',$this->url_red2,true);
		$criteria->compare('url_red3',$this->url_red3,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ExpertoReferencias the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
