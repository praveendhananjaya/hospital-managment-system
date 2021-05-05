<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php include 'billing_process.php';?>

	<form method = "Post">
		<pr>
			<h1><text class="b">Billing</h1>

			<table style = "width: 650px;">
				<tr>
					<td>
						<label><text class="lable">Enter Patient Registration ID:</label>
					</td>
					<td>
						<input type = "text"  name = "Pat_ID" placeholder = "Pat_ID" value = <?php echo $Pat_ID ; ?> >
						<input type = "submit" value = "Search" name = "Search" >
	            	</td>
	            </tr>
	            
	            <tr height = 20px></tr>

			</table>

			<h3><text class="lable">Patient Details</h3>

			<table style = "width: 650px;">
                <tr>
	                <td>
	                	<label><text class="lable">First Name :</label> 
	                </td>
	                <td>
	                	<input type = "text" id = "fName" name = "Fname"  readonly value = <?php echo $Fname ; ?> ><br>
	                </td>
	            </tr>
	            <tr>
	                <td>
	                	<label><text class="lable">Middle Name :</label> 
	                </td>
	                <td>
	                	<input type = "text" id = "mName" name = "Mname" readonly value = <?php echo $Mname ; ?>  ><br>
	                </td>
	            <tr>
	                <td>
	                	<label><text class="lable">Last Name :</label> 
	                </td>
	                <td>
	                	<input type = "text" id = "lName" name = "Lname" readonly value = <?php echo $Lname ; ?> ><br>
	                </td>
				</tr>
				
				<tr>
	                <td>
	                	<label><text class="lable">NIC :</label> 
	                </td>
	                <td>
	                	<input type = "String"  name = "NIC" readonly value = <?php echo $NIC ; ?> ><br>
	                </td>
	            </tr>

				<tr>
	            	<td>
	            		<label><text class="lable">Date of Birth :</label>
	            	</td>
	            	<td>
	            		<input type = "DATE"  name = "Date" readonly value = <?php echo $Date ; ?> ><br>
	            	</td>
	            </tr>
	            <tr>
	            	<td>
	            		<label><text class="lable">Contact No. :</label>
	            	</td>
	            	<td>
	            		<input type = "text"  id = "Contact_No" name = "Tel" readonly value = <?php echo $Tel; ?> ><br>
	            	</td>
	            </tr>

	            <tr>
	            	<td>
	            		<label><text class="lable">Date :</label>
	            	</td>
	            	<td>
	            		<input type = "date"  id = "date" name = "date" readonly value = <?php echo $date ; ?> ><br>
	            	</td>
	            </tr>
	            <tr>
	            	<td>
	            		<label><text class="lable">Time :</label>
	            	</td>
	            	<td>
	            		<input type = "time"  id = "time" name = "time" readonly value = <? echo $time ?> ><br>
	            	</td>
	            </tr>	

	            <tr height = 20px></tr>	
	         	                
			</table>

			<h3><text class="lable">Add a Medicine </h3>

			<table style = "width: 650px;">
				<tr>
					<td>
						<label><text class="lable"> Medicine name :</label>
					</td>
					<td>
						<select name="Medicine" value = <?php echo $med ; ?> >
							<?php echo $medi_list ; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<label><text class="lable"> Quantity :</label>
					</td>
					<td>
						<input type = "STRING" name = "Quantity" value = <?php echo $Qun ; ?> >
					</td>
				</tr>

				<tr height = 20px></tr>

			</table>

			

			<table class = "medicine">
				<tr>
					<th><text class="lable">No.</th>
					<th><text class="lable">Description</th>
					<th><text class="lable">Qty.</th>
					<th><text class="lable">Unit Price</th>
					<th><text class="lable">Amount</th>
				</tr>
					<?php echo $table ; ?>	

				<tr>
					<td colspan="4"><text class="lable">Total Amount</td>
					<td>
						<input type = "text" id = "total_amount" name = "total_amount" value = <?php echo $Total ; ?> ><br>
					</td>
				</tr>
			</table>

			<input type = "submit" class = "button checkout" name = "Add_medicine" value = "Add medicine">
			<input type = "submit" class = "button checkout" value = "Check Out" name = "Check_Out" >
			<input type = "button" class="button checkout" onclick="parent.location='main_page.php'" value ="Back"></input>

		
		</pr>
</body>
</html>