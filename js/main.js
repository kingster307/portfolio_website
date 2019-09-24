//global mobile phone checker 
// var isMobile = false;

//on document load
$("document").ready(function () {
  //check device type && apply appropriate event handler 
  deviceChecker();
  // check width
  widthChecker();
  //change burger color so that it can be seen / responsive nav
  burgerColorChecker();
  //apply selected link style dynamically
  selectedLinkHandler();
  // trigering card click on portfolio page
  $(".projectDisplay:eq(0)").trigger("click");
});

// portfolio page slides
$('.projectDisplay').click(portfolioPageHandler);

//burger menu click handler ---> needs work 
$('#nav-icon2').click(responsiveNavHandle);

//for download resume button -> click on div to trigger
$("#downloadBtnContainer").click(function () {
  $(".resumeButtonClick")[0].click();
});

//for home page dropdowns
function deviceChecker() {
  var eventHandler = ""
  //check if device is mobile or desktop --> Needs testing dont think itll work consistantly 
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
    //mobile 
    // isMobile = true;
    console.log('mobile device')
    //click for mobile
    eventHandler = "click";
    //click ooption on for mobile
    $('.panel').click(dropDownHandler);
  } else {
    //desktop 
    console.log('desktop')
    //hover for desktop
    eventHandler = "mouseover";
    //hover option on for desktop
    $('.panel').hover(dropDownHandler, exitHoverCallBack);
  }
  //make the panel open when page loads 
  $(".panel:eq(0)").trigger(eventHandler);
}

//responsive nav 
function responsiveNavHandle() {
  //selector variable 
  var selectors = $(this).add('#responsiveNav')
  //adding open class to the burger & the nav overlay 
  $(selectors).toggleClass('open');
  //change burger color so that it can be seen
  burgerColorChecker();
}

//checks to see if burger color will blend in or not
function burgerColorChecker() {
  //if background is black then burger needs to have color changed
  if ($('#backgroundColorChecker').hasClass("blackBackground") === true) {
    //toggle light color burger menu
    $('#nav-icon2 span').toggleClass('lightBurgerMenu');
  }
}

//handles home page dropDown
function dropDownHandler() {
  // for click
  $(this).children('.cutomArrowIcon').toggleClass('customArrowIconSelected');
  //for hover 
  $(this).children('.collapse').collapse('show');
  // console.log(e)
}

//handles hover exit 
function exitHoverCallBack() {
  //for icon
  $(this).children('.cutomArrowIcon').toggleClass('customArrowIconSelected');
  // for hover mouseout
  $(this).children('.collapse').collapse('hide');
}

//for portfolio page
function portfolioPageHandler() {
  //find which card was clicked
  var indexOfCard = $(this).index();
  // attributeVariables
  var srcPath, altText, hrefText, hrefLink
  //change attributeVariables according to what was clicked
  switch (indexOfCard) {
    case 0:
      srcPath = "img/portfolioReefRelief.jpg";
      altText = "Reef Relief Charters";
      hrefText = "reefreliefcharters.com";
      hrefLink = "http://www.reefreliefcharters.com";
      break;
    case 1:
      srcPath = "img/portfolioClassProj.jpg";
      altText = "Portfolio Class Project";
      hrefText = "portfolio.kingpete.net";
      hrefLink = "http://www.portfolio.kingpete.net";
      break;
    case 2:
      srcPath = "img/portfolioShrerville.jpg";
      altText = "Shredrville";
      hrefText = "shredrville.com";
      hrefLink = "http://shredrville.com";
      break;
    case 3:
      srcPath = "img/portfolioNewHope.jpg";
      altText = "New Hope Church";
      hrefText = "newhopebible.net";
      hrefLink = "http://www.newhopebible.net";
      break;
    case 4:
      srcPath = "img/portfolioRCOG.jpg";
      altText = "Revival Church of God";
      hrefText = "rcog.kingpete.net";
      hrefLink = "http://www.rcog.kingpete.net";
      break;
    case 5:
      srcPath = "img/portfolioMuseumOfCandy.jpg";
      altText = "Museum Of Candy Project";
      hrefText = "mocproj.kingpete.net";
      hrefLink = "http://www.mocproj.kingpete.net";
      break;
    case 6:
      srcPath = "img/portfolioPatternProject.jpg";
      altText = "Pattern Project";
      hrefText = "patproj.kingpete.net";
      hrefLink = "http://www.patproj.kingpete.net";
      break;
    case 7:
      srcPath = "img/portfolioPurrfectProject.jpg";
      altText = "Purrfect Project";
      hrefText = "purproj.kingpete.net";
      hrefLink = "http://www.purproj.kingpete.net";
      break;
    case 8:
      srcPath = "img/portfolioTodoListApp.jpg";
      altText = "Todo List App";
      hrefText = "todolistproj.kingpete.net";
      hrefLink = "http://www.todolistproj.kingpete.net";
      break;
    case 9:
      srcPath = "img/portfolioColorGame.jpg";
      altText = "Color Game";
      hrefText = "colorgameproj.kingpete.net";
      hrefLink = "http://www.colorgameproj.kingpete.net";
      break;
    case 10:
      srcPath = "img/patatapApp.jpg";
      altText = "Patatap App";
      hrefText = "patatapproj.kingpete.net";
      hrefLink = "http://www.patatapproj.kingpete.net";
      break;
    case 11:
      srcPath = "img/jsDOMDiceGame.jpg";
      altText = "Dice Game";
      hrefText = "dicegameproj.kingpete.net";
      hrefLink = "http://www.dicegameproj.kingpete.net";
      break;
    default:
      srcPath = "img/portfolioReefRelief.jpg";
      altText = "Reef Relief Charters";
      hrefText = "reefreliefcharters.com";
      hrefLink = "http://www.reefreliefcharters.com";
      indexOfCard = 0;
  }
  //adding selected class to current && taking away from sibs 
  $(this).toggleClass("selectedCard").siblings().removeClass("selectedCard")
  // change image && attributes
  $("#changeImage").attr({
    src: srcPath,
    alt: altText,
  });
  // put url up in the top & change attributes
  $("#changeUrlName").attr({
    href: hrefLink,
    target: "_blank",
  }).text(hrefText);
}

// this still doesnt dynamically get the size on page / only on load / need to do async 
//if burger menu is shown then apply class
function widthChecker() {
  if (($(this).width()) <= 991) {
    //add ID to navbar for overlay
    $('.verticalNav').attr('id', 'responsiveNav');
  }else{
    //take away ID
    $('.verticalNav').removeAttr("id");
  }
}

//selectedLink need to apply to current page 
function selectedLinkHandler(){
// find what page were on
var url= (window.location.pathname).toString();
var fileName = (url.substring(url.lastIndexOf('/')+1)).toString();

//if default domain then apply style to home tab
if (url === "/"){
  $("a[href='index.php'].hoverEffect").addClass("selectedLink");
}

//apply class given current Page
$("a[href='" + fileName + "'].hoverEffect").addClass("selectedLink");

}