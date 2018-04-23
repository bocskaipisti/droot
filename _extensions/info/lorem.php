<?php include_once('../functions/main.php') ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>✤ Lorem Ipsum</title>

    <!-- JQUERY -->         <script src="../js/jquery.js" ></script>
    <link rel="stylesheet" type="text/css" href="css/info.css">
    <script>
        $(function () {
            $("#copyButton").on('click',function(){
                copyToClipboard(document.getElementById("copyTarget"));
            })
            $("#copyButton2").on('click',function(){
                copyToClipboard(document.getElementById("copyTarget2"));
            })
            $("#copyButton3").on('click',function(){
                copyToClipboard(document.getElementById("copyTarget3"));
            })
        })

        function copyToClipboard(elem) {
            // create hidden text element, if it doesn't already exist
            var targetId = "_hiddenCopyText_";
            var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
            var origSelectionStart, origSelectionEnd;
            if (isInput) {
                // can just use the original source element for the selection and copy
                target = elem;
                origSelectionStart = elem.selectionStart;
                origSelectionEnd = elem.selectionEnd;
            } else {
                // must use a temporary form element for the selection and copy
                target = document.getElementById(targetId);
                if (!target) {
                    var target = document.createElement("textarea");
                    target.style.position = "absolute";
                    target.style.left = "-9999px";
                    target.style.top = "0";
                    target.id = targetId;
                    document.body.appendChild(target);
                }
                target.textContent = elem.textContent;
            }
            // select the content
            var currentFocus = document.activeElement;
            target.focus();
            target.setSelectionRange(0, target.value.length);

            // copy the selection
            var succeed;
            try {
                succeed = document.execCommand("copy");
            } catch(e) {
                succeed = false;
            }
            // restore original focus
            if (currentFocus && typeof currentFocus.focus === "function") {
                currentFocus.focus();
            }

            if (isInput) {
                // restore prior selection
                elem.setSelectionRange(origSelectionStart, origSelectionEnd);
            } else {
                // clear temporary content
                target.textContent = "";
            }
            return succeed;
        }


    </script>
    <style>
        button{
            padding:7px 20px;
            font-size:18px;
            background-color: #F90;
            color:#FFF;
            border-radius: 2px;
            border-width: 0px;
            box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover{
            background-color: #C80;
            box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);

        }
    </style>
</head>

<body>

<?php include_once('php/head.php') ?>

<h1 class="effect_cim">Lorem Ipsum</h1>

<!-- ______________________________________________________________________________________________________________________________ -->
<br/>

<button id="copyButton2">Copy Short</button> <button id="copyButton3">Copy One Paragraph</button> <button id="copyButton">Copy All</button><br><br>

<div class="effect_elvalaszto_kek" ></div>

<p class="effect_leiras">
    <pre id="copyTarget" style="white-space: pre-wrap;">
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus eget sapien quis posuere. Vivamus congue turpis non sem aliquam, sit amet mollis diam interdum. Suspendisse sed dolor varius, venenatis ex non, efficitur ipsum. Donec venenatis urna sed ante aliquam consequat. Praesent id sollicitudin purus. Phasellus tortor diam, luctus eget varius eget, porta sit amet elit. Mauris dapibus ullamcorper rutrum. Quisque luctus est felis, ut sodales est consectetur eget. Etiam placerat viverra dolor, eu rhoncus justo pretium non. Curabitur eu pretium erat, id malesuada neque. Praesent erat magna, commodo vel erat eu, lacinia gravida ipsum. Fusce aliquet ut est eu placerat. Proin dignissim ex quis diam ultricies, et consequat tellus hendrerit. Cras sodales tincidunt justo, in fermentum dui tristique vel. Fusce iaculis sollicitudin maximus. Integer efficitur, leo quis ornare semper, sem risus ornare nibh, in iaculis leo eros vel nisl.

Pellentesque tristique diam in quam cursus vulputate. Sed turpis velit, commodo nec eros non, tempus finibus nulla. Nulla enim arcu, sollicitudin non dui vitae, pulvinar bibendum nisi. Sed fermentum, augue non tincidunt porttitor, turpis purus faucibus elit, sed fermentum nisi odio ac justo. Suspendisse volutpat lobortis velit commodo eleifend. Donec feugiat sapien a pretium accumsan. Aliquam tempus sit amet nibh nec efficitur. Proin ac purus vitae lacus vehicula lacinia. Nulla id viverra orci, eget lacinia tortor. In ornare mi metus, eget congue diam varius vel. In convallis nulla sit amet orci lacinia, eget iaculis sapien volutpat. Suspendisse vitae laoreet enim. Nam sodales sollicitudin nisi. Curabitur aliquam ante eros, eu consequat libero pretium ac. Morbi fringilla mi eu ornare molestie.

Ut id nunc sollicitudin, porttitor lectus vel, accumsan ante. Donec a augue ut dui ullamcorper eleifend et gravida sapien. Aliquam erat volutpat. Morbi at neque diam. Praesent commodo ornare dolor ut finibus. Sed nec justo felis. Donec gravida eget ex eget tempus. Morbi ornare, mauris id molestie auctor, augue tortor scelerisque quam, sed commodo lorem justo nec quam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce interdum nibh sit amet erat sodales, eget ultricies velit sagittis. Maecenas tempor suscipit viverra. Sed iaculis porttitor pulvinar. Duis euismod felis tempor, pulvinar enim eget, aliquet arcu. Suspendisse a erat finibus, viverra quam at, rutrum enim. Aliquam volutpat et nibh eget tempus. Morbi quis tempus ipsum, nec feugiat tellus.

