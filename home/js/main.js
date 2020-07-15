// set main variables

let theInput = document.querySelector(".add-task input");
let theAddButton = document.querySelector(".add-task .plus");
let tasksContainer = document.querySelector(".tasks-content");
let tasksCount = document.querySelector(".tasks-count span");
let tasksCompleted = document.querySelector(".tasks-completed span");

// focus on input

window.onload = function () {
  theInput.focus();
};

// adding the task

// home js

$(document).ready(function () {
  // nav toggler

  var navToggler = $(".nav-toggler"),
    aSide = $(".aside");

  navToggler.on("click", function () {
    aSide.toggleClass("open");
    $(this).toggleClass("btntoggle");
  });

  // change class active

  $(".nav li a ").on("click", function () {
    $(".nav li a").removeClass("active");
    $(this).addClass("active");
  });

  $(".nav li a:eq(0) ").on("click", function () {
    $(".all-container").removeClass("hidden");
    $(".all-container").fadeIn("slow");
    $(".tasks-stats").removeClass("hidden");
    $(".tasks-stats").fadeIn("slow");
    $(".change").addClass("hidden");
  });

  $(".nav li a:eq(1) ").on("click", function () {
    $(".change").removeClass("hidden");
    $(".change").fadeIn("slow");
    $(".all-container").addClass("hidden");
    $(".tasks-stats").addClass("hidden");
  });

  // body skin
  var bodyskin = document.querySelectorAll(".body-skin");

  for (var i = 0; i < bodyskin.length ; i++) {

      bodyskin[i].addEventListener("click", function() {

          if (this.value === "dark") {

              $("body").addClass("dark");
              $("body").css("background", "#151515");

          } else {

              $("body").removeClass("dark");
              $("body").css("background", "#FFFFFF");

          }

      })

  }


  // toggle style switcher

  $(".toggle-style-switcher").on("click", function() {

      $(".style-switcher").toggleClass("styleopen");

  });

  $(window).on("load", function() {

    $("body").addClass("dark");
    $("body").css("background", "#151515");

  })


});