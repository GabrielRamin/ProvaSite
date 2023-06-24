<!DOCTYPE html>
<html>
<head>
  <title>Menu Example</title>
  <style>
    /* CSS for the menu */
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }
    
    .menu-container {
      display: flex;
    }
    
    .primary-menu {
      background-color: deepskyblue;
      height: 50px;
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      border-radius: 10px;
    }
    
    .logo {
      display: flex;
      align-items: center;
      cursor: pointer;
    }
    
    .logo img {
      width: 30px;
      margin-right: 10px;
    }
    
    .user {
      display: flex;
      align-items: center;
      cursor: pointer;
      position: relative;
    }
    
    .user img {
      width: 20px;
      margin-right: 5px;
    }
    
    /* CSS for notifications */
    .notification {
      position: relative;
      display: inline-block;
      cursor: pointer;
    }
    
    .notification-badge {
      position: absolute;
      top: -5px;
      right: -5px;
      background-color: red;
      color: white;
      font-size: 12px;
      padding: 2px 5px;
      border-radius: 50%;
    }
    
    /* CSS for dropdown menus */
    .dropdown-menu {
      position: absolute;
      top: 100%;
      right: 0;
      background-color: white;
      border: 1px solid gray;
      padding: 10px;
      display: none;
      border-radius: 10px;
    }
    
    .dropdown-menu a {
      display: block;
      padding: 5px;
      text-decoration: none;
      color: black;
    }
    
    .user-dropdown-menu {
      position: absolute;
      top: 100%;
      right: 0;
      background-color: white;
      border: 1px solid gray;
      padding: 10px;
      display: none;
      border-radius: 10px;
    }
    
    .user-dropdown-menu a {
      display: block;
      padding: 5px;
      text-decoration: none;
      color: black;
    }
    
    .show {
      display: block;
    }

    /* CSS for secondary menu */
    .secondary-menu {
      background-color: lightgray;
      width: 200px;
      padding: 20px;
      margin-top: 10px;
      border-radius: 10px;
      font-family: "Arial", sans-serif;
      position: fixed;
      bottom: 0;
      left: 0;
      top: 50px;
      height: calc(100% - 50px);
    }

    .secondary-menu a {
      display: block;
      padding: 10px;
      margin-bottom: 10px;
      text-decoration: none;
      color: black;
    }
  </style>
</head>
<body>
  <div class="menu-container">
    <div class="primary-menu">
      <div class="logo" onclick="goToHomePage()">
        <img src="logo.png" alt="Logo">
      </div>
      <div class="user" onclick="toggleUserDropdownMenu(event)">
        <div class="notification" onclick="toggleDropdownMenu(event)">
          <img src="bell.png" alt="Notifications">
          <span class="notification-badge">1</span>
          <div class="dropdown-menu">
            <a href="#">Option 1</a>
            <a href="#">Option 2</a>
            <a href="#">Option 3</a>
          </div>
        </div>
        <span>Name of User</span>
        <div class="user-dropdown-menu">
          <a href="#">Logout</a>
        </div>
      </div>
    </div>
    <div class="secondary-menu">
        <a href="./CadastrarCasa/CadastroCasa.php">CADASTRAR CASA</a>
        <a href="./CadastrarCasa/ProssVisu.php">VISUALIZAR CASA</a>
        <a href="./CadastrarUsuario/index.php">CADASTRO USUARIO</a>
    </div>
  </div>

  <script>
    function goToHomePage() {
      // Redirect to homepage
      window.location.href = "homepage.html";
    }

    function toggleDropdownMenu(event) {
      // Toggle the dropdown menu
      const dropdownMenu = event.currentTarget.querySelector(".dropdown-menu");
      dropdownMenu.classList.toggle("show");
    }

    function toggleUserDropdownMenu(event) {
      // Toggle the user dropdown menu
      const userDropdownMenu = event.currentTarget.querySelector(".user-dropdown-menu");
      userDropdownMenu.classList.toggle("show");
    }
  </script>
</body>
</html>