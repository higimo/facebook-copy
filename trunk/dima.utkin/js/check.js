function checkEvent( first )
{
    var input = document.getElementById( first );
    if (document.getElementById( first ))
    {
        input.onblur = function ()
        {
            if ( input.value == "" ) // не ввели
            { 
                input.setAttribute( 'class', 'notwrite' );
                input.setAttribute( 'placeholder', 'Enter anything, please' );
            }
            else
            {
                input.setAttribute( 'class', '' );
            }
        } 
    }
}

function checkPass()
{
    var pass = document.getElementById( 'pass' );
    if (document.getElementById( 'pass' ))
    {
        pass.onchange = function ()
        {
            var xmlhttp = getXmlHttp();
        }
    }
}

function onSubmitHandler()
{
    var firstName = document.getElementById('firstname');
    var lastName = document.getElementById('lastname');
    var mail = document.getElementById('mail');
    var remail = document.getElementById('remail');
    var pass = document.getElementById('pass');
    var sex = document.getElementById('sex');
    var day = document.getElementById('day');
    var month = document.getElementById('month');
    var year = document.getElementById('year');
    var error = "";
    var checkNumber = /[^a-z]/i; // Для проверки на отсутствие цифр
    var checkMail = /^([a-z0-9_\-]+\.)*[a-z0-9_\-]+@([a-z0-9][a-z0-9\-]*[a-z0-9]\.)+[a-z]{2,4}$/i;
    if ( ( day !== null ) || ( month !== null ) || ( year !== null ) || ( firstName !== null ) || ( lastName !== null ) )//don`t error
    {    
        var dataInDigit = ((checkNumber.test(day.value)) && (checkNumber.test(month.value)) && (checkNumber.test(year.value)));
        var digitInName = (checkNumber.test(firstName.value) || (checkNumber.test(lastName.value)));
        error += (firstName.value == "") ? "You did not enter First Name \n" : "";
        error += (checkNumber.test(firstName.value)) ? "First Name must contain only Latin alphabet\n": "";
        error += (lastName.value == "") ? "You did not enter Last Name\n" : "";
        error += (checkNumber.test(lastName.value)) ? "Last Name must contain only Latin alphabet\n": "";
        error += (mail.value == "") ? "You did not enter Mail\n" : "";
        error += (remail.value == "") ? "You did not enter enter re Mail\n" : "";
        error += (mail.value !== remail.value) ? "Emails are not the same!\n" : "";
        //error += (regPass.value.length < 4) ? "Password should be more than 3 characters\n" : "";

        error += (!checkMail.test(mail.value)) ? "Incorrectly entered email\n" : "";
        error += (!dataInDigit) ? "You cracker?!" : "";
        error += (sex.value == "none") ? "You didn`t select sex\n" : "";
        error += (day.value == 0) ? "You didn`t select day\n" : "";
        error += (month.value == 0) ? "You didn`t select month\n" : "";
        error += (year.value == 0) ? "You didn`t select year\n" : "";
        
        if (error != "")
        {
            alert( error );
            return false;
        }
    }
    return true;
}