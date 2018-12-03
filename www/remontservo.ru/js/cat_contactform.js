$(function() {
  console.log(77)
  document.getElementById('ajax-contact-form').addEventListener('submit', function(evt){
    console.log(66)
    var http = new XMLHttpRequest(), f = this;
    var th = $(this);
    evt.preventDefault();
    http.open("POST", "js/contact.php", true);
    http.onreadystatechange = function() {
      if (http.readyState == 4 && http.status == 200) {
        alert(http.responseText);
        if (http.responseText.indexOf(f.nameFF.value) == 0) { // очистить поля формы, если в ответе первым словом будет имя отправителя (nameFF)
          th.trigger("reset");
        }
      }
    }
    http.onerror = function() {
      alert('Ошибка, попробуйте еще раз');
    }
    http.send(new FormData(f));
  }, false);

});
console.log('txmar');

// $(function() {
//   console.log(777)
//   document.getElementById('ajax-contact-form1').addEventListener('submit', function(evt){
//     console.log(555)
//     var http = new XMLHttpRequest(), f = this;
//     var th = $(this);
//     evt.preventDefault();
//     http.open("POST", "js/contact.php", true);
//     http.onreadystatechange = function() {
//       if (http.readyState == 4 && http.status == 200) {
//         alert(http.responseText);
//         if (http.responseText.indexOf(f.nameFF.value) == 0) { // очистить поля формы, если в ответе первым словом будет имя отправителя (nameFF)
//           th.trigger("reset");
//         }
//       }
//     }
//     http.onerror = function() {
//       alert('Ошибка, попробуйте еще раз');
//     }
//     http.send(new FormData(f));
//   }, false);

// });

