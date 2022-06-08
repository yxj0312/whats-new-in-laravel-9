<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Contact Form</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link rel="stylesheet" href="../../css/base.css" />
      <style type="text/css">
         form {
            max-width: 36rem;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #24243e;

            display: grid;
            gap: 1.5rem;
         }
         button {
            display: inline-block;
            padding: 0.6rem 2rem;
            background-color: #ff5574;
            border: 1px solid #ff5574;
            border-radius: 5px;
            color: #ffffff;
            font-weight: 600;
            font-size: 0.8rem;
            cursor: pointer;
         }
         @media screen and (min-width: 540px) {
            form {
               grid-template-columns: 1fr 1fr;
            }
            #message-block {
               grid-column: 2;
               grid-row: 1 / span 2;
            }
            button {
               grid-column-start: 1;
               grid-column-end: -1;
            }
         }
      </style>
   </head>
   <body>
      <form>
         <div>
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Full Name" />
         </div>
         <div>
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Email Address" />
         </div>
         <div id="message-block">
            <label>Message</label>
            <textarea name="message" placeholder="Your Message" rows="7"></textarea>
         </div>
         <button type="submit">Send a Message</button>
      </form>
   </body>
</html>