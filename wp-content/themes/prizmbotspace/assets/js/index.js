// Main js file
// see more: https://github.com/vedees/webpack-template/blob/master/README.md#import-js-files

jQuery(document).ready( function($) {
  var rangeBalanceBody = $( "#range-balance-body" );
  var rangeBalanceTotal = $( "#range-balance-total" );
  	$( "#slider-balance" ).slider({
      orientation: "horizontal",
      range: "min",
      max: 255,
      value: 127,
      create: function() {
        rangeBalanceBody.text( $( this ).slider( "value" ) );
        rangeBalanceTotal.text( $( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        rangeBalanceBody.text( ui.value );
        rangeBalanceTotal.text( ui.value );
      },
    });
    
    var rangeTimeBody = $( "#range-time-body" );
    var rangeTimeTotal = $( "#range-time-total" );
      $( "#slider-time" ).slider({
        orientation: "horizontal",
        range: "min",
        max: 255,
        value: 127,
        create: function() {
          rangeTimeBody.text( $( this ).slider( "value" ) );
          rangeTimeTotal.text( $( this ).slider( "value" ) );
        },
        slide: function( event, ui ) {
          rangeTimeBody.text( ui.value );
          rangeTimeTotal.text( ui.value );
        },
      });
    
    $("#show-more-1, #show-more-2, #show-more-3").on("click", function() {
      var $this = $(this); 
      var $content = $this.parent("div").find(".step__text");
      var linkText = $this.find(".step__more").text().toUpperCase().trim();    
      console.log($(this).find(".step__more"), $(this).find(".step__more").text())
      if(linkText === "MORE"){
          linkText = "less";
          $content.switchClass("hide-content", "show-content", 400);
      } else {
          linkText = "more";
          $content.switchClass("show-content", "hide-content", 400);
      };
  
      $(this).find(".step__more").text(linkText);
    });

    $("#calculator-show-more-1, #calculator-show-more-2").on("click", function() {
      var $this = $(this); 
      var $content = $this.parent("tbody").find(".mobile-body__item-extra");
      var linkText = $this.find(".calculator__more-info").text().toUpperCase().trim();
      if (linkText === "MORE INFO"){
          linkText = "Less info";
          $content.removeClass('item-extra-hide');
      } else {
          linkText = "More info";
          $content.addClass('item-extra-hide'); 
      };
  
      $(this).find(".calculator__more-info").text(linkText);;
    });

    $(".tab").on("click", function() {
      var $this = $(this); 
      const dataAttr = $this.data('tab');
      $this.siblings(".tab").removeClass('tab_active'); 
      $this.addClass('tab_active');
      
      $(`table[data-tab]`).addClass('hide'); 
      $(`table[data-tab="${dataAttr}"]`).removeClass('hide');
    });

    $(".faq__btn").on("click", function() {
      var $this = $(this); 
      var $content = $this.closest(".faq__block").find(".faq__body");
      var srcSvg = $this.find(".faq__svg").attr('src');   
console.log(/plus.svg/i.test(srcSvg));			
      if(/plus.svg/i.test(srcSvg)){
          srcSvg = srcSvg.replace(/plus.svg/, `minus.svg`);
          $content.switchClass("faq_hide-content", "faq_show-content", 400);
      } else {
					srcSvg = srcSvg.replace(/minus.svg/, `plus.svg`);
          $content.switchClass("faq_show-content", "faq_hide-content", 400);
      };
  
      $(this).find(".faq__svg").attr('src', srcSvg);
    });

    const AFFILIATES = [6, 2, 1, 1, 1, 1, 1, 1, 1]
    const maxValue = Math.max(...AFFILIATES)
    $('.slider-affiliates-value').each(function(i,elem) {
      $(elem).text(`${AFFILIATES[i]}%`)
      const percentage = (AFFILIATES[i] * 100 / maxValue) + '%'
    
      const slider = $(elem).parent("tr").find(".slider-affiliates");
      slider.css(
        "background", `linear-gradient(90deg, #9c42f5 0%, #9c42f5 ${percentage}, rgba(224, 224, 255, 0.06) ${percentage})`
      )
    });

    const burgerBtn = document.querySelector('.burger-btn');
    const mobile = document.querySelector('.mobile-header');
    const language = document.querySelector('.language-view');
    const back = document.querySelector('.language__back');
    
    burgerBtn.addEventListener('click', function() {
      mobile.classList.toggle('navigation');
      mobile.classList.remove('language');
    }, false);
    language.addEventListener('click', function() {
      mobile.classList.toggle('language');
    }, false);
    back.addEventListener('click', function() {
      mobile.classList.toggle('language');
    }, false);

    DropDown($('.wrapperDropdown'));
	
	
	function DropDown(el) {
	  this.dd = el;
	  this.placeholder = $('.language__name');
	  this.image = $('.language__img');
	  this.opts = this.dd.find('ul.dropdownList > li');
	  this.optsMobile = $('.language__list.dropdownList > li');
	  this.val = '';
	  this.index = -1;
	  initEvents({
		placeholder,
		image,
		opts,
		optsMobile,
		dd
	  });
	}
	function initEvents(obj) { 
	  obj.dd.on('click', function(event){
		$(this).toggleClass('active');
		//return false;
	  });
	  /*obj.opts.on('click', function(){
		var opt = $(this);
		obj.val = opt.data('lang');
		obj.index = opt.index();
		obj.placeholder.text(obj.val.toUpperCase());
		const path = obj.image.attr('src');
		const newPath = path.replace(/lng(.+)$/, `lng-${obj.val}.svg`);
		obj.image.attr('src', newPath);
	  });
	  obj.optsMobile.on('click', function(){
		var opt = $(this);
		obj.val = opt.data('lang');
		obj.index = opt.index();
		obj.placeholder.text(obj.val.toUpperCase());
		const path = obj.image.attr('src');
		const newPath = path.replace(/lng(.+)$/, `lng-${obj.val}.svg`);
		obj.image.attr('src', newPath);
		obj.optsMobile.removeClass('lang-active');
		opt.addClass('lang-active');
		document.querySelector('.mobile-header').classList.toggle('language');
	  });*/
	}
  } 
);