<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        
   
       <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>static/css/style.css">
        
        
    </head>
    <body>
        <div>
            <h1>~lets socialise~</h1> 
        </div>
              
        <form id="login-form" method="POST" action="<?php echo base_url()?>/index.php/login/submit"
            <div class="login-wrap">
                <div class="login-html">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                    <div class="login-form">
                        <div class="sign-in-htm">
                            <div class="group">
                                    <label for="pass" class="label">email</label>
                                    <input type="text" name="email"/>

                            </div>
                            <div class="group">
                                    <label for="pass" class="label">password</label>
                                    <input type="password" name="password"/>
                            </div>
                            <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                            </div>
                            <div class="group">
                                    <input id="login-button" type="submit" class="button" value="Sign In">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                    <a href="#forgot">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="sign-up-htm">
                            <div class="group">
                                    <label for="user" class="label">Username</label>
                                    <input id="user" type="text" class="input">
                            </div>
                            <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                    <label for="pass" class="label">Repeat Password</label>
                                    <input id="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                    <label for="pass" class="label">Email Address</label>
                                    <input id="pass" type="text" class="input">
                            </div>
                            <div class="group">
                                    <input type="submit" class="button" value="Sign Up">
                            </div>
                            <div class="hr"></div>
                            <div class="foot-lnk">
                                    <label for="tab-1">Already Member?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script type="text/javascript" src="<?php echo base_url(); ?>/static/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/static/js/login.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/static/js/jquery.validate.min.js"></script>
        
        <script>
            var login_submit_url = "<?php echo base_url() ?>index.php/login/submit";
        </script>
    </body>     
</html>
