"use strict";

function solve(args) {
    let map = {};
    for (let i = 0; i < args.length - 1; i++) {
        let argParams = args[i].split(' ');
        let key = argParams[0];
        let value = argParams[1];

        map[key] = map[key] || [];
        map[key].push(value)
    }

    let keyToTest = args[args.length - 1];
    if(keyToTest in map) {
        for (let value of map[keyToTest]) {
            console.log(value);
        }
    } else {
        console.log('None');
    }
}

solve([
    '3 bla',
    '3 alb',
    '2'

]);

solve([
    'key value',
    'key eulav',
    'test tset',
    'key'
]);