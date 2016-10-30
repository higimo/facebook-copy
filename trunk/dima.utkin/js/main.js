window.onload = function ()
{
    checkEvent( 'firstname' );
    checkEvent( 'lastname' );
    checkEvent( 'mail' );
    checkEvent( 'remail' );

    var form = document.getElementById('registerForm');
    var pass = document.getElementById("regPass");

    window.onsubmit = onSubmitHandler;
    
    
    dropMenu();
    
    if (pass !== null)
    {
        pass.onblur = onVoteClick;
    }
}