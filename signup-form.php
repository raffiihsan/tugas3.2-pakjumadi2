<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <style>

    h1{

        color: rgb(34, 128, 128);
        font-family: Poppins, sans-serif;

    }

     body{

        text-align :center;
        background-color: cyan;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
     }  
     
     
   </style>

</head>
<body>
   <h1> Buat Account Baru</h1>
   <h2>Sign up form</h2>
   <form action="welcome.php" method="get">
   <label for="Name">First name :</label>
   <br></br>
   <input type="text" id="Name" name="Name">
   <br></br>
   <label for="last">Last name :</label>
   <br></br>
   <input type="text" id="last" name="last">
   <br></br>
   
   <label for="Gender">Gender</label>
   <br></br>

       <input type="radio" name="Gender" value="male" id="male">
       <label for="male">male</label>
       <br>
       <input type="radio" name="Gender" value="Female" id="Female">
       <label for="Female">Female</label>
       <br>
       <input type="radio" name="Gender" value="Bugatti" id="Bugatti">
       <label for="Bugatti">Bugatti</label>
       <br></br>

       <label for="Negara">Nationality</label>
       <br></br>
       <select name="Negara" id="negara">
               <option value="Indonesia">Indonesia</option>
               <option value="Rusia">Rusia</option>
               <option value="Japan">Japan</option>
               <option value="Canada">Canada</option>
               <option value="Jawir">jawir</option>
               <option value="Nepal">Nepal</option>
               <option value="East Korean">East Korean</option>
       </select>

       <label for="language">language</label>
       <br></br>
       <input type="checkbox" Name="language">Nihonggo<br>
       <input type="checkbox" Name="language">Rusia<br>
       <input type="checkbox" Name="language">javanese<br>
       <input type="checkbox" Name="language">France<br>
       <input type="checkbox" Name="language">Nepali<br>
       <input type="checkbox" Name="language">Korean<br>
       <br></br>

       <label for="Bio">Bio</label>
       <br></br>
       <textarea name="Bio" id="Bio" cols="30" rows="10"></textarea>
       <br>
       
       <a href="welcome.php">
           <button>sign up</button>
       </a>
       </form>
    </body>
</html>