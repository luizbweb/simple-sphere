<?php
	if($_GET) {
		$destino = $_GET['i'];
	} else {
		$destino = '';
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>WAW Simple Sphere 360 Degree Photo Viewer</title>
		<meta name="viewport" content="initial-scale=1.0" />
		<link rel="stylesheet" href="./ex/example1.css" />
	</head>

	<body>
		<header>
			<h1>Simple Sphere 360 degree photo viewer</h1>
		</header>

		<div id="content">

			<p align="center">
	            <h2>Upload your 360 degree photo</h2>
	            <form id="form" enctype="multipart/form-data" method="post" action="manda.php" name="form_foto">
	                <input id="arquivos" type="file" name="arquivo" value="" />
	                <input id="submit" type="submit" value="Enviar Foto">
	            </form>
	        </p>
	        <?php 
	        	if ($destino != ''):
	        ?>
			<p>Click and drag your mouse over a photo to see all the angles ...</p>

			<div id="your-pano"></div>

			<div class="embeded">
				<textarea class="embed-field" cols="20" rows="10"><iframe name="SS360" class="ss360-viewer" scrolling="no" width="800px" height="500px" allowfullscreen="true"  frameborder="0"  src="<?php echo $destino ?>"></iframe> </textarea>
				<h3>Copy and paste this code in your site</h3>

			</div>
			<?php
				endif;
			?>
			<p style="text-align: right;"><a href="http://www.waw.net.br">Powered by WAW</a></p>
		</div>

        <script type="text/javascript">
        	(function($){
		        var content;
		        content = $('#arquivos').value;
		        $('#arquivos').on( 'change', function() {
		            alert('Com arquivo !');
		            if (content !== "") {
		                $('form').append( '<input type="text">' );
		            }
		        });
        	}).jQuery
        
    	</script>

		<!-- External library -->
		<script src="./three.min.js"></script>
		<script scr="./js/jquery-2.2.4.js"></script>
    	<script scr="./src/jquery.form.js"></script>

		<!-- External library, but included in the build -->
		<script src="./src/sphoords.js"></script>

		<!-- Photo Sphere Viewer files -->
		<script src="./src/PhotoSphereViewer.js"></script>
		<script src="./src/PSVNavBar.js"></script>
		<script src="./src/PSVNavBarButton.js"></script>

		<!-- Test script -->
		<script src="./test.js"></script>
		<script type="text/javascript">
			/*(function($){
				// Function from test.js
		        var img = getUrlVars();
		        var embed = '<input class="embed-field" type="text" name="share-code" value="';
		        embed += '<iframe name="SS360" class="ss360-viewer" scrolling="no" width="800px" height="500px" allowfullscreen="true"  frameborder="0"  src="' + img['i'] + '">';
		        embed += '" />';
		        console.log(embed);

		        $('.embeded').append(embed);

			}).jQuery*/

		</script>
	</body>

</html>
