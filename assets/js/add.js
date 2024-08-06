$(document).ready(function () {
  const likeButtons = $(".like-btn");
  likeButtons.each(function (index) {
    $(this).on("click", function () {
      toggleLike(index + 1);
    });
  });

  let liked = Array.from({ length: likeButtons.length }, () => false);

  function toggleLike(buttonIndex) {
    liked[buttonIndex - 1] = !liked[buttonIndex - 1];
    const likeButton = likeButtons.eq(buttonIndex - 1);
    const likeStatus = likeButton.parent().find(".like_status");
    if (liked[buttonIndex - 1]) {
      likeButton.addClass("clicked");
    } else {
      likeButton.removeClass("clicked");
    }
  }

  //quick-menu
  var lastScrollTop = 0;

  window.addEventListener("scroll", function () {
    var st = window.pageYOffset || document.documentElement.scrollTop;

    if (st > lastScrollTop) {
      $(".top-btn").removeClass("up").addClass("down");
    } else {
      $(".top-btn").removeClass("down").addClass("up");
    }
    lastScrollTop = st;

    if (
      window.innerHeight + window.pageYOffset >=
      document.documentElement.scrollHeight
    ) {
      $(".top-btn").removeClass("down").addClass("up");
    }
  });

  var isClicking = false;

  $(".top-btn").on("click", function () {
    if (isClicking) return;

    isClicking = true;
    let scrollTopValue = $(this).hasClass("down") ? $(document).height() : 0;

    $("html, body").animate({ scrollTop: scrollTopValue }, "slow", function () {
      isClicking = false;
    });
    return false;
  });
});
