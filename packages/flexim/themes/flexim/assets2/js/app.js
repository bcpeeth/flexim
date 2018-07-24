import '../scss/style.scss';
import $ from 'jquery';
import 'imports-loader?$=jquery!owl.carousel';
import 'imports-loader?$=jquery!jquery-match-height';

import objectFitImages from 'object-fit-images';

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        items: 3,
        responsive: {
            575: {
                items: 3,
            },
            160: {
                items: 1,
            },
        },
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    });

    document.querySelector('.header__hbgr a').addEventListener('click', (event) => {
        event.preventDefault();
        $('.header__nav').slideToggle(170);
    });

    const hideNavIfNeeded = () => {
        if ($(window).width() > 575) {
            $('.header__nav').show();
        } else {
            $('.header__nav').hide();
        }
    };

    hideNavIfNeeded();
    window.addEventListener('resize', hideNavIfNeeded);

    var acc = document.getElementsByClassName("question");
    var i = 0;

    for (i = 0; i < acc.length; i += 1) {
        acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
            panel.style.maxHeight = null;
            panel.classList.remove('open');
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            panel.classList.add('open');
            collapseOthers(this);
        } 
        });
    }

    function collapseOthers(clickedAccor) {
        var accs = document.getElementsByClassName("question");
        for (var i = 0; i < accs.length; i++) {
            if (acc[i] != clickedAccor) {
               accs[i].nextElementSibling.style.maxHeight = null;
               accs[i].nextElementSibling.classList.remove('open');
            }
        }
    }
 

    $(function() {
        $('.question').click(function() {
           $('.question').removeClass('active');
           var el = $(this);

           if (el.parent().find('.panel').hasClass('open') === true) {
            el.addClass('active');
           }
        }) 
    })

    $('.match-height').matchHeight({});

    $(function() { objectFitImages() });
    
});



