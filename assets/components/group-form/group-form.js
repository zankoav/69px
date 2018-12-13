import './group-form.scss';
import $ from 'jquery';

$('.group-form__input')
    .on('focus', function () {
        $(this).parent().addClass('group-form_active');
    }).on('blur', function () {
    if ($(this).val() === '') {
        $(this).parent().removeClass('group-form_active');
    }
});

