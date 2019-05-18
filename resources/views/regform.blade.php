<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Elec App</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="aasets/css/Simple-Slider.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
</head> 

<body onload="loadAgeSelector()"><div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>
        <form method="post" action="/register">
            {{csrf_field()}}
            <h2 class="text-center"><strong>Registration</strong> Form.</h2>
            <div class="form-group"><input class="form-control" type="text" name="Firstname" placeholder="Firts Name"  required="" /></div>
            <div class="form-group"><input class="form-control" type="text" name="Lastname" placeholder="Last Name" required=""/></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Other Name" /></div>
            <div>
				<label >Gender</label><br>
				<label><input type="radio" name="gen" required="">Male</label>
				<label><input type="radio" name="gen" required="">Female</label>
			</div>
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
         <div class="form-group" re><input class="form-control" type="email" name="email" placeholder="Email" required="" /></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password" required="" /></div>
            <div class="form-group"><input class="form-control" type="password" name="password-repeat" placeholder="Password (confirm)" required="" /></div>
            <div class="form-group">
                <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required="" />I am a student here.</label></div>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Register Now</button></div><a href="/login" class="already">Are you a Voter? Login here.</a></form>
    </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>
<script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/Simple-Slider.js"></script>
</body>

</html>