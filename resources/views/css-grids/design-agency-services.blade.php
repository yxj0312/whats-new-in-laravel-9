<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Design Agency Services</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../../base.css" />
      <style type="text/css">
         section {
            max-width: 54rem;
            margin: 4rem auto 0;
            padding: 1.2rem;
            background-color: #32343c;
            color: white;

            display: grid;
            /* grid-template-columns: 20rem 25rem; */
            /* three column taking up one fraction of the space */
            /* grid-template-columns: 1fr 1fr 1fr; */
            /* grid-template-columns: 1fr 2fr; */
            grid-template-columns: repeat(3, 1fr);
         }
         @media screen and (min-width: 480px) {
            section {
               grid-template-columns: 50% 50%;
            }
         }
         @media screen and (min-width: 720px) {
            section {
               grid-template-columns: 33.33% 33.33% 33.33%;
            }
         }
         section > div {
            padding: 1.2rem;
         }
         section > div > h2 {
            color: #03dac6;
         }
         section > div > p {
            margin-top: 1rem;
         }
      </style>
   </head>
   <body>
      <section>
         <div>
            <h2>Logo Design</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam recusandae.</p>
         </div>
         <div>
            <h2>Graphic Design</h2>
            <p>Corporis quaerat saepe iste id cupiditate perferendis fugiat sapiente natus totam?</p>
         </div>
         <div>
            <h2>Branding</h2>
            <p>Adipisci sequi sed velit deserunt asperiores, corporis quaerat saepe iste id.</p>
         </div>
         <div>
            <h2>Photography</h2>
            <p>Id cupiditate perferendis fugiat sapiente natus totam? Rerum, libero mollitia?</p>
         </div>
         <div>
            <h2>Video Editing</h2>
            <p>Corporis quaerat saepe iste id cupiditate perferendis fugiat sapiente natus totam?</p>
         </div>
         <div>
            <h2>Web Design</h2>
            <p>Adipisci sequi sed velit deserunt asperiores, corporis quaerat saepe iste id.</p>
         </div>
      </section>
   </body>
</html>