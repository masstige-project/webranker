$(document).ready(function () {
  $(".filter-bx").on("click", function (e) {
    if (
      $(e.target).hasClass("popClosebtn") ||
      $(e.target).closest(".popClosebtn").length
    ) {
      return;
    }
    $(".overlay5, .overlay5 .popup-bx").show();
    $("body").css({ overflow: "hidden" });
  });

  $(".popClosebtn").on("click", function () {
    $(".overlay5, .overlay5 .popup-bx").hide();
    $("body").css({ overflow: "visible" });
    $(".datepicker, .datepicker2").val("");
  });

  //카테고리1
  const swiper = new Swiper(".category-slide .swiper-container", {
    slidesPerView: "auto",
    spaceBetween: 10,
    loop: true,
    navigation: {
      prevEl: ".category-slide .prev-btn",
      nextEl: ".category-slide .next-btn",
    },
    breakpoints: {
      320: {
        slidesPerView: "auto",
        spaceBetween: 10,
      },
      576: {
        slidesPerView: "auto",
        spaceBetween: 10,
      },
      767: {
        slidesPerView: "auto",
        spaceBetween: 10,
      },
      1200: {
        slidesPerView: "auto",
        spaceBetween: 15,
      },
    },
  });
  const swiper2 = new Swiper(".category-slide2 .swiper-container", {
    slidesPerView: "auto",
    spaceBetween: 10,
    loop: true,
    navigation: {
      prevEl: ".category-slide2 .prev-btn",
      nextEl: ".category-slide2 .next-btn",
    },
    breakpoints: {
      320: {
        slidesPerView: "auto",
        spaceBetween: 10,
      },
      576: {
        slidesPerView: "auto",
        spaceBetween: 10,
      },
      767: {
        slidesPerView: "auto",
        spaceBetween: 10,
      },
      1200: {
        slidesPerView: "auto",
        spaceBetween: 15,
      },
    },
  });

  $(".category-slide .swiper-wrapper, .category-slide2 .swiper-wrapper").on(
    "click",
    ".swiper-slide a",
    function (event) {
      event.preventDefault();
      $(".category-slide .swiper-slide a").removeClass("active");
      $(".category-slide2 .swiper-slide a").removeClass("active");
      $(this).addClass("active");
    }
  );

  //filter
  $(".stepList .stepItem > a").on("click", function () {
    $(this).toggleClass("active");
  });

  $(".projectBtn .allReset").on("click", function () {
    $(".stepList .stepItem > a").removeClass("active");
  });

  $(".stepList2 .stepItem2").on("click", function () {
    $(".stepList2 .stepItem2").removeClass("active");
    $(this).addClass("active");
  });

  //1200이하일경우 slide로 변경
  function initSwiper() {
    var screenWidth = $(window).width();

    if (screenWidth < 1200) {
      new Swiper(".filter-bx .stepArea", {
        observer: true,
        observeParents: true,
        fadeEffect: {
          crossFade: true,
        },
        breakpoints: {
          320: {
            slidesPerView: "auto",
            spaceBetween: 8,
          },
          576: {
            slidesPerView: "auto",
            spaceBetween: 8,
          },
          767: {
            slidesPerView: "auto",
            spaceBetween: 8,
          },
          1200: {
            slidesPerView: "auto",
            spaceBetween: 8,
          },
        },
      });
    }
  }

  initSwiper();

  var resizeTimer;
  $(window).on("resize", function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function () {
      initSwiper();
    }, 250);
  });
  //달력
  $(".datepicker").datepicker({
    dateFormat: "yy-mm-dd",
    prevText: "이전 달",
    nextText: "다음 달",
    monthNames: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    monthNamesShort: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    dayNames: ["일", "월", "화", "수", "목", "금", "토"],
    dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"],
    dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
    showMonthAfterYear: true,
    yearSuffix: "년",
  });

  $(".datepicker2").datepicker({
    dateFormat: "yy-mm-dd",
    prevText: "이전 달",
    nextText: "다음 달",
    monthNames: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    monthNamesShort: [
      "1월",
      "2월",
      "3월",
      "4월",
      "5월",
      "6월",
      "7월",
      "8월",
      "9월",
      "10월",
      "11월",
      "12월",
    ],
    dayNames: ["일", "월", "화", "수", "목", "금", "토"],
    dayNamesShort: ["일", "월", "화", "수", "목", "금", "토"],
    dayNamesMin: ["일", "월", "화", "수", "목", "금", "토"],
    showMonthAfterYear: true,
    yearSuffix: "년",
  });

  //content
  $(".rankBtnWrap .rankBtnItem a").on("click", function () {
    $(".rankBtnWrap .rankBtnItem a").removeClass("active");
    $(this).addClass("active");
  });
  $(".rankWrap .list__1 li, .rankWrap .list__2 li").on("click", function () {
    $(".rankWrap .list__1 li, .rankWrap .list__2 li").removeClass("active");
    $(this).addClass("active");
  });
});
