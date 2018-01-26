
function calc(){
    var a = parseFloat($('#numbera').val());
    var b = parseFloat($('#numberb').val());


    if ($('#operator').val()== '+'){
        var res = a+b;

    }else if ($('#operator').val()== '-'){
        var res = a-b;

    }else if ($('#operator').val()== '*'){
        var res = a*b;

    }else {
        var res = a/b;
    }
    $('#result').html(res);


}