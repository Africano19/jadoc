$(document).ready(function () {
    $("#btnSubmit").click(function (event) {
        //stop submit the form, we will post it manually.
        event.preventDefault();
 
        // Get form
        var form = $('#loginForm')[0];
 
        // FormData object 
        var data = new FormData(form);
 
        // disabled the submit button
        $("#btnSubmit").prop("disabled", true);
 
        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "php/authentication/login.php",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 800000,
            success: function (data) {
                console.log("SUCCESS : ", data);
                $("#output").text(data);
                $("#btnSubmit").prop("disabled", false);
            },
            error: function (e) {
                console.log("ERROR : ", e);
                $("#output").text(data);
                $("#btnSubmit").prop("disabled", false);
            }
        });
    });
});