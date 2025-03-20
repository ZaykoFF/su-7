/* AJAX Function */
const formSend = () => {
   const thanks = document.querySelector('.formThanks');
   const error = document.querySelector('.formError');
   const title = document.querySelector('.callBackForm-title').innerHTML;  
   const name = document.querySelector('.callBackForm-content > input[type=text]').value;
   const phone = document.querySelector('.callBackForm-content > input[type=tel]').value;
   const mail = document.querySelector('.callBackForm-content > input[type=email]').value;
   const formCheckMessage = document.querySelector('.formCheckMessage');
   const pageUrl = window.location.href;
   const request = new XMLHttpRequest();
   const url = `/wp-content/themes/su-7/ajax/formSendBackend.php`;
   const params =`title=${title}&name=${name}&phone=${phone}&mail=${mail}&pageUrl=${pageUrl}`;
   request.open('POST', url, true);
   request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
   request.addEventListener('readystatechange', () => {
       if (request.readyState === 4 && request.status === 200) {
           hideFormInputs();
           thanks.style.display = "block";
           formCheckMessage.style.display = "none";
       }
   });
   if (name && phone && mail) {
       request.send(params);
   } else {
       formCheckMessage.style.display = "block";
       console.log('Не все данные введены');
   }
}

const hideFormInputs = () => {
   document.querySelector('.callBackForm-title').style.display = 'none';  
   document.querySelector('.callBackForm-content > input[type=text]').style.display = 'none';
   document.querySelector('.callBackForm-content > input[type=tel]').style.display = 'none';
   document.querySelector('.callBackForm-content > input[type=email]').style.display = 'none';
   document.querySelector('.callBackForm-content > input[type=button]').style.display = 'none';
}

const returnFormInputs = () => {
   document.querySelector('.callBackForm-title').style.display = 'block';  
   document.querySelector('.callBackForm-content > input[type=text]').style.display = 'block';
   document.querySelector('.callBackForm-content > input[type=tel]').style.display = 'block';
   document.querySelector('.callBackForm-content > input[type=email]').style.display = 'block';
   document.querySelector('.callBackForm-content > input[type=button]').style.display = 'block';
   document.querySelector('.formThanks').style.display = 'none';
   document.querySelector('.formCheckMessage').style.display = 'none';
}
