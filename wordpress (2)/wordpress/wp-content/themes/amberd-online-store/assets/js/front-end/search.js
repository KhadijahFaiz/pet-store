document.getElementById("amberdwidesearchbutton").addEventListener("click", function(){
    setTimeout(function() { jQuery('#amberdfocusonoverlayinputwide').focus() }, 50);
});
const amberdTrapFocus = (element, prevFocusableElement = document.activeElement) => {
    const amberdFocusableElements = Array.from(
    element.querySelectorAll(
    'a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input[type="search"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled])'
    )
    );
    const amberdFirstFocusableElement = amberdFocusableElements[0];
    const amberdLastFocusableElement = amberdFocusableElements[amberdFocusableElements.length - 1];
    let amberdCurrentFocusElement = null;

    amberdFirstFocusableElement.focus();
    amberdCurrentFocusElement = amberdFirstFocusableElement;

    const amberdHandleFocus = e => {
    e.preventDefault();
    if (amberdFocusableElements.includes(e.target)) {
        amberdCurrentFocusElement = e.target;
    } else {
    if (amberdCurrentFocusElement === amberdFirstFocusableElement) {
        amberdLastFocusableElement.focus();
    } else {
        amberdFirstFocusableElement.focus();
    }
    amberdCurrentFocusElement = document.activeElement;
    }
    };
    document.addEventListener("focus", amberdHandleFocus, true);
    return {
    onClose: () => {
    document.removeEventListener("focus", amberdHandleFocus, true);
    prevFocusableElement.focus();
    }
    };
    };
    const amberdToggleModal = ((e) => {
    const amberdmodal = document.getElementById("amberdModalContainer");
    if (amberdmodal.classList != ('amberd-search-overlay-show-on-click')) {
    amberdmodal.classList.toggle("amberd-search-overlay-show-on-click");
    trapped = amberdTrapFocus(amberdmodal);
    } else {
    trapped.onClose();
    } 
})

/* Search Overlay for mobile devices */
document.getElementById("amberdsmallsearchbutton").addEventListener("click", function(){
    setTimeout(function() { jQuery('#amberdfocusonoverlayinputsmall').focus() }, 50);
});

const amberdTrapFocusSmall = (element, prevFocusableElement = document.activeElement) => {
    const amberdFocusableElements = Array.from(
    element.querySelectorAll(
      'a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input[type="search"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled])'
    )
    );
    const amberdFirstFocusableElement = amberdFocusableElements[0];
    const amberdLastFocusableElement = amberdFocusableElements[amberdFocusableElements.length - 1];
    let amberdCurrentFocusElement = null;
    
    amberdFirstFocusableElement.focus();
    amberdCurrentFocusElement = amberdFirstFocusableElement;
    
    const amberdHandleFocus = e => {
    e.preventDefault();
    if (amberdFocusableElements.includes(e.target)) {
        amberdCurrentFocusElement = e.target;
    } else {
      if (amberdCurrentFocusElement === amberdFirstFocusableElement) {
        amberdLastFocusableElement.focus();
      } else {
        amberdFirstFocusableElement.focus();
      }
      amberdCurrentFocusElement = document.activeElement;
    }
    };
    document.addEventListener("focus", amberdHandleFocus, true);
    return {
    onClose: () => {
      document.removeEventListener("focus", amberdHandleFocus, true);
      prevFocusableElement.focus();
    }
    };
    };
    
    const amberdToggleModalSmall = ((e) => {
    const amberdmodalsmall = document.getElementById("amberdModalContainerSmall");
    if (amberdmodalsmall.classList != ('amberd-search-overlay-show-on-click')) {
    amberdmodalsmall.classList.toggle("amberd-search-overlay-show-on-click");
    trapped = amberdTrapFocusSmall(amberdmodalsmall);
    } else {
    trapped.onClose();
    } 
})