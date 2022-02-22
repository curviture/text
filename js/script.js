/**
 * Created by kanta on 09.10.2015.
 */
$(document).ready(function() {
    //Slider
    $('.carousel').carousel({
        interval: 20000
    })
    /*Yakr*/
    $('#menu a[href*=#], #collapse13 a').bind("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
         scrollTop: $(anchor.attr('href')).offset().top
        }, 1000);
        e.preventDefault();
    });
    $(".etaps").click(function() {
        $( "#etaps" ).click();
    });
    /*Text typed*/
    $(function(){
        $(".type").typed({
            strings: ["увеливает продажи", "привлекает внимание", "увеличивает конверсию", "нужен людям"],
            typeSpeed: 50,
            loop: true,
            showCursor: false
        });
    });

    /*OWL*/
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1000,
        animateIn: String,
        responsiveClass:true,
        navigation:true,
        pagination:false,
        responsive:{
            0:{
                autoWidth:true,
                items:1
            },
            600:{
                autoWidth:true,
                items:3
            },
            1000:{
                autoWidth:true,
                items:5
            }
        }
    })
    
    /*TABS*/
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
    
    /*Main block bg-height*/
    if($(window).width() > 601) {
        var vph = $(window).height();
        if (vph > 630) {
            $("#header").css({"height": vph + "px"});
        }
    }

    /*Tab block height*/
    $('.quest_tab_block').css('height',$('.quest_list_group').height());

    /*Background Gradient*/
    /*
    var colors = new Array(
        [19,197,207],
        [28,79,98],
        [26,97,114],
        [24,135,149],
        [22,154,168],
        [28,79,98]);

    var step = 0;
    var colorIndices = [0,1,2,3];

    var gradientSpeed = 0.002;
    function updateGradient()
    {

        if ( $===undefined ) return;

        var c0_0 = colors[colorIndices[0]];
        var c0_1 = colors[colorIndices[1]];
        var c1_0 = colors[colorIndices[2]];
        var c1_1 = colors[colorIndices[3]];

        var istep = 1 - step;
        var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
        var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
        var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
        var color1 = "rgb("+r1+","+g1+","+b1+")";

        var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
        var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
        var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
        var color2 = "rgb("+r2+","+g2+","+b2+")";

        $('#steps').css({
            background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
            background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

        step += gradientSpeed;
        if ( step >= 1 )
        {
            step %= 1;
            colorIndices[0] = colorIndices[1];
            colorIndices[2] = colorIndices[3];
            colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
            colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

        }
    }
    setInterval(updateGradient,1);
*/
    /*Lavalamp*/
    $('.head_menu').lavalamp({
        fx: "backout", speed: 500,setOnClick:true
    });

    $(".calculator_tab").lavalamp({
        fx: "backout", speed: 500,setOnClick:true
    });
    /*Textaria Calculator*/

    $('.textarea').bind('keyup keydown',function(){
        var text = $(this).val();
        var text_length = parseInt(text.length);
        $('.copy_count').text(text_length);
        if (text_length){
            $('.copy_time span').html('1-3');
            $('.copy_time sub').html('дня');
        }
        else{
            $('.copy_time span').html('0');
            $('.copy_time sub').html('дней');
        }
        $('.copy_price span').text(180*text_length/1000);
        //$('.copy_time span').text(text_length/100*2);
        var c1 = $('.copy_count').text();
        var t1 = $('.copy_time').text();
        var p1 = $('.copy_price').text();
        $('.copy_form input[name="price"]').val(p1);
        $('.copy_form input[name="time"]').val(t1);
        $('.copy_form input[name="count"]').val(c1);
    });
    
    /*Select's Calculator*/

    //function updateTotal() {
    //    var newTotal = 0;
    //    $("select[name='options'] option:selected").each(function() {
    //        newTotal += parseFloat($(this).data('value'));
    //    });
    //    $(".re_price span").text(newTotal);
    //    $(".re_time span").text(newTotal/50);
    //    var t2 = $('.re_time').text();
    //    var p2 = $('.re_price').text();
    //    $('.re_form input[name="price"]').val(t2);
    //    $('.re_form input[name="time"]').val(p2);
    //}
    //$(function() {
    //    $("select[name='options']").change(function() {
    //        updateTotal();
    //    });
    //    updateTotal();
    //});

    /*Modal-menu no-shake*/
    $('.modal').on('show.bs.modal', function (e) {
       $('#menu').css('padding-right','17px');
    });
    $('.modal').on('hidden.bs.modal', function (e) {
       $('#menu').css('padding-right','0');
    });

    //making text input behave like input type number

    /*$(".input-number").keydown(function(event) {
        // Allow only backspace and delete
        if ( event.keyCode == 46 || event.keyCode == 8 ) {
            // let it happen, don't do anything
        }
        else {
            // Ensure that it is a number and stop the keypress
            if (event.keyCode < 48 || event.keyCode > 57 ) {
                event.preventDefault();
            }
        }
    });*/

    //changing accordion behavior in FAQ with two columns

    $('#FAQ>.panel-group>.panel>.panel-heading').click(function() {
        var self = false;
        if ($(this).hasClass('panel-heading-active')) { self = true }
        $(this).parent().parent().parent().find('.panel-heading-active').removeClass('panel-heading-active');
        $(this).parent().parent().parent().find('.collapse').collapse('hide');
        if(!self) {$(this).addClass('panel-heading-active')}
    })

    //subscribe button scrolling and sliding down
    //animate number function
    var scrolledNumber = false;

    $(window).scroll(function() {
        var ah = $('#action').height(),
            aot = $("#action").offset().top,
            dft = $(window).scrollTop()+$(window).height();
        console.log(aot,dft);
        if( dft > aot ) {
            $('#subscribe').css("position",'relative');
            //$('#subscribe').css("left",$(window).width()-$("#subscribe").width()-20)
        }
        else{
            $('#subscribe').css('position','fixed');
            $('#subscribe').css('bottom',0);
            //$('#subscribe').css("left",$(window).width()-$("#subscribe").width())
        }
        //animating numbers in #numbers when scrolling to it

        var  ont = $("#numbers").offset().top;

        if((($(window).scrollTop()+$(window).height()-ont < -50) || ($(window).scrollTop()-ont < 50)) && !scrolledNumber){
            scrolledNumber = !scrolledNumber;
            //console.log("on top",ont);
            $('#year-of-success').animateNumber({ number:4 },1000);
            $('#content-client').animateNumber({ number:164 },1400);
            $('#text-sellers').animateNumber({ number:42 },1800);
            $('#copy-articles').animateNumber({ number:534 },2200);
        }
    });
    var subButClosed = false;
    $(".subscribe-toggle").click(function(){
        if(subButClosed){
            $(".subscribe-form").slideToggle();
        }
        else{
            $(".subscribe-form").slideToggle();
        }
        subButClosed = !subButClosed;
        console.log(subButClosed);
    });

    //adding subclasses to calculator's selects

    $('.categories').change(function(){
        var subCot = $(this).parent().next(),
            subCotName = $(this).find('option:selected').attr('data-class');
        console.log(subCotName);
        subCot.find('select').hide();
        subCot.find('select').each(function(){
            var selName = $(this).attr('name');
            if(selName == subCotName) {
                $(this).show();
            }
        })
    }).change();

    //disabling input in other-services

    $("#other-services > .select_block > .categories").change(function(){
        $(this).parent().parent().find('.symbol-number').val('uid');
        if($(this).find('option:selected').data('symbols')){
            $(this).parent().parent().find('.symbol-number').show();
            $(this).parent().parent().find('.symbol-number').attr("disabled",false);
        }
        else {
            $(this).parent().parent().find('.symbol-number').hide();
            $(this).parent().parent().find('.symbol-number').attr("disabled",true);
        }
    }).change();

    //calculator for other services

    function calcTotal(self){
        var total = 0,
            cat = "",
            catVal = "1000",
            artNum = 1,
            symNum = 1000,
            subPrice = '';
        if(self.parent().parent().find('.symbol-number').is(":disabled")) {
            symNum = 1000;
            subPrice = "<sub>от </sub>";
        }
        else {
            symNum = parseFloat(self.parent().parent().find('.symbol-number').val());
            subPrice = '';
        }
        artNum = parseFloat(self.parent().parent().find('.article-number').val());
        cat = self.parent().parent().find('.categories');
        catVal = cat.find('option:selected').data('value');
        total = artNum*catVal*(symNum/1000);
        console.log(total,!total,artNum,cat,catVal,symNum);
        if(!total) {
            self.parent().parent().find('.os-price>span').html('0');
            self.parent().parent().find('.os-time>span').html('0');
            self.parent().parent().find('.os-time>sub').html('дней');
        }
        else{
            self.parent().parent().find('.os-price>span').html(subPrice+total);
            self.parent().parent().find('.os-time>span').html('1-3');
            self.parent().parent().find('.os-time>sub').html('дня');
        }
    }

    $("#other-services > .select_block > .calc-trigger").on('change keyup mouseleave', function(){
        calcTotal($(this));
    }).trigger('change keyup mouseleave');

    $("#te > .col-md-12 > .select_block > .calc-trigger").on('change keyup mouseleave', function(){
        calcTotal($(this));
    }).trigger('change keyup mouseleave');

    $("#copy > .select_block > .calc-trigger").on('change keyup mouseleave', function(){
        console.log("good morning")
        calcTotal($(this));
    }).trigger('change keyup mouseleave');


    //pop-up screen when user tries to leave page

    $('#come-back').modal('hide');
    var userLeft = true;
    $('body').mouseleave(function(){
        if(userLeft){
            ($("#come-back").modal('show'));
            userLeft = !userLeft;
        }
    });
    $(".close-come-back").click(function(){
        $('#come-back').modal('hide');
    })


    //form refactoring
/*

    $('.send-claim').click(function(e){
        e.preventDefault();
        var form = $(this).closest('form');
        var input1 = form.find('#username').val(),
            input2 = form.find('#user-phone').val(),
            input3 = form.find('#cat');
        if (input1 && input2 && input3) {
            data_ajax = {
                username : input1,
                phone : input2,
                cat : input3,
            }
            $.post('ajax.php',data_ajax,function(data){
                if(data.success){
                    alert('Success');
                }else{
                    alert('error');
                }
            });
            $('#page6').hide();
            $('#page7').show();
        }
        else {
            alert('Fill form')
        }
    })
*/


});
