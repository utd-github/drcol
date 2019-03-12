// prevent form reload
$("form").submit(function(event) {
  event.preventDefault();
});
// listen fot form submit
$("#submit").click(function() {
  var tname = $("#tname").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var sname = $("#sname").val();
  var Qualification = $("#Qualification").val();
  var jyear = $("#jyear").val();
  var hdate = $("#hdate").val();
  var des = $("#des").val();
  if (
    tname.trim() !== "" &&
    email.trim() !== "" &&
    phone.trim() !== "" &&
    sname.trim() !== "" &&
    Qualification.trim() !== "" &&
    jyear.trim() !== "" &&
    hdate.trim() !== "" &&
    des.trim() !== ""
  ) {
    var url = "http://localhost/xampserver/drcol/admin/api/teachers.php?c=c";
    var fdata = new FormData();
    fdata.append("tname", tname);
    fdata.append("email", email);
    fdata.append("phone", phone);
    fdata.append("sname", sname);
    fdata.append("Qualification", Qualification);
    fdata.append("jyear", jyear);
    fdata.append("hdate", hdate);
    fdata.append("des", des);
    fetch(url, {
      method: "POST",
      body: fdata
    })
      .then(response => response.json())
      .then(res => {
        console.log(res);
        if (res.success == true) {
          document.location.replace(
            "http://localhost/xampserver/drcol/admin/teachers/"
          );
        } else {
          alert("Error submitting form \n", "error: ", res.error);
        }
      })
      .catch(error => console.error("Fetch Error:", error));
  } else {
    alert("Fill all field before submitting");
  }
});
$("#submitnew").click(function() {
  var tname = $("#tname").val();
  var email = $("#email").val();
  var phone = $("#phone").val();
  var sname = $("#sname").val();
  var Qualification = $("#Qualification").val();
  var jyear = $("#jyear").val();
  var hdate = $("#hdate").val();
  var des = $("#des").val();

  if (
    tname.trim() !== "" &&
    email.trim() !== "" &&
    phone.trim() !== "" &&
    sname.trim() !== "" &&
    Qualification.trim() !== "" &&
    jyear.trim() !== "" &&
    hdate.trim() !== "" &&
    des.trim() !== ""
  ) {
    var url = "http://localhost/xampserver/drcol/admin/api/teachers.php?c=c";
    var fdata = new FormData();
    fdata.append("tname", tname);
    fdata.append("email", email);
    fdata.append("phone", phone);
    fdata.append("sname", sname);
    fdata.append("Qualification", Qualification);
    fdata.append("hdate", hdate);
    fdata.append("des", des);

    fetch(url, {
      method: "POST",
      body: fdata
    })
      .then(response => response.json())
      .then(res => {
        console.log(res);
        if (res.success == true) {
          document.location.replace(
            "http://localhost/xampserver/drcol/admin/teachers/new.php"
          );
        } else {
          alert("Error submitting form");
        }
      })
      .catch(error => console.error("Fetch Error:", error));
  } else {
    alert("Fill all field before submitting");
  }
});


// Get Teachers
getTeachers();
// get Teachers function
function getTeachers() {
  fetch("http://localhost/xampserver/drcol/admin/api/teachers.php?c=r")
    .then(function(response) {
      return response.json();
    })
    .then(function(teachers) {
      populateTeachers(teachers);
    });
}

function populateTeachers(teachers) {
  let teacherstr = "";
  teachers.map((teacher, i) => {
 	 teacherstr += `
    <tr>
     <td>${i + 1}</td>
     <td>${teacher.t_name}</td>
     <td>${teacher.qualification}</td>
     <td>${teacher.email}</td>
     
    
     <td>
          <button type="button" class="btn btn-primary">
            <i class="fa fa-eye"></i>
          </button>
          <button type="button" class="btn btn-success">
            <i class="fa fa-edit"></i>
          </button>
          <button type="button" class="btn btn-danger">
            <i class="fa fa-trash"></i>
          </button>
     </td>
    </tr>
   `;
  });
  $("#teacherstable").html(teacherstr);
}
