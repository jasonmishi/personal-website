$(document).ready(function() {
 $('#contact-submit').click(function (event) {

         var name = $('#contact-name').val()
         var email = $('#contact-email').val()
         var message = $('#contact-project').val()
         var statusElm = $('#status')
         statusElm.empty()

         if (name.length<2){
             statusElm.append('<div>*Name is too short</div>')
             event.preventDefault()
         }
         
         if( !( email.length>5 && email.includes('@') && email.includes('.')) ){
             statusElm.append('<div>*Pls enter a valid e-mail</div>')
             event.preventDefault()
         }

         if (message.length<9){
             statusElm.append('<div>*Pls enter a longer message</div>')
             event.preventDefault()
         }
 })
})
