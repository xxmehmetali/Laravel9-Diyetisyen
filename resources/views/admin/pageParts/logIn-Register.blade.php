<div class="login-wrap">
    <h2>Login</h2>

    <form class="form" action="/admin" method="post">
        @csrf
        <input type="text" placeholder="Username" name="email" />
        <input type="password" placeholder="Password" name="password" />
        <input type="submit" value="Gönder">
        <a href="#"> <p> Don't have an account? Register </p></a>
    </form>
</div>
