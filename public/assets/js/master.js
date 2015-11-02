$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
});

$(document).ready(function () {
    $('[data-toggle="popover"]').popover();
});

$(document).ready(function () {

    $('.skill-level').click(function() {

        var level = $(this).attr('data-level');
        var skill_id = $(this).attr('data-skill-id');
        var _this = this;
        
        $(_this).css('cursor','wait');
        
        var data = {
            level: level,
            skill_id: skill_id
        };

        $.post('/profile/set-skill-level', data, function (response) {
            
            $(_this).css('cursor','pointer');
            
            if(response.result)
            {
                $(_this).prevAll('.skill-level').removeClass('fa-star-o').addClass('fa-star');
                $(_this).nextAll('.skill-level').removeClass('fa-star').addClass('fa-star-o');
                $(_this).removeClass('fa-star-o').addClass('fa-star');
            }

        },'json');

    });

});

$(document).ready(function () {

    $('.remove-skill').click(function(e) {
        
        e.stopPropagation();
        
        
        
    });

});

$(document).ready(function () {

    $('.skill-love').click(function() {

        var level = $(this).attr('data-level');
        var skill_id = $(this).attr('data-skill-id');
        var _this = this;
        
        $(_this).css('cursor','wait');
        
        var data = {
            level: level,
            skill_id: skill_id
        };

        $.post('/profile/set-skill-love', data, function (response) {
            
            $(_this).css('cursor','pointer');
            
            if(response.result)
            {
                $(".skill-love").removeClass('fa-heart').addClass('fa-heart-o');
                $(_this).removeClass('fa-heart-o').addClass('fa-heart');
            }

        },'json');

    });

});