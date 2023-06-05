<section class="container mb-5">
  <div class="card p-3">
    <div class="w-100 d-flex">
      <div
        class="card rounded-pill p-2 d-flex justify-content-center align-items-center"
      >
        <span class="material-symbols-outlined" style="color: var(--redish)">
          calendar_month
        </span>
      </div>
      <div class="d-flex align-items-center">
        <h1 class="ms-2 mb-0">Calendar Widget</h1>
      </div>
    </div>
    <hr class="double my-4" />
    <div class="d-flex">
      <div class="col-md-6">
        <iframe
          src="http://localhost/calendar"
          scrolling="no"
          width="100%"
          height="620"
          frameborder="0"
          style="max-width: 500px"
          id="output"
        ></iframe>
        <div>
          <button id="dark_variant">Dark Mode</button>
          <button id="pic_variant">with Picture</button>
        </div>
      </div>
      <div class="col-md-6 p-3">
        <h2>Calendar Widget</h2>
        <p>
          The Calendar widget is a free widget that you can embed into your
          website and blog. You can customise the colour and fonts of this
          calendar widget. You can change the month and year from the dropdown
          to view the calendar at different times. You can use the embed code in
          your WordPress sidebar widget easily.
        </p>
        <p>
          The Calendar widget is a free widget that you can embed into your
          website and blog. You can customise the colour and fonts of this
          calendar widget. You can change the month and year from the dropdown
          to view the calendar at different times. You can use the embed code in
          your WordPress sidebar widget easily.
        </p>
        <div>
          <h2>Embed Code</h2>
          <div class="position-relative">
            <div
              class="position-absolute copyToClipboard"
              style="top: 10px; right: 10px; z-index: 10"
              onclick="copy(event, 'embedCode')"
            >
              <span class="material-symbols-outlined text-brand">
                content_copy
              </span>
            </div>
            <div class="form-floating mb-4 resultOutput">
              <textarea
                id="embedCode"
                class="form-control"
                placeholder="Textarea"
                style="height: 105px"
                disabled
              >
<div align="center"><iframe src="http://localhost/calendar" scrolling="no" width="100%" height="620" frameborder="0"></iframe></div></textarea
              >
              <label for="textareaExample">Code</label>
            </div>
            <!-- /.form-floating -->
          </div>
        </div>
        <div>
          <a class="btn btn-primary" href="/edit">customise</a>
          <button
            class="btn btn-primary material-symbols-outlined text-white"
            onclick="copy(event, 'embedCode')"
          >
            content_copy
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  document.getElementById("pic_variant").addEventListener("click", function () {
    document
      .getElementById("output")
      .setAttribute(
        "src",
        "http://localhost/calendar?bgColor=080625&currentDay=dfdfdf&pastDay=999999&text=ffffff&bgImage=https://images.unsplash.com/photo-1685728399140-5650bbcfc015?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60"
      );
    document.getElementById(
      "embedCode"
    ).innerText = `<div align="center"><iframe src="http://localhost/calendar?bgColor=080625&currentDay=dfdfdf&pastDay=999999&text=ffffff&bgImage=https://images.unsplash.com/photo-1685728399140-5650bbcfc015?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw5fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=60" scrolling="no" width="100%" height="620" frameborder="0"></iframe></div>`;
  });
  document
    .getElementById("dark_variant")
    .addEventListener("click", function () {
      document
        .getElementById("output")
        .setAttribute("src", "http://localhost/calendar");
      document.getElementById(
        "embedCode"
      ).innerText = `<div align="center"><iframe src="http://localhost/calendar" scrolling="no" width="100%" height="620" frameborder="0"></iframe></div>`;
    });
</script>
