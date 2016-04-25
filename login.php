<?php  
session_start();  
$password="AppStreaming";    /* Password */
if (isset($_SESSION['login'])) { 
$ricorda = $_POST['Ricorda'];
setcookie("Cookie", $value, time()+31536000);  
   
   if(!isset($_COOKIE['login']))
{
}
else
{
 $_SESSION['login'] = $_COOKIE['login'];
 //Rimandi alla pagina successiva al login
 header("location: protetta.php");
 exit();
}
    if (isset($_POST['logout'])) { 
        unset($_SESSION['login']); 
        $messaggio = "Logout effettuato con successo! Arrivederci!";
    } else { 
        header("Location: protetta.php"); 
    }  
} else { 
    if (isset($_POST['password'])) { 
        if ($_POST['password'] == $password) {
            $_SESSION['login'] = "verificata";
            header("Location: protetta.php");
        } else { 
            $messaggio = "Errore: Password non corretta!";
        } 
    }  
} 
?> 

<!DOCTYPE html>
<html>
<head>
<script language="JavaScript" type="text/javascript" src="_cookielaw_mip.js"></script>
<meta name="viewport" content="user.scalable=no, width=device-width" />
</head>
<body bgcolor="#F5F5F5" background="images/.gif">
<div style="width: device-width;">
<div align="center"><span style="font-size: 36pt;"><strong><img style="display: block; margin-left: auto; margin-right: auto; float: left;" src="http://superfabiohackered.altervista.org/IconaApp.png" alt="" width="80" height="80" /></strong></span></div>
<h2>Benvenuto nell'App per lo Streaming di tutti i canali TV!</h2>
<h4>Leggere le Istruzioni d'Uso prima di accedere. (<a href="http://superfabiohackered.altervista.org/ISTRUZIONI.html">ISTRUZIONI</a>)</h4>
<form action="login.php" method="post" name="login"><input name="password" type="password" value="" /> &nbsp; <input type="submit" value="Entra" /> <!--?php  
if(isset($messaggio)) { 
    echo $messaggio; 
    unset($messaggio); 
}  
?-->
</form><span class="Stile1"> <label> <input name="Ricorda" type="checkbox" value="checkbox" /> </label> Ricorda </span>
<h4>Per ricevere la password invia un'email con la ricevuta del pagamento a: <a href="mailto:sfhapp@gmail.com">sfhapp@gmail.com</a></h4>
</div>
</body> 
</html>