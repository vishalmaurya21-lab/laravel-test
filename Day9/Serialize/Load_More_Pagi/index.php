
<!DOCTYPE html>
<html>
<head>
    <title>Load More Pagination</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<h2>Pagination Example</h2>
<div id="load_data">
    <table>
        <tr>
            <th>EID</th>
            <th>EmploYee Name</th>
            <th>Salary</th>
            <th>Designation</th>
        </tr>
        <tr>
            <td align="center">
                <button id="ajxbtn" data-id="">Load More</button>
            </td>
        </tr>
    </table>
</div>
<div id="load_data_message"></div>

<script>
$(document).ready(function(){

    function load_data(page){
        $.ajax({
            url: "load_more.php",
            method: "POST",
            data: {page_no :page},
            success:function(data){
                if(data == ''){
                    $('#load_data_message').html("<button>No More Data</button>");
                    action = 'active';
                } else {
                    $('#load_data').append(data);
                    $('#load_data_message').html("<button id='load_more'>Load More</button>");
                    action = 'inactive';
                }
            }
        });
    }
    load_data();

    if(action == 'inactive'){
        action = 'active';
        load_data(limit, start);
    }

    $(document).on('click', '#load_more', function(){
        start = start + limit;
        load_data(limit, start);
    });

});
</script>

</body>
</html>