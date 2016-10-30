function checkName( firstName, lastName )
{
    var checkNumber = /[^a-z]/i;
    if ( checkNumber.test( firstName ) || ( checkNumber.test( lastName ) ) )
    {
        return false;            
    }
    return true;
}

function checkBirth( day, month, year )
{
    var checkBirthday = /[a-z]/i;
    if ( ( checkBirthday.test( day ) ) || ( checkBirthday.test( month ) ) || ( checkBirthday.test( year ) ) )
    {
        return false;
    }
    return true;
}

function addSubmit()
{
    var checkField = true;
    var surveyError = "Error!\r\n";
    var firstName = document.getElementById( 'firstName' );
    var lastName = document.getElementById( 'lastName' );
    var email = document.getElementById( 'email' );
    var reemail = document.getElementById( 'reemail' );
    var password = document.getElementById( 'password' );
    var sex = document.getElementById( 'sex' );
    var day = document.getElementById( 'day' );
    var month = document.getElementById( 'month' );
    var year = document.getElementById( 'year' );

    if ( ( firstName.value == "" ) || ( lastName.value == "" ) || ( email.value == "" ) 
       || ( reemail.value == "" ) || ( password.value == "" ) )
    {
        checkField = false;
        surveyError += "Please input field!\r\n";
    }
    if( !( checkName( firstName.value, lastName.value ) ) )
    {
    	surveyError += "Please input field without numbers!\r\n";
    	checkField = false;
    }
    if ( email.value != reemail.value )
    {
        surveyError += "Emails are not the same!\r\n";
        checkField = false;
    } 
    if ( password.value.length < 5 )
    {
    	surveyError += "Please input stronger password!\r\n";
        checkField = false;
    }
    if ( sex.value == "Select sex:" )
    {
        checkField = false;
        surveyError += "Please choose the sex!\r\n";
    }
    if ( !( checkBirth( day.value, month.value, year.value ) ) )
    {
    	surveyError += "Please choose the birthday!\r\n";
    	checkField = false;
    }
    if ( !checkField )
    {
        alert( surveyError );
    }
    else
    {
        alert( "Your information have been saved successfully!" );
    }
    return checkField;  
}

function cellChange( cellFirst, cellSecond )
{
    var emptyImg = "http://127.0.0.1:4001/images/empty.png";
    if ( cellSecond.src == emptyImg )
    {
        cellSecond.src = cellFirst.src;
        cellFirst.src = emptyImg;
    }	
}

function cellAngle( angle, leftRight, upDown )
{
    angle.onclick = function()
    {
        cellChange( angle, leftRight );
        cellChange( angle, upDown );
    }	
}

function cellBorder( border, cellFirst, cellSecond, cellFird ) 
{
    border.onclick = function()
    {
        cellChange( border, cellFirst );
        cellChange( border, cellSecond );
        cellChange( border, cellFird );
    }	
}

function cellCenter( fithImg, secondImg, sixthImg, eighthImg, forthImg )
{
    fithImg.onclick = function()
    {
        cellChange( fithImg, secondImg );
        cellChange( fithImg, sixthImg );
        cellChange( fithImg, eighthImg );
        cellChange( fithImg, forthImg );
    }	
}

function barleyBreak()
{
    var firstImg = document.getElementById( 'one' );
    if ( firstImg != null )
    {
        var secondImg = document.getElementById( 'two' );
        var thirdImg = document.getElementById( 'three' );
        var forthImg = document.getElementById( 'four' );
        var fithImg = document.getElementById( 'five' );
        var sixthImg = document.getElementById( 'six' );
        var seventhImg = document.getElementById( 'seven' );
        var eighthImg = document.getElementById( 'eight' );
        var ninthImg = document.getElementById( 'nine' );
 	
        cellAngle( firstImg, secondImg, forthImg );
        cellAngle( thirdImg, secondImg, sixthImg );
        cellAngle( seventhImg, eighthImg, forthImg );
        cellAngle( ninthImg, eighthImg, sixthImg );
        cellBorder( secondImg, firstImg, thirdImg, fithImg );
        cellBorder( forthImg, firstImg, fithImg, seventhImg );
        cellBorder( sixthImg, thirdImg, fithImg, ninthImg );
        cellBorder( eighthImg, fithImg, seventhImg, ninthImg );
        cellCenter( fithImg, secondImg, sixthImg, eighthImg, forthImg );
    }
}

function dropMenu()
{
    var dropDownMenu = document.getElementById( 'dropDownMenu' );
    var drop = document.getElementById( 'drop' );
    dropDownMenu.onmouseover = function()
    {
        drop.style.display = "block";
    }
    drop.onmouseout = function()
    {
        drop.style.display = "none";
    }
    dropDownMenu.onmouseout = function()
    {
        drop.style.display = "none";
    }	
}

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
    return xmlhttp;
}

function checkPassword()
{
    var pass = document.getElementById( 'password' );
    var xmlhttp = getXmlHttp();
    var checkPass = document.getElementById( 'checkPass' );
    xmlhttp.open( 'GET', '/php/check_pass.php?new_password=' + pass.value, true );
    xmlhttp.onreadystatechange = function() 
    {
        if ( xmlhttp.readyState == 4 ) 
        {
            if ( xmlhttp.status == 200 ) 
            {
                if ( xmlhttp.responseText == '0' )
                {
                    checkPass.innerHTML = "the weakest"
                    checkPass.style.color = "white";	
                }
                if ( xmlhttp.responseText == '1' )
                {
                    checkPass.innerHTML = "weak"
                    checkPass.style.color = "red";	
                }
                if ( xmlhttp.responseText == '2' )
                {
                    checkPass.innerHTML = "good"
                    checkPass.style.color = "yellow";	
                }
                if ( xmlhttp.responseText == '3' )
                {
                    checkPass.innerHTML = "strong"
                    checkPass.style.color = "green";	
                }
            }
        }
    }   
    xmlhttp.send(null);	
}

function rating( counter, idFile )
{
	
    var curRating = document.getElementById( idFile );
    var xmlhttp = getXmlHttp();        
    xmlhttp.onreadystatechange = function() 
    {
        if ( xmlhttp.readyState == 4 ) 
        {
            if ( xmlhttp.status == 200 ) 
            {
            	curRating.innerHTML = xmlhttp.responseText;
            	
            }
        }
    }   
    var params = "counter=" + encodeURIComponent(counter) + "&id_file=" + encodeURIComponent(idFile);
    xmlhttp.open( 'POST', '/php/rating.php', true );
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlhttp.send(params); 
}

window.onload = function()
{
    window.onsubmit = addSubmit;
    dropMenu();
    var pass = document.getElementById( 'password' );
    if ( pass != null )
    {
        pass.onchange = function()
        {
            checkPassword();
        }
    }
    barleyBreak();
}



 