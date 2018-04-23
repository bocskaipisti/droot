<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <title>HTML TAG</title>
    <link rel="stylesheet" type="text/css" href="css/info.css">

</head>
<body>
<?php include_once('php/head.php') ?>


<h1 class="effect_cim">HTML5 alapok és tagek</h1>

<br/><div class="effect_elvalaszto" ></div>
<pre>
<b>Alap HTML kód</b>

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;!-- _________________________________________________________________________________________________________________________________________________________________________ --&gt;
&lt;head&gt;

    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;title&gt;&lt;/title&gt;

    &lt;!-- CSS --&gt;
    &lt;link rel="stylesheet" type="text/css" href="css/info.css"&gt;

    &lt;!-- JQUERY --&gt;
    	&lt;script src=&quot;https://code.jquery.com/jquery-3.2.0.min.js&quot; integrity=&quot;sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;

    &lt;!-- BOOTSTRAP --&gt;
	    &lt;!-- Latest compiled and minified CSS --&gt; &lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css&quot; integrity=&quot;sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u&quot; crossorigin=&quot;anonymous&quot;&gt;
	    &lt;!-- Optional theme --&gt; &lt;link rel=&quot;stylesheet&quot; href=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css&quot; integrity=&quot;sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp&quot; crossorigin=&quot;anonymous&quot;&gt;
		&lt;!-- Latest compiled and minified JavaScript --&gt; &lt;script src=&quot;https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js&quot; integrity=&quot;sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;


	&lt;script&gt;
    	$(function(){ console.log('ok'); })
    &lt;/script&gt;

	&lt;style&gt;
        body{ padding:0px; margin:0px; }
    &lt;/style&gt;

&lt;/head&gt;
&lt;!-- _________________________________________________________________________________________________________________________________________________________________________ --&gt;

&lt;body style=&quot;margin:0px; padding:0px;&quot; &gt;

    &lt;span class=&quot;glyphicon glyphicon-send&quot; style=&quot;color:#9AF; font-size:100px;&quot;&gt;&lt;/span&gt;

&lt;/body&gt;
&lt;/html&gt;

</pre>

<br/><div class="effect_elvalaszto" ></div>



<pre>
<b>Alap HTML tagek</b>

<span class="tag_string">&lt;!DOCTYPE&gt;</span> 	A weblap dokumentumtípusát határozza meg
<span class="tag_string">&lt;html&gt;</span>	HTML dokumentumot definiál
<span class="tag_string">&lt;head&gt;</span>	Dokumentuminformációkat tartalmazó rész
<span class="tag_string">&lt;title&gt;</span>	Dokumentum címét határozza meg
<span class="tag_string">&lt;body&gt;</span>	A dokumentum tartalmát határozza meg
<span class="tag_string">&lt;h1&gt;</span> to <span class="tag_string">&lt;h6&gt;</span>	Címsorok
<span class="tag_string">&lt;p&gt;</span>	Bekezdés
<span class="tag_string">&lt;br&gt;</span>	Sortörés
<span class="tag_string">&lt;hr&gt;</span>	Elválasztó vonal (témaváltás)
<span class="tag_string">&lt;!--...--&gt;</span>	Kommentek/megjegyzések


<b>Formázás</b>

<span class="tag_string">&lt;abbr&gt;</span>	Rövidítések, betűszavak (mozaikszavak)
<span class="tag_string">&lt;address&gt;</span>	A „szerző” elérhetőségei
<span class="tag_string">&lt;b&gt;</span>	Félkövérített szöveg
<span class="tag_string">&lt;bdi&gt;</span>	Szövegirány
<span class="tag_string">&lt;bdo&gt;</span>	Szövegirány felülírása
<span class="tag_string">&lt;blockquote&gt;</span>	Idézett szöveg megjelenítése
<span class="tag_string">&lt;cite&gt;</span>	Egy idézett szöveg
<span class="tag_string">&lt;code&gt;</span>	Kódrész integrálás
<span class="tag_string">&lt;del&gt;</span>	Törölt tartalom jelzése
<span class="tag_string">&lt;dfn&gt;</span>	Definíciót tartalmazó tag
<span class="tag_string">&lt;em&gt;</span>	Hangsúlyozott szövegrész
<span class="tag_string">&lt;i&gt;</span>	Dőlt betű
<span class="tag_string">&lt;ins&gt;</span>	Bemásolt szövegrészt jelölő tag
<span class="tag_string">&lt;kbd&gt;</span>	Billentyűzetbevitelt jelző tag
<span class="tag_string">&lt;mark&gt;</span>	Egy kiemelet (mark) szövegrész
<span class="tag_string">&lt;meter&gt;</span>	Betöltöttség, százalékjelölő
<span class="tag_string">&lt;pre&gt;</span>	Formázott szövegrész
<span class="tag_string">&lt;progress&gt;</span>	Folyamat jelző sáv (pl. hányad részét töltötte be a tartalomnak)
<span class="tag_string">&lt;q&gt;</span>	Rövid idézet
<span class="tag_string">&lt;rp&gt;</span>	A rubit nem támogatott böngészőkben ez a tartalom fog megjelenni
<span class="tag_string">&lt;rt&gt;</span>	Karakterek, kifejezések meghatározása (pl. Kelet-Ázsiai tipográfia esetében)
<span class="tag_string">&lt;ruby&gt;</span>	Ruby megjegyzés (Kelet-Ázsiai tipográfia esetén)
<span class="tag_string">&lt;s&gt;</span>	A már nem helytálló szöveget jelöli
<span class="tag_string">&lt;samp&gt;</span>    Példa kimenetet jelenít meg pl. programozásnál
<span class="tag_string">&lt;small&gt;</span>


