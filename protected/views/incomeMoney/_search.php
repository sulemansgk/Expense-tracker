<?php
/* @var $this IncomeMoneyController */
/* @var $model IncomeMoney */
/* @var $form CActiveForm */
?>


<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-12 ">
                                  

                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-search"></i> Search!</div>
                                                <div class="tools">
                                                    <a href="" id="Search-shut"  data-original-title="" title="">  <i class="fa fa-times-circle"></i></a>
                                                </div>
                                            </div>
                                            <div class="portlet-body form">
                                                <form role="form" class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label class="col-md-1 control-label"> Search By Income ID</label>
                                                            <div class="col-md-2">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By The ID" data-container="body"></i>  
															<?php echo $form->textField($model,'Income_id',array('class'=> 'form-control')); ?>	
															</div>
                                                            </div>
															
															
															
															<label class="col-md-1 control-label"> Search By Income Name</label>
                                                            <div class="col-md-2">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By The Name" data-container="body"></i>  
															<?php echo $form->textField($model,'Income_name',array('class'=> 'form-control')); ?>	
															</div>
                                                            </div>
															
															 <label class="col-md-1 control-label"> Search By Category</label>
                                                            <div class="col-md-2">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Category" data-container="body"></i>  
															<?php echo $form->textField($model,'income_category',array('class'=> 'form-control')); ?>	
															</div>
                                                            </div>
															
															
															
															<label class="col-md-1 control-label"> Search By Date</label>
                                                            <div class="col-md-2">
                                                            <div class="input-icon right">
                                                            <i class="fa fa-info-circle tooltips" data-original-title="Search It By Date" data-container="body"></i>  
															<?php echo $form->textField($model,'Income_name',array('class'=> 'form-control')); ?>	
															</div>
                                                            </div>
															
															
													   </div>
                                                    </div>
													<div class="clearfix">
													</div>
                                                    <div class="form-actions">
                                                        <div class="row">
                                                            <div class="col-md-offset-4 col-md-8">
																	<?php echo CHtml::submitButton('Search', array('class'=>"btn blue") ); ?>
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
<?php $this->endWidget(); ?>

