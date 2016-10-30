<form action="#" method="get">
  <div class="sign-up">
    <b>Sign Up</b>
  </div>
  <div class="free">
    It's free and always will be.
  </div>
  <div>
    <hr class="line" size="1"/>
  </div>
  <div class="titlle">
    <span class="titlle">First Name:</span>
    <input class="input-roll" type="text" name="first_name" value="" id="firstName"/>
  </div>
  <div class="titlle">
    <span>Last Name:</span>
    <input class="input-roll" type="text" name="last_name" value="" id="lastName"/>
  </div>
  <div class="titlle">
    <span>Your Email:</span>
    <input class="input-roll" type="text" name="your_email" value="" id="email"/>
  </div>
  <div class="titlle">
    <span>Re-enter Email:</span>
    <input class="input-roll" type="text" name="reenter_email" value="" id="reemail"/>
  </div>
  <div class="titlle">
    <span>New Password:</span>
    <input class="input-roll" type="password" name="new_password" value="" id="password"/>
    <div class="checkPass" id="checkPass"></div>
  </div>
  <div class="i">
    <span>I am:</span>
    <select class="sex" name="sex" id="sex">
      <option>Select sex:</option>
      <option>male</option>
      <option>female</option>
    </select>
  </div>
  <div class="birthday">
    <span>Birthday:</span>
    <select class="month" name="month" id="month">
      {$month}
    </select>
    <select class="day" name="day" id="day">
      {$day}
    </select>
    <select class="year" name="year" id="year">
      {$year}
    </select>
  </div>
  <div class="provide">
    <a class="provide" href="http://google.ru" target="_blank" title="Official site of GOOGLE">
      Why do I need to provide this?
    </a>
  </div>
  <div class="sign-up2">
    <input class="my-button" type="submit" value="Sign Up"/>
  </div>
  <div><hr class="line" size="1"/></div>
</form>
