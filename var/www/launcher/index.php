<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
        <title>Launcher</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <link rel="stylesheet" href="index.css">
</head>
<script>
        <!-- Defaults app functions -->
        function LaunchSteamlink(){
                window.location='app://steamlink';
        }
        function LaunchRetropie(){
                window.location='app://retropie';
        }
        function LaunchKodi(){
                window.location='app://kodi';
        }
        <!-- Defaults system functions -->
        function SystemReboot(){
                window.location='app://reboot';
        }
        function SystemStop(){
                window.location='app://shutdown';
        }
</script>
<body>

<div id="overlay"></div>

<div tabindex="0" id="MainDiv">
        <!-- if you want to disable an app on the launcher just comment the matching block -->
        <!-- if you want to add an app on the launcher just duplicate on of these block and add change the onclic action and the image source -->
        <!-- Block Steamlink -->
        <div class="LogoDiv">
                <div class="LogoDivDynamic">
                        <a onclick="LaunchSteamlink();">
                                <img src="steam-logo-white-alpha.png" alt="Steamlink" class="Logo">
                        </a>
                </div>
        </div>
        <!-- end of Block Steamlink -->
        <!-- Block Retropie -->
        <div class="LogoDiv">
                <div class="LogoDivDynamic">
                        <a onclick="LaunchRetropie();">
                                <img src="retropie-logo.png" alt="Retropie" class="Logo">
                        </a>
                </div>
        </div>
        <!-- end of Block Retropie -->
        <!-- Block Kodi -->
        <div class="LogoDiv">
                <div class="LogoDivDynamic">
                        <a onclick="LaunchKodi();">
                                <img src="kodi-logo.png" alt="Kodi" class="Logo">
                        </a>
                </div>
        </div>
        <!-- end of Block Kodi -->
</div>
<div tabindex="1" id="SystemMenu">
        <div class="LogoDiv">
                <div class="SystemDivDynamic">
                        <a onclick="SystemReboot();">
                                <img src="restart-logo.png" alt="Reboot" class="Logo">
                        </a>
                </div>
        </div>
        <div class="LogoDiv">
                <div class="SystemDivDynamic">
                        <a onclick="SystemStop();">
                                <img src="stop-logo.png" alt="Stop" class="Logo">
                        </a>
                </div>
        </div>
</div>
</body>
</html>
