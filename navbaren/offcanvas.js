$(function () {
    'use strict'
  
    $('[data-toggle="offcanvas"]').on('click', function () {
      $('.offcanvas-collapse').toggleClass('open'),
      $('.hamburger').toggleClass('is-active')
    })
  })

