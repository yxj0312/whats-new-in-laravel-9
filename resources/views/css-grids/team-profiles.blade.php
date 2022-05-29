<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Team Profiles</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
      <style type="text/css">
         section {
            background-color: #232b38;
            padding: 2.4rem;
            margin: 8rem auto;
            max-width: 54rem;
            border-radius: 4px;
            height: 16rem;

            display: grid;
            grid-template-columns: repeat(3, 1fr) auto;
            /* justify-items: start;
            align-items: end; */
            place-items: end start;
         }
         section div {
            padding-bottom: 0.8rem;
            border-bottom: 2px solid #317e7c;
         }
         img {
            height: 4rem;
            border-radius: 2rem;
            border: 3px solid transparent;
            outline: 1px solid #317e7c;
         }
         h3 {
            font-weight: normal;
            margin: 0.3rem 0 0.1rem;
         }
         p {
            font-size: 0.7rem;
            opacity: 0.8;
         }
      </style>
   </head>
   <body>
      <section>
         <div>
            <img src="{{ asset('images/tavell-monroe.png') }}" alt="" height="48" />
            <h3>Tavell Monroe</h2>
            <p>Doloribus atque pariatur</p>
         </div>
         <div>
            <img src="{{ asset('/images/alexa-kardi.png') }}" alt="" height="48" />
            <h3>Alexa Kardi</h3>
            <p>Minima fugit</p>
         </div>
         <div>
            <img src="{{ asset('/images/matt-cooper.png') }}" alt="" height="48" />
            <h3>Matt Cooper</h3>
            <p>Iure, culpa fugiat itae</p>
         </div>
         <a class="btn" href="#">
            Join our team
         </a>
      </section>
   </body>
</html>