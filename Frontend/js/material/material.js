// Ripple effect button
[].map.call(document.querySelectorAll('.foo-button'), function (el) {
    return new mdc.ripple.MDCRipple(el);
});

// Textfield
// mdc.textField.MDCTextField.attachTo(document.querySelector('.mdc-text-field'));
[].map.call(document.querySelectorAll('.mdc-text-field'), function (el) {
    return new mdc.textField.MDCTextField(el);
});

// Checkbox
[].map.call(document.querySelectorAll('.mdc-checkbox'), function (el) {
    return new mdc.checkbox.MDCCheckbox(el);
});

// Slider
[].map.call(document.querySelectorAll('.mdc-slider'), function (el) {
    return new mdc.slider.MDCSlider(el);
});

// Tab-bar\
[].map.call(document.querySelectorAll('.mdc-list'), function (el) {
    return new mdc.list.MDCList(el);
});