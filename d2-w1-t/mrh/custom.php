<html>
<head>
<title>Mr. H Cares</title>
<style>

body {

background-color: <?php
	echo $_GET['bgc'];
	?>;
	
color: <?php
	echo $_GET['fc'];
	?>;

}	

a:link, a:visited {

color: #00cc00;

}

form {

border: 2px solid <?php echo $_GET['fc']; ?>;
padding: 10px;
width: 400px;
margin-left: 50px;

}



</style>

</head>
<body>


<h1>Mr. H cares about your preferences.</h1>

<h3>Choose a style:</h3>
<p><a href='?bgc=ffff00&fc=000000'>Black on Yellow</a></p>
<p><a href='?bgc=012345&fc=abcdef'>Blue City</a></p>

<form method='get' action='custom.php'>
<h3>Or make your own:</h3>
<p>Background color: <input type='color' name='bgc' value='<?php echo $_GET['bgc']; ?>' /></p>
<p><input type='radio' name='fc' value='white' />White text</p>
<p><input type='radio' name='fc' value='yellow' checked='checked' />Yellow text</p>
<input type='submit'>
</form>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis fermentum porttitor nisi eu fermentum. Vestibulum blandit massa et malesuada ultricies. Suspendisse eu turpis a dolor fringilla cursus. Phasellus ac justo vitae leo dictum pulvinar eget non mauris. Nullam nec dui scelerisque, faucibus ante et, tempus mi. Etiam convallis consectetur nunc in condimentum. Mauris placerat felis sed rutrum interdum. Pellentesque ligula justo, feugiat sit amet ligula vitae, tempor aliquet nunc. Suspendisse ultrices orci ut justo lacinia, eget placerat purus rutrum. Integer fermentum, neque id consequat eleifend, urna velit viverra nulla, eu tempus tortor ante eu quam. Morbi tincidunt neque rhoncus neque auctor tristique. Mauris eleifend, felis viverra condimentum dapibus, quam risus porttitor sapien, a elementum massa velit vitae arcu. Vivamus interdum tempus neque, euismod posuere nisi sodales sit amet. Nunc congue dolor et nisi gravida dignissim.</p>

<p>Suspendisse sagittis purus vitae est interdum facilisis. Mauris vel faucibus nunc. Mauris sed blandit urna. Proin sed vulputate felis. Ut urna dolor, vulputate ornare lectus in, tempus feugiat nisl. Nulla mollis sodales lorem, a lobortis augue fringilla ac. Sed felis purus, euismod ut lorem id, fermentum cursus lorem.</p>

<p>Vestibulum at est pretium, pulvinar elit eget, egestas enim. Sed blandit sapien eros. Proin luctus sem a nunc viverra, a aliquet mi consectetur. Aliquam erat volutpat. Fusce ultricies sapien egestas turpis viverra pellentesque. Sed eu fermentum mi. Vestibulum dictum ac diam vitae mollis. Vestibulum tortor orci, tincidunt vel eros ac, rutrum vehicula nisi. Donec ac tellus sodales, feugiat leo sed, scelerisque nulla. Donec lacinia nisi vel sem interdum, vitae tincidunt orci interdum. Nullam adipiscing gravida lorem, quis bibendum odio auctor quis. Vivamus bibendum eget magna sit amet gravida. Etiam sagittis, nisi ac lacinia suscipit, ante lectus consequat erat, sed accumsan tortor quam eget arcu. Suspendisse eu vestibulum lacus.</p>

<p>In dictum lorem sed lorem consequat, non fringilla sapien dignissim. Morbi vestibulum lorem eget rhoncus luctus. In eu ipsum eros. Morbi tellus magna, varius eu orci vitae, rhoncus tristique lorem. Nulla facilisi. Suspendisse potenti. Nullam sed dapibus sem. Praesent non adipiscing magna. Ut vestibulum tempus ligula id fringilla. Sed luctus accumsan nibh. Sed vel pulvinar sapien. Morbi nec interdum felis, et vestibulum nunc. Quisque non risus augue.</p>

</body>
</html>