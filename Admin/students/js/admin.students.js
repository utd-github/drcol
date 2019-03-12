// prevent form reload
$("form").submit(function(event) {
  event.preventDefault();
});
// listen fot form submit
$("#submit").click(function() {
  var fname = $("#fname").val();
  var rnum = $("#rnum").val();
  var phone = $("#phone").val();
  var email = $("#email").val();
  var pob = $("#pob").val();
  var dob = $("#dob").val();
  var pid = $("#pid").val();
  var pname = $("#pname").val();
  var sem = $("#sem").val();
  var sdate = $("#sdate").val();
  var des = $("#des").val();

  if (
    fname.trim() !== "" &&
    rnum.trim() !== "" &&
    phone.trim() !== "" &&
    email.trim() !== "" &&
    pob.trim() !== "" &&
    dob.trim() !== "" &&
    pid.trim() !== "" &&
    pname.trim() !== "" &&
    sem.trim() !== "" &&
    sdate.trim() !== "" &&
    des.trim() !== ""
  ) {
    var url = "http://localhost/xampserver/drcol/admin/api/students.php?c=c";
    var fdata = new FormData();
    fdata.append("fname", fname);
    fdata.append("rnum", rnum);
    fdata.append("phone", phone);
    fdata.append("email", email);
    fdata.append("pob", pob);
    fdata.append("dob", dob);
    fdata.append("pid", pid);
    fdata.append("pname", pname);
    fdata.append("sem", sem);
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
            "http://localhost/xampserver/drcol/admin/students/"
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
  var fname = $("#fname").val();
  var rnum = $("#rnum").val();
  var phone = $("#phone").val();
  var email = $("#email").val();
  var pob = $("#pob").val();
  var dob = $("#dob").val();
  var pid = $("#pid").val();
  var pname = $("#pname").val();
  var sem = $("#sem").val();
  var sdate = $("#sdate").val();
  var des = $("#des").val();


  if (
    fname.trim() !== "" &&
    rnum.trim() !== "" &&
    phone.trim() !== "" &&
    email.trim() !== "" &&
    pob.trim() !== "" &&
    dob.trim() !== "" &&
    pname.trim() !== "" &&
    sem.trim() !== "" &&
    sdate.trim() !== "" &&
    des.trim() !== ""
  ) {
    var url = "http://localhost/xampserver/drcol/admin/api/students.php?c=c";
    var fdata = new FormData();
    fdata.append("fname", fname);
    fdata.append("rnum", rnum);
    fdata.append("phone", phone);
    fdata.append("email", email);
    fdata.append("pob", pob);
    fdata.append("dob", dob);
    fdata.append("pid", pid);
    fdata.append("pname", pname);
    fdata.append("sem", sem);
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
            "http://localhost/xampserver/drcol/admin/students/new.php"
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


// Get Students
getStudents();
// get Students function
function getStudents() {
  fetch("http://localhost/xampserver/drcol/admin/api/students.php?c=r")
    .then(function(response) {
      return response.json();
    })
    .then(function(students) {
      populateStudents(students);
    });
}

function populateStudents(students) {
  let studentstr = "";
  students.map((student, i) => {
    studentstr += `
    <tr>
     <td>${i + 1}</td>
     <td>${student.std_rollno}</td>
     <td>${student.std_name}</td>
     <td>${student.std_phone}</td>
     <td>${student.std_email}</td>
     <td>${student.year}</td>
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
  $("#studentstable").html(studentstr);
}
