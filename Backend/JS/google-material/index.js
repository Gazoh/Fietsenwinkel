[].map.call(document.querySelectorAll('.foo-button'), function (el) {
    return new mdc.ripple.MDCRipple(el);
});

// Textfield
// mdc.textField.MDCTextField.attachTo(document.querySelector('.mdc-text-field'));
[].map.call(document.querySelectorAll('.mdc-text-field'), function (el) {
    return new mdc.textField.MDCTextField(el);
});

// Select
[].map.call(document.querySelectorAll('.mdc-select'), function (el) {
    return new mdc.select.MDCSelect(el);
});

// Checkbox
[].map.call(document.querySelectorAll('.mdc-checkbox'), function (el) {
    return new mdc.checkbox.MDCCheckbox(el);
});
