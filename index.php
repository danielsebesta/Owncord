<title>Discord.txt</title>
<?php error_reporting(0); ?>


<form method="POST">
    <input type="text" name="prezdivka" placeholder="Jméno:" value="<?php echo $_COOKIE['prezdivka']; ?>"><br>
    <textarea cols="100" rows="10" placeholder="Příspěvek:" name="text" required></textarea><br>
    <button type="submit" value="Odeslat" name="submit">Odeslat</button>
</form>
<?php
$cas = Time();
$file = "discord.txt";
if(empty(trim($_POST['text']))){
        $text = "Zadejte prosím nějaký text.";
    } else{
        $text_error = trim($_POST['text']);
    }
if (empty($kontrola))
if (isset($_POST['submit']))
{
    $username = $_POST['prezdivka'];
     setcookie('prezdivka', $username, time() + (86400 * 30 * 999), "/"); 

        $fo = fopen($file, "a");
        if (fwrite($fo, '
        <br>
   <strong>Přezdívka:</strong> ' 
        . htmlspecialchars($_POST['prezdivka']) . '<br>
        <strong>Napsal: </strong>' 
        . $text = htmlspecialchars($_POST['text']) . '
        ')); 
      
        fclose($fo);
}

?>

<?php readfile('discord.txt'); ?>
