<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="http://www.tuningbox.su/">
<title>Чип тюнинг двигателя - увеличение мощности двигателя</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="ru">
<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon" />
<meta name="keywords" content="чип тюнинг дизельных двигателей" />
<meta name="description" content="Модули чип тюнинг TuningBox это устройство повышает производительность вашего дизельного двигателя от 25% до 30% (по мощности и крутящего момента), а также снижает расход топлива до 10%." />
<link rel="stylesheet" href="/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="/css/superfish.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/scripts/facebox.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/mainStyle.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/printStyle.css" type="text/css" media="print" />
<script type="text/javascript" src="/scripts/swfobject.js"></script>
<script type="text/javascript" src="/scripts/functions.js"></script>
<script type="text/javascript" src="/scripts/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="/scripts/facebox.js"></script>
<script type="text/javascript" src="/scripts/jquery.prettyPhoto.js" charset="utf-8"></script>
<script type="text/javascript" src="/scripts/hoverIntent.js"></script>
<script type="text/javascript" src="/scripts/superfish.js"></script>
<script type="text/javascript" src="/scripts/slider.js"></script>
<script type="text/javascript" src="/iepngfix/iepngfix_tilebg.js"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){ 
        $("ul.sf-menu").superfish({ 
			//pathClass:  'current' 
		}); 
    });
    $(document).ready(function(){
        $("a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square',opacity: 0.50});
    });
    
    function prettyLaunch(linkurl, title) {
        document.getElementById("prettyLink").href = linkurl;
        document.getElementById("prettyLink").title = title;
        $("#prettyLink").trigger('click');
    }

function getBrands()
{
   $.ajax({
                type: "POST",
                url:"/index.php?action=show_brands",
                data:"type=" +document.getElementById("type").value+"&type_val="+document.getElementById("vehicle_type").options[document.getElementById("vehicle_type").selectedIndex].text+"&type_id="+document.getElementById("vehicle_type").options[document.getElementById("vehicle_type").selectedIndex].value,
                success: function(html){
                        document.getElementById("brands").innerHTML = html; 
                        document.getElementById("models").innerHTML = ""; 
                        document.getElementById("motorization").innerHTML = "";                       
                }
        }); 
}    

function getModels()
{
   $.ajax({
                type: "POST",
                url:"/index.php?action=show_models",
                data:"type=" + document.getElementById("type").value+"&brand="+document.getElementById("brand").options[document.getElementById("brand").selectedIndex].value+"&brand_val="+document.getElementById("brand").options[document.getElementById("brand").selectedIndex].text,
                success: function(html){
                        document.getElementById("models").innerHTML = html; 
						document.getElementById("motorization").innerHTML = "";                      
                }
        }); 
}  

function getMoto()
{
    $.ajax({
                type: "POST",
                url:"/index.php?action=show_moto",
                data:"type=" +document.getElementById("type").value+"&model="+document.getElementById("model").options[document.getElementById("model").selectedIndex].value+"&modeL_val="+document.getElementById("model").options[document.getElementById("model").selectedIndex].text,
                success: function(html){
                        document.getElementById("motorization").innerHTML = html;                       
                }
        }); 
}
</script>
<style type="text/css">
	/*img, div, input, #shortcutsMenu, #shortcutsMenu a*/#logo img, #slogan img, #cachet img, #chipsetAlpha img, #shortcutsMenu a/*, .sf-menu, .sf-menu ul*/{ behavior: url("/iepngfix/iepngfix.htc") }
</style>
<meta name='yandex-verification' content='5571f7cea6e9088e' />
<meta name="google-site-verification" content="Yj8U2HqsS8s3YUn97FxI5fdOiki1DU7EA_ejb-66_iw" />
</head>
<body >
<form name="polyForm" id="polyForm" action="" method="post"><input type="submit" style="display:none" /></form>
<div id="container">
    
    <div style="margin-left:40px;margin-right:40px;">
    <div id="banner">
        <div id="logo"><a href="/"><img src="/images/logoCompany.png" /></a></div>
        <div id="slogan"><img src="/images/sloganen.png" /><div>Звоните! +7 (495) 984 04 03</div></div>
        <div id="cachet"><img src="/images/cachet.png" /></div>
        <div id="picLoader">
        	<img src="/banner_images/slider/a.jpg" alt="" />
        	<img src="/banner_images/slider/b2.jpg" alt="" />
        	<img src="/banner_images/slider/c.jpg" alt="" />
        	<img src="/banner_images/slider/d.jpg" alt="" />
        	<img src="/banner_images/slider/e.jpg" alt="" />
        	<img src="/banner_images/slider/f.jpg" alt="" />
        	<img src="/banner_images/slider/g2.jpg" alt="" />
        </div>
        <div id="menuRightTop"><a href="/contact.htm"><img src="/images/menuRightTop_01.png" /></a><img src="/images/menuRightTop_02.png" /><a href='#' onclick="window.print()"><img src="/images/menuRightTop_03.png" /></a><img src="/images/menuRightTop_04.png" /><a href="#"><img src="/images/menuRightTop_05.png" /></a></div>
        
        <div id="mainmenu">
        <ul class="sf-menu sf-js-enabled sf-shadow"><li><a class="firstLevel" href="/home.htm">Главная</a></li><li ><a class="firstLevel" href="/the_tuningbox_unit.htm">Прибор TuningBox®</a><ul style="display: none; visibility: hidden;"><li><a class='secondLevel' href='/the_tuningbox_unit/manufacture.htm'>Производство</a></li><li><a class='secondLevel' href='/the_tuningbox_unit/operation.htm'>Принцип работы</a></li><li><a class='secondLevel' href='/the_tuningbox_unit/safety.htm'>Безопасность</a></li><li><a class='secondLevel' href='/the_tuningbox_unit/advantages.htm'>Достоинства</a></li><li><a class='secondLevel' href='/the_tuningbox_unit/glossary.htm'>Специальные термины</a></li><li><a class='secondLevel' href='/the_tuningbox_unit/video.htm'>Видео</a></li></ul></li><li ><a class="firstLevel" href="/installation.htm">Установка</a><ul style="display: none; visibility: hidden;"><li><a class='secondLevel' href='/installation/easy_installation.htm'>Простота в установке</a></li><li><a class='secondLevel' href='/installation/types.htm'>Типы устройств</a></li><li><a class='secondLevel' href='/installation/installation_drawing.htm'>Инструкции по установке</a></li><li><a class='secondLevel' href='/installation/completed_installation.htm'>Пример установки</a></li></ul></li><li ><a class="firstLevel" href="/aboutus.htm">О компании</a><ul style="display: none; visibility: hidden;"><li><a class='secondLevel' href='/aboutus/history.htm'>История</a></li><li><a class='secondLevel' href='/aboutus/rd.htm'>Современные технологии</a></li><li><a class='secondLevel' href='/aboutus/testimonials.htm'>Отзывы</a></li><li><a class='secondLevel' href='/aboutus/faq.htm'>Ответы на вопросы</a></li></ul></li><li ><a class="firstLevel" href="/vehicle.htm">Тип ТС</a><ul style="display: none; visibility: hidden;"><li><a class='secondLevel' href='/vehicle/motorhome.htm'>Автодома</a></li><li><a class='secondLevel' href='/vehicle/utilities.htm'>Грузовики</a></li><li><a class='secondLevel' href='/vehicle/trucks.htm'>Тягачи</a></li><li><a class='secondLevel' href='/vehicle/tractors.htm'>Сельская и строительная техника</a></li><li><a class='secondLevel' href='/vehicle/boats.htm'>Лодки</a></li></ul></li><li><a class="firstLevel" href="/tune_pedal.htm">Tune-Pedal</a></li><li><a class="firstLevel" href="/delivery_and_payment.htm">Доставка и оплата</a></li><li ><a class="firstLevel" href="/contact.htm">Контакты</a><ul style="display: none; visibility: hidden;"><li><a class='secondLevel' href='/contact/request_a_quote.htm'>Сделать запрос</a></li><li><a class='secondLevel' href='/contact/any_question.htm'>Задайте вопрос</a></li><li><a class='secondLevel' href='/contact/helpdesk.htm'>Тех. поддержка</a></li><li><a class='secondLevel' href='/contact/staff.htm'>Персонал</a></li></ul></li></ul>        
        </div>
        <div id="chipsetAlpha"><img src="/images/chipsetAlpha.png" /></div>
        <div class="slogan">Максимум мощности, минимум проблем!</div>
    </div>

    <div id="page-content">
        
   		<div id="breadCrumb">Вы находитесь здесь : &nbsp;&nbsp;&nbsp;<a href='/home.htm' title='Главная'>Главная</a> </div>
        <div id="details">
            <div style="padding:0px 36px 20px 36px">
            <h1 class="firstTitle" style="text-align: left;">Хотите мощный и экономичный двигатель?</h1>
<p><a rel="prettyPhoto[pp_gal]" href="/files/images/Moyenne/site/banc.jpg"><img style="margin: 30px; float: right;" src="/files/images/Petites/site/banc.jpg" alt="" width="210" height="140" /></a></p>
<p>Модульное устройство TuningBox® – инновационная разработка от мирового лидера производства дополнительных устройств для автомобиля.</p>
<p>Устройство TuningBox® – улучшит работу двигателя с турбонадувом. В результате чего, увеличение мощности и крутящего момента достигает 30%, а расход топлива может снизиться до 10%.</p>
<p>Самое главное, что TuningBox® работает в допустимых пределах, обозначенных автопроизводителем, не влияет на моторесурс и износ других узлов и агрегатов вашего автомобиля.</p>
<p>Еще никогда чип тюнинг двигателя не был так доступен. Установка модуля TuningBox® не требует особых знаний и специального оборудования. Модуль подключается в удобном месте между системой впрыска топлива и бортовым компьютером вашей машины.</p>
<p>TuningBox® оснащен стандартными разъемами, которые используются всеми производителями авто. Благодаря чему, подключение модуля исключает резку или пайку кабеля. TuningBox® самостоятельно работающий модуль, не влияющий на общую работу компьютерной памяти и двигателя в целом.</p>
<p>Посредством модуля TuningBox® можно осуществлять чип тюнинг дизельных двигателей и бензиновых, любого объема и номинальной мощности.</p>
<p>Все технологические исследования и разработки проводятся в специализированном центре компании TuningBox®, продукция которой, поставляется в более чем 30 стран мира.</p>                    <div id="home">
                    	<div id="homeLeft">
                        	<div id="btAvantages"><a style="color:#000000; text-decoration:none" href='/the_tuningbox_unit/advantages.htm'>Почему я доверяю TuningBox®? </a><img src="/images/orangeArrow.png" align="absmiddle" /></div>
<div class="homeBox">
                            	<h2>Видео</h2>
                            	<h3 style="color: #ff6600;">Мировая премьера<br>TuningBox EVOLUTION</h3><br>
<div id="mediaplayer19_wrapper" style="position: relative; width: 250px; height: 140px; "><object type="application/x-shockwave-flash" data="/player.swf" width="100%" height="100%" bgcolor="#000000" id="mediaplayer20" name="mediaplayer20" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=http%3A%2F%2Fwww.tuningbox.su%2F_home.htm&amp;id=mediaplayer20&amp;autostart=false&amp;file=%2Fvideo%2Ftuningbox-final.flv&amp;image=%2Fvideo%2Fpreviews%2F19.jpg&amp;controlbar.position=over"></object></div><br>
<script type="text/javascript">
jwplayer("mediaplayer20").setup({
autostart:false,
flashplayer: "/player.swf",
file: "/video/tuningbox-final.flv",
image: "/video/previews/19.jpg",
height: 140,
width: 250
});</script>
<div id="mediaplayer28_wrapper" style="position: relative; width: 250px; height: 140px;"><object type="application/x-shockwave-flash" data="/player.swf" width="100%" height="100%" bgcolor="#000000" id="mediaplayer28" name="mediaplayer28" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=http%3A%2F%2Fwww.tuningbox.su%2F_home.htm&amp;id=mediaplayer28&amp;autostart=false&amp;file=%2Fvideo%2F1383654542Tuningbox-BMW-041113-Final.flv&amp;image=%2Fvideo%2Fpreviews%2F28.jpg&amp;controlbar.position=over"></object></div><br>
<script type="text/javascript">
 jwplayer("mediaplayer28").setup({
 autostart:false,
 flashplayer: "/player.swf",
 file: "/video/1383654542Tuningbox-BMW-041113-Final.flv",
 image: "/video/previews/28.jpg",
 height: 140,
 width: 250
 });
</script>
<!-- <div id="mediaplayer20_wrapper" style="position: relative; width: 250px; height: 140px; "><object type="application/x-shockwave-flash" data="/player.swf" width="100%" height="100%" bgcolor="#000000" id="mediaplayer20" name="mediaplayer20" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=http%3A%2F%2Fwww.tuningbox.su%2F_home.htm&amp;id=mediaplayer20&amp;autostart=false&amp;file=%2Fvideo%2F130279222770002988_01-1.flv&amp;image=%2Fvideo%2Fpreviews%2F20.jpg&amp;controlbar.position=over"></object></div><br>
<script type="text/javascript">
jwplayer("mediaplayer20").setup({
autostart:false,
flashplayer: "/player.swf",
file: "/video/130279222770002988_01-1.flv",
image: "/video/previews/20.jpg",
height: 140,
width: 250
});</script> -->
<div id="mediaplayer21_wrapper" style="position: relative; width: 250px; height: 140px; "><object type="application/x-shockwave-flash" data="/player.swf" width="100%" height="100%" bgcolor="#000000" id="mediaplayer21" name="mediaplayer21" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=http%3A%2F%2Fwww.tuningbox.su%2F_home.htm&amp;id=mediaplayer21&amp;autostart=false&amp;file=%2Fvideo%2F1303815048TB_24-08-2010.flv&amp;image=%2Fvideo%2Fpreviews%2F21.jpg&amp;controlbar.position=over"></object></div><br>
<script type="text/javascript">
jwplayer("mediaplayer21").setup({
autostart:false,
flashplayer: "/player.swf",
file: "/video/1303815048TB_24-08-2010.flv",
image: "/video/previews/21.jpg",
height: 140,
width: 250
});
</script>
<div id="mediaplayer24_wrapper" style="position: relative; width: 250px; height: 140px; "><object type="application/x-shockwave-flash" data="/player.swf" width="100%" height="100%" bgcolor="#000000" id="mediaplayer24" name="mediaplayer24" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=http%3A%2F%2Fwww.tuningbox.su%2F_home.htm&amp;id=mediaplayer24&amp;autostart=false&amp;file=%2Fvideo%2F1338465899tune-pedal.flv&amp;image=%2Fvideo%2Fpreviews%2F24.jpg&amp;controlbar.position=over"></object></div><br>
<script type="text/javascript">
jwplayer("mediaplayer24").setup({
autostart:false,
flashplayer: "/player.swf",
file: "/video/1338465899tune-pedal.flv",
image: "/video/previews/24.jpg",
height: 140,
width: 250
});
</script>
<div id="mediaplayer26_wrapper" style="position: relative; width: 250px; height: 140px; "><object type="application/x-shockwave-flash" data="/player.swf" width="100%" height="100%" bgcolor="#000000" id="mediaplayer26" name="mediaplayer26" tabindex="0"><param name="allowfullscreen" value="true"><param name="allowscriptaccess" value="always"><param name="seamlesstabbing" value="true"><param name="wmode" value="opaque"><param name="flashvars" value="netstreambasepath=http%3A%2F%2Fwww.tuningbox.su%2F_home.htm&amp;id=mediaplayer26&amp;autostart=false&amp;file=%2Fvideo%2F1345555016TunePedal3D.flv&amp;image=%2Fvideo%2Fpreviews%2F26.jpg&amp;controlbar.position=over"></object></div><br>
<script type="text/javascript">
jwplayer("mediaplayer26").setup({
autostart:false,
flashplayer: "/player.swf",
file: "/video/1345555016TunePedal3D.flv",
image: "/video/previews/26.jpg",
height: 140,
width: 250
});
</script>
<div><a href="/the_tuningbox_unit/videos.htm" class="advBoxUrl">Ещё видео</a></div>
                            </div>
                        </div>
                        <div id="homeNews">
<div id="homeNewsBox"><p><span style="color: #000000;"><strong>TuningBox <span style="color: #ff6600;">EVOLUTION</span></strong></span></p>
<p><span style="color: #ff0000;"><strong><a href="/tbnews/new_tuningbox_units_19_09_2013.htm"><img title="TuningBox EVOLUTION" src="/files/images/ok5.jpg" alt="TuningBox EVOLUTION" width="114" height="47"></a></strong></span></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Абсолютно новый встраиваемый чип-тюнинг для двигателей престижных автомобилей!</strong></p><div style="clear:both"></div></div>
<div style="border-bottom:1px solid #dadada;"><a href="/tbnews/new_tuningbox_units_19_09_2013.htm" class="advBoxUrl">Подробнее</a></div>
<br>



<div id="homeNewsBox"><div id="homeNewsBoxDate">Октябрь 28, 2013</div><p><span style="color: #000000;"><strong>TUNINGBOX INNOVATION<br>Golf VII GTD</strong></span></p>
<p><span style="color: #ff0000;"><strong><img src="/files/images/ok8.jpg" alt="" width="114" height="47"></strong></span></p>
<p><strong>189 &gt;&gt; 234 Hp</strong><br><strong>421 &gt;&gt; 489 Nm</strong></p><div style="clear:both"></div></div>
<div style="border-bottom:1px solid #dadada;"><a href="/tbnews/new_tuningbox_units_28_11_2013.htm" class="advBoxUrl">Подробнее</a></div>
<br>

<div id="homeNewsBox"><div id="homeNewsBoxDate">Август 23, 2013</div><p><span style="color: #000000;"><strong>TUNINGBOX INNOVATION<br>Mercedes C 180 CGI</strong></span></p>
<p><span style="color: #ff0000;"><strong><img src="/files/images/ok4.jpg" alt="" width="114" height="47"></strong></span></p>
<p><strong>164 &gt;&gt; 200 Hp</strong><br><strong>286 &gt;&gt; 376 Nm</strong></p><div style="clear:both"></div></div>
<div style="border-bottom:1px solid #dadada;"><a href="/tbnews/new_tuningbox_units_23_08_2013.htm" class="advBoxUrl">Подробнее</a></div>
<br>

<div id="homeNewsBox"><div id="homeNewsBoxDate">Август 21, 2013</div><p><strong>News TuningBox Unit!</strong></p>
<p style="text-align: left;"><strong>Bmw </strong>518d, <strong>Fiat </strong>Ducato,<strong> Mazda <br></strong>CX-5, <strong>Opel </strong>Cascada, <strong>VW </strong>Golf VII <br><strong>Manitou</strong> MLT,<strong>John Deere</strong> 6150M</p><div style="clear:both"></div></div>
<div style="border-bottom:1px solid #dadada;"><a href="/tbnews/new_tuningbox_units_21_08_2013.htm" class="advBoxUrl">Подробнее</a></div>
<br>

<div id="homeNewsBox"><div id="homeNewsBoxDate">Июнь 19, 2013</div><p><strong>New TuningBox Unit!</strong></p>
<p style="text-align: left;"><strong>Bmw</strong> 114d - 525d - 730d <br><strong>Citröen</strong> C8, <strong>Fiat</strong> Doblo <strong>Ford</strong> <br>Tourneo <strong>Skoda</strong> Octavia, ...</p><div style="clear:both"></div></div>
<div style="border-bottom:1px solid #dadada;"><a href="/tbnews/new_tuningbox_units_19_06_2013.htm" class="advBoxUrl">Подробнее</a></div>
<br>
<br><a href="/tbnews/index.html" class="advBoxUrl">Архив новостей</a>
</div>
                        
                        <div style="clear:both"></div><br />
                    </div>
                                    </div>
            </div>
<div id="rightPart">
            <form name="frm1" method="post" action="/index.php">
            <input type="hidden" id="type" name="type" value="" />
            <br />
            <div class="carConfigDdl">
            <div style="margin:12px;">
            <p>Выберите модель:</p>
            
            <p><select name="vehicle_type" id="vehicle_type" onchange="this.className='ctrDropDown'; document.getElementById('type').value='vehicle_type'; getBrands();" onblur="this.className='ctrDropDown';" onmousedown="this.className='ctrDropDownClick';" class="ctrDropDown">
            <option value="0">--Тип ТС--</option>
                        <option  value="1">Diesel Cars</option>
                        <option  value="13">Gasoline Cars</option>
                        <option  value="9">Trucks</option>
                        <option  value="12">Forest Machines</option>
                        <option  value="14">Tractors</option>
                        </select></p>
            
            <div id="brands">
                        <p><select name="brand" id="brand" style="display: none;" onchange="this.className='ctrDropDown'; document.getElementById('type').value='brand'; getModels();" onblur="this.className='ctrDropDown';" onmousedown="this.className='ctrDropDownClick';" class="ctrDropDown">
            <option value="">--Select a brand--</option>
            <br />
<b>Warning</b>:  Invalid argument supplied for foreach() in <b>/home/tbox/www/index.php</b> on line <b>910</b><br />
            </select></p>
            </div>
            
            <div id="models">
            
            <p><select name="model" id="model" style="display: none;" onchange="this.className='ctrDropDown'; document.getElementById('type').value='model'; getMoto();" onblur="this.className='ctrDropDown';" onmousedown="this.className='ctrDropDownClick';" class="ctrDropDown">
            <option value="">--Select a model--</option>
            <br />
<b>Warning</b>:  Invalid argument supplied for foreach() in <b>/home/tbox/www/index.php</b> on line <b>927</b><br />
            </select></p>
            </div>
            
            <div id="motorization">
            <p><select name="motorization" id="motorization" style="display: none;" onchange="this.className='ctrDropDown'; document.getElementById('type').value='motorization'; document.frm1.submit()" onblur="this.className='ctrDropDown';" onmousedown="this.className='ctrDropDownClick';" class="ctrDropDown">
            <option value="">--Select an engine--</option>
                        </select></p>
            <p style="text-align:center;">                        </p>
            </div>
            <br />
            </div>
            </div>
            </form>
            
            <div>
			 <a class="eDocs" href="/catalog.htm">Обновленный каталог «дизель, бензин»</a>
			  <a class="eGallery" href="/gallery.html">Галерея</a>
            <a class="oBlock" href="online.html?iframe=true&width=500&height=400" rel="prettyPhoto[iframes]">Online Консультация</a>
            
                <a class='aBlock' style="height:44px;" href='/dillers.html'>ВАШ БЛИЖАЙШИЙ ДИЛЕР</a>
                 <a class='aBlock' style="height:35px;line-height: normal; padding-top: 9px;" href='/auto_club.html'>СОТРУДНИЧЕСТВО С АВТОКЛУБАМИ</a>
            
            <br><div id="permBox" style=" background-image:url(/images/bgEvo.jpg)"><div><a href="/tbnews/evolution.htm" style="color:#FFFFFF; text-decoration:none"><span style="padding-top:18px; display:block">TuningBox 
            EVOLUTION</span></a></div></div><br>
            <div class="advBox"><h3>АКЦИИ КОМПАНИИ</h3>
            	<div style="padding: 10px 20px 0;">
            	<p><strong>Акция от 1.08.2013</strong></p>
            	<p>В нашем установочном центре, Вы можете произвести дополнительные работы.</p>
            	<a class="advBoxUrl" href="/actions/index.html">Подробнее</a>            	</div><img src="/images/bgAdvBox2.jpg"></div>
            <br>
			<div class="advBox"><h3>Часто чипуемые машины</h3>
								<div style="padding:8px; text-align: center; "><p><a style="color:#333;" href="/most_chip_auto.html"><img style="display: block; margin: 0 auto 5px; " src="/images/most_chip_cars.jpg" alt="" width="150" />Смотреть</a></p>
								</div><img src="/images/bgAdvBox2.jpg"></div>
			<br>
			
<div class='advBox'><h3>TuningBox 360</h3>
                        <div style='padding:8px;'><p style="text-align: center;"><a href='http://www.tuningbox.su/aboutus.htm#tour'  ><img src="/images/vven.jpg" alt="" width="140" height="161" /></a></p>
                        </div><a href='http://www.tuningbox.su/aboutus.htm#tour'   class='advBoxUrl'> Подробнее</a><img src='http://www.tuningbox.com/images/bgAdvBox2.jpg' /></div>
						<br />
			
            <div class="advBox"><h3>TUNE-PEDAL</h3>
            					<div style="padding:8px; text-align: center; "><p><a style="color:#333;" href="/tune_pedal.htm"><img style="display: block; margin: 0 auto 5px; " src="/images/tp2013.jpg" alt="" width="175" />Узнать больше<br>
            					  о работе модуля</a></p>
            					</div><img src="/images/bgAdvBox2.jpg"></div>
            <br>
            <div class="advBox"><h3>TÜV Certification</h3>
            					<div style="padding:8px;"><p><img style="display: block; margin-left: auto; margin-right: auto;" src="/files/images/Petites/tuv.jpg" alt="" width="140" height="78"></p></div><img src="/images/bgAdvBox2.jpg"></div><br>
</div>
      </div>
            <div style="clear:both">&nbsp;</div>
        </div>
        <div id="footer">
            <div id="menuBottom">
				<a href="/tbv/index.html">Транспортные средства</a>            </div>
            <div id="baseline">Tuningbox 2011</div>
        </div>
    </div>
</div>
<script type='text/javascript'> /* build:::6 */ 
	var liveTex = true,
		liveTexID = 18075,
		liveTex_object = true;
	(function() {
		var lt = document.createElement('script');
		lt.type ='text/javascript';
		lt.async = true;
		lt.src = 'http://cs15.livetex.ru/js/client.js';
		var sc = document.getElementsByTagName('script')[0];
		if ( sc ) sc.parentNode.insertBefore(lt, sc);
		else  document.documentElement.firstChild.appendChild(lt);
	})();
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter18272389 = new Ya.Metrika({id:18272389,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });
 
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
 
    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/18272389" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>