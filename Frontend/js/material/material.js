[].map.call(document.querySelectorAll('.foo-button'), function (el) {
    return new mdc.ripple.MDCRipple(el);
});

[].map.call(document.querySelectorAll('.mdc-text-field'), function (el) {
    return new mdc.textField.MDCTextField(el);
});
