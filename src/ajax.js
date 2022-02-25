
$(document).on('click', '.add-to-cart', function (e) {
    e.preventDefault();

    var id = $(this).attr('data-id');

    alert(id);
});

