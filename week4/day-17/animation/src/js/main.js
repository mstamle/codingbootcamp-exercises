$('#mybtn').click(function(){
    $('#square').fadeToggle(4000);
});


$('#mybtn2').click(function(){
    $('#square').animate(
        {'width':'toggle'},
        2000
    );
});

$('#mybtn3').click(function(){
    $('#square').animate(
        {'left':'+=200px'},
        2000
    );
});

$('#mybtn4').click(function(){
    $('#square').animate(
        {'left':'-=200px'},
        2000
    );
});

$('#my-btn').click(function(){
    $('#bar1').animate({'width':'50%'}, 500);
    $('#bar2').animate({'width':'75%'}, 500);
    $('#bar3').animate({'width':'40%'}, 500);
    $('#bar4').animate({'width':'95%'}, 500);
});

// At this point we see that the action is repetitive
// We can create a function for that:
// Also we can dictate it to appear on scroll:

$('.myProgress').appear();

function progress(barID,value){
    $(barID).animate({'width':value}, 500);
};

$('.myProgress').on('appear', function() {
    progress('#b1','60%');
    progress('#b2','50%');
    progress('#b3','80%');
    progress('#b4','95%');

});