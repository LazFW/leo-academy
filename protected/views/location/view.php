<?php
/* @var $this LocationController */
/* @var $model Location */

$this->breadcrumbs = array(
    'Locations' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Location', 'url' => array('index')),
    array('label' => 'Create Location', 'url' => array('create')),
    array('label' => 'Update Location', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Location', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Location', 'url' => array('admin')),
);
?>

<h1>View Location #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'nome',
        'indirizzo',
        'cap',
        'citta',
        array(
            'label' => 'Lista Corsi',
            'value' => function ($data) {
                return $data->listacorsi;
            },
            'type' => 'raw',
        ),
//        'listacorsi',
    ),
)); ?>

<h2> Lista corsi </h2>
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'location-grid',
    'dataProvider' => $corsi->listaPerSede($model->id),
    'filter' => $corsi,
    'columns' => array(
        'name',
        array(
            'header' => 'Data',
            'value' => function ($data) {
                return Yii::app()->service->dateConversion($data->date);
            },
            'type' => 'raw',
        ),
    ),
)); ?>

<h2> Lista corsi custom</h2>
<table border>
    <thead>
    <th>Nome</th>
    <th>Data</th>
    </thead>
<?php
foreach($corsi2 as $corso){?>
   <tr>
       <td><?= $corso->name ?></td>
       <td><?=  Yii::app()->service->dateConversion($corso->date) ?></td>
   </tr>
<?php } ?>
</table>
