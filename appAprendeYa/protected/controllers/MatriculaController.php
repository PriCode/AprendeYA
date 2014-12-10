<?php

class MatriculaController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionTest()
	{
	    $matricula = new Matricula;
	    $dato = $matricula->findalumnos();
	    $user=array();
	    foreach ($dato as $var){
		$m=Alumno::model()->findByPk($var->id_alumno);
		$a=Usuario::model()->findByPk($m->id_usuario);
		$b=Sesion::model()->findByPk($var->id_sesion);
		array_push($user,array('usuario'=>$a->usuario,'sesion'=>$b->titulo_sesion,'desc_sesion'=>$b->desc_sesion));
	    }
	    $this->render('prueba', array('a'=>$user));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
