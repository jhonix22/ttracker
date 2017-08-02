$(document).ready(function(){
    $('textarea#notes').froalaEditor({ // Set red theme name.
      theme: 'red',
      zIndex: 2002
    });
});
function checkAll(elem){
     var checkboxes = document.getElementsByClassName('sel');
     Object.keys(checkboxes).forEach(function(key){
            checkboxes[key].checked = elem.checked;
     })
}

function add(){
    $('#myModal').modal('show');
}