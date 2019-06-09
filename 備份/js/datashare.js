jQuery(document).ready(function($) {
    /*-----Movie-----*/
    $('#dataShare .nav li #movie').on('click', function() {
        $('.navChange #Movie,.navChange #Movie #movieBox1').css({
            visibility: 'visible'
        });
        $('.navChange #Movie #movieBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Cartoon,.navChange #Cartoon #cartoonBox1,.navChange #Cartoon #cartoonBox2').css({
            visibility: 'hidden'
        });

        $(' .navChange #Discovery ,.navChange #Discovery #discoveryBox1 ,.navChange #Discovery #discoveryBox2').css({
            visibility: 'hidden'
        });

        $(' .boxR.navChange #Travel,.navChange #Travel #travelBox1,.navChange #Travel #travelBox2,.navChange #Travel #travelBox3,.navChange #Travel #travelBox4').css({
            visibility: 'hidden'
        });
    });
    /*Movie內Menu*/
    
    $('.nav #Movie #movie1').on('click', function() {
        $('.navChange #Movie #movieBox1').css({
            visibility: 'visible'
        });
        $('.navChange #Movie #movieBox2').css({
            visibility: 'hidden'
        });
    });

    $('.nav #Movie #movie2').on('click', function() {
        $('.navChange #Movie #movieBox1').css({
            visibility: 'hidden'
        });
        $('.navChange #Movie #movieBox2').css({
            visibility: 'visible'
        });
    });
    /*-----Movie End-----*/

    /*-----Cartoon-----*/
    $('.nav li #cartoon').on('click', function() {
        $('.navChange #Movie,.navChange #Movie #movieBox1,.navChange #Movie #movieBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Cartoon,.navChange #Cartoon #cartoonBox1').css({
            visibility: 'visible'
        });
        $('.navChange #Cartoon #cartoonBox2').css({
             visibility: 'hidden'
        });

        $('.navChange #Discovery,.navChange #Discovery #discoveryBox1,.navChange #Discovery #discoveryBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Travel,.navChange #Travel #travelBox1,.navChange #Travel #travelBox2,.navChange #Travel #travelBox3,.navChange #Travel #travelBox4').css({
            visibility: 'hidden'
        });
    });
    
    $('.nav #Cartoon #cartoon1').on('click', function() {
        $('.navChange #Cartoon #cartoonBox1').css({
            visibility: 'visible'
        });
        $('.navChange #Cartoon #cartoonBox2').css({
             visibility: 'hidden'
        });
    });

    $('.nav #Cartoon #cartoon2').on('click', function() {
        $('.navChange #Cartoon #cartoonBox1').css({
            visibility: 'hidden'
        });
        $('.navChange #Cartoon #cartoonBox2').css({
            visibility: 'visible'
        });
    });
    /*-----Cartoon  End-----*/
    /*-----Discovery-----*/
    $('.nav li #discovery').on('click', function() {
        $('.navChange #Movie,.navChange #Movie #movieBox1,.navChange #Movie #movieBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Cartoon,.navChange #Cartoon #cartoonBox1,.navChange #Cartoon #cartoonBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Discovery,.navChange #Discovery #discoveryBox1').css({
            visibility: 'visible'
        });
        $('.navChange #Discovery #discoveryBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Travel,.navChange #Travel #travelBox1,.navChange #Travel #travelBox2,.navChange #Travel #travelBox3,.navChange #Travel #travelBox4').css({
            visibility: 'hidden'
        });
    });

    $('.nav #Discovery #discovery1').on('click', function() {
        $('.navChange #Discovery #discoveryBox1').css({
            visibility: 'visible'
        });
        $('.navChange #Discovery #discoveryBox2').css({
            visibility: 'hidden'
        });
    });

    $('.nav #Discovery #discovery2').on('click', function() {
        $('.navChange #Discovery #discoveryBox1').css({
            visibility: 'hidden'
        });
        $('.navChange #Discovery #discoveryBox2').css({
            visibility: 'visible'
        });
    });
    /*-----Discovery  End-----*/
    /*-----Travel-----*/
    $('.nav li #travel').on('click', function() {
        $('.navChange #Movie,.navChange #Movie #movieBox1,.navChange #Movie #movieBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Cartoon,.navChange #Cartoon #cartoonBox1,.navChange #Cartoon #cartoonBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Discovery,.navChange #Discovery #discoveryBox1,.navChange #Discovery #discoveryBox2').css({
            visibility: 'hidden'
        });

        $('.navChange #Travel,.navChange #Travel #travelBox1').css({
            visibility: 'visible'
        });
        $('.navChange #Travel #travelBox2,.navChange #Travel #travelBox3,.navChange #Travel #travelBox4').css({
            visibility: 'hidden'
        });
    });
    $('.nav #Travel #travel1').on('click', function() {
        $('.navChange #Travel #travelBox1').css({
            visibility: 'visible'
        });
        $('.navChange #Travel #travelBox2').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox3').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox4').css({
            visibility: 'hidden'
        });
    });

    $('.nav #Travel #travel2').on('click', function() {
        $('.navChange #Travel #travelBox1').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox2').css({
            visibility: 'visible'
        });
        $('.navChange #Travel #travelBox3').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox4').css({
            visibility: 'hidden'
        });
    });
    $('.nav #Travel #travel3').on('click', function() {
        $('.navChange #Travel #travelBox1').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox2').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox3').css({
            visibility: 'visible'
        });
        $('.navChange #Travel #travelBox4').css({
            visibility: 'hidden'
        });
    });

    $('.nav #Travel #travel4').on('click', function() {
        $('.navChange #Travel #travelBox1').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox2').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox3').css({
            visibility: 'hidden'
        });
        $('.navChange #Travel #travelBox4').css({
            visibility: 'visible'
        });
    });
     /*-----Travel  End-----*/
     
});