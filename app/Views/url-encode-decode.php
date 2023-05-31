<section class="container bg-gradient-primary">
  <div class="container py-5 py-md-10 card mb-5">
    <div class="row text-center">
      <div
        class="col-lg-9 col-xxl-7 mx-auto"
        data-cues="zoomIn"
        data-group="welcome"
        data-interval="-200"
      >
        <h2 class="display-1">URL encode & URL decode tool</h2>
      </div>
    </div>
  </div>
  <div class="card url-layout p-3 mb-5">
    <div>
      <h3 class="mb-0">URL Encode</h3>
    </div>
    <div class="form-floating output">
      <textarea
        id="data-to-be-encoded"
        class="form-control border-brand"
        placeholder="Data to be URL Encoded"
        style="height: 150px"
        name="data-to-be-encoded"
        required
      ></textarea>
      <label for="data-to-be-encoded">Data to be URL Encoded</label>
    </div>
    <div class="form-floating output position-relative">
      <div
        class="position-absolute copyToClipboard"
        style="top: 10px; right: 10px; z-index: 10"
        onclick="copy(event, 'encoded-data')"
      >
        <span class="material-symbols-outlined text-brand"> content_copy </span>
      </div>
      <textarea
        id="encoded-data"
        class="form-control border-brand"
        placeholder="URL Encoded Data"
        style="height: 150px"
        name="encoded-data"
        required
      ></textarea>
      <label for="encoded-data">URL Encoded Data</label>
    </div>
    <button class="btn btn-primary" onclick="encodeURL();">Encode URL</button>
  </div>
  <div class="card url-layout p-3 mb-5">
    <div>
      <h3 class="mb-0">URL Decode</h3>
    </div>
    <div class="form-floating output">
      <textarea
        id="data-to-be-decoded"
        class="form-control border-brand"
        placeholder="Data to be URL Decoded"
        style="height: 150px"
        name="data-to-be-decoded"
        required
      ></textarea>
      <label for="data-to-be-decoded">Data to be URL Decoded</label>
    </div>
    <div class="form-floating output position-relative">
      <div
        class="position-absolute copyToClipboard"
        style="top: 10px; right: 10px; z-index: 10"
        onclick="copy(event, 'decoded-data')"
      >
        <span class="material-symbols-outlined text-brand"> content_copy </span>
      </div>
      <textarea
        id="decoded-data"
        class="form-control border-brand"
        placeholder="URL Decoded Data"
        style="height: 150px"
        name="decoded-data"
        required
      ></textarea>
      <label for="decoded-data">URL Decoded Data</label>
    </div>
    <button class="btn btn-primary" onclick="decodeURL();">Decode URL</button>
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
