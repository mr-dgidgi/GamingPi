<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
        <title>Launcher</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="index.css">
</head>

<script>
        function LaunchSteamlink(){
                window.location='app://steamlink';
        }
        function LaunchRetropie(){
                window.location='app://emulationstation';
        }
</script>


<body>
<div id="MainDiv">
        <div class="LogoDiv">
                <div class="LogoDivDynamic">
                        <a onclick="LaunchSteamlink();">
                                <img src="steam-logo-white-alpha.png" alt="Steamlink" class="Logo">
                        </a>
                </div>
        </div>
        <div class="LogoDiv">
                <div class="LogoDivDynamic">
                        <a onclick="LaunchRetropie();">
                                <img src="retropie-logo.png" alt="Retropie" class="Logo">
                        </a>
                </div>
        </div>
</div>

</body>

</html>
