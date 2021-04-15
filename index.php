<!DOCTYPE html>
<html lang="pl-PL">

<head>
	<meta charset="utf-8">
	<title>Rainbow 6 MMR</title>
	<script type="text/javascript" src="canvasjs.min.js"></script>
	<script src="jquery-3.4.1.min.js"></script>
	<link rel="stylesheet" href="styles.css">
	<p style="color:grey;right:20px;position:absolute">v2.0<br><i>by pabbloo<br>2021</i></p>
	<link rel="icon" href="favicon.ico">
</head>

<body style="background-image: url('background.jpg');">
	<div id="header" style="font-size:58px; padding-top:10px;padding-left:10px">
		<img id="header_img" src="r6logo.png" style="height:64px" />
		<span style="position:relative; bottom:10px;left:10px">MMR LEVEL</span>
	</div>

	<div id="tabelka" style="position:absolute;width:700px;height:380px;">
		<table id="glowna">
			<tr>
				<th style="color:#36a9e1">MALCHER8</th>
				<th id="maIcher8"></th>
				<th id="i_maIcher8" style="width:52px;padding:0px"></th>
				<th id="r_maIcher8" style="width:150px"></th>
				<th id="ch_i_maIcher8" style="width:30px;text-align:center"></th>
				<th id="ch_maIcher8" style="width:50px"></th>
			</tr>
			<tr>
				<th style="color:#36a9e1">PABBLOO13</th>
				<th id="pabbloo13"></th>
				<th id="i_pabbloo13" style="padding:0px"></th>
				<th id="r_pabbloo13"></th>
				<th id="ch_i_pabbloo13" style="text-align:center"></th>
				<th id="ch_pabbloo13"></th>
			</tr>
			<tr>
				<th style="color:#36a9e1">WASIL48</th>
				<th id="wasil48"></th>
				<th id="i_wasil48" style="padding:0px"></th>
				<th id="r_wasil48"></th>
				<th id="ch_i_wasil48" style="text-align:center"></th>
				<th id="ch_wasil48"></th>
			</tr>
			<tr>
				<th style="color:#36a9e1">KUCYK12PL</th>
				<th id="kucyk12PL"></th>
				<th id="i_kucyk12PL" style="padding:0px"></th>
				<th id="r_kucyk12PL"></th>
				<th id="ch_i_kucyk12PL" style="text-align:center"></th>
				<th id="ch_kucyk12PL"></th>
			</tr>
			<!--
	<tr>
		<th>Trututu20</th>
		<th id="Trututu20" ></th>
		<th id="i_Trututu20" style="padding:0px"></th>
		<th id="r_Trututu20" ></th>
		<th id="ch_i_Trututu20" style="text-align:center"></th>
		<th id="ch_Trututu20"></th>
	</tr>
	
	<tr>
		<th>WarriorLFK</th>
		<th id="WarriorLFK" ></th>
		<th id="i_WarriorLFK" style="padding:0px" ></th>
		<th id="r_WarriorLFK" ></th>
		<th id="ch_i_WarriorLFK" style="text-align:center"></th>
		<th id="ch_WarriorLFK"></th>
	</tr>
	
	<tr>
		<th>BRZYCHWA</th>
		<th id="lvl_Brzychwa"> wait...</th>
	</tr>
