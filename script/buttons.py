import RPi.GPIO as GPIO
import time
import os

GPIO.setmode(GPIO.BCM)
GPIO.setwarnings(False)

GPIO.setup(14,GPIO.IN,pull_up_down=GPIO.PUD_UP)
GPIO.setup(15,GPIO.IN,pull_up_down=GPIO.PUD_UP)
GPIO.setup(18,GPIO.IN,pull_up_down=GPIO.PUD_UP)

while True:
	input_state1 = GPIO.input(14)
	input_state2 = GPIO.input(15)
	input_state3 = GPIO.input(18)
	if input_state1 == False:
         print('Button 1, Steckdose 1 an')
         time.sleep(1.5)
         os.system("sh 11.sh")
	if input_state2 == False:
         print('Button 2, Steckdose 2 an')
         os.system("sh 21.sh")
         time.sleep(1.5)
	if input_state3 == False:
         print('Button 3, Steckdose 3 an')
         os.system("sh 31.sh")
         time.sleep(1.5)


#s01 = open("status_01.txt", "r")
#s01.close

#print s01
