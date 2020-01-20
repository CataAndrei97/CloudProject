<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enemies Against Fighters</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div class="wrap">
    <header>Enemies Against Fighters</header>
    <div class="game-wrapper">
      <div class="game"></div>
      <div class="congratulations">
        <h1>Congratulations!</h1>
        <h2>You won the game</h2>
		<h3 class="p_w_score">Score: </h3>
        <button class="btn" onclick="window.location.reload()">Restart</button>
      </div>
      <div class="game-over">
        <h1>GAME OVER</h1>
        <h2>You lost the game</h2>
		<h3 class="p_l_score">Score: </h3>
        <button class="btn" onclick="window.location.reload()">Restart</button>
      </div>
    </div>
    <footer>Left/right keys to move, spacebar to shoot</footer>
  </div>
  <script src="js/game.js"></script>
</body>

</html>
