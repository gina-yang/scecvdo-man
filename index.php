<html>

<!-- @author Gina Yang (ginayang@usc.edu), summer '19 -->

<head>
<meta name="viewport"
	content="width=device-width,height=device-height,initial-scale=1.0" />
	<style>
		@import "https://fonts.googleapis.com/css?family=Montserrat&display=swap";
		body {
			font-family: 'Montserrat', sans-serif;
		}
		
		.rcorners {
			border-radius: 25px;
			background: #e4e6e9;
			padding: 25px;
			width: 270px;
			margin: 5px;
			height: 300px;
			display: inline-block;
			vertical-align: top;
			text-align: left;
		}
		
		.buttons {
			background-color: #990000;
			border: none;
			padding: 15px 32px;
			margin-left: 20px;
			margin-right: 20px;
			margin-bottom: 20px; 
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			color: #fff;
			border-radius: 12px;
			border: 2px solid #990000;
		}
		.buttons:hover{
			background-color: #a80000;
			border: 2px solid #990000;
			transition: 0.3s ease;
		}
		
		a {
			text-decoration: none;
		}
	</style>
	
	<title>SCEC-VDO</title>
	<link rel="icon" type="image/png" href="manual/images/vdologo.png">
</head>

<body>
	<header style="width: 100%; height: 70px; background: #990000; text-align: center;">
		<a href="https://www.scec.org"><img style="width: 90px; height: 50px; padding: 10px;" src="http://www.scec.org/themes/scec/logo.png"/></a>
	</header>

	<div style="width: 100%;" align="center">
		<div style="max-width: 1000px; height: 50px;">
			<img style="width: 100%; height: auto; margin-bottom: 10px;" src='manual/images/scecvdofront.png'>
			<div class="btn" align="center">
				<a class="buttons" href="#">Download v18.9</a>
				<a class="buttons" href="manual/UserGuide.html">&nbsp;&nbsp;User Manual&nbsp;&nbsp;</a>
			</div>
			<div style="display: inline-block; text-align: center;">
				<h2>About SCEC-VDO</h2>
				<p>Researchers and interns at the <a href="http://www.scec.org">Southern California Earthquake Center (SCEC)</a> 
				have built a seismic data visualization software tool called the SCEC Virtual Display of Objects (SCEC-VDO). 
				Written in Java with the Swing GUI toolkit to create interactive menus and the Visualization Toolkit (VTK) to 
				render 3D content, SCEC-VDO allows for the visualization of 3D earthquake and fault objects on maps and the 
				creation of images and movies for analysis, presentation, and publication. </br></br></br>
				</p>
			</div>
			<div class="boxes" align="center" style="margin-bottom: 50px;">
				<div class='rcorners'>
					<b>Visualize data</b>
					<ul>
						<li>Surface maps
						<li>ShakeMaps
						<li>Community fault models
						<li>WGCEP fault models
						<li>Earthquake event catalogs
						<li>Hazus events
						<li>Earthquake simulators
						<li>UCERF3 fault system ruptures
					</ul>
				</div>
				<div class='rcorners'>
					<b>Movies and collaboration made easy</b>
					<p>
						<b><i>Timeline</i></b> allows users to intuitively animate data
						over time and navigate camera positions and turn data sets on
						or off throughout the process. Combined with the new <b><i>Legends</i></b>
						plugin, SCEC-VDO can produce refined movies without post-processing
						software. <b><i>Statefulness</i></b> allows users to save
						their project and continue work at a later time. Collaboration is
						as simple as sharing an XML file.
				</div>
				<div class='rcorners'>
					<b>Downloads</b>
					<p>8/4/17 - Version 17.8 is the current stable release. Just unzip
						and run launch.sh from command prompt. </br>
						Version 18.9 is expected end of summer 2019.</p>
					<p>
					<li><a href='downloads/scecvdo_17.8_macosx_64bit.dmg'>Mac OS X
							(316mb, dmg)</a></li>
					<li><a href='downloads/scecvdo_17.8_macosx_64bit.zip'>Mac OS X
							(316mb, zip)</a></li>
					<li><a href='downloads/scecvdo_17.8_windows_64bit.zip'>Windows 64bit
							(320mb, zip)</a></li>
					<li><a href='downloads/scecvdo_17.8_linux_64bit.zip'>Linux (410mb,
							zip)</a></li>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>
