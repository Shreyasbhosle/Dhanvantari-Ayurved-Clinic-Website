<!DOCTYPE html>
<html>
<head>
    <title>Contact us</title>
    <style>
      body{
        background:white;
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
    font-family: calibri;
    padding: 10px;
    text-align: left;
}
div {
    display: block;
}
h2{
  background-color:red;
}
.form-group {
    margin-bottom: 15px;
}
div {
    display: block;
}
.col-xs-12 {
    width: 100%;
}
label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: bold;
}
input[type="radio"], input[type="checkbox"] {
    margin: 4px 0 0;
    line-height: normal;
}
input[type="checkbox"], input[type="radio"] {
    box-sizing: border-box;}

    .btn-info {
    text-align:center;
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}
.btn-lg, .btn-group-lg>.btn {
    padding: 10px 16px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 6px;
}

button, html input[type="button"], input[type="reset"], input[type="submit"] {
    cursor: pointer;
}
    .btn {
    display: inline-block;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
   border: 1px solid transparent;
    white-space: nowrap;
    
}
    

    </style>
</head>
<body>
  <div class="top">
    <div>
     Contact Us +91 7038046320 | shreyas.bhosle20@pccoepune.org   
    </div>

  </div>

  <h1 style="font-size: 50px ;color:DodgerBlue;" align="Center">Dhanvantari Ayurved Clinic</h1>
  <p align="center"><b>Welcome to Dhanvantari hospital</b></p>
  
  <script>

function validateForm() {
  let x = document.forms["form1"]["Name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>


<center>
<form action = "connect(1).php"  method="post">
 
  <input style="height: 25px;width: 300px;" type="text" name="name" required placeholder="Name"><br><br>
 
  <input style="height: 25px;width: 300px;" type="tel" name = "number" required placeholder = "Phone Number" pattern = "[0-9]{10}">
 
  <input style="height: 25px;width: 300px;" type = "text" name = "email" required placeholder = "Mail id" size = "35"><br><br>

  <input style="height: 70px;width: 620px;" type = "text" name = "query" required placeholder = "Message" size = "80">
  <br>
  <br>
  <button type = "Submit">Submit</button>
  </form>
  </center>
</body>
</html>