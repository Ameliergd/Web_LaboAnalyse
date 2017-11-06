(function() {
  document.addEventListener('DOMContentLoaded', function () {

      // Récupère tous les éléments "navbar-burger"
      var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      // Vérifie la présence d'un navbar-burger
      if ($navbarBurgers.length > 0) {

          // Ajout d'un envent click sur chacun d'entre eux
          $navbarBurgers.forEach(function ($el) {
              $el.addEventListener('click', function () {

                  // Récupère la cible de l'attribut "data-target"
                  var target = $el.dataset.target;
                  var $target = document.getElementById(target);

                  // Change la classe du "navbar-burger" et de "navbar-menu"
                  $el.classList.toggle('is-active');
                  $target.classList.toggle('is-active');

              });
          });
      }

  });
}).call(this);
