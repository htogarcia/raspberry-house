jQuery(document).ready(function($) {

  // var baseDomain = "http://172.19.50.245";
  var baseDomain = "http://localhost/temp_page";

  $(".itemIcon").click(function(event) {
    var $this = $(this);
    toogleItem($this);
    changeItemText($this);
    sendHttpRequestWrapper($this);
  });

  function toogleItem($bulb_icon) {
    $bulb_icon.toggleClass("off");
    $bulb_icon.toggleClass("on");
  }

  function changeItemText($elem) {
    var $textElem = $elem.siblings('p');
    var isOn = $elem.hasClass('on');
    var str = (isOn) ? getOnStrByType($elem) : getOffStrByType($elem);
    $textElem.html(str);
  }

  function changeDoorText($elem) {
    var $textElem = $elem.siblings('p');
    var isOn = $elem.hasClass('on');
    var str = (isOn) ? "Puerta: Cerrada" : "Puerta: Abierta";
    $textElem.html(str);
  }



  setInitialState();


  function setInitialState() {
    $(".itemIcon").each(function(index, el) {
      var type = $(this).data('type');
      var baseUrl = baseDomain + "/webservices/configuration.php?";
      var param = "type=" + type;
      var url = baseUrl + param;
      var response = sendHttpRequest(url);
      console.log("response: " + response);
      if (response == 1){
        setOnState($(this));
      } else{
        setOffState($(this));
      }
    });
  }

  function setOnState($elem) {
    $elem.removeClass('on off');
    $elem.addClass('on');
    var $text = $elem.siblings('p');
    var isBulb = $elem.hasClass('bulbIcon');
    if (isBulb){
      $text.html("Luz: Encendida");
    } else{
      $text.html("Puerta: Abierta");
    }
  }

  function setOffState($elem) {
    $elem.removeClass('on off');
    $elem.addClass('off');
    var $text = $elem.siblings('p');
    var isBulb = $elem.hasClass('bulbIcon');
    if (isBulb){
      $text.html("Luz: Apagada");
    } else{
      $text.html("Puerta: Cerrada");
    }
  }

  function sendHttpRequestWrapper($elem){
    var baseUrl = baseDomain + "/webservices/configuration.php?";
    var type = $elem.data("type");
    var turnOn = $elem.hasClass('on');
    var setVal = (turnOn) ? "1" : "0";
    var param = "type=" + type;
    var set = "set=" + setVal;
    var myUrl = baseUrl + param + "&" + set;
    var responseText = sendHttpRequest(myUrl);
    console.log("response: " + responseText);
  }

  function sendHttpRequest(url) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("GET", url, false); // false for synchronous request
    xmlHttp.send(null);
    return xmlHttp.responseText;
  }



  function getOnStrByType($elem) {
    var isBulb = $elem.hasClass('bulbIcon');
    return (isBulb) ? "Luz: Encendida" : "Puerta: Abierta";
  }
  function getOffStrByType($elem) {
    var isBulb = $elem.hasClass('bulbIcon');
    return (isBulb) ? "Luz: Apagada" : "Puerta: Cerrada";
  }




  $("#reloadImg").click(function(event) {
    var url = baseDomain + "/webservices/configuration.php?type=camara";
    sendHttpRequest(url);
    setTimeout(function() {
      location.reload();
    }, 2000);

  });


});
