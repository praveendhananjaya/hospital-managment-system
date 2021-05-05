<!DOCTYPE html>
<html>

<style>
    body {
        background-image: url('backgroung.jpg');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
        padding-left: 50px;
    }
    div.a{
        text-align: center;
    }
    text.a{
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:30px;
    }
    text.b{
        font-size:50px;
        font-family:"Comic Sans MS", cursive, sans-serif;
        color:rgb(197, 243, 255);
    }
    text.lable{
        font-size:20px;
        font-family:"Comic Sans MS", cursive, sans-serif;
        color:rgb(197, 243, 255);
    }
    

    table {
        border-spacing: 10px;
        
    }
    
    .button {
        background-color: rgb(2, 153, 212);
        border: none;
        color: white;
        padding: 15px 50px;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        transition-duration: 0.2s;
        
    }
    .checkout {
        background-color: rgb(63, 95, 165); 
        color: rgb(212, 243, 255); 
        border-radius: 10px;
        }

    .checkout:hover {
        background-color: rgb(7, 248, 248);
        border: 3px solid rgb(7, 248, 248);
        color: rgb(41, 3, 3);
        border-radius: 0px;
        }
    
    .admit {
        background-color: rgb(63, 95, 165); 
        color: rgb(212, 243, 255); 
        border-radius: 10px;
        }

    .admit:hover {
        background-color: rgb(248, 7, 87);
        border: 3px solid rgb(248, 7, 19);
        color: rgb(41, 3, 3);
        border-radius: 0px;
        }

</style>

<body>
        
            <?php 
            $Fname   = null ;
            $Mname   = null ;
            $Lname   = null ;
            $Date    = null ; 
            $Sex     = null ;
            $Address = null ;
            $Tel     = null ;
            $RESULT  = null ; 
            $NIC     = null ;
            $Patient = null ;
            $Section_list = null ;
            $Ward    = null ;
            $Room    = null ;
            $description = null ;
            include 'Patient_process.php';?>

    <div>   
        <h1 >   
            <text class="b">
            Patients
        </h1>
        
        <br><br><br>
        
        <form method = "POST" >
            <table >
                <!-- patient detail section -->
                <tr>
                    <text class="lable">Enter the details of the patient </label>
                </tr>
                
                <tr>
                    <br><br>
                </tr>
                <tr>
                    <td><text class="lable">NIC</td>
                    <td><input required type ="NUMBER" placeholder = 'NIC' name = "NIC"  value = <?php echo $NIC ; ?> >
                    <button name = "Search" id="search" formnovalidate > Search</button></td>
                    <!--input type = 'submit' value = 'Search' name = 'Search'></tb-->
                </tr> 
              
                <tr>
                    <td><text class="lable">First Name</td>
                    <td><input required name = "Fname" placeholder = 'First name' value = <?php echo $Fname ?> ></td>
                </tr>

                <tr>
                    <td><text  class="lable">Middle Name</td>
                    <td><input required name = "Mname" placeholder = 'Middle name' value = <?php echo $Mname ?> ></td>
                </tr>

                <tr>
                    <td><text class="lable">Last Name</td>
                    <td><input required name = "Lname" placeholder = 'Last name' value = <?php echo $Lname ?> ></td>

                </tr>    

                <tr>
                    <td><text class="lable">Address</td>
                    <td><input required name = "Address" placeholder = "Address" size=50 value = <?php echo $Address ?> ></td>
                </tr>

                <tr>
                    <td><text class="lable">Date of Birth</td>
                    <td><input required type = "DATE" name = "DATE" placeholder = "birthday" value = <?php echo $Date ; ?> ></td>
                </tr>

                <tr>
                    <td><text class="lable">Sex</td>
                    <td>
                        <text class="lable">
                        <input required type="radio" name = "Sex"  value="Male" <?php if($Sex == "Male") echo 'checked' ; ?> >Male
                        <input required type="radio" name = "Sex"  value="Female" <?php if($Sex == "Female") echo 'checked' ; ?> >Female
                    </td>
                </tr>
                
                <tr>
                    <td><text class="lable">Tel No</td>
                    <td><input required type ="NUMBER" name = "Tel" placeholder = '077xxxxxxx' value = <?php echo $Tel ?> ></td>
                </tr>                           
            </table>

            <table >
                <tr>
                    <td><text class="lable">Section</td>
                    <td><select name="section"  >
                        <?php echo $Section_list ?>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td><text class="lable">Description</td>
                    <td><!--select name="roomNo" id="roomNo" > 
                        </select-->
                        <input type="TEXT" placeholder = 'description' name = "description" value = <?php echo $description ?>> </input>
                    </td>
                </tr>

                <tr>
                    <td><text class="lable">Ward</td>
                    <td><!--select name="ward" id="ward" > 
                        </select--->
                        <input type="TEXT" placeholder = 'Ward' name = "Ward" disabled value = <?php echo $Ward ?>> </input>
                    </td>
                </tr>

                <tr>
                    <td><text class="lable">RoomNo</td>
                    <td><!--select name="roomNo" id="roomNo" > 
                        </select-->
                        <input type="TEXT" placeholder = 'Room no' name = "Room" disabled value = <?php echo $Room ?> ></input>
                    </td>
                </tr>

            </table>

                <br><br><br><br><br>
                    
                <!--text class="lable">Enter the details of the medical treatment<br><br-->
            
                <!-- medical information section -->
                <table>
                    <tr>    
                        <!--td><text class="lable">Medicine 
                        <select name="medicine" id="medicine" > 
                            
                        </select>
                        <text class="lable">Quantity<input name = "quantity" id="quantity" ><text class="lable">mg</td-->
                    <tr>
                        <td>
                            <input type="submit" class="button checkout" name="get_number" value = "Patient Number"></input>
                            <input type="submit" class="button admit" name="admit" value = "ADMIT"></input>    
                            <input type = "button" class="button checkout" onclick="parent.location='main_page.php'" value ="Back"></input>
                        </td>

                    </tr>

                    <br>
                        <tr><tb><text class="lable"> <?php echo $Patient ; ?> </td><tr>
                    
                </table>
        </form>
</body>
</html>         