<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}
body, html {
    height: 100%;
    margin: 0;
}

.background-image {
    background-image:  linear-gradient(rgb(0 0 0 / 70%), rgba(0, 0, 0, 0.55)),  url('/assets2/images/crickt.jpg'); /* Replace 'path_to_your_image.jpg' with the path to your background image */
    background-size: cover;
    background-position: center;
    height: 100%;
}

.container {
    text-align: center;
    padding-top: 180px;
     /* Adjust this value to center the content vertically */
    color: white; /* Adjust text color for better visibility */
}

h1 {
    font-size: 3em;
}

p {
    font-size: 20px;

}

a {
    color: white;
    text-decoration: none;
}
.content-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.content-box {
    background: #80808082;
        padding: 50px;
    /* border-radius: 10px; */
    text-align: center;
    color: #fff; /* Adjust text color for better visibility */
    max-width: 600px; /* Set maximum width for the box */
    width: 80%; /* Set width of the box */
    /* height: 300px; */
}
a:hover {
    text-decoration: underline;
}
.login-form {
    background: #80808082;
    padding: 50px;
}
    </style>
</head>
<body>
<div class="background-image">
        <div class="container">
            
   

        <div class="content-container">
            <div class="content-box">
            <!-- @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        
                        @if(Session::has('error'))
                            <div class="alert alert-error custom-error">
                                {{ Session::get('error') }}
                            </div>
                        @endif


                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif -->

                        @if(session('success') || session('error'))
			<div class="alert alert-{{ session('success') ? 'success' : 'danger' }} alert-dismissable" id="notification">
			{{ session('success') ?: session('error') }}
			</div>
			<script>
			setTimeout(function(){
			document.getElementById('notification').style.display = 'none';
			}, 5000); // Adjust the time in milliseconds (e.g., 3000 for 3 seconds)
			</script>
			@endif
                <h1>Thank You!</h1>
                <p>Your registration is complete.</p>
                <p>Please check your email, We have sent verification link to activate your account.</p>
                <a href="{{ url('/login') }}">Go to Login</a>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
