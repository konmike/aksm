(function ($) {
  $(document).ready(function () {
    $.fn.getAllCards = function () {
      return $(".card").find(".cover");
    };
    $.fn.closeOpenCard = function () {
      let covers = $(document).getAllCards();
      covers.each(function () {
        if ($(this).hasClass("active")) {
          // console.log($(this));
          $(this).removeClass("active");
          $(this).siblings(".content").addClass("hidden");
          $(".section--projects").removeClass("half");
        }
      });
      return this;
    };

    $(".more-information").on("click", function () {
      //   console.log($(this));
      $(document).closeOpenCard();
      //   console.log($(document).scrollTop());

      if (!$(this).parent().hasClass("active")) {
        $(this).parent().addClass("active");

        let content = $(this).parent().siblings(".content");
        content.removeClass("hidden");
        // let val = content[0].offsetWidth - content[0].clientWidth;
        // console.log(val);
        // content.css("padding-right", val + "px");

        $(".section--projects").addClass("half");
        // $("html").css("overflow-y", "visible");
      }
    });

    $(".hide-information").on("click", function () {
      $(".hide-information").parent().siblings(".cover").removeClass("active");

      $(".hide-information").parent().addClass("hidden");
      $(".section--projects").removeClass("half");
      //   $("html").css("overflow-y", "hidden");
    });
  });

  $(".item-hover-44 .info").append('<span class="more-info-fake">Více</span>');
  $(".item-hover-159 .info").append('<span class="more-info-fake">Více</span>');
  $(".item-hover-88 .info").append(
    '<span class="prepare-fake">Připravujeme</span>'
  );
  $(".section--introduction").append(
    '<a href="/?page_id=8" class="link link--more-info">Více</a>'
  );

  $(document).on("click", 'a[href^="#"].smooth-scroll', function (event) {
    event.preventDefault();
    let menu = $("#menu");

    $("html, body").animate(
      {
        scrollTop: $($.attr(this, "href")).offset().top - menu.height(),
      },
      1000
    );
  });

  /*if($('main').hasClass("home_page")){
        $('div.contact').addClass("contact--light");
    }else{
        $('div.contact').addClass("contact--dark");
    }*/

  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 100) {
      $("span.button-scroll-top").addClass("button-visible");
      $("span.button-scroll-top").removeClass("button-hide");
      $("span.button-scroll-top").css("display", "inline-block");
    } else {
      $("span.button-scroll-top").removeClass("button-visible");
      $("span.button-scroll-top").addClass("button-hide");
      $("span.button-scroll-top").css("display", "none");
    }
  });

  $("li.menu-item-43").click(function (e) {
    //$('#menu-menu > li:first-child').toggleClass('hamburger-menu-button-close');
    $("#menu-menu").toggleClass("menu--drop-down");
    /*if(!$('#menu-menu').hasClass('hamburger-menu')){
            $('.menu-item-56').css('display', 'flex');
            $('.menu-item-78').css('display', 'flex');
        }else{
            $('.menu-item-56').css('display', 'none');
            $('.menu-item-78').css('display', 'none');
        }*/
    e.preventDefault();
  });

  if ($("#menu-menu li").length > 8) {
    $("#menu-menu").parent().addClass("nav--hamburger");
    $("#menu-menu").parent().parent().addClass("header--sb");
  }

  let allLis = $(".section--splitter ul li");
  //console.log(allLis);
  let counter = 0;
  if (allLis.length > 10) {
    let countUl = Math.ceil(allLis.length / 10);
    let ul;
    for (let i = 0; i < countUl; i++) {
      if (i === 0)
        ul = $("<ul>", { id: "list-part" + i, class: "list list--part" });
      else
        ul = $("<ul>", {
          id: "list-part" + i,
          class: "list list--part",
          style: "display:none",
        });

      $(".section--splitter").append(ul);
      for (let j = 0; j < 10; j++) {
        $("#list-part" + i).append(allLis[counter]);
        counter++;
      }
    }

    $(".section--splitter").append(
      '<div class="controls"><a href="#" id="prev">Předchozí</a><a href="#" id="next">Další</a></div>'
    );

    //console.log(allLis);
    //console.log(countUl);

    //console.log($('.section--splitter ul:nth-child(2)'));
    $(".section--splitter ul:nth-child(2)").empty();
    if ($(".section--splitter ul:nth-child(2)").is(":empty")) {
      //console.log("Ano, je prazdny.");
      $(".section--splitter ul:nth-child(2)").css("display", "none");
    }
  } else {
    $(".section--splitter").css({
      display: "grid",
      "grid-template-columns": "1fr 1fr",
      "justify-items": "center",
      "align-items": "baseline",
    });
  }

  let labels_item = $(".section--splitter .list--part");
  let now = 0; // currently shown div

  $("#next").click(function (e) {
    labels_item.eq(now).hide();
    now = now + 1 < labels_item.length ? now + 1 : 0;
    labels_item.eq(now).show(); // show next
    e.preventDefault();
  });
  $("#prev").click(function (e) {
    labels_item.eq(now).hide();
    now = now > 0 ? now - 1 : labels_item.length - 1;
    labels_item.eq(now).show(); // or .css('display','block');
    e.preventDefault();
    //console.log(divs.length, now);
  });
})(jQuery);
