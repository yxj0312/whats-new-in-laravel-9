<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Page Layout with Grid</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../../base.css" />
      <style type="text/css">
         body {
            min-height: 100vh;
            display: grid;
            grid-template-rows: auto 1fr auto;
         }
         header,
         footer {
            padding: 2rem;
            background-color: rgb(54, 54, 58);
         }
         section {
            padding: 2rem;
            background-color: rgb(26, 26, 26);
         }
         h1 {
            color: rgb(131, 250, 250);
            margin: 0;
         }
         p {
            padding-top: 0.5rem;
            max-width: 48rem;
            line-height: 1.6;
         }
      </style>
   </head>
   <body>
      <header>
         <h2>Brand Logo</h2>
      </header>
      <section>
         <h1>Main Content</h1>
         <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, laudantium sint ea eveniet consectetur
            tempore sapiente perferendis nemo corporis suscipit, amet tempora consequuntur quisquam temporibus, natus
            libero. Totam, quisquam architecto?
         </p>
      </section>
      <footer>
         <small>Copyrights &copy; 2022</small>
      </footer>
   </body>
</html>