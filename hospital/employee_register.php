<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
            $Fname   = null ;
            $Mname   = null ;
            $Lname   = null ;
            $Date    = null ; 
            $Sex     = null ;
            $Addr    = null ;
            $Tel     = null ; 
			$NIC     = null ;
			$E_no    = null ;
			$Save    = null ;
			$Designation = "Doctor" ;
			$Category = null ;
			include 'employee_process.php';
	?>

	<form method = "Post" >
	<pr>
		<h1><text class = "b">Employee </h1>
		<br><br><br>

		<table style = "width: 650px;">
			<tr>
				<text class="lable">Enter the details of the employee </label>
				<br><br>
			</tr>
			<tr>
				<td>

					<label for = "E_ID"><text class = "lable">Employee ID :</label> 
	                </td>
	                <td>
	                	<input required type = "NUMBER" placeholder = "E_ID" name = "E_ID" value = <?php echo $E_no ; ?> >
								
						<!--input type = "Submit" value = "Search" name = "Search"><br-->
						<button name = "Search"  formnovalidate > Search</button></td>
	                </td>
	            </tr>
                <tr>
	                <td>
	                	<label for = "fName"><text class = "lable">First Name :</label> 
	                </td>
	                <td>
	                	<input required type = "text" placeholder = "First Name" name = "Fname" value = <?php echo $Fname ;?> ><br>
	                </td>
	            </tr>
	            <tr>
	                <td>
	                	<label for = "mName"><text class = "lable">Middle Name :</label> 
	                </td>
	                <td>
	                	<input required type = "text" placeholder = "Middle Name" name = "Mname" value = <?php echo $Mname ;?> ><br>
	                </td>
	            <tr>
	                <td>
	                	<label for = "lName"><text class = "lable">Last Name :</label> 
	                </td>
	                <td>
	                	<input required type = "text" placeholder = "Last Name" name = "Lname" value = <?php echo $Lname ;?> ><br>
	                </td>
				</tr>
				
				<tr>
                    <td><text class="lable">Sex:</td>
                    <td>
                        <text class="lable">
                        <input required type="radio" name = "Sex"  value="Male" <?php if($Sex == "Male") echo 'checked' ; ?> >Male
                        <input required type="radio" name = "Sex"  value="Female" <?php if($Sex == "Female") echo 'checked' ; ?> >Female
                    </td>
                </tr>

	            <tr>
	                <td>
	                	<label for = "NIC"><text class = "lable">NIC No. :</label> 
	                </td>
	                <td>
	                	<input required  type = "NUMBER" name = "NIC" placeholder = "NIC NO" value = <?php echo $NIC;?> name = "NIC"><br>
	                </td>
	            </tr>
	            <tr>
	                <td>
	                	<label for = "DOB"><text class = "lable">Date of Birth :</label> 
	                </td>
	                <td>
	                	<input required type = "DATE" name = "DATE" value = <?php echo $Date ;?> name = "DOB"><br>
	                </td>
	            </tr>
	            <tr>
	         		<td>
	         			<label for = "designation"><text class = "lable">Designation</label>
	         		</td>
	         		<td>
					 	
						 <select id = "designation" name = "Designation" value = <?php echo $Designation ; ?> >

						 	<option value = <?php echo $Designation ; ?> ><?php echo $Designation ; ?></option>
                        	<option value = "Doctor">Doctor</option>
                        	<option value = "Nursing">Nursing Staff</option>
                        	<option value = "Clerical">Clerical Staff</option>
                        	<option value = "Cleaning">Cleaning Staff</option>
                        	<option value = "Security">Security Staff</option>
                    	</select>
	         		</td>
	         	</tr>

				 <tr>
	                <td>
	                	<label for = "category"><text class = "lable">Category :</label> 
	                </td>
	                <td>
	                	<input required  type = "string"  placeholder = "rank x"  name = "Category" value = <?php echo $Category;?> ><br>
	                </td>
	            </tr>
	            <tr>
	

	            <tr>
	            	<td>
	            		<label for = "Contact_No"><text class = "lable">Contact No. :</label>
	            	</td>
	            	<td>
	            		<input required type = "NUMBER" name = "Tel" placeholder = "077xxxxxxx"  value = <?php echo $Tel ;?> name = "Contact_No"><br>
	            	</td>
	            </tr>
	            <tr>
	                <td><text class = "lable">
	                	<label for = "Address">Address:</label> 
	                </td>
	                <td>
	                	<input required type = "text" placeholder = "Address"  name = "addr" size=50 value = <?php echo $Addr ;?> ><br>
	                </td>
	         	</tr>

	         	<tr height = 20px></tr>
	         	
	         	<tr>
	         		<td></td>
                    <td>
						<input class = "button checkout" type = "submit" name = "Register" value = "Register/Save">
						<input  type = "button" class="button checkout" onclick="parent.location='main_page.php'" value ="Back"></input>
                    </td >
				</tr>
				

			</table>
			
			<text class = "lable" ><label > <?php echo $Save ?>  </label>

	</pr>
</body>
</html>




