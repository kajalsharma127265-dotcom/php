<!DOCTYPE html>
<html>
<head>
    <title>PHP Image Slider</title>

    <style>
        body{
            font-family: Arial;
            text-align:center;
            background:#f2f2f2;
        }

        h2{
            color:#333;
        }

        .slider{
            width:600px;
            height:350px;
            margin:30px auto;
            border:3px solid #000;
            overflow:hidden;
            border-radius:10px;
        }

        .slider img{
            width:100%;
            height:100%;
            object-fit:cover;
        }
    </style>
</head>

<body>

<h2>Image Slider Using PHP</h2>

<div class="slider">
    <img id="slide" src="images/image1.jpg" alt="Slider Image">
</div>

<script>
var images = [
    "images/image1.jpg",
    "images/image2.jpg",
    "images/image3.jpg",
    "images/image4.jpg"
];

var i = 0;

function slider()
{
    i++;

    if(i >= images.length)
    {
        i = 0;
    }

    document.getElementById("slide").src = images[i];
}

// Change image every 2 seconds
setInterval(slider, 2000);
</script>

</body>
</html>