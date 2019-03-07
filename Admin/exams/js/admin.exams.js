// Get Subjects
getExams();
// get Subjects function
function getExams() {
  fetch("http://localhost/xampserver/drcol/admin/api/exams.php?c=r")
    .then(function(response) {
      return response.json();
    })
    .then(function(exams) {
      populateExams(exams);
    });
}

function populateExams(exams) {
  let examstr = "";

  exams.map((exams, i) => {
    examstr += `
    <tr>
     <td>${i + 1}</td>
     <td>${exam.exam_name}</td>
     <td>${exam.exam_type}</td>
     <td>${exam.description}</td>
     <td>${exam.date}</td>

    </tr>
   `;
  });
  $("#examstable").html(examstr);
}
