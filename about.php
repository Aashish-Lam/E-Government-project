<!DOCTYPE html>
<html>
<head>
    <title>Button Example</title>
    <style>
        #myDiv {
            display: none;
            background-color: lightgray;
            padding: 10px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <button id="myButton">Show/Hide Div</button>
    <div id="myDiv">
        <p>User Name</p>
        <button>Another Button</button>
    </div>
    <script>
        var button = document.getElementById("myButton");
        var div = document.getElementById("myDiv");
        var isVisible = false;

        function toggleDiv() {
            if (isVisible) {
                div.style.display = "none";
            } else {
                div.style.display = "block";
            }
            isVisible = !isVisible;
        }

        button.addEventListener("click", toggleDiv);

        window.addEventListener("scroll", function() {
            div.style.display = "none";
            isVisible = false;
        });
    </script>
</body>
</html>
