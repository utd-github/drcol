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
     <td>${student.f_name}</td>
     <td>${student.std_rollno}</td>
     <td>${student.std_age}</td>
     <td>${student.std_email}</td>
     <td>${student.pob}</td>
     <td>${student.dob}</td>
     <td>${student.gender}</td>
     <td>${student.semester}</td>
     <td>${student.std_age}</td>
     <td>${student.p_name}</td>
     <td>${student.p_id}</td>
     <td>${student.sub_date}</td>
    </tr>
   `;
  });
  $("#studentstable").html(studentstr);
}
