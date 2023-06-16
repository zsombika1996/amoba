<body>
<link rel="stylesheet" href="styles/style.css">

<div class='game'></div>
    <button class="button" onclick="tic_tac_toe.restart()" title="Restart this game">Restart</button>

    <script src="logicals/tic-tac-toe.js"></script>
    <script>
        tic_tac_toe.init(document.querySelector('.game'));
        tic_tac_toe.start();
    </script>    
</body>
