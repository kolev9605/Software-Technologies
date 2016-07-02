function addItem() {
    let text = $('#newItemText').val();
    let li = $('<li>')
        .append($("<span>").text(text))
        .append(' ')
        .append($('<a href="#" onclick="deleteItem(this)">[Delete]</a>'))
    $('#items').append(li);
    $('#newItemText').val('');
}

function deleteItem(link) {
    $(link).parent().remove();
}

$(function() {
    $('#newItemText').keypress(function (e) {
        if(e.keyCode == 13) {
            $('#newItemText + input[type="button"]').click();
        }
    })
})