// Get Subjects
getSubjects();
// get Subjects function
function getSubjects() {
  fetch("http://localhost/xampserver/drcol/admin/api/subjects.php?c=r")
    .then(function(response) {
      return response.json();
    })
    .then(function(subjects) {
      populateSubjects(subjects);
    });
}

function populateSubjects(subjects) {
  let subjectstr = "";

  subjects.map((subjects, i) => {
    subjectstr += `
    <tr>
     <td>${i + 1}</td>
     <td>${subjects.sub_name}</td>
     <td>${subjects.sub_description}</td>

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
  $("#subjectstable").html(subjectstr);
}
