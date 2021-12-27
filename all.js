$(document).ready(function () {
    autoFetch();
    $("#addRowBtn").click(function (e) {
        e.preventDefault();
        $("#playernamediv").append(`<label for="pname">Player Name</label>
        <input type="text" name="pname[]" id="pname">`);
    });

    $("#insertBtn").click(function (e) {
        e.preventDefault();
        $.ajax({
            url: "./action/multipleinsert.php",
            method: "POST",
            data: $("#formData").serialize(),
            success: function (data) {
                alert(data);
                // $("#formData")[0].reset();
                // autoFetch();
                location.reload();
            }

        });

    });
});
function autoFetch() {
    $.ajax({
        url: "fetch.php",
        method: "POST",
        success: function (data) {
             $('tbody').html(data);
            //  $('tbody').append(data);
        }
    })
}