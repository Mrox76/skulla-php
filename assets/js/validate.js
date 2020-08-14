$(document).on("submit","form.js-register", function(event){
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);

    var dataObj = {
        username : $("input[type='text']", _form).val(),
        email : $("input[type='email']", _form).val(),
        password : $("input[type='password']", _form).val()
    }

    if(dataObj.email.length < 6 ){
        _error.text("Please, enter a valid email address.").show();
        return false;
    }else if(dataObj.password.length < 8){
        _error.text("Please, enter a password that is at least 8 characters long.").show();
        return false;
    }else{
        _error.hide();
    }

    $.ajax({
        type: 'POST',
        url: './ajax/register.php',
        data: 'dataObj',
        dataType: 'json',
        async: 'true',
    }).done(function ajaxDone(data){
        // quelquer que sejam os dados;
        console.log(data);
        if(data.redirect !== undefined){

        }

        alert(data.name);
    }).always(function ajaxAlwaysDoThis(data){
        console.log('always');
    })

    return true;

});