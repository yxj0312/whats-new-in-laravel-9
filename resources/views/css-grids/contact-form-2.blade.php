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
            grid-template-areas:
               "name"
               "email"
               "message"
               "button";
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

            grid-area: button;
         }
         #name-block {
            grid-area: name;
         }
         #email-block {
            grid-area: email;
         }
         #message-block {
            grid-area: message;
         }
         @media screen and (min-width: 540px) {
            form {
               grid-template-columns: 1fr 1fr;
               grid-template-areas:
                  "name message"
                  "email message"
                  "button button";
            }
         }
      </style>
   </head>
   <body>
      <form>
         <div id="name-block">
            <label>Full Name</label>
            <input type="text" name="name" placeholder="Full Name" />
         </div>
         <div id="email-block">
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