$(document).ready(function(){
    $('.button-collapse').sideNav({
        menuWidth: 240,
        edge: 'left',
        closeOnClick: true,
        draggable: true,
        onOpen: function(el) { },
        onClose: function(el) { },
    }
  );
  });
  $(document).ready(function(){
    $('ul.tabs').tabs();
  });