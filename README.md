# apna-music
This is Official https://apnamusic.ml Repository.
<h2>Installation </h2>
  <b>The best way to use apna-music is using docker.</br><a href='https://docs.docker.com/install/'>&nbsp;&nbsp;&nbsp;Click Here For installing Docker.</a> </b></br>
  
<b>If you have Docker already Installed 
<br/>`docker build -t apna-music:running https://github.com/vipinbihari/apna-music.git`
  <br/>Copy and Paste the above command in your terminal.
</b>
<h3>Now you will have a Docker Image ready to be run</h3>
<b>Now start the Docker Container using the command given below.</b>
```
docker run -dit -p 80:80 apna-music:running

```
<p>Now go to <a href="http://localhost">localhost</a> and your service container must be running.</p>
