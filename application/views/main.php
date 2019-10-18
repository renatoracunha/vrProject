<!--
  <html>
  <head>
  	<title>VRProjectFG</title>
  	<meta charset="utf-8">
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
    <script >

    </script>
  </head>
  <body>
  
    <a-scene>
      <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
      <a-box color="red" width="0.01" height="8" depth="0.01" position="4.4 1.25 -5" rotation="-70 -40 0"></a-box>

    </a-scene>
  </body>
</html>
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Images</title>
    <meta name="description" content="Images - A-Frame">
    <script src="<?php echo base_url(); ?>/dist/aframe-master.js"></script>
  </head>
  <body>
    <a-scene>
      <a-assets>
        <img id="office1" src="<?php echo base_url(); ?>/imagens/p1.jpeg">
        <img id="office2" src="<?php echo base_url(); ?>/imagens/p2.jpeg">
        <img id="office3" src="<?php echo base_url(); ?>/imagens/p3.jpeg">
      </a-assets>

      <a-entity position="0 0 6">
      	<a-camera></a-camera>
      </a-entity>
      <a-sky src="<?php echo base_url(); ?>/imagens/me.jpg" ></a-sky>
      <a-image position="0 1 0" width="25" height="12" src="#office1"></a-image>
      <a-image position="15 1 0" width="25" height="12" rotation="0 90 0" src="#office2"></a-image>
      <a-image position="0 1 11 " width="25" height="12" src="#office3"></a-image>
    </a-scene>
  </body>
</html>
