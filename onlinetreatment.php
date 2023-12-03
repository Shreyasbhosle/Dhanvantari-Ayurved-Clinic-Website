<html>
<head>
    <title> Online Treatment</title>
</head>
<style>
    
    body{
        background-image: url('om1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
   
    .top {
    width: 100%;
    background-color: #91878c;
    border-bottom: 2px solid #f0f0f0;
}
div {
    display: block;
}
.top div {
    width: 1200px;
    color: #fff;
    background-color: #91878c;
    font-family: Arial;
    padding: 10px;
    text-align: right;
}
</style>
<body>
    <div class="top">
        <div>
         Contact Us +91 7038046320 | shreyas.bhosle20@pccoepune.org 
        </div>
    </div>
<h1 align = "Center">Online Treatment</h1>
<center  style="border: #454544; border-width:1px; padding-top: 20px; padding-left: 50px ; border-style:solid;">
<form action="connect(2).php" method="post">
    <label for = "Name"> Name :- </label>
    <input  style="height: 25px;width: 300px;" type="text" name = "Name"  required placeholder = "Enter Name" size = "30" >
<br><br>
    <label for = PhoneNumber"> Phone Number </label>
    <input  style="height: 25px;width: 300px;" type = "tel" name = "PhoneNumber" required placeholder ="Enter PhoneNumber" pattern ="[0-9]{10}">
<br><br>
    <label for = "Issue"> Issue :- </label> 
    <input  style="height: 25px;width: 300px;" type = "text"  name = "Issuse" required  placeholder = "Enter your Issue" size = "150">
<br><br>
    <label for = "date"> Date From which disease is there :- </label>
    <input  style="height: 25px;width: 300px;" type = "date" name = "date" placeholder = "Date from which disease is there">
<br><br>
    <label for = "SideEffects">  Side Effects(if any):- </label> 
    <input  style="height: 25px;width: 300px;" type = "text" name = "SideEffects" placeholder = "side effects of patient" size = "50">
<br><br>
<p>Upi payment(QR code Given Below)</p>
<img src="QRcode.jpg" width="300" height="200">
<p>Amount is :- Rs 500 (Advance Rs100) </p>
<br><br>
<button type = "Submit">Submit</button>
</form>
</center>
</body>
</html>