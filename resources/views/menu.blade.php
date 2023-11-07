<!-- within your menu.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>CTF Main Menu</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <div class="div">
    <img src="https://getkahoot.com/support/assets/img/kahoot-logo.svg">
    
    <!-- Form to capture the game name -->
    <form action="{{ route('game.storeName') }}" method="POST">
      @csrf
      <input type="text" name="game_name" placeholder="Please enter your game name">
      <input type="submit" value="Enter">
    </form>
  </div>
  <p>Create your own kahoot for FREE at <a href="https://getkahoot.com/?utm_name=controller_app&utm_source=web_app&utm_medium=link">getkahoot.com</a></p>
</body>
</html>
