// Get class
getClass();
// get classes function
function getClass() {
  fetch("http://localhost/xampserver/drcol/admin/api/classes.php?c=r")
    .then(function(response) {
      return response.json();
    })
    .then(function(classes) {
      populateClass(classes);
    });
}

function populateClass(classes) {
  let classestr = "";

  classes.map((classes, i) => {
    classestr += `
    <tr>
     <td>${i + 1}</td>
     <td>${classes.class_name}</td>
     <td>${classes.teacher_id}</td>
     <td>${classes.teacher_name}</td>
     <td>${classes.std_id}</td>
     <td>${classes.std_name}</td>
     <td>${classes.semester}</td>
     <td>${classes.description}</td>
    </tr>
   `;
  });
  $("#Classestable").html(classestr);
}
