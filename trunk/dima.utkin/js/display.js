function getXmlHttp()
{
    var xmlhttp = null;
    try
    {
        xmlhttp = new ActiveXObject( "Msxml2.XMLHTTP" );
    }
    catch(e)
    {
        try
        {
            xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
        }
        catch(e)
        {
            xmlhttp = false;
        }
    }
    if ( ( !xmlhttp ) || ( typeof(xmlHttp) == 'undefined' ) )
    {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttpж
}

function dropMenu()
{
    var dropli = document.getElementById('dropli');
    var dropMenu = document.getElementById('drop');
    dropli.onmouseover = function ()
    {
        dropMenu.className = "";
    }
    dropli.onmouseout = function ()
    {
        dropMenu.className = "nomenu";
    }
}