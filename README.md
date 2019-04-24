# **Smart Alert System**
![](https://img.shields.io/badge/Release-V1.0.0-blue.svg)  ![](https://img.shields.io/badge/Build-Stable-green.svg) ![](https://img.shields.io/badge/License-MIT-red.svg) ![](https://img.shields.io/badge/By-Sheikh%20Nawab%20Arzoo-red.svg?style=social&logo=appveyor)

------------

It's a alert system which will provide real-time alert on fire or LPG gas Leak in your house and it will monitor the house temperature and Methane ppm concentration in air via a Web portal. If the sensor records more than 60 degree temperature or 1000 ppm *(you can modify on script)* of methane concentration then it would send directly sms alert to the registered mobile number.  

##### Requirements:
1. Raspberry Pi
2. ADC121C_MQ4 (Measure Methane Concentration in PPM)
3. DHT-11 (Measure Temperature)
4. GSM module (To send SMS)

##### Prerequisite:
First raspbian os needs to be installed on SD card then run the following codes
````
sudo apt-get update
sudo apt-get upgrade
sudo apt-get install python-pip
sudo apt-get install build-essential libi2c-dev i2c-tools python-dev libffi-dev
sudo python -m pip install --upgrade pip setuptools wheel
sudo pip install cffi
sudo pip install smbus-cffi
sudo pip install Adafruit_DHT
git clone https://github.com/sakearzoo/Smart_Alert_System.git && cd Smart_Alert_System
chmod +x fire.py
chmod +x gas.py
chmod +x main.py
````

After then you need to modify the `connect.php` file with proper credentials, Add your phone number to `fire.py` and `gas.py` and finally update the `main.py` with proper website address.

##### Now all is Set !!

To run the script you need to enter th following code:
````
Sudo ./main.py
or
sudo python main.py
````

---------