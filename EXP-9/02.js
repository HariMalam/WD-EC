function calculateDays() {
  var dob = new Date(document.getElementById("dob").value);
  var days = daysUntilBirthday(dob);
  document.getElementById("result").innerText = `Days Left ${days}`
}

function daysUntilBirthday(birthday) {
  // Get today's date
  var today = new Date();
  // Get next birthday's date
  var nextBirthday = new Date(today.getFullYear(), birthday.getMonth(), birthday.getDate());
  // If next birthday is before today, add 1 to year to get next year's birthday
  if (nextBirthday < today) {
      nextBirthday.setFullYear(nextBirthday.getFullYear() + 1);
  }
  // Calculate the difference in milliseconds
  var difference = nextBirthday - today;
  // Convert milliseconds to days
  var days = Math.ceil(difference / (1000 * 60 * 60 * 24));
  return days;
}