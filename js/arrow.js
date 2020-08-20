(function(document){
  var div = document.getElementById('arrow');
  var icon = document.getElementById('icon');
  var open = false;

  div.addEventListener('click', function(){
    if(open){
      icon.className = 'fa fa-angle-right';
    } else{
      icon.className = 'fa fa-angle-right open';
    }

    open = !open;
  });
})(document);
