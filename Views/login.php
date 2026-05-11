<?php require "header.php"; ?>

<h2 class="centered">kirjaudu<h2>

<div class="container" name="loginContainer">
<form  action="/login" method="post">
    <label for="uname">Käyttäjänimi:</label>
    <input id="uname" type="text" name="username" maxlength=30>
    <label for="pwprd">Salasana:</label>
    <input id="pword" type="password" name="password" maxlength=30>
    <input id="sendbutton" type="submit" value="Kirjaudu">
</form>
</div>

<?php require "footer.php"; ?>