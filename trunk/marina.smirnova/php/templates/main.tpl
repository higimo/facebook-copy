<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/css/formPhp.css"/>
    <script type="text/javascript" language="javascript" src="/js/script.js"></script>
    <title>{$title}</title>
  </head>
  <body>
    <div class="line">
      <div class="small-line">
        <ul id="menu">
          <li id="dropDownMenu"><a class="menu" href="#">Menu</a>
            <ul id="drop" class="case">
              {foreach from = $topMenu key=link item=name}
                <li><a class="menu" href={$link}>{$name}</a></li>
              {/foreach}
            </ul>
          </li>          
        </ul>
        <span class="mail">{$mail}</span>  
      </div>
    </div>
    <div class="form">
      {$content}
    </div>
  </body>
</html>