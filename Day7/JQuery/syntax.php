<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning JQuery Syantax</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    
    <p id="test">Hello Welcome in JQuery Sysntax</p>
    <button id="submit">hide</button>
    <button id="login">Show</button>
    <button id="nope">Toggle</button>
    <button id="nahi">SlidaUp</button>
    <script>
        $(document).ready(function(){
            $("#submit").click(function(){
                $("#test").hide();
            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $("#login").click(function(){
                $("#test").show();
            });
        });
    </script>
    
    <script>
        $(document).ready(function(){
            $("#nope").click(function(){
                $("#test").fadeToggle();
            });
        });
    </script>
    <!-- Toggle -->
    <script>
        $(document).ready(function(){
            $("#nahi").click(function(){
                $("#test").toggle();
            });
        });
    </script>
    

</body>
</html>