<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
    <title>Ping pong scores</title>
  </head>
  <body>
		<main class="mainWrapper">
			<header>
				<h2>Ping Pong Score Master <br><span>3000</span></h2>
        <a href="index.php">Home</a>
        <?php if(isset($_SESSION['game_id'])): ?>
          <a href="game.php">Game In Progress</a>
        <? endif;?>
        <a href="leaderboard.php">Leaderboard</a>
			</header>
