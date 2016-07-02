"use strict";

function solve(args) {
    let n = Number(args[0]);
    let array = new Array(n);
    setAll(array, 0);

    for(let i = 1; i < args.length; i++) {
        let line = args[i].split('-');
        let index;
        let value;
        if (line.length == 2) {
            index = Number(line[0]);
            value = Number(line[1]);
        } else {
            index = Number(line[0]);
            value = -Number(line[2]);
        }

        array[index] = value;
    }

    for (let i = 0; i < n; i++) {
        console.log(array[i]);
    }

    function setAll(array, value) {
        let n = array.length;
        for (let i = 0; i < n; i++) {
            array[i] = value;
        }
    }
}

solve([
    '5',
    '0 - 3',
    '3 - -1',
    '4 - 2'
])