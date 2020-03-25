document.onmousemove = function(e){
    var x = -e.clientX/10;
    var y = -e.clientY/10;
    document.body.style.backgroundPositionX = x + 'px';
    document.body.style.backgroundPositionY = y + 'px';
  }