<?php

    if (empty($_SESSION)  && !isset($_SESSION))  { session_start(); }

    function SHOW($array){echo '<pre style="color:#F90">'; print_r($array); echo '</pre>'; }
    function S($array){ echo '<pre style="color:#F90">'; print_r($array); echo '</pre>'; }
    function SC($array, $COL){ echo '<pre style="color:' . $COL . '">'; print_r($array); echo '</pre>'; }

    function CIMKE($array){ echo '<pre style="color:#FFF; background-color:#369; padding:20px; font-size:20px;">'; print_r($array); echo '</pre>'; }
    function CIMSOR($array){ CIMKE($array); }

    function KEK($array){ echo '<pre style="color:#9AF">'; print_r($array); echo '</pre>'; }
    function BLUE($array){ echo '<pre style="color:#9AF">'; print_r($array); echo '</pre>'; }
    function GREEN($array){ echo '<pre style="color:#ACD65E">'; print_r($array); echo '</pre>'; }
    function RED($array){ echo '<pre style="color:#FF0000">'; print_r($array); echo '</pre>';}
    function NBLUE($array){ echo '<pre style="color:#0044FF">'; print_r($array); echo '</pre>';}
    function BR(){ echo '<br/>';}
?>