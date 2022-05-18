# GamingPi

## Work In Progress

RaspberryPi with web interface to launch Retropie, Steamlink and Kodi.

The script has been tested on PiOS Buster.
Bulleye is not fully supported actually by Steamlink and RetroPi

* The GamingPi use xserver-xorg-input-joystick package to allow navigation on the launcher with the gamepad

* Use OSOL tu launch game from other launchers than steam and make them available in steamlink : https://github.com/WombatFromHell/OriginSteamOverlayLauncher/wiki

* Support of HDMI CEC partially working. Actually the GamingPi can start the TV but I wasn't able to set more things as a lot of HDMI CEC fonctionality are not implemented on my TV (Thomson TV)
* Every Logo can be modified in /var/www/launcher
* Launcher interface should be responsive. It has been tested with 16/9 1080p and 4k.

### Fonctionality to add

* mouse controlled by TV controller via HDMI CEC or navigation on the launcher with tv's remote arrow button
* stop/reboot button on the launcher WIP (stop wait actually one minute before stopping, just a little fix to add)
* add spash screen (create a logo ?)
* add tips on this documentation to add/remove services on the launcher
