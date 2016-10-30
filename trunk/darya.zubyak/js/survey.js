function overPunkt()
{
    var button = document.getElementById('button');
    button.style.display = 'block'; 
}
                  
function outPunkt()
{
    var button = document.getElementById('button');
    button.style.display = 'none';  
}

function valid (email)
{
    return (/^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i).test(email);
}

function validName (name)
{
    reg = /[^a-z]/i;  
    return ! reg.test(name);
}

function showError()
{
    var result = 'Ok';
    var firstNameField = document.getElementById('firstName').value;
    var lastNameField = document.getElementById('lastName').value;
    var emailField = document.getElementById('email').value;
    var reEmailField = document.getElementById('reEmail').value;
    var passwordField = document.getElementById('password').value;
    var selectFields = document.getElementsByTagName('select');
    var select = true;
    for (var i in selectFields)
    {
        if (selectFields[i].value == '-1')
        {
            select =  false;
        }
    }
    if ( passwordField.length <= 6 )
    {
        result = 'The password is too short'; 
    }
    if (! valid( emailField ) )
    {
        result = 'The email is not correct';
    }
    if (emailField != reEmailField)
    {
        result = 'The emails are not equal';
    }
    if (! validName(firstNameField) || ! validName(lastNameField))
    {   
        result = "The name must be without numbers";
    } 
    if ( (firstNameField == '') || (lastNameField == '') ||  (emailField == '') ||  (reEmailField == '') ||  (passwordField == '') 
                             || (select == false) )
    {
        result =  'There are not some data';
    }

    return result;
}

function testData()
{
    var message = showError();
    if (message == 'Ok')
    {
        return true;
    }
    else
    {
        alert (message);
        return false;
    }
}

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

function printPasswordResult(answer)
{    
    var messagePassword = document.getElementById('testPassword');
    var color = "black";
    switch( answer ) 
    {
        case "weak": 
        {
            color = "red";
            break;
        }
        case "good": 
        {
            color = "#CC9900";
            break;
        }
        case "strong": 
        {
            color = "#339900 ";
            break;
        }
    }
    messagePassword.style.color = color;
    messagePassword.innerHTML =  answer;
}

function onChangePassword()
{
    var req = getXmlHttp(); 
    req.onreadystatechange = function() 
    {
        if (req.readyState == 4) 
        { 
            if(req.status == 200) 
            { 
                var answer = req.responseText; 
                printPasswordResult(answer);
            }
        }
    }
    var password = document.getElementById('password');
    var params = "password=" + encodeURIComponent(password.value);
    req.open('POST', '/php/ajax/test_password.php', true);  
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.setRequestHeader('Content-length', params.length);
    req.send(params);
}

function printVotes(fileId, answer)
{    
    var numberOfVotes = document.getElementById(fileId);
    numberOfVotes.innerHTML =  answer;
}

function vote( button, fileId)
{
    var req = getXmlHttp(); 
    req.onreadystatechange = function() 
    {
        if (req.readyState == 4) 
        { 
            if(req.status == 200) 
            { 
                var answer = req.responseText; 
                if (answer)
                {
                    printVotes(fileId, answer);
                }
            }
        }
    }
    if (button.text == ' + ')
    {
        operation = true;
    }
    else
    {
        operation = false;
    } 
    var params = "action=" + encodeURIComponent(operation) + "&file_id=" + encodeURIComponent(fileId);
    req.open('POST', '/php/ajax/voting.php', true);  
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.setRequestHeader('Content-length', params.length);
    req.send(params);
}

function imageChange(answer)
{
    $("#image").attr("src", answer);
}

function image(params)
{
    var req = getXmlHttp(); 
    req.onreadystatechange = function() 
    {
        if (req.readyState == 4) 
        { 
            if(req.status == 200) 
            { 
                var answer = req.responseText; 
                if (answer)
                {
                    imageChange(answer);
                }
            }
        }
    }
    req.open('POST', '/php/ajax/images.php', true);  
    req.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    req.setRequestHeader('Content-length', params.length);
    req.send(params);
}

function imageNext()
{
    var params = "file=" + encodeURIComponent( $("#image").attr("src") ) + "&operation=next";
    image(params);

}


function imageLast()
{
    var params = "file=" + encodeURIComponent( $("#image").attr("src") )+ "&operation=last";
    image(params);
}

function changePos(element)
{
   var white = $("img[src *= 'white']")[0];
   var change = false;
   if ( Number(white.id) == Number(element.id) + 3 || ( Number(white.id) == Number(element.id) - 3)) 
   { 
       change = true;
   }
   if (element.id != "1" || element.id != "4" || element.id != "6")
   {
      if (Number(white.id) == Number(element.id) - 1)
      {
          change = true;
      }
   }
   if (element.id != "3" || element.id != "6" || element.id != "9")
   {
      if (Number(white.id) == Number(element.id) + 1)
      {
          change = true;
      }
   }
   if (change)
   {
        var way = element.src;
        element.src = white.src;
        white.src = way;
   }
}

$(document).ready(function()
{
    $("#punkt").hover(overPunkt, outPunkt);
    if ($("#surveyForm").length)     // находимся на странице регистрации
    {
        $("#surveyForm").submit(testData);
        $("#password").change(onChangePassword);
    }
    if ($("#userName").val() == '')         //наличие или отсутствие кнопки "Exit" в зависимости от авторизации пользователя
    { 
        $("#Exit").css('display','none');
    }
    else
    {
        $("#Exit").css('display','block');
    }
    if ($("#image").length)
    {
        $("#slideRigth").click(imageNext);
        $("#slideLeft").click(imageLast);
        setInterval(imageNext, 5000);
    }
    if ($("#1").length)
    {
        $(".tag").click(function ()
        {   
            changePos( this);
        });
    }
})

