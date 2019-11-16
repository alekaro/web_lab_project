var opinions = new Array(5);
        opinions[0] = "W ogóle nie podoba";
        opinions[1] = "Nie podoba";
        opinions[2] = "Obojętna";
        opinions[3] = "Podoba";
        opinions[4] = "Bardzo podoba";

var helpArray = [ "Podaj imię.",
  "Podaj nazwisko.",
  "Podaj miesiąc urodzenia.",
  "Zaznacz jak podoba ci się nasza strona.",
  "Podziel się adresem swojego bloga.",
  "Zaznacz kolor w jakim chciałbyś otrzymywać newsletter.", 
  "Wpisz swój adres mailowy",
  "Wpisz swój numer telefonu",
  "" ];
var helpText;

		function init()
{
   helpText = document.getElementById( "helpText" );
   
   // register listeners
   registerListeners(document.getElementById( "name" ), 0 );
   registerListeners(document.getElementById( "lastname" ), 1 );
   registerListeners(document.getElementById( "month" ), 2 );
   registerListeners(document.getElementById( "like" ), 3 );
   registerListeners(document.getElementById( "url" ), 4 );
   registerListeners(document.getElementById( "color" ), 5 );
   registerListeners(document.getElementById( "email" ), 6 );
   registerListeners(document.getElementById( "pnumber" ), 7 );
   
   var myForm = document.getElementById( "newsletter-form" );
   myForm.addEventListener( "submit", 
      function()
      {                                                         
         return confirm( "Czy na pewno chcesz wysłać formularz?" );  
      }, // end anonymous function
      false );
   myForm.addEventListener( "reset", 
      function()
      {                                                         
         return confirm( "Czy na pewno chcesz zresetować formularz?" );  
      }, // end anonymous function
      false );
}

function registerListeners( object, messageNumber )
{
   object.addEventListener( "focus", 
      function() { helpText.innerHTML = helpArray[ messageNumber ]; },
      false );
   object.addEventListener( "blur", 
      function() { helpText.innerHTML = helpArray[ 8 ]; }, false );
} 

window.addEventListener( "load", init, false );

        function setOpinion() {
            var lvl = document.getElementById("like").value;
            document.getElementById("opinion-level").innerHTML = opinions[lvl];
        }

        /**function onSubmitForm() {
            var response = window.prompt("Are you sure? [type \"yes\" if so]", "");
            response = response.toUpperCase();
            switch (response) {
                case "YES":
                    window.alert("Form will be sent if validates");
                    break;
                case "NO":
                    window.alert("Form won't be sent as pleased");
                    break;
                default:
                    window.alert("Form won't be sent. Intention unclear.");
            }
        }**/

        window.onload = setOpinion;
		
function formscount() {
  var x = document.forms.length;
  document.getElementById("demo").innerHTML = x;
}
window.addEventListener( "load", formscount, false );
