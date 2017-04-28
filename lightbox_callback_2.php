<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>lightbox_callback_2</title>
<link href="Favicon.png" rel="shortcut icon">
<link href="styles/Eurostroy-remont.by.css" rel="stylesheet">
<link href="styles/lightbox_callback_2.css" rel="stylesheet">
<script>
function ValidateForm_lightbox_callback_2(theForm)
{
   var regexp;
   regexp = /^([0-9a-z]([-.\w]*[0-9a-z])*@(([0-9a-z])+([-\w]*[0-9a-z])*\.)+[a-z]{2,6})$/i;
   if (!regexp.test(theForm.indexEditbox5.value))
   {
      alert("Пожалуйста, заполните форму правильно.");
      theForm.indexEditbox5.focus();
      return false;
   }
   if (theForm.indexEditbox5.value == "")
   {
      alert("Пожалуйста, заполните форму правильно.");
      theForm.indexEditbox5.focus();
      return false;
   }
   if (theForm.indexEditbox5.value.length < 7)
   {
      alert("Пожалуйста, заполните форму правильно.");
      theForm.indexEditbox5.focus();
      return false;
   }
   return true;
}
</script>
<link rel="stylesheet" href="styles/animsition.css">
<link rel="stylesheet" href="styles/jquery.progresstracker.css">
<link rel="stylesheet" href="styles/text.css">
<link rel="stylesheet" href="styles/radio.css">
<link rel="stylesheet" href="styles/hover.css">
<link rel="stylesheet" href="styles/parallax.css">
<link rel="stylesheet" href="styles/jquery.fancybox.css">
<link rel="stylesheet" href="styles/caption_hover.css">
<link rel="stylesheet" href="styles/bg_sliding.css">
<!--В этом проекте будет 100500 лидов в день)))-->
<!--<script src="scripts/jquery-1.7.2.min.js"></script>-->
<script src="scripts/jquery.fancybox.js"></script>
<script src="scripts/jquery.localscroll-1.2.7-min.js"></script>
<script src="scripts/jquery.parallax-1.1.3.js"></script>
<script src="scripts/caption_hover.js"></script>
<!--И это минимум-->
<script>
$(document).ready(function(){
$('#parallax_1').parallax("50%", 0.24);

$('#parallax_2').parallax("50%", 0.25);

})
</script>
<script>
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();
	    var target = this.hash,
	    $target = $(target);
	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-87025671-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- Yandex.Metrika counter -->
<script>
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter40754999 = new Ya.Metrika({
                    id:40754999,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });
        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";
        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
      <noscript><div><img src="https://mc.yandex.ru/watch/40754999" style="position:absolute; left:-9999px;" alt=""/></div></noscript>
<!-- /Yandex.Metrika counter --><script src="scripts/jquery-1.7.2.min.js"></script>
<script src="scripts/utm_parameters.js"></script>
<script src="scripts/jquery.maskedinput.js"></script>
<script>
jQuery(function($){
   $("input[name='phone']").mask("+375(99)999-99-99");
});
</script>
</head>
<body>
   <div id="container">
      <div id="lightbox_callback_1Layer1">
         <div id="lightbox_callback_1Layer1_Container">
            <div id="wb_indexText132">
               <span id="wb_uid0"><strong>Отзыв</strong></span></div>
            <hr id="indexLine13">
            <div id="wb_indexForm6">
               <noindex><form name="Form_lightbox_callback_2" method="post" action="lightbox_callback_2.php" enctype="multipart/form-data" accept-charset="UTF-8" id="indexForm6" onsubmit="return ValidateForm_lightbox_callback_2(this)">
                     <input type="hidden" name="formid" value="indexform6">
                     <div id="indexHtml1">
                        <button class="button_form_1" type="submit">Оставить отзыв</button>
                        <input type="hidden" name="button" value="Оставить отзыв"></div>
                     <div id="wb_indexText122">
                        <span id="wb_uid1">Введите Ваш отзыв:</span></div>
                     <textarea name="Otzyv" id="indexTextArea1" rows="3" cols="32" maxlength="150" placeholder="&#1042;&#1072;&#1096; &#1086;&#1090;&#1079;&#1099;&#1074;"></textarea>
                     <div id="wb_indexText120">
                        <span id="wb_uid2">Введите Ваш e-mail:</span></div>
                     <input type="email" id="indexEditbox5" name="e-mail" value="" maxlength="150" placeholder="&#1042;&#1072;&#1096; e-mail">
                  </form>
               </noindex></div>
         </div>
      </div>
   </div>
<script>
$(".lightbox_callback, .lightbox_callback_2").fancybox({
   width		        : 600,
   height			: 550,
   autoScale			: false,
   autoSize                     : false,
   transitionIn                 : 'none',
   transitionOut		: 'none',
   type: 'iframe'
});
$(".gallery").fancybox({
		maxWidth	: 1000,
		maxHeight	: 800,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
});
</script>
<script>
$('.caption').captionHover({
  fx: 'chico',
  headColor: '#fff',
  captionColor: '#fff',
  overlay: '#ffc300',
  figWidth: '100%',
  figHeight : '100%',
  bgCaption : 'transparent',
  iconColor : '#fff'
});
</script>
<script>
$(document).ready(function() {
	$("input[name$='menu']").click(function() {
		if($(this).attr("value")=="Remont_kvartir") {
			$("#indexLayer15").css({
				'visibility': 'visible'
			});
			$("#indexLayer16, #indexLayer21").css({
				'visibility': 'hidden'
			});
		}
		if($(this).attr("value")=="Remont_Domov") {
			$("#indexLayer16").css({
				'visibility': 'visible'
			});
			$("#indexLayer15, #indexLayer21").css({
				'visibility': 'hidden'
			});
		}
		if($(this).attr("value")=="Remont_Ofisov") {
			$("#indexLayer21").css({
				'visibility': 'visible'
			});
			$("#indexLayer15, #indexLayer16").css({
				'visibility': 'hidden'
			});
		}
	});
});
</script></body>
</html>