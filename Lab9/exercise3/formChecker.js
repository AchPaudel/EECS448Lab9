document.getElementById('form').addEventListener('submit', action => {

  if (invalidUsername(document.querySelector('input[type=text]').value)) {
    alert("Username invalid.");
    action.preventDefault();
  } 

  else if (document.querySelector('input[type=password]').value === "") {
    alert("Password cannot be empty");
    action.preventDefault();
  }
});
