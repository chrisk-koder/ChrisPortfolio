function copyBtn(TextToCopy) {
  var copyText = document.createElement("input");
  copyText.value = TextToCopy;
  document.body.appendChild(copyText);
  copyText.select();
  
  document.execCommand("copy");
  document.body.removeChild(copyText);
  
  //alert("Copied: " + copyText.value);
}