import $ from 'jquery';

/* FORM VALIDATION */
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
  

function incrementValue(e) {
e.preventDefault();
var fieldName = $(e.target).data('field');
var parent = $(e.target).closest('div');
var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
} else {
    parent.find('input[name=' + fieldName + ']').val(0);
}
}

function decrementValue(e) {
e.preventDefault();
var fieldName = $(e.target).data('field');
var parent = $(e.target).closest('div');
var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
} else {
    parent.find('input[name=' + fieldName + ']').val(0);
}
}

$('.input-group').on('click', '#buttonPlus', function(e) {
incrementValue(e);
});

$('.input-group').on('click', '#buttonMinus', function(e) {
decrementValue(e);
});

// // ANIMACIONES CARDS HOME 

// const ponzioCard1 = document.getElementById('ponzioCard1');
// const ponzioCard2 = document.getElementById('ponzioCard2');
// const ponzioCard3 = document.getElementById('ponzioCard3');

// $('.collection-floating-cards').onClick(function() {
// ponzioCard1.style.transform = 'rotate(360deg)';
// });


