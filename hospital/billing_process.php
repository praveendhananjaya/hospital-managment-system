
<!DOCTYPE html>
<html>
<body>
<?php include 'database.php';?>

<?php 
		$Pat_ID  = null ;
		$Fname   = null ;
		$Mname   = null ;
		$Lname   = null ;
		$Date    = null ; 
		$Sex     = null ;
		$Address = null ;
		$Tel     = null ;
		$RESULT  = null ; 
		$NIC     = null ;
		$date    = null ;
        $time    = null ;
        $Qun     = 1 ; 
        $table   = "" ;  
        $Total   = 0 ; 


?>

<?php

if( isset( $_POST['Add_medicine'] ) ){
    
    $Pat_ID = $_POST['Pat_ID'] ;
    $med =  $_POST['Medicine'] ;
    $Qun =  $_POST['Quantity'] ;
    $NIC     = $_POST['NIC'] ;
    $Fname   = $_POST['Fname'] ;
    $Mname   = $_POST['Mname'] ;
    $Lname   = $_POST['Lname'] ;
    $Date    = $_POST['Date'] ;
    $Tel     = $_POST['Tel'] ;
    $date    = $_POST['date'];
    $time    = $_POST['time'];

    $sql    = "SELECT * FROM Medicine ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;
    $medi_list = "" ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        
        while ( $row = mysqli_fetch_assoc($RESULT) ) {
            $medi_list = $medi_list." "."<option value =".$row['Product_code'].">".$row['Product_code']."</option>" ;   
           //echo $row['Type'] ;
        }
    }

  //  Call Medicine_used_on_patient( 3 , "Diclofenac" , 10 );
    $sql = "Call Medicine_used_on_patient( $Pat_ID , '$med' , $Qun ); ";
  //  $sql = "Call Medicine_used_on_patient( 3 , 'Diclofenac' , $Qun );" ;
    $RESULT = mysqli_query( $conn , $sql ) ; 
    
    list($table,$Total) = lord($table,$Total);
}





if(isset($_POST['Search'])){

    $sql    = "SELECT * FROM Medicine ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;
    $medi_list = "" ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        
        while ( $row = mysqli_fetch_assoc($RESULT) ) {
            $medi_list = $medi_list." "."<option value =".$row['Product_code'].">".$row['Product_code']."</option>" ;   
           //echo $row['Type'] ;
        }
    }

    list($table,$Total) = lord($table,$Total);


    $RESULT = null ; 
    $Pat_ID     = $_POST['Pat_ID'] ;
    if( $Pat_ID != NULL ){
        $sql = "SELECT * FROM Patient WHERE Pat_ID = $Pat_ID ;" ;
        $RESULT = mysqli_query( $conn , $sql ) ;

        if( $RESULT != null ){
            while($row = mysqli_fetch_array($RESULT)) {
                $NIC    = $row[1] ;
                $date   = $row[3] ;
                $time   = $row[2] ;
               /* $Date    = $row[4] ;
                $Sex     = $row[5] ;
                $Address = $row[6] ;
                $Tel     = $row[7] ;*/

            }
        }
    }


    if( $NIC != NULL ){
        $sql = "SELECT * FROM NIC_loc_pati WHERE NIC = $NIC ;" ;
        $RESULT = mysqli_query( $conn , $sql ) ;
        if( $RESULT != null ){
            while($row = mysqli_fetch_array($RESULT)) {
                $NIC     = $row[0] ;
                $Fname   = $row[1] ;
                $Mname   = $row[2] ;
                $Lname   = $row[3] ;
                $Date    = $row[4] ;
                $Sex     = $row[5] ;
                $Address = $row[6] ;
                $Tel     = $row[7] ;

            }
        }
    }
            
}

if( isset( $_POST['Check_Out'] ) ){

        
    $Pat_ID = $_POST['Pat_ID'] ;
    $med =  $_POST['Medicine'] ;
    $Qun =  $_POST['Quantity'] ;
    $NIC     = $_POST['NIC'] ;
    $Fname   = $_POST['Fname'] ;
    $Mname   = $_POST['Mname'] ;
    $Lname   = $_POST['Lname'] ;
    $Date    = $_POST['Date'] ;
    $Tel     = $_POST['Tel'] ;
    $date    = $_POST['date'];
    $time    = $_POST['time'];

    $sql = "SELECT * FROM Admits WHERE Pat_No = $Pat_ID ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ; 
    
    if( mysqli_num_rows( $RESULT ) > 0 ){
        while( $row = mysqli_fetch_assoc($RESULT) ){
            $sql = "call Leave_Patien(".$row['Admit_No'].");";
            $row = mysqli_query( $conn , $sql ) ;


        }
    }

    $sql = "UPDATE  Bill set Paid = 1 , Payment = $Total where Pat_ID = '$Pat_ID' and Paid is null  ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ; 
     

}

function lord($table,$Total){

    include 'database.php';
    $Pat_ID = $_POST['Pat_ID'] ;
    $sql = "SELECT * FROM Bill where Pat_ID = '$Pat_ID' and Paid is null  ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ; 

    $table  = null ;
    $i = 1 ; 
    if( mysqli_num_rows( $RESULT ) > 0 ){
        
        while ( $row = mysqli_fetch_assoc($RESULT) ) {
            $tem = $row['Bill_No'] ;

            $sql = "SELECT * FROM Bill_Medici WHERE Bill_No = $tem ;" ;
            $out = mysqli_query( $conn , $sql ) ; 
            if( mysqli_num_rows( $out ) > 0 ){
        
                while ( $r = mysqli_fetch_assoc($out) ) {
                    $tempro = $r['Product_ID'] ;
                    $sql = "SELECT * FROM Medicine WHERE Product_ID = $tempro ;" ;
                    $temname = mysqli_query( $conn , $sql ) ;
                    if($temname){
                    $name = mysqli_fetch_assoc($temname) ;
                    $table = $table."<tr>
                    <td>
                        <input type = 'text'  name = 'No' value = ". $i ." ><br>
                    </td>
                    <td>
                        <input type = 'text' id = 'description' name = 'description' value = ".$name['Product_code']." ><br>
                    </td>
                    <td>
                        <input type = 'text' id = 'Qty' name = 'Qty' value = ".$r['Quantity']." ><br>
                    </td>
                    <td>
                        <input type = 'text' id = 'unit_price' name = 'unit_price' value = ".$name['Price']." ><br>
                    </td>
                    <td>
                        <input type = 'text' id = 'amount' name = 'amount' value = ".$r['Price']." ><br>
                    </td>
                    </tr>"  ;
                
                    $i = $i + 1 ;
                    $Total = $Total + $r['Price'] ;
                    }
                }
            }
        }
    }
    return array($table,$Total)  ;
}

?>

</body>
</html>