<?php
$section = "contact";
$base = "../";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($base."includes/head.php");?>
</head>
<body>

    <?php include($base."includes/nav.php");?>
    
    <main class="contact">
        <h1><?=$section?></h1>
        <h2>U kan ons contacteren op volgende mailadressen.</h2>
        <div class="mail">
            <div id="m">
                <h2>Meisjes</h2>
                <p>Groepsleiding: <a href="mailto:groepsmeisjes@chirokontaktboom.be">groepsmeisjes@chirokontaktboom.be</a></p>
                <p>leiding: <a href="mailto:meisjes@chirokontaktboom.be">meisjes@chirokontaktboom.be</a></p>
                <p>VB: <a href="mailto:vbmeisjes@chirokontaktboom.be">vbmeisjes@chirokontaktboom.be</a></p>
            </div>
            <div id="j">
                <h2>Jongens</h2>
                <p>Groepsleiding: <a href="mailto:groepsjongens@chirokontaktboom.be">groepsjongens@chirokontaktboom.be</a></p>
                <p>leiding: <a href="mailto:jongens@chirokontaktboom.be">jongens@chirokontaktboom.be</a></p>
                <p>VB: <a href="mailto:vbjongens@chirokontaktboom.be">vbjongens@chirokontaktboom.be</a></p>
            </div>
            <div id="g">
                <h2>Gemengd</h2>
                <p>Groepsleiding: <a href="mailto:groepsleiding@chirokontaktboom.be">groepsleiding@chirokontaktboom.be</a></p>
                <p>leiding: <a href="mailto:leiding@chirokontaktboom.be">leiding@chirokontaktboom.be</a></p>
            </div>
        </div>
        <h2>Of via onderstaande form</h2>
        <form action="">
            <label for="name">Uw naam <span>*</span></label><br>
            <input type="text" name="name" id="name"><br>
            <label for="mail">Uw e-mailadres <span>*</span></label><br>
            <input type="email" name="mail" id="mail"><br>
            <label for="subject">Onderwerp <span>*</span></label><br>
            <input type="text" name="subject" id="subject"><br>
            <label for="message">Bericht <span>*</span></label><br>
            <textarea name="message" id="message" cols="30" rows="10" resizable="false"></textarea><br>
            <input type="submit" id="submit" value="verzenden">
        </form>
    </main>

    <?php include($base."includes/footer.php")?>

</body>
</html>