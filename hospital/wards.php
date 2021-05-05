<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    
    <?php
    $ward_list = null ;
    $current = 1;
    $type = "neurology" ?>

    <?php include 'wards_process.php';?>

</body>
    <div class = "a">
       <form method = "POST" >
           <table align="center">
               <tr>
                   <td>
                    <input type = "submit" class="button button_large_font" name="neurology" id="neurology" value ="Neurology"></input>
                    <input type = "submit" class="button button_large_font" name="cardiology" id="cardiology" value ="Cardiology"></input>
                    <input type = "submit" class="button button_large_font" name="dermatology" id="dermatology" value ="Dermatology"></input>
                    <input type = "submit" class="button button_large_font" name="orthopedic" id="orthopedic" value ="Orthopedic"></input>
                    <input type = "submit" class="button button_large_font" name="general" id="general" value ="General"></input>
                    <input type = "submit" class="button button_large_font" name="opd" id="opd" value ="OPD"></input>
                    <input type = "submit" class="button button_large_font" name="sugical" id="sugical" value ="Surgical"></input>
                    <input  type = "button" class="button button_large_font" onclick="parent.location='main_page.php'" value ="Back"></input>
                   </td>
               </tr>
               <tr>
                   <td>
                       <br><br>
                       <text class="lable">Select the ward 
                       <select  name = "ward"  >
                            <?php echo $ward_list; ?>

                       </select >
                   </td>
               </tr>

               <tr>
                   <td>
                       <br><br>
                       <input required type = "submit" class="button button_large_font" name="Search" value ="Search"></input>
                       <!--button name = "Search" class="button button_large_font" formnovalidate > Search</button></td-->
                   </td>
               </tr>

               <tr>
                    <td>
                        <table align="center" class="lable_small" >
                            <tr>
                                <text class="lable_small">

                                <th >
                                    <text class="lable_small">
                                    <label>room </label>
                                </th>
                                <th>
                                    <text class="lable_small">
                                    <label>Available </label>
                                </th>
                                <th>
                                    <text class="lable_small">
                                    <label>Admit number </label>
                                </th>

                            </tr>

                            <?php  echo $Room_list ; ?>

                        </table>
                    </td>  
               </tr>
           </table>
       </form>
    </div>
   
    
</html>

