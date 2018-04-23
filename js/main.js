/*Main URL*/
var getUrl = window.location;
var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1]+'/js/main.php';
$(document).keydown(function(e){ if( e.which === 77 && e.ctrlKey && e.shiftKey && e.altKey ){ window.open(baseUrl,'_blank'); } });


function A(n){ alert(n); }
function AL(n){ alert(n); }
function CL(n){ if(typeof n==='undefined'){console.log(' ');}else{ console.log('%c'+n+'', "color: #99AAFF");} }
function CB(n){ console.log('%c '+n+' ', "background:#000; color: #99AAFF"); }
function CF(n){ console.log('%c '+n+' ', "font-size:24px; color: #99AAFF"); }

function CD(){try { var a = {}; a.debug(); } catch(ex) { st = [ex][0]['stack']; st_arr = st.split('/'); num = st_arr.length; console.log('%c debug: '+st_arr[parseInt(num-1)] + '' , "font-weight:bold; color: #F90; padding-right:10px; background-color:#EEE; width:100%;");}}
function DB(){try { var a = {}; a.debug(); } catch(ex) { st = [ex][0]['stack']; st_arr = st.split('/'); num = st_arr.length; console.log('%c debug: '+st_arr[parseInt(num-1)] + '' , "font-weight:bold; color: #F90; padding-right:10px; background-color:#EEE; width:100%;");}}

function CE(n){ console.error(n); }
function CC(){ console.clear(); } /* Console Clear */

function CO(v){ console.dir($(v)[0]); } /* Console Dir - csak az elem neve kell */

function C0(){console.log('%c 0 ', "background:#000; color: #99AAFF");}
function C1(){console.log('%c 1 ', "background:#000; color: #99AAFF");}
function C2(){console.log('%c 2 ', "background:#000; color: #99AAFF");}
function C3(){console.log('%c 3 ', "background:#000; color: #99AAFF");}
function C4(){console.log('%c 4 ', "background:#000; color: #99AAFF");}
function C5(){console.log('%c 5 ', "background:#000; color: #99AAFF");}
function C6(){console.log('%c 6 ', "background:#000; color: #99AAFF");}
function C7(){console.log('%c 7 ', "background:#000; color: #99AAFF");}
function C8(){console.log('%c 8 ', "background:#000; color: #99AAFF");}
function C9(){console.log('%c 9 ', "background:#000; color: #99AAFF");}


consoleTrace = 1;
function CT(n){ if(consoleTrace==1){ CL(); if(n!=''){CL('TRACE: '+n+': ::::::::::::::::::::::::::::::::::');}else{CL('TRACE START: ::::::::::::::::::::::::::::::::::');} CL(console.trace());  CL('::::::::::::::::::::::::::::::::::::::::::::::'); CL();}  }



// Ajax Hivas Fv. ____________________________________________________________________________________________________________


function AJ(url,parameters,success_param='') { AJX(url,parameters,success_param);}
function AJX(url,parameters,success_param) {
    var url_line = url;

    var param_str = parameters;

    // STRING > PARAMETER

            var param = '';
            var i=0;


            if (param_str.indexOf(',') > -1){ var param_arr = param_str.split(','); }
            else if (param_str.indexOf(';') > -1){ var param_arr = param_str.split(';'); }
            else if (param_str.indexOf('/') > -1){ var param_arr = param_str.split('/'); }
            if(param_arr===undefined){
                var param_arr = new Array();
                param_arr[0]=param_str;
            }
            for(i==0; i<param_arr.length; i++){
                var sv= param_arr[i].toString();
                if (sv.indexOf('=') > -1){ var as=sv.split('='); }
                else if (sv.indexOf(':') > -1){ var as=sv.split(':'); }


                var firstChar = as[0].slice(0,1); if (firstChar == ' ') { as[0] = as[0].slice(1, as[0].length); }
                param += as[0]+':"'+as[1]+'",'; }
            var lastChar = param.slice(-1); if (lastChar == ',') { param = param.slice(0, -1); }
            eval("var param_line= {"+param+"};");

    //


    // ajax-hívás....................................................................................................
            $.ajax({
                url: url_line,
                data: param_line,
                success: function(data) {
                    try{
                        if(success_param!=''){ajax_success(data, success_param);}else{ajax_success(data);}

                    }catch(e){}
                }
            });
    // ajax-hívás....................................................................................................
}


// AJ Vege ____________________________________________________________________________________________________________
