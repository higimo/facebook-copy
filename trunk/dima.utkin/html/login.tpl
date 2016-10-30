<form method="get" action="login.php" id="registerForm">
  <h1>Log IN</h1>
  <h2>Hello, {%username%}<!-- анонимусы пока что --></h2>
  <div class="warning" id="message">{%message%}</div>
  <hr>
  {%loginForm%}
  {%unsee%}
</form>