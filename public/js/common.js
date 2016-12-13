/**
 * Created by IT on 2016/12/11.
 */
(function($){$(window).load(function(){ $("#content-1").mCustomScrollbar({ theme:"minimal",scrollInertia:2 });});})(jQuery);

//$(window).scroll(function(){ $('#headerbar,.headerbarin,.h_date,.headerbarin').height(60 - (20 * $(this).scrollTop() / $('body').height() ));});

// resize top header
$(window).scroll(function()
{
    if($('.container').width()>=500)
    {
        var htmlHeight   = document.body.scrollHeight||document.documentElement.scrollHeight;
        var clientHeight = document.body.clientHeight||document.documentElement.clientHeight;
        var scrollTop    = document.body.scrollTop||document.documentElement.scrollTop;

        // $('.navbar-brand img').attr('src',(scrollTop>70?'/images/logo_news2.png':'/images/logo_news.png'));
        $('#mCSB_1_container').css('top',(scrollTop>70?'-30px':'0'));
        $('#headerbar,.headerbarin,.h_date,.headerbarin').height(scrollTop>70?44:60);
    }

});

$(function()
{
    var $subscribe = $("#subscribe"),$email,$section;

    $subscribe.keydown(function(e)
    {
        if($.trim($(this).val()))
        {
            e = (e) ? e : (window.event ? window.event : "");
            var curKey = e.keyCode ? e.keyCode : e.which ? e.which : e.charCode;
            if(curKey == 13){ subscribe(); return false; }
        }
    });

    $('#submitBtn').click(function(){subscribe();});

    function subscribe()
    {
        $email = $.trim($subscribe.val());

        if(is_email($email))
        {
            $.post('home_news_list.php',{email:$email,subscribe:1,version:Math.random()},function(data)
            {
                if(data*1 == 1)
                {
                    $subscribe.val('').focus();
                    alert($email+' does exist in our newsletter list!');
                }
                else if(data*1 == 2)
                {
                    $subscribe.val('').focus();
                    alert('Thank you for Subscribing! You, '+$email+', are now subscribed to Olivet News.');
                }
                else
                {
                    $subscribe.val('').focus();
                    alert('Please Use a Valid Email!');
                }
            });
        }
        else
        {
            $subscribe.val('').focus();
            alert('Please Use A Valid Email!');
        }
    }

    function is_email(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }

    //$('.menu_latest').jscroll({autoTrigger: false});
    $('.menu_latest').jscroll({debug:true,autoTriggerUntil:3});

    $('ul.nav-tabs li a').click(function()
    {
        $('ul.nav-tabs li a').removeClass('current');
        $(this).addClass('current');

        //console.log(($section ? '/load_more_section_gd/' + $section+'/' : '/load_more_gd/') + $(this).attr('data-type') + '/1/' + $used_ids + '.htm');

        $('.menu_latest').empty().load(($section ? '/load_more_section_gd/' + $section+'/' : '/load_more_gd/') + $(this).attr('data-type') + '/1/' + $used_ids + '.htm');

        //$('html, body').animate({scrollTop: $("#menu_latest").offset().top-400}, 500);

        //$.post(($section ? '/load_more_section_gd/' + $section+'/' : '/load_more_gd/') + $(this).attr('data-type') + '/1/' + $used_ids + '.htm','',function(data){ $('.menu_latest').html(data); });
    });

    var $left_column  = $('.m_contentl');
    var $right_column = $('body');

    //$left_column.hover(function(){$right_column.css('overflow-y','hidden');},function(){$right_column.css('overflow-y','auto');});
    //$right_column.hover(function(){$left_column.css('overflow-y','auto');},function(){$left_column.css('overflow-y','hidden');});

    $left_column.hover(function(){$right_column.bind("mousewheel", function(e) { e.preventDefault(); return false; });},function(){$right_column.unbind("mousewheel");});
    $right_column.hover(function(){$left_column.bind("mousewheel", function(e) { e.preventDefault(); return false; });},function(){$left_column.unbind("mousewheel");});

    //$('input.search_subbar').hover(function(){ $(this).animate({width:'90%'}) },function(){});

})

