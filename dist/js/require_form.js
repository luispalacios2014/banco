/**
 * Created by luis on 22/03/2016.
 */

    $( document ).ready( function () {
        $( "#signupForm1" ).validate( {
            rules: {
                identificacion: "required",
                apellido: "required",
                nombre: {
                    required: true,
                    minlength: 2
                },
                contrasena: {
                    required: true,
                    minlength: 5
                },
                confirmar_contrasena: {
                    required: true,
                    minlength: 5,
                    equalTo: "#contrasena"
                },
                correo: {
                    required: true,
                    email: true
                },
                salario:{
                    required: true,
                    minlength: 5
                },
                fecha: "required",
            },
            messages: {
                identificacion: "Por favor, introdusca una identificaci&oacute;n",
                apellido: "Por favor, ingrese su apellido",
                nombre: {
                    required: "Por favor, ingrese un nombre de usuario",
                    minlength: "Su nombre de usuario debe tener al menos 2 caracteres"
                },
                contrasena: {
                    required: "Por favor, ingrese su contraseña",
                    minlength: "Su contraseña debe tener al menos 5 caracteres"
                },
                confirmar_contrasena: {
                    required: "Por favor ingrese su contraseña",
                    minlength: "Su contraseña debe tener al menos 5 caracteres",
                    equalTo: "Por favor, introduzca la misma contraseña que arriba"
                },
                salario:{
                    required: "Por favor, ingrese el salario",
                    minlength: "El salario debe tener al menos 5 Digitos"
                },
                correo:"Por favor, introduce una dirección de correo electrónico válida",
                fecha:"Por favor, introduce una fecha",
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                error.addClass( "help-block" );

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                element.parents( ".col-sm-4" ).addClass( "has-feedback" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if ( !element.next( "span" )[ 0 ] ) {
                    $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                }
            },
            success: function ( label, element ) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if ( !$( element ).next( "span" )[ 0 ] ) {
                    $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                }
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".col-sm-4" ).addClass( "has-error" ).removeClass( "has-success" );
                $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
            },
            unhighlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".col-sm-4" ).addClass( "has-success" ).removeClass( "has-error" );
                $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
            }
        } );
    } );
