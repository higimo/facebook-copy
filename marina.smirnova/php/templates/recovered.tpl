<form action="/php/survey_blank.php" method="get">
  <div class="sign-up">
    <b>Data</b>
  </div>
  <div><hr class="line" size="1"/></div>
  <div class="input">
    <span>First Name:</span>
    <input class="input-roll" type="text" value="{$first_name}" readonly="readonly" />
  </div>
  <div class="input">
    <span>Last Name:</span>
    <input class="input-roll" type="text" value="{$last_name}" readonly="readonly" />
  </div>
  <div class="input">
    <span>Your Email:</span>
    <input class="input-roll" type="text" value="{$email}" readonly="readonly" />
  </div>
  <div class="input">
    <span>Re-enter Email:</span>
    <input class="input-roll" type="text" value="{$reenter_email}" readonly="readonly" />
  </div>
  <div class="input">
    <span>New Password:</span>
    <input class="input-roll" type="text" value="{$new_password}" readonly="readonly" />
  </div>
  <div class="input">
    <span>I am:</span>
    <input class="input-roll" type="text" value="{$sex}" readonly="readonly" />
  </div>
  <div class="input">
    <span>Birthday:</span>
    <input class="input-roll" type="text" name="birthday" value="{$birthday}" readonly="readonly" />
  </div> 
  <div><hr class="line" size="1"/></div>
</form>
