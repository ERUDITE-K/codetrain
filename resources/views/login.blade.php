<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loginform</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body onload="loadAgeSelector()"><div class="login-clean">
    <form method="post" action="/in">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration"><i class="icon ion-ios-navigate"></i></div>

         <div class="form-group"><input class="form-control" type="text" name="ind" placeholder="wace" value="wace" /></div>

         <div class="form-group"><input class="form-control" type="number" name="ind2" placeholder="Index Number" min="001" maxlength="3" required="" /></div>

        <div class="form-group"> <select id="yearselect" name="ind3" required=""><optgroup label="Index Number(Year)" ></optgroup></select>
<script>
function loadAgeSelector()
{
var startyear = 1900;
var endyear = new Date().getFullYear();
var options = "";
for (var i = startyear;i<=endyear;i++){
    node=document.createElement("Option");
    textnode=document.createTextNode(i);
    node.appendChild(textnode);
    document.getElementById("yearselect").appendChild(node);
}
}
</script>
</div>  

        <div class="form-group"><input type="email" name="email" placeholder="Email" class="form-control" /></div>

        <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-control" /></div>

        <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a></form>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>