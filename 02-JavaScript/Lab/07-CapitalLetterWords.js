"use strict";

function solve(args) {
    console.log(
        args.join(',')
            .split(/\W+/)
            .filter(x => x!='')
            .filter(x => x.toUpperCase() == x)
            .join(', '));
}

solve([
    'We start by HTML, CSS, JavaScript, JSON and REST.',
    'Later we touch some PHP, MySQL and SQL.',
    'Later we play with C#, EF, SQL Server and ASP.NET MVC.',
    'Finally, we touch some Java, Hibernate and Spring.MVC.'
]);