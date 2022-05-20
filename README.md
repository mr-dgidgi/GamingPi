# GamingPi

The GamingPi is a project to bundle Retropie, Steamlink and Kodi in the same RaspberiPi and add a launcher to create your own video-game console.

---

The script has been tested on PiOS Buster.
Bulleye is not fully supported actually by Steamlink and RetroPi

---
## Features 

* The GamingPi use xserver-xorg-input-joystick package to allow navigation on the launcher with the gamepad
* Use can OSOL tu launch game from other launchers than steam and make them available in steamlink : https://github.com/WombatFromHell/OriginSteamOverlayLauncher/wiki
* Support of HDMI CEC partially working. Actually the GamingPi can start the TV but I wasn't able to set more things as a lot of HDMI CEC fonctionality are not implemented on my TV (Thomson TV)
* Every Logo can be modified in /var/www/launcher
* Launcher interface should be responsive. It has been tested with 16/9 1080p and 4k.
* It is possible to add/remove app to the launcher
* wired xbox 360 controller (official and generic) has been tested and are working properly.
* The wireless xbox360 dongle should be recognized natively.
* bluetooth controller can also work on the GamingPi with few tweak (https://www.tomshardware.com/how-to/use-playstation-xbox-controllers-raspberry-pi)

## Basic install

* Create a basic PiOS buster micro sd card with user named pi
* Connect on your raspberryPi an screen, keyboard, mouse and an ethernet port (or set wifi during the fist boot but steamlink will be better with wired network.
* After the first boot and the basic install reboot the pi
* launch lxterminal and enter the command ``raspi-config`` 
  * navigate to ``Performance Options > GPU Memory`` and set it to 256
  * If you want to enable 4k 60Hz navigate to ``Advanced Options > Pi 4 Video Output > enable 4Kp60 HDMI``
* reboot the RasPi
* Open again lxterminal an enter the following commands :
 ```
 cd /home/pi
 git clone https://github.com/mr-dgidgi/GamingPi.git
 cd GamingPi
 bash installer.sh
 ```
 * The installer will ask you few times to tip ``yes`` or press ``enter``
 * Once Steam Link installation is done it will automatically open, you can close it to continue the installation
 * When the RetroPie installation will start the installation menu will ope. You can choose basic install
 * Once the installation is done, reboot the RaspberryPi
   * The launcher will open after few seconds
   * Enjoy !
 * You can tweak some others parameter to have a cleaner boot like changing the desktop wallpaper and hide the task bar as we can see them during few second before the launcher start.

### Fonctionality to add

* mouse controlled by TV controller via HDMI CEC or navigation on the launcher with tv's remote arrow button
* stop/reboot button on the launcher WIP (stop wait actually one minute before stopping, just a little fix to add)
* add spash screen (create a logo ?)
* add tips on this documentation to add/remove services on the launcher
