<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
  <style>
     body{
        background-color:white;
      }
      .top {
    width: 100%;
    background-color: #2FA5EB ;
    border-bottom: 2px solid #f0f0f0;
}
.top div {
    width: 1200px;
    color: #fff;
    background-color: #2FA5EB;
    font-family: Arial;
    padding: 10px;
    text-align: right;
}
.bottom_up div {
    padding-top: 20px;
    width: 1200px;
    text-align: center;
    font-family: forte;
    font-size: 30px;
    padding-bottom: 20px;
}
.bottom_up div table {
    padding-top: 30px;
    font-size: 30px;
    width: 1100px;
    text-align: center;
    font-family: Arial;
}
table {
    display: table;
    box-sizing: border-box;
    text-align: start;
    border-spacing: 2px;
    border-color: grey;
}

tr {
    display: table-row;
    vertical-align: inherit;
    border-color: inherit;
}
td {
    display: table-cell;
    vertical-align: inherit;
}
input[type="text"] {
    padding: 12px;
    width: 250px;
}
input:not([type="image" i]) {
    box-sizing: border-box;
}
select {
    padding: 12px;
    width: 250px;
}
select:not(:-internal-list-box) {
    overflow: visible;
}
select {
    color: fieldtext;
    text-align: start;
    appearance: auto;
    box-sizing: border-box;
    align-items: center;
    border-width: 1px;
    border-style: solid;
    border-color: -internal-light-dark(rgb(118, 118, 118), rgb(133, 133, 133));
}
option {
    display: block;
    white-space: nowrap;
    min-height: 1.2em;
    padding: 0px 2px 1px;
}
button {
    width: 550px;
    padding: 10px;
    font-size: 20px;
    background-color: #2FA5EB;
}
  </style>
<body>
    <div class="top">
        <div>
         Contact Us +91 7038046320 | shreyas.bhosle20@pccoepune.org
        </div>
    </div>
    <h1 style="font-size: 50px ;color:gray;" align="Center">Dhanvantari Ayurved Clinic</h1>
    <div class="bottom_up">
        <div>
                Make an Appointment
                
                <form  action="connect.php" method="post">
                    <table>
                        
                        <tbody><tr>
                        <td width="500px"> </td>
                        <td>    <input type="text" name="fname" required placeholder="First Name">
                        </td><td>   <input type="text" name="lname" required placeholder="Last Name">
                        </td></tr>
                        <tr height="30px">
                            
                        </tr>
                        <tr>
                            <td width="500px"> </td>
                            <td>    <input type="text" name="Email" required placeholder="Email Id">
                            </td><td>   <input type="tel" name="Mobile" placeholder="Mobile No"pattern = "[0-9]{10}">
                            </td></tr>
                            
                            <tr height="30px">
                        
                    </tr>
                    <tr>
                        <td width="500px"> </td>
                        <td>    
                        <select> 
                            <option> -- Gender  -- </option>
                            <option> Male </option>
                            <option> Female </option> 
                        </select>
                    </td>
                    <td>   
                        <label>Appointment Date </label>
                        <input type="date" name = "date" placeholder="appointment date">
                    </td>
                    <td>
                        <label>Appointment Time</label>
                        <input type = "time" name = "time" placeholder = "Appointment Time">
                    </td>
                </tr>
                
                <tr height="30px">
                    
                </tr>
                
                <tr>
                    <td width="500px"> </td>
                    <td colspan="2">    
                        <button type="submit"> SUBMIT </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
                
        </div>
    </div>
</body>
</html>