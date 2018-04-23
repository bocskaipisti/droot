// =========================================================================================================================================================================================================
// BASIC EFFECT FUNCTIONS
// =========================================================================================================================================================================================================

/*Effects URL*/
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1]+'/js/effects.php';
$(document).keydown(function(e){ if( e.which === 69 && e.ctrlKey && e.shiftKey && e.altKey ){ window.open(baseUrl,'_blank'); } });


var $effect_window = $(window);

//... EFFECT CLASS CHECK ........................................................................................................................................................................................
function effect_get_classes(element) {
    var str   = $(element).attr('class');
    var stringArray = str.split(/(\s+)/).filter( function(e) { return e.trim().length > 0; } );
    return stringArray;
}

//... EFFECT CHECK ........................................................................................................................................................................................

function effect_check() {
    var window_height = $effect_window.height();//document.body.clientHeight;
    var window_top_position = $effect_window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);
    var $animation_elements = $('.effect-scroll');
    $.each($animation_elements, function() {
        var $element = $(this);
        var element_height = $element.outerHeight();
        var element_top_position = $element.offset().top;
        var element_bottom_position = (element_top_position + element_height);

        //console.log('WT:: '+window_top_position); console.log('ET:> '+element_top_position);
        //console.log('EB:> '+element_bottom_position+' -ok'); console.log('WB:: '+window_bottom_position);
        //console.log('TT:: '+window_top_position); console.log('HH:: '+window_height);

        if ((element_bottom_position >= window_top_position) && (element_top_position <= window_bottom_position)) {
            $element.addClass('in-view');
            effect_start($element);
        } else {
            console.log('OUT')
            $element.removeClass('in-view');
            effect_inic($element);
        }
    });
}

//... EFFECT START ........................................................................................................................................................................................

function effect_start(element){
    anim_str = [];
    var classes_array = effect_get_classes(element);
    $(classes_array).each(function(i,val){
        // <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><
        var element_id = $(element).attr('id');
        switch(val) {
            case "effect-opacity":
                effect_start_opacity(element_id); effect_run(element_id);
                break;
            case "effect-move":
                effect_start_move(element_id); effect_run(element_id);
                break;
            case "effect-size":
                effect_start_size(element_id); effect_run(element_id);
                break;
            case "effect-color":
                effect_start_color(element_id); effect_run(element_id);
                break;
            case "effect-rotate":
                effect_start_rotate(element_id);
                break;
            default:
        }
        //setTimeout(function(){effect_run(element_id)},0);
        // <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><
    })
}

//... EFFECT INIC ........................................................................................................................................................................................

function effect_inic(element){
    anim_str_inic = [];
    var classes_array = effect_get_classes(element);
    $(classes_array).each(function(i,val){
        // <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><
        var element_id = $(element).attr('id');
        switch(val) {
            case "effect-opacity-inic":
                effect_inic_opacity(element_id); effect_inic_run(element_id);
                break;
            case "effect-move-inic":

                effect_inic_move(element_id); effect_inic_run(element_id);
                break;
            case "effect-size-inic":
                effect_inic_size(element_id); effect_inic_run(element_id);
                break;
            case "effect-color-inic":
                effect_inic_color(element_id); effect_inic_run(element_id);
                break;
            case "effect-rotate-inic":
                effect_inic_rotate(element_id);
                break;
            default:
        }
        // <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><
    })
}


//... EFFECTS CALL ........................................................................................................................................................................................
$(function(){
    // Automatikusan elindulo effektek
    $('.effect-inic').each(function () {  effect_inic(this); })
    $('.effect').each(function () {  effect_start(this);})
    // Scrollra elindulo effektek
    $effect_window.on('scroll resize', effect_check);
})

// =========================================================================================================================================================================================================
// EFFECTS BY TYPE
// =========================================================================================================================================================================================================

var anim_str = new Array();
var anim_str_inic = new Array();

//... EFFECT OPACITY ........................................................................................................................................................................................

function effect_start_opacity(element){
    var opacity = 0.5;
    if($('#'+element).data('effect-opacity-value')!==undefined && $('#'+element).data('effect-opacity-value')!=''){ opacity = $('#'+element).data('effect-opacity-value'); }
    anim_str['opacity'] = opacity;
}

function effect_inic_opacity(element){
    var opacity = 1;
    if($('#'+element).data('effect-opacity-value')!==undefined && $('#'+element).data('effect-opacity-value')!=''){ opacity = $('#'+element).data('effect-opacity-value'); }
    if($('#'+element).data('effect-opacity-value-inic')!==undefined && $('#'+element).data('effect-opacity-value-inic')!=''){ opacity = $('#'+element).data('effect-opacity-value-inic'); }
    anim_str_inic['opacity'] = opacity;
}

//... EFFECT COLOR ........................................................................................................................................................................................

