<div class="form">
  <br>
  <br>
  <div class="title1">
    <span><b>Upload files</b></span><br>
    <span class="title2">Here you can send your file on the server.</span><br>
  </div>
  <hr>
  <br>
  <form class="form_upload" enctype="multipart/form-data" action="/php/save_file.php" method="POST">
    <table>
      <tbody>
        <tr>
          <td class="label">
          </td>
          <td>
            <div class="conteiner">
              <label>Choose a file to upload</label>
              <br>
              <input name="get_file" type="file">
              <br>
              <span class="response">{%COMMENT%}</span>
              <br>
              <input class="save" type="submit" value="Upload">
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </form>
  <br>
  <br>
  <br>
  <br>
  <hr>
</div>
