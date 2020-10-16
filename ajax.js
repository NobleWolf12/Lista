function chamarFunction(ondeEscrito,identificador,valores) {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
       document.getElementById(ondeEscrito).innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "ajax.php?identificador=" + identificador+ "&valores=" + valores, true);
    xhttp.send();
  }
