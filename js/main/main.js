/*$.fn.textHeight = function(){
    var html_org = $(this).html();
    var html_calc = '<span style="height: auto; display: block">' + html_org + '</span>';
    $(this).html(html_calc);
    var height = $(this).find('span:first').outerHeight(true);
    console.log(height);
    $(this).html(html_org);
    return height;
  };*/

function ResizePages() {

    let header = $("#header").css("height");
    let headerPadding = "(" + $("#header").css("padding-top") + " + " + $("#header").css("padding-bottom") + ")";
    let headerMargin = "(" + $("#header").css("margin-top") + " + " + $("#header").css("margin-bottom") + ")";

    /*var obj = document.getElementById('footer');
    document.getElementById('footer').style.height='auto';*/
    $('#footer').css("height", "none");
    const height = document.getElementById('footer').offsetHeight;
    let height1 = $("#footer").outerHeight();
    console.log(height1);


    let footerSize = $("#footer").height();

    let footer = $("#footer").css("height");
    let footerPadding = "(" + $("#footer").css("padding-top") + " + " + $("#footer").css("padding-bottom") + ")";
    let footerMargin = "(" + $("#footer").css("margin-top") + " + " + $("#footer").css("margin-bottom") + ")";

    let contentSize = "calc(100vh - " + header + " - " + headerPadding + " - " + headerMargin + " - " + footer + " - " + footerMargin + " - " + footerPadding + ")";

    console.log(footer);
    console.log("calc(" + header + " + " + headerPadding + " + " + headerMargin + ")");
    //set
    $("#content").css("margin-bottom", height);
    $("#content").css("margin-top", "calc(" + header + " + " + headerPadding + " + " + headerMargin + ")");
    $("#content").css("min-height", contentSize);

    $("#fixContent").css("top", "calc(" + header + " + " + headerPadding + " + " + headerMargin + ")");
    $("#fixContent").css("height", contentSize);
}

$(document).ready(function() {
  $("#footer").on("load", function() {
    ResizePages();
  });

  $(window).resize(function() {
    console.log(Math.round((window.outerWidth / window.innerWidth) * 100));
  });

  console.log(Math.round((window.outerWidth / window.innerWidth) * 100));
  /*code pris de l'example de Nicolas Chouros */
  let draggables = Array.from(document.getElementsByClassName("draggable"));
  draggables.forEach(element => {
      element.addEventListener("pointerdown", mouseDown);
      element.addEventListener("pointermove", mouseMove);
      element.addEventListener("pointerup", mouseUp);
  });
});

/*code pris de l'example de Nicolas Chouros */
let target = null;
let mouseDownPos = { x: 0, y: 0 };
function extractTranslateValues(translateProp) { //translate( Xpx, ypx) --> {x: X, y: Y}
  if (translateProp == "") return { x:0, y:0 };
  let cleaned = translateProp.replace("translate(", "")
                              .replace(")", "").replaceAll("px", "")
                              .replaceAll(" ", "").split(",");
  return { x: parseInt(cleaned[0]), y: parseInt(cleaned[1]) };
}
let offset = {x:0, y:0};
function mouseDown(e) {
  target = e.target;
  target.setPointerCapture(e.pointerId);
  mouseDownPos = { x: e.offsetX, y: e.offsetY };
  offset = extractTranslateValues(target.style.transform);
}
function mouseMove(e) {
  let zoom = window.outerWidth / window.innerWidth;
  let paddingSize = window.getComputedStyle(document.body).getPropertyValue('--contentPaddingSide');
  let paddingSizeInt = parseInt(paddingSize.substring(0, paddingSize.length - 2));

  let maxX = 1410;

  let minX = paddingSizeInt + 62.7285;
  if (target) {

    let mousePos = { x: e.offsetX, y: e.offsetY };
    let deltax = offset.x + (mousePos.x - mouseDownPos.x) * zoom;
    console.log(zoom);
    console.log(mousePos.x);
    console.log(mouseDownPos.x);
    console.log(deltax);
    console.log(minX);
    if (0 <= deltax) {
      if (maxX >= deltax) {
        target.style.transform = "translate(" + deltax + "px, 0px)";
      } else {
        target.style.transform = "translate(" + maxX + "px, 0px)";
      }
    } else {
      target.style.transform = "translate(" + 0 + "px, 0px)";
    }
  }
}
function mouseUp(e){
  target.releasePointerCapture(e.pointerId);
  target = null;
}