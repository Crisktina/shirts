(function ($) {
  "use strict";

  var initProductQty = function () {
    $(".product-qty").each(function () {
      var $el_product = $(this);
      var quantity = 0;

      $el_product.find(".quantity-right-plus").click(function (e) {
        e.preventDefault();
        var quantity = parseInt($el_product.find("#quantity").val());
        $el_product.find("#quantity").val(quantity + 1);
      });

      $el_product.find(".quantity-left-minus").click(function (e) {
        e.preventDefault();
        var quantity = parseInt($el_product.find("#quantity").val());
        if (quantity > 0) {
          $el_product.find("#quantity").val(quantity - 1);
        }
      });
    });
  };

  $(document).ready(function () {
    initProductQty();

    var swiper = new Swiper(".main-swiper", {
      speed: 500,
      navigation: {
        nextEl: ".swiper-arrow-prev",
        prevEl: ".swiper-arrow-next",
      },
    });

    var swiper = new Swiper(".product-swiper", {
      slidesPerView: 4,
      spaceBetween: 10,
      pagination: {
        el: "#mobile-products .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        980: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },
    });

    var swiper = new Swiper(".product-watch-swiper", {
      slidesPerView: 4,
      spaceBetween: 10,
      pagination: {
        el: "#smart-watches .swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        0: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        980: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      },
    });
  }); // End of a document ready
})(jQuery);

document.addEventListener("DOMContentLoaded", function () {
  console.log("El script.js se ha cargado correctamente.");
  // Obtener el formulario
  const formRegister = document.getElementById("signupForm");

  // Agregar el evento submit al formulario de REGISTRO
  formRegister.addEventListener("submit", function (event) {
    console.log("Intento de envío del formulario");

    let isValid = true;

    // Obtener los valores de los campos
    let nickname = document.getElementById("uidname").value.trim();
    let fullname = document.getElementById("fullname").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("pwd").value.trim();
    let repeatPassword = document.getElementById("repeatPwd").value.trim();

    // Expresión regular para validar el correo electrónico
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    // Limpiar mensajes de error previos
    let inputs = document.querySelectorAll(".form-control");
    let errors = document.querySelectorAll(".invalid-feedback");

    // Limpiar las clases de error
    inputs.forEach((input) => input.classList.remove("is-invalid"));
    errors.forEach((error) => (error.innerText = ""));

    // Validar el campo "Nickname"
    if (nickname === "") {
      document.getElementById("uidname").classList.add("is-invalid");
      document.getElementById("uidname-error").innerText =
        "Por favor ingresa un nickname.";
      isValid = false;
    }

    // Validar el campo "Nombre completo"
    if (fullname === "") {
      document.getElementById("fullname").classList.add("is-invalid");
      document.getElementById("fullname-error").innerText =
        "Por favor ingresa tu nombre completo.";
      isValid = false;
    }

    // Validar el campo "Email"
    if (email === "") {
      document.getElementById("email").classList.add("is-invalid");
      document.getElementById("email-error").innerText =
        "Por favor ingresa un email.";
      isValid = false;
    } else if (!emailPattern.test(email)) {
      document.getElementById("email").classList.add("is-invalid");
      document.getElementById("email-error").innerText =
        "Por favor ingresa un email válido.";
      isValid = false;
    }

    // Validar el campo "Contraseña"
    if (password === "") {
      document.getElementById("pwd").classList.add("is-invalid");
      document.getElementById("pwd-error").innerText =
        "Por favor ingresa una contraseña.";
      isValid = false;
    }

    // Validar que las contraseñas coincidan
    if (password !== repeatPassword) {
      document.getElementById("repeatPwd").classList.add("is-invalid");
      document.getElementById("repeatPwd-error").innerText =
        "Las contraseñas no coinciden.";
      isValid = false;
    }

    // Si el formulario no es válido, prevenir el envío
    if (!isValid) {
      console.log("Formulario inválido, evitando envío");
      event.preventDefault(); // Evitar el envío del formulario
    } else {
      console.log("Formulario válido, enviando");
    }
  });
  // Agregar el evento submit al formulario de LOGIN
  formRegister.addEventListener("submit", function (event) {
    console.log("Intento de envío del formulario");

    let isValid = true;

    // Obtener los valores de los campos
    let nickname = document.getElementById("uidname").value.trim();
    let password = document.getElementById("pwd").value.trim();

    // Limpiar mensajes de error previos
    let inputs = document.querySelectorAll(".form-control");
    let errors = document.querySelectorAll(".invalid-feedback");

    // Limpiar las clases de error
    inputs.forEach((input) => input.classList.remove("is-invalid"));
    errors.forEach((error) => (error.innerText = ""));

    // Validar el campo "Nickname"
    if (nickname === "") {
      document.getElementById("uidname").classList.add("is-invalid");
      document.getElementById("uidname-error").innerText =
        "Por favor ingresa un nickname.";
      isValid = false;
    }

    // Validar el campo "Contraseña"
    if (password === "") {
      document.getElementById("pwd").classList.add("is-invalid");
      document.getElementById("pwd-error").innerText =
        "Por favor ingresa una contraseña.";
      isValid = false;
    }

    // Si el formulario no es válido, prevenir el envío
    if (!isValid) {
      console.log("Formulario inválido, evitando envío");
      event.preventDefault(); // Evitar el envío del formulario
    } else {
      console.log("Formulario válido, enviando");
    }
  });
});
