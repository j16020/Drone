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

        print("go1")
        mambo.fly_direct(roll=0, pitch=16, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()

        print("go2")
        mambo.fly_direct(roll=0, pitch=32, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()

        print("go3")
        mambo.fly_direct(roll=0, pitch=32, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()

        print("migi")
        mambo.fly_direct(roll=0, pitch=0, yaw=52, vertical_movement=0, duration=1)
        mambo.smart_sleep(3)
        print("go4")
        mambo.fly_direct(roll=0, pitch=18, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=8, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        print("migi")
        mambo.fly_direct(roll=0, pitch=0, yaw=52, vertical_movement=0, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()

        print("go5")
        mambo.fly_direct(roll=0, pitch=30, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()

        print("go6")
        mambo.fly_direct(roll=0, pitch=30, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()

        print("hidari")
        mambo.fly_direct(roll=0, pitch=0, yaw=-54, vertical_movement=0, duration=1)
        mambo.smart_sleep(3)
        print("go7")
        mambo.fly_direct(roll=0, pitch=24, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=8, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        print("hidari")
        mambo.fly_direct(roll=0, pitch=0, yaw=-57, vertical_movement=0, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()

        print("go8")
        mambo.fly_direct(roll=0, pitch=30, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()

        print("go9")
        mambo.fly_direct(roll=0, pitch=30, yaw=0, vertical_movement=-2, duration=1)
        mambo.fly_direct(roll=0, pitch=10, yaw=0, vertical_movement=-2, duration=1)
        mambo.smart_sleep(3)
        pic_success = mambo.take_picture()


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