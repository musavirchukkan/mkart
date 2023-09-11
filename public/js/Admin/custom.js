/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";

// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.
    // It has the name attribute "registration"
    $("form[name='registration']").validate({
      // Specify validation rules
      rules: {
        // The key name on the left side is the name attribute
        // of an input field. Validation rules are defined
        // on the right side
        firstname: "required",
        lastname: "required",
        email: {
          required: true,
          // Specify that email should be validated
          // by the built-in "email" rule
          email: true
        },
        password: {
          required: true,
          minlength: 5
        }
      },
      // Specify validation error messages
      messages: {
        firstname: "Please enter your firstname",
        lastname: "Please enter your lastname",
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        email: "Please enter a valid email address"
      },
      // Make sure the form is submitted to the destination defined
      // in the "action" attribute of the form when valid
      submitHandler: function(form) {
        form.submit();
      }
    });





  });

  $(document).ready(function() {
    $("#basic-form").validate({
      rules: {
        name : {
          required: true,
          minlength: 3
        },
        age: {
          required: true,
          number: true,
          min: 18
        },
        email: {
          required: true,
          email: true
        },
        weight: {
          required: {
            depends: function(elem) {
              return $("#age").val() > 50
            }
          },
          number: true,
          min: 0
        }
      },
      messages : {
        name: {
          minlength: "Name should be at least 3 characters"
        },
        age: {
          required: "Please enter your age",
          number: "Please enter your age as a numerical value",
          min: "You must be at least 18 years old"
        },
        email: {
          email: "The email should be in the format: abc@domain.tld"
        },
        weight: {
          required: "People with age over 50 have to enter their weight",
          number: "Please enter your weight as a numerical value"
        }
      }
    });
  });
