<div class="form">
  <br>
  <br>
  <div class="title1">
    <span><b>List of files.</b></span><br>
    <span class="title2">Here you can see the list of the loaded files.</span><br>
  </div>
  <hr>
  <form action="/php/list_of_files.php" method="POST">
    <table>
      <tbody>
        <tr>
          <td class="label">User Email:</td>
          <td>
            <div class="conteiner">
              <input type="text" name="email">
            </div>
          </td>
        </tr>
        <tr>
          <td class="label">File Extension:</td>
          <td>
            <div class="conteiner">
              <input type="text" name="file_extension"><br>
            </div>
          </td>
        </tr>
        <tr>
          <td class="label"></td>
          <td>
            <div class="conteiner">
              <input class="save" type="submit" value="Filter">
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <hr>
  <br>
  {%LIST%}
  <br>
  <hr>
</div>