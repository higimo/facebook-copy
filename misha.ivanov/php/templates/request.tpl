<div class="form">
  <br>
  <br>
  <form action="/php/get_user_info_date.php" method="GET">
    <div class="form">
      <div class="title1">
        <span><b>Request</b></span><br>
        <span class="title2">Here you can find data of the user.</span><br>
      </div>
      <hr>
      <table>
        <tr>
          <td class="label">Email of the user:<td>
            <div class="conteiner">
              <input type="text" name="email">
            </div>
          </td>
        </tr>
        <tr>
          <td class="label"><td>
            <div class="conteiner">
              <span class="response">{%COMMENT%}</span>
              <br>
              <input class="save" type="submit" value="Search">
            </div>
          </td>
        </tr>
      </table>
      <br>
      <hr>
    </div>
  </form>
</div>