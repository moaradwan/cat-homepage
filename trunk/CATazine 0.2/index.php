<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>CATazine :: CAT's Oficial Magazine</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
	// You may not remove this require .. cauz I'm using the functions in it.
	require_once("control.php");
?>

<table cellpadding="0" cellspacing="0" class="body">
	<tr style="width: 100%; height: 100%;">
		<td style="width: 50%; background-color: #353435; text-align: center; vertical-align: top;">
			<img alt="CATazine Icon" src="images/CATazine-Site_20.gif" style="margin-top: 60px;" />
			<div style="color: white;">Navigation bar here!</div>
		</td>
		<td style="width: 50%; background-color: #ffffff;">
		<table cellpadding="0" cellspacing="0" style="width: 486px; height: 100%;">
			<tr>
				<td style="width: 16px; background-image: url('images/CATazine-Site_03.gif'); background-repeat: repeat-y;">&nbsp;</td>
				<td style="width: 470px;">&nbsp;</td>
			</tr>
			
			<!-- Start Header -->
			<tr>
				<td style="width: 16px; height: 119px;">
					<div style="height: 15px; background-image: url('images/CATazine-Site_05.gif'); background-repeat: no-repeat;">&nbsp;</div>
					<div style="height: 104px; background-image: url('images/CATazine-Site_14.gif'); background-repeat: repeat-y;">&nbsp;</div>
				</td>
				<td style="width: 470px; height: 119px;">
				<table cellpadding="0" cellspacing="0" style="width: 100%; height: 119px;">
					<tr>
						<td>
							<div style="width: 100%; height: 15px; background-image: url('images/CATazine-Site_06.gif'); background-repeat: repeat-x;">&nbsp;</div>
							<div style="width: 100%; height: 104px; background-color: #d4d4d4;">
								<a href="index.php"><img src="images/CATazine-Site_11.gif" alt="CATazine Logo" style="border: none;" /></a>
							</div>
						</td>
						<td style="width: 118px; height: 119px; background-image: url('images/CATazine-Site_08.gif'); background-repeat: no-repeat;">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>
			<!-- End Header -->
			
			<tr class="content">
				<td style="width: 16px; background-image: url('images/CATazine-Site_03.gif'); background-repeat: repeat-y;">&nbsp;</td>
				<td style="width: 470px;">
				<table cellpadding="0" cellspacing="0" style="height: 100%; width: 100%;">
					<tr>
						<!-- Start form -->
						<td style="vertical-align: top; padding-top: 10px; font-size: 12px; line-height: 20px;">
							<!-- Content Goes Here -->
							<?php ContentController(); ?>
						</td>
						<!-- End form -->
						<td style="width: 16px; height: 100%; background-image: url('images/CATazine-Site_17.gif'); background-repeat: repeat-y;">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>
			
			<!-- Start Footer -->
			<tr>
				<td style="width: 16px; height: 37px; background-image: url('images/CATazine-Site_24.gif'); background-repeat: no-repeat;">&nbsp;</td>
				<td style="width: 470px; height: 37px;">
				<table cellpadding="0" cellspacing="0" style="height: 100%; width: 100%;">
					<tr>
						<td style="background-image: url('images/CATazine-Site_26.gif'); text-align: center; padding-bottom: 9px;"><span class="footer">All Copyrights Reserved to <a href="http://catreloaded.net" title="CATreloaded.net" target="_blank">CATreloaded.net</a></span></td>
						<td style="width: 28px; background-image: url('images/CATazine-Site_27.gif');">&nbsp;</td>
					</tr>
				</table>
				</td>
			</tr>
			<!-- End Foorter -->
			
			<tr>
				<td style="width: 16px; background-image: url('images/CATazine-Site_03.gif'); background-repeat: repeat-y;">&nbsp;</td>
				<td style="width: 470px;">&nbsp;</td>
			</tr>
		</table>
		</td>
	</tr>
</table>

<div style="bottom: 0px; left: 0px; padding-bottom: 5px; padding-left:5px; position:fixed; z-index: 200000000;">
	<a title="Do yourself a favour and use a real browser .. Get firefox!" href="http://www.mozilla.com/en-US/firefox/" target="_blank">
		<img src="images/button-firefox.png" alt="Do yourself a favour and use a real browser - get firefox!!" style="border: none;" />
	</a>
</div>

</body>

</html>
