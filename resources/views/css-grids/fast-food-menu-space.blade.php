<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Fast Food Menu</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../../base.css" />
      <style type="text/css">
         section {
            max-width: 30rem;
            margin: 4rem auto 0;
            padding: 2rem;
            background-color: #32343c;
            color: white;

            display: grid;
            
            /* grid-template-columns: auto auto; */
            /* grid-template-columns: 1fr auto; */

            /* Only fr units */
            grid-template-columns: 1fr 2fr;

            /* Width in px or % with 'fr' units */
            grid-template-columns: 1fr 1fr 50%;

            /* Only 'auto' values */
            grid-template-columns: auto auto;

            /* Width in px or % with 'auto' values */
            grid-template-columns: auto 100px;

            /* The 'fr' unit with 'auto' values */
            grid-template-columns: 1fr auto;

            /* column-gap: 2rem;
            row-gap: 2rem; */
            /* gap:2rem 2rem; */
            gap:2rem;
         }
         .icon {
            font-size: 3rem;
            padding-top: 1rem;
         }
         /* Remove this margin, use column-gap and row-gap */
         /* .item {
            margin: 1rem 2rem 1rem 0;
         } */
         h3 {
            padding-bottom: 0.2rem;
            color: rgb(255, 220, 132);
            font-weight: bold;
         }
      </style>
   </head>
   <body>
      <section>
         <div class="item">
            <h3>Veg Burger</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit atque hic eligendi.</p>
         </div>
         <div class="icon">🍔</div>
         <div class="item">
            <h3>Tacos</h3>
            <p>Quos sunt non labore ab dicta ea sequi error, sapiente asperiores quas.</p>
         </div>
         <div class="icon">🌮</div>
         <div class="item">
            <h3>Classic Waffles</h3>
            <p>Dolorem nesciunt minima reprehenderit natus nam ipsum ipsa, laudantium.</p>
         </div>
         <div class="icon">🧇</div>
      </section>
   </body>
</html>