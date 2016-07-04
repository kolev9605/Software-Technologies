"use strict";

function solve(args) {
    let numbers = args.map(Number);

    for (let number of numbers.reverse()) {
        console.log(number);
    }
}

solve(['1', '2', '3.5']);