Nunc non lectus scelerisque, eleifend eros aliquam, dictum ex. Praesent viverra dictum nunc, quis volutpat mi varius nec. Donec orci sapien, maximus nec lorem at, pretium vestibulum quam. Praesent ornare et velit ut convallis. Duis tincidunt nibh et urna efficitur molestie. Aenean vehicula consectetur euismod. Pellentesque eu nunc sed urna ultrices sollicitudin. Nulla facilisi. Nullam id rhoncus turpis, vitae rutrum nulla. Suspendisse potenti. Praesent mattis sollicitudin justo ut auctor. Cras rutrum rhoncus orci sit amet hendrerit. Phasellus aliquet augue orci, in blandit elit sollicitudin quis. Integer velit dui, vulputate at nibh sed, viverra tempor enim. Nullam eu dictum leo, at accumsan ante. In non dolor sapien.

Integer quis lacus id ex commodo porta. Pellentesque tincidunt, lectus in fringilla euismod, quam elit placerat turpis, ut tristique eros eros id neque. Sed maximus sollicitudin nunc ac malesuada. Proin mollis blandit tellus volutpat consectetur. Quisque ut risus eget dolor euismod fermentum a vel augue. Integer quis tortor tincidunt, scelerisque orci vitae, dapibus velit. Aliquam non sodales justo. Mauris auctor mi ac tempus dignissim. Nullam condimentum, ex et hendrerit molestie, dui ligula ultrices tellus, non suscipit lacus risus nec justo. Morbi vel consequat nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas hendrerit lacus quis lorem tristique fringilla. Aliquam sit amet sem sem. In sed leo vehicula, porta dui eu, malesuada est. Fusce facilisis interdum tempor.

Nulla dignissim felis nunc, nec vestibulum metus mollis vel. Curabitur tempus auctor odio eget porttitor. Sed bibendum ante lacus, quis convallis risus luctus nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean pretium turpis et augue interdum, sed accumsan nibh congue. Sed egestas tortor id nisi aliquam aliquet. Nulla nunc quam, mattis aliquet maximus id, vestibulum eget orci. Nullam ipsum dolor, congue sed turpis vitae, hendrerit tincidunt massa.

Suspendisse in dolor eget eros interdum placerat. Integer in accumsan velit. Integer gravida, mi quis tincidunt placerat, nunc ligula dignissim nulla, quis cursus diam ante a metus. Pellentesque interdum in risus a vulputate. Aliquam libero lectus, gravida vitae felis eget, mollis mollis mauris. Vivamus eu diam ut odio maximus consequat et et ipsum. Vestibulum orci nunc, aliquet vitae felis nec, egestas molestie tortor. Donec erat augue, aliquet ac massa id, porta egestas eros. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean vel turpis consectetur, rhoncus est ut, tristique dolor. Morbi feugiat elit est, volutpat auctor erat mattis id. Sed faucibus vestibulum aliquet. Vivamus vel erat ac odio varius tristique eu vitae turpis.

Aenean tempus pellentesque nisl, at congue leo congue ac. Morbi eleifend elit commodo, tincidunt ante in, varius mi. Ut turpis nisi, malesuada non magna placerat, pretium rhoncus lorem. Curabitur massa leo, maximus at justo sit amet, posuere fringilla eros. Praesent elit libero, cursus et sem nec, convallis vulputate lorem. Aliquam fermentum augue lacus, vitae imperdiet quam vulputate sit amet. Sed luctus ipsum sit amet erat scelerisque consectetur. In hac habitasse platea dictumst. Mauris hendrerit turpis est, non pellentesque risus porttitor a. Fusce vitae quam at justo posuere pharetra. Curabitur vitae iaculis mi, elementum tristique urna. Nam aliquet a nisl porta blandit. Morbi dapibus condimentum leo, id auctor est efficitur sit amet. Duis quis consequat nisl, eu bibendum erat. Nam nec erat scelerisque, gravida neque a, eleifend ante. Nam est est, ultricies sit amet consequat et, condimentum eget tellus.

</pre>
</p>
<div class="effect_elvalaszto_kek" ></div>

<p class="effect_leiras" style="">
<pre id="copyTarget2" style="white-space: pre-wrap; opacity: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus eget sapien quis posuere. Vivamus congue turpis non sem aliquam, sit amet mollis diam interdum. Suspendisse sed dolor varius, venenatis ex non, efficitur ipsum. Donec venenatis urna sed ante aliquam consequat. Praesent id sollicitudin purus.</pre>
</p>
<p class="effect_leiras" style="">
<pre id="copyTarget3" style="white-space: pre-wrap; opacity: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempus eget sapien quis posuere. Vivamus congue turpis non sem aliquam, sit amet mollis diam interdum. Suspendisse sed dolor varius, venenatis ex non, efficitur ipsum. Donec venenatis urna sed ante aliquam consequat. Praesent id sollicitudin purus. Phasellus tortor diam, luctus eget varius eget, porta sit amet elit. Mauris dapibus ullamcorper rutrum. Quisque luctus est felis, ut sodales est consectetur eget. Etiam placerat viverra dolor, eu rhoncus justo pretium non. Curabitur eu pretium erat, id malesuada neque. Praesent erat magna, commodo vel erat eu, lacinia gravida ipsum. Fusce aliquet ut est eu placerat. Proin dignissim ex quis diam ultricies, et consequat tellus hendrerit. Cras sodales tincidunt justo, in fermentum dui tristique vel. Fusce iaculis sollicitudin maximus. Integer efficitur, leo quis ornare semper, sem risus ornare nibh, in iaculis leo eros vel nisl.</pre>
</p>

<!-- ______________________________________________________________________________________________________________________________ -->


<pre></pre>

</body>
</html>
