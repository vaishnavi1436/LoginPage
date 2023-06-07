<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">  
        <title>Login Page</title>
        <script type="text/javascript" src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="blogwebsite.css">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    </head>
    <body>
       <section class="showcase">
        <header>
            <div class="logo">
                <a href="blogwebsite.html"><p>TravelBlog</p></a>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Login/Sign-up</a></li>
                </ul>
            </nav>
        </header>
        <video src="../Travel/images/water-38461.mp4" muted loop autoplay></video>
        <div class="overlay">
            <div class="text">
                <div id='login-form'class='login-page'>
                    <div class="form-box">
                        <div class='button-box'>
                            <div id='btn'></div>
                            <button type='button'onclick='login()' class='toggle-btn' style="color: white;">Log In</button>
                            <button type='button'onclick='register()'class='toggle-btn' style="color: white;">Register</button>
                        </div>
                        <form id='login' class='input-group-login' action="Home.php" method="POST">
                            <input type='text'class='input-field'placeholder='Email Id' required style="color: white;" name="em">
                            <input type='password'class='input-field'placeholder='Enter Password' required name="ps">
                            <input type='checkbox'class='check-box'><span>Remember Password</span>
                            <button type='submit'class='submit-btn' name="login">Log in</button>
                        </form>
                        <form id='register' class='input-group-register' action="login.php" method="post">
                            <input type='text'class='input-field'placeholder='First Name' required name="fname" id="fname">
                            <input type='text'class='input-field'placeholder='Last Name ' required name="lname" id="lname">
                            <input type='email'class='input-field'placeholder='Email Id' required name="email" id="email">
                            <input type='password'class='input-field'placeholder='Enter Password' required name="pass" id="pass">
                            <input type='password'class='input-field'placeholder='Confirm Password'  required name="cpass" id="cpass">
                            <input type='checkbox'class='check-box'><span>I agree to the terms and                                                   conditions</span>
                            <button type='submit'class='submit-btn' onclick="Reg()" name="reg" id="reg">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       </section>
         <script>
        var x=document.getElementById('login');
		var y=document.getElementById('register');
		var z=document.getElementById('btn');
		function register()
		{
			x.style.left='-400px';
			y.style.left='50px';
			z.style.left='110px';
		}
		function login()
		{
			x.style.left='50px';
			y.style.left='450px';
			z.style.left='0px';

		}
	</script>
	<script>
        var modal = document.getElementById('login-form');
        window.onclick = function(event) 
        {
            if (event.target == modal) 
            {
                modal.style.display = "none";
            }
        }
    </script>
    <script>
        var fname = getElementById('fname');
        var lname = getElementById('lname');
        var email = getElementById('email');
        var pass = getElementById('pass');
        var cpass = getElementById('cpass');
    </script>
    </body>
</html>
<?php
    include 'connection.php';
    if(isset($_POST['reg']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $sql = "INSERT INTO user ('$fname','$lname','$email','$pass')";
        $row = mysqli_fetch_array($sql);
        if(is_array($row))
        {
            $_SESSION['username'] = $row['Fame'];
            ?>
            <script>
                header("Location:index.php");
            </script>
            <?php
        }
    }
    
    
?>