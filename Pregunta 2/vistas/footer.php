<footer><span>Creado por Cristhian Leandro Gongora Torrez</span>

</footer>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' type='text/javascript'></script>	


<script type="text/javascript">//<![CDATA[
$(function(){
$('#slider div:gt(0)').hide();
setInterval(function(){
$('#slider div:first-child').fadeOut(0)
.next('div').fadeIn(1000)
.end().appendTo('#slider');}, 5000);
})
//]]></script>