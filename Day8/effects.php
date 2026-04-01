<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#flip").click(function() {
                $("#panel").slideDown("slow");
            });
        });
    </script>
    <title>Jquery Basics</title>
</head>

<body>
    <button id="flip">Submit</button>
    <p id="panel"> Hello Myself Vishal</p>
    <div>Deme JQuery Web Page</div>
    <script>
        // Add data in your web page
        $(document).ready(function() {
            $("#flip").click(function(i, textinput) {
                $("body").append("<h2>Vishal Maurya<h2>")
            });
        });
    </script>

    <!-- Insert After And Before -->
    <p id="p"> Parekh: Hlo </p>
    <p id="s"> Shivam: Hii </p><br>
    <button id="before">Insert Before</button>
    <button id="after">Insert After</button>
    <script>
        // Insert data before
        $(document).ready(function() {
            $("#before").click(function() {
                $("#p").before("<b>before </b>");
            })
        });
        // Insert data after
        $(document).ready(function() {
            $("#after").click(function() {
                $("#p").after("<b>after </b>");
            })
        });
    </script>

    <div id="name1" style="height:100px;width:300px;border:1px solid black;background-color:yellow;">
        <p>Hii</p>
        <p>Hello</p>
        <p>Namaste</p>
    </div>
    <button id="btn1">Enter </button>
    <div id="name2" style="height:100px;width:300px;border:1px solid black;background-color:blue;">
        <p>Hii</p>
        <p>Hello</p>
        <p>Namaste</p>
    </div>
    <button id="btn2">Enter </button>

    <!-- Remove all comtent -->
    <script>
        $(document).ready(function() {
            $("#btn1").click(function() {
                $("#name1").remove();
            });
        });
    </script>
    <!-- Remove the inner content -->
    <script>
        $(document).ready(function() {
            $("#btn2").click(function() {
                $("#name2").empty();
            });
        });
    </script>


</body>

</html>