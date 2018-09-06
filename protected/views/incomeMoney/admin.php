<?php
/* @var $this IncomeMoneyController */
/* @var $model IncomeMoney */


Yii::app()->clientScript->registerScript('search', "
$('#Search-shut').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#income-money-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>



	<div class="m-grid m-grid-demo"> <!-- Headings,search  and insert here--> 
			<div class="m-grid-row">
				<div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-4">
					<h1> Manage Your Income</h1>
				</div>
				
				<div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-6"></div>
				
				<div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-1">
					<a href="javascript:;" id="Search-shut" class="icon-btn">
						<i class="fa fa-search"></i>
						<div> Search </div>
					</a>
				</div>
				
				<div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-1">
					<a href="javascript:;" class="icon-btn" data-target="#full-width" data-toggle="modal" >
						<i class="fa fa-money"></i>
						<div> Insert Income </div>
					</a>
				</div>
			</div>
	</div><!-- Headings,search  and insert End--> 
<div class="search-form" style="display:none;">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'income-money-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Income_id',
		'Income_name',
		'income_amount',
		'income_category',
		'Added_date',
		'Added_By',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{delete}'
		),
	),
)); ?>


												   
												   
												   
												   
												   
												   
										   
												   
												   
<div id="full-width" class="modal container fade" tabindex="-1">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title">Insert Form!</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                       
											
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'income-money-form',
	'action'=>Yii::app()->createUrl('incomeMoney/create'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<div class="col-md-12 ">
                                  

                                        <div class="portlet light bordered">
                                         
                                            <div class="portlet-body form">
                                                <form role="form" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-2 control-label"> Insert Income Name </label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By The ID" data-container="body"></i>  
															<?php echo $form->textField($model,'Income_id',array('class'=> 'form-control')); ?>	
															<?php echo $form->error($model,'Income_name'); ?>
															</div>
                                                            </div>
															
															
															
															<label class="col-md-2 control-label"> Insert Income Amount</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By The Name" data-container="body"></i>  
															<?php echo $form->textField($model,'income_amount',array('class'=> 'form-control')); ?>
															<?php echo $form->error($model,'income_amount'); ?>															
															</div>
                                                            </div>
															
															</div>
													<div class="clearfix">
													</div>
															<div class="form-group">
															
													
															 <label class="col-md-2 control-label"> Select Income Category</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                  
																
															
															
															
                                                           
														   	<select class="form-control" name = "IncomeMoney[income_category]" >
															<?php 
															
			
															foreach($IncomeMoneyCategory as $eachIncomeMoneyCategory){
															
															?>
															
                                                                <option value = <?php echo $eachIncomeMoneyCategory->id ;?>><?php echo $eachIncomeMoneyCategory->Income_money_name ;?> </option>
                                                     
															<?php }?> 
															<?php echo $form->error($model,'income_category'); ?>
                                                            </select>
															
															</div>
                                                            </div>
															
															
															
															
															<label class="col-md-2 control-label"> Select Added Date</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Date" data-container="body"></i>  
															<?php echo $form->textField($model,'Income_name',array('class'=> 'form-control','value'=>date("Y-m-d H:i:s"))); ?>	
															<?php echo $form->error($model,'Added_By'); ?>													
															<?php echo $form->textField($model,'Added_By',array('class'=> 'form-control', 'value'=> Yii::app()->user->getId(), 'style'=>"display:  none;")); ?>
															</div>
                                                            </div>
															
															</div>
													   </div>
                                                    </div>
													<div class="clearfix">
													</div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-4 col-md-8">
															           <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
																	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>"btn blue") ); ?>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>










<?php $this->endWidget(); ?>
   
                                                    </div>
                                                						   
												   
												   
												   
												   
												   
												   
												   
												   
												   
												   
												   
												   
												   
                                            

