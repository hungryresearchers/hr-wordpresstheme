/* hoverをタッチに */
(function () {
  var tapClass = "";
  var hoverClass = "";

	var Hover = window.Hover = function (ele) {
		return new Hover.fn.init(ele);
	};
	Hover.fn = {
		//Hover Instance
		 init : function (ele) {
			this.prop = ele;
		}

		, bind : function (_hoverClass, _tapClass) {
			hoverClass = _hoverClass;
			tapClass = _tapClass;

			$(window).bind("touchstart", function(event) {
				var target = event.target || window.target;

				var bindElement = null;
				if (target.tagName == "A" || $(target).hasClass(tapClass)) {
					bindElement = $(target);
				} else if ($(target).parents("a").length > 0) {
					bindElement = $(target).parents("a");
				} else if ($(target).parents("." + tapClass).length > 0) {
					bindElement = $(target).parents("." + tapClass);
				}

				if (bindElement != null) {
					Hover().touchstartHoverElement(bindElement);
				}
			});
		}
		, touchstartHoverElement : function (bindElement) {
			bindElement.addClass(hoverClass);
			bindElement.unbind("touchmove", Hover().touchmoveHoverElement);
			bindElement.bind("touchmove", Hover().touchmoveHoverElement);

			bindElement.unbind("touchend", Hover().touchendHoverElement);
			bindElement.bind("touchend", Hover().touchendHoverElement);
		}
		, touchmoveHoverElement : function (event) {
			$(this).removeClass(hoverClass);
		}
		, touchendHoverElement : function (event) {
			$(this).removeClass(hoverClass);
		}
	}
	Hover.fn.init.prototype = Hover.fn;

	Hover().bind("hover", "tap");
}
)();

/*jquery.bgswitcher.js設定*/
$(document).ready(function(){
  $(".mainv_bg").bgswitcher({
    images: [
	"wp-content/themes/takasago2016/library/img/mainv1.png",
	"wp-content/themes/takasago2016/library/img/mainv2.png",
	"wp-content/themes/takasago2016/library/img/mainv3.png",
	"wp-content/themes/takasago2016/library/img/mainv4.png"
	],
	effect: "fade",
	easing: "swing",
	loop: true
  });
});

/*jquery.colorbox.js設定*/
$(document).ready(function(){
	$(".cb").colorbox({
		maxWidth:"90%",
		height:"auto",
		maxHeight:"90%",
		opacity: 0.7
	});
});


//PCでa tel 反応させない
$(function(){
    var ua = navigator.userAgent;
    if(ua.indexOf('iPhone') < 0 && ua.indexOf('Android') < 0){
        $('.telhref span').each(function(){
            $(this).unwrap();
        });
    }
});

//a:hover を光らせる
$(function(){
 if(navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0)){}
else {
$(function(){
	$('a,input[type="submit"],input[type="button"]').not('.btn-list').hover(
		function(){$(this).stop().fadeTo(0, 0.6).fadeTo('normal', 1.0);},
		function(){$(this).stop().fadeTo('fast', 1.0);}
	);
});
}
});

//toTOP
$(function() {
    var topBtn = $('#totop');    
    topBtn.hide();
    //スクロールが100に達したらボタン表示
	  var ua = navigator.userAgent; 
if (ua.match('Trident')) {
    $('body').scroll(function () {
        if ($(this).scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
}else{
	$(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
}
	//スクロールしてトップ
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500, 'swing');
        return false;
    });
});


//アンカースクロール
$(function(){
   // #で始まるアンカーをクリックした場合に処理
   $('a[href^=#]:not(.sp_menu a)').click(function() {
      // スクロールの速度
      var speed = 400; // ミリ秒
      // アンカーの値取得
      var href= $(this).attr("href");
      // 移動先を取得
      var target = $(href == "#" || href == "" ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top;
      // スムーススクロール
      $('body,html').animate({scrollTop:position}, speed, 'swing');
      return false;
   });
});

//ハンバーガーメニュー
$(function() {
	var ua = navigator.userAgent; 
if (ua.match('Trident')) {
    var w = $('body').width();
}else{
	var w = $(window).width();
}
    var x = 1024;
    if (w <= x) {
	 //スマホの場合
$(function(){
	var $body = $('body');
    $(".menu-trigger").click(function(){
		$(".menu-trigger").stop().toggleClass("active");
        $("#menu").stop().slideToggle();
    });
});
 
}
});

//徐々に表示
$(document).ready(function() {
    $('.mainv_logo_wrap').fadeIn(1000)
});

//IE11でfixedの位置を調整
$(function(){
	var ua = navigator.userAgent; 
	if (ua.match('Trident')) {
		var scrollsize = window.innerWidth - document.body.clientWidth;
		var oldRight = parseInt($('.menu-trigger').css('right'));
		var newRight = scrollsize + oldRight;
		$('.menu-trigger').css('right', newRight);  
	}
});
$(function(){
	var ua = navigator.userAgent; 
	if (ua.match('Trident')) {
		var scrollsize = window.innerWidth - document.body.clientWidth;
		var oldRight = parseInt($('#dropmenu').css('right'));
		var newRight = scrollsize + oldRight;
		$('#dropmenu').css('right', newRight);  
	}
});
$(function(){
	var ua = navigator.userAgent; 
	if (ua.match('Trident')) {
		var scrollsize = window.innerWidth - document.body.clientWidth;
		var newWidth = "calc(100vw - " + (scrollsize + "px") + ')' ;
		$('.overlay').css('width', newWidth);  
	}
});


//maisonry.js
$(function(){
 if(navigator.userAgent.indexOf('iPhone') > 0 || navigator.userAgent.indexOf('iPod') > 0 || (navigator.userAgent.indexOf('Android') > 0 && navigator.userAgent.indexOf('Mobile') > 0)){}
else {
	
$(window).load(function() {
  $('.container').masonry({
    itemSelector: '.grid'
  });
    });
}
});
