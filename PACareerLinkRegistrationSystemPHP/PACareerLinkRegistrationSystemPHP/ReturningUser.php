
<!DOCTYPE html>
<html>
<head>
    <title> Returning User Page</title>
    <meta charset="utf-8" />

    <link href="StyleSheet.css" rel="stylesheet" />
    
</head>
        <body>

            <h1>Welcome to the PA CareerLink Center!</h1>

            <form method="post">
                <p>Have you been here before?</p>
                
                <p>Yes<input type="radio" value="yes" name="g" /></p>
                <p>No<input type="radio" value="no" name="g"/></p> 
                
                <input id="Submit1" type="submit" value="submit"  />   

            </form>

        </body>

</html>

<?php


        if($_POST['g']=='yes'){
            $yredirect='ModifyPrompt.php';
            header('Location: ' .$yredirect);
        }
        elseif($_POST['g']=='no'){
            $nredirect ="RegistrationForm.php";
            header('Location: ' .$nredirect);

        }
            
        die();
        



?>