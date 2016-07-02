"use strict";

function solve(args) {
    let array = [];

    for (let arg of args) {
        let argParams = arg.split(' ');
        let command = argParams[0];
        let argument = Number(argParams[1]);
        if (command == "add") {
            array.push(argument)
        } else {
            if (argument != -1) {
                array.splice(argument, 1);
            }
        }
    }

    for (let number of array) {
        console.log(number);
    }
}

solve([
    'add 3',
    'add 5',
    'add 7'
])