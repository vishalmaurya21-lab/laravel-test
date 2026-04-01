<!DOCTYPE html>
<html>
<head>
    <title>Ajax with jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<input type="button" id="load_btn" value="Load Data">

<table border="1" width="100%" cellspacing="0" cellpadding="10px">
    <thead>
        <tr>
            <th>ID</th>
            <th>Message</th>
            <th>Created_at</th>
        </tr>
    </thead>
    <tbody id="table_data">
    </tbody>
</table>

<script>
$(document).ready(function(){
    $("#load_btn").on("click", function(){
        $.ajax({
            url : "ajax_load.php",
            type: "POST",
            success : function(data){
                $("#table_data").html(data);
            }
        });
    });
});
</script>

</body>
</html>