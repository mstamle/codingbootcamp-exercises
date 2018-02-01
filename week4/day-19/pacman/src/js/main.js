
var score = 0;
var lives = 3;
function bite() {
    $('#pacman').toggleClass('openMouth');
    $('#pacman').toggleClass('closeMouth');
};

setInterval(bite,200);


// Solution 1, no boundaries, pacman moves by animation!

// $('#mybtn1').click(function(){
//     $('#pacman').animate({'left':'+=64px'},100);
// });

// document.addEventListener('keyup',function(ev){

//         if(ev.keyCode == 37){
//             $('#pacman').css('transform','rotate(0deg) scaleX(-1)');
//             $('#pacman').animate({'left':'-=64px'},100);
//         } else if (ev.keyCode == 38){
//             $("#pacman").rotate(-90);
//             $('#pacman').animate({'top':'-=64px'},100);
//         } else if (ev.keyCode == 39){
//             $("#pacman").rotate(0);
//             $('#pacman').animate({'left':'+=64px'},100);
//         } else if (ev.keyCode == 40){
//             $("#pacman").rotate(90);
//             $('#pacman').animate({'top':'+=64px'},100);
//         };
//     // left 37
//     // up 38
//     // right 39
//     // down 40
// });

//-----------------End of Solution 1---------------------------------//

// randomize the position of the candy - function is called lure()

function randomCandyPos(ev) {
    if ($('#candy').hasClass('hidden')) {
        $('#candy').css("left",(Math.floor(Math.random() * 15+1))*64);
        $('#candy').css("top",(Math.floor(Math.random() * 7+1))*64);
        $('#candy').removeClass('hidden');
    }
}

function randomGhost() {
        $('#ghost').css("left",(Math.floor(Math.random() * 15+1))*64);
        $('#ghost').css("top",(Math.floor(Math.random() * 7+1))*64);
        $('#ghost').toggleClass('hidden');
}

function randomGhost2() {
    $('#ghost2').css("left",(Math.floor(Math.random() * 15+1))*64);
    $('#ghost2').css("top",(Math.floor(Math.random() * 7+1))*64);
    $('#ghost2').toggleClass('hidden');
}

function randomGhost3() {
    $('#ghost3').css("left",(Math.floor(Math.random() * 15+1))*64);
    $('#ghost3').css("top",(Math.floor(Math.random() * 7+1))*64);
    $('#ghost3').toggleClass('hidden');
}

function randomGhost4() {
    $('#ghost4').css("left",(Math.floor(Math.random() * 15+1))*64);
    $('#ghost4').css("top",(Math.floor(Math.random() * 7+1))*64);
    $('#ghost4').toggleClass('hidden');
}

function restart(ev) {
    if ($('#pacman').hasClass('hidden')) {
        $('#pacman').removeClass('hidden');
    }
}

setInterval(restart,4000);
setInterval(randomCandyPos,2000);

setInterval(randomGhost,(Math.floor(Math.random()*20000)));
setInterval(randomGhost2,(Math.floor(Math.random()*10000)));
setInterval(randomGhost3,(Math.floor(Math.random()*50000)));
setInterval(randomGhost4,(Math.floor(Math.random()*30000)));

// if the pacman eats the candy, candy is gone
function eat() {
    var cl = $('#candy').position().left;
    var ct = $('#candy').position().top;
    var pl = $('#pacman').position().left;
    var pt = $('#pacman').position().top;

    if ((pl == cl)&&(pt==ct)) {
        $('#candy').addClass('hidden');
        score += 1;
        $('#score').html(score);
    }

}

// if the pacman touches ghost1 he dies
function kill() {
    var pl = $('#pacman').position().left;
    var pt = $('#pacman').position().top;

    var gl = $('#ghost').position().left;
    var gt = $('#ghost').position().top;

    var gl2 = $('#ghost2').position().left;
    var gt2 = $('#ghost2').position().top;

    var gl3 = $('#ghost3').position().left;
    var gt3 = $('#ghost3').position().top;


    var gl4 = $('#ghost4').position().left;
    var gt4 = $('#ghost4').position().top;


    if ((pl == gl)&&(pt==gt)) {
        $('#pacman').addClass('hidden');
        lives -=1;
        $('#lives').html(lives);
        } else if
        ((pl == gl2)&&(pt==gt2)) {
        $('#pacman').addClass('hidden');
        lives -=1;
        $('#lives').html(lives);
        } else if
        ((pl == gl3)&&(pt==gt3)) {
        $('#pacman').addClass('hidden');
        lives -=1;
        $('#lives').html(lives);
        } else if
        ((pl == gl4)&&(pt==gt4)) {
        $('#pacman').addClass('hidden');
        lives -=1;
        $('#lives').html(lives);
        }

    }

// Second solution, which can limit the pacman inside the borders
var pacman_x;
var pacman_y;

function placePacman(x, y) {
    x = Math.max(64,Math.min(x,1024));
    y = Math.max(64,Math.min(y,576));
    $('#pacman').css("left",x + 'px');
    $('#pacman').css("top",y + 'px');
    pacman_x = $('#pacman').position().left;
    pacman_y = $('#pacman').position().top;
    console.log(pacman_x);
    console.log(pacman_y);
};

placePacman(64, 64);

document.addEventListener('keyup',function(ev){
    if(ev.keyCode == 37){
        $('#pacman').css('transform','rotate(0deg) scaleX(-1)');
        placePacman(pacman_x - 64, pacman_y);
    } else if (ev.keyCode == 38){
        $("#pacman").rotate(-90);
        placePacman(pacman_x, pacman_y - 64 );
    } else if (ev.keyCode == 39){
        $("#pacman").rotate(0);
        placePacman(pacman_x + 64, pacman_y);
    } else if (ev.keyCode == 40){
        $("#pacman").rotate(90);
        placePacman(pacman_x, pacman_y + 64);
    };
    kill();
    eat();
});


// left 37
// up 38
// right 39
// down 40
