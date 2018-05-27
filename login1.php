<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        <div>
            <h1>~lets socialise~</h1>
            <p>please read the instruction before login</p> 
            

        </div>
        <div class="form">        
            <form method="POST" action="login_submit.php">
                email
                <input type="text" name="email"/>
                <br/>
                password
                <input type="password" name="password"/>
                <br/>
                <input type="submit" value="Login"/>
                <p class="message">Not registered? <a href="css/style.css">create an account</a></p>
            </form>
        </div>
    </body>  
</html>
