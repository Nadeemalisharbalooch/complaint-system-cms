<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Add basic CSS for the collapsible content */
        .collapsible {
            cursor: pointer;
            user-select: none;
        }

        .content {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Create a collapsible section -->
    <div class="collapsible" onclick="toggleContent()">
        <span id="toggleSymbol">&#9658;</span> <!-- Use a right-pointing triangle symbol as the initial indicator -->
        Click to Expand
    </div>
    <div class="content" id="content">
        <!-- Content to be displayed when expanded -->
       
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aperiam autem, eum quia ipsam, sequi totam, nobis voluptatem expedita similique adipisci commodi repudiandae modi repellat? Rem cumque fuga molestias debitis?
    </div>

    <script>
        // JavaScript function to toggle the content
        function toggleContent() {
            var content = document.getElementById("content");
            var toggleSymbol = document.getElementById("toggleSymbol");

            if (content.style.display === "block") {
                content.style.display = "none";
                toggleSymbol.innerHTML = "&#9658;"; // Change to right-pointing triangle symbol
            } else {
                content.style.display = "block";
                toggleSymbol.innerHTML = "&#9660;"; // Change to down-pointing triangle symbol
            }
        }
    </script>
</body>
</html>