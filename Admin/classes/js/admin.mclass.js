// prevent form reload
$("form").submit(function(event) {
  event.preventDefault();
});
// listen fot form submit
$("#submit").click(function() {
  var cname = $("#cname").val();
  var tid = $("#tid").val();
  var tname = $("#tname").val();
  var subid = $("#subid").val();
  var subname = $("#subname").val();
  var room = $("#room").val();
  var des = $("#des").val();


  if  (cname.trim() !== "" && tid.trim() !== "" && tname.trim() !== "" && subid.trim() !== "" && subname.trim() !== "" && room.trim() !== "" && des.trim() !== "")
  {
    var url = "http://localhost/xampserver/drcol/admin/api/mclasses.php?c=c";
    var fdata = new FormData();
    fdata.append("cname", cname);
    fdata.append("tid", tid);
    fdata.append("tname", tname);
    fdata.append("subid", subid);
    fdata.append("subname", subname);
    fdata.append("room", room);
    fdata.append("des", des);


    fetch(url, {
      method: "POST",
      body: fdata
    })
      .then(response => response.text())
      .then(res => {
        console.log(res);
        if (res.success == true) {
          document.location.replace(
            "http://localhost/xampserver/drcol/admin/classes/"
          );
        } else {
          alert("Error submitting form \n", "error: ", res.error);
        }
      })
      .catch(error => console.error("Fetch Error:", error));
  } else {
    alert("Fill all field before submitting");
  }
});
$("#submitnew").click(function() {
  var cname = $("#cname").val();
  var tid = $("#tid").val();
  var tname = $("#tname").val();
  var subid = $("#subid").val();
  var subname = $("#subname").val();
  var room = $("#room").val();
  var des = $("#des").val();


  if  (cname.trim() !== "" && tid.trim() !== "" && tname.trim() !== "" && subid.trim() !== "" && subname.trim() !== "" && room.trim() !== "" && des.trim() !== "")
  {
    var url = "http://localhost/xampserver/drcol/admin/api/mclasses.php?c=c";
    var fdata = new FormData();
    fdata.append("cname", cname);
    fdata.append("tid", tid);
    fdata.append("tname", tname);
    fdata.append("subid", subid);
    fdata.append("subname", subname);
    fdata.append("room", room);
    fdata.append("des", des);
  
    fetch(url, {
      method: "POST",
      body: fdata
    })
      .then(response => response.json())
      .then(res => {
        console.log(res);
        if (res.success == true) {
          document.location.replace(
            "http://localhost/xampserver/drcol/admin/classes/new.php"
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
     <td>${mclass.cname}</td>
     <td>${mclass.tname}</td>
     <td>${mclass.subname}</td>
     <td>${mclass.room}</td>
     
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
  $("#classestable").html(mclassestr);
}
