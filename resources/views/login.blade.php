<h1>Login Page</h1>
<form action="data" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter your name" /> <br><br>
    <input type="password" name="password" placeholder="enter your password" /> <br><br>
    <h3>LOGIN</h3>
    <button type="submit">Login</button>

</form>
