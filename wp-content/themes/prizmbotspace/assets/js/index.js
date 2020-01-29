// Main js file
// see more: https://github.com/vedees/webpack-template/blob/master/README.md#import-js-files

// this is need move to separate module, and wrap on jQuery() function
// its need for get percentage values on scripts after loading all DOM. Although, this script whatever lies on bottom of html file

jQuery(document).ready( function($) {

  const prizmData = calculatePrizm(currentBalanceValue, currentTimeValue);
  renderPZM(prizmData);
  function renderPZM(prizmData) {
    const { 
      pzmPerDay, pzmPerMonth, pzmPerYear, pzmPerCustom,
      percentPerDay, percentPerMonth, percentPerYear, percentPerCustom
    } = prizmData;
    console.log(prizmData);
    for (let i = 0; i < 3; i++) {
      //const factor = parseFloat(jQuery(`table[data-tab=prizm] .calculator__table-body tr:eq(${i}) td:eq(1)`).text());
      $(`table[data-tab=prizm] .calculator__table-body tr:eq(${i}) td:eq(2),
        table[data-tab=prizm] .calculator__mobile-body tr:eq(${i}) td:eq(2) .item-row__value`)
       .text( pzmPerDay[i].toFixed(2) );
      $(`table[data-tab=prizm] .calculator__table-body tr:eq(${i}) td:eq(3),
        table[data-tab=prizm] .calculator__mobile-body tr:eq(${i}) td:eq(3) .item-row__value`)
        .text( pzmPerMonth[i].toFixed(2) );
      $(`table[data-tab=prizm] .calculator__table-body tr:eq(${i}) td:eq(4),
        table[data-tab=prizm] .calculator__mobile-body tr:eq(${i}) td:eq(4) .item-row__value`)
        .text( pzmPerYear[i].toFixed(2) );
      $(`table[data-tab=prizm] .calculator__table-body tr:eq(${i}) td:eq(5),
        table[data-tab=prizm] .calculator__mobile-body tr:eq(${i}) td:eq(5) .item-row__value`)
        .text( pzmPerCustom[i].toFixed(2) );
         
      $(`table[data-tab=percentage] .calculator__table-body tr:eq(${i}) td:eq(2),
        table[data-tab=percentage] .calculator__mobile-body tr:eq(${i}) td:eq(2) .item-row__value`)
       .text( percentPerDay[i].toFixed(2) );
      $(`table[data-tab=percentage] .calculator__table-body tr:eq(${i}) td:eq(3),
        table[data-tab=percentage] .calculator__mobile-body tr:eq(${i}) td:eq(3) .item-row__value`)
        .text( percentPerMonth[i].toFixed(2) );
      $(`table[data-tab=percentage] .calculator__table-body tr:eq(${i}) td:eq(4),
        table[data-tab=percentage] .calculator__mobile-body tr:eq(${i}) td:eq(4) .item-row__value`)
        .text( percentPerYear[i].toFixed(2) );
      $(`table[data-tab=percentage] .calculator__table-body tr:eq(${i}) td:eq(5),
        table[data-tab=percentage] .calculator__mobile-body tr:eq(${i}) td:eq(5) .item-row__value`)
        .text( percentPerCustom[i].toFixed(2) );
    }
  }

  var rangeBalanceBody = $( "#range-balance-body" );
  var rangeBalanceTotal = $( "#range-balance-total" );
  rangeBalanceTotal.on('change', function() {
    const newValue = $(this).val();
    rangeBalanceBody.text( newValue );
    $( "#slider-balance" ).slider( "value", newValue );
  });
  	$( "#slider-balance" ).slider({
      orientation: "horizontal",
      range: "min",
      min: 0,
      max: 50000,
      value: currentBalanceValue,
      create: function() {
        rangeBalanceBody.text( $( this ).slider( "value" ) );
        rangeBalanceTotal.val( $( this ).slider( "value" ) );
      },
      slide: function( event, ui ) {
        rangeBalanceBody.text( ui.value );
        rangeBalanceTotal.val( ui.value );
      },
      change: function( event, ui ) {
        currentBalanceValue = ui.value;
        const prizmData = calculatePrizm(currentBalanceValue, currentTimeValue);
        renderPZM(prizmData);
      },
    });
    
    var rangeTimeBody = $( "#range-time-body" );
    var rangeTimeTotal = $( "#range-time-total" );
    var rangeTimeCustom = $( ".range-time-custom span" );
    rangeTimeTotal.on('change', function() {
      const newValue = $(this).val();
      rangeTimeBody.text( newValue );
      rangeTimeCustom.text( newValue );
      $( "#slider-time" ).slider( "value", newValue );
    })
      $( "#slider-time" ).slider({
        orientation: "horizontal",
        range: "min",
        min: 1,
        max: 999,
        value: currentTimeValue,
        create: function() {
          rangeTimeBody.text( $( this ).slider( "value" ) );
          rangeTimeCustom.text( $( this ).slider( "value" ) );
          rangeTimeTotal.val( $( this ).slider( "value" ) );
        },
        slide: function( event, ui ) {
          rangeTimeBody.text( ui.value );
          rangeTimeCustom.text( ui.value );
          rangeTimeTotal.val( ui.value );
        },
        change: function( event, ui ) {
          currentTimeValue = ui.value;
          const prizmData = calculatePrizm(currentBalanceValue, currentTimeValue);
          renderPZM(prizmData);
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

    const chooserItemsCollection = $('.news__chooser-item');
    const CHOOSER_ITEMS = $.map(chooserItemsCollection, function(elem) {
      return {
        elem,
        newsId: elem.dataset.newsId,
      };
    });
    let currentItem = 0;
    const LAST_ITEM = CHOOSER_ITEMS.length - 1;
    var backBtn = $("#back");
    var nextBtn = $("#next");

    backBtn.on('click', function() {
      CHOOSER_ITEMS[currentItem].elem.classList.remove('news__chooser-item_active');
      
      currentItem = currentItem - 1 >= 0 
        ? currentItem - 1
        : LAST_ITEM;
      const newsId = CHOOSER_ITEMS[currentItem].newsId;

      document.getElementById(`${newsId}`).scrollIntoView({inline: 'start', block: "start", behavior: "smooth"});

      CHOOSER_ITEMS[currentItem].elem.classList.add('news__chooser-item_active');
    });
    nextBtn.on('click', function() {
      CHOOSER_ITEMS[currentItem].elem.classList.remove('news__chooser-item_active');
      
      currentItem = currentItem + 1 > LAST_ITEM 
        ? 0
        : currentItem + 1;
      const newsId = CHOOSER_ITEMS[currentItem].newsId;

      document.getElementById(`${newsId}`).scrollIntoView({inline: 'start', block: "start", behavior: "smooth"});

      CHOOSER_ITEMS[currentItem].elem.classList.add('news__chooser-item_active');
    });
   
    const affiliatesCollection = $('.affiliates__table .slider-affiliates-value');
    const AFFILIATES = $.map(affiliatesCollection, function(elem) {
      const value = parseFloat(elem.textContent);
      return isNaN(value) ? 0 : value;
    });
    const maxValue = Math.max(...AFFILIATES);
    $('.slider-affiliates-value').each(function(i,elem) {
      $(elem).text(`${AFFILIATES[i]}%`);
      const percentage = (AFFILIATES[i] * 100 / maxValue) + '%';
    
      const slider = $(elem).parent("tr").find(".slider-affiliates");
      slider.css(
        "background", `linear-gradient(90deg, #9c42f5 0%, #9c42f5 ${percentage}, rgba(224, 224, 255, 0.06) ${percentage})`
      );
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