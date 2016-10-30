<form method="get" action="index.php" id="registerForm">
  <h1>Sign UР</h1>
  <h2>It`s free and always will be.</h2>
  <hr>
  <div class="filed">First Name: <input name="first" type="text" id="firstname"> </div>
  <div class="filed">Last Name: <input name="last" type="text" id="lastname"> </div>
  <div class="filed">Your E-mail: <input name="mail" type="text" id="mail"> </div>
  <div class="filed">Re-enter E-mail: <input name="remail" type="text" id="remail"> </div>
  <div class="filed">New Passworld:  <input name="passworld" type="password" id="regPass"> <div id="checkPass"></div> </div>
  <div class="fieldselect">I am: 
    <select name="sex" id="sex">
      <option value="none">Select Sex:</option>
      <option value="man">Man</option>
      <option value="woman">Woman</option>
    </select>
  </div>
  <div class="fildselect">
    Birthday:
    <select name="month" id="month">
      <option value="0">Month:</option>
      <option value="01">1</option>
      <option value="02">2</option>
      <option value="03">3</option>
      <option value="04">4</option>
      <option value="05">5</option>
      <option value="06">6</option>
      <option value="07">7</option>
      <option value="08">8</option>
      <option value="09">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
    <select name="day" id="day">
      <option value="0">Day:</option>
      <option value="01">1</option>
      <option value="02">2</option>
      <option value="03">3</option>
      <option value="04">4</option>
      <option value="05">5</option>
      <option value="06">6</option>
      <option value="07">7</option>
      <option value="08">8</option>
      <option value="09">9</option>
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
    </select>
    <select name="year" id="year">
      <option value="0">Year:</option>
      <option value="1968">1968</option>
      <option value="1969">1969</option>
      <option value="1970">1970</option>
      <option value="1971">1971</option>
      <option value="1972">1972</option>
      <option value="1973">1973</option>
      <option value="1974">1974</option>
      <option value="1975">1975</option>
      <option value="1976">1976</option>
      <option value="1977">1977</option>
      <option value="1978">1978</option>
      <option value="1979">1979</option>
      <option value="1980">1980</option>
      <option value="1981">1981</option>
      <option value="1982">1982</option>
      <option value="1983">1983</option>
      <option value="1984">1984</option>
      <option value="1985">1985</option>
      <option value="1986">1986</option>
      <option value="1987">1987</option>
      <option value="1988">1988</option>
      <option value="1989">1989</option>
      <option value="1990">1990</option>
      <option value="1991">1991</option>
      <option value="1992">1992</option>
      <option value="1993">1993</option>
      <option value="1994">1994</option>
      <option value="1995">1995</option>
      <option value="1996">1996</option>
    </select><!--end select year-->
  </div><!--End .fildselect-->
  <div class="inf">
    <a href="http://microsoft.com/" title="Привет, Чувак, я отправлю тебя на сайт мелкомягких, чувствуй себя как в туалете"> 
      <span class="micro">Why do I never to provide this? </span>
    </a><br>
    <button>Save</button>
    <div class="warning" id="message">{%message%}</div>
  </div><!-- End .inf-->
</form>