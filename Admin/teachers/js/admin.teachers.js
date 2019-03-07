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

  teachers.map((teachers, i) => {
    teacherstr += `
    <tr>
     <td>${i + 1}</td>
     <td>${taecher.t_name}</td>
     <td>${taecher.qualificatio}</td>
     <td>${taecher.email}</td>
     <td>${taecher.phone}</td>
     <td>${taecher.joined_year}</td>
     <td>${taecher.sub_name}</td>
     <td>${taecher.hire_date}</td>
     <td>${teacher.description}</td>
    </tr>
   `;
  });
  $("#teacherstable").html(teacherstr);
}
