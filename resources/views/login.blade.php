<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

/* HEADER */
.header {
    position: fixed;
    top: 0;
    width: 100%;
    height: 60px;
    background: #d32f2f;
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    font-weight: bold;
    z-index: 10;
}

/* BACKGROUND */
body {
    height: 100vh;
    background: url('/images/bgtus.png') no-repeat center center;
    background-size: cover;
}

/* OVERLAY */
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(255,255,255,0.25);
    backdrop-filter: blur(0px);
}

/* LOGIN CARD */
.card {
    position: absolute;
    top: 50%;
    left: 120px;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.9);
    padding: 30px;
    border-radius: 20px;
    width: 320px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

/* TEXT */
.card h2 {
    margin-bottom: 10px;
}

.card p {
    font-size: 12px;
    margin-bottom: 20px;
    color: gray;
}

/* INPUT */
.input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-bottom: 1px solid #999;
    background: transparent;
    outline: none;
}

/* BUTTON */
.btn {
    width: 100%;
    padding: 12px;
    background: #d32f2f;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

/* TOGGLE */
.toggle {
    display: flex;
    align-items: center;
    gap: 10px;
}

.switch {
    width: 40px;
    height: 20px;
    background: black;
    border-radius: 20px;
    position: relative;
}

.switch::after {
    content: '';
    width: 16px;
    height: 16px;
    background: white;
    position: absolute;
    top: 2px;
    left: 2px;
    border-radius: 50%;
}

/* PASSWORD ICON */
.eye {
    position: absolute;
    right: 10px;
    top: 10px;
    cursor: pointer;
}
</style>
</head>

<body>

<!-- HEADER -->
<div class="header">
    <div style="display:flex; align-items:center; gap:10px;">
        <img src="/images/logotus.png" style="width:35px;">
        <span>PEMINJAMAN RUANGAN SEKRET BERSAMA</span>
    </div>

    <div class="toggle">
        aksesibilitas
        <div class="switch"></div>
    </div>
</div>

<!-- OVERLAY -->
<div class="overlay"></div>

<!-- LOGIN CARD -->
<div class="card">
    <h2>LOGIN</h2>
    <p>ENTER WITH YOUR ACCOUNT SSO</p>

    <form method="POST" action="/login">
        @csrf

        <input class="input" name="username" placeholder="USERNAME SSO">

        <div style="position:relative;">
            <input id="password" class="input" type="password" name="password" placeholder="PASSWORD">
            <span class="eye" onclick="togglePassword()">👁️</span>
        </div>

        <button class="btn">Log In</button>
    </form>
</div>

<script>
function togglePassword() {
    var input = document.getElementById("password");

    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
}
</script>

</body>
</html>