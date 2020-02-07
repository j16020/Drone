#!/bin/sh
FILE="/mnt/windows/mirai/1.jpg"



while true ; do
if [ -e $FILE ]; then
  DATE=`date '+%F-%H-%M-%S'`
  DATE2=`date +"%Y/%m/%d %H:%M:%S"`
  echo "find"
  #rm $FILE
  mkdir /var/www/html/mirai/drone/pic/${DATE}
  rm /var/www/html/mirai/drone/pic/latest/*
  cp /mnt/windows/mirai/* /var/www/html/mirai/drone/pic/${DATE}
  cp /mnt/windows/mirai/* /var/www/html/mirai/drone/pic/latest
  cp /var/www/html/mirai/drone/old.php /var/www/html/mirai/drone/pic/latest
  cp /var/www/html/mirai/drone/old.php /var/www/html/mirai/drone/pic/${DATE}
  echo -n $DATE2 > /var/www/html/mirai/drone/pic/latest/date.txt
  echo -n $DATE2 > /var/www/html/mirai/drone/pic/${DATE}/date.txt
sudo rm /mnt/windows/mirai/* << EOF
mjtbmix6m09x0
EOF
fi
echo "nothing"
sleep 5

done
