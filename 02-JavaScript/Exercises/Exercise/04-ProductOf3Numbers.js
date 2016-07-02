"use strict";

function solve(args) {
    let nums = args.map(Number);
    let negativeCount = 0;
    for (let num of nums) {
        if(num < 0) {
            negativeCount++;
        }

        if(num == 0) {
            return "Positive";
        }
    }

    if (negativeCount % 2 != 0) {
        return "Negative";
    } else {
        return "Positive";
    }
}