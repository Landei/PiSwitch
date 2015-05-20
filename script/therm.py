#!/usr/share/python
# -*- coding: UTF-8 -*-

import re
import glob

directory = '/sys/bus/w1/devices/[ID des Sensors]/'
devices = glob.glob(directory)

for f in devices:
    if f != "w1_bus_master1":
      file = open(directory+"w1_slave")
      line = file.readline()
      if re.match(r"([0-9a-f]{2} ){9}: crc=[0-9a-f]{2} YES",line):
            line = file.readline()
            m = re.match(r"([0-9a-f]{2} ){9}t=([+-]?[0-9]+)",line)
            if m:
                value = str(float(m.group(2)) / 1000.0)
      file.close()

print value+"°C"