-->
		</table>
		<p style="font-size:20pt;padding:10px" id="update_t">Updating...</p>
	</div>
	<div id="divprzycisk" style="position:absolute;width:800px;height:380px;top:50px;left:750px;padding:10px;">
		<table style="border: 0px;text-align:left" id="druga">
			<tr>
				<th style="font-size:20pt; width: 400px;height:340px;font-weight: normal;">
					AKTUALNY SEZON TO Y6S1.
					<br>
					WYKRESY Z POPRZEDNICH SEZONÓW:
					<br>
					<a href="Y5S2.png">Y5S2</a> |
					<a href="Y5S3.png">Y5S3</a> |
					<a href="Y5S4.png">Y5S4</a>
					<br><br><br>
					<span id="diff">SPRAWDZANIE RÓZNIC...</span>
					<br><br><br>DANE NIEAKTUALNE?<br>
					<button id="guzik" title="Nie można za często odświeżać">ZAKTUALIZUJ</button>
				</th>
				<th style="font-size:12pt; width: 400px;height:340px;font-weight: normal;padding:0px">
					<center>
						<div id="memik"></div>
					</center>
				</th>
			</tr>
			<tr>
				<th></th>
				<th style="font-size:16pt;font-weight: normal;padding:0px">
					<center> MEM DNIA </center>
				</th>
			</tr>
		</table>

	</div>
	<script type="text/javascript">
		function wypelnij_tabele() {
			<?php

			function mmr_2_rank($mmr)
			{
				if ($mmr < 1600) {
					$rank = "Copper";
				} elseif (($mmr >= 1600) && ($mmr < 1700)) {
					$rank = "Bronze V";
				} elseif (($mmr >= 1700) && ($mmr < 1800)) {
					$rank = "Bronze IV";
				} elseif (($mmr >= 1800) && ($mmr < 1900)) {
					$rank = "Bronze III";
				} elseif (($mmr >= 1900) && ($mmr < 2000)) {
					$rank = "Bronze II";
				} elseif (($mmr >= 2000) && ($mmr < 2100)) {
					$rank = "Bronze I";
				} elseif (($mmr >= 2100) && ($mmr < 2200)) {
					$rank = "Silver V";
				} elseif (($mmr >= 2200) && ($mmr < 2300)) {
					$rank = "Silver IV";
				} elseif (($mmr >= 2300) && ($mmr < 2400)) {
					$rank = "Silver III";
				} elseif (($mmr >= 2400) && ($mmr < 2500)) {
					$rank = "Silver II";
				} elseif (($mmr >= 2500) && ($mmr < 2600)) {
					$rank = "Silver I";
				} elseif (($mmr >= 2600) && ($mmr < 2800)) {
					$rank = "Gold III";
				} elseif (($mmr >= 2800) && ($mmr < 3000)) {
					$rank = "Gold II";
				} elseif (($mmr >= 3000) && ($mmr < 3200)) {
					$rank = "Gold I";
				} elseif (($mmr >= 3200) && ($mmr < 3600)) {
					$rank = "Platinum III";
				} elseif (($mmr >= 3600) && ($mmr < 4000)) {
					$rank = "Platinum II";
				} elseif (($mmr >= 4000) && ($mmr < 4400)) {
					$rank = "Platinum I";
				} elseif ($mmr >= 4400) {
					$rank = "Diamond";
				} else {
					$rank = "error";
				}

				return $rank;
			}
			function mmr_2_icon($mmr)
			{
				if ($mmr < 1600) {
					$icon = 5;
				} elseif (($mmr >= 1600) && ($mmr < 1700)) {
					$icon = 6;
				} elseif (($mmr >= 1700) && ($mmr < 1800)) {
					$icon = 7;
				} elseif (($mmr >= 1800) && ($mmr < 1900)) {
					$icon = 8;
				} elseif (($mmr >= 1900) && ($mmr < 2000)) {
					$icon = 9;
				} elseif (($mmr >= 2000) && ($mmr < 2100)) {
					$icon = 10;
				} elseif (($mmr >= 2100) && ($mmr < 2200)) {
					$icon = 11;
				} elseif (($mmr >= 2200) && ($mmr < 2300)) {
					$icon = 12;
				} elseif (($mmr >= 2300) && ($mmr < 2400)) {
					$icon = 13;
				} elseif (($mmr >= 2400) && ($mmr < 2500)) {
					$icon = 14;
				} elseif (($mmr >= 2500) && ($mmr < 2600)) {
					$icon = 15;
				} elseif (($mmr >= 2600) && ($mmr < 2800)) {
					$icon = 16;
				} elseif (($mmr >= 2800) && ($mmr < 3000)) {
					$icon = 17;
				} elseif (($mmr >= 3000) && ($mmr < 3200)) {
					$icon = 18;
				} elseif (($mmr >= 3200) && ($mmr < 3600)) {
					$icon = 19;
				} elseif (($mmr >= 3600) && ($mmr < 4000)) {
					$icon = 20;
				} elseif (($mmr >= 4000) && ($mmr < 4400)) {
					$icon = 21;
				} elseif ($mmr >= 4400) {
					$icon = 22;
				} else {
					$icon = "error";
				}

				return $icon;
			}

			include 'db.php';

			function wez_z_bazy($nick, $con)
			{
				$sql = "SELECT * FROM " . $nick . " ORDER BY id DESC LIMIT 1";
				$result = mysqli_query($con, $sql);

				while ($row = mysqli_fetch_array($result)) {
					$mmr = $row['mmr'];
					echo "document.getElementById('" . $nick . "').innerHTML=" . $mmr . ";";
					$rank = mmr_2_rank($mmr);
					echo "document.getElementById('r_" . $nick . "').innerHTML='" . $rank . "';";
					$icon = mmr_2_icon($mmr);
					echo "var ikonka = 'ikonki/" . $icon . ".svg';";
					$ch = $row['ch'];
					echo "document.getElementById('ch_" . $nick . "').innerHTML='" . $ch . "';";

					if ((int)$ch < 0) {
						echo "var img = document.createElement('img');";
						echo "img.src = 'loss.png';";
						echo "img.style.width = '24px';";
						echo "img.style.height = '24px';";
						echo "var src = document.getElementById('ch_i_" . $nick . "');";
						echo "src.appendChild(img);";
					} else {
						echo "var img = document.createElement('img');";
						echo "img.src = 'gain.png';";
						echo "img.style.width = '24px';";
						echo "img.style.height = '24px';";
						echo "var src = document.getElementById('ch_i_" . $nick . "');";
						echo "src.appendChild(img);";
					}

					echo "var img = document.createElement('img');";
					echo "img.src = ikonka;";
					echo "img.style.width = '50px';";
					echo "img.style.height = '50px';";
					echo "var src = document.getElementById('i_" . $nick . "');";
					echo "src.appendChild(img);";
				}
			}
			wez_z_bazy("maIcher8", $con);
			wez_z_bazy("pabbloo13", $con);
			wez_z_bazy("wasil48", $con);
			//wez_z_bazy("WarriorLFK",$con);
			wez_z_bazy("kucyk12PL", $con);
			//wez_z_bazy("Trututu20",$con);

			$sql = "SELECT * FROM maIcher8 ORDER BY id DESC LIMIT 1";
			$result = mysqli_query($con, $sql);

			while ($row = mysqli_fetch_array($result)) {
				$data = $row['data'];
				echo "document.getElementById('update_t').innerHTML = 'PREZENTOWANE DANE Z " . $data . "';";
				$rok = substr($data, 0, 4);
				$miesiac = substr($data, 5, 2);
				$dzien = substr($data, 8, 2);
				$godzina = substr($data, 11, 2);
				$minuta = substr($data, 14, 2);
				$mm = (int)$miesiac - 1;
				echo "var datazbazy = new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . ")";
			}

			?>

			//document.getElementById("diff").innerHTML = document.getElementById("maIcher8").innerHTML - document.getElementById("wasil48").innerHTML;

			var nicki = ["maIcher8", "pabbloo13", "wasil48", "kucyk12PL"];
			var max = 0;
			var min = 9999;
			var max_nick;
			var min_nick;
			var roznica = 0;

			for (k = 0; k <= 3; k++) {
				if (document.getElementById(nicki[k]).innerHTML > max) {
					max = document.getElementById(nicki[k]).innerHTML;
					max_nick = nicki[k]
				}
				if (document.getElementById(nicki[k]).innerHTML < min) {
					min = document.getElementById(nicki[k]).innerHTML;
					min_nick = nicki[k]
				}
			}
			roznica = max - min;

			if (roznica <= 1000) {
				var txt = "WSZYSCY MOGĄ ZE SOBĄ GRAĆ";
				document.getElementById("diff").innerHTML = txt.fontcolor("green");
			} else {
				var txt = max_nick + " NIE MOŻE GRAĆ Z " + min_nick + ". RÓŻNICA: " + roznica;
				document.getElementById("diff").innerHTML = txt.fontcolor("red");

			}


			//memy
			function getRandomInt(min, max) {
				min = Math.ceil(min);
				max = Math.floor(max);
				return Math.floor(Math.random() * (max - min)) + min;
			}

			random = getRandomInt(300, 311);
			var img = document.createElement('img');
			img.src = 'memy/' + random + '.jpg';
			img.style.width = '340px';
			img.style.height = '340px';
			var src = document.getElementById('memik');
			src.appendChild(img);



			if (Date.now() - datazbazy.getTime() < 600000) {
				document.getElementById("guzik").disabled = true;
			}
		}


		function rysuj_wykres() {
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				zoomEnabled: true,
				backgroundColor: "#191e24",
				axisX: {
					<?php
					$sql = "SELECT * FROM maIcher8 ORDER BY id DESC LIMIT 1";
					$result = mysqli_query($con, $sql);

					while ($row = mysqli_fetch_array($result)) {
						$data = $row['data'];
						$rok = substr($data, 0, 4);
						$miesiac = substr($data, 5, 2);
						$dzien = substr($data, 8, 2);
						$dzien = (int)$dzien + 1;
						$godzina = substr($data, 11, 2);
						$minuta = substr($data, 14, 2);
						$mm = (int)$miesiac - 1;
						echo "maximum: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "),";
					}
					?>
					valueFormatString: "DD-MM",
					labelFontColor: "white",
					crosshair: {
						enabled: true,
						snapToDataPoint: true
					}
				},
				axisY: {
					title: "MMR",
					includeZero: false,
					labelFontColor: "white",
					titleFontColor: "white",
					crosshair: {
						enabled: true
					}
				},
				legend: {
					cursor: "pointer",
					fontSize: 14,
					itemclick: toggleDataSeries,
					fontColor: "white",
				},
				toolTip: {
					shared: true,
					backgroundColor: "#70747c",
					borderColor: "black",
				},
				data: [{
						name: "maIcher8",
						type: "line",
						showInLegend: true,
						color: "#68a3e5",
						dataPoints: [
							<?php

							$result = mysqli_query($con, "SELECT * FROM maIcher8");
							$num_rows = mysqli_num_rows($result);

							for ($id = 1; $id <= $num_rows; $id++) {
								$sql = "SELECT * FROM maIcher8 WHERE id = $id";
								$result = mysqli_query($con, $sql);

								while ($row = mysqli_fetch_array($result)) {
									$data = $row['data'];
									$rok = substr($data, 0, 4);
									$miesiac = substr($data, 5, 2);
									$dzien = substr($data, 8, 2);
									$godzina = substr($data, 11, 2);
									$minuta = substr($data, 14, 2);
									$mm = (int)$miesiac - 1;

									echo "{ x: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "), y: " . $row['mmr'] . " },";
								}
							}


							?>
						]
					},
					{
						name: "pabbloo13",
						type: "line",
						showInLegend: true,
						color: "#F4D03F",
						dataPoints: [
							<?php

							$result = mysqli_query($con, "SELECT * FROM pabbloo13");
							$num_rows = mysqli_num_rows($result);

							for ($id = 1; $id <= $num_rows; $id++) {
								$sql = "SELECT * FROM pabbloo13 WHERE id = $id";
								$result = mysqli_query($con, $sql);

								while ($row = mysqli_fetch_array($result)) {
									$data = $row['data'];
									$rok = substr($data, 0, 4);
									$miesiac = substr($data, 5, 2);
									$dzien = substr($data, 8, 2);
									$godzina = substr($data, 11, 2);
									$minuta = substr($data, 14, 2);
									$mm = (int)$miesiac - 1;

									echo "{ x: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "), y: " . $row['mmr'] . " },";
								}
							}


							?>
						]
					},
					{
						name: "wasil48",
						type: "line",
						showInLegend: true,
						color: "#109856",
						dataPoints: [
							<?php

							$result = mysqli_query($con, "SELECT * FROM wasil48");
							$num_rows = mysqli_num_rows($result);

							for ($id = 1; $id <= $num_rows; $id++) {
								$sql = "SELECT * FROM wasil48 WHERE id = $id";
								$result = mysqli_query($con, $sql);

								while ($row = mysqli_fetch_array($result)) {
									$data = $row['data'];
									$rok = substr($data, 0, 4);
									$miesiac = substr($data, 5, 2);
									$dzien = substr($data, 8, 2);
									$godzina = substr($data, 11, 2);
									$minuta = substr($data, 14, 2);
									$mm = (int)$miesiac - 1;

									echo "{ x: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "), y: " . $row['mmr'] . " },";
								}
							}


							?>
						]
					},
					{
						name: "Kucyk12PL",
						type: "line",
						showInLegend: true,
						color: "#ff72ea",
						dataPoints: [
							<?php

							$result = mysqli_query($con, "SELECT * FROM kucyk12PL");
							$num_rows = mysqli_num_rows($result);

							for ($id = 1; $id <= $num_rows; $id++) {
								$sql = "SELECT * FROM kucyk12PL WHERE id = $id";
								$result = mysqli_query($con, $sql);

								while ($row = mysqli_fetch_array($result)) {
									$data = $row['data'];
									$rok = substr($data, 0, 4);
									$miesiac = substr($data, 5, 2);
									$dzien = substr($data, 8, 2);
									$godzina = substr($data, 11, 2);
									$minuta = substr($data, 14, 2);
									$mm = (int)$miesiac - 1;

									echo "{ x: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "), y: " . $row['mmr'] . " },";
								}
							}


							?>
						]
					},
					{
						name: "GOLD",
						type: "line",
						showInLegend: false,
						color: "#f5dd42",
						lineDashType: "dash",
						dataPoints: [

							<?php

							$sql = "SELECT * FROM maIcher8 WHERE id=1";
							$result = mysqli_query($con, $sql);

							while ($row = mysqli_fetch_array($result)) {
								$data = $row['data'];
								$rok = substr($data, 0, 4);
								$miesiac = substr($data, 5, 2);
								$dzien = substr($data, 8, 2);
								$godzina = substr($data, 11, 2);
								$minuta = substr($data, 14, 2);
								$mm = (int)$miesiac - 1;

								echo "{ x: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "), y: 2600 },";
							}

							$sql = "SELECT * FROM maIcher8 ORDER BY id DESC LIMIT 1";
							$result = mysqli_query($con, $sql);

							while ($row = mysqli_fetch_array($result)) {
								$data = $row['data'];
								$rok = substr($data, 0, 4);
								$miesiac = substr($data, 5, 2);
								$dzien = substr($data, 8, 2);
								$dzien = (int)$dzien + 1;
								$godzina = substr($data, 11, 2);
								$minuta = substr($data, 14, 2);
								$mm = (int)$miesiac - 1;

								echo "{ x: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "), y: 2600 },";
							}

							?>
						]
					},
					{
						name: "PLATYNA",
						type: "line",
						showInLegend: false,
						color: "#42f5da",
						lineDashType: "dash",
						dataPoints: [

							<?php

							$sql = "SELECT * FROM maIcher8 WHERE id=1";
							$result = mysqli_query($con, $sql);

							while ($row = mysqli_fetch_array($result)) {
								$data = $row['data'];
								$rok = substr($data, 0, 4);
								$miesiac = substr($data, 5, 2);
								$dzien = substr($data, 8, 2);
								$godzina = substr($data, 11, 2);
								$minuta = substr($data, 14, 2);
								$mm = (int)$miesiac - 1;

								echo "{ x: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "), y: 3200 },";
							}

							$sql = "SELECT * FROM maIcher8 ORDER BY id DESC LIMIT 1";
							$result = mysqli_query($con, $sql);

							while ($row = mysqli_fetch_array($result)) {
								$data = $row['data'];
								$rok = substr($data, 0, 4);
								$miesiac = substr($data, 5, 2);
								$dzien = substr($data, 8, 2);
								$dzien = (int)$dzien + 1;
								$godzina = substr($data, 11, 2);
								$minuta = substr($data, 14, 2);
								$mm = (int)$miesiac - 1;

								echo "{ x: new Date(" . $rok . ", " . $mm . ", " . $dzien . ", " . $godzina . ", " . $minuta . "), y: 3200 },";
							}

							?>
						]
					},
				]
			});
			chart.render();

			function toggleDataSeries(e) {
				if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
					e.dataSeries.visible = false;
				} else {
					e.dataSeries.visible = true;
				}
				chart.render();
			}

		}

		function updt() {
			document.getElementById("guzik").disabled = true;
			document.getElementById('update_t').innerHTML = "AKTUALIZACJA, PROSZĘ CZEKAĆ...";

			var id1 = 'b6f25c0b-2e9f-4489-879d-e797e1098979';
			var id2 = 'b4d2eed4-8fe4-42b6-97e8-a44de7de1766';
			var id3 = '2507771d-9553-4659-a322-e96402793c5c';
			var id4 = 'b84d1d8d-3ac2-4b1e-95bc-dae001fc87d5';
			//var id5='4880cea3-5204-4cce-b118-3ed44c9bebc9';
			//var id6="e42f3e1e-b7ac-4bbb-95d5-cfb65cc06329"		

			function after() {
				document.getElementById('update_t').innerHTML = "ZAKTUALIZOWANO TERAZ";
				document.getElementById("diff").innerHTML = document.getElementById("maIcher8").innerHTML - document.getElementById("wasil48").innerHTML;
				var urlek
				urlek = "?maIcher8=" + document.getElementById("maIcher8").innerHTML + "&ch_m=" + document.getElementById("ch_maIcher8").innerHTML +
					"&pabbloo13=" + document.getElementById("pabbloo13").innerHTML + "&ch_p=" + document.getElementById("ch_pabbloo13").innerHTML +
					"&wasil48=" + document.getElementById("wasil48").innerHTML + "&ch_was=" + document.getElementById("ch_wasil48").innerHTML +
					"&kucyk12pl=" + document.getElementById("kucyk12PL").innerHTML + "&ch_k=" + document.getElementById("ch_kucyk12PL").innerHTML;
				//"&warriorlfk="+document.getElementById("WarriorLFK").innerHTML+"&ch_war="+document.getElementById("ch_WarriorLFK").innerHTML;
				//"&trututu20="+document.getElementById("Trututu20").innerHTML+"&ch_tru="+document.getElementById("ch_Trututu20").innerHTML;
				//console.log("update.php"+urlek);
				window.location.replace("update.php" + urlek);
			}

			var requestURL = "api/getUser.php?id=" + id1 + "," + id2 + "," + id3 + "," + id4 + "&appcode=123";
			$.getJSON(requestURL, function(response) {
				function odczyt(id) {
					var mmr = response.players[id].mmr;
					var nick = response.players[id].nickname;
					var ch = response.players[id].last_match_mmr_change;
					var rank = response.players[id].rankInfo.name;
					document.getElementById(nick).innerHTML = mmr;
					document.getElementById("r_" + nick).innerHTML = rank;
					document.getElementById("ch_" + nick).innerHTML = ch;
				}
				odczyt(id1);
				odczyt(id2);
				odczyt(id3);
				odczyt(id4);

				after();

			});
		}

		window.onload = function() {
			wypelnij_tabele();
			rysuj_wykres();



			//var id7='bb12ba8b-5664-4bbb-bfa8-7cc77d089503';
			//var requestURL2 = "api/getUser.php?id="+id7+"&appcode=123";		
			//$.getJSON(requestURL2, function(response){
			//		var lvl = response.players[id7].level;
			//
			//		document.getElementById("lvl_Brzychwa").innerHTML=lvl+" lvl";
			//	
			//});




			guzik.onclick = function() {
				updt()
			}
		}
	</script>

	<div id="chartContainer" style="top:450px;height:480px; width: 95%;position:absolute;padding-left:10px"></div>
</body>

</html>