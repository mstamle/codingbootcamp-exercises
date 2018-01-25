var people = [];

function showPeople(personNumber) {
    var nameSpan = document.getElementById("name");
    var surnameSpan = document.getElementById("surname");
    var interestSpan = document.getElementById("interest");
    var eyeColorSpan = document.getElementById("eyeColor");

    nameSpan.innerHTML = people[personNumber].name;
    surnameSpan.innerHTML = people[personNumber].surname;
    interestSpan.innerHTML = people[personNumber].interest;
    eyeColorSpan.innerHTML = people[personNumber].eyeColor;
}

function createPerson(name, surname,interest,eyeColor,number){
    people.push({name: name,surname: surname,interest: interest, eyeColor: eyeColor});
    var newButton = document.createElement("button");
    newButton.onclick = function(){showPeople(number);};
    newButton.innerHTML = name;
    var buttContainer = document.getElementById("buttonContainer");
    buttContainer.appendChild(newButton);
}

function clearRes(){
    var nameSpan = document.getElementById("name");
    var surnameSpan = document.getElementById("surname");
    var interestSpan = document.getElementById("interest");
    var eyeColorSpan = document.getElementById("eyeColor");


    nameSpan.innerHTML="";
    surnameSpan.innerHTML = "";
    interestSpan.innerHTML = "";
    eyeColorSpan.innerHTML = "";
}

createPerson("David","Adjei","Singing","Brown",0);
createPerson("Peter","Cool","Dancing","Blue",1);
createPerson("Oanh","Doan","Food","Green",2);
