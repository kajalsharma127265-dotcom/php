<!DOCTYPE html>
<html>
<head>
    <title>jQuery Mouse and Keyboard Events</title>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body{
            font-family: Arial;
            margin:40px;
        }
        #box{
            width:250px;
            height:120px;
            background:skyblue;
            border:2px solid black;
            text-align:center;
            line-height:120px;
            font-size:20px;
            margin-bottom:20px;
            cursor:pointer;
        }
        input{
            width:250px;
            padding:8px;
            font-size:16px;
        }
        #msg{
            margin-top:15px;
            font-size:18px;
            color:blue;
        }
    </style>
</head>

<body>

<h2>jQuery Mouse Events and Keyboard Events</h2>

<div id="box">Mouse Event Area</div>

<input type="text" id="txt" placeholder="Type something here">

<p id="msg"></p>

<script>
$(document).ready(function(){

    // Mouse Events

    $("#box").click(function(){
        $("#msg").text("Mouse Click Event Performed");
    });

    $("#box").dblclick(function(){
        $("#msg").text("Mouse Double Click Event Performed");
    });

    $("#box").mouseenter(function(){
        $(this).css("background","lightgreen");
        $("#msg").text("Mouse Enter Event");
    });

    $("#box").mouseleave(function(){
        $(this).css("background","skyblue");
        $("#msg").text("Mouse Leave Event");
    });

    // Keyboard Events

    $("#txt").keydown(function(){
        $("#msg").text("Key Down Event");
    });

    $("#txt").keyup(function(){
        $("#msg").text("Key Up Event");
    });

    $("#txt").keypress(function(){
        $("#msg").text("Key Press Event");
    });

});
</script>

</body>
</html>