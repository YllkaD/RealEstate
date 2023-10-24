
/*
	==========================================
	 Faq Show onclick pytjet
	==========================================
*/
function showTheFaq(button) {
  button.classList.toggle("active");
  var answer = button.nextElementSibling;

  if(answer.style.maxHeight)
  {
    answer.style.maxHeight = null;
  }else 
  {
    answer.style.maxHeight = answer.scrollHeight + "px";
  }
}


  /*
	==========================================
	 ----------
	==========================================
*/


