function submit(form) {
    var TestVar = form.name.value;
    alert ("You typed: " + TestVar);
}

// this is the id of the form
var frm = $('#idForm');

    frm.submit(function (e) {

        e.preventDefault();

        $.ajax({
            type: frm.attr('name'),
            url: frm.attr('request'),
            data: frm.serialize(),
            success: function (data) {
                console.log('Submission was successful.');
                console.log(data);
            },
            error: function (data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });
    });