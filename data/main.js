
function Ben_way_to_get_element(el){
  return document.getElementById(el);
}

function ajax_changetab_and_send_data(php_file, el, send_data){
  var hr=new XMLHttpRequest();
  hr.open('POST', php_file, true);
  hr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  hr.onreadystatechange=function(){
      if(hr.readyState==4 && hr.status==200){
          Ben_way_to_get_element(el).innerHTML=hr.responseText;
      }
  };

  hr.send(send_data);
}


function mySearchFunction1() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("Search");
  filter = input.value.toUpperCase();
  table = document.getElementById("Tb1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function mySearchFunction2() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("Search1");
  filter = input.value.toUpperCase();
  table = document.getElementById("Tb1");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[8];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function login1(){

 Ben_way_to_get_element('Message1').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Authenticating …</div>";

 var username1=$('#username1').val();
 var password1=$('#password1').val();
 
 $.ajax({
     type:'POST',
     url: 'data/login1.php',
     data:{
         username1:username1,
         password1:password1,
 
     },
     
     success: function (response){
         $("#Message1").html(response);
     }
 
 });
 
 }

 $(document).ready(function(){

   


});



// new Startup

function new_startup(){
        Ben_way_to_get_element('new_client_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Account for you . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var f_names=Ben_way_to_get_element('f_names').value;
        var username=Ben_way_to_get_element('username').value;
        var phone=Ben_way_to_get_element('phone').value;
        var password=Ben_way_to_get_element('password').value;
        var email=Ben_way_to_get_element('email').value;
      
        formdata.append('f_names',f_names);
        formdata.append('username',username);
        formdata.append('phone',phone);
        formdata.append('password',password);
        formdata.append('email',email);
      
        ajax1.open('POST', 'account/account_data/new_client.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('new_client_message').innerHTML=ajax1.responseText;
      
        }; 
}

// agent update profile

function update_user_profile() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var username = Ben_way_to_get_element('username').value;
          var agent_id = Ben_way_to_get_element('agent_id').value;
          var tel=Ben_way_to_get_element('tel').value;
          var email=Ben_way_to_get_element('email').value;
          var password=Ben_way_to_get_element('password').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('username', username);
          formdata.append('agent_id', agent_id);
          formdata.append('tel', tel);
          formdata.append('email', email);
          formdata.append('password', password);
          formdata.append('profile', profile);

          ajax1.open('POST', 'account_data/update_profile_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}
