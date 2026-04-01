<!DOCTYPE html>
<html>

<head>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("div").children().css({
                "color": "green",
                "border": "1px solid red"
            });
        });
    </script>
</head>

<body>

    <div class="descendants" style="width:500px;">div (current element)
        <p>p (child)
            <span>span (grandchild)</span>
        </p>
        <p>p (child)
            <span>span (grandchild)</span>
        </p>
    </div>

</body>

</html>