<!DOCTYPE html>
<html>
<body>
<?php include 'database.php';?>

<?php

if(isset($_POST['Search'])){
    $RESULT = null ; 
    $E_no   = $_POST['E_ID'] ;
    
    if( $E_no != NULL ){
        $sql = "SELECT * FROM Employee WHERE E_ID = $E_no ;" ;
        $RESULT = mysqli_query( $conn , $sql ) ;
        if( $RESULT != null ){
            while($row = mysqli_fetch_array($RESULT)) {

                $E_no    = $row[0] ;
                $NIC     = $row[1] ;
                $Fname   = $row[2] ;
                $Mname   = $row[3] ;
                $Lname   = $row[4] ;
                $Date    = $row[5] ;
                $Sex     = $row[7] ;
                $Addr    = $row[6] ;
                $Tel     = $row[8] ;
                $Designation = $row[9] ;
                $Category= $row[10] ;

            }
        }
    }
    
}

if(  isset( $_POST['Register'] )  ){

    $E_no    = $_POST['E_ID'];
    $NIC     = $_POST['NIC'] ;
    $Fname   = $_POST['Fname'] ;
    $Mname   = $_POST['Mname'] ;
    $Lname   = $_POST['Lname'] ;
    $Date    = $_POST['DATE'] ; 
    $Sex     = $_POST['Sex'] ;
    
    $Addr    = $_POST['addr'] ;
    $Tel     = $_POST['Tel'] ;
    $Designation = $_POST['Designation'];
    $Category = $_POST['Category'];

     
    $sql = "INSERT INTO Employee ( E_ID , NIC ,Fname , Mname , Lname , D_of_Brith , Sex , Address , Contact_No ,type , category ) VALUE( '$E_no' ,'$NIC' , '$Fname' , '$Mname' , '$Lname' , '$Date' , '$Sex' , '$Addr' , '$Tel' , '$Designation' , '$Category' ) 
    ON DUPLICATE KEY UPDATE NIC = '$NIC' , Fname = '$Fname' , Mname = '$Mname' , Lname = '$Lname'  , D_of_brith = '$Date' , Sex = '$Sex' , Address = '$Addr' , Contact_No = '$Tel' , type = '$Designation' , category = '$Category' ; " ; 
    $out = mysqli_query( $conn , $sql ) ;
    if(! $out) {
        echo " database is not update ";
    }


  //  $row = mysqli_fetch_row($out) ;
    $Save = "Save File" ;



}

?>

</body>
</html>