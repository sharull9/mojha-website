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
        --text: #dfdfdf;
        --radius: 1rem;
        --spacing: 1rem;
        --past: #999999;
        --current: #dfdfdf;
        --background: "";
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
        color: currentColor;
      }

      .container {
        background-color: var(--main);
        color: var(--text);
        border-radius: var(--radius);
        overflow: hidden;
      }
      .details {
        padding: var(--spacing);
        background-image: var(--background);
        background-size: cover;
        background-position: center center;
        position: relative;
        z-index: 0;
      }
      .details > * {
        position: relative;
        z-index: 10;
      }
      .details::after {
        content: "";
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        background-color: rgb(0, 0, 0, 0.2);
        z-index: 1;
      }
      .header,
      .header > div,
      .header button {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .header {
        gap: 0.5rem;
        padding: var(--spacing) 0;
      }
      .days,
      .dates {
        padding: var(--spacing);
      }

      .dates ul,
      .days ul {
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        gap: 0.5rem;
        list-style: none;
      }
      .days ul {
        list-style: none;
        justify-content: space-around !important;
        flex-wrap: wrap;
      }
      .days ul li,
      .dates ul li {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 30px;
        height: 30px;
      }
      .activeDay,
      .activeDate,
      .blur {
        background-color: var(--current);
        color: var(--main);
        border-radius: var(--radius);
        display: flex;
        justify-content: center;
        align-items: center;
      }
      .blur {
        background-color: var(--past);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="details">
        <h2><span class="date">Date</span>, <span class="day">Day</span></h2>
        <p class="month">Month</p>
      </div>
      <div class="calendar">
        <div class="header">
          <div>
            <button id="left">
              <span class="material-symbols-outlined"> chevron_left </span>
            </button>
          </div>
          <div>
            <span class="month"></span>, &nbsp;
            <span class="year"></span>
          </div>
          <div>
            <button id="right">
              <span class="material-symbols-outlined"> chevron_right </span>
            </button>
          </div>
        </div>
        <div class="body">
          <div class="days">
            <ul class="days_list">
              <li>M</li>
              <li>T</li>
              <li>W</li>
              <li>T</li>
              <li>F</li>
              <li>S</li>
              <li>S</li>
            </ul>
          </div>
          <div class="dates"></div>
        </div>
      </div>
    </div>

    <script>
      const urlParams = new URLSearchParams(location.search);
      for (const key of urlParams.keys()) {
        if (key == "bgColor") {
          document.documentElement.style.setProperty("--main", "green");
        }
      }
      for (const [key, value] of urlParams) {
        if (key == "bgColor") {
          document.documentElement.style.setProperty("--main", `#${value}`);
        }
        if (key == "currentDay") {
          document.documentElement.style.setProperty("--current", `#${value}`);
        }
        if (key == "pastDay") {
          document.documentElement.style.setProperty("--past", `#${value}`);
        }
        if (key == "text") {
          document.documentElement.style.setProperty("--text", `#${value}`);
        }
        if (key == "bgImage") {
          document.documentElement.style.setProperty(
            "--background",
            `url(${value})`
          );
        }
      }
      let today = new Date();
      document.getElementById("left").addEventListener("click", function () {
        today = new Date(
          today.getFullYear(),
          today.getMonth() - 1,
          today.getDate()
        );

        let clDays = document.querySelector(".dates");
        clDays.innerHTML = "";
        generatingUI();
        updatingDay();
        updatingDate();
      });

      document.getElementById("right").addEventListener("click", function () {
        today = new Date(
          today.getFullYear(),
          today.getMonth() + 1,
          today.getDate()
        );

        let clDays = document.querySelector(".dates");
        clDays.innerHTML = "";
        generatingUI();
        updatingDay();
        updatingDate();
      });

      function generatingUI() {
        let date = today.getDate();
        let day;
        switch (today.getDay()) {
          case 0:
            day = "Sunday";
            break;
          case 1:
            day = "Monday";
            break;
          case 2:
            day = "Tuesday";
            break;
          case 3:
            day = "Wednesday";
            break;
          case 4:
            day = "Thursday";
            break;
          case 5:
            day = "Friday";
            break;
          case 6:
            day = "Saturday";
        }
        let month = [
          "Jan",
          "Feb",
          "Mar",
          "Apr",
          "May",
          "Jun",
          "Jul",
          "Aug",
          "Sep",
          "Oct",
          "Nov",
          "Dec",
        ];
        let year = today.getFullYear();
        document.querySelectorAll(".date").forEach((el) => {
          el.innerHTML = date;
        });
        document.querySelectorAll(".day").forEach((el) => {
          el.innerHTML = day;
        });
        document.querySelectorAll(".month").forEach((el) => {
          el.innerHTML = month[today.getMonth()];
        });
        document.querySelectorAll(".year").forEach((el) => {
          el.innerHTML = year;
        });
      }
      generatingUI();
      function updatingDay() {
        let clDays = document.querySelector(".days").children[0].children;

        for (let i = 0; i < clDays.length; i++) {
          if (i == today.getDay()) {
            if (i == 0) {
              clDays[clDays.length - 1].classList.add("activeDay");
            } else {
              clDays[i - 1].classList.add("activeDay");
            }
          } else {
            clDays[i].classList.remove("activeDay");
          }
        }
      }
      updatingDay();
      function daysInMonth(iMonth, iYear) {
        return 32 - new Date(iMonth, iYear, 32).getDate();
      }
      function updatingDate() {
        let firstDay = new Date(today.getFullYear(), today.getMonth()).getDay();

        let clDates = document.querySelector(".dates");
        let ul = document.createElement("ul");
        for (
          let i = 0;
          i < daysInMonth(today.getFullYear(), today.getMonth());
          i++
        ) {
          let li = document.createElement("li");
          if (i == 0) {
            if (firstDay == 0) {
              li.style.gridColumnStart = 7;
            } else {
              li.style.gridColumnStart = firstDay;
            }
          }

          if (i + 1 == today.getDate()) {
            li.classList.add("activeDate");
          }
          if (i + 1 < today.getDate()) {
            li.classList.add("blur");
          }

          li.innerText = i + 1;
          ul.appendChild(li);
        }
        clDates.appendChild(ul);
      }
      updatingDate();
      function addingState() {
        for (
          let i = 0;
          i < daysInMonth(today.getFullYear(), today.getMonth());
          i++
        ) {
          if (i + 1 == today.getDate()) {
            li.classList.add("activeDate");
          }
          if (i + 1 < today.getDate()) {
            li.classList.add("blur");
          }
        }
      }
    </script>
  </body>
</html>
