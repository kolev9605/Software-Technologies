"use strict";

function solve(args) {

    let objects = args.map(JSON.parse);
    let result = {};
    for (let obj of objects) {
        result[obj.town] = result[obj.town] || 0;
        result[obj.town] += obj.income;
    }

    let towns = Object.keys(result).sort();

    for (let town of towns) {
        console.log(`${town} -> ${result[town]}`);
    }
}

solve([
    '{"town":"Sofia","income":200}',
    '{"town":"Varna","income":150}',
    '{"town":"Varna","income":300}',
    '{"town":"Svishtov","income":50}',
    '{"town":"Vraca","income":420}',
    '{"town":"Asenovgrad","income":420}'
]);