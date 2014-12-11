
<?php
	class Item{

	public $alumno;
	public $sesion;
	public $descripcion;

	}

$items= array();
$i=0;
foreach($a as $key){
	$mark = new Item();
	$mark->id=++$i;
    $mark->alumno = $key['usuario'];
    $mark->sesion = $key['sesion'];
    $mark->descripcion =$key['desc_sesion'];   
	$items[]=$mark;
}
    // $gridDataProvider
   
     
    $gridDataProvider = new CArrayDataProvider($items);
     
    // $gridColumns
    $gridColumns = array(
    array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
    array('name'=>'alumno', 'header'=>'Alumno'),
    array('name'=>'sesion', 'header'=>'Sesión'),
    array('name'=>'descripcion', 'header'=>'Descripción'),    
    array(
    'htmlOptions' => array('nowrap'=>'nowrap'),
    'class'=>'booster.widgets.TbButtonColumn',
    'viewButtonUrl'=>null,
    'updateButtonUrl'=>null,
    'deleteButtonUrl'=>null,
    )
    );
     
    

    ?>


<?php

    $this->widget('booster.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'dataProvider' => $gridDataProvider,
    'template' => "{items}",    
    'columns' => $gridColumns,
    ));
//'filter' => $person->search(),
?>