"use strict";

function solve(args) {
    let array = [];
    for (let i = 0; i < args.length; i++) {
        let argParams = args[i].split('->');
        let name = argParams[0].trim();
        let age = Number(argParams[1].trim());
        let grade = Number(argParams[2].trim());

        let object = {'Name': name, 'Age': age, 'Grade':grade};
        array.push(object);
    }

    for (let obj of array) {
        console.log(`Name: ${obj['Name']}`)
        console.log(`Age: ${obj['Age']}`)
        console.log(`Grade: ${obj['Grade'].toFixed(2)}`)
    }
}

solve([
    'Pesho -> 13 -> 6.00',
    'Ivan -> 12 -> 5.57',
    'Toni -> 13 -> 4.90'
])