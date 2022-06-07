<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Profile Card</title>
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
         .card {
            width: 17rem;
            height: 10rem;
            background-color: #24243e;
            border-radius: 0.5rem;
            padding: 1.2rem;
            margin: 12rem auto;

            display: grid;
            grid-template-columns: auto auto;
            /* justify-content: space-between;
            align-content: space-between; */
            place-content: space-between;
         }
         h3 {
            align-self: center;
         }
         img {
            width: 2.6rem;
            height: 2.6rem;
            border-radius: 1.3rem;

            justify-self: end;
         }
         a {
            color: white;
            text-decoration: none;
         }
         a > i {
            font-size: 1.6rem;
            padding-left: 0.3rem;
            line-height: 1;
         }
         small {
            align-self: end;
         }
      </style>
   </head>
   <body>
      <div class="card">
         <h3>John Doe</h3>
         <img src="{{ asset('/images/avatar.png') }}" alt="Avatar" />
         <small>+1 (234) 567-8900</small>
         <div>
            <a href="#">
               <i class="fa-brands fa-twitter-square"></i>
            </a>
            <a href="#">
               <i class="fa-brands fa-linkedin"></i>
            </a>
         </div>
      </div>
   </body>
</html>