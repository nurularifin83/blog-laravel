// Validate text field
$(document).ready(function() {
    $('#myForm').validate({
        rules: {
            name: {
                required: true
            },
            email: {
                required: true
            },
            message: {
                required: true
            }
        },
        messages: {
            name: {
                required: ''
            },
            email: {
                required: ''
            },
            message: {
                required: ''
            }
        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});