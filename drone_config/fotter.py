    print("land")
    mambo.safe_land(2)
    mambo.smart_sleep(2)    
    
    picture_names = mambo.groundcam.get_groundcam_pictures_names()




    path_w = '/home/pi/output'
    for i in range(0, len(picture_names)):
      psn = picture_names[i]
      frame = mambo.groundcam.get_groundcam_picture(psn, True)
      cv2.imwrite(path_w+'/yamada'+str(i)+'.jpg',frame)

    print("disconnect")
    mambo.disconnect()