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
        --main: #080625;
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
        background: var(--shadow);
        width: 100%;
        height: 700px;
      }
      .wrapper {
        height: 100%;
      }
      .container {
        width: 100%;
        height: 100%;
        display: grid;
        grid-template-columns: 3fr 1fr;
        padding: var(--space);
      }
      button {
        border: none;
        background: none;
        cursor: pointer;
      }
      input[type="color"] {
        background: none;
        border: none;
      }
      input[type="text"] {
        background: none;
        padding: 0.5rem;
        border: 1px solid black;
        border-radius: calc(var(--radius) / 2);
      }
      .edit-details {
        display: flex;
        flex-direction: column;
        gap: calc(var(--space) / 2);
        border-radius: var(--radius);
        padding: calc(var(--space) / 2);
      }
      .edit-details > div {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        padding: var(--space);
      }
      .edit-details > div > label {
        grid-column: span 4;
      }
      .preview {
        padding: var(--space);
        background-color: var(--shadow);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: var(--radius);
      }
      .wrapper {
        display: flex;
        flex-direction: column;
        background-color: var(--white);
        border-radius: var(--radius);
      }
      .header {
        padding: var(--space);
        display: flex;
        justify-content: space-between;
      }
      .card {
        background-color: var(--white);
        box-shadow: 1px 1px 15px var(--shadow);
        border-radius: var(--radius);
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <div>
          <h2>Edit</h2>
        </div>
        <div>
          <button>
            <span class="material-symbols-outlined"> close </span>
          </button>
        </div>
      </div>
      <div class="container">
        <div class="preview">
          <iframe
            id="preview"
            src="http://localhost/calendar"
            frameborder="0"
            width="350px"
            height="450px"
          ></iframe>
        </div>
        <div class="edit-details">
          <div class="card">
            <label for="bgColor">Background Color</label>
            <input type="color" id="bgColor" value="#080625" />
          </div>
          <div class="card">
            <label for="currentDay">Current Date Color</label>
            <input type="color" id="currentDay" value="#dfdfdf" />
          </div>
          <div class="card">
            <label for="pastDay">Past Date Color</label>
            <input type="color" id="pastDay" value="#999999" />
          </div>
          <div class="card">
            <label for="text">Text Color</label>
            <input type="color" id="text" value="#dfdfdf" />
          </div>
          <div class="card">
            <label for="text">widget width</label>
            <input type="text" id="width" placeholder="width: 1px, 10%" />
          </div>
          <div class="card">
            <label for="text">widget height</label>
            <input type="text" id="height" placeholder="height: 1px, 10%" />
          </div>
          <div class="card">
            <label for="bgImage">Background Image</label>
            <input
              type="text"
              id="bgImage"
              placeholder="Url: http://unslash.com/......"
            />
          </div>
          <button onclick="addChange()">Apply</button>
        </div>
      </div>
    </div>

    <script>
      let bgColor = document.getElementById("bgColor").value.replace("#", "");
      let current = document
        .getElementById("currentDay")
        .value.replace("#", "");
      let past = document.getElementById("pastDay").value.replace("#", "");
      let text = document.getElementById("text").value.replace("#", "");
      let bgImage = document.getElementById("bgImage").value;

      document.getElementById("width").addEventListener("change", () => {
        document
          .getElementById("preview")
          .setAttribute("width", document.getElementById("width").value);
      });
      document.getElementById("height").addEventListener("change", () => {
        document
          .getElementById("preview")
          .setAttribute("height", document.getElementById("height").value);
      });

      document
        .getElementById("bgColor")
        .addEventListener("change", function () {
          bgColor = document.getElementById("bgColor").value.replace("#", "");
          document
            .getElementById("preview")
            .setAttribute(
              "src",
              `http://localhost/calendar?bgColor=${bgColor}&currentDay=${current}&pastDay=${past}&text=${text}&bgImage=${bgImage}`
            );
        });
      document
        .getElementById("currentDay")
        .addEventListener("change", function () {
          current = document
            .getElementById("currentDay")
            .value.replace("#", "");
          document
            .getElementById("preview")
            .setAttribute(
              "src",
              `http://localhost/calendar?bgColor=${bgColor}&currentDay=${current}&pastDay=${past}&text=${text}&bgImage=${bgImage}`
            );
        });
      document
        .getElementById("pastDay")
        .addEventListener("change", function () {
          past = document.getElementById("pastDay").value.replace("#", "");
          document
            .getElementById("preview")
            .setAttribute(
              "src",
              `http://localhost/calendar?bgColor=${bgColor}&currentDay=${current}&pastDay=${past}&text=${text}&bgImage=${bgImage}`
            );
        });
      document.getElementById("text").addEventListener("change", function () {
        text = document.getElementById("text").value.replace("#", "");
        document
          .getElementById("preview")
          .setAttribute(
            "src",
            `http://localhost/calendar?bgColor=${bgColor}&currentDay=${current}&pastDay=${past}&text=${text}&bgImage=${bgImage}`
          );
      });
      document.getElementById("text").addEventListener("change", function () {
        bgImage = document.getElementById("bgImage").value;
        document
          .getElementById("preview")
          .setAttribute(
            "src",
            `http://localhost/calendar?bgColor=${bgColor}&currentDay=${current}&pastDay=${past}&text=${text}&bgImage=${bgImage}`
          );
      });

      function addChange() {
        bgColor = document.getElementById("bgColor").value.replace("#", "");
        current = document.getElementById("currentDay").value.replace("#", "");
        past = document.getElementById("pastDay").value.replace("#", "");
        text = document.getElementById("text").value.replace("#", "");
        bgImage = document.getElementById("bgImage").value;
        document
          .getElementById("preview")
          .setAttribute(
            "src",
            `http://localhost/calendar?bgColor=${bgColor}&currentDay=${current}&pastDay=${past}&text=${text}&bgImage=${bgImage}`
          );
      }
    </script>
  </body>
</html>
