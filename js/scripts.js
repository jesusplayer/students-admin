
$(function () {
    $(document).keypress(function (e) {
        if (e.which === 13) {
            if ($("#btn-submit").length > 0) {
                processEditSubmit();
            } else {
                processLoginSubmit();
            }
        }
    })
    $('#btn-submit').on("click", function (e) {
        processEditSubmit();
    });
    $('#btn-submit-login').on("click", function (e) {
        processLoginSubmit();
    });
    function processEditSubmit() {
        if (testEditSuccess(["prenom", "nom", "adresse", "tel", "email", "login", "passwd"])) {
            $('#edit-form').submit();
        }
    }
    function processLoginSubmit() {
        if (testEditSuccess(["login", "passwd"])) {
            $('#login-form').submit();
        }
    }
    function testEditSuccess(fieldEdit) {
        var err = true;
        fieldEdit.forEach(function (id) {
            var elem = $("#" + id).get(0);
            if (!elem.value || elem.value === "") {
                elem.style.borderColor = "red";
                elem.title = "Ce champ ne doit pas être vide";
                err = false;
            } else {
                elem.style.borderColor = "";
                elem.title = "";
            }
        });
        if (err) {
            $(".error").hide("slow");
        } else {
            $(".error").show(1000);
        }
        return err;
    }
});