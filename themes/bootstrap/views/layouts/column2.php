<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>


<div class="contentArea">
    <div class="divPanel notop page-content">
      <div class="row-fluid">

          <div class="col-xs-6">
          	<?php echo $content; ?>
          </div>
        
      </div>

<!-- ==========================================================================-->
<!-- ====================columna2=======-->
<!-- ==========================================================================-->

      <div class="row-fluid">
      	     <div class="col-xs-6">
					   
						<div id="sidebar">
						<h4>Operaciones</h4>
						<div class="well active">
								<?php

									$this->widget('booster.widgets.TbMenu', array(
										'type' => 'list',
										'items' => $this->menu,
									));
								?>
						</div>
					
					</div>
          </div>

      </div>
    </div>  


</div>

<?php $this->endContent(); ?>