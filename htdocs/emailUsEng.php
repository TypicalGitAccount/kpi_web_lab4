<?php
if(isset($_POST['submit'])) {
    $message = "Thank you, " . $_POST['first_name'] . ". We will write you soon!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>My Time</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>
<div class="media">
    <a href="https://www.youtube.com/"><img src="img/youtubeImg.png" alt="youtube" class="mediaImg"></a> <br>
    <a href="https://instagram.com/"><img src="img/instagramImg.jpg" alt="inst" class="mediaImg"></a> <br>
    <a href="https://web.telegram.org/"><img src="img/telegramIng.png" alt="tel" class="mediaImg"></a> <br>
    <a href="/emailUsEng.php"><img src="img/gmail.png" alt="ask a mail" class="mediaImg"></a> <br>
    <abbr title="Копіювати телефон" onclick="copyPhone()"><img src="img/phone.png" alt="phone" class="mediaImg"></abbr>
    <script>
        function copyPhone() {
            var copyText = '+380-67-111-11-11';
            navigator.clipboard.writeText(copyText).then(() => {
                alert("Ви скопювали номер телефону");
            });
        }
    </script>
</div>
<body>
<header>
    <div class="container">
        <div class="lineHeader">
            <div class="higherHeader">
                <a href="index.html" class="languageHeader"><span class="textLanguageHeader">Language</span><img src="img/UK_flag.png" alt="flag" class="flag"></a>
            </div>
            <div class="lowHeader">
                <img src="img/Logo.png" alt="logo" class="logoImg">
                <button class="btnLowHeader firstBtn" onclick="document.location='mainEng.html'">Home</button>
                <button class="btnLowHeader" onclick="document.location='servicesEng.html'">Services</button>
                <button class="btnLowHeader lastBtn" onclick="document.location='aboutUsEng.html'">About us</button>
            </div>
        </div>
    </div>
</header>
<main>
    <form action=""  style="margin-top: 5%;" method="post">
        <div>Leave an email, we'll contact you in a minute!</div>
        Name: <input type="text" name="first_name"><br>
        Email: <input type="text" name="email"><br>
        Comment: <input type="text" name="message"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</main>

<footer>
    <div class="container">
        <div class="higherFotter">
            <h1 class="titleFooter">Ready to join?</h1>
            <hr class="lineBellowTitleFotter">
            <div class="footerAllItems">
                <div class="footerItems">
                    <img src="img/location.svg" class="footerImg">
                    <p class="footerText">Are waiting for you<br>
                        Kyiv, street, №26</p>
                </div>
                <div class="footerItems">
                    <img src="img/time.svg" class="footerImg">
                    <p class="footerText">We work from  <br>
                        8 am to 8 pm</p>
                </div>
                <div class="footerItems">
                    <img src="img/mail.svg" class="footerImg">
                    <p class="footerText">Email<br>
                        example@gmail.com</p>
                </div>
                <div class="footerItems">
                    <img src="img/phone.svg" class="footerImg">
                    <p class="footerText">Call<br>
                        +380-67-111-11-11</p>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
