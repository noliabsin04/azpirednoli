<?php

require_once "db.php";

$errors =[];

if(isset($_POST['signup'])){
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $Rpassword = trim($_POST['Rpassword']);

    if(empty($username)){
        $errors[] ="Username is required";
        
    }elseif (strlen($username) <= 3){
        $errors[] = "User name must more than 3 characters";

    }

    if(empty($email)){
        $errors[] = "Email is required";

    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "Email is Invalid";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters";
    } elseif ($password !== $Rpassword) {
        $errors[] = "Password do not match";
    }


   

    $checkUsername = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $checkUsername->bind_param("s", $username);
    $checkUsername->execute();
    $checkUsername->store_result();

    if ($checkUsername->num_rows > 0) {
        $errors[] = "Username is already taken";
    }
    $checkEmail = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $checkEmail->bind_param("s", $email);
    $checkEmail->execute();
    $checkEmail->store_result();

    if ($checkEmail->num_rows > 0) {
        $errors[] = "Email is already taken";
    }

    if(empty($errors)){
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $user_type = "user";

        $stmt = $conn->prepare("INSERT INTO users(username, email, password, user_type) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $hashedPassword, $user_type);

        if($stmt->execute()){
            echo "<script>alert('Account is created successfuly');</script>";
            
        }else {
            echo "<script>alert('Error Creating a account');</script>";
            
        }
    }
    
    
}

?>





<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>
  <body>

<body class="flex font-poppins items-center justify-center">
    <div class="h-screen w-screen flex justify-center items-center dark:bg-gray-900">
    <div class="grid gap-8">
      <div
        id="back-div"
        class="bg-gradient-to-r from-blue-500 to-purple-500 rounded-[26px] m-4"
      >
        <div
          class="border-[20px] border-transparent rounded-[20px] dark:bg-gray-900 bg-white shadow-lg xl:p-10 2xl:p-10 lg:p-10 md:p-10 sm:p-2 m-2"
        >
          <h1 class="pt-8 pb-6 font-bold dark:text-gray-400 text-5xl text-center cursor-default">
            Register
          </h1>
          <?php
            if (!empty($errors)) {
                echo "<script>alert('" . implode("\\n", $errors) . "');</script>";
            }
           ?>
          <form action="signup.php" method="post" class="space-y-4">
            <div>
              <label for="username" class="mb-2  dark:text-gray-400 text-lg">Username</label>
              <input
                id="username"
                class="border p-3 dark:bg-indigo-700 dark:text-gray-300  dark:border-gray-700 shadow-md placeholder:text-base focus:scale-105 ease-in-out duration-300 border-gray-300 rounded-lg w-full"
                type="text"
                name = "username"
                placeholder="username"
                required
              />
            </div>
            <div>
              <label for="password" class="mb-2 dark:text-gray-400 text-lg">Password</label>
              <input
                id="password"
                class="border p-3 shadow-md dark:bg-indigo-700 dark:text-gray-300  dark:border-gray-700 placeholder:text-base focus:scale-105 ease-in-out duration-300 border-gray-300 rounded-lg w-full"
                type="password"
                placeholder="Password"
                name = "password"
                required
              />
            </div>
            <div>
              <label for="password" class="mb-2 dark:text-gray-400 text-lg">Repeat Password</label>
              <input
                id="Rpassword"
                class="border p-3 shadow-md dark:bg-indigo-700 dark:text-gray-300  dark:border-gray-700 placeholder:text-base focus:scale-105 ease-in-out duration-300 border-gray-300 rounded-lg w-full"
                type="password"
                placeholder="Password"
                name = "Rpassword"
                required
              />
            </div>
            <div>
              <label for="password" class="mb-2 dark:text-gray-400 text-lg">Email</label>
              <input
                id="text"
                class="border p-3 shadow-md dark:bg-indigo-700 dark:text-gray-300  dark:border-gray-700 placeholder:text-base focus:scale-105 ease-in-out duration-300 border-gray-300 rounded-lg w-full"
                type="email"
                placeholder="Email"
                name = "email"
                required
              />
            </div>
            <a
              class="group text-blue-400 transition-all duration-100 ease-in-out"
              href="#"
            >
            </a>
            <button
              class="bg-gradient-to-r dark:text-gray-300 from-blue-500 to-purple-500 shadow-lg mt-6 p-2 text-white rounded-lg w-full hover:scale-105 hover:from-purple-500 hover:to-blue-500 transition duration-300 ease-in-out"
              type="submit" name= "signup"
            >
            REGISTER
            </button>
          </form>
          <div class="flex flex-col mt-4 items-center justify-center text-sm">
            <h3 class="dark:text-gray-300">
              Ready to Login?
              <a
                class="group text-blue-400 transition-all duration-100 ease-in-out"
                href="login.php"
              >
                <span
                  class="bg-left-bottom bg-gradient-to-r from-blue-400 to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out"
                >
                  Login
                </span>
              </a>
            </h3>
          </div>
          <!-- Third Party Authentication Options -->
          

          <div
            class="text-gray-500 flex text-center flex-col mt-4 items-center text-sm"
          >
            <p class="cursor-default">
              By signing in, you agree to our
              <a
                class="group text-blue-400 transition-all duration-100 ease-in-out"
                href="#"
              >
                <span
                  class="cursor-pointer bg-left-bottom bg-gradient-to-r from-blue-400 to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out"
                >
                  Terms
                </span>
              </a>
              and
              <a
                class="group text-blue-400 transition-all duration-100 ease-in-out"
                href="#"
              >
                <span
                  class="cursor-pointer bg-left-bottom bg-gradient-to-r from-blue-400 to-blue-400 bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out"
                >
                  Privacy Policy
                </span>
              </a>
            </p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </body>
</html>