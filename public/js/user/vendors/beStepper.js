"use strict";
var stepperForm;
$("#stepperForm").length &&
    document.addEventListener("DOMContentLoaded", function () {
        stepperForm = new Stepper(document.querySelector("#stepperForm"), {
            linear: !1,
            animation: !0,
        });
    });
