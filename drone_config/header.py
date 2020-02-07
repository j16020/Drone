import RPi.GPIO as GPIO
import time



GPIO.setmode(GPIO.BCM)
GPIO.setup(14,GPIO.OUT)

from pyparrot.Minidrone import Mambo

mamboAddr = "D0:3A:CD:C4:E6:21"
mambo = Mambo(mamboAddr, use_wifi=False)

print("trying to connect")
success = mambo.connect(num_retries=3)
print("connected: %s" % success)

if (success):
    # get the state information
    print("sleeping!!!!!!!!!!!!")
    mambo.smart_sleep(1)
    mambo.ask_for_state_update()
    mambo.smart_sleep(1)
    import beep
    mambo.safe_takeoff(3)

    print("up")
    mambo.fly_direct(roll=0, pitch=0, yaw=0, vertical_movement=20, duration=1)
    mambo.smart_sleep(3)