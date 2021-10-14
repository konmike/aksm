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

    $(".sub-menu .item").on("click", function () {
      let ac = $(".sub-menu .active").attr("id");
      // console.log(ac);
      if (!$(this).hasClass("active")) {
        $(document).closeOpenCard();
        $(this).addClass("active");
        let mark = $(this).attr("id");
        // console.log(mark);
        $("." + ac).hide();
        $("#" + ac).removeClass("active");
        $("." + mark).fadeIn();
      }
    });

    $(".cover").on("click", function () {
      //   console.log($(this));
      $(document).closeOpenCard();
      //   console.log($(document).scrollTop());

      if (!$(this).hasClass("active")) {
        $(this).addClass("active");

        let content = $(this).siblings(".content");
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

  $(window).scroll(function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 100) {
      $(".button--scroll-top").addClass("button--visible");
      $(".button--scroll-top").removeClass("button--hide");
      $(".button--scroll-top").css("display", "inline-block");
    } else {
      $(".button--scroll-top").removeClass("button--visible");
      $(".button--scroll-top").addClass("button--hide");
      $(".button--scroll-top").css("display", "none");
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
