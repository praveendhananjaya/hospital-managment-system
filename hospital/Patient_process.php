
<!DOCTYPE html>
<html>
<body>
<?php include 'database.php';?>

<?php

$sql    = "SELECT * FROM Section ;" ;
$RESULT = mysqli_query( $conn , $sql ) ;
$Section = "" ;

if( mysqli_num_rows( $RESULT ) > 0 ){
    $i = 1 ;
    while ( $row = mysqli_fetch_assoc($RESULT) ) {
        $Section = $Section." "."<option value =".$i.">".$row['Type']."</option>" ;   
        $i = $i + 1 ;
       //echo $row['Type'] ;
    }
}

$Section_list = $Section ; 

if(isset($_POST['Search'])){
    $RESULT = null ; 
    $NIC     = $_POST['NIC'] ;
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
if(  isset( $_POST['get_number'] )  ){

    $NIC     = $_POST['NIC'] ;
    $Fname   = $_POST['Fname'] ;
    $Mname   = $_POST['Mname'] ;
    $Lname   = $_POST['Lname'] ;
    $Date    = $_POST['DATE'] ; 
    $Sex     = $_POST['Sex'] ;
    
    $Address = $_POST['Address'] ;
    $Tel     = $_POST['Tel'] ;
    
     
    $sql = "INSERT INTO NIC_loc_pati ( NIC ,Fname , Mname , Lname , D_of_Brith , Sex , Pat_Add , Pat_Tel_No ) VALUE( '$NIC' , '$Fname' , '$Mname' , '$Lname' , '$Date' , '$Sex' , '$Address' , '$Tel' ) 
    ON DUPLICATE KEY UPDATE Fname = '$Fname' , Mname = '$Mname' , Lname = '$Lname'  , D_of_brith = '$Date' , Sex = '$Sex' , Pat_Add = '$Address' , Pat_Tel_No = '$Tel' ; " ; 
    $out = mysqli_query( $conn , $sql ) ;
    if(! $out) {
        echo " database is not update ";
    }

    $sql = "CALL Patient_adding('$NIC');";
    $out = mysqli_query( $conn , $sql );
    if(! $out) {
        echo " Patien number error  ";
    }

    $sql = "SELECT * FROM Patient ORDER BY Pat_ID DESC LIMIT 1 ;" ;  // nic
    $out = mysqli_query( $conn , $sql ) ;
    if( !$out ){
        echo "error" ;
    }

    $row = mysqli_fetch_row($out) ;
    $Patient = "hello ,".$Fname." ,"."Your number is ".$row[0] ;



}

if( isset( $_POST['admit'] ) ){


    $NIC     = $_POST['NIC'] ;
    $Fname   = $_POST['Fname'] ;
    $Mname   = $_POST['Mname'] ;
    $Lname   = $_POST['Lname'] ;
    $Date    = $_POST['DATE'] ; 
    $Sex     = $_POST['Sex'] ;
    
    $Address = $_POST['Address'] ;
    $Tel     = $_POST['Tel'] ;
    $sect    = $_POST['section'] ;
    $description = $_POST['description'];
    
     
    $sql = "INSERT INTO NIC_loc_pati ( NIC ,Fname , Mname , Lname , D_of_Brith , Sex , Pat_Add , Pat_Tel_No ) VALUE( '$NIC' , '$Fname' , '$Mname' , '$Lname' , '$Date' , '$Sex' , '$Address' , '$Tel' ) 
    ON DUPLICATE KEY UPDATE Fname = '$Fname' , Mname = '$Mname' , Lname = '$Lname'  , D_of_brith = '$Date' , Sex = '$Sex' , Pat_Add = '$Address' , Pat_Tel_No = '$Tel' ; " ; 
    $out = mysqli_query( $conn , $sql ) ;
    if(! $out) {
        echo " database is not update ";
    }

    $sql = "CALL Patient_adding('$NIC');";
    $out = mysqli_query( $conn , $sql );
    if(! $out) {
        echo " Patien number error  ";
    }

    $sql = "SELECT * FROM Patient  ORDER BY Pat_ID DESC LIMIT 1 ;" ;        // nic
    $out = mysqli_query( $conn , $sql ) ;
    if( !$out ){
        echo "error" ;
    }

    $row = mysqli_fetch_row($out) ;
    $Patient = "hello ,".$Fname." ,"."Your number is ".$row[0] ;

    $sql = "CALL Admit_Patient( '$row[0]' ,'$sect', '$description' );" ;
    $out = mysqli_query( $conn , $sql );

    if(!$out){
        echo "call admits" ;
        echo "$sect";
        echo "$row[0]" ;
    }

    $sql = "SELECT * FROM Admits ORDER BY Time_of_addmi DESC , Date DESC LIMIT 1 ;" ;
    $out = mysqli_query( $conn , $sql );
    $row = mysqli_fetch_row($out) ;
    $admit   = $row[0] ;
    $Ward    = $row[2] ;
    $Room    = $row[3] ;


}




?>   
</body> 
</html>