<b>Kisebb szövegméret</b>

<span class="tag_string">&lt;strong&gt;</span>  Fontos szövegrészt jelenít meg
<span class="tag_string">&lt;sub&gt;</span> Aluljegyzett szövegrész (alsó index)
<span class="tag_string">&lt;sup&gt;</span> Felüljegyzett szövegrész (felső index)
<span class="tag_string">&lt;template&gt;</span>    Sablont határoz meg
<span class="tag_string">&lt;time&gt;</span>    Dátumot és időt meghatározó rész
<span class="tag_string">&lt;u&gt;</span>   A normál szövegtől eltérő stílust használó szövegrészt választja el
<span class="tag_string">&lt;var&gt;</span> Egy változó kiíratása
<span class="tag_string">&lt;wbr&gt;</span> Javasolt sortörés helye (ha sortörést kellene hosszú szövegek esetén, az automatikus sortörést ez írja felül


<b>Űrlapok és beviteli mezők</b>

<span class="tag_string">&lt;form&gt;</span>    Űrlapot tartalmazó egység
<span class="tag_string">&lt;input&gt;</span>   Egy soros szövegbeviteli mező
<span class="tag_string">&lt;textarea&gt;</span>    Több soros szövegbeviteli mező
<span class="tag_string">&lt;button&gt;</span>  Gomb
<span class="tag_string">&lt;select&gt;</span>  Egy lenyíló lista
<span class="tag_string">&lt;optgroup&gt;</span>    Lenyíló listán belüli csoportosítás
<span class="tag_string">&lt;option&gt;</span>  A lenyíló lista elemei
<span class="tag_string">&lt;label&gt;</span>   A beviteli mezők címkéje
<span class="tag_string">&lt;fieldset&gt;</span>    Űrlap elemek csoportosítása
<span class="tag_string">&lt;legend&gt;</span>  Űrlap elemek csoportosításának címkéje
<span class="tag_string">&lt;datalist&gt;</span>    Előre definiált részekkel ellátott beviteli mező (javaslatokat tesz)
<span class="tag_string">&lt;output&gt;</span>  Egy számítás kimeneti értékeit jeleníti meg


<b>Keretező tagek</b>

<span class="tag_string">&lt;img&gt;</span> Képeket megjelenítő tag
<span class="tag_string">&lt;map&gt;</span> Egy területet kijelölő egységet határoz meg (pl. háromszög)
<span class="tag_string">&lt;area&gt;</span>    A terület meghatározó pontjai
<span class="tag_string">&lt;canvas&gt;</span>  „Ont the fly” rajzterület
<span class="tag_string">&lt;figcaption&gt;</span>  Önálló tartalom címkéje
<span class="tag_string">&lt;figure&gt;</span>  Önálló tartalom
<span class="tag_string">&lt;picture&gt;</span> Képeket tartalmazó egység… különböző méretekben és nézetekben (pl. mobil/tablet/desktop) különböző képeket jelenít meg


<b>Audio és videó</b>

<span class="tag_string">&lt;audio&gt;</span>   Defines sound content
<span class="tag_string">&lt;source&gt;</span>  Több médiaelemet tartalmazó elem (videó, hang, kép)
<span class="tag_string">&lt;track&gt;</span>   Media elemek szöveges tartalmát határozza meg
<span class="tag_string">&lt;video&gt;</span>   Videók, filmek megjelenítésére szolgál


<b>Hivatkozások</b>

<span class="tag_string">&lt;a&gt;</span>   Hyperlink
<span class="tag_string">&lt;link&gt;</span>    Külső erőforrások csatolása a dokumentumokhoz (pl. CSS fájlok stb.)
<span class="tag_string">&lt;nav&gt;</span> Navigálósáv


<b>Listák és felsorolások</b>

<span class="tag_string">&lt;ul&gt;</span>  Rendezés nélküli lista
<span class="tag_string">&lt;ol&gt;</span>  Rendezett lista
<span class="tag_string">&lt;li&gt;</span>  Egy lista eleme
<span class="tag_string">&lt;dl&gt;</span>  Leírás-lista
<span class="tag_string">&lt;dt&gt;</span>  Lista főelem
<span class="tag_string">&lt;dd&gt;</span>  Lista alelem
<span class="tag_string">&lt;menu&gt;</span>    Menüsor
<span class="tag_string">&lt;menuitem&gt;</span>    Menüelemek


<b>Táblázatok</b>

<span class="tag_string">&lt;table&gt;</span>   Táblázatot határoz meg
<span class="tag_string">&lt;caption&gt;</span> Táblázat címe
<span class="tag_string">&lt;th&gt;</span>  Fejléccella a táblázatban
<span class="tag_string">&lt;tr&gt;</span>  Táblázat sora
<span class="tag_string">&lt;td&gt;</span>  Táblázat cellája
<span class="tag_string">&lt;thead&gt;</span>   Táblázat fejléceit csoportosítja
<span class="tag_string">&lt;tbody&gt;</span>   Táblázat tartalmát csoportosítja
<span class="tag_string">&lt;tfoot&gt;</span>   Táblázat láblécét csoportosítja
<span class="tag_string">&lt;col&gt;</span> Különálló cellatartományok
<span class="tag_string">&lt;colgroup&gt;</span>    Különálló cellatartományok csoportja (pl. más színük, formátumuk van)


<b>Stílusok és elválasztó elemek</b>

<span class="tag_string">&lt;style&gt;</span>   Stíluselemeket határoz meg (foglal egységbe)
<span class="tag_string">&lt;div&gt;</span> Szakaszhatározó, egységeket elválasztó elem
<span class="tag_string">&lt;span&gt;</span>    Szövegelválasztó
<span class="tag_string">&lt;header&gt;</span>  Fejléc
<span class="tag_string">&lt;footer&gt;</span>  Lábléc
<span class="tag_string">&lt;main&gt;</span>    Tartalom
<span class="tag_string">&lt;section&gt;</span> Szakaszelválasztó
<span class="tag_string">&lt;article&gt;</span> Cikk
<span class="tag_string">&lt;aside&gt;</span>   Tageket mellőző tartalomrész (kiveszi az adott tartalom tagjeit és csak a szöveget jeleníti meg). Előre megformázott szövegek formátumait pl. eltörli.
<span class="tag_string">&lt;details&gt;</span> Lenyítható melléktartalom
<span class="tag_string">&lt;dialog&gt;</span>  Párbeszédablak
<span class="tag_string">&lt;summary&gt;</span> Lenyitható melléktartalom látható része
<span class="tag_string">&lt;data&gt;</span>    A szöveges részek láthatatlan érték része (pl. a koktélparadicsom szövege mögött ott van az egységár 500, amit a gépek/robotok ki tudnak olvasni/elemezni)


<b>Meta információk</b>

<span class="tag_string">&lt;head&gt;</span>    A dokumentum fejléce, dokumentumadatokkal
<span class="tag_string">&lt;meta&gt;</span>    Metaadatok a dokumentumról
<span class="tag_string">&lt;base&gt;</span>    Meghatározza a dokumentum alap URL-jét. pl. a linkek ebből indulhatnak ki


<b>Programozást segítő tagek</b>
    
<span class="tag_string">&lt;script&gt;</span>  Kliensoldali programkódokat - pl. JavaScript – tartalmazó egység
<span class="tag_string">&lt;noscript&gt;</span>    Ha a böngésző nem támogatja a scripteket, az ide írt szöveg fog megjelenni
<span class="tag_string">&lt;embed&gt;</span>   Egy külső tartalom beágyazásáért felel
<span class="tag_string">&lt;object&gt;</span>  Egy beágyazott objektum
<span class="tag_string">&lt;param&gt;</span>   Egy beágyazott objektum beállításait – paramétereit - tartalmazza
</pre>


<br/><div class="effect_elvalaszto" ></div>

</body>
</html>
