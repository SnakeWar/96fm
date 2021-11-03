// script suavizar scroll de rolagem com links de navegacao  
$('.scroll a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top;

    $('html, body').animate({
        scrollTop: targetOffset - 250
    }, 500);
});


// script carregamento de pagina
$(window).on('load', function() {
    $('#preloader .inner').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });

   // $('#newsletter-input').mask("(99) 99999-9999");
})

// script reduzir altura do navegador quando usar scroll de rolagem  
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
        $('.navegador').addClass('sticky');
    } else {
        $('.navegador').removeClass('sticky');
    }
});

//script pegar videos do youtube
// Canal do youtube
var channelID = "UCPvUFqjcgSQ_CIiZn_DqQMQ";
var reqURL = "https://www.youtube.com/feeds/videos.xml?channel_id=";

// Video 1
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[0].link;
   var title = data.items[0].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   //console.log("teste id",id);
   //console.log("teste link",link);
   //console.log("teste title",title);
   //console.log("teste image",image);
    $('#image_video1').attr("src",image);
    $('.text_video1').html(title);
    //$("#link_video1").attr("href", "https://www.youtube.com/watch?v="+id);
    //var a = document.getElementById('link_video1'); //or grab it by tagname etc
    //a.href = "https://www.youtube.com/watch?v="+id
   // $("a.link_video1").attr("href",link);
   $('#link_video1').attr("href",link);
    $("#youtube_video1").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});

// Video 2
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[1].link;
   var title = data.items[1].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   $('#image_video2').attr("src",image);
   $('.text_video2').html(title);
    $('#link_video2').attr("href",link);
$("#youtube_video2").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});

// Video 3
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[2].link;
   var title = data.items[2].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   $('#image_video3').attr("src",image);
   $('.text_video3').html(title);
    $('#link_video3').attr("href",link);
$("#youtube_video3").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});

// Video 4
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[3].link;
   var title = data.items[3].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   $('#image_video4').attr("src",image);
   $('.text_video4').html(title);
    $('#link_video4').attr("href",link);
$("#youtube_video4").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});

// Video 5
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[4].link;
   var title = data.items[4].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   $('#image_video5').attr("src",image);
   $('.text_video5').html(title);
    $('#link_video5').attr("href",link);
$("#youtube_video5").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});

// Video 6
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[5].link;
   var title = data.items[5].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   $('#image_video6').attr("src",image);
   $('.text_video6').html(title);
    $('#link_video6').attr("href",link);
$("#youtube_video6").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});

// Video 7
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[6].link;
   var title = data.items[6].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   $('#image_video7').attr("src",image);
   $('.text_video7').html(title);
    $('#link_video7').attr("href",link);
$("#youtube_video7").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});

// Video 8
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[7].link;
   var title = data.items[7].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   $('#image_video8').attr("src",image);
   $('.text_video8').html(title);
    $('#link_video8').attr("href",link);
$("#youtube_video8").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});

// Video 9
$.getJSON("https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(reqURL)+channelID, function(data) {
   var link = data.items[8].link;
   var title = data.items[8].title;
   var id = link.substr(link.indexOf("=")+1);
   var image = "https://img.youtube.com/vi/"+id+"/0.jpg";
   $('#image_video9').attr("src",image);
   $('.text_video9').html(title);
    $('#link_video9').attr("href",link);
$("#youtube_video9").attr("src","https://youtube.com/embed/"+id + "?controls=2&showinfo=0&rel=0");
});