$('#myButton').on('click', function() {
    var username = $('#Uname').val();
    var password = $('#Password').val();
    var email = $('#Email').val();
    var lastname = $('#Lname').val();
    var firstname = $('#Fname').val();
    $.ajax({
        method: "POST",
        url: "send",
        data: {
            uname: username,
            fname: firstname,
            lname: lastname,
            email: email,
            password: password,
            type: "insert"
        },

    });
});