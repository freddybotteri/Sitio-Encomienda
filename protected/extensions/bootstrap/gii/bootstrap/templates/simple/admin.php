<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label = $this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label'=>array('index'),
	'Administrar',
);\n";
?>

$this->menu=array(

array('label'=>'Crear <?php echo $this->modelClass; ?>','url'=>array('create')),
);

?>

<h1>Administrar <?php echo $this->pluralize($this->class2name($this->modelClass)); ?></h1>

<p>
	También puedes utilizar un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b> &lt;&gt;</b>
	o <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo la comparación se debe realizar.
</p>



<?php echo "<?php"; ?> $this->widget('booster.widgets.TbGridView',array(
'id'=>'<?php echo $this->class2id($this->modelClass); ?>-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
<?php
$count = 0;
foreach ($this->tableSchema->columns as $column) {
	if (++$count == 7) {
		echo "\t\t/*\n";
	}
	echo "\t\t'" . $column->name . "',\n";
}
if ($count >= 7) {
	echo "\t\t*/\n";
}
?>
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
