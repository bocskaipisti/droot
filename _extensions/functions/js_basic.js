function A(n){ alert(n); }
function CL(n){ if(typeof n==='undefined'){console.log(' ');}else{ console.log('%c'+n+'', "color: #99AAFF");} }
function CB(n){ console.log('%c '+n+' ', "background:#000; color: #99AAFF"); }
function CF(n){ console.log('%c '+n+' ', "font-size:24px; color: #99AAFF"); }

function CE(n){ console.error(n); }
function CC(){ console.clear(); } /* Console Clear */

function CO(v){ console.dir($(v)[0]); } /* Console Dir - csak az elem neve kell */
function CX(v){ console.dirxml($(v)[0]); } /* Console Dir - csak az elem neve kell */
function COX(v){ CX(v); CO(v); } /* Console Dir - csak az elem neve kell */

function C1(){console.log('%c 1 ', "background:#000; color: #99AAFF");}
function C2(){console.log('%c 2 ', "background:#000; color: #99AAFF");}
function C3(){console.log('%c 3 ', "background:#000; color: #99AAFF");}
function C4(){console.log('%c 4 ', "background:#000; color: #99AAFF");}
function C5(){console.log('%c 5 ', "background:#000; color: #99AAFF");}

consoleTrace = 1;
function CT(n){ if(consoleTrace==1){ CL(); if(n!=''){CL('TRACE: '+n+': ::::::::::::::::::::::::::::::::::');}else{CL('TRACE START: ::::::::::::::::::::::::::::::::::');} CL(console.trace());  CL('::::::::::::::::::::::::::::::::::::::::::::::'); CL();}  }
function CD(){ }


// Ajax Hivas Fv. ____________________________________________________________________________________________________________

// Url + Parameterek + Siker eseten fv. hivas (opcionalis) :: AJ('teszt.php', '"SID":"1","TYPE":"0"', onSuccess);
function AJ(url, parameters, successCallback) {
    var myVar = $.parseJSON( "{ "+String(parameters)+" }" );
    $.ajax({ type: 'POST', url: url, data: myVar, success: successCallback, error: function(xhr, textStatus, errorThrown) {
        CE('ajax error xhr: '+xhr);
        CE('ajax error xhr: '+textStatus);
        CE('ajax error xhr: '+errorThrown);
    } });
}
function onSuccess(param){ CL('Ajax Return: '+param); }
function returnTrue(param){ CL('Ajax Return: '+param); }
function returnFalse(param){ }


// AJ Vege ____________________________________________________________________________________________________________



