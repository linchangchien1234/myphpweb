jQuery(document).ready(function($) {
    movie1 = $('#movieBox1');
    movie2 = $('#movieBox2');
    cartoonBox1 = $('#cartoonBox1');
    cartoonBox2 = $('#cartoonBox2');
    discoveryBox1 = $('#discoveryBox1');
    discoveryBox2 = $('#discoveryBox2');
    travelBox1 = $('#travelBox1');
    travelBox2 = $('#travelBox2');
    travelBox3 = $('#travelBox3');
    travelBox4 = $('#travelBox4');
    $("#movie1").click(function() {
        movie1.css({display: 'block'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'none'});
    });
    $("#movie2").click(function() {
        movie1.css({display: 'none'});
        movie2.css({display: 'block'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'none'});
    });
    $("#cartoon1").click(function() {
        movie1.css({display: 'none'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'block'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'none'});
    });
    $("#cartoon2").click(function() {
        movie1.css({display: 'none'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'block'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'none'});
    });
    $("#discovery1").click(function() {
        movie1.css({display: 'none'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'block'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'none'});
    });
    $("#discovery2").click(function() {
        movie1.css({display: 'none'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'block'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'none'});
    });
    $("#travel1").click(function() {
        movie1.css({display: 'none'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'block'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'none'});
    });
    $("#travel2").click(function() {
         movie1.css({display: 'none'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'block'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'none'});
    });
    $("#travel3").click(function() {
        movie1.css({display: 'none'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'block'});
        travelBox4.css({display: 'none'});
    });
    $("#travel4").click(function() {
        movie1.css({display: 'none'});
        movie2.css({display: 'none'});
        cartoonBox1.css({display: 'none'});
        cartoonBox2.css({display: 'none'});
        discoveryBox1.css({display: 'none'});
        discoveryBox2.css({display: 'none'});
        travelBox1.css({display: 'none'});
        travelBox2.css({display: 'none'});
        travelBox3.css({display: 'none'});
        travelBox4.css({display: 'block'});
    });

    //手機按鈕2層show()跟hidden()
    if(window.outerWidth <= 767){
       $('#movieBtn').click(function() {
            $('#navMovie').css({display: 'block'});
            $('#navCartoon').css({display: 'none'});
            $('#navDiscovery').css({display: 'none'});
            $('#navTravel').css({display: 'none'});
        });
        $('#cartoonBtn').click(function() {
            $('#navMovie').css({display: 'none'});
            $('#navCartoon').css({display: 'block'});
            $('#navDiscovery').css({display: 'none'});
            $('#navTravel').css({display: 'none'});
        });
        $('#discoveryBtn').click(function() {
            $('#navMovie').css({display: 'none'});
            $('#navCartoon').css({display: 'none'});
            $('#navDiscovery').css({display: 'block'});
            $('#navTravel').css({display: 'none'});
        });
        $('#travelBtn').click(function() {
            $('#navMovie').css({display: 'none'});
            $('#navCartoon').css({display: 'none'});
            $('#navDiscovery').css({display: 'none'});
            $('#navTravel').css({display: 'block'});
        });
    }    
    
});