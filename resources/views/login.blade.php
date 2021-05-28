<title>74You - Connexion</title>
<div class="row header" style="text-align:center;color:white;font-weight:bold;text-decoration:underline solid;font-size:50px;font-family: FreeSans,serif">
    <h1>74YOU</h1>
</div>
<style>
    body {
        background: linear-gradient(to right, #FF7F50 , #FF7F50);
        min-height: 100vh;
        margin: 0;
        padding: 0;
        height: 100vh;
        font-family: sans-serif;
        overflow: hidden
    }

    #particles-js {
        height: 100%
    }

    .loginBox {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        min-height: 200px;
        background: #ffffff;
        border-radius: 10px;
        padding: 40px;
        box-sizing: border-box
    }

    .user {
        display: block;
        margin: 0 auto 20px;
    }

    h3 {
        margin: 0;
        padding: 0 0 20px;
        color: #000000;
        text-align: center
    }

    .loginBox input {
        width: 100%;
        margin-bottom: 20px
    }

    .loginBox input[type="text"],
    .loginBox input[type="password"] {
        border: none;
        border-bottom: 2px solid #262626;
        outline: none;
        height: 40px;
        color: #000000;
        background: transparent;
        font-size: 16px;
        padding-left: 20px;
        box-sizing: border-box
    }

    .loginBox input[type="text"]:hover,
    .loginBox input[type="password"]:hover {
        color: #000000;
        border: 1px solid #442D5D;
        box-shadow: 0 0 5px rgb(68, 45, 93 ), 0 0 10px rgb(68, 45, 93 ), 0 0 15px rgb(68, 45, 93 ), 0 2px 0 black
    }

    .loginBox input[type="text"]:focus,
    .loginBox input[type="password"]:focus {
        border-bottom: 2px solid #442D5D
    }

    .inputBox {
        position: relative
    }

    .inputBox span {
        position: absolute;
        top: 10px;
        color: #262626
    }

    .loginBox input[type="submit"] {
        border: none;
        outline: none;
        height: 40px;
        font-size: 16px;
        background: #000000;
        color: #ffffff;
        border-radius: 20px;
        cursor: pointer
    }

    .loginBox a {
        color: #262626;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        display: block
    }

    a:hover {
        color: #442D5D
    }

    p {
        color: #442D5D
    }
</style>





<form action="{{ route('login.api') }}" method="post" class="section">
    @csrf
    <div class="loginBox">
        <h3>Connexion</h3>
        <div class="inputBox">
            <input id="uname" type="text" name="email" placeholder="Email">
            <input id="pass" type="password" name="password" placeholder="Mot de passe">
        </div>
        <input type="submit" value="Connexion">
        <a href="/losePassword">Mot de passe oublié ?<br> </a>
    </div>
</form>