function hexToRGBA(hex, alpha) {
    if (!hex || [4, 7].indexOf(hex.length) === -1) { return; /* throw new Error('Bad Hex'); */ }
    hex = hex.substr(1);
    if (hex.length === 3) { hex = hex.split('').map(function(el){ return el + el + ''; }).join(''); }
    var r = parseInt(hex.slice(0, 2), 16), g = parseInt(hex.slice(2, 4), 16), b = parseInt(hex.slice(4, 6), 16);
    if (alpha) { return "rgba(" + r + ", " + g + ", " + b + ", " + alpha + ")"; }
    else { return "rgb(" + r + ", " + g + ", " + b + ")"; }
}

function effect_start_color(element){
    var second = 3;
    var opacity = '1';
    var color = '#000';
    if($('#'+element).data('effect-color-value')!==undefined && $('#'+element).data('effect-color-value')!=''){ color = $('#'+element).data('effect-color-value'); }
    if($('#'+element).data('effect-color-opacity')!==undefined && $('#'+element).data('effect-color-opacity')!=''){ opacity = $('#'+element).data('effect-color-opacity'); }
    if($('#'+element).data('effect-color-duration')!==undefined && $('#'+element).data('effect-color-duration')!=''){ second = $('#'+element).data('effect-color-duration'); }
    color = hexToRGBA(color, opacity);
    $('#'+element).css('transition',second+'s'); $('#'+element).css('-moz-transition',second+'s'); $('#'+element).css('-webkit-transition',second+'s'); $('#'+element).css('-o-transition',second+'s'); $('#'+element).css('-ms-transition',second+'s');
    $('#'+element).css( "background-color",color);
}

function effect_inic_color(element){
    var second = 3;
    var opacity = '1';
    var color = '#000';
    if($('#'+element).data('effect-color-value')!==undefined && $('#'+element).data('effect-color-value')!=''){ color = $('#'+element).data('effect-color-value'); }
    if($('#'+element).data('effect-color-value-inic')!==undefined && $('#'+element).data('effect-color-value-inic')!=''){ color = $('#'+element).data('effect-color-value-inic'); }
    if($('#'+element).data('effect-color-opacity')!==undefined && $('#'+element).data('effect-color-opacity')!=''){ opacity = $('#'+element).data('effect-color-opacity'); }
    if($('#'+element).data('effect-color-opacity-inic')!==undefined && $('#'+element).data('effect-color-opacity-inic')!=''){ opacity = $('#'+element).data('effect-color-opacity-inic'); }
    if($('#'+element).data('effect-color-duration')!==undefined && $('#'+element).data('effect-color-duration')!=''){ second = $('#'+element).data('effect-color-duration'); }
    if($('#'+element).data('effect-color-duration-inic')!==undefined && $('#'+element).data('effect-color-duration-inic')!=''){ second = $('#'+element).data('effect-color-duration-inic'); }
    color = hexToRGBA(color, opacity);
    $('#'+element).css('transition',second+'s'); $('#'+element).css('-moz-transition',second+'s'); $('#'+element).css('-webkit-transition',second+'s'); $('#'+element).css('-o-transition',second+'s'); $('#'+element).css('-ms-transition',second+'s');
    $('#'+element).css( "background-color",color);
}


//... EFFECT SIZE ........................................................................................................................................................................................

function effect_start_size(element){
    var size = 'width';
    var length = '50%';
    if($('#'+element).data('effect-size-direction')!==undefined && $('#'+element).data('effect-size-direction')!=''){ size = $('#'+element).data('effect-size-direction'); }
    if($('#'+element).data('effect-size-length')!==undefined && $('#'+element).data('effect-size-length')!=''){ length = $('#'+element).data('effect-size-length'); }

    anim_str[size] = length;
}

function effect_inic_size(element){
    var size = 'width';
    var length = '50%';
    if($('#'+element).data('effect-size-direction')!==undefined && $('#'+element).data('effect-size-direction')!=''){ size = $('#'+element).data('effect-size-direction'); }
    if($('#'+element).data('effect-size-direction-inic')!==undefined && $('#'+element).data('effect-size-direction-inic')!=''){ size = $('#'+element).data('effect-size-direction-inic'); }
    if($('#'+element).data('effect-size-length')!==undefined && $('#'+element).data('effect-size-length')!=''){ length = $('#'+element).data('effect-size-length'); }
    if($('#'+element).data('effect-size-length-inic')!==undefined && $('#'+element).data('effect-size-length-inic')!=''){ length = $('#'+element).data('effect-size-length-inic'); }
    anim_str_inic[size] = length;
}

//... EFFECT MOVE ........................................................................................................................................................................................

function effect_start_move(element){
    var direction = 'left';
    var position = '500px';
    if($('#'+element).data('effect-move-direction')!==undefined && $('#'+element).data('effect-move-direction')!=''){ direction = $('#'+element).data('effect-move-direction'); }
    if($('#'+element).data('effect-move-length')!==undefined && $('#'+element).data('effect-move-length')!=''){ position = $('#'+element).data('effect-move-length'); }
    anim_str[direction] = position;
}

