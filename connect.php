<?

$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];

if ($inputuser == "Sam" && $inputpass == "123"){

    echo "Welcome";
    
    header('Location: Home.php');
    
    
    } else {
    
    echo "Not welcome";
    
    header('Location: Fail.php');
    }


?>


