<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Shopping Cart Summary</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../../base.css" />
      <style type="text/css">
         section {
            margin: 3rem auto;
            max-width: 48rem;
            height: 24rem;
            background-color: rgb(43, 44, 45);
            padding: 2rem;
            border-radius: 0.3rem;

            display: grid;
            grid-template-columns: repeat(4, auto);
            gap: 2rem 1rem;
            /* justify-content: space-between;
            align-content: center; */
            place-content: center space-between;
         }
         img {
            width: 4.4rem;
            border-radius: 0.3rem;
         }
         h3 {
            color: rgb(179, 234, 243);
         }
         p {
            font-size: 0.8rem;
         }
         span {
            color: #999;
            font-size: 0.8rem;
         }
         .price {
            font-size: 1.1rem;
            font-weight: bold;
         }
      </style>
   </head>
   <body>
      <section>
         <!-- Item 1 -->
         <img src="{{ asset('/images/bag.png') }}" alt="Tote Bag" />
         <div class="desc">
            <h3>Stylish Tote Bag</h3>
            <p>Brown Color Women's Tote Bag</p>
            <span>#368798</span>
         </div>
         <div>Quantity : 1</div>
         <div class="price">$129.00</div>

         <!-- Item 2 -->
         <img src="{{ asset('/images/sunglasses.png') }}" alt="Sunglasses" />
         <div class="desc">
            <h3>Sunglasses</h3>
            <p>Glasses with wooden frame</p>
            <span>#756328</span>
         </div>
         <div>Quantity : 1</div>
         <div class="price">$142.00</div>
      </section>
   </body>
</html>