<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Restaurant Listing</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../../css/base.css" />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
         integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
         crossorigin="anonymous"
         referrerpolicy="no-referrer"
      />
      <style type="text/css">
         section {
            background-color: #32343c;
            padding: 1.5rem;
            max-width: 60rem;
            margin: 6rem auto;

            display: grid;
            grid-template-columns: max-content auto auto fit-content(100%);
            gap: 1.5rem;
            align-items: center;
         }
         img {
            display: block;
            width: 8rem;
            height: 6rem;
            object-fit: cover;
         }
         span {
            font-size: 0.8rem;
            opacity: 0.7;
         }
         ul {
            list-style-type: none;
            padding: 0;
            line-height: 1.7;
         }
         i.fa {
            color: #16a34a;
            font-size: 0.9rem;
            padding-right: 0.2rem;
         }
      </style>
   </head>
   <body>
      <section>
         <img
            src="https://images.pexels.com/photos/5745991/pexels-photo-5745991.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=200"
            alt=""
         />
         <div class="info">
            <h3>Cheese & Grill Restaurant</h3>
            <span>St. Marks Street</span>
         </div>
         <ul>
            <li><i class="fa fa-check" aria-hidden="true"></i> Outdoor Seating</li>
            <li><i class="fa fa-check" aria-hidden="true"></i> Private Parking</li>
         </ul>
         <button class="btn-book-table">Book a Table</button>
      </section>
   </body>
</html>