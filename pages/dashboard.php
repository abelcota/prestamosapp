<?php

$msgBox='';
//Include Functions
include('includes/Functions.php');

//Include Notifications
include ('includes/notification.php');

// Get all Income
$GetAllIncome 	 = "SELECT SUM(Amount) AS Amount FROM assets WHERE UserId = $UserId";
$GetAIncome		 = mysqli_query($mysqli, $GetAllIncome);
$IncomeCol 		 = mysqli_fetch_assoc($GetAIncome);


// Get all Expense
$GetAllExpense   = "SELECT SUM(Amount) AS Amount FROM bills WHERE UserId = $UserId";
$GetAExpense         = mysqli_query($mysqli, $GetAllExpense);
$ExpenseCol          = mysqli_fetch_assoc($GetAExpense);

//Count current totals Income
$CountTotals = $IncomeCol['Amount'] - $ExpenseCol['Amount'];

//Get Recent Income History
$GetIncomeHistory = "SELECT * from assets left join category on assets.CategoryId = category.CategoryId left join account on assets.AccountId = account.AccountId where assets.UserId = $UserId ORDER BY assets.Date DESC LIMIT 10";
$IncomeHistory = mysqli_query($mysqli,$GetIncomeHistory); 

//Get Recent Expense History
$GetExpenseHistory = "SELECT * from bills left join category on bills.CategoryId = category.CategoryId left join account on bills.AccountId = account.AccountId where bills.UserId = $UserId ORDER BY bills.Dates DESC LIMIT 10";
$ExpenseHistory = mysqli_query($mysqli,$GetExpenseHistory); 


// Get all by month Income
$GetAllIncomeDate 	 = "SELECT SUM(Amount) AS Amount FROM assets WHERE UserId = $UserId AND MONTH(Date) = MONTH (CURRENT_DATE())";
$GetAIncomeDate		 = mysqli_query($mysqli, $GetAllIncomeDate);
$IncomeColDate 		 = mysqli_fetch_assoc($GetAIncomeDate);

// Get all by month Expense
$GetAllExpenseDate 	 = "SELECT SUM(Amount) AS Amount FROM bills WHERE UserId = $UserId AND MONTH(Dates) = MONTH (CURRENT_DATE())";
$GetAExpenseDate		 = mysqli_query($mysqli, $GetAllExpenseDate);
$ExpenseColDate 		 = mysqli_fetch_assoc($GetAExpenseDate);


// Budget Progress
$Getbudgets = "SELECT AmountIncome As Amount, (AmountIncome - AmountExpense) As Totals, AmountExpense/(AmountIncome - AmountExpense) * 100/100 AS Per,CategoryName
					  FROM ( SELECT  UserId,CategoryId, 
                      SUM(Amount) AS AmountExpense
                      FROM bills
				      GROUP BY CategoryId) AS b
					  LEFT JOIN ( SELECT  CategoryId,
                      SUM(Amount) AmountIncome
				      FROM budget WHERE MONTH(Dates) = MONTH (CURRENT_DATE())
					  GROUP BY CategoryId) AS a ON b.CategoryId = a.CategoryId
                      LEFT JOIN (SELECT CategoryId, CategoryName 
                      FROM category
                      GROUP BY CategoryId) AS c
					  ON b.CategoryId = c.CategoryId WHERE b.UserId = $UserId";
$Budgets = mysqli_query($mysqli, $Getbudgets);


//Include Global page
	include ('includes/global.php');
