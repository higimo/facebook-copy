function getXmlHttp()
{
	var xmlhttp;
	try
	{
		xmlhttp = new ActiveXObject( "Msxm12.XMLHTTP" );
	}
	catch( e )
	{
		try
		{
			xmlhttp = new ActiveXObject( "Microsoft.XMLHTTP" );
		}
		catch( E )
		{
			xmlhttp = false;
		}
	}
	if ( !xmlhttp && typeof XMLHttpRequest != 'undefind' )
	{
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
function printLevel( setStatus )
{
	var messegeText = document.getElementById('level_pass').value;
	var color = document.getElementById('level_pass');
	switch( setStatus )
	{
	    case '1':
	    {
	    	messegeText = 'weak';
	    }
	    case '2':
	    {
	    	messegeText = 'good';
	    	color.style.color = '#ffcc00';
	    }
	    case '3':
	    {
	    	messegeText = 'strong';
	    	color.style.color = '#15ff00';
	    }
	}
}
function checkLevel()
{
	var req = getXmlHttp();
	if ( !req )
	{
		return;
	}
	req.onreadystatechange = function()
	{
		if ( req.readystate == 4 )
		{
			return;
		}
		if ( req.status == 200 )
		{
			var setStatus = req.responseText;
			printLevel( setStatus );
		}
	}
	var pass = document.getElementById( 'password' );
	var params = 'password'+encodeURLComponent( password );
	req.open( 'POST', '/php/ajax/level_password.php', true );
	req.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );
	req.send( params );
}
function checkForm()
{
    var valid = true;
    var messige = '';
    if ( document.getElementById( 'first_name' ).value == '' )
    {
    	messige = 'Not enter First name.\n';
        valid = false;
    }
    else
    {
        if ( ! ( /^[A-z]{2,30}$/.test( document.getElementById( 'first_name' ).value ) ) )
        {
            messige = messige + "Incorrect First name.\n";
            valid = false;
        }
    }
    if ( document.getElementById( 'last_name' ).value == '' )
    {
        messige = messige + 'Not enter Last name.\n';
        valid = false;
    }
    else
    {
        if ( ! ( /^[A-z]{2,30}$/.test( document.getElementById( 'last_name' ).value ) ) )
        {
            messige = messige + "Incorrect Last name.\n";
            valid = false;
        }
    }
    if ( document.getElementById( 'email' ).value == '' )
    {
        messige = messige + 'Not enter Email.\n';
        valid = false;
    }
    else
    {
        if ( ! ( /^([a-zA-Z0-9~\._-]{2,})(@{1}[a-zA-Z0-9~\._-]{2,})(\.{1}[a-zA-Z]{2,4})$/.test( document.getElementById( 'email' ).value ) ) )
        {
            messige = messige + "Incorrect Email.\n";
            valid = false;
        }
    }
    if ( document.getElementById( 're-email' ).value == '' )
    {
        messige = messige + 'Not enter Re-Email.\n';
        valid = false;
    }
    else
    {
        if ( document.getElementById( 'email' ).value != document.getElementById( 're-email' ).value )
        {
            messige = messige + 'Not match Email and Re-Email.\n';
            valid = false;
        }
    }
    if ( document.getElementById( 'password' ).value == '' )
    {
        messige = messige + 'Not enter Password.\n';
        valid = false;
    }
    else
    {
        if ( ( document.getElementById( 'password' ).value.length ) < 6 )
        {
            messige = messige + 'The password shall be at least than 6 characters.\n';
            valid = false;
        }
    }
    if ( document.getElementById( 'sex' ).value == '-1' )
    {
        messige = messige + 'Not select Sex.\n';
        valid = false;
    }
    if ( document.getElementById( 'birthday_month' ).value == '-1' )
    {
        messige = messige + 'Not select Birthday month.\n';
        valid = false;
    }
    if ( document.getElementById( 'birthday_day' ).value == '-1' )
    {
        messige = messige + 'Not select Birthday day.\n';
        valid = false;
    }
    if ( document.getElementById( 'birthday_year' ).value == '-1' )
    {
        messige = messige + 'Not select Birthday year.\n';
        valid = false;
    }      
    if ( !valid )
    {
        alert( messige );
    }
    return valid;
}
function menuClose()
{
	document.getElementById("box_menu").style.display = "none";
}
function menuOpen()
{
	document.getElementById("box_menu").style.display = "block";
}
function userAction()
{
    var overMenu = document.getElementById('over_out_menu');
    overMenu.onmouseover = menuOpen;
    
    var outMenu = document.getElementById('over_out_menu');
    outMenu.onmouseout = menuClose;
    
    var surveyForm = document.getElementById('form');
    surveyForm.onsubmit = checkForm;
    
    var level = document.getElementById('level_pass');
    level.onchange = checkLevel;
};
window.onload = userAction;