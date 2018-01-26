// 1. Take the input of the numbers
// 2. Execute the operation
// 3. Display the result




function calc(){
    var a = parseFloat(document.getElementById('numbera').value);
    var b = parseFloat(document.getElementById('numberb').value);


    if (document.getElementById('operator').value == '+'){
        var res = a+b;

    }else if (document.getElementById('operator').value == '-'){
        var res = a-b;

    }else if (document.getElementById('operator').value == '*'){
        var res = a*b;

    }else {
        var res = a/b;
    }
    document.getElementById('result').innerHTML = res;


}