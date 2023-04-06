function checkCommand(event) {
  if (event.keyCode === 13 || event.type === 'click') { // Ajout de la vérification du type d'événement pour le bouton
    var inputVal = document.getElementById("inputCmd").value;
    if (inputVal == "cd /") {
      window.location.href = "../index.php";
    }
  }
}
