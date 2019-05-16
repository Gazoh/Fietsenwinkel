[].map.call(document.querySelectorAll('.foo-button'), function(el) {
    return new mdc.ripple.MDCRipple(el);
});