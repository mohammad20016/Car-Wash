<html>
<head>
<title>Edit Car</title>
<script src="js/jquery.min.js"></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		
		<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
			<link rel="stylesheet" href="css/style-desktop.css" />
            <link rel="stylesheet" href="css/slicebox.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
          
  </head>
<body>
<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
				
					<!-- Logo -->
						<div id="logo">
						<a href="index.html"><img src="images/logo.png" alt="Car Wash"></a>
						</div>
						<nav id="nav">
							<ul>
                            	<li><a href="index.html">Home</a></li>
                                <li><a href="myaccount.html">My Account</a></li>
                                <li><a href="orders.html">Orders</a></li>
                            </ul>
                            </nav>
				</header>
			</div>
           
            <div id="banner-wrapper" style="width:90%; margin:auto; padding:5px;">
				 <div id="banner" class="box container" style="margin:10px; padding:10px;"> 
                 <div><h2>Welcome <script> 
				 var em = window.sessionStorage.getItem("email");
				 document.write(em);</script></h2></div>
                <h1>New Car</h1>
                 <div id="result"></div>
                 <form>
               <label> Car Image:</label><br />
<input type="file" onChange="previewFile()" id="carimage" accept="image/*" capture="camera"><br>
</form>
<img src="" height="200" alt="Image preview..." id="preview">
<script>
   function previewFile(){
       var preview = document.getElementById('preview'); //selects the query named img
       var file    = document.querySelector('input[type=file]').files[0]; //sames as here
       var reader  = new FileReader();

       reader.onloadend = function () {
           preview.src = reader.result;
		  document.getElementById('imagee').innerHTML = reader.result;
		  uploadFile();
       }

       if (file) {
           reader.readAsDataURL(file); //reads the data as a URL

       } else {
           preview.src = "";
       }
  }
	function uploadFile() {
    blobFile = $('#carimage')[0].files[0];
    var fd = new FormData();
    fd.append("carimage", blobFile);

    $.ajax({
       url: "http://mobilecarwash.club/ajaximage1.php",
       type: "POST",
       data: fd,
       processData: false,
       contentType: false,
       success: function(response) {
       },
       error: function(jqXHR, textStatus, errorMessage) {
           console.log(errorMessage); // Optional
       }
    });
}
  //previewFile();  //calls the function named previewFile()
  </script>
<div class="col-2">
    <label>
Car Registration Number<br>
<input id="number" type="text"> </label>
<input id="imagee" type="hidden">
</div>
<div class="col-2">
   
<label>Colour<br>
<input id="colour" type="text">   </label></div>
<div class="col-2">
    <label>
Model<br>
<input id="model" type="text"> </label> </div>
<div class="col-2">
    <label>
Make<br>
<input id="make" type="text"></label></div>

<div class="col-2">
<div class="col-submit">
    <button class="submitbtn" id="submitbtn">Add new car</button>
  </div></div>
</div>
</div>  
</body>
  </html>

