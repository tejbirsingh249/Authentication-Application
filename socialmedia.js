function onSignIn(googleUser) {
  var getProfile = googleUser.getBasicProfile();

  $("#name").text(getProfile.getName());
  $("#email").text(getProfile.getEmail());
  $("#image").attr("src", getProfile.getImageUrl());
  $(".retreivedata").css("display", "block");
  $(".g-signin2").css("display", "none");
}

function signOut() {
  var myAuth = gapi.auth2.getAuthInstance();
  myAuth.signOut().then(function () {
    $getName = $_SESSION["username"];
    alert("You have been uccessfully signed out");
    $(".g-signin2").css("display", "block");
    $(".retreivedata").css("display", "none");
  });
}
