<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div>   
        <h1 >   
            <text class="b">
            Admit patient
        </h1>
        
        <br><br><br>
        
        <form>
            
            <table >
                <tr>
                    <td><text class="lable">Section</td>
                    <td><select name="section" id="section">
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><text class="lable">Ward</td>
                    <td><select name="ward" id="ward" > 
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><text class="lable">RoomNo</td>
                    <td><select name="roomNo" id="roomNo" > 
                        </select>
                    </td>
                </tr>

            </table>
       
            <br><br><br>
            
            <input type="submit" class="button admit" name="admit" id= "admit" value = "ADMIT" ></input>    
            <input type = "button" class="button checkout" onclick="parent.location='main_page.php'" value ="Back"></input>
        </form>
</body>
</html>         