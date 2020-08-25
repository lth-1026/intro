function add_div() {
  var div = document.createElement('div');

  div.innerHTML = document.getElementById('main_container').innerHTML;
  document.getElementById('field').appendChild(div);
  div.style.backgroundColor = 'gray';
  div.style.margin = '10px 0px 0px 0px';
  div.style.padding = '10px';
}

function remove_div(obj) {
  document.getElementById('field').removeChild(obj.parentNode);
}
