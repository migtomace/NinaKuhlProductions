$(document).ready(function () {
    var prev = "#home";
    $(prev).show();
    $('#about').hide();
    $('#movies').hide();
    $('#talents').hide();
    $('#events').hide();
    $('#exchange').hide();
    $('#contact').hide();

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
});