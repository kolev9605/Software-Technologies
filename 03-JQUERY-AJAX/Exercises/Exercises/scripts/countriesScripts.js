function fixRowLinks() {
    $('#countriesTable a').show();
    let tableRows = $('#countriesTable tr');
    $(tableRows[1])
        .find('a:contains("Up")').hide();

    $(tableRows[tableRows.length - 1])
        .find('a:contains("Down")').hide();
}

function deleteRow(link) {
    let row = $(link).parent().parent();
    row.fadeOut(function () {
        row.remove();
        fixRowLinks()
    })
}

function moveUp(link) {
    let row = $(link).parent().parent();
    row.fadeOut(function () {
        row.insertBefore(row.prev());
        row.fadeIn();
        fixRowLinks()
    })
}

function moveDown(link) {
    let row = $(link).parent().parent();
    row.fadeOut(function () {
        row.insertAfter(row.next());
        row.fadeIn();
        fixRowLinks()
    })
}

function addCountry() {
    let country = $('#newCountry').val();
    let capital = $('#newCapital').val();
    let row = addCountryToTable(country, capital);
    row.hide();
    row.fadeIn();
    $('#newCountry').val('');
    $('#newCapital').val('');
    fixRowLinks()
}

function addCountryToTable(country, capital) {
    let tr = $('<tr>')
        .append($('<td>')
            .text(country))
        .append($('<td>')
            .text(capital))
        .append($('<td>')
            .append($('<a href="#" onclick="moveUp(this)">[Up]</a>'))
            .append(' ')
            .append($('<a href="#" onclick="moveDown(this)">[Down]</a>'))
            .append(' ')
            .append($('<a href="#" onclick="deleteRow(this)">[Delete]</a>')))

    $('#countriesTable').append(tr);

    return tr;
}


$(function () {
    addCountryToTable('Bulgaria', 'Sofia');
    addCountryToTable('Germany', 'Berlin');
    addCountryToTable('Russia', 'Moscow');
    addCountryToTable('France', 'Paris');
    fixRowLinks();
});
