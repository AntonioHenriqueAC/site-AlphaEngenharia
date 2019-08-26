   var myVar;

   function toLoading() {
   	myVar = setTimeout(showPage, 2800);
   }

   function showPage() {
   	document.getElementById('preloader').style.display = 'none';
   	document.getElementById('page').style.display = 'block';
   }