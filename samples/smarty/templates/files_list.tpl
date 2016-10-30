<ul>
  {foreach from=$files item=file}
    <li><a href="{$file.path}">{$file.name}</a></li>
  {/foreach}
</ul>
