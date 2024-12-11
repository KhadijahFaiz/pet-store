(function ($) {
  $.fn.menumaker = function (options) {
    var amberdmobilemenu = $(this), settings = $.extend({
      format: "dropdown",
      sticky: false
    }, options);
    return this.each(function () {
      /* Main-menu open buttons */
      $(this).find(".amberdmobilemenubutton").on('click', function () {
        $(this).toggleClass('menu-opened');
        var mainmenu = $(this).next('ul');
        if (mainmenu.hasClass('open')) {
          mainmenu.slideToggle().removeClass('open');
        }
        else {
          mainmenu.slideToggle().addClass('open');
          if (settings.format === "dropdown") {
            mainmenu.find('ul').show();
          }
        }
      });

      /* Sub-menu open buttons */
      amberdmobilemenu.find('li ul').parent().addClass('has-sub');
      multiTg = function () {
        amberdmobilemenu.find(".has-sub").prepend('<button class="amberd-submenu-button amberd-mobile-icon-button"></button>');
        amberdmobilemenu.find('.amberd-submenu-button').on('click', function () {
          $(this).toggleClass('submenu-opened');
          if ($(this).siblings('ul').hasClass('open')) {
            $(this).siblings('ul').removeClass('open').slideToggle();
          }
          else {
            $(this).siblings('ul').addClass('open').slideToggle();
          }
        });
      };
      if (settings.format === 'multitoggle') multiTg();
      else amberdmobilemenu.addClass('dropdown');
      if (settings.sticky === true) amberdmobilemenu.css('position', 'fixed');
    });
  };
})(jQuery);
/* Menu main and sub open buttons function */
(function ($) {
  $(document).ready(function () {
    $("#amberdmobilemenu").menumaker({
      format: "multitoggle"
    });
  });
})(jQuery);

const amberdMenuTrapFocus = (e) => {
  const amberdMenuFocusableElements = Array.from(
    e.querySelectorAll(
      'a[href]:not([disabled]), button.amberd-submenu-button:not([disabled]), button.amberdmobilemenubutton:not([disabled])'
    )
  );
  const amberdMenuFirstFocusableElement = amberdMenuFocusableElements[0];
  const amberdMenuLastFocusableElement = amberdMenuFocusableElements[amberdMenuFocusableElements.length - 1];

  const amberdMobileMenuLastA = Array.from(
    e.querySelectorAll(
      'a.amberd-menu-items-color:not([disabled])'
    )
  );
  const amberdMenuLastParentA = amberdMobileMenuLastA[amberdMobileMenuLastA.length - 1];

  const amberdMenuLastSubA = Array.from(
    e.querySelectorAll(
      'a.amberd-sub-menu-link-color:not([disabled])'
    )
  );
  const amberdMobileMenuLastSubA = amberdMenuLastSubA[amberdMenuLastSubA.length - 1];

  const amberdMenuLastFocusableElements = Array.from(
    e.querySelectorAll(
      'li.dropdown.has-sub:not(.dropdown-submenu):not([disabled])'
    )
  );
  if (amberdMenuLastFocusableElements.length != 0) {
  const amberdMenuLastSamurai = amberdMenuLastFocusableElements[amberdMenuLastFocusableElements.length - 1];
  var amberdLastFocusEl = amberdMenuLastSamurai.querySelector('button.amberd-submenu-button:not([disabled])');
  }

  const amberdHandleMenuFocus = e => {
    e.preventDefault();
    if (amberdMenuFocusableElements.includes(e.target)) {
      amberdMenuCurrentFocusElement = e.target;
    } else {
      if ((amberdMenuCurrentFocusElement === amberdMenuFirstFocusableElement) && (JSON.stringify(amberdMenuLastParentA['attributes'].length) > 2)) {

        if (JSON.stringify(amberdLastFocusEl['classList'].length) > 2) {
          amberdMobileMenuLastSubA.focus();
        }
        else {
          amberdMenuLastParentA.focus();
        }
      }
      else if ((amberdMenuCurrentFocusElement === amberdMenuFirstFocusableElement) && (JSON.stringify(amberdMenuLastParentA['attributes'].length) <= 2)) {
        amberdMenuLastFocusableElement.focus();
      }
      else {
        amberdMenuFirstFocusableElement.focus();
      }
    }
  };
  document.addEventListener("focus", amberdHandleMenuFocus, true);
};
const amberdMenuToggleModal = ((e) => {
  const amberdmenumodal = document.getElementById("amberdmobilemenu");
  trapped = amberdMenuTrapFocus(amberdmenumodal);
})

/* Sliding text */
if (document.querySelector(".sliding-text ul") != null ) {
  const {children: subTitles} = document.querySelector(".sliding-text ul");
  const txtsLen = subTitles.length;
  let index = 0;
  const textInTimer = 3200;
  const textOutTimer = 3000;

  function animateText() {
    for (let i = 0; i < txtsLen; i++) {
      subTitles[i].classList.remove("text-in", "text-out");
    }
    subTitles[index].classList.add("text-in");

    setTimeout(function () {
      subTitles[index].classList.add("text-out");
    }, textOutTimer);

    setTimeout(function () {
      if (index == txtsLen - 1) {
        index = 0;
      } else {
        index++;
      }
      animateText();
    }, textInTimer);
  }

  window.onload = animateText;
}

/* Back to top button */
jQuery(function ($) {
  var amberdbtntop = $('#amberd-back-to-top-button');
  $(window).scroll(function () {
    if ($(window).scrollTop() > 200) {
      amberdbtntop.addClass('show');
    } else {
      amberdbtntop.removeClass('show');
    }
  });
  amberdbtntop.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '200');
  });
})