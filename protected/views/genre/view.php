<?php
$this->breadcrumbs=array(
	'Genres'=>array('index'),
	$model->name,
);

$this->menu=array(
array('label'=>'List Genre','url'=>array('index')),
array('label'=>'Create Genre','url'=>array('create')),
array('label'=>'Update Genre','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Genre','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Genre','url'=>array('admin')),
);
?>

<h1>View Genre #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
),
)); ?>
