// Security Gaurd, allows people to enter to a party, only people between 18 and 35 years old can enter the party

// Loop through number of people.
do {
    // ask each user about his/her age.
    const age = prompt("Hi , Please enter your age");

    // if younger than 18, print: you are too young
    // if older than 35, print: you are too old
    // if between 18 and 35

    if (age < 18) {
        alert("Sorry you are too young!!");

    } else if (35 <= age) {
        alert("Sorry you are too old!!");


    } else if (age > 18 && age < 35) {
        prompt("Please enter your name");
        alert("welcome to the party!!");

    }

    else {
        alert("soory wrong entry");


    }
    //  ask the user about his/her name and welcome the user to the party.

} while (confirm("is there anyone else?"));







































// // // Variable Challenge
// // let pagTitle = "Elzero", pagDescription = "Elzero Web School", pagDate = "25/10";
// // let card = `<div>
// // <h3>Hello ${pagTitle}</h3>
// // <p>${pagDescription}</p>
// // <span>${pagDate}</span>
// // </div>`;
// // document.write(card.repeat(4));

// let pagTitle = "Elzero", pagDescription = "Elzero Web School", pagDate = "25/10";
// let card = `<div> <h3> hello ${pagTitle} </h3> <p>${pagDescription}</p>
// <span> ${pagDate}</span> </div>`;
// document.write(card.repeat(3));

// let a = 10;
// let b = "20";
// let c = 80;

// console.log(++a + +b++ + +c++ - +a++);
// console.log(-a++)
// console.log(++a + -b + +c++ - -a++ + +a);


