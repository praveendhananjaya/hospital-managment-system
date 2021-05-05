<!DOCTYPE html>
<html>
<style>
    body {
        background-image: url('backgroung.jpg');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-attachment: fixed;
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
    .button1 {
        background-color: rgb(63, 95, 165); 
        color: rgb(212, 243, 255); 
        border-radius: 10px;
        }

    .button1:hover {
        background-color: rgb(7, 248, 248);
        border: 3px solid rgb(7, 248, 248);
        color: rgb(41, 3, 3);
        border-radius: 0px;
        }

</style>

<body>
    <div class = "a">   
        <br><br><br><br>
        <h1>   
            <text class="b">
            Hospital Management System
        </h1>
        
        <table align="center" >
            <tr>   
                <td>
                    <button class ="button button1" input onclick="window.location.href='patient.php';">
                        <text class="a">    
                        Patients
                    </button><br>      
                </td>
            </tr>


            
            <tr>
                <td>
                    <button class ="button button1" input onclick="window.location.href='employee_register.php';">
                        <text class="a">    
                        Employees
                    </button><br>                  
                </td>
            </tr>
            <tr>
                <td>
                    <button class ="button button1" input onclick="window.location.href='wards.php';">
                        <text class="a">    
                        Wards
                    </button><br>      
                </td>
            </tr>
            <tr>
                <td>
                    <button class ="button button1" onclick="window.location.href='billing.php';">
                        <text class="a">    
                        Billing
                    </button><br>      
                </td>
            </tr>

            
        </table>
</body>
</html>