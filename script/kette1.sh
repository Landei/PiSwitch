#!/bin/bash

pin="8"

echo $pin > /sys/class/gpio/export
echo "out" > /sys/class/gpio/gpio$pin/direction
echo "1" > /sys/class/gpio/gpio$pin/value

sudo rm status/status_04;
sudo touch status/status_04;
sudo echo "1" >> status/status_04;