function effect_inic_move(element){
    var direction = 'left';
    var position = '500px';
    if($('#'+element).data('effect-move-direction')!==undefined && $('#'+element).data('effect-move-direction')!=''){ direction = $('#'+element).data('effect-move-direction'); }
    if($('#'+element).data('effect-move-direction-inic')!==undefined && $('#'+element).data('effect-move-direction-inic')!=''){ direction = $('#'+element).data('effect-move-direction-inic'); }
    if($('#'+element).data('effect-move-length-inic')!==undefined && $('#'+element).data('effect-move-length-inic')!=''){ position = $('#'+element).data('effect-move-length-inic'); }
    anim_str_inic[direction] = position;
}

//... EFFECT ROTATE ........................................................................................................................................................................................

function effect_start_rotate(element){
    var deg=10;
    var duration='1000';
    var easing ='swing';
    if($('#'+element).data('effect-duration')!==undefined && $('#'+element).data('effect-duration')!=''){ duration = $('#'+element).data('effect-duration'); }
    if($('#'+element).data('effect-easing')!==undefined && $('#'+element).data('effect-easing')!=''){ easing = $('#'+element).data('effect-easings'); }
    if($('#'+element).data('effect-rotate-degrease')!==undefined && $('#'+element).data('effect-rotate-degrease')!=''){ deg = $('#'+element).data('effect-rotate-degrease'); }
    $('#'+element).stop().animate({  borderSpacing: deg }, {step: function(deg,fx) { $(this).css('-webkit-transform','rotate('+deg+'deg)'); $(this).css('-moz-transform','rotate('+deg+'deg)'); $(this).css('transform','rotate('+deg+'deg)'); }}, duration ,easing);
}

function effect_inic_rotate(element){
    var deg=10;
    var duration='1000';
    var easing ='swing';
    if($('#'+element).data('effect-duration')!==undefined && $('#'+element).data('effect-duration')!=''){ duration = $('#'+element).data('effect-duration'); }
    if($('#'+element).data('effect-duration-inic')!==undefined && $('#'+element).data('effect-duration-inic')!=''){ duration = $('#'+element).data('effect-duration-inic'); }
    if($('#'+element).data('effect-easing')!==undefined && $('#'+element).data('effect-easing')!=''){ easing = $('#'+element).data('effect-easings'); }
    if($('#'+element).data('effect-easing-inic')!==undefined && $('#'+element).data('effect-easing-inic')!=''){ easing = $('#'+element).data('effect-easing-inic');}
    if($('#'+element).data('effect-rotate-degrease')!==undefined && $('#'+element).data('effect-rotate-degrease')!=''){ deg = $('#'+element).data('effect-rotate-degrease'); }
    if($('#'+element).data('effect-rotate-degrease-inic')!==undefined && $('#'+element).data('effect-rotate-degrease-inic')!=''){ deg = $('#'+element).data('effect-rotate-degrease-inic'); }
    $('#'+element).stop().animate({  borderSpacing: deg }, {step: function(deg,fx) { $(this).css('-webkit-transform','rotate('+deg+'deg)'); $(this).css('-moz-transform','rotate('+deg+'deg)'); $(this).css('transform','rotate('+deg+'deg)'); }}, duration ,easing);
}

//... EFFECT RUN [>] ........................................................................................................................................................................................

function effect_run(element){
    if($('#'+element).css('position').length != 0){ $('#'+element).css('position','relative'); }

    var duration = 2000;
    var easing = 'swing'; //(linear/swing)

    if($('#'+element).data('effect-duration')!==undefined && $('#'+element).data('effect-duration')!=''){ duration = $('#'+element).data('effect-duration'); }
    if($('#'+element).data('effect-easing')!==undefined && $('#'+element).data('effect-easing')!=''){ easing = $('#'+element).data('effect-easings'); }


    // <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><

    $('#'+element).stop().animate(anim_str, duration, easing);

    // <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><
}


function effect_inic_run(element){
    if($('#'+element).css('position').length != 0){ $('#'+element).css('position','relative'); }

    var duration = 2000;
    var easing = 'swing'; //(linear/swing)

    if($('#'+element).data('effect-duration')!==undefined && $('#'+element).data('effect-duration')!=''){ duration = $('#'+element).data('effect-duration'); }
    if($('#'+element).data('effect-duration-inic')!==undefined && $('#'+element).data('effect-duration-inic')!=''){ duration = $('#'+element).data('effect-duration-inic'); }
    if($('#'+element).data('effect-easing')!==undefined && $('#'+element).data('effect-easing')!=''){ easing = $('#'+element).data('effect-easings'); }
    if($('#'+element).data('effect-easing-inic')!==undefined && $('#'+element).data('effect-easing-inic')!=''){ easing = $('#'+element).data('effect-easings-inic'); }


    // <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><

    $('#'+element).stop().animate(anim_str_inic, duration, easing);

    // <><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><><
}



