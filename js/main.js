$(document).ready(function () {

    //On page load this hides all main sections except for the home
    var prev = "#home";
    $(prev).show();
    $('#about').hide();
    $('#movies').hide();
    $('#talents').hide();
    $('#events').hide();
    $('#exchange').hide();
    $('#contact').hide();

    //tells the page what sections to show when nav items are clicked
    $('#homeButton').click(function () {
        $(prev).hide().fadeOut('slow');
        $('#home').show().fadeIn('slow');
        document.title = "Home";
        prev = "#home";
    });
    $('#aboutButton').click(function () {
        $(prev).hide().fadeOut('slow');
        $('#about').show().fadeIn('slow');
        document.title = "About";
        prev = "#about";
    });
    $('#moviesButton').click(function () {
        $(prev).hide().fadeOut('slow');
        $('#movies').show().fadeIn('slow');
        document.title = "Movies";
        prev = "#movies";
    });
    $('#talentsButton').click(function () {
        $(prev).hide().fadeOut('slow');
        $('#talents').show().fadeIn('slow');
        document.title = "Talents";
        prev = "#talents";
    });
    $('#eventsButton').click(function () {
        $(prev).hide().fadeOut('slow');
        $('#events').show().fadeIn('slow');
        document.title = "Events";
        prev = "#events";
    });
    $('#exchangeButton').click(function () {
        $(prev).hide().fadeOut('slow');
        $('#exchange').show().fadeIn('slow');
        document.title = "Kuhl Exchange";
        prev = "#exchange";
    });
    $('#contactButton').click(function () {
        $(prev).hide().fadeOut('slow');
        $('#contact').show().fadeIn('slow');
        document.title = "Contact";
        prev = "#contact";
    });


    //checks screen size every time the navbar is click
    //and collapses the navbar on small screens when an item is clicked
    $('.nav a').on('click', function () {
        if (screen.width <= 768){
            $('.nav a').on('click', function(){
                $('.navbar-toggle').click(); //bootstrap 3.x by Richard
            });
        }
    });

    //collapses the navbar on small screens when an item is clicked
    //this code is necessary so that the navbar will collapse on the first click
    if (screen.width <= 768){
        $('.nav a').on('click', function(){
            $('.navbar-toggle').click(); //bootstrap 3.x by Richard
        });
    }


});