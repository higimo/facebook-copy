<div class="form_list">
  <br>
  <br>
  <div class="title1">
    <span><b>Users list.</b></span>
    <br>
    <span class="title2">Here you can see the list of users.</span>
    <br>
  </div>
  <hr>
  <div class="name_and_date">
    <div class="block_data">
      <b><span>EMAIL</span></b>
    </div>
    <div class="block_data">
      <b><span>FIRST NAME</span></b>
    </div>
    <div class="block_data">
      <b><span>LAST NAME</span></b>
    </div>
  </div>
  <br>
  {%LIST%}
  <br>
  <div class="up_dn">
    <ul>
      <li class="block_control">
        <a href="/php/users_list.php?num_list={%BACK%}" class="block_control_a"><span class="block_control_a_center"><b>Back</b></span></a>
      </li>
      <li class="block_control_right">
        <a href="/php/users_list.php?num_list={%NEXT%}" class="block_control_a"><span class="block_control_a_center"><b>Next</b></span></a>
      </li>
    </ul>
  </div>
  <hr>
</div>