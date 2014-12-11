<?php
	class Item2{
	public $expertp;
	public $calificacion;
	}

$items= array();
$i=0;

foreach($a as $key){
	foreach($key as $b){
		$mark = new Item2();
		$mark->id=++$i;
	    $mark->experto = $b['usuario'];
	    $mark->calificacion = $b['calificacion'];    
	    $items[]=$mark;
	}	
}
    // $gridDataProvider
   
     
    $gridDataProvider = new CArrayDataProvider($items);
     
    // $gridColumns
    $gridColumns = array(
    array('name'=>'id', 'header'=>'#', 'htmlOptions'=>array('style'=>'width: 60px')),
    array('name'=>'experto', 'header'=>'Experto'),
    array('name'=>'calificacion', 'header'=>'Calificacion'),    
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







