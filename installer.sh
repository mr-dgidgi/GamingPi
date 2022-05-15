######################################
#
#  GamingPi installer
#
#  By Mr-dgidgi
#  https://github.com/mr-dgidgi/GamingPi
#  contact@dgidgi.ovh
#
#
######################################



UpdateSystem() {
        sudo apt update
        sudo apt upgrade -y
}


InstallSteamlink() {
        sudo apt install steamlink -y
        sudo apt install xboxdrv -y
        steamlink
}

InstallRetropie() {
        cd ~
        git clone --depth=1 https://github.com/RetroPie/RetroPie-Setup.git ~/RetroPie-Setup
        bash ~/RetroPie-Setup/retropie_setup.sh
        sudo cp bin/retropie /bin/retropie
        sudo chmod a+x /bin/retropie

}

InstallKodi() {
        sudo apt install kodi
}

InstallWebInterface () {
        sudo apt install apache2 -y
        sudo cp  etc/apache2/sites-available/launcher.conf /etc/apache2/sites-available/launcher.conf
        sudo chown www-data:www-data /etc/apache2/sites-available/launcher.conf
        sudo cp var/www/* /var/www/
        sudo chown -R www-data:www-data /var/www/launcher/
        sudo a2ensite launcher.conf
        sudo systemctl reload apache2
}

EnableAutoStart () {
        echo '@chromium --start-fullscreen --start-maximized http://localhost/' >> /etc/xdg/lxsession/LXDE-pi/autostart
}

AddAppSupport () {
        mkdir ~/bin
        cp bin/open_app.sh ~/bin/open_app.sh
        chmod +x ~/bin/open_app.sh
        sudo cp usr/share/applications/appurl.desktop /usr/share/applications/appurl.desktop
        sudo update-desktop-database
}

CheckUser () {
        if [ "$(whoami)" != "pi" ]; then
                echo "#### Abort #### Script must be run as user: pi"
                exit 255
        fi
}

InstallCEC () {
        sudo apt install cec-utils
        mkdir /home/pi/CEC
        echo "#!/bin/bash" > /home/pi/CEC/cec-tv-start.sh
        echo "echo 'standby 0.0.0.0' | cec-client -s -d 3" >> /home/pi/CEC/cec-tv-start.sh
        chmod +x /home/pi/CEC/cec-tv-start.sh
        echo "@reboot /home/pi/CEC/cec-tv-start.sh" > /etc/cron.d/cec

}

InstallGamepadToMouse () {
        sudo apt install xserver-xorg-input-joystick
}


CheckUser
UpdateSystem
InstallSteamlink
InstallRetropie
InstallKodi
InstallWebInterface
EnableAutoStart
AddAppSupport
InstallCEC
InstallGamepadToMouse
