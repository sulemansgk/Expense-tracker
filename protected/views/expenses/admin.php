<?php
/* @var $this ExpensesController */
/* @var $model Expenses */




Yii::app()->clientScript->registerScript('search', "
$('#Search-shut').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#expenses-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

	<div class="m-grid m-grid-demo"> <!-- Headings,search  and insert here--> 
			<div class="m-grid-row">
				<div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-3">
						<h1> Manage Your Expenses</h1>
						
						
						
					
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
						<div> Insert Expenses </div>
					</a>
				</div>
			</div>
	</div><!-- Headings,search  and insert End--> 



<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'expenses-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'Amount',
		'Description',
		'Category',
		'Addtional',
		/*
		'Photo',
		'Date',
		'U_id',
		*/
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
	'id'=>'expenses-form',
	'action'=>Yii::app()->createUrl('expenses/create'),
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
                                                            <label class="col-md-2 control-label"> Insert Expenses Name!</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Insert your Expense amount" data-container="body"></i>  
															<?php echo $form->textField($model,'name',array('class'=> 'form-control')); ?>	
															<?php echo $form->error($model,'name'); ?>
															</div>
                                                            </div>
															
															
															
															<label class="col-md-2 control-label"> Insert Expenses Amount</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By The Name" data-container="body"></i>  
															<?php echo $form->textField($model,'Amount',array('class'=> 'form-control')); ?>
															<?php echo $form->error($model,'Amount'); ?>															
															</div>
                                                            </div>
															
															</div>
													<div class="clearfix">
													</div>
															<div class="form-group">
															
															 <label class="col-md-2 control-label"> Description</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Category" data-container="body"></i>  
															<?php echo $form->textArea($model,'Description',array('class'=> 'form-control')); ?>	
																<?php echo $form->error($model,'Description'); ?>
															</div>
                                                            </div>
															<label class="col-md-2 control-label"> Category</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
															<select class="form-control" name = "Expenses[Category]" >
															<?php 
															
			
															foreach($BudgetCategory as $eachBudget){
															
															?>
															
                                                                <option value = <?php echo $eachBudget->Budeget_cat_id; ?>><?php echo $eachBudget->name ;?> </option>
                                                     
															<?php }?> 
                                                            </select>
															
															
										
															<?php echo $form->error($model,'Category'); ?>													
															</div>
                                                            </div>
															
															</div>
													<div class="clearfix">
													</div>
															<div class="form-group">
															
															 <label class="col-md-2 control-label"> Addtional</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Category" data-container="body"></i>  
															<?php echo $form->textArea($model,'Addtional',array('class'=> 'form-control')); ?>	
																<?php echo $form->error($model,'Addtional'); ?>
															</div>
                                                            </div>
															
															
															
															<!--<label class="col-md-2 control-label"> Photo</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Date" data-container="body"></i>  
															<?php echo $form->textField($model,'Photo',array('class'=> 'form-control')); ?>	
															<?php echo $form->error($model,'Photo'); ?>													
															</div>
                                                            </div>-->
															
															
																<div class="form-group">
															
															 <label class="col-md-2 control-label"> Date</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Category" data-container="body"></i>  
															<?php echo $form->textField($model,'Date',array('class'=> 'form-control','value'=>date("Y-m-d H:i:s"),'disabled'=>'disabled')); ?>	
																<?php echo $form->error($model,'Date'); ?>
															</div>
                                                            </div>
                                                            </div>
															
															</div>
													<div class="clearfix">
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
                                                				