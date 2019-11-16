image1 = new Image();
image1.src="./img/och.png";
image2 = new Image();
image2.src="./img/kciuk.png";

function mouseOver( e )
{  
   
   if ( e.target.getAttribute( "id" ) == "animation" )
   {
      e.target.setAttribute( "src", image2.getAttribute( "src" ) );
   } 
    
   
 
} 

function mouseOut( e )
{
   
   if ( e.target.getAttribute( "id" ) == "animation" )
   {
      e.target.setAttribute( "src", image1.getAttribute( "src" ) );
   } 
} 

document.addEventListener( "mouseover", mouseOver, false );
document.addEventListener( "mouseout", mouseOut, false );

function processLinks()
{
   var linksList = document.links; // get the document's links
   var contents = "<ul>";

   // concatenate each link to contents
   for ( var i = 0; i < linksList.length; ++i )
   {
      var currentLink = linksList[ i ];
      contents += "<li><a href='" + currentLink.href + "'>" + 
         currentLink.innerHTML + "</li>";
   } // end for

   contents += "</ul>";
   document.getElementById( "links" ).innerHTML = contents;
} // end function processLinks

window.addEventListener( "load", processLinks, false );

function processImages() {
  var x = document.images.length;
  document.getElementById("images").innerHTML = x;
}

window.addEventListener( "load", processImages, false );

function processAnchors() {
  var x = document.anchors.length;
  document.getElementById("anchors").innerHTML = x;
}

window.addEventListener( "load", processAnchors, false );

window.onload = function() {
            // Calculate the product of three integers
            var x, y, z, result;
            var xVal, yVal, zVal;

            xVal = window.prompt("Wpisz cenę gitary:");
            yVal = window.prompt("Wpisz ile procent zniżki otrzymałeś:");

            x = parseFloat(xVal);
            y = parseInt(yVal);
            z = 100 - y;
            result = x * z / 100;
            document.getElementById("output").innerHTML = "Cena twojej gitary wynosi: " + result + " złotych.";
        };