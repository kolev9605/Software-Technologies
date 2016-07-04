"use strict";

function solve(args) {
    let n = Number(args[0]);
    let result = "";
    for (let i = 1; i <= n; i++) {
        if (isPalindrome(i)) {
            result += i + " ";
        }
    }

    return result.trim();

    function isPalindrome(number) {
        let numAsString = number.toString();

        let frontIndex = 0;
        let backIndex = numAsString.length - 1;

        while (frontIndex <= backIndex) {
            if (numAsString[frontIndex] != numAsString[backIndex]) {
                return false;
            }

            frontIndex++;
            backIndex--;
        }

        return true;
    }
}

console.log(solve([750]));