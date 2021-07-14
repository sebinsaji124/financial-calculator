<?php
if(isset($_POST['submit'])):
$invesmet=$_POST['invesmet'];
$annualRate=$_POST['return_rate'];
$monthlyRate=$annualRate/12/100;
$years=$_POST['year'];
$months=$years*12;
$futureValue=0;
$futureValue=$invesmet*((pow(1+$monthlyRate,$months)-1)/$monthlyRate)*(1+$monthlyRate);
$invesmet_amonut=$invesmet*12*$years;
$est_rtn=$futureValue-$invesmet_amonut;
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIP Calculator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto py-5">
			<div class="card">
 	<div class="card-header bg-primary text-white text-center font-weight-bold">
 		SIP Calculator
 	</div>
 	<div class="card-body">
 		<form action="" method="post">
 			<div class="form-group">
 				<input type="number" name="invesmet" placeholder="Monthly Investment" required="" class="form-control" value="<?php if(!empty($invesmet)):echo $invesmet; endif;?>">
 			</div>
 			<div class="form-group">
 				<input type="number" name="return_rate" placeholder="Expected Return Rate" required="" class="form-control" value="<?php if(!empty($annualRate)):echo $annualRate; endif;?>">
 			</div>
 			<div class="form-group">
 				<input type="number" name="year" placeholder="Time Period" required="" class="form-control" value="<?php if(!empty($years)):echo $years; endif;?>">
 			</div>
 			<div class="form-group text-center">
 				<input type="submit" name="submit" class="btn btn-success" value="Calculate">
 			</div>
 		</form>
 	</div>
 	<div class="card-footer bg-white">
 		<table class="table table-bordered table-hover">
 			<tr>
 				<th>Invested Amount</th>
 				<th>&#8377; <?php echo number_format(@$futureValue);?></th>
 			</tr>
 			<tr>
 				<th>Est. Returns</th>
 				<th>&#8377; <?php echo number_format(@$est_rtn);?></th>
 			</tr>
 			<tr>
 				<th>Total Value</th>
 				<th>&#8377; <?php echo number_format(@$futureValue);?></th>
 			</tr>
 		</table>
 	</div>
 </div>
		</div>
	</div>
 
</div>

</body>
</html>