// function randint(lower,upper) {
//     return Math.round(
//         lower+ Math.random() * (upper-lower)
//     );
// }



function randint(lower,upper) {
    var distance = upper - lower;
    return Math.round(
        lower+ Math.random() * distance
    );
}

function roll () {
    return randint (1,6);
}