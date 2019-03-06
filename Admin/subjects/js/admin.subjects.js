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

  subjects.map((subject, i) => {
    subjectstr += `
    <tr>
     <td>${i + 1}</td>
     <td>${subject.sub_name}</td>
     <td>${subject.sub_description}</td>
    </tr>
   `;
  });
  $("#subjectstable").html(subjectstr);
}
