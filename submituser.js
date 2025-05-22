async function submitUser() {
  //   const username = $("#username").val();
  //   const fname = $("#fname").val();
  //   const lname = $("#lname").val();
  //   const password = $("#password").val();
  const $form = $("form");
  const formData = new FormData($form[0]);
  try {
    const response = await fetch("submituser.php", {
      method: "POST",
      body: formData
    });
    if (!response.ok) {
      throw new Error("Yikes, something went wrong!");
    };
    $("form").replaceWith("<h2>Success!</h2><span>Your account has been created. <a href='login.php'>Click here</a> to go to the login page.</span>");
  } catch (e) {
    $("form").replaceWith("<h2>Error!</h2><span>You gave some nasty input. Please <a href='signup.php'>reload the page</a> and try again.</span>");
  }
}

$("#submit").on("click", e => {
  e.preventDefault();
  submitUser();
});
