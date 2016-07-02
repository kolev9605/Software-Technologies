"use strict";

function solve(args) {
    let innerArgs = args[0].split(' ');
    let first = Number(innerArgs[0]);
    let second = Number(innerArgs[1]);
    let third = Number(innerArgs[2]);

    if (first + second == third) {
        return Math.min(first, second) + " + " + Math.max(first, second) + " = " + third;
    } else if (third + second == first) {
        return Math.min(third, second) + " + " + Math.max(third, second) + " = " + first;
    } else if (third + first == second) {
        return Math.min(third, first) + " + " + Math.max(third, first) + " = " + second;
    } else {
        return "No";
    }
}

console.log(solve([8,15,7]));