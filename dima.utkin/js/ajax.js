function getXmlHttp()
{
    var xmlhttp;
    try 
    {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } 
    catch (e) 
    {
        try 
        {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } 
        catch (E) 
        {
            xmlhttp = false;
        }
    }
    
    if ( ! xmlhttp && typeof XMLHttpRequest!='undefined') 
    {

        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}

var onVoteClick = function ()
{
    var req = getXmlHttp();
    var message = document.getElementById("checkPass");
    var pass = document.getElementById("regPass");
    
    if(!req)
    {
        return;
    }

    req.open('GET', 'ajax_vote.php?pass=' + pass.value, true);
    
    req.onreadystatechange = function ()
    {
        if ( ( req.readyState == 4 ) || ( req.status == 200 ) )
        {
            if ( ( req.responseText == "1" ) || ( req.responseText == "0" ) )
            {
                message.innerHTML = "weak";
                message.setAttribute( 'class', 'redtext' );
            }
            else if ( req.responseText == "2" )
            {
                message.innerHTML = "good";
                message.setAttribute( 'class', 'yellowtext' );
            }
            else if ( req.responseText == "3" )
            {
                message.innerHTML = "strong";
                message.setAttribute( 'class', 'greentext' );
            }
        }
    }
    
    req.send();
}