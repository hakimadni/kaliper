"use strict";
var KTSigninGeneral = (function () {
    var t, e, i;
    return {
        init: function () {
            (t = document.querySelector("#kt_sign_in_form")),
                (e = document.querySelector("#kt_sign_in_submit")),
                (i = FormValidation.formValidation(t, {
                    fields: {
                        email: {
                            validators: {
                                notEmpty: {
                                    message: "Email address is required",
                                },
                                emailAddress: {
                                    message:
                                        "The value is not a valid email address",
                                },
                            },
                        },
                        password: {
                            validators: {
                                notEmpty: {
                                    message: "The password is required",
                                },
                            },
                        },
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                        }),
                    },
                })),
                
                e.addEventListener("click", function (n) {
                    n.preventDefault(),
                        i.validate().then(function (i) {
                            if (i === "Valid") {
                                e.setAttribute("data-kt-indicator", "on");
                                e.disabled = true;
                            
                                var form = document.getElementById("kt_sign_in_form");
                            
                                $.ajax({
                                    url: form.action,
                                    type: "POST",
                                    data: $(form).serialize(), // Wrap form with $(...) to create a jQuery object
                                    beforeSend: function (xhr) {
                                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                                    },
                                    success: function (response) {
                                        if (response.success) {
                                            // Login successful
                                            Swal.fire({
                                                text: "You have successfully logged in!",
                                                icon: "success",
                                                buttonsStyling: false,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary",
                                                },
                                            }).then(function (result) {
                                                if (result.isConfirmed) {
                                                    window.location.href = '/dashboard';
                                                }
                                            });
                                        } else {
                                            // Login failed
                                            Swal.fire({
                                                html: "Your email or password is wrong!<br>If you have not registered yet, please click Create an account!",
                                                icon: "error",
                                                buttonsStyling: false,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: {
                                                    confirmButton: "btn btn-primary",
                                                },
                                            });
                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        // Error occurred while making the login request
                                        Swal.fire({
                                            text: "An error occurred. Please try again.",
                                            icon: "error",
                                            buttonsStyling: false,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary",
                                            },
                                        });
                                    },
                                    complete: function () {
                                        e.removeAttribute("data-kt-indicator");
                                        e.disabled = false;
                                    }
                                });
                            } else {
                                Swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary",
                                    },
                                });
                            }
                            
                        });
                });
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
