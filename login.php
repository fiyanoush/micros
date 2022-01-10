<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet"  type="text/css"  href="./login.css">
    <background-color="green"></background-color>
    
</head>
<style>
    * {
    padding: 0;
    margin: 0;
    font-family: sans-serif;
}

body {
    background: url('./veg1.jpg') no-repeat;
    background-size: cover;
    background-color: black;
}

.login-form {
    width: 350px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    position: absolute;
    color: #fhgfh;
}

.login-form h1 {
    font-size: 40px;
    text-align:left;
    text-transform: uppercase;
    margin: 40px 0;
    color: aqua;
    font-family: 'Times New Roman', Times, serif;
}

.login-form p {
    font-size: 20px;
    margin: 15px,0;
    color: white;
}

.login-form input {
    font-size: 16px;
    width: 100%;
    padding: 15px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
}

.login-form button {
    font-size: 16px;
    font-weight: bold;
    margin: 20px 0;
    padding: 10px 15px;
    width: 50%;
    border-radius: 5px;
    border: 0;
    text-align: center;
    align-items: center;
    color:red;
}

</style>
<body>
    <div id="frm">
    <div class="login-form">
        <h1>Login Form</h1>
        <form action="home1.html" method="POST" name="log" onsubmit="return validate()">
            <p>User name</p>
            <br>
            <input type="text" name="user" placeholder="Username">
            <div id="user_error">Please fill up user username</div>
            <br><br>
            <p>Password</p>
            <br>
            <input type="password" name="password" placeholder="Password"> 
            <div id="password_error">Please fill up user Password</div>
            <br>
            <br> 
            <button type="submit">Login</button>
            </form>
            <a href="home1.html"></a>
    </div>
    <script>  
        function validation()  
        {  
            var id=document.log.user.value;  
            var ps=document.log.password.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("User Name is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  
    </script>  
</body>
</html>