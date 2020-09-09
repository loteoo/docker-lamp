<html>
 <head>
  <title>Hello world</title>
  <style>

    /* Reset */
    html {
      box-sizing: border-box;
      font-size: 16px;
    }

    *, *:before, *:after {
      box-sizing: inherit;
    }

    body, h1, h2, h3, h4, h5, h6, p, ol, ul {
      margin: 0;
      padding: 0;
      font-weight: normal;
    }

    ol, ul {
      list-style: none;
    }

    img {
      max-width: 100%;
      height: auto;
    }

    /* Page styles */
    body {
      padding: 1rem;
      font-family: Arial, sans-serif;
    }

  </style>
</head>
<body>
  <h1>Hello world</h1>
  <?php
    $hostname = "db";
    $username = "default";
    $password = "password";
    $database = "default";

    // Create connection
    $conn = new mysqli($hostname, $username, $password, $database);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, first_name, last_name FROM users";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
  ?>
</body>
</html>
