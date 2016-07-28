# PiFM webUI with youtube support
This is a webinterface for fm_transmitter (https://github.com/markondej/fm_transmitter) that can play youtube URL's.

To install (I use curl because wget get a corrupted file...) : 

```sh
curl https://raw.githubusercontent.com/moriceh/pifm-youtube-webui/master/Install.sh > Install.sh && sudo sh Install.sh
```
And reboot you PI.

# How to use

To play a music, go to your PI's URL choose to stop the broadcast or choose YouTube and put the URL of the youtube video in the text box. Click Submit and the music will start to play on 87.5 FM.


If you want to change the frequency for YouTube broadcast, do 
```sh
sudo nano /opt/fm_webui/yt.sh
```
And change the freq=87.5 in the file to the frequency you want.


To stop the broadcast, click on the stop logo on the page.
