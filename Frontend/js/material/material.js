[].map.call(document.querySelectorAll('.foo-button'), function (el) {
    return new mdc.ripple.MDCRipple(el);
});

mdc.textField.MDCTextField.attachTo(document.querySelector('.mdc-text-field'));