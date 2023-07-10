"use strict";

var KTSignupGeneral = (function () {
  var form, submitButton, passwordMeter, fv;

  var isPasswordValid = function () {
    var password = form.querySelector('input[name="password"]').value;
    var confirmPassword = form.querySelector('input[name="password_confirmation"]').value;
    return password === confirmPassword;
  };

  var initValidation = function () {
    fv = FormValidation.formValidation(form, {
      fields: {
        first_name: {
          validators: {
            notEmpty: {
              message: "First Name is required",
            },
          },
        },
        last_name: {
          validators: {
            notEmpty: {
              message: "Last Name is required",
            },
          },
        },
        email: {
          validators: {
            notEmpty: {
              message: "Email address is required",
            },
            emailAddress: {
              message: "The value is not a valid email address",
            },
            remote: {
                url: "/check-email-availability",
                type: "GET",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: function () {
                    return {
                        email: form.querySelector('input[name="email"]').value,
                    };
                },
                beforeSend: function(xhr){
                    xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                },
            },
                                     
          },
        },
        password: {
          validators: {
            notEmpty: {
              message: "The password is required",
            },
            callback: {
              message: "Please enter a valid password",
              callback: function (input) {
                if (input.value.length > 0) {
                  return isPasswordValid();
                }
              },
            },
          },
        },
        password_confirmation: {
          validators: {
            notEmpty: {
              message: "The password confirmation is required",
            },
            identical: {
              compare: function () {
                return form.querySelector('input[name="password"]').value;
              },
              message: "The password and its confirm are not the same",
            },
          },
        },
        toc: {
          validators: {
            notEmpty: {
              message: "You must accept the terms and conditions",
            },
          },
        },
      },
      plugins: {
        trigger: new FormValidation.plugins.Trigger({
          event: {
            password: false,
          },
        }),
        bootstrap: new FormValidation.plugins.Bootstrap5({
          rowSelector: ".fv-row",
          eleInvalidClass: "",
          eleValidClass: "",
        }),
      },
    });

    submitButton.addEventListener("click", function (event) {
        event.preventDefault();
  
        fv.revalidateField("password");
        fv.validate().then(function (status) {
          if (status === "Valid") {
            submitButton.setAttribute("data-kt-indicator", "on");
            submitButton.disabled = true;
  
            // Disable form submission while processing the registration
            form.addEventListener("submit", function (event) {
              event.preventDefault();
            });
  
            $.ajax({
                url: form.action,
                type: "POST",
                data: $(form).serialize(), // Wrap form with $(...) to create a jQuery object
                beforeSend: function (xhr) {
                  xhr.setRequestHeader('X-CSRF-TOKEN', $('meta[name="csrf-token"]').attr('content'));
                },
                success: function (response) {
                  submitButton.removeAttribute("data-kt-indicator");
                  submitButton.disabled = false;
              
                  if (response.success) {
                    // Registration success
                    Swal.fire({
                      text: "You have successfully created your account!",
                      icon: "success",
                      buttonsStyling: false,
                      confirmButtonText: "Ok, got it!",
                      customClass: {
                        confirmButton: "btn btn-primary",
                      },
                    }).then(function (result) {
                      if (result.isConfirmed) {
                        form.reset();
                        passwordMeter.reset();
                        window.location.href = '/dashboard'; // Redirect to /dashboard
                      }
                    });
                  } else {
                    // Registration error
                    Swal.fire({
                      title: "Error!",
                      text: response.message,
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
                    Swal.fire({
                        title: textStatus,
                        text: errorThrown,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                          confirmButton: "btn btn-primary",
                        },
                      });
                  console.log(textStatus, errorThrown);
                  submitButton.removeAttribute("data-kt-indicator");
                  submitButton.disabled = false;
                },
              });
              
          }
        });
      });

    form
      .querySelector('input[name="password"]')
      .addEventListener("keyup", function () {
        if (this.value.length > 0) {
          fv.updateFieldStatus("password", "NotValidated");
        }
      });
  };

  return {
    init: function () {
      form = document.querySelector("#kt_sign_up_form");
      submitButton = document.querySelector("#kt_sign_up_submit");
      passwordMeter = KTPasswordMeter.getInstance(
        form.querySelector('[data-kt-password-meter="true"]')
      );

      initValidation();
    },
  };
})();

KTUtil.onDOMContentLoaded(function () {
  KTSignupGeneral.init();
});
