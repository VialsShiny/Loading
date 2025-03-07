const xhr = new XMLHttpRequest();

xhr.open("GET", "https://api.thecatapi.com/v1/images/search", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onload = function () {
  if (xhr.status >= 200 && xhr.status < 300) {
    const response = JSON.parse(xhr.responseText);
    document.getElementById('imageContainer').innerHTML = `<img src="${response[0].url}" alt="Cat Image" class="w-96 h-96 object-cover object-center rounded-[2vw]">`;
  } else {
    document.getElementById('imageContainer').innerHTML = "Erreur lors de la récupération des données.";
  }
};

xhr.onerror = function () {
  document.getElementById('imageContainer').innerHTML = "Une erreur est survenue lors de la communication avec le serveur.";
};

xhr.send();
