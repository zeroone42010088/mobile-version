$('.mobmenu').click(function(){
    $('nav.primary').slideToggle();
});
$('i.fas.fa-times').click(function(){
    $('nav.primary').slideToggle();
});

$(".slider_img1").slick({
        infinite: true,
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        /*prevArrow:"<img src='/wp-content/themes/largus/images/arr-left.png' class='arr_blog_thumb arr_blog_thumb_left' />",
        nextArrow:"<img src='/wp-content/themes/largus/images/arr-right.png' class='arr_blog_thumb arr_blog_thumb_right' />",
        */responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });

$(".slider_img2").slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        /*prevArrow:"<img src='/wp-content/themes/largus/images/arr-left.png' class='arr_blog_thumb arr_blog_thumb_left' />",
        nextArrow:"<img src='/wp-content/themes/largus/images/arr-right.png' class='arr_blog_thumb arr_blog_thumb_right' />",
        */responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });


//$('.callme_button').jbcallme();
$('.callme_button').on("click", function() {
    $(".form-main").css({"display": "flex"})
})
$('.form-main .close').on("click", function() {
    $(".form-main").hide();
})

/*<!--переключение типов заявки между выездом и ремонтом start -->*/

    $('.my-form .form_change').on('change', function() {
        var formID = $('input[name=radio]:checked', '.my-form').data('id');
        console.log(formID);
        DisplayForm(formID); 
    });
    $( document ).ready(function() {
        var formID = $('input[name=radio]:checked', '.my-form').data('id');
        console.log(formID);
        DisplayForm(formID);
    });
    function DisplayForm(formID){
        $('.frm').parent().css('display','none');
        $('#'+formID).parent().css('display','block');
    }
/*<!--переключение типов заявки между выездом и ремонтом end -->*/

console.log(11)
  document.getElementById('ajax-contact-form').addEventListener('submit', function(evt){
    console.log(22)
    var http = new XMLHttpRequest(), f = this;
    var th = $(this);
    evt.preventDefault();
    http.open("POST", "/js/contact.php", true);
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


  document.getElementById('ajax-contact-form1').addEventListener('submit', function(evt){
    console.log(33)
    var http = new XMLHttpRequest(), f = this;
    var th = $(this);
    evt.preventDefault();
    http.open("POST", "/js/contact.php", true);
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

var menuID = $('nav.primary').data('id');
$('#'+menuID).addClass('active');

if($( window ).width() < 767){ //mobile
  $('li.has-submenu i').click(function(){
      $(this).parent().find('.submenu').slideToggle();
  });
}
else{ //comp
  /*$('li.has-submenu').mouseover(function(){
      $(this).find('.submenu').css('display','block');
      console.log('hover');
  });*/
}