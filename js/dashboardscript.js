$(document).ready(function () {

    $('.registerbtn').on('click', function () {

    $('#registermodal').modal('show');

    });
});


$(document).ready(function () {

    $('.deletebtn').on('click', function () {

    $('#deletemodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#delete_id').val(data[1]);

    });
});

    
$(document).ready(function () {

    $('.editbtn').on('click', function () {
    $('#editmodal').modal('show');

    $tr = $(this).closest('tr');

    var data = $tr.children("td").map(function () {
    return $(this).text();
    }).get();

    console.log(data);

    $('#name').val(data[0]);
    $('#nic').val(data[1]);
    $('#address').val(data[2]);
    $('#district').val(data[3]);
    $('#number').val(data[4]);
    $('#course').val(data[5]);

    });
});


$(document).ready(function () {

    $('.closebtn').on('click', function () {
    $('#registermodal').modal('hide');
     });
});


$(document).ready(function () {

    $('.closebtn').on('click', function () {
    $('#editmodal').modal('hide');
    });
});


$(document).ready(function () {

    $('.closebtn').on('click', function () {
    $('#deletemodal').modal('hide');
    });
});