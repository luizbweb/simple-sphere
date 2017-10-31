window.onload = function() {
	// document.getElementById('pano').addEventListener('load', upload, false);
	upload();
};

function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
// Load a panorama stored on the user's computer
function upload() {
	// Retrieve the chosen file and create the FileReader object
	// var file = document.getElementById('pano').files[0];
	// var file = 'examples/snow.jpg';
	// var reader = new FileReader();
	// Obtaining the value from GET
	var image = getUrlVars();

	// reader.onload = function() {
		PSV = new PhotoSphereViewer({
			// Panorama, given in base 64
			// panorama: reader.result,
			// panorama: 'ex/sun.jpg',
			panorama: image['i'],
			// panorama: 'examples/escritorio.jpg',

			// Container
			container: 'your-pano',

			// Carregar automaticamente o panorama
			autoload: true,

			// Deactivate the animation
			time_anim: 2000,

			// Display the navigation bar
			navbar: true,

			// Resize the panorama
			size: {
				width: '100%',
				height: '500px'
			},

			// No XMP data
			// usexmpdata: false
		});
	// };

	// reader.readAsDataURL(file);
}

// Yep, an ugly global variable (to make tests with the console)
var PSV;
