function findClient() {
   var firstName = document.getElementById('first_name').value;
   var lastName = document.getElementById('last_name').value;
   var phoneNum = document.getElementById('phone_num').value;
   let client = [firstName, lastName, phoneNum];
   alert(client);
   if (client === undefined || client.length == 0) {
      document.getElementById("ajax_response").innerHTML = "<b>No Client Found</b>";
      return;
   } else {
      
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
         if (this.readyState == 4 && this.status == 200) {
            document.getElementById("ajax_response").innerHTML = this.responseText;
            //alert(this.responseText);
         }
      };
      xmlhttp.open("GET", "client-response.php?q=" + client, true);
      xmlhttp.send();
   }
}