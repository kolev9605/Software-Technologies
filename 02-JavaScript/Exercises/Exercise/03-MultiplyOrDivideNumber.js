"use strict";

function solve(args) {
    let number1 = Number(args[0]);
    let number2 = Number(args[1]);

    if(number1 <= number2) {
        console.log(number1*number2)
    } else {
        console.log(number1/number2)
    }
}