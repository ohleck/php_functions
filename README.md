// clientLog     write LOG file with specific info

                 visitedUrl
                 ip_serverport      (80    443 | http    https)
                 ip_country         (country code 2 letter,  FR, DE, UK, IT, BE...)
                 ip_city            (city)
                 ip_ip              (ip user   if / else , see script)
                 ip_http            (ip user   HTTP_CLIENT_IP)
                 ip_httpx           (ip user   HTTP_X_FORWARDED_FOR)
                 ip_remoteaddress   (ip user   REMOTE_ADDR)
                 ip_remoteport      (port user)
                 ip_longitude       (ip longitude)
                 ip_latitude        (ip latitude)
                 ip_timestamp       (timestamp unix)
                 ip_timehuman       (timestamp human)
                 ip_useragent       (user agent)

Log file look like this :

---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
PAGE	  PORT  PAYS         VILLE		        IP.v4 (autodetect)	 HTTP_CLIENT_IP     HTTP_X_FORW         REMOTE_ADDR         PORT    LONG      LAT	      TIMESTAMP       HUMAN TIME				                                                     USER_AGENT_CLIENT
---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
index    80    US  Boardman                 54.185.164.188/32                                           54.185.164.188      57758   -119.7143 45.8491   1546122560  29-12-2018-23:12:20      Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.28) Gecko/20120306 Firefox/3.6.28
index    80    US  Columbus                 18.219.196.75/32                                            18.219.196.75       58336   -83.0235  39.9653   1546164652  30-12-2018-11:12:52      Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36
index    80    DE  Frankfurt am Main        52.28.3.120/32                                              52.28.3.120         42128   8.6823    50.1153   1546165327  30-12-2018-11:12:07      Mozilla/5.0 (compatible; Wappalyzer; +https://github.com/AliasIO/Wappalyzer)
index    80    NL  Amsterdam                146.185.140.74/32                                           146.185.140.74      48106   4.9542    52.2965   1546198203  30-12-2018-20:12:03      Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.75 Safari/537.36
index    80    US  Kansas City              69.197.177.50/32                                            69.197.177.50       58706   -94.5699  39.1052   1546223371  31-12-2018-03:12:31      Mozilla/5.0 (compatible; MJ12bot/v1.4.8; http://mj12bot.com/)
index    80    NL  Amsterdam                163.172.209.226/32                                          163.172.209.226     37016   4.9135    52.3556   1546239969  31-12-2018-08:12:09      Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 OPR/36.0.2130.32
index    80    DE                           195.201.60.19/32                                            195.201.60.19       42960   9.491     51.2993   1546249756  31-12-2018-10:12:16      Mozilla/5.0 (compatible; BLEXBot/1.0; +http://webmeup-crawler.com/)
index    80    US  Clifton                  159.203.174.130/32                                          159.203.174.130     46014   -74.1377  40.8344   1546269750  31-12-2018-16:12:30      Mozilla/4.0 (compatible; Netcraft Web Server Survey)
index    80    FR                           78.153.241.195/32                                           78.153.241.195      45346   2.3387    48.8582   1546276032  31-12-2018-18:12:12      Mozilla/5.0 (Windows NT 10.0; WOW64; rv:43.0) Gecko/20100101 Firefox/43.0
index    80    NL  Amsterdam                163.172.209.226/32                                          163.172.209.226     45758   4.9135    52.3556   1546286397  31-12-2018-20:12:57      Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 OPR/36.0.2130.32
index    80    NL  Amsterdam                163.172.209.226/32                                          163.172.209.226     51833   4.9135    52.3556   1546306123  01-01-2019-02:01:43      Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 OPR/36.0.2130.32
index    80    NL  Amsterdam                163.172.209.226/32                                          163.172.209.226     51996   4.9135    52.3556   1546306123  01-01-2019-02:01:43      Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.75 Safari/537.36 OPR/36.0.2130.32




// clientMap    put client ip location (latitude + longitude) on world map or specific region
