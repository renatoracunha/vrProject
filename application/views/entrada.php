<!--<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>360&deg; Image Gallery</title>
    <meta name="description" content="360&deg; Image Gallery - A-Frame">
    <script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-event-set-component@5/dist/aframe-event-set-component.min.js"></script>
    <script src="https://unpkg.com/aframe-layout-component@5.3.0/dist/aframe-layout-component.min.js"></script>
    <script src="https://unpkg.com/aframe-template-component@3.2.1/dist/aframe-template-component.min.js"></script>
    <script src="https://unpkg.com/aframe-proxy-event-component@2.1.0/dist/aframe-proxy-event-component.min.js"></script>
  </head>
  <body>
    <a-scene>
      <a-assets>
        <img id="entrada" crossorigin="anonymous" src="<?php echo base_url(); ?>/imagens/entrada_FG.jpeg">
        <img id="city-thumb" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/thumb-city.jpg">
        <img id="cubes-thumb" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/thumb-cubes.jpg">
        <img id="sechelt-thumb" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/thumb-sechelt.jpg">
        <audio id="click-sound" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/audio/click.ogg"></audio>
        <img id="cubes" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/cubes.jpg">
        <img id="sechelt" crossorigin="anonymous" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/sechelt.jpg">

        
        <script id="link" type="text/html">
          <a-entity class="link"
            geometry="primitive: plane; height: 1; width: 1"
            material="shader: flat; src: ${thumb}"
            event-set__mouseenter="scale: 1.2 1.2 1"
            event-set__mouseleave="scale: 1 1 1"
            event-set__click="_target: #image-360; _delay: 300; material.src: ${src}"
            proxy-event="event: click; to: #image-360; as: fade"
            sound="on: click; src: #click-sound"></a-entity>
        </script>
      </a-assets>

    
      <a-sky id="image-360" radius="10" src="#entrada"
             animation__fade="property: components.material.material.color; type: color; from: #FFF; to: #000; dur: 300; startEvents: fade"
             animation__fadeback="property: components.material.material.color; type: color; from: #000; to: #FFF; dur: 300; startEvents: animationcomplete__fade"></a-sky>

     
      <a-entity id="links" layout="type: line; margin: 1.5" position="0 -1 -4">
        <a-entity template="src: #link" data-src="#cubes" data-thumb="#cubes-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#city" data-thumb="#city-thumb"></a-entity>
        <a-entity template="src: #link" data-src="#sechelt" data-thumb="#sechelt-thumb"></a-entity>
      </a-entity>

     
      <a-entity id="camera" camera look-controls>
        <a-cursor
          id="cursor"
          animation__click="property: scale; startEvents: click; from: 0.1 0.1 0.1; to: 1 1 1; dur: 150"
          animation__fusing="property: fusing; startEvents: fusing; from: 1 1 1; to: 0.1 0.1 0.1; dur: 1500"
          event-set__mouseenter="_event: mouseenter; color: springgreen"
          event-set__mouseleave="_event: mouseleave; color: black"
          raycaster="objects: .link"></a-cursor>
      </a-entity>
    </a-scene>
  </body>
</html>-->

<html>
  <head>
    <title>VRProjectFG</title>
    <script src="https://aframe.io/releases/0.9.2/aframe.min.js"></script>
  </head>
  
  <body>
  <a-scene>
        <a-assets>
            <img id="office1" src="<?php echo base_url(); ?>/imagens/entrada_FG.jpeg">
            <img id="office2" src="<?php echo base_url(); ?>/imagens/a2.jpg">
            <img id="office3" src="<?php echo base_url(); ?>/imagens/c3.jpg">
            <img id="office4" src="<?php echo base_url(); ?>/imagens/chao.jpg">
            <img id="reta" src="<?php echo base_url(); ?>/imagens/retap.png">
            <img id="seta1" src="<?php echo base_url(); ?>/imagens/seta1.jpg">
            <a-asset-item id="poke" src="<?php echo base_url(); ?>/componentes/model.gltf"></a-asset-item>
      
        </a-assets>
      <a-sky src="#office1" ></a-sky>
      <!--link1-->
      <a-image  position="-15 5 -15" width="10" height="5" src="#office2"></a-image>
      <a-link  position="-15 5 -14" href="<?php echo base_url('VrProject/hall'); ?>?linha=1" title="Biologia" image="#office1"></a-link> 
      <!--link2-->
      <a-image  position="-2 5 -15" width="10" height="5" src="#office2"></a-image>
      <a-link  position="-2 5 -14" href="<?php echo base_url('VrProject/hall'); ?>?linha=0" title="Contábeis" image="#office3"></a-link>
      <a-entity position="0 0 -3" id="weapon">
        <a-entity gltf-model="#poke"></a-entity>
      </a-entity>


      
      
        


       <a-camera id="camera" position="0 1.6 0" wasd-controls="acceleration: 2500" wasd-controls-enabled="true" look>
          <a-cursor id="cursor" color="black"></a-cursor>
      </a-camera>
     


  </a-scene>
</body>

</html>


