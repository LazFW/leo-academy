<?php
$this->breadcrumbs=array(
	'Attendances'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Attendance','url'=>array('index')),
array('label'=>'Manage Attendance','url'=>array('admin')),
);
?>

<h1>Create Attendance</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>