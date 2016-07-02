"use strict";

function solve(args) {
    let map = {};
    for (let i = 0; i < args.length - 1; i++) {
        let argParams = args[i].split(' ');
        let key = argParams[0];
        let value = argParams[1];

        map[key] = value;
    }

    let keyToTest = args[args.length - 1];
    console.log(map[keyToTest] || 'None');
}

solve([
    'key value',
    'key eulav',
    'test tset',
    'key'
]);