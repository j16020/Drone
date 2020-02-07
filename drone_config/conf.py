from pyparrot.Minidrone import Mambo
import cv2

def a_func():
    mambo = Mambo(None, use_wifi=True)
        #address is None since it only works with WiFi anyway
    print("trying to connect to mambo now")
    success = mambo.connect(num_retries=3)
    print("connected: %s" % success)


    if (success):
        # get the state information
        print("sleeping!!!!!!!!!!!!")
        mambo.smart_sleep(1)
        mambo.ask_for_state_update()
        mambo.smart_sleep(1)
        mambo.safe_takeoff(3)

        print("up")
        mambo.fly_direct(roll=0, pitch=0, yaw=0, vertical_movement=20, duration=1)
        mambo.smart_sleep(3)

        


        picture_names = mambo.groundcam.get_groundcam_pictures_names()


        print("land")
        mambo.safe_land(2)
        mambo.smart_sleep(2)

        path_w = '/home/pi/output'
        for i in range(0, len(picture_names)):
            psn = picture_names[i]
            frame = mambo.groundcam.get_groundcam_picture(psn, True)
            cv2.imwrite(path_w+'/yamada'+str(i)+'.jpg',frame)

        print("disconnect")
        mambo.disconnect()