<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Page Layout with Grid</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../../css/base.css" />
      <style type="text/css">
         nav {
            height: 100vh;

            display: grid;
            grid-auto-rows: 1fr;
         }
         @media screen and (min-width: 480px) {
            nav {
               grid-template-columns: repeat(2, 1fr);
               /* could be replace by gird-auto-rows:1fr */
               /* grid-template-rows: repeat(3, 1fr); */
            }
         }
         @media screen and (min-width: 768px) {
            nav {
               grid-template-columns: repeat(3, 1fr);
            }
         }
         nav > div {
            padding: 3rem;
            background: #41295a;
            background: -webkit-linear-gradient(to bottom right, #2f0743, #41295a);
            background: linear-gradient(to bottom right, #2f0743, #41295a);
         }
         a {
            display: inline-block;
            margin-bottom: 0.7rem;
            padding-bottom: 0.1rem;
            border-bottom: solid 1px white;
            color: white;
            text-decoration: none;
         }
      </style>
   </head>
   <body>
      <nav>
         <div>
            <h2><a href="#">Home</a></h2>
            <p>Learn about the latest updates</p>
         </div>
         <div>
            <h2><a href="#">Products</a></h2>
            <p>Free and paid products to suit your needs</p>
         </div>
         <div>
            <h2><a href="#">Services</a></h2>
            <p>Here's what we can offer you</p>
         </div>
         <div>
            <h2><a href="#">About</a></h2>
            <p>Get to know us better</p>
         </div>
         <div>
            <h2><a href="#">Blog</a></h2>
            <p>Dig deeper into lots of content</p>
         </div>
         <div>
            <h2><a href="#">Contact</a></h2>
            <p>Reach out to us</p>
         </div>
      </nav>
   </body>
</html>