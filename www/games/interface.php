<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Invite de commande</title>
  <link rel="stylesheet" href="../css/inferface.css">
  <script src="../js/interface.js"></script>
</head>
<body>
  <div class="container">
    <div class="prompt">C:\></div>
    <div class="input-container">
      <input type="text" id="inputCmd" placeholder="Entrez une commande..." style = "color: #FFF;" onkeydown="checkCommand(event)">
      <button onclick="checkCommand(event)">Exécuter</button>
    </div>
    <div class="output"></div>
  </div>
</body>
</html>
