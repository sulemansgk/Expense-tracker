<?php
/* @var $this IncomeMoneyController */
/* @var $model IncomeMoney */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'income-money-form',
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
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Category" data-container="body"></i>  
															<?php echo $form->textField($model,'income_category',array('class'=> 'form-control')); ?>	
																<?php echo $form->error($model,'income_category'); ?>
															</div>
                                                            </div>
															
															
															
															<label class="col-md-2 control-label"> Select Added Date</label>
                                                            <div class="col-md-4">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Date" data-container="body"></i>  
															<?php echo $form->textField($model,'Income_name',array('class'=> 'form-control')); ?>	
															<?php echo $form->error($model,'Added_By'); ?>
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
																	<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>"btn blue") ); ?>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>










<?php $this->endWidget(); ?>

</div><!-- form -->