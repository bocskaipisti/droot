// Key Pressed
    $(function () {
        $('html').on('keypress',function (e) {
                var char_str = e.which || e.keyCode;
                var char_code= e.keyCode;
                //function call, if exist:
                try{keypressed(char_str);}catch(err){}
        })
        $('html').on('keyup',function (e) {
            var char_str = e.which || e.keyCode;
            var char_code= e.keyCode;
            //function call, if exist:
            try{keypressed2(char_str);}catch(err){}
        })
    })

// Keypress Timer

    var timeout;
    $(function () {
        $('.input_field').on('keyup',function(){
            var this_val = $(this);
            //if you already have a timout, clear it
            if(timeout){ clearTimeout(timeout);}
            //start new time, to perform ajax stuff in 500ms
            timeout = setTimeout(function() {
                try{type_end($(this_val),$(this_val).val())}catch(e){}
            },500);
        })
    })

