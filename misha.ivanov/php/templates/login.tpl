<div class="form">
  <br>
  <br>
  <form action="/php/check_login.php" method="POST" id="form">
    <div class="title1">
      <span><b>Login</b></span>
      <br>
      <span class="title2">From here you can get access to other pages.</span>
    </div>
    <hr>
    <table>
      <tbody>
        <tr>
          <td class="label">
            <label for="email">Your Email:</label>
          </td>
          <td>
            <div class="conteiner">
              <input type="text" name="email" id="email">
            </div>
          </td>
        </tr>
        <tr>
          <td class="label">
            <label for="password">Password:</label>
          </td>
          <td>
            <div class="conteiner">
              <input type="password" name="password" id="password">
            </div>
          </td>
        </tr>
        <tr>
          <td class="label"></td>
          <td>
            <div class="conteiner">
              <span class="response">{%COMMENT%}</span>
              <br>
              <input class="save" type="submit" value="Log In">
            </div>
          </td>
        </tr>
      </tbody>
    </table>
    <br>
    <hr>
  </form>
</div>