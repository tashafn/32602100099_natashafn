<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <style>
        /* app/Views/layout.css */
        body {
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
        }

        .navbar {
          display: flex;
          justify-content: space-between;
          background-color: #333;
          color: #fff;
          padding: 20px;
        }

        .navbar ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          display: flex;
        }

        .navbar ul li {
          margin-right: 20px;
        }

        .navbar ul li a {
          color: #fff;
          text-decoration: none;
        }

        .banner {
          background-color: #f2f2f2;
          text-align: center;
          padding: 50px;
        }

        .banner .name {
          font-size: 10px;
          font-weight: bold;
          color: #333;
        }

        .banner .description {
          font-size: 16px;
          color: #666;
        }

        /* CSS khusus untuk halaman konten */
        .content {
          margin-top: 20px;
          padding: 20px;
        }

        .content h1 {
          color: #333;
        }

        .content p {
          color: #666;
        }
    </style>
</head>
<body>
    <header>
        <h1>Header</h1>  
    </header>
    <div class="navbar">
        <div class="navbar-page">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Skills</a></li>
            </ul>
        </div>
    </div>

    <div class="content">
        <h2>Profil Saya</h2>
        <p>Nama: Natasha Faras Nabila</p>
        <p>Umur: 20 Tahun</p>
        <p>Fakultas: Teknologi Industri</p>

        <h2>Keahlian</h2>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>Adobe Premiere</li>
            <li>Adobe Illustrator</li>
            <li>Photography</li>
        </ul>
    </div>

    <footer>
      <div class="navbar">
        <div class="navbar-page">
        <h1 style="font-family: verdana;">Footer</h1>
    </footer>
</body>
</html>

