// Get Mclass
getMclass();
// get Mclass function
function getMclass() {
  fetch("http://localhost/xampserver/drcol/admin/api/mclasses.php?c=r")
    .then(function(response) {
      return response.json();
    })
    .then(function(mclasses) {
      populateMclass(mclasses);
    });
}

function populateMclass(mclasses) {
  let mclassestr = "";

  mclasses.map((mclass, i) => {
    mclassestr += `
    <tr>
     <td>${i + 1}</td>
     <td>${mclass.class_name}</td>
     <td>${mclass.teacher_name}</td>
     <td>${mclass.sub_name}</td>
     
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

  $("#clasestable").html(mclassestr);
}

console.log("Hello")