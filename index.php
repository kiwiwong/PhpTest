<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<style type="text/css">
			a{
				text-decoration: none;
				color: gray;
			}
			a:hover{
				color: black;
			}
		</style>
		<script>
			function showResult(str) {
	            if(str.length == 0) {
		            document.getElementById("livesearch").innerHTML = "";
		            document.getElementById("livesearch").style.border = "0px";
		            return;
	            }
	            if(window.XMLHttpRequest) { // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行
		            xmlhttp = new XMLHttpRequest();
	            } else { // IE6, IE5 浏览器执行
		            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	            }
	            xmlhttp.onreadystatechange = function() {
		            if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			            document.getElementById("livesearch").innerHTML = xmlhttp.responseText;
			            document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
		            }
	            }
	            xmlhttp.open("GET", "livesearch.php?q=" + str, true);
	            xmlhttp.send();
            }
        </script>
	</head>
	<body style="text-align: center;">
		<div class="container" style="margin-top: 250px;">
			<form>
			    <h1>Search Website</h1>
			    <input type="text" size="30" onkeyup="showResult(this.value)" style="width: 30%;height: 25px;font-size: 1.2em;"placeholder="livesearch">
			    <div id="livesearch" style="width: 30%;line-height: 25px;margin: 0 auto;text-align: left;color: gray;"></div>
		    </form>
		</div>
		

	</body>

</html>