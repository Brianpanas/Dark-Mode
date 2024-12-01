<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Toggle</title>
    <link rel="stylesheet" href="./Sample Page/CSS/index.css">
</head>
<body>

        <button
            id="darkModeToggleRB"
            onclick="controller_Btn_DarkMode()"
            title="Toggle light/dark mode"
            data-light-img="./src/sun.png"
            data-dark-img="./src/light-mode.png"
            style="background-image: url('./src/sun.png'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        </button>


    <button 
        class="custom-button-RB" 
        onclick="controller_Btn_ButtonRB()">
        <span class="button-text-RB">Click Me</span>
        <img src="./src/light-mode.png" alt="Button Icon" class="button-icon-RB">
    </button>

    <div class="cat-buttonRB-container">
        <button class="category-buttonRB">Category Button 1</button>
        <button class="category-buttonRB">Category Button 2</button>
        <button class="category-buttonRB">Category Button 3</button>
        <button class="category-buttonRB">Category Button 4</button>
    </div>

    </div>
    <script type="module" src="./ProjectBry/Scripts/Controller_Btn_DarkMode.js"></script>
</body>
</html>

