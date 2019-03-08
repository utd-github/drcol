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
