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

### Fonctionality to add

* mouse controlled by TV controller via HDMI CEC or navigation on the launcher with tv's remote arrow button
* stop/reboot button on the launcher WIP (stop wait actually one minute before stopping, just a little fix to add)
* add spash screen (create a logo ?)
* add tips on this documentation to add/remove services on the launcher
