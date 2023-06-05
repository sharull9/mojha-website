<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Whatsapp</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&family=Poppins&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      :root {
        --light: #25d366;
        --medium: #128c7e;
        --dark: #075e54;
        --blue: #34b7f1;
        --white: #ffffff;
        --shadow: #0000002c;
        --circle: 9999px;
        --position: 20px;
        --radius: 1rem;
        --space: 1rem;
      }
      body {
        position: relative;
        font-family: "Inter", sans-serif;
        font-family: "Poppins", sans-serif;
      }
      button {
        border: none;
        background: none;
        cursor: pointer;
      }
      a {
        text-decoration: none;
        color: currentColor;
      }
      .icon {
        position: fixed;
        right: var(--position);
        bottom: var(--position);
        background-color: var(--white);
        color: var(--light);
        border-radius: var(--circle);
        box-shadow: 1px 1px 15px var(--shadow);
        width: 70px;
        height: 70px;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .icon:hover {
        background-color: #128c7e10;
      }
      .icon svg {
        width: 60% !important;
        translate: 1px -1px;
      }
      .content {
        background-color: var(--dark);
        border-top-left-radius: var(--radius);
        border-top-right-radius: var(--radius);
        color: var(--white);
        padding: calc(var(--space) / 2) var(--space);
        position: relative;
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: var(--space);
      }
      .content__image {
        border-radius: var(--circle);
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .content__image img {
        border-radius: var(--circle);
        width: 60px;
        height: 60px;
        object-fit: cover;
      }
      .content__details {
        grid-column: span 4;
        align-items: center;
        display: flex;
      }
      .close {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: none;
        color: var(--white);
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .chat {
        background: url("/widget/chat-bg.jpg");
        padding: var(--space);
        min-height: 200px;
      }

      h2 {
        font-size: 1rem;
      }
      .chat__content {
        background-color: var(--white);
        display: inline-block;
        padding: calc(var(--space) / 2);
        border-radius: calc(var(--radius) / 2);
      }
      .chat__details {
        padding-bottom: var(--space);
      }
      .chat__sender,
      .chat__time {
        font-size: 12px;
      }
      .chat__time {
        text-align: right;
      }
      .cta {
        background-color: var(--medium);
        border-bottom-left-radius: var(--radius);
        border-bottom-right-radius: var(--radius);
        padding: var(--space);
        color: var(--white);
      }
      .cta svg {
        width: 25px;
        height: 25px;
        margin-right: 0.25rem;
      }
      .cta button {
        width: 100%;
        background-color: var(--light);
        border-radius: var(--radius);
        padding: calc(var(--space) / 2) var(--space);
        display: flex;
        color: var(--white);
        justify-content: center;
        align-items: center;
        font-size: 1.5rem;
      }
      .container {
        opacity: 0;
        scale: 0;
        translate: 0 100%;
        transition: all 0.5s ease-in-out;
        transform-origin: bottom right;
        max-width: 350px;
        position: fixed;
        bottom: calc(var(--position) * 5);
        right: var(--position);
      }
      .show {
        opacity: 1;
        scale: 1;
        translate: 0 0%;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="content__image">
          <img src="/widget/profile.jpg" alt="" />
        </div>
        <div class="content__details">
          <div>
            <h2>Name</h2>
            <p style="font-size: 12px">Replies frequency</p>
          </div>
        </div>
        <button class="close">
          <span class="material-symbols-outlined"> close </span>
        </button>
      </div>
      <div class="chat">
        <div class="chat__content">
          <div class="chat__sender">Name</div>
          <div class="chat__details">Hi there 👋 How can I help you?</div>
          <div class="chat__time">11 : 25</div>
        </div>
      </div>
      <div class="cta">
        <a href="https://wa.me/9625575079">
          <button>
            <svg
              viewBox="0 0 24 24"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"
                fill="currentColor"
              />
            </svg>
            Start Chat
          </button>
        </a>
      </div>
    </div>

    <button class="icon">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M3.50002 12C3.50002 7.30558 7.3056 3.5 12 3.5C16.6944 3.5 20.5 7.30558 20.5 12C20.5 16.6944 16.6944 20.5 12 20.5C10.3278 20.5 8.77127 20.0182 7.45798 19.1861C7.21357 19.0313 6.91408 18.9899 6.63684 19.0726L3.75769 19.9319L4.84173 17.3953C4.96986 17.0955 4.94379 16.7521 4.77187 16.4751C3.9657 15.176 3.50002 13.6439 3.50002 12ZM12 1.5C6.20103 1.5 1.50002 6.20101 1.50002 12C1.50002 13.8381 1.97316 15.5683 2.80465 17.0727L1.08047 21.107C0.928048 21.4637 0.99561 21.8763 1.25382 22.1657C1.51203 22.4552 1.91432 22.5692 2.28599 22.4582L6.78541 21.1155C8.32245 21.9965 10.1037 22.5 12 22.5C17.799 22.5 22.5 17.799 22.5 12C22.5 6.20101 17.799 1.5 12 1.5ZM14.2925 14.1824L12.9783 15.1081C12.3628 14.7575 11.6823 14.2681 10.9997 13.5855C10.2901 12.8759 9.76402 12.1433 9.37612 11.4713L10.2113 10.7624C10.5697 10.4582 10.6678 9.94533 10.447 9.53028L9.38284 7.53028C9.23954 7.26097 8.98116 7.0718 8.68115 7.01654C8.38113 6.96129 8.07231 7.046 7.84247 7.24659L7.52696 7.52195C6.76823 8.18414 6.3195 9.2723 6.69141 10.3741C7.07698 11.5163 7.89983 13.314 9.58552 14.9997C11.3991 16.8133 13.2413 17.5275 14.3186 17.8049C15.1866 18.0283 16.008 17.7288 16.5868 17.2572L17.1783 16.7752C17.4313 16.5691 17.5678 16.2524 17.544 15.9269C17.5201 15.6014 17.3389 15.308 17.0585 15.1409L15.3802 14.1409C15.0412 13.939 14.6152 13.9552 14.2925 14.1824Z"
          fill="currentColor"
        />
      </svg>
    </button>

    <script>
      let btn = document.querySelector(".icon");
      let close = document.querySelector(".close");
      let container = document.querySelector(".container");
      btn.addEventListener("click", (e) => {
        container.classList.toggle("show");
      });
      close.addEventListener("click", (e) => {
        container.classList.remove("show");
      });
    </script>
  </body>
</html>
