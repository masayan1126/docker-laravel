var img_src = new Array(“img/sample1.png”,”img/sample2.png”,”img/sample3.png”);
      var i = 0;

      function image_change() {

        if (i == 2) {
          i = 0;
        } else {
          i ++;
        }
        document.getElementById(“image_change”).src = img_src[i];
      }