// prevent form reload
$("form").submit(function(event) {
  event.preventDefault();
});
// listen fot form submit
$("#submit").click(function() {
  var sname = $("#sname").val();
  var sdes = $("#sdes").val();

  if (sname.trim() !== "" && sdes.trim() !== "") {
    var url = "http://localhost/xampserver/drcol/admin/api/subjects.php?c=c";
    var fdata = new FormData();
    fdata.append("name", sname);
    fdata.append("des", sdes);
    fetch(url, {
      method: "POST",
      body: fdata
    })
      .then(response => response.json())
      .then(res => {
        console.log(res);
        if (res.success == true) {
          document.location.replace(
            "http://localhost/xampserver/drcol/admin/subjects/"
          );
        } else {
          alert("Error submitting form");
        }
      })
      .catch(error => console.error("Fetch Error:", error));
  } else {
    alert("Fill all field before submitting");
  }
});
$("#submitnew").click(function() {
  var sname = $("#sname").val();
  var sdes = $("#sdes").val();

  if (sname.trim() !== "" && sdes.trim() !== "") {
    var url = "http://localhost/xampserver/drcol/admin/api/subjects.php?c=c";
    var fdata = new FormData();
    fdata.append("name", sname);
    fdata.append("des", sdes);
    fetch(url, {
      method: "POST",
      body: fdata
    })
      .then(response => response.json())
      .then(res => {
        console.log(res);
        if (res.success == true) {
          document.location.replace(
            "http://localhost/xampserver/drcol/admin/subjects/new.php"
          );
        } else {
          alert("Error submitting form");
        }
      })
      .catch(error => console.error("Fetch Error:", error));
  } else {
    alert("Fill all field before submitting");
  }
});

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
            <i class="fa fa-eye text-primary fa-lg" style="cursor: pointer;"></i>
            <i class="fa fa-edit text-success fa-lg" style="cursor: pointer;"></i>
            <i class="fa fa-trash text-danger fa-lg "style="cursor: pointer;"></i>
     </td>

    </tr>
   `;
  });
  $("#subjectstable").html(subjectstr);
}
//Post request
function submitForm(sname, sdes, c) {}
