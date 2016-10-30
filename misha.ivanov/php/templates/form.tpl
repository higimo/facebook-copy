<div class="form">
  <br>
  <br>
  <form action="/php/sign_in_form.php" method="POST" id="form">
    <div class="title1">
      <span><b>Sing Up</b></span>
      <br>
      <span class="title2">It's free and always will be.</span>
    </div>
    <hr>
    <table>
      <tbody>
        <tr>
          <td class="label">
            <label for="first_name">First Name:</label>
          </td>
          <td>
            <div class="conteiner">
              <input type="text" name ="first_name" id="first_name">
            </div>
          </td>
        </tr>
        <tr>
          <td class="label">
            <label for="last_name">Last Name:</label>
          </td>
          <td>
            <div class="conteiner">
              <input type="text" name ="last_name" id="last_name">
            </div>
          </td>
        </tr>        
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
            <label for="re-email">Re-enter Email:</label>
          </td>
          <td>
            <div class="conteiner">
              <input type="text" name="re-email" id="re-email">
            </div>
          </td>
        </tr>        
        <tr>
          <td class="label">
            <label for="password">New Password:</label>
          </td>
          <td>
            <div class="conteiner">
              <input type="password" name="password" id="password">
            </div>
          </td>
          <td>
            <span id="level_pass">Q</span>
          </td>
        </tr>        
        <tr>
          <td class="label">I am:</td>
          <td>
            <div class="conteiner">
              <select name="sex" id="sex">
                <option value="-1">Select Sex:&nbsp;</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
          </td>
        </tr>        
        <tr>
          <td class="label">Birthday:</td>
          <td>
            <div class="conteiner">
              <select name="birthday_month" id="birthday_month">
                <option value="-1">Month:</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
              <select name="birthday_day" id="birthday_day">
                <option value="-1">Day:&nbsp;</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
              <select name="birthday_year" id="birthday_year">
                <option value="-1">Year:&nbsp;</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
              </select>
            </div>
          </td>
        </tr>        
        <tr>
          <td class="label">
          </td>
          <td>
            <div class="conteiner">
              <span class="question">Why do I need to provide this?</span>
              <br>
              <span class="response">{%COMMENT%}</span>
              <br>
              <input class="save" type="submit" value="Sing Up">
            </div>
          </td>
        </tr>      
      </tbody>
    </table>
    <br>
    <br>
    <hr>
  </form>
</div>