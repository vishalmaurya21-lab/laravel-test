<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>AJAX Form Submit</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h2 align="center">LogIn Form</h2>
    <div>
        <form id="submit_form" method="POST" align="center">
            Name: <input type="text" id="fullname" name="fullname"><br><br>

            Age: <input type="number" name="age" id="age"><br><br>

            Gender:
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <br><br>

            Select your country:
            <select name="country">
                <option value="Harsh">Harsh</option>
                <option value="India">India</option>
                <option value="France">France</option>
            </select>
            <br><br>

            <input type="button" id="submit" value="Submit">
        </form>

        <div id="response" style="margin-top:15px;"></div>
    </div>

    <script>
        $(document).ready(function() {

            $("#submit").click(function() {

                var name = $("#fullname").val().trim();
                var age = $("#age").val().trim();
                var gender = $('input[name="gender"]:checked').val();
                var country = $("select[name='country']").val();

                if (name === "" || age === "" || !gender || country === "") {

                    $("#response").fadeIn();
                    $("#response").html("<span style='color:red;'>All fields are required.</span>");

                } else {

                    $.ajax({
                        url: "save_form.php",
                        type: "POST",
                        data: $("#submit_form").serialize(),
                        success: function(data) {
                            $("#submit_form").trigger("reset");
                            $("#response").fadeIn();
                            $("#response").html(data);
                            setTimeout(function() {
                                $("#response").fadeOut("slow");
                            },4000);
                        }
                    });

                }

            });

        });
    </script>

</body>

</html>