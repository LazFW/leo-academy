<?php
$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List Course','url'=>array('index')),
array('label'=>'Create Course','url'=>array('create')),
array('label'=>'Update Course','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Course','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Course','url'=>array('admin')),
);
?>

<h1>View Course #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'protocol',
		'name',
		'date',
		'slot',
		'last_edit_time',
		'source_id',
		'courseType_id',
		array(
	    'label' => 'Teacher',
	    'value' => $model->teacher->employee->surname,
		),
),
)); ?>
