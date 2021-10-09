document.getElementById("tableUser").addEventListener("click", delegationTable);

function delegationTable(event) {
  var userID = event.target.getAttribute("data-id");
  var action = event.target.getAttribute("data-action");
  if (action === "update") {
    // selectUser(userID);
    console.log("testing");
  }
  //   console.log("testing");
}
document.getElementsByClassName("adminUpdate");

// function selectUser(userID) {}
