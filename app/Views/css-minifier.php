<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">CSS Minifier | CSS Compressor</h2>
        <p class="lead lh-sm px-md-5 px-xl-7 mb-5">
          Minify your CSS using Mojha's CSS Minifier
        </p>
      </div>
    </div>
    <div class="px-3">
      <div class="form-floating output">
        <textarea
          id="text-input"
          class="form-control"
          placeholder="Textarea"
          name="text-input"
          style="height: 350px"
          required
        ></textarea>
        <label for="text-input">CSS Input</label>
      </div>
      <button
        class="btn btn-primary mx-auto mt-5"
        onclick="minifyCSS()"
        id="robottxt-generator-button"
      >
        Minify CSS
      </button>

      <div class="mt-5 position-relative">
        <div
          class="position-absolute copyToClipboard"
          style="top: 10px; right: 10px; z-index: 10"
          onclick="copy(event, 'minified-css-output')"
        >
          <span class="material-symbols-outlined text-brand">
            content_copy
          </span>
        </div>
        <div class="form-floating output resultOutput">
          <textarea
            id="minified-css-output"
            class="form-control border-brand"
            placeholder="Generated Meta Tags(output)"
            style="height: 400px"
            name="minified-css-output"
            required
          ></textarea>
          <label for="minified-css-output">Minified CSS(output):</label>
        </div>
      </div>
    </div>
  </div>

  <div
    class="container card p-3 mb-5 d-flex flex-column flex-md-row flex-wrap"
    style="gap: 0.5rem"
  >
    <div class="py-3 col-12 text-center bg-brand rounded-2">
      <h3 class="mb-0 text-white">Related tools</h3>
    </div>
    <div class="col-12 d-flex flex-wrap" style="gap: 0.5rem">
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/domain-authority-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Domain authority checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/page-authority-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Page Authority Checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/google-index-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Google Index Checker</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/meta-tag-generator.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Meta Tag Generator</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/meta-tags-analyzer.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Meta Tags Analyzer</p>
        </div>
      </a>
      <a href="" class="relatedTools">
        <div class="card p-3 d-flex align-items-center">
          <img
            src="https://sumoseotools.themeluxury.com/assets/img/tools/open-graph-checker.svg"
            alt=""
            class="w-50"
            style="object-fit: cover"
          />
          <p class="mb-0 text-center">Open Graph Checker</p>
        </div>
      </a>
    </div>
  </div>
</section>
