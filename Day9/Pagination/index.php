<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        #pagination a {
            padding: 5px 10px;
            margin: 3px;
            text-decoration: none;
            border: 1px solid #000;
            color: black;
        }

        #pagination a.active {
            background-color: blue;
            color: white;
        }
    </style>
    <title>Pagination Demo</title>
</head>

<body>
    <h2 style="text-align: center, backgroud-color=blue;">PHP AJAX Pagination</h2>
    <div id="load_data"></div>
    <script>
        $(document).ready(function() {
            function load_table(page) {
                $.ajax({
                    url: "pagination.php",
                    type: "POST",
                    data: {
                        page_no: page
                    },
                    success: function(data) {
                        $("#load_data").html(data);
                    }
                })
            }
            load_table();
            $(document).on("click", "#pagination a", function(e) {
                e.preventDefault();
                page_id = $(this).attr("id");
                load_table(page_id);
            })
        })
    </script>
</body>

</html>