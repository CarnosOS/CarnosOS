<?php 
   function addFeedBack(){
     echo "<script type=\"text/javascript\"> window.doorbellOptions = { appKey: 'FxAZRJtFaQJvKtNQXchsvAaB7vepD2NRt4KdmXmc5kLNTIIxh7ebF4br0ZNEvROo' };(function(d, t) {   var g = d.createElement(t);g.id = 'doorbellScript';g.type = 'text/javascript';g.async = true;g.src = 'https://doorbell.io/button/711';(d.getElementsByTagName('head')[0]||d.getElementsByTagName('body')[0]).appendChild(g); }(document, 'script'));</script>";
}
     function displayLoginInfo($info){
         echo "<div class=\"header\">";
		echo "<h1>Start</h1>";
                

		echo " <div class=\"profile\">";
				echo"	<p class=\"name\">".$info['username']."</p>";
					echo "<p class=\"status\">Hello :)</p>";
				echo"</div>";
echo "</div>";
}
  function addStartScreen(){
    echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"/core/css/start.css\"/>";
}
?>