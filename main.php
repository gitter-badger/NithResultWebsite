<!DOCTYPE html>
<html>

<head>
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/mycustom.css" />
</head>

<body>


	<!-- Including the tile on main page -->
	<?php
		include_once "includes/title.php" ;
	?>

	<!-- The links  -->
	<div >
		<?php
			include_once "includes/header2.php" ;
		?>
	</div>

	<div class="row">

		<div class="span9 offset1">

			<div class="container span9 list-group-item-success" style="color:black; font-family:, cursive; padding: 20px; border-radius: 5px;
			 box-shadow:1px 1px 2px black; font-size:15px; margin-bottom:40px; text-align:justify; background:#EFF2EF;">
				A more interactive result. Find result easiy by name, roll number as well as ranking.
				With comment and like feature on everyones result page.
				Check out your result again!
			</div>
			<br/><br/>
			<!-- Search by name -->
			<form class="well form-search span9" style="margin-left:0px" action="name.php" method="POST">
				<!-- <input type = "text" name="scheme" id="schemeName" />
				<input type = "text" name="dept" id="deptName" /> -->
				<h3 class="text-info" style="font-family:Lobster">Search by Name </h3>
				<blockquote style="color:#666;">Definitely , the easiest way to search anything.</blockquote>
				<hr />
				<div class="form-group">
					<label class="text-info" for="sel1">Year: </label>
					<select class="form-control" id="schemeName" name="scheme" required>
					    <option value="">Choose your year: </option>
					    <option value=11>Final Year</option>
					    <option value=12>Third Year</option>
					    <option value=13>Second Year</option>
					    <option value=14>First Year</option>
					</select>
				</div>
				</br>

				<div class="form-group">
					<label class="text-info" for="sel1"> Department : </label>
					<select class="form-control" id="deptName" name="dept" required>
					  	<option value="">Choose department</option>option>
					    <option value="CED">Civil </option>
					    <option value="MED">Mechanical</option>
					    <option value="CSE">Computer Science</option>
					    <option value="EEE">Electrical</option>
					  	<option value="CHD">Chemical</option>
					  	<option value="ARCH">Architecture</option>
					  	<option value="EEE">Electronics & Comm.</option>
					</select>
				</div>
				</br>

				<input type="text" name="student" class="span6 search-query" placeholder="Search by name ...." list="nameList" required>
					<datalist id="nameList">
						<!-- data to be fetched with ajax -->
					</datalist>
				</input>
				<button class="btn btn-info"> Search </button>
			</form>

			<!-- Search by Roll Number -->
			<form class="well form-search span9" style="margin-left:0px" action="rollno.php" method="GET">
				<h3 class="text-info" style="font-family:Lobster">Search by Roll Number </h3>
				<blockquote style="color:#666;"> The old School Boring Way</blockquote>
				<hr />
				<input type="text" name="roll" class="span6 search-query" placeholder="Search by Rollno."required></input>
				<button class="btn btn-info "> Search </button>
			</form>

			<!-- Search by Ranking -->
			<form class="well form-search span9" style="margin-left:0px" action="ranking.php" method="POST">
				<h3 class="text-info" style="font-family:Lobster">Search by Rank</h3>
				<blockquote style="color:#666;">Wow! A new thing. Take a look of where do you stand in your class, branch, year and in the whole college </blockquote>
				<hr />
				<div class="form-group">
					<label for="sel1" class="text-info">Ranking by:</label>
					<select class="form-control" id="rankSort" name="rankSort" onchange ="displayForm()" required>
						<option value="">Choose</option>
				    <option value="class">Class</option>
				    <option value="year">Year</option>
				    <option value="college" >College</option>
				  	<option value="branch">Branch</option>
					</select>
				</div>

				<div id = 'yearForm' style="display:none;" class="form-group">
				<br />
				<label class="text-info"for="sel1">Year: </label>
					<select class="form-control" id="schemeRank" name="scheme">
				    <option value="">Choose your year: </option>
				    <option value=11>Final Year</option>
				    <option value=12>Third Year</option>
				    <option value=13>Second Year</option>
				    <option value=14>First Year</option>
					</select>
				<br />
				</div>

				<div class="form-group" id = 'deptForm' style="display:none;" >
					<br />
					<label class="text-info" for="sel1"> Department : </label>
					<select class="form-control" id="branchRank" name="dept">
				  	<option value="">Choose department</option>option>
				    <option value="CED">Civil</option>
				    <option value="EEE">Electrical</option>
				    <option value="MED">Mechanical</option>
				    <option value="ECE">Electronics &amp; Communication</option>
				    <option value="CSE">Computer Science</option>
				    <option value="ARCH">Architecture</option>
				  	<option value="CHD">Chemical</option>
					</select>

				</div>
				</br>
				<input type="text" name="rank" class="span6 search-query" placeholder="Search by Ranking...." required></input>
				<button class="btn btn-info"> Search </button>
			</form>
		</div>

		<div id="rightSide" class="span4 offset2">
			</br></br>
			<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fnithresult&amp;width=280&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=172911126103721" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:290px;" allowTransparency="true"></iframe>
		</div>
	</div>

	<!-- Bottom badges -->
	<div class="row ">
		<?php require 'includes/middle.php' ?>
	</div>

	<div class="row" style="background: #999999; margin-top:20px;">
		<h5 class="text-center">No Rights Reserved</br>@OPEN-SOURCE</h5>
	</div>

	<script src="js/jQuery.js"></script>
	<script src="js/bootstrap.js"></script>

	<script type="text/javascript">
		window.onload = function() {
			console.log('What');
			var deptName = document.getElementById("deptName");
			var schemeName = document.getElementById("schemeName");
			deptName.addEventListener('change', fetchName);
			schemeName.addEventListener('change', fetchName);
			var rankSort = document.getElementById('rankSort');
			rankSort.addEventListener('change', displayForm);
			displayForm();
			fetchName();
			$("#my-button").click(function(){
				$("#my-modal").modal();
			});
			// about this
			$("#my-button2").click(function(){
				$("#my-modal2").modal();
			});
			// work with me
			$("#my-button3").click(function(){
				$("#my-modal3").modal();
			});
		};

		function fetchName() {
			console.log('fetching names');
			var schemeName = document.getElementById("schemeName").value.trim();
			var deptName = document.getElementById("deptName").value.trim();
			var data = {
				"scheme" : schemeName,
				"dept" : deptName
			};

			$.post("autoname.php", data, function(returnedData) {
				var nameList = document.getElementById("nameList");
				nameList.innerHTML = returnedData;
			});
		}

		function displayForm() {
				var x = document.forms[2][0].value;
				var schemeRank = document.getElementById('schemeRank');
				var branchRank = document.getElementById('branchRank');
				if (x == "class") {
					schemeRank.setAttribute('required', true);
					branchRank.setAttribute('required', true);
					$('#yearForm').attr('style','display:none')
					$('#deptForm').attr('style','display:none');
 	 			$('#yearForm').attr('style','display:block');
      	$('#deptForm').attr('style','display:block');
			} else if (x == "year") {
				schemeRank.setAttribute('required', true);
					branchRank.removeAttribute('required');
    		$('#yearForm').attr('style','display:none')
					$('#deptForm').attr('style','display:none');
 	 			$('#yearForm').attr('style','display:block');
      } else if (x == "branch") {
      	schemeRank.removeAttribute('required');
					branchRank.setAttribute('required', true);
 	 			$('#yearForm').attr('style','display:none')
					$('#deptForm').attr('style','display:none');
      	$('#deptForm').attr('style','display:block');
   		} else {
   			branchRank.removeAttribute('required');
   			schemeRank.removeAttribute('required');
   			$('#yearForm').attr('style','display:none')
					$('#deptForm').attr('style','display:none');
   		}
   	}

	</script>

	<!--  the facebook widget -->
	<script>
		(function(d, s, id) {
	  	var js, fjs = d.getElementsByTagName(s)[0];
	  	if (d.getElementById(id)) return;
	  	js = d.createElement(s); js.id = id;
	  	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  	fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

</body>

</html>
<script type="text/javascript">stLight.options({publisher: "022466ca-4c5b-468b-b9b6-a1ac9338ecc4", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
	var options={ "publisher": "022466ca-4c5b-468b-b9b6-a1ac9338ecc4", "logo": { "visible": false, "url": "", "img": "http://sd.sharethis.com/disc/images/demo_logo.png", "height": 45}, "ad": { "visible": false, "openDelay": "5", "closeDelay": "0"}, "livestream": { "domain": "", "type": "sharethis", "customColors": { "widgetBackgroundColor": "#FFFFFF", "articleLinkColor": "#006fbb"}}, "ticker": { "visible": false, "domain": "", "title": "", "type": "sharethis", "customColors": { "widgetBackgroundColor": "#1d4161", "articleLinkColor": "#FFFFFF"}}, "facebook": { "visible": false, "profile": "sharethis"}, "fblike": { "visible": false, "url": ""}, "twitter": { "visible": false, "user": "sharethis"}, "twfollow": { "visible": false}, "custom": [{ "visible": false, "title": "Custom 1", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}, { "visible": false, "title": "Custom 2", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}, { "visible": false, "title": "Custom 3", "url": "", "img": "", "popup": false, "popupCustom": { "width": 300, "height": 250}}], "chicklets": { "items": ["facebook", "twitter", "email", "sharethis", "wordpress", "stumbleupon"]}, "background": "#558aca", "color": "#2150a5", "arrowStyle": "light"};
	var st_bar_widget = new sharethis.widgets.sharebar(options);
</script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-54baba3e3f6d48c3" async="async"></script> -->
