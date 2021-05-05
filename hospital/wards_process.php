
<!DOCTYPE html>
<html>
<body>
<?php include 'database.php';?>

<?php

$Room_list = null ;


if(isset($_POST['neurology'])){
    $current = 1 ;
    $type = "neurology" ;
    $sql = "SELECT * FROM Ward_Section WHERE Section_No = 1 ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        

        while ( $row = mysqli_fetch_assoc($RESULT) ) {
  
            $ward_list = $ward_list." <option value = ".$row['Ward_NO']."  >".$type." :- ".$row['Ward_NO']." </option>" ;

        }
    }
}

if(isset($_POST['cardiology'])){
    $current = 2 ;
    $type = "cardiology" ;
    $sql = "SELECT * FROM Ward_Section WHERE Section_No = 2 ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        

        while ( $row = mysqli_fetch_assoc($RESULT) ) {
  
            $ward_list = $ward_list." <option value = ".$row['Ward_NO']."  > ".$type." :- ".$row['Ward_NO']." </option>" ;

        }
    }
}




if(isset($_POST['dermatology'])){
    $current = 4 ;
    $type = "dermatology" ;
    $sql = "SELECT * FROM Ward_Section WHERE Section_No = 3 ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        

        while ( $row = mysqli_fetch_assoc($RESULT) ) {
  
            $ward_list = $ward_list." <option value = ".$row['Ward_NO']."  > ".$type." :- " .$row['Ward_NO']." </option>" ;

        }
    }
}

if(isset($_POST['orthopedic'])){
    $current = 4 ;
    $type = "orthopedic" ;
    $sql = "SELECT * FROM Ward_Section WHERE Section_No = 4 ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        

        while ( $row = mysqli_fetch_assoc($RESULT) ) {
  
            $ward_list = $ward_list." <option value = ".$row['Ward_NO']."  > ".$type." :- ".$row['Ward_NO']." </option>" ;

        }
    }
}

if(isset($_POST['sugical'])){
    $current = 7 ;
    $type = "sugical" ;
    $sql = "SELECT * FROM Ward_Section WHERE Section_No = 7 ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        

        while ( $row = mysqli_fetch_assoc($RESULT) ) {
  
            $ward_list = $ward_list." <option value = ".$row['Ward_NO']."  >".$type." :- " .$row['Ward_NO']." </option>" ;

        }
    }
}

if(isset($_POST['general'])){
    $current = 5 ;
    $type = "general" ;
    $sql = "SELECT * FROM Ward_Section WHERE Section_No = 5 ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        

        while ( $row = mysqli_fetch_assoc($RESULT) ) {
  
            $ward_list = $ward_list." <option value = ".$row['Ward_NO']."  > ".$type." :- ".$row['Ward_NO']." </option>" ;

        }
    }
}

if(isset($_POST['opd'])){
    $current = 6 ;
    $type = "opd" ;
    $sql = "SELECT * FROM Ward_Section WHERE Section_No = 6 ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        

        while ( $row = mysqli_fetch_assoc($RESULT) ) {
  
            $ward_list = $ward_list." <option value = ".$row['Ward_NO']."  > ".$type." :- " .$row['Ward_NO']." </option>" ;

        }
    }
}


if(isset($_POST['Search'])){

    $sql = "SELECT * FROM Ward_Section WHERE Section_No = '$current' ;" ;
    $RESULT = mysqli_query( $conn , $sql ) ;

    if( mysqli_num_rows( $RESULT ) > 0 ){
        

        while ( $row = mysqli_fetch_assoc($RESULT) ) {
  
            $ward_list = $ward_list." <option value = ".$row['Ward_NO']."  > ".$type." :- " .$row['Ward_NO']." </option>" ;

        }
    }
    

    $Ward_No = $_POST['ward'] ;
        if( $Ward_No ){

        $sql = "SELECT * FROM Ward_Room WHERE Ward_No = $Ward_No ;" ;
        $RESULT = mysqli_query( $conn , $sql ) ;

        if( mysqli_num_rows( $RESULT ) > 0 ){
            

            while ( $row = mysqli_fetch_assoc($RESULT) ) {
    
                //$ward_list = $ward_list." <option value = ".$row['Ward_NO']."  > ward -" .$row['Ward_NO']." </option>" ;
                
                if(!$row['State']){
                    $available = " Free " ;
                }else{
                    $available = " Full" ;
                }
                $Room_list = $Room_list."<tr> <td>
                    <text class='lable_small'>
                    <label> ". $row['Room'] . "</label>
                    </td> <td>  <text class='lable_small'>
                    <label> ". $available . "</label> </td> 
                    <td>  <text class='lable_small'>
                    <label> ". $row['Admit_No'] . "</label> </td>
                    </tr> " ; 

            }
        }
    }
}





?>   
</body> 
</html>