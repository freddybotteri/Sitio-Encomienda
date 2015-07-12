<?php 
$this->widget(
    'booster.widgets.TbNavbar',
    array(
        'type' => 'null',
        'brand' => 'ENCOMIENDAS',
        'brandUrl' => '#',
        'collapse' => true, 
        'fixed' => 'top',
        'fluid' => true,
        'items' => array(
		            array(
		                'class' => 'booster.widgets.TbMenu',
		                'type' => 'navbar',
		                'items' => array(
		                    array('label' => 'Inicio', 'url' => array('/site/index'), 'active' => true),
		                    array(
		                        'label' => 'Usuarios',
		                        'url' => '#',
		                        'items' => array(
		                            array('label' => 'Crear Usuario ', 'url' => array('/usuario/create')),
		                           
		                        )
		                    ),
		                    array(
		                    	'label' => 'Quienes somos',
		                    	'url'=>'#',
		                    	'items'=>array(
		                    		  array('label'=>'Ingresar nueva','url'=>array('/Informacion/create')),
		                    		), 
		                    	),
		                   array(
		                    	'label' => 'Crear',
		                    	'url'=>'#',
		                    	'items'=>array(
		                    		  array('label'=>'Nueva ','url'=>array('/crear/create')),
		                    		), 
		                    	),
		                    array(
		                    	'label' => 'preguntas frecuentes',
		                    	'url'=>'#',
		                    	'items'=>array(
		                    		  array('label'=>'Administrar','url'=>array('/preguntas/admin')),
		                    		), 
		                    	),
		                    

		                     
		                ),
		            ),
		            
		            array(
		                'class' => 'booster.widgets.TbMenu',
		                'type' => 'navbar',
		                'htmlOptions' => array('class' => 'pull-right'),
		                'items' => array(
		                	array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		                    array('label' => 'Feliz dia(noche)('.Yii::app()->user->name.')',  'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
		                ),
		            ),
		        ),
    )
);
?>




