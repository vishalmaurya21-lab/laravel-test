<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Live search Demo</title>
</head>
<body>
    Enter name to search: 
    <input type="text" id="search"><br><br>
    <table id="table_data" border="1px" width="100%">
        <tr>
            <th>ID</th>
            <th>Message</th>
            <th>Timestamp</th>
        </tr>
    </table>
    <script>
        $(document).ready(function(){
            $("#search").on("keyup", function(){
                var search_term=$(this).val();

                $.ajax({
                    url:"live_search.php",
                    type: "POST",
                    data : {search: search_term},
                    success: function(data){
                        $("#table_data").html(data);
                    }
                });
            });            
        })
    </script>
</body>
</html>