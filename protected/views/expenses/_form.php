<?php
/* @var $this ExpensesController */
/* @var $model Expenses */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expenses-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Amount'); ?>
		<?php echo $form->textField($model,'Amount'); ?>
		<?php echo $form->error($model,'Amount'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Description'); ?>
		<?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Category'); ?>
		<?php echo $form->textField($model,'Category'); ?>
		<?php echo $form->error($model,'Category'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Addtional'); ?>
		<?php echo $form->textArea($model,'Addtional',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Addtional'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Photo'); ?>
		<?php echo $form->textArea($model,'Photo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Photo'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'U_id'); ?>
		<?php echo $form->textField($model,'U_id'); ?>
		<?php echo $form->error($model,'U_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
























								   
												   
												   
<div id="full-width" class="modal container fade" tabindex="-1">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title">Insert Form!</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                       
											
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'budget-form',
	'action'=>Yii::app()->createUrl('budget/create'),
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
															<?php echo $form->textField($model,'Description',array('class'=> 'form-control')); ?>	
																<?php echo $form->error($model,'Description'); ?>
															</div>
                                                            </div>
															
															
															
															<label class="col-md-2 control-label"> Category</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Date" data-container="body"></i>  
															<?php echo $form->textField($model,'Category',array('class'=> 'form-control')); ?>	
															<?php echo $form->error($model,'Category'); ?>													
															<?php echo $form->textField($model,'U_id',array('class'=> 'form-control', 'value'=> Yii::app()->user->getId(), 'style'=>"display:  none;")); ?>
															</div>
                                                            </div>
															
															</div>
															
															<div class="form-group">
															
															 <label class="col-md-2 control-label"> Addtional</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Category" data-container="body"></i>  
															<?php echo $form->textField($model,'Addtional',array('class'=> 'form-control')); ?>	
																<?php echo $form->error($model,'Addtional'); ?>
															</div>
                                                            </div>
															
															
															
															<label class="col-md-2 control-label"> Photo</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Date" data-container="body"></i>  
															<?php echo $form->textField($model,'Photo',array('class'=> 'form-control')); ?>	
															<?php echo $form->error($model,'Photo'); ?>													
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
                                                					