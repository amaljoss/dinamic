<!DOCTYPE html>
<html>
<head>
	<title>Malayalam Text with WhatsApp Share Button</title>
</head>
<body style="background-color: #f2f2f2;">
	<div style="background-color: #fff; padding: 20px; max-width: 500px; margin: 0 auto;">



	<?php
// File name
$file = 'visitors-count.txt';

// Check if the file exists
if (file_exists($file)) {
    // Get the current count from the file
    $count = (int) file_get_contents($file);
    // Increase the count by 1
    $count++;
    // Write the new count to the file
    file_put_contents($file, $count);
} else {
    // Create the file if it doesn't exist
    file_put_contents($file, 1);
    $count = 1;
}

// Output the count with proper animation by CSS
echo '<div class="count">' . $count . '</div>';

?>

<!-- CSS Animation -->
<style>
.count {
  font-size: 48px;
  animation: count-up 1s ease-out forwards;
}

@keyframes count-up {
  from { transform: translateY(-20px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}
</style>






<?php
$ip = $_SERVER['REMOTE_ADDR'];
$visitors = array();
$count = 0;

$file = fopen("visitor-count.txt", "r");

while(!feof($file)) {
    $line = trim(fgets($file));
    if(!empty($line)) {
        list($line_ip, $timestamp) = explode("|", $line);
        if($line_ip == $ip && time() - $timestamp <= 60) {
            // visitor has been here less than a minute ago
            $count++;
        }
        if(time() - $timestamp > 60) {
            // visitor has been gone for over a minute
            continue;
        }
        $visitors[] = array("ip" => $line_ip, "time" => $timestamp);
        $count++;
    }
}

fclose($file);

$file = fopen("visitor-count.txt", "w");

foreach($visitors as $visitor) {
    fwrite($file, $visitor['ip'] . "|" . $visitor['time'] . "\n");
}

fwrite($file, $ip . "|" . time() . "\n");

fclose($file);

echo '<div class="visitor-count">Online visitors: '.$count.'</div>';
?>


<!-- CSS Animation -->
<style>
.visitor-count {
    transition: all 0.5s ease-in-out;
}

</style>


		<h2 style="text-align: center;">യൂദാശ്ലീഹായുടെ നൊവേന</h2>
		<p style="text-align: left; font-size: 14px;">മിശിഹായുടെ സ്നേഹിതനും വിശ്വസ്ത ദാസനുമായ വിശുദ്ധ യൂദാശ്ലീഹായെ,ഏറ്റവും കഷ്ടപ്പെടുന്ന എനിക്കുവേണ്ടി അപേക്ഷിക്കണമെ.യാതൊരു സഹായവും ഫലസിദ്ധിയുമില്ലാതെവരുന്ന സന്ദര്‍ഭത്തില്‍ ഏറ്റവും ത്വരിതവും ഗോചരവുമായ സഹായം ചെയ്യുന്നതിന്,അങ്ങേയ്ക്ക് വിശേഷവിധിയായി കിട്ടിയിരിക്കുന്ന അനുഗ്രഹത്തെ അങ്ങ്  ഉപയോഗിക്കണമേ.എന്റെ എല്ലാ ആവശൃങ്ങളിലും വിശിഷൃാ(ആവശൃം പറയുക) അങ്ങേ സഹായം ഞാന്‍ അപേക്ഷിക്കുന്നു.ഭാഗൃപ്പെട്ട യൂദാശ്ലീഹായേ! അങ്ങു വഴിയായി ലഭിക്കുന്ന ഈ അനുഗ്രഹത്തിന് ഞാന്‍ ദൈവത്തിന് നന്ദി പറയുന്നു.എന്നാലാവുംവിധം അങ്ങയുടെ ഭക്തി  പ്രചരിപ്പിക്കാമെന്ന് ഞാന്‍ വാഗ്ദാനം ചെയ്യുന്നു.</p>
		<p style="text-align: left; font-size: 14px;">ആമ്മേന്‍</p>
		<h2 style="text-align: center;">പരിശുദ്ധാത്മാവിനോടുള്ള പ്രാര്‍ത്ഥന</h2>
		<p style="text-align: left; font-size: 14px;">പരിശുദ്ധാത്മാവേ,എല്ലാം വെളിപ്പെടുത്തുകയും എനിക്ക് വഴികാട്ടിത്തരികയും എന്നോട് മറ്റള്ളവര്‍ ചെയ്യുന്നതെല്ലാം ക്ഷമിക്കുവാനും മറക്കുവാനും കഴിവുതരുന്ന ദൈവികദാനം തരികയും എന്റെ എല്ലാ ചിന്തകളിലും ഉള്ളവനുമായ അങ്ങേയ്ക്ക് ഞാന്‍ നന്ദി പറയുന്നു .എത്ര വലിയ ഭൗതിക ആഗ്രഹങ്ങള്‍ എന്നിലുണ്ടായാലും,ഒരു  നിമിഷം പോലും അങ്ങയില്‍ നിന്ന് അകലുവാനോ വേര്‍പെടുലാനോ ഞാന്‍ ആഗ്രഹിക്കുന്നില്ല എന്ന് തീര്‍ത്തു പറയുന്നു .നിതൃ മഹത്വത്തില്‍ അങ്ങയോടുകൂടെ ആയിരിക്കുവാന്‍ ഞാന്‍ ആഗ്രഹിക്കുന്നു.ദൈവഹിതത്തിന് വിധേയപ്പെട്ടുകൊണ്ട് ഞാന്‍ അങ്ങയോട് ചോദിക്കുന്നു.</p>



<p style="text-align: left; font-size: 15px;">ഈ പ്രാര്‍ത്ഥന വിശ്വാസത്തോടെ മൂന്ന് ദിവസം ദിവസം അടുപ്പിച്ച് പ്രാര്‍ത്ഥിക്കുക മൂന്നു ദിവസത്തിനുശേഷം നിങ്ങളുടെ പ്രാര്‍ത്ഥന തീര്‍ച്ചയായും സഫലീകരിക്കും.അപേക്ഷിക്കുന്നതിന് മുന്‍പ് താഴെ പറഞ്ഞിരിക്കുന്ന കാരൃങ്ങളില്‍ ഒന്ന് ചെയ്യ്തിരിക്കുമെന്ന് ഉറപ്പു നല്‍കുക.</p>


<p style="text-align: left; font-size: 15px;">1.അപേക്ഷ സാധൃമായാല്‍ ഈ പ്രാര്‍ത്ഥന പ്രസിദ്ധീകരിക്കും.</p>

<p style="text-align: left; font-size: 15px;">2.ഈ പ്രാര്‍ത്ഥനയുടെ പകര്‍പ്പുകള്‍ എത്ര അധികം ആളുകളില്‍ എത്തിക്കാമോ അത്രയധികം ആളുകളില്‍ എത്തിക്കും.ഇത് പ്ശരിശുദ്ധാത്മാവിന്റെ അത്ഭുതങ്ങള്‍ പ്രചരിപ്പിക്കാന്‍ വേണ്ടിയാണ്.</p>
<div style="text-align: center;">
			<a href="whatsapp://send?text=എന്റെ വെബ് സൈറ്റിന് സംബന്ധിച്ച് ലിങ്ക്: www.example.com" style="background-color: #4CAF50; color: #fff; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
				<img src="whatsapp.png" alt="WhatsApp Icon" style="height: 20px; width: 20px; margin-right: 10px;">
				വാട്സാപ്പിൽ ഷെയർ ചെയ്യുക
			</a>
		</div>

	</div>
	

</body>
</html>
