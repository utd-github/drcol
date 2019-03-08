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
