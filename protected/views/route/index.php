<?php
/* @var $this RouteController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Routes',
);

$this->menu=array(
	array('label'=>'Add Routes', 'url'=>array('create')),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>Routes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
