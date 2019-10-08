/* ------------------------------------------------------------------------------
 *
 *  # Login form with validation
 *
 *  Demo JS code for login_validation.html page
 *
 * ---------------------------------------------------------------------------- */


// Setup module
// ------------------------------

var LoginValidation = function() {


    //
    // Setup module components
    //

    // Uniform
    var _componentUniform = function() {
        if (!$().uniform) {
            console.warn('Warning - uniform.min.js is not loaded.');
            return;
        }

        // Initialize
        $('.form-input-styled').uniform();
    };

    // Validation config
    var _componentValidation = function() {
        if (!$().validate) {
            console.warn('Warning - validate.min.js is not loaded.');
            return;
        }

        // Initialize
        var validator = $('.form-validate').validate({
            ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
            errorClass: 'validation-invalid-label',
            successClass: 'validation-valid-label',
            validClass: 'validation-valid-label',
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            success: function(label) {
                label.addClass('validation-valid-label').text('Correcto.'); // remove to hide Success message
            },

            // Different components require proper error label placement
            errorPlacement: function(error, element) {

                // Unstyled checkboxes, radios
                if (element.parents().hasClass('form-check')) {
                    error.appendTo( element.parents('.form-check').parent() );
                }

                // Input with icons and Select2
                else if (element.parents().hasClass('form-group-feedback') || element.hasClass('select2-hidden-accessible')) {
                    error.appendTo( element.parent() );
                }

                // Input group, styled file input
                else if (element.parent().is('.uniform-uploader, .uniform-select') || element.parents().hasClass('input-group')) {
                    error.appendTo( element.parent().parent() );
                }

                // Other elements
                else {
                    error.insertAfter(element);
                }
            },
            rules: {
                password: {
                    minlength: 4
                },
                password2: {
                    minlength: 4,
                    equalTo: '#password'
                },
                email: {
                    email: true
                },
                email2: {
                    equalTo: '#email'
                },
                dpto_checkbox: {
                    maxlength: 1
                },
            },
            messages: {
                username: 'Por favor, ingrese su usuario',
                password: {
                    required: 'Por favor, ingrese su clave',
                    minlength: jQuery.validator.format("Se requieren al menos {0} caracteres")
                },
                password2: {
                    required: 'Por favor, ingrese su clave',
                    minlength: jQuery.validator.format("Se requieren al menos {0} caracteres"),
                    equalTo: 'Las claves deben coincidir'
                },
                email2: {
                    email: 'Por favor, ingrese un email correcto',
                    equalTo: 'Los emails deben coincidir'
                },
                dpto_checkbox: {
                    required: 'Debe seleccionar un departamento',
                    maxlength: 'Debe seleccionar un sólo departamento',
                }
            }
        });
    };


    //
    // Return objects assigned to module
    //

    return {
        init: function() {
            _componentUniform();
            _componentValidation();
        }
    }
}();


// Initialize module
// ------------------------------

document.addEventListener('DOMContentLoaded', function() {
    LoginValidation.init();
});
