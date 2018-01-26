
// // document.getElementById('btn').addEventListener('click',calc());
// $('#btn').click(calc);

// // Listener for keyUp: $(document).keyUp();

// function calc(){
//     var a = parseFloat($('#numbera').val());
//     var b = parseFloat($('#numberb').val());


//     if ($('#operator').val()== '+'){
//         var res = a+b;

//     }else if ($('#operator').val()== '-'){
//         var res = a-b;

//     }else if ($('#operator').val()== '*'){
//         var res = a*b;

//     }else {
//         var res = a/b;
//     }
//     $('#result').html(res);


// }

// You can create the function inside the click too:
// $('.item-to-primary').click(function(event){
//     var a = parseInt($('#basket-count').text());
//     var a = a+ 1
//     $('#basket-count').html(a);

//  })

var count = 0;
$('.item-to-primary').click(function(){
    count = count +1;
    $('#basket-count').html(count);
})
