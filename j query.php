<!DOCTYPE html>
<html>
<head>
    <title>jQuery Events in PHP</title>

    <!-- jQuery Library -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }

        #box {
            width: 300px;
            height: 150px;
            background-color: lightblue;
            margin: 20px auto;
            padding: 20px;
            border: 2px solid blue;
        }

        input {
            padding: 10px;
            margin: 10px;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>jQuery Events Example</h1>

    <div id="box">
        Move mouse over this box
    </div>

    <input type="text" id="name" placeholder="Enter your name">

    <br>

    <button id="btn">Click Me</button>

    <p id="result"></p>

    <script>
        $(document).ready(function() {

            // Click Event
            $("#btn").click(function() {
                $("#result").text("Button Clicked!");
            });

            // Mouse Enter Event
            $("#box").mouseenter(function() {
                $(this).css("background-color", "yellow");
                $(this).text("Mouse Entered!");
            });

            // Mouse Leave Event
            $("#box").mouseleave(function() {
                $(this).css("background-color", "lightblue");
                $(this).text("Mouse Left!");
            });

            // Keyboard Event
            $("#name").keyup(function() {
                var name = $(this).val();
                $("#result").text("You typed: " + name);
            });

        });
    </script>

</body>
</html>