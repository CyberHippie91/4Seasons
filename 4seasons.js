



$(document).ready(function() {                       //run when the DOM is ready
  $(".navbar").click(function() {  //use a class, since your ID gets mangled
    $(this).toggleClass("navbar-collapse-custom");      //add the class to the clicked element

  });

     var $animation_elements = $('.animation-element');
     var $window = $(window);

     function check_if_in_view() {
         var window_height = $window.height();
         var window_top_position = $window.scrollTop();
         var window_bottom_position = (window_top_position + window_height);

         $.each($animation_elements, function() {
             var $element = $(this);
             var element_height = $element.outerHeight();
             var element_top_position = $element.offset().top;
             var element_bottom_position = (element_top_position + element_height);

             //check to see if this current container is within viewport
             if ((element_bottom_position >= window_top_position) &&
                 (element_top_position <= window_bottom_position)) {
                 $element.addClass('in-view');
             } else {
                 $element.removeClass('in-view');
             }
         });
     }

     $window.on('scroll resize', check_if_in_view);
     $window.trigger('scroll');
});
var TxtRotate = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 50) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 150 - Math.random() * 10;

    if (this.isDeleting) { delta /= 4; }

    if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 700;
    }

    setTimeout(function() {
        that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('txt-rotate');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
            new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid white }";
    document.body.appendChild(css);
};

$(function() {
    //get the welcome msg element
    var $all_msg = $('#welcome_msg');
    //get a list of letters from the welcome text
    var $wordList = $('#welcome_msg').text().split("");
    //clear the welcome text msg
    $('#welcome_msg').text("");
    //loop through the letters in the $wordList array
    $.each($wordList, function(idx, elem) {
        //create a span for the letter and set opacity to 0
        var newEL = $("<span/>").text(elem).css({
            opacity: 0
        });
        //append it to the welcome message
        newEL.appendTo($all_msg);
        //set the delay on the animation for this element
        newEL.delay(idx * 500);
        //animate the opacity back to full 1
        newEL.animate({
            opacity: 1
        }, 1100);
    });

});
$(function() {
    //get the welcome msg element
    var $all_msg = $('#partytext');
    //get a list of letters from the welcome text
    var $wordList = $('#partytext').text().split("");
    //clear the welcome text msg
    $('#partytext').text("");
    //loop through the letters in the $wordList array
    $.each($wordList, function(idx, elem) {
        //create a span for the letter and set opacity to 0
        var newEL = $("<span/>").text(elem).css({
            opacity: 0
        });
        //append it to the welcome message
        newEL.appendTo($all_msg);
        //set the delay on the animation for this element
        newEL.delay(idx * 150);
        //animate the opacity back to full 1
        newEL.animate({
            opacity: 1
        }, 400);
    });

});

$(function() {
    //get the welcome msg element
    var $all_msg = $('#partytext1');
    //get a list of letters from the welcome text
    var $wordList = $('#partytext1').text().split("");
    //clear the welcome text msg
    $('#partytext1').text("");
    //loop through the letters in the $wordList array
    $.each($wordList, function(idx, elem) {
        //create a span for the letter and set opacity to 0
        var newEL = $("<span/>").text(elem).css({
            opacity: 0
        });
        //append it to the welcome message
        newEL.appendTo($all_msg);
        //set the delay on the animation for this element
        newEL.delay(idx * 80);
        //animate the opacity back to full 1
        newEL.animate({
            opacity: 1
        }, 100);
    });

});
$(function() {
    //get the welcome msg element
    var $all_msg = $('#gallerytitle');
    //get a list of letters from the welcome text
    var $wordList = $('#gallerytitle').text().split("");
    //clear the welcome text msg
    $('#gallerytitle').text("");
    //loop through the letters in the $wordList array
    $.each($wordList, function(idx, elem) {
        //create a span for the letter and set opacity to 0
        var newEL = $("<span/>").text(elem).css({
            opacity: 0
        });
        //append it to the welcome message
        newEL.appendTo($all_msg);
        //set the delay on the animation for this element
        newEL.delay(idx * 500);
        //animate the opacity back to full 1
        newEL.animate({
            opacity: 1
        }, 1100);
    });

});

$(function() {
    //get the welcome msg element
    var $all_msg = $('#eventstitle');
    //get a list of letters from the welcome text
    var $wordList = $('#eventstitle').text().split("");
    //clear the welcome text msg
    $('#eventstitle').text("");
    //loop through the letters in the $wordList array
    $.each($wordList, function(idx, elem) {
        //create a span for the letter and set opacity to 0
        var newEL = $("<span/>").text(elem).css({
            opacity: 0
        });
        //append it to the welcome message
        newEL.appendTo($all_msg);
        //set the delay on the animation for this element
        newEL.delay(idx * 500);
        //animate the opacity back to full 1
        newEL.animate({
            opacity: 1
        }, 1100);
    });

});




