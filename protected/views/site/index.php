		<?php 
		$TotalIncome= Yii::app()->db->createCommand('SELECT  SUM(income_amount) AS TotalIncome FROM `income_money` WHERE MONTH(Added_date) = MONTH(CURRENT_DATE()) AND YEAR(Added_date) = YEAR(CURRENT_DATE()) AND Added_By = '.Yii::app()->user->getId())->queryAll();
		$TotalExpenses= Yii::app()->db->createCommand('SELECT  SUM(Amount) AS TotalExpenses FROM `expenses` WHERE MONTH(Date) = MONTH(CURRENT_DATE()) AND YEAR(Date) = YEAR(CURRENT_DATE())AND U_id = '.Yii::app()->user->getId())->queryAll();
		$TotalBudget= Yii::app()->db->createCommand('SELECT  SUM(amount) AS totalbudget FROM `budget` WHERE MONTH(date) = MONTH(CURRENT_DATE()) AND YEAR(date) = YEAR(CURRENT_DATE())AND Added_By = '.Yii::app()->user->getId())->queryAll();
		

		
		
		?>
					      <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="<?php echo $TotalBudget[0]['totalbudget'];?>">0</span>
                                            <small class="font-green-sharp">$</small>
                                        </h3>
                                        <small>MONTHLY BUDGET</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% SPENT</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> SPENT </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="<?php echo $TotalExpenses[0]['TotalExpenses'];?>">0</span>
											   <small class="font-red-haze">$</small>
                                        </h3>
                                        <small>MONTHLY EXPENSES</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">85% USED</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> USED </div>
                                        <div class="status-number"> 85% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 bordered">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="<?php echo $TotalIncome[0]['TotalIncome'];?>"></span>
											   <small class="font-blue-sharp">$</small>
                                        </h3>
                                        <small>MONTHLY INCOME</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> grow </div>
                                        <div class="status-number"> 45% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                      
                        <div class="col-lg-12 col-xs-12 col-sm-12">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption ">
                                        <span class="caption-subject font-dark bold uppercase">Monthly Report</span>
                                        <span class="caption-helper">This Graphs Presents Representations of Monthly Expenditures </span>
                                    </div>
                                  
                                </div>
                                <div class="portlet-body">
                                    <div id="dashboard_amchart_3" class="CSSAnimationChart"></div>
                                </div>
                            </div>
                        </div>
						
				
                    </div>
                    <div class="row">
                    




					   <div class="col-lg-6 col-xs-6 col-sm-6">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class=" icon-social-twitter font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">RECENT EXPENSES </span>
                                    </div>
                                 
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <!-- BEGIN: Actions -->
                                            <div class="mt-actions">
											
											<?php 
											$criteria = new CDbCriteria;
											$criteria->limit = 5;
											$AllExpenses=Expenses::model()->findAll($criteria);
										
											foreach($AllExpenses as $indivExpenses )
											{
												
												
											?> 
                                                <div class="mt-action">
                                                   
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-magnet"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author"><?php echo $indivExpenses->name;?> </span>
                                                                    <p class="mt-action-desc"><?php echo $indivExpenses->Description;?></p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt=action-time"><?php echo $indivExpenses->Date;?> </span>
                                                            </div>
                                                            <div class="mt-action-buttons ">
                                                                <div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline green btn-sm"><?php echo $indivExpenses->Amount;?> $</button>
                                                                  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												
												
											<?php }?> 
                                             
                                          
                                            
                                            </div>
                                            <!-- END: Actions -->
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						
						
						
						
						  <div class="col-lg-6 col-xs-6 col-sm-6">
                            <div class="portlet light bordered">
                                <div class="portlet-title tabbable-line">
                                    <div class="caption">
                                        <i class=" icon-social-twitter font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">RECENT INCOMES </span>
                                    </div>
                                 
                                </div>
                                <div class="portlet-body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_actions_pending">
                                            <!-- BEGIN: Actions -->
                                            <div class="mt-actions">
											
											<?php 
												$criteria = new CDbCriteria;
											$criteria->limit = 5;
											$AllIncomes=IncomeMoney::model()->findAll($criteria);
										
											foreach($AllIncomes as $indivExpenses )
											{
												
												
											?> 
                                                <div class="mt-action">
                                                   
                                                    <div class="mt-action-body">
                                                        <div class="mt-action-row">
                                                            <div class="mt-action-info ">
                                                                <div class="mt-action-icon ">
                                                                    <i class="icon-magnet"></i>
                                                                </div>
                                                                <div class="mt-action-details ">
                                                                    <span class="mt-action-author"><?php echo $indivExpenses->Income_name;?> </span>
                                                                    <p class="mt-action-desc"><?php echo $indivExpenses->income_category;?></p>
                                                                </div>
                                                            </div>
                                                            <div class="mt-action-datetime ">
                                                                <span class="mt=action-time"><?php echo $indivExpenses->Added_date;?> </span>
                                                            </div>
                                                            <div class="mt-action-buttons ">
                                                                <div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline green btn-sm"><?php echo $indivExpenses->income_amount;?> $</button>
                                                                  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												
												
											<?php }?> 
                                             
                                          
                                            
                                            </div>
                                            <!-- END: Actions -->
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
                    </div>
					
					
					
					
					
					
					
					
					
					
				












