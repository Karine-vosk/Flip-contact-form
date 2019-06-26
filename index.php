<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flip msg</title>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="css/flip.css">

</head>
<body>
<div class="section">

    <div class="contain-contact">
        <div class="front-card">


            <span class="btn-msg turn">send message</span>

        </div>
        <div class="back-card">
            <form class="form-msg" method="get" name="form">
                <label for="name" class="lab">name </label>
                <input class="inp err-inp inp_js" type="text" name="name" />
                <i class="fas fa-exclamation"></i>

                <label for="surname" class="lab">surname </label>
                <input class="inp err-inp inp_js" type="text" name="surname">
                <i class="fas fa-exclamation"></i>

                <label for="company">company </label>
                <input class="inp err-inp inp_js" type="text" name="company">
                <i class="fas fa-exclamation"></i>

                <label for="email" class="lab">email </label>
                <input class="inp inp-email err-inp" type="email" name="email"  pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required="required">
                <i class="fas fa-exclamation"></i>

                <label for="message" id="last-label" class="lab">send message </label>
                <textarea name="message" id="msg" class="err-inp inp_js"cols="10" rows="6"></textarea>
                <i class="fas fa-exclamation last"></i>

                <input class="btn-subm turn" name="submit" type="submit"  value="send mail">
            </form>
        </div>

    </div>

</div>
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/flip.js"></script>
</body>
</html>