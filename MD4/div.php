
<html>
   <body>
      <div>
         <a href="#" onclick="show('Section1');">Section1</a>
         <a href="#" onclick="show('Section2');">Section2</a>
         <a href="#" onclick="show('Section3');">Section3</a>
         <a href="#" onclick="show('Section4');">Section4</a>
      </div>
    <br>
      <div id="Section1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat libero id metus congue, eget pulvinar nulla viverra. Donec id placerat est. Ut iaculis consequat consectetur.</div>
    
      <div id="Section2" style="display: none;">Duis erat sapien, sagittis consectetur odio at, bibendum porttitor ante. Pellentesque commodo viverra vehicula. Curabitur at ultricies velit. Curabitur eget tortor quam. Cras sagittis quis mauris eu tincidunt. Ut id tortor vulputate, cursus orci ut, bibendum tortor.<br><img src="https://via.placeholder.com/500x100"/></div>
      
    <div id="Section3" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
      
    <div id="Section4" style="display: none;"><img src="https://via.placeholder.com/500x400"/></div>
   </body>
   <script type="text/javascript">
      var divs = ["Section1", "Section2", "Section3", "Section4"];
      var visibleId = null;
      function show(id) {
        if(visibleId !== id) {
          visibleId = id;
        } 
        hide();
      }
      function hide() {
        var div, i, id;
        for(i = 0; i < divs.length; i++) {
          id = divs[i];
          div = document.getElementById(id);
          if(visibleId === id) {
            div.style.display = "block";
          } else {
            div.style.display = "none";
          }
        }
      }  
   </script>
</html>
