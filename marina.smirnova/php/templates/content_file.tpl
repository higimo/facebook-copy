<tr>
  <td>
    {$value}
  </td>
  <td>
    {$email}
  </td>
  <td>
    {$file_name}
  </td>
  <td>
    {$extension}
  </td>
  <td class="rating">
    <input class="one" type="submit" onclick="rating( -1, {$id_file} )" value="-1" id="minusOne"/>
    <span id={$id_file}>{$rating}</span>
    <input class="one" type="submit" onclick="rating( 1, {$id_file} )" value="+1" id="plusOne"/>
  </td>
</tr>
