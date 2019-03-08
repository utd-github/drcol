// Get Exams
getExams();
// get Exams function
function getExams() {
  fetch("http://localhost/xampserver/drcol/admin/api/exams.php?c=r")
    .then(function(response) {
      return response.json();
    })
    .then(function(exam) {
      populateExam(exam);
    });
}

function populateExam(exam) {
  let examstr = "";

  exam.map((exam, i) => {
    examstr += `
    <tr>
     <td>${i + 1}</td>
     <td>${exam.exam_name}</td>
     <td>${exam.description}</td>
     <td>${exam.date}</td>
     
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
  $("#examstable").html(examstr);
}
