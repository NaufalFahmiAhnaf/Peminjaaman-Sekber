<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    background:#d32f2f;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    font-family:Arial;
}

.card {
    background:white;
    padding:20px;
    border-radius:20px;
    width:300px;
}

.input {
    width:100%;
    padding:10px;
    margin-bottom:10px;
    border-radius:10px;
    border:1px solid #ccc;
}

.btn {
    width:100%;
    padding:12px;
    background:#d32f2f;
    color:white;
    border:none;
    border-radius:10px;
}
</style>
</head>

<body>

<div class="card">
    <h3 style="text-align:center;">LOGIN</h3>

    <form method="POST" action="/login">
        @csrf
        <input class="input" name="username" placeholder="Username">
        <input class="input" type="password" name="password" placeholder="Password">

        <button class="btn">Masuk</button>
    </form>
</div>

</body>
</html>