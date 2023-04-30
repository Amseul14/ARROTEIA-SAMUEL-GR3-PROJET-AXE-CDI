function openPopup() {
    document.getElementById("favDialog").style.height = "auto";
    document.getElementById("favDialog").style.width = "40%";
    document.getElementById("favDialog").style.padding = "10px";
  }
  
/* Set the width of the sidebar to 0 (hide it) */
function closePopup() {
  document.getElementById("favDialog").style.height = "0";
  document.getElementById("favDialog").style.width = "0";
  document.getElementById("favDialog").style.padding = "0";
}

function showDelete() {
  document.getElementById("popupDelete").style.display = "block";
}
  
function hideDelete() {
  document.getElementById("popupDelete").style.display = "none";
}

function openSidenav() {
  document.getElementById("sideNav").style.height = "300px";
  document.getElementById("sideNav").style.width = "400px";
  document.getElementById("sideNav").style.padding = "10px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeSidenav() {
  document.getElementById("sideNav").style.height = "0";
  document.getElementById("sideNav").style.width = "0";
  document.getElementById("sideNav").style.padding = "0";
}
