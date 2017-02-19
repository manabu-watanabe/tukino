function ch_base()　{
  obj = document.main.base;
  index = obj.selectedIndex;

  request = new XMLHttpRequest();
　var url = location.protocol + '//' + location.host +  location.pathname
　console.log(url);

  url = url + '?base=' + obj.options[index].value;
  document.location.href = url;
}

function ch_head()　{
  obj = document.main.head;
  index = obj.selectedIndex;
  document.head.src = obj.options[index].value
}

function ch_bodyarmor()　{
  obj = document.main.bodyarmor;
  index = obj.selectedIndex;
  document.bodyarmor.src = obj.options[index].value
}

function ch_arm()　{
  obj = document.main.arm;
  index = obj.selectedIndex;
  document.arm.src = obj.options[index].value
}

function ch_legarmor()　{
  obj = document.main.legarmor;
  index = obj.selectedIndex;
  document.legarmor.src = obj.options[index].value
}

function ch_bodywear()　{
  obj = document.main.bodywear;
  index = obj.selectedIndex;
  document.bodywear.src = obj.options[index].value
}

function ch_legwear()　{
  obj = document.main.legwear;
  index = obj.selectedIndex;
  document.legwear.src = obj.options[index].value
}
