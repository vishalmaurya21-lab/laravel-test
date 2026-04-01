<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
    <p id="result">You can remove this text (Press the button)</p>
    <button id="btn">Enter</button>
    <script>
        $(document).ready(function() {
            $("#btn").click(function() {
                $.ajax({
                    url: "data.txt",
                    type: "GET",
                    success: function(response) {
                        $("#result").text(response);
                    },
                    error: function() {
                        alert("Error loading file.");
                    }
                });
            });
        });
    </script>
</body>

</html>