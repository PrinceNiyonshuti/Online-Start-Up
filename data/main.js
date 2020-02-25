
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

    // new agent

    $("#add_new_agent").click(function(){
      $("#loader_general_admin1").fadeOut(500);  
      setTimeout(function(){ ajax_changetab_and_send_data('master_data/new_agent.php', 'loader_general_admin', null); }, 500);
      });

    // new room

    $("#add_new_room").click(function(){
      $("#loader_general_admin1").fadeOut(500);  
      setTimeout(function(){ ajax_changetab_and_send_data('hotels_data/new_room.php', 'loader_general_admin', null); }, 500);
      });


});

 // new agent

function new_agent(){
        Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Saving New Agent . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var name=Ben_way_to_get_element('name').value;
        var pass=Ben_way_to_get_element('pass').value;
        var tel=Ben_way_to_get_element('tel').value;
      
        formdata.append('name',name);
        formdata.append('pass',pass);
        formdata.append('tel',tel);
      
        ajax1.open('POST', 'master_data/new_agent_data.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;
      
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

// hotel_tours update profile

function update_hotel_tours_profile() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var account_id = Ben_way_to_get_element('account_id').value;
          var username = Ben_way_to_get_element('username').value;
          var h_name = Ben_way_to_get_element('h_name').value;
          var email=Ben_way_to_get_element('email').value;
          var country=Ben_way_to_get_element('country').value;
          var city=Ben_way_to_get_element('city').value;
          var stand=Ben_way_to_get_element('stand').value;
          var manager=Ben_way_to_get_element('manager').value;
          var tel=Ben_way_to_get_element('tel').value;
          var password=Ben_way_to_get_element('password').value;
          var profile = Ben_way_to_get_element('profile').files[0];

          formdata.append('account_id', account_id);
          formdata.append('username', username);
          formdata.append('h_name', h_name);
          formdata.append('email', email);
          formdata.append('country', country);
          formdata.append('city', city);
          formdata.append('stand', stand);
          formdata.append('manager', manager);
          formdata.append('tel', tel);
          formdata.append('password', password);
          formdata.append('profile', profile);

          ajax1.open('POST', 'hotels_data/update_hotels_tours_profile_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}

// New Hotel Room

function new_room_data() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Adding Room . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var account_id = Ben_way_to_get_element('account_id').value;
          var r_name = Ben_way_to_get_element('r_name').value;
          var r_type = Ben_way_to_get_element('r_type').value;
          var r_cap=Ben_way_to_get_element('r_cap').value;
          var r_price=Ben_way_to_get_element('r_price').value;
          var r_serv=Ben_way_to_get_element('r_serv').value;
          var profile_1 = Ben_way_to_get_element('profile_1').files[0];
          var profile_2 = Ben_way_to_get_element('profile_2').files[0];
          var profile_3 = Ben_way_to_get_element('profile_3').files[0];
          var profile_4 = Ben_way_to_get_element('profile_4').files[0];

          formdata.append('account_id', account_id);
          formdata.append('r_name', r_name);
          formdata.append('r_type', r_type);
          formdata.append('r_cap', r_cap);
          formdata.append('r_price', r_price);
          formdata.append('r_serv', r_serv);
          formdata.append('profile_1', profile_1);
          formdata.append('profile_2', profile_2);
          formdata.append('profile_3', profile_3);
          formdata.append('profile_4', profile_4);

          ajax1.open('POST', 'hotels_data/new_room_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}

// update Hotel Room

function update_new_room_data() {
          Ben_way_to_get_element('Message2').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Room Details . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var account_id = Ben_way_to_get_element('account_id').value;
          var r_name = Ben_way_to_get_element('r_name').value;
          var r_a_name = Ben_way_to_get_element('r_a_name').value;
          var r_type = Ben_way_to_get_element('r_type').value;
          var r_cap=Ben_way_to_get_element('r_cap').value;
          var r_price=Ben_way_to_get_element('r_price').value;
          var r_serv=Ben_way_to_get_element('r_serv').value;
          var profile_1 = Ben_way_to_get_element('profile_1').files[0];
          var profile_2 = Ben_way_to_get_element('profile_2').files[0];
          var profile_3 = Ben_way_to_get_element('profile_3').files[0];
          var profile_4 = Ben_way_to_get_element('profile_4').files[0];

          formdata.append('account_id', account_id);
          formdata.append('r_name', r_name);
          formdata.append('r_a_name', r_a_name);
          formdata.append('r_type', r_type);
          formdata.append('r_cap', r_cap);
          formdata.append('r_price', r_price);
          formdata.append('r_serv', r_serv);
          formdata.append('profile_1', profile_1);
          formdata.append('profile_2', profile_2);
          formdata.append('profile_3', profile_3);
          formdata.append('profile_4', profile_4);

          ajax1.open('POST', 'hotels_data/update_room_details_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('Message2').innerHTML = ajax1.responseText;

      };
}

// new user

function new_startup(){
        Ben_way_to_get_element('new_client_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Account for you . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var f_names=Ben_way_to_get_element('f_names').value;
        var username=Ben_way_to_get_element('username').value;
        var cat=Ben_way_to_get_element('cat').value;
        var phone=Ben_way_to_get_element('phone').value;
        var password=Ben_way_to_get_element('password').value;
        var email=Ben_way_to_get_element('email').value;
      
        formdata.append('f_names',f_names);
        formdata.append('username',username);
        formdata.append('cat',cat);
        formdata.append('phone',phone);
        formdata.append('password',password);
        formdata.append('email',email);
      
        ajax1.open('POST', 'account/account_data/new_client.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('new_client_message').innerHTML=ajax1.responseText;
      
        }; 
}

// new hotel or tours

function new_hotel_tours(){
        Ben_way_to_get_element('new_client_message').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Creating New Account for you . . . . </div>";
      
        var formdata=new FormData();
        var ajax1=new XMLHttpRequest();

        var email=Ben_way_to_get_element('email').value;
        var username=Ben_way_to_get_element('username').value;
        var contact=Ben_way_to_get_element('contact').value;
        var role=Ben_way_to_get_element('role').value;
        var password=Ben_way_to_get_element('password').value;
      
        formdata.append('email',email);
        formdata.append('username',username);
        formdata.append('contact',contact);
        formdata.append('role',role);
        formdata.append('password',password);
      
        ajax1.open('POST', 'hotels/hotels_data/new_client.php'); //third argument can be true or false which is optional
        ajax1.send(formdata);
      
        ajax1.onreadystatechange=function(){
            Ben_way_to_get_element('new_client_message').innerHTML=ajax1.responseText;
      
        }; 
      }


// hotel completion of profile

function complete_reg_profile() {
          Ben_way_to_get_element('profile_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Completing Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var h_name = Ben_way_to_get_element('h_name').value;
          var h_country=Ben_way_to_get_element('h_country').value;
          var account_id=Ben_way_to_get_element('account_id').value;
          var h_city=Ben_way_to_get_element('h_city').value;
          var h_stand=Ben_way_to_get_element('h_stand').value;
          var h_manager=Ben_way_to_get_element('h_manager').value;

          formdata.append('h_name', h_name);
          formdata.append('h_country', h_country);
          formdata.append('account_id', account_id);
          formdata.append('h_city', h_city);
          formdata.append('h_stand', h_stand);
          formdata.append('h_manager', h_manager);

          ajax1.open('POST', 'hotels_data/complete_profile_data.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('profile_complete_message').innerHTML = ajax1.responseText;

      };
}


// Agent accept hotel to work 

function accept_hotel_to_work() {
          Ben_way_to_get_element('hotel_invitation_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var agent_data = Ben_way_to_get_element('agent_data').value;
          var hotel_data = Ben_way_to_get_element('hotel_data').value;

          formdata.append('agent_data', agent_data);
          formdata.append('hotel_data', hotel_data);

          ajax1.open('POST', 'agent_data/accept_hotel_invitation.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('hotel_invitation_complete_message').innerHTML = ajax1.responseText;

      };
}

// Agent accept tour to work 

function accept_tour_to_work() {
          Ben_way_to_get_element('hotel_invitation_complete_message').innerHTML = "<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Profile . . . . . . </div>";

          var formdata = new FormData();
          var ajax1 = new XMLHttpRequest();

          var agent_data = Ben_way_to_get_element('agent_data').value;
          var hotel_data = Ben_way_to_get_element('hotel_data').value;

          formdata.append('agent_data', agent_data);
          formdata.append('hotel_data', hotel_data);

          ajax1.open('POST', 'agent_data/accept_tour_invitation.php'); //third argument can be true or false which is optional
          ajax1.send(formdata);

          ajax1.onreadystatechange = function () {
            Ben_way_to_get_element('hotel_invitation_complete_message').innerHTML = ajax1.responseText;

      };
}



// update Agent

function update_agent(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var staff=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&staff="+staff;
     ajax_changetab_and_send_data('master_data/update_agent.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// delete Agent
function delete_agent_data(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var staff=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&staff="+staff;
     ajax_changetab_and_send_data('master_data/delete_agent_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// delete room
function delete_room_data(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var room_account_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&room_account_id="+room_account_id;
     ajax_changetab_and_send_data('hotels_data/delete_room.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// change room status to occupied
function change_room_status_data(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var room_account_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&room_account_id="+room_account_id;
     ajax_changetab_and_send_data('hotels_data/available_room_stat.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// change room status to available
function update_room_status_data(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var room_account_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&room_account_id="+room_account_id;
     ajax_changetab_and_send_data('hotels_data/occupied_room_change_data.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// update room

function update_room(adminid){
    $("#loader_general_admin1").fadeOut(500);  
    setTimeout(function(){
      var room_account_id=Ben_way_to_get_element(adminid).innerHTML;
      var send_data1=
          "&room_account_id="+room_account_id;
     ajax_changetab_and_send_data('hotels_data/update_room.php', 'loader_general_admin', send_data1); 
    }, 500);
}

// update Agent data

function update_agent_data(){
  Ben_way_to_get_element('Message2').innerHTML="<div class='alert alert-info' role='alert'><i class='fa fa-info-circle'></i> Updating Staff Member Data . . . . </div>";

  var formdata=new FormData();
  var ajax1=new XMLHttpRequest();

  var staff=Ben_way_to_get_element('staff').value;
  var name=Ben_way_to_get_element('name').value;
  var pass=Ben_way_to_get_element('pass').value;
  var email=Ben_way_to_get_element('email').value;
  var tel=Ben_way_to_get_element('tel').value;

  formdata.append('staff',staff);
  formdata.append('name',name);
  formdata.append('pass',pass);
  formdata.append('email',email);
  formdata.append('tel',tel);

  ajax1.open('POST', 'master_data/update_agent_data.php'); //third argument can be true or false which is optional
  ajax1.send(formdata);

  ajax1.onreadystatechange=function(){
      Ben_way_to_get_element('Message2').innerHTML=ajax1.responseText;

  }; 
}