?>

            <div class="row m-b-40">
                        <div class="col-xs-12 col-sm-6 col-xl-3">
                            <div class="text-widget-1 color-white">
                                <div class="row flex-items-xs-middle bg-blue-900">
                                    <div class="col-xs-4 bg-blue-700">
                                        <i class="material-icons md-48">file_upload</i>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="title">Salidas de este mes</div>
                                        <div class="subtitle counter-1"><?php echo $ColUser['Currency'].' '.number_format($ExpenseColDate['Amount']); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3">
                            <div class="text-widget-1 color-white">
                                <div class="row flex-items-xs-middle bg-blue-900">
                                    <div class="col-xs-4 bg-blue-700">
                                        <i class="material-icons md-48">file_download</i>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="title">Ingresos de este mes</div>
                                        <div class="subtitle counter-2"><?php echo $ColUser['Currency'].' '.number_format($IncomeColDate['Amount']); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3">
                            <div class="text-widget-1 color-white">
                                <div class="row flex-items-xs-middle bg-blue-900">
                                    <div class="col-xs-4 bg-blue-700">
                                        <i class="material-icons md-48">assignment_return</i>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="title">Total de todas las salidas</div>
                                        <div class="subtitle counter-3"><?php echo $ColUser['Currency'].' '.number_format($ExpenseCol['Amount']);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-xl-3">
                            <div class="text-widget-1 color-white">
                                <div class="row flex-items-xs-middle bg-blue-900">
                                    <div class="col-xs-4 bg-blue-700">
                                        <i class="material-icons md-48">cached</i>
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="title">Balance</div>
                                        <div class="subtitle counter-4"><?php echo $ColUser['Currency'].' '.number_format($CountTotals);?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
           
            <div class="col-xs-12">
           <div class="row m-b-40">
            <!-- tabla izquierda -->
                    <div class="col-xs-12 col-xl-6">
                        <b><i class="material-icons pull-left icon">file_upload</i><span class="btn-title">Últimos 10 ingresos</span></b>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                                    <tr>
                                                        <th>Titulo</th>
                                                        <th>Fecha</th>
                                                        
                                                        <th>Cuenta</th>
                                                        
                                                        <th>Cantidad</th>
                                                    </tr>
                                </thead>
                                <tbody>
                                                    <?php while($col = mysqli_fetch_assoc($IncomeHistory)){ ?>
                                                    <tr>
                                                        <td><?php echo $col['Title'];?></td>
                                                        <td><?php echo date("M d Y",strtotime($col['Date']));?></td>
                                                        
                                                        <td><?php echo $col['AccountName'];?></td>
                                                        
                                                        <td><?php echo $ColUser['Currency'].' '.number_format($col['Amount']);?></td>
                                                    </tr>
                                                <?php } ?>   
                                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                    <!--/tabla -->
                     <!-- tabla derecha -->
                    <div class="col-xs-12 col-xl-6">
                        <b><i class="material-icons pull-left icon">assignment</i> <span class="btn-title">Últimas 10 salidas</span></b>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                                    <tr>
                                                         <th>Titulo</th>
                                                        <th>Fecha</th>
                                                        
                                                        <th>Cuenta</th>
                                                        
                                                        <th>Cantidad</th>
                                                    </tr>
                                </thead>
                                <tbody>
                                                 <?php while($cols = mysqli_fetch_assoc($ExpenseHistory)){ ?>
                                                <tr>
                                                    <td><?php echo $cols['Title'];?></td>
                                                    <td><?php echo date("M d Y",strtotime($cols['Dates']));?></td>
                                                    
                                                    <td><?php echo $cols['AccountName'];?></td>
                                                    
                                                    <td><?php echo $ColUser['Currency'].' '.number_format($cols['Amount']);?></td>
                                                </tr>
                                               <?php } ?>   
                                            </tbody>
                                
                            </table>
                        </div>
                    </div>
                    <!--/tabla -->
           </div>

                       <div class="row m-b-40">
            <!-- tabla izquierda -->
                    <div class="col-xs-12 col-xl-6">
                        <b><i class="material-icons pull-left icon">account_balance_wallet</i><span class="btn-title">Balance de cuentas</span></b>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                                <tr>
                                                    <th>Titulo</th>
                                                    <th>Cantidad</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php while($col = mysqli_fetch_assoc($Dount)){ ?>
                                                <tr>
                                                    <td><?php echo $col['AccountName'];?></td>
                                                    <td class="text-right"><?php echo $ColUser['Currency'].' '.number_format($col['Amount']);?></td>
                                                </tr>
                                               <?php } ?>   
                                            </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/tabla -->
                    
           </div>

           </div>
       </div>
          


                   


           
               
                    
                  
   <script>


    $(function() {
        	 		
		Morris.Donut({
        element: 'incomevsexpense',
        data: [
			
			{
            label: "<?php echo 'Expense '.$ColUser['Currency'];?>",
            value: <?php  echo $colsDounat['AmountExpense'] ;?>
			},
			{
            label: "<?php echo 'Income '.$ColUser['Currency'];?>",
            value: <?php  echo $colsDounat['AmountIncome'] ;?>
			},		
        ],
        resize: true
		});
		
		Morris.Donut({
        element: 'incomevsexpensemonth',
        data: [
			
			{
            label: "<?php echo 'Expense '.$ColUser['Currency'];?>",
            value: <?php  echo $ColsDounatMonth['AmountExpense'] ;?>
			},
			{
            label: "<?php echo 'Income '.$ColUser['Currency'];?>",
            value: <?php  echo $ColsDounatMonth['AmountIncome'] ;?>
			},		
        ],
        resize: true
    });
     $('.notification').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    });
    </script>
   

</body>

</html>
