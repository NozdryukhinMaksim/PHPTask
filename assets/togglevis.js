//Функция для скрывания подкатегорий в личном кабинете
function deleteButtonClickHandler(event) {
  event.preventDefault();
  idFlight = event.target.id;
  idf = "b" + idFlight;
  var elems = document.getElementsByName(idf);
  for (var i = 0; i < elems.length; i++) {
    elems[i].classList.toggle("hide");
  }
}
