function openMenu() {
  const element = document.getElementById("extMenu");
  if (element.className == "closed") {
      element.className = "opened";
  } else {
      element.className = "closed";
  }
}

function closeMenu() {
  const element = document.getElementById("extMenu");
  if (element.className == "opened") {
      element.className = "closed";
  } else {
      element.className = "opened";
  }